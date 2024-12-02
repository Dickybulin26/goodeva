<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use App\Artikel;
use App\EmailSubcribed;
use App\Kategori;
use Helper;
use Carbon\Carbon;
use DB;
use Session;
use Redirect;



class EvamediaController extends Controller

{

    //

    public function emailDataCall(Request $request)
    {
        $token = $request->get('token');
        $email = $request->get('email');

        Mail::send('email-reset-call', ['token' => $token], function ($message) use ($request, $email) {
            $message->subject('Reset Password');
            $message->from('galaxycode.sendmail@gmail.com', 'Omsetku Reset Password');
            $message->to($email);
        });
    }

    public function home($kategori = null)
    {

        $artikel_baru = DB::table('artikels')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
            ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
            ->limit(6)
            ->orderBy('publish_date', 'desc')
            ->orderBy('publish_time', 'desc')
            // ->where('created_by', 44)
            ->where('status', 3)
            ->where(function ($query) use ($kategori) {
                if ($kategori != "") {
                    $query->where('kategoris.nama', $kategori);
                }
            })
            ->get();


        // Top News / Paling Banyak View
        $top_news = DB::table('artikels')
            ->orderBy('click', 'desc')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->limit(6)
            ->whereNotIn('click', ['null'])
            ->where('status', 3)
            ->select('artikels.*', 'kategoris.nama as nama_kategori')
            ->get();

        //DATA KATEGORI
        $data_kategori = Kategori::get();
        $kat_update_artikel = [];
        $kategori = [];
        $no = 0;
        $tampung_kategori = "";
        foreach ($data_kategori as $key => $value) {


            // Rekomenasi News / Ter-update di detail kategorinya
            $update_artikel = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->where('status', 3)
                ->where('kategori_artikel', $value->id)
                ->limit(5)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            $kategori[]['nama'] = $value->name;
            $kategori[]['jumlah_artikel'] = count($update_artikel);

            foreach ($update_artikel as $key => $artikel) {
                $kat_update_artikel[$no]['judul'] = $artikel->judul;
                $kat_update_artikel[$no]['foto_cover'] = $artikel->foto_cover;
                $kat_update_artikel[$no]['slug_url'] = $artikel->slug_url;
                $kat_update_artikel[$no]['sumber_fcover'] = $artikel->sumber_fcover;
                $kat_update_artikel[$no]['deskripsi'] = $artikel->deskripsi;
                $kat_update_artikel[$no]['publish_date'] = $artikel->publish_date;
                $kat_update_artikel[$no]['nama_kategori'] = $artikel->nama_kategori;
                if ($tampung_kategori != $value->id) {
                    $kat_update_artikel[$no]['tipe'] = 'utama';
                } else {
                    $kat_update_artikel[$no]['tipe'] = 'normal';
                }

                $no++;
            }

            $tampung_kategori = $value->id;
        }

        return view('evamedia.home', compact('artikel_baru', 'data_kategori', 'kategori', 'kat_update_artikel', 'top_news'));
    }

    public function detailKategori($kategori = null)
    {

        $artikel_baru = DB::table('artikels')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
            ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
            ->limit(11)
            ->orderBy('publish_date', 'desc')
            ->orderBy('publish_time', 'desc')
            // ->where('created_by', 44)
            ->where('status', 3)
            ->where(function ($query) use ($kategori) {
                if ($kategori != "") {
                    $query->where('kategoris.nama', $kategori);
                }
            })
            ->get();


        // Top News / Paling Banyak View
        $top_news = DB::table('artikels')
            ->orderBy('click', 'desc')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->limit(6)
            ->whereNotIn('click', ['null'])
            ->where(function ($query) use ($kategori) {
                if ($kategori != "") {
                    $query->where('kategoris.nama', $kategori);
                }
            })
            ->where('status', 3)
            ->select('artikels.*', 'kategoris.nama as nama_kategori')
            ->get();



        return view('evamedia.detail_kategori', compact('artikel_baru', 'top_news', 'kategori'));
    }


    public function loadData(Request $request, $kategori = null)
    {

        $kate = DB::table('kategoris')->where('nama', $kategori)->first();
        if ($kate) {
            $kategori = $kate->nama;
        }
        $date = $request->dates_data;
        $time = $request->times_data;
        $id = $request->id;
        // dd($kategori);
        // if ($request->ajax()) {
        if ($kategori != "") {
            $limit = 11;
        } else {
            $limit = 6;
        }

        $data_yg_publish_sama_tidak_masuk = [];
        $datetime = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));
        //  $datetime = date('Y-m-d H:i:59', strtotime('-5 months',$date.' '.$time));

        if ($time != "" && $date != "" && $id != "") {

            //UNTUK TIDAK DIIKUTSERTAKAN DARI DATA PUBLISH TANGGAL DAN JAM YG SAMA (YANG SUDAH DITAMPILKAN)
            $data_sama_publish = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.id')
                // ->where('created_by', 44)
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                // ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('publish_date', $date)
                ->where('publish_time', $time)
                ->where('artikels.id', '>=', $id)
                ->get();


            foreach ($data_sama_publish as $key => $value) {
                $data_yg_publish_sama_tidak_masuk[] = $value->id;
            }



            $artikel_more = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                // ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id')
                ->limit(6)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->where('publish_time', '!=', '')
                ->where('publish_date', '!=', '')
                ->orderBy('artikels.id', 'desc')
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                // ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('artikels.publish_at', '<=', $datetime)
                ->whereNotIn('artikels.id', $data_yg_publish_sama_tidak_masuk)
                ->get();

            $limit = 6;
        } else {



            $artikel_more = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->limit($limit)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where('status', 3)
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                // ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                // ->latest('artikels.id')
                ->get();
        }

        $output = '';
        $output_mobile = '';
        $last_id = '';

        $no = 0;
        if (!$artikel_more->isEmpty()) {
            foreach ($artikel_more as $art_baru) {
                $judul = $art_baru->judul;
                $hasil_kata = strlen($judul);
                if ($hasil_kata >= 80) {
                    $substing = substr(strip_tags($judul), 0, 79);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                    $jdls = $judul_berita_potong;
                } else {
                    $jdls = $judul;
                }

                $deskripsi = $art_baru->deskripsi;
                $hasil_kata = strlen($deskripsi);
                if ($hasil_kata >= 86) {
                    $cut_desk = substr(strip_tags($deskripsi), 0, 85);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $desk_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $cut_desk);
                    $desk = $desk_berita_potong;
                } else {
                    $desk = $deskripsi;
                }

                // $date = Carbon::parse($art_baru->created_at);
                // $str = $date->diffForHumans(Carbon::now());
                $publish_date = Helper::tanggal_indo($art_baru->publish_date);
                $no++;

                if ($no == 1 && $time == "" && $date == "" && $id == "") {
                    $output .= '   <div class="row mx-0">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 px-xs-0">
                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100" >
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4 mb-xs-1rem">
                            <ul class="list-date-article list-inline">
                                <li class="list-inline-item">
                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                        <span class="text-kategori">' . $art_baru->nama_kategori . '</span>
                                    </a>
                                </li>
                                <li class="list-date list-inline-item">
                                    <span class="color-date date--artikel">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                <div class="title-artikel">
                                    ' . $jdls . '
                                </div>
                            </a>
                        </div>
                    </div>';

                    if (count($artikel_more) > 1) {
                        $output .= '<div class="row mx-0 mt-5 mb-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="pull-left">
                                    <span class="text-recent-news">Recent News</span>
                                </div>
                                <div class="pull-right hidden">
                                     <a href="#" class="see-more-action">See More</a>
                                 </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                <div class="line--vertical">
                                    &nbsp;
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    $output .= '
                            <div class="row mx-0 mt-3">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pr-0">
                                    <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                        <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100 mt-1rem mt-xs-05 img-list-article" >
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-md-8 pl-0 pl-sm-1">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul class="list-date-article list-inline">
                                                <li class="list-inline-item">
                                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                                        <span class="text-kategori list-article-text">' . $art_baru->nama_kategori . '</span>
                                                    </a>
                                                </li>
                                                <li class="list-date list-bullet-article list-inline-item">
                                                    <span class="color-date date--artikel list-article-text">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-xs-list-artikel">
                                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                                <div class="title-artikel list-title-artikel">
                                                    ' . $jdls . '
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 desktop-show">
                                            <div class="desc-artikel">
                                            ' . $desk . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                }


                $last_id = $art_baru->id;
                $last_date = $art_baru->publish_date;
                $last_time = $art_baru->publish_time;

                if ($no == $limit) {
                    break;
                }
            }
            $output_mobile = $output;
            $output .= '
                   <div class="row mx-0 cont-row pbottom--20 ptop--30 desktop-show" id="loads">
                       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="button" class="btn  btn-load-more" id="load_more_button" name="load_more_btn" data-loaddate="' . $last_date . '" data-loadtime="' . $last_time . '" data-loadid="' . $last_id . '">View More..</button>
                       </div>
                  </div>
                   ';
            $output_mobile .= '
                   <div class="row mx-0 cont-row pbottom--20 ptop--30 desktop-show" id="loads_mobile">
                       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="button" class="btn  btn-load-more" id="load_more_button" name="load_more_btn" data-loaddate="' . $last_date . '" data-loadtime="' . $last_time . '" data-loadid="' . $last_id . '">View More..</button>
                       </div>
                  </div>
                   ';
        } else {
            //NOTFOUND
            $output .= '
                   <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads">
                       <div class="col-xs-12 col-sm-12  col-md-12 text-center">
                            <button type="button" class="btn btn-load-more" name="load_more_btn">Data Not Found</button>
                       </div>
                  </div>
                   ';
            //NOTFOUND
            $output_mobile .= '
                   <div class="row cont-row pbottom--20 ptop--30" id="loads">
                        <div class="col-xs-12 col-sm-12  col-md-12 text-center">
                                <button type="button" class="btn btn-load-more" name="load_more_btn">Data Not Found</button>
                        </div>
                    </div>
                   ';
        }
        return response()->json(['output' => $output, 'output_mobile' => $output_mobile, 'inputan' => $datetime]);
    }

    public function loadDataMobile(Request $request, $kategori = null)
    {

        $kate = DB::table('kategoris')->where('nama', $kategori)->first();
        if ($kate) {
            $kategori = $kate->nama;
        }
        $date = $request->dates_data;
        $time = $request->times_data;
        $id = $request->id;
        // dd($kategori);
        // if ($request->ajax()) {

        $limit = 6;

        $datetime = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));

        if ($time != "" && $date != "" && $id != "") {

            //UNTUK TIDAK DIIKUTSERTAKAN DARI DATA PUBLISH TANGGAL DAN JAM YG SAMA (YANG SUDAH DITAMPILKAN)
            $data_sama_publish = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.id')
                // ->where('created_by', 44)
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('publish_date', $date)
                ->where('publish_time', $time)
                ->where('artikels.id', '>=', $id)->get();

            $data_yg_publish_sama_tidak_masuk = [];
            foreach ($data_sama_publish as $key => $value) {
                $data_yg_publish_sama_tidak_masuk[] = $value->id;
            }


            $artikel_more_next = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->limit(6)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('artikels.publish_at', '<=', $datetime)
                ->whereNotIn('artikels.id', $data_yg_publish_sama_tidak_masuk)
                ->get();

            $limit = 6;
        } else {



            $artikel_more = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->limit($limit)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where('status', 3)
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                // ->latest('artikels.id')
                ->get();

            $artikel_more_next = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->skip($limit)
                ->limit($limit)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where('status', 3)
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                // ->latest('artikels.id')
                ->get();
        }

        $output = '';
        $output_bawah = '';
        $last_id = '';

        $no = 0;
        if (!$artikel_more->isEmpty()) {
            foreach ($artikel_more as $art_baru) {
                $judul = $art_baru->judul;
                $hasil_kata = strlen($judul);
                if ($hasil_kata >= 80) {
                    $substing = substr(strip_tags($judul), 0, 79);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                    $jdls = $judul_berita_potong;
                } else {
                    $jdls = $judul;
                }

                $deskripsi = $art_baru->deskripsi;
                $hasil_kata = strlen($deskripsi);
                if ($hasil_kata >= 86) {
                    $cut_desk = substr(strip_tags($deskripsi), 0, 85);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $desk_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $cut_desk);
                    $desk = $desk_berita_potong;
                } else {
                    $desk = $deskripsi;
                }

                $date = Carbon::parse($art_baru->created_at);
                $str = $date->diffForHumans(Carbon::now());
                $publish_date = Helper::tanggal_indo($art_baru->publish_date);
                $no++;

                if ($no == 1) {
                    $output .= '   <div class="row mx-0">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 px-xs-0">
                                <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                    <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100" >
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4 mb-xs-1rem">
                                <ul class="list-date-article list-inline">
                                    <li class="list-inline-item">
                                        <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                            <span class="text-kategori">' . $art_baru->nama_kategori . '</span>
                                        </a>
                                    </li>
                                    <li class="list-date list-inline-item">
                                        <span class="color-date date--artikel">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                    <div class="title-artikel">
                                        ' . $jdls . '
                                    </div>
                                </a>
                            </div>
                        </div>';
                    if (count($artikel_more) > 1) {
                        $output .= '<div class="row mx-0 mt-5 mb-4">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="pull-left">
                                            <span class="text-recent-news">Recent News</span>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                        <div class="line--vertical">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>';
                    }
                } else {
                    $output .= '
                            <div class="row mx-0 mt-3">
                                <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5 pr-0">
                                    <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                        <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100 mt-1rem mt-xs-05" >
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-7 col-md-7">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul class="list-date-article list-inline">
                                                <li class="list-inline-item">
                                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                                        <span class="text-kategori list-article-text">' . $art_baru->nama_kategori . '</span>
                                                    </a>
                                                </li>
                                                <li class="list-date list-bullet-article list-inline-item">
                                                    <span class="color-date date--artikel list-article-text">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-xs-list-artikel">
                                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                                <div class="title-artikel list-title-artikel">
                                                    ' . $jdls . '
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 desktop-show">
                                            <div class="desc-artikel">
                                            ' . $desk . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                }


                $last_id = $art_baru->id;
                $last_date = $art_baru->publish_date;
                $last_time = $art_baru->publish_time;

                if ($no == $limit) {
                    break;
                }
            }
        } else {
            //NOTFOUND
            $output .= '
                   <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads">
                       <div class="col-xs-12 col-sm-12  col-md-12 text-center">
                            <button type="button" class="btn btn-load-more" name="load_more_btn">Data Not Found</button>
                       </div>
                  </div>
                   ';
        }
        $no = 0;
        if (!$artikel_more_next->isEmpty()) {
            foreach ($artikel_more_next as $art_baru) {
                $judul = $art_baru->judul;
                $hasil_kata = strlen($judul);
                if ($hasil_kata >= 80) {
                    $substing = substr(strip_tags($judul), 0, 79);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                    $jdls = $judul_berita_potong;
                } else {
                    $jdls = $judul;
                }

                $deskripsi = $art_baru->deskripsi;
                $hasil_kata = strlen($deskripsi);
                if ($hasil_kata >= 86) {
                    $cut_desk = substr(strip_tags($deskripsi), 0, 85);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $desk_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $cut_desk);
                    $desk = $desk_berita_potong;
                } else {
                    $desk = $deskripsi;
                }

                $date = Carbon::parse($art_baru->created_at);
                $str = $date->diffForHumans(Carbon::now());
                $publish_date = Helper::tanggal_indo($art_baru->publish_date);
                $no++;

                if ($no == 1) {
                    $output_bawah .= '<div class="row mx-0 mt-5 mb-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="pull-left">
                                    <span class="text-recent-news">Recent News</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                <div class="line--vertical">
                                    &nbsp;
                                </div>
                            </div>
                        </div>';
                }

                $output_bawah .= '
                            <div class="row mx-0 mt-3">
                                <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5 pr-sm-0">
                                    <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                        <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100 mt-1rem mt-xs-05" >
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-7 col-md-7">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul class="list-date-article list-inline">
                                                <li class="list-inline-item">
                                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                                        <span class="text-kategori list-article-text">' . $art_baru->nama_kategori . '</span>
                                                    </a>
                                                </li>
                                                <li class="list-date list-bullet-article list-inline-item">
                                                    <span class="color-date date--artikel list-article-text">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-xs-list-artikel">
                                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                                <div class="title-artikel list-title-artikel">
                                                    ' . $jdls . '
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 desktop-show">
                                            <div class="desc-artikel">
                                            ' . $desk . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';



                $last_id = $art_baru->id;
                $last_date = $art_baru->publish_date;
                $last_time = $art_baru->publish_time;

                if ($no == $limit) {
                    break;
                }
            }
            $output_bawah .= '
                   <div class="row mx-0 cont-row pbottom--20 ptop--30 desktop-show" id="loads">
                       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="button" class="btn  btn-load-more" id="load_more_button" name="load_more_btn" data-loaddate="' . $last_date . '" data-loadtime="' . $last_time . '" data-loadid="' . $last_id . '">View More..</button>
                       </div>
                  </div>
                   ';
        } else {
            $output_bawah .= '';
        }
        return response()->json(['output' => $output, 'output_bawah' => $output_bawah]);
    }

    public function loadDataKategori(Request $request, $kategori = null)
    {

        $date = $request->dates_data;
        $time = $request->times_data;
        $id = $request->id;
        $kategori = $request->kategori;
        $tipe = $request->tipe;

        $output = '';
        $output_mobile = '';
        $last_id = '';
        $no = 0;

        $datetime = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));

        if ($time != "" && $date != "" && $id != "") {

            //UNTUK TIDAK DIIKUTSERTAKAN DARI DATA PUBLISH TANGGAL DAN JAM YG SAMA (YANG SUDAH DITAMPILKAN)
            $data_sama_publish = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.id')
                // ->where('created_by', 44)
                ->where(function ($query) use ($kategori) {
                    $query->where('kategoris.id', $kategori);
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('publish_date', $date)
                ->where('publish_time', $time)
                ->where('artikels.id', '>=', $id)->get();

            $data_yg_publish_sama_tidak_masuk = [];
            foreach ($data_sama_publish as $key => $value) {
                $data_yg_publish_sama_tidak_masuk[] = $value->id;
            }


            $artikel_more = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->limit(5)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where(function ($query) use ($kategori) {
                    if ($kategori != "") {
                        $query->where('kategoris.nama', $kategori);
                    }
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                ->where('artikels.publish_at', '<=', $datetime)
                ->whereNotIn('artikels.id', $data_yg_publish_sama_tidak_masuk)
                ->get();
        } else {


            $artikel_more = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
                ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
                ->limit(11)
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->orderBy('artikels.id', 'desc')
                ->where('status', 3)
                ->where(function ($query) use ($kategori) {
                    $query->where('kategoris.id', $kategori);
                })
                ->whereBetween('artikels.publish_date', [date('Y-m-d', strtotime('-5 month')), date('Y-m-d')])
                ->where('artikels.status', 3)
                // ->latest('artikels.id')
                ->get();
        }


        if (!$artikel_more->isEmpty()) {
            foreach ($artikel_more as $art_baru) {
                $judul = $art_baru->judul;
                $hasil_kata = strlen($judul);
                if ($hasil_kata >= 80) {
                    $substing = substr(strip_tags($judul), 0, 79);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                    $jdls = $judul_berita_potong;
                } else {
                    $jdls = $judul;
                }

                $deskripsi = $art_baru->deskripsi;
                $hasil_kata = strlen($deskripsi);
                if ($hasil_kata >= 86) {
                    $cut_desk = substr(strip_tags($deskripsi), 0, 85);
                    //echo substr(strip_tags($judul),0,70);
                    //echo "...";
                    $desk_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $cut_desk);
                    $desk = $desk_berita_potong;
                } else {
                    $desk = $deskripsi;
                }

                $date = Carbon::parse($art_baru->created_at);
                $str = $date->diffForHumans(Carbon::now());
                $publish_date = Helper::tanggal_indo($art_baru->publish_date);
                $no++;

                if ($no == 1) {
                    $output .= '
                        <div class="row mx-0 my-4 my-xs-5">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 px-xs-0 ">
                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100" >
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4 mb-xs-1rem">
                            <ul class="list-date-article list-inline">
                                <li class="list-inline-item">
                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                        <span class="text-kategori">' . $art_baru->nama_kategori . '</span>
                                    </a>
                                </li>
                                <li class="list-date list-inline-item">
                                    <span class="color-date date--artikel">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                <div class="title-artikel">
                                    ' . $jdls . '
                                </div>
                            </a>
                        </div>
                    </div>';

                    if (count($artikel_more) > 1) {
                        $output .= '<div class="row mx-0 mt-5 mb-4">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="pull-left">
                                    <span class="text-recent-news">' . $art_baru->nama_kategori . ' Recent News</span>
                                </div>
                                <div class="pull-right">
                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '" class="see-more-action">See More</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                <div class="line--vertical">
                                    &nbsp;
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    $output .= '
                            <div class="row mx-0 mt-3">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pr-0">
                                    <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                        <img src="' . asset('public/evamedia/artikel-img/foto-cover/' . $art_baru->foto_cover) . '" alt="' . $art_baru->foto_cover . '" class="d-block w-100 mt-1rem mt-xs-05 img-list-article" >
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-md-8 pl-0 pl-sm-1">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <ul class="list-date-article list-inline">
                                                <li class="list-inline-item">
                                                    <a href="' . url('evamedia/' . $art_baru->nama_kategori) . '">
                                                        <span class="text-kategori list-article-text">' . $art_baru->nama_kategori . '</span>
                                                    </a>
                                                </li>
                                                <li class="list-date list-bullet-article list-inline-item">
                                                    <span class="color-date date--artikel list-article-text">' . Helper::tanggal_indo($art_baru->publish_date) . '</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="' . url('evamedia-detail/' . $art_baru->slug_url) . '">
                                                <div class="title-artikel list-title-artikel">
                                                    ' . $jdls . '
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 desktop-show">
                                            <div class="desc-artikel">
                                            ' . $desk . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ';

                    //     if(count($artikel_more) > 1){
                    //         $output.='<div class="row mx-0 mt-5 mb-4">
                    //     <div class="col-sm-12 col-md-12 col-lg-12">
                    //         <div class="line--vertical">
                    //             &nbsp;
                    //         </div>
                    //     </div>
                    // </div>';
                    //     }
                }


                $last_id = $art_baru->id;
                $last_date = $art_baru->publish_date;
                $last_time = $art_baru->publish_time;

                if ($no == 6) {
                    break;
                }
            }

            $output_mobile = $output;

            $output .= '
                            <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads_kategori_' . $kategori . '">
                                <div class="col-md-12 text-center">
                                        <button type="button" class="btn  btn-load-more" id="load_more_button_kat" name="load_more_button_kat" data-loaddate="' . $last_date . '" data-loadtime="' . $last_time . '" data-loadid="' . $last_id . '" data-loadkat="' . $kategori . '">View More..</button>
                                </div>
                            </div>
                            ';

            $output .= '<div class="row mx-0 mt-2 mb-2">
                            <div class="col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                <div class="line--vertical">
                                    &nbsp;
                                </div>
                            </div>
                        </div>';

            $output_mobile .= '
                        <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads_kategori_mobile_' . $kategori . '">
                            <div class="col-md-12 text-center">
                                    <button type="button" class="btn  btn-load-more" id="load_more_button_kat" name="load_more_button_kat" data-loaddate="' . $last_date . '" data-loadtime="' . $last_time . '" data-loadid="' . $last_id . '" data-loadkat="' . $kategori . '">View More..</button>
                            </div>
                        </div>
                        ';

            $output_mobile .= '<div class="row mx-0 mt-2 mb-2">
                            <div class="col-sm-12 col-md-12 col-lg-12" style="height:1.5rem">
                                <div class="line--vertical">
                                    &nbsp;
                                </div>
                            </div>
                        </div>';
        } else {
            if ($tipe == 'awal') {
                $output .= '';
                $output_mobile .= '';
            } else {
                //NOTFOUND
                $output .= '
                        <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads_kategori_' . $kategori . '">
                            <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-load-more" name="load_more_button_kat">Data Not Found</button>
                            </div>
                        </div>
                        ';
                //NOTFOUND
                $output_mobile .= '
                        <div class="row mx-0 cont-row pbottom--20 ptop--30" id="loads_kategori_mobile_' . $kategori . '">
                            <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-load-more" name="load_more_button_kat">Data Not Found</button>
                            </div>
                        </div>
                        ';
            }
        }


        return response()->json(['output' => $output, 'output_mobile' => $output_mobile]);
    }


    public function showArticle(Request $request, $slug){

        $artikel = DB::table('artikels')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
            ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
            ->where('artikels.slug_url', $slug)
            ->whereIn('artikels.status', [3])
            ->first();

        if ($artikel) {

            $slug_data = Artikel::where('slug_url', $slug)->first();
            // Baca Juga
            $baca_juga_deskripsi = DB::table('artikels')
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->whereNotIn('id', [$slug_data->id])
                ->inRandomOrder()
                ->where('status', 3)
                ->limit(2)
                ->get();
            // Save Klik
            $save_click = Artikel::find($slug_data->id);
            $save_click->click = $artikel->click + 1;
            $save_click->save();

            // Berita Populer / Paling Banyak View
            $recommended = DB::table('artikels')
                ->orderBy('click', 'desc')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->limit(5)
                ->whereNotIn('click', ['null'])
                ->where('status', 3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            // Rekomenasi News / Ter-update di detail kategorinya
            $berita_rekomendasi = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->where('status', 3)
                ->whereNotIn('artikels.id', [$slug_data->id])
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->limit(3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            return view('evamedia.showArticle', compact('artikel', 'recommended', 'berita_rekomendasi', 'baca_juga_deskripsi','slug'));
        } else {
            return abort(404);
        }
    }
    
    public function showArticleV2(Request $request, $slug){
        // return response()->json([
        //     'showArticelV2' => true,
        // ]);

        $tokenDefault = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9';
        $tokenSet = $request->input('token');
        if ($tokenSet != $tokenDefault) {
            return redirect('evamedia-detail/'.$slug);
        }

        $artikel = DB::table('artikels')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
            ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
            ->where('artikels.slug_url', $slug)
            ->whereIn('artikels.status', [3])
            ->first();

        if ($artikel) {

            $slug_data = Artikel::where('slug_url', $slug)->first();
            // Baca Juga
            $baca_juga_deskripsi = DB::table('artikels')
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->whereNotIn('id', [$slug_data->id])
                ->inRandomOrder()
                ->where('status', 3)
                ->limit(2)
                ->get();
            // Save Klik
            $save_click = Artikel::find($slug_data->id);
            $save_click->click = $artikel->click + 1;
            $save_click->save();

            // Berita Populer / Paling Banyak View
            $recommended = DB::table('artikels')
                ->orderBy('click', 'desc')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->limit(5)
                ->whereNotIn('click', ['null'])
                ->where('status', 3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            // Rekomenasi News / Ter-update di detail kategorinya
            $berita_rekomendasi = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->where('status', 3)
                ->whereNotIn('artikels.id', [$slug_data->id])
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->limit(3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            return view('evamedia.showArticleV2', compact('artikel', 'recommended', 'berita_rekomendasi', 'baca_juga_deskripsi','slug'));
        } else {
            return abort(404);
        }
    }

    public function detail(Request $request, $slug)
    {

        $artikel = DB::table('artikels')
            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
            ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
            ->select('artikels.*', 'kategoris.nama as nama_kategori', 'kategoris.id as k_id', 'users.name as nama_user')
            ->where('artikels.slug_url', $slug)
            ->whereIn('artikels.status', [3])
            ->first();

        if ($artikel) {

            $slug_data = Artikel::where('slug_url', $slug)->first();
            // Baca Juga
            $baca_juga_deskripsi = DB::table('artikels')
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->whereNotIn('id', [$slug_data->id])
                ->inRandomOrder()
                ->where('status', 3)
                ->limit(2)
                ->get();
            // Save Klik
            $save_click = Artikel::find($slug_data->id);
            $save_click->click = $artikel->click + 1;
            $save_click->save();

            // Berita Populer / Paling Banyak View
            $recommended = DB::table('artikels')
                ->orderBy('click', 'desc')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->limit(5)
                ->whereNotIn('click', ['null'])
                ->where('status', 3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            // Rekomenasi News / Ter-update di detail kategorinya
            $berita_rekomendasi = DB::table('artikels')
                ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                ->orderBy('publish_date', 'desc')
                ->orderBy('publish_time', 'desc')
                ->where('status', 3)
                ->whereNotIn('artikels.id', [$slug_data->id])
                ->where('kategori_artikel', $artikel->kategori_artikel)
                ->limit(3)
                ->select('artikels.*', 'kategoris.nama as nama_kategori')
                ->get();

            return view('evamedia.detail', compact('artikel', 'recommended', 'berita_rekomendasi', 'baca_juga_deskripsi','slug'));
        } else {
            return abort(404);
        }
    }

    public function sendEmail(Request $request)
    {
        $email = $request->input('emails');

        $cek = EmailSubcribed::where('email', $email)->first();
        if ($cek) {
            $data = EmailSubcribed::where('email', $email)->first();
        } else {
            $data = new EmailSubcribed();
        }
        $data->email = $email;
        $data->save();

        return Redirect::back();
    }


    public function solution()
    {

        return view('frontend/solutions');
    }

    public function LoadImg()
    {

        $data = '<div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-1.png") . '"  alt="" class="b-radius10px">

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-3.png") . '"  alt="" class="b-radius10px">

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-3.png") . '"  alt="" class="b-radius10px">

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 p-3">

        <img src="' . url("public/img/assets/about/goodeva-gallery-1.png") . '"  alt="" class="b-radius10px">

    </div>

    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="700" data-aos-easing="linear">

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-3.png") . '"  alt="" class="b-radius10px">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-3.png") . '"  alt="" class="b-radius10px">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="" class="b-radius10px">

        </div>

    </div>
    ';


        return response()->json(['data' => $data]);
    }

    public function ClickShareWA(Request $request)
    {
        $data_id = $request->get('data_id');
        $req_url = $request->get('req_url');

        $data = Artikel::where('id', $data_id)->where('status', 3)->first();

        if ($data) {
            if ($data->share != "") {
                $data->share = $data->share + 1;
                $data->save();

                return redirect('https://wa.me/?text=' . $req_url);
            } else {
                $data->share = 1;
                $data->save();

                return redirect('https://wa.me/?text=' . $req_url);
            }
        } else {
            return back();
        }
    }

    public function ClickShareFB(Request $request)
    {
        $data_id = $request->get('data_id');
        $req_url = $request->get('req_url');

        $data = Artikel::where('id', $data_id)->where('status', 3)->first();

        if ($data) {
            if ($data->share != "") {
                $data->share = $data->share + 1;
                $data->save();

                return redirect('https://www.facebook.com/sharer/sharer.php?u=' . $req_url);
            } else {
                $data->share = 1;
                $data->save();

                return redirect('https://www.facebook.com/sharer/sharer.php?u=' . $req_url);
            }
        } else {
            return back();
        }
    }

    public function ClickShareTWT(Request $request)
    {
        $data_id = $request->get('data_id');
        $req_url = $request->get('req_url');

        $data = Artikel::where('id', $data_id)->where('status', 3)->first();

        if ($data) {
            if ($data->share != "") {
                $data->share = $data->share + 1;
                $data->save();

                return redirect('https://twitter.com/intent/tweet?text=' . $req_url);
            } else {
                $data->share = 1;
                $data->save();

                return redirect('https://twitter.com/intent/tweet?text=' . $req_url);
            }
        } else {
            return back();
        }
    }



    public function SendSaran(Request $request)

    {

        Request()->validate([

            'name' => 'required|max:225',

            'email' => 'required|email|max:225',

            'message' => 'required',

            'g-recaptcha-response' => 'required|captcha',

        ]);



        $data = array(

            'name' => $request->name,

            'pesan' => $request->message,

            'email' => $request->email

        );



        // dd($request->name);

        if ($request->name && $request->email && $request->message) {

            try {

                Mail::send('email', $data, function ($message) use ($request) {

                    $message->subject('Pesan / Saran');

                    $message->from($request->email, $request->name);

                    $message->to('ignas@goodeva.co.id');
                });
            } catch (Exception $e) {

                return response(['status' => false, 'errors' => $e->getMessage()]);
            }

            // $msg_link = Message::where('id', $message->id)->first();

            // $msg_link->slug_url = Str::random(10).$msg_link->id;

            // $msg_link->status = 1;

            // $msg_link->save();


            if ($request->from_url != "") {
                return redirect()->to('solutions#form-contact')->with('success', 'Pesan Berhasil Terkirim');
            } else {
                return back()->with('success', 'Pesan Berhasil Terkirim');
            }
        } else {

            return back();
        }
    }
}
