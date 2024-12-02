<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Message;
use App\User;
use DB;
use Auth;
use Illuminate\Http\Request;
use Validator;
// use Image;
use Intervention\Image\Facades\Image; // Ensure this import is present
use Carbon\Carbon;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ArtikelApi()
    {
         $data = DB::table('artikels')
               ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id')
               ->select('artikels.*', 'kategoris.nama as nama_kategori')
               ->where('artikels.foto_cover', '!=', null)
               ->where('artikels.kategori_artikel', '!=', 22)
               ->limit(20)->latest('artikels.id')->get();

         return response()->json(['data' => $data->toArray()]);
    }

    public function listEmail()
    {
         $data = DB::table('email_subscribeds')

               ->select('email_subscribeds.*')
               ->limit(20)->latest('email_subscribeds.updated_at')->get();

            return view ('backend.artikel.email_list', compact('data'));
    }

    public function dummyApi(){
    	return response()->json([

    		'nama' => 'SBoys',

    		'kelas' => 12,

    		'jurusan' => 'Developer Android',

    		'jenis_kelamin' => 'Laki-Laki',

    		'hobby' => [
	            'Traveling','Coding','Musik'
	        	],

	        'list_teman' => [

	        		[
	        		'nama' => 'Aan',
            		'jk' => 'Laki-Laki',
	        		],

	        		[
	        		'nama' => 'Abi',
            		'jk' => 'Laki-Laki',
	        		],

	            	[
	        		'nama' => 'Adi',
            		'jk' => 'Laki-Laki',
	        		],

	        		[
	        		'nama' => 'Ali',
            		'jk' => 'Laki-Laki',
	        		],

	        	],
    	]);
    }

    public function index(Request $request)
    {
        $status = $request->get('status');
        $artikel = DB::table('artikels')
                    ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                    // ->join('comments', 'artikels.id', '=', 'comments.id_artikel', 'left')
                    ->select('artikels.*', 'kategoris.nama as nama_kategori')
                    // ->groupBy('artikels.id')
                    ->whereIn('artikels.created_by', [auth::user()->id])
                    ->whereNotIn('status', [5])
                    ->where(function ($query) use($status){
                        if ($status != "") {
                            $query->where('status', $status);
                        }
                    })
                    ->latest('artikels.created_at')
                    ->get();
                    // dd($status);
        return view ('backend.artikel.artikel-pribadi', compact('artikel', 'status'));
    }

    public function CheckDataReqArtikel(Request $request)
    {
         $id = $request->id;
         if ($id != "") {
              $data = User::where('id', $id)->where('user_req_artikel', null)->first();
              $profile = DB::table('profiles')->where('id_user', $id)->first();
              if ($profile) {
                   if ($data) {
                        return response()->json(['msg' => 'success']);
                   }else {
                        return response()->json(['msg' => 'Data tidak valid']);
                   }
              }else {
                   return response()->json(['msg' => 'failed']);
              }

         }else {
              return response()->json(['msg' => 'Data tidak valid']);
         }
    }

    public function ReqArtikel(Request $request)
    {
         $id = $request->id;
         if ($id != "") {
              $data = User::where('id', $id)->where('user_req_artikel', null)->first();
              if ($data) {
                   $data->user_req_artikel = 1;
                   $data->save();
                   return back()->with('success', 'Berhasil kirim request');
              }else {
                   return back()->with('warning', 'Data tidak valid');
              }

         }else {
              return back()->with('warning', 'Data tidak valid');
         }
    }

    public function ApproveReqArtikel(Request $request)
    {
         $id = $request->id;
         if ($id != "") {
              $data = User::where('id', $id)->where('user_req_artikel', 1)->first();
              if ($data) {
                   $data->user_req_artikel = 2;
                   $data->save();
                   return back()->with('success', 'Berhasil terima request');
              }else {
                   return back()->with('warning', 'Data tidak valid');
              }

         }else {
              return back()->with('warning', 'Data tidak valid');
         }
    }

    public function AppReqArtikel(Request $request, $id)
    {
         // $id = $request->id;
         if ($id != "") {
              $data = User::where('id', $id)->where('user_req_artikel', 2)->first();
              if ($data) {
                   $data->user_req_artikel = 3;
                   $data->save();
                   return back()->with('success', 'Request berhasil');
              }else {
                   return back()->with('warning', 'Data tidak valid');
              }

         }else {
              return back()->with('warning', 'Data tidak valid');
         }
    }

    public function indexApproval(Request $request)
    {
        $status = $request->get('status');
        $kategori = $request->get('kategori_berita');

        $artikel = DB::table('artikels')
        ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
        ->join('users', 'artikels.created_by', '=', 'users.id', 'left')
        ->select('artikels.*', 'kategoris.nama as nama_kategori', 'users.name')
        // ->select('artikels.*', 'kategoris.nama as nama_kategori')
                         ->where(function ($query) use($status, $kategori){
                             if ($status == "") {
                                $query->whereIn('status',[1]);
                             }
                             if ($status == 1) {
                                 $query->whereIn('status',[1]);
                             }
                             if ($status == 2) {
                                 $query->whereIn('status',[2]);
                             }
                             if ($status == 3) {
                                 $query->whereIn('status',[3]);
                             }
                             if ($status == "all") {
                                 $query->whereIn('status',[1,2,3]);
                             }
                             if ($kategori != "") {
                                $query->where('kategori_artikel.nama', $kategori);
                             }
                         })
                         ->orderBy('updated_at', 'desc')
                         ->get();

        $artikel_total = Artikel::join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                        ->where(function ($query) use($kategori){
                            if ($kategori != "") {
                                $query->where('kategoris.nama', $kategori);
                            }
                        })
                        ->count();

        $artikel_publish = Artikel::where('status', 3)
                            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                            ->where(function ($query) use($kategori){
                                if ($kategori != "") {
                                    $query->where('kategoris.nama', $kategori);
                                }
                            })
                            ->count();

        $artikel_draft = Artikel::where('status', 2)
                          ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                          ->where(function ($query) use($kategori){
                              if ($kategori != "") {
                                    $query->where('kategoris.nama', $kategori);
                              }
                          })
                          ->count();

        $artikel_pending = Artikel::where('status', 1)
                            ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                            ->where(function ($query) use($kategori){
                                if ($kategori != "") {
                                    $query->where('kategoris.nama', $kategori);
                                }
                            })
                            ->count();

        // Pluck Kategori
        $form_kategori = $kategori;
        $kategori_pluck = DB::table('kategoris')->orderBy('nama', 'asc')->get('nama');

        return view ('backend.artikel.approval-artikel', compact('artikel', 'artikel_pending', 'artikel_publish', 'artikel_draft', 'artikel_total', 'status', 'kategori_pluck', 'form_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // if (auth::user()->u_maintenance != 1) {
        //      return back()->with('warning', 'Maintenance');
        // }
        $j_AF = $request->get('j_AF');
        // $dF = '';
        $foto = DB::table('kategoris')->where('nama', 'Foto')->first();
        // if ($j_AF == 1) {
        //      $dF = 22;
        // }

        // dd($dF);
        $kategori_berita = DB::table('kategoris')->pluck("nama as nama_kategori","id");

        return view ('backend.artikel.add-artikel', compact('kategori_berita','j_AF', 'foto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
         // dd($request->kategori_berita);
        if ($request->kategori_berita == 22) {
             $this->validate($request, [
                 'judul' => 'required|max:90',
                //  'foto_ar1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                //  'foto_ar2' => 'image|mimes:jpeg,png,jpg|max:2048',
                //  'foto_ar3' => 'image|mimes:jpeg,png,jpg|max:2048',
                //  'foto_ar4' => 'image|mimes:jpeg,png,jpg|max:2048',
                //  'foto_ar5' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'kategori_artikel' => 'required',
                 'text_deskripsi' => 'required|max:700',
                //  'keywords' => 'required',
             ]);
        }else {
             $this->validate($request, [
                 'judul' => 'required|max:90',
                 'foto_cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                 'kategori_artikel' => 'required',
                 'text_deskripsi' => 'required',
                //  'keywords' => 'required',
             ]);
        }


        // $check_token = Token::where('id_user', auth::user()->id)->first();
        // $check_user = User::whereIn('role', [1,2,5,7])->where('id', auth::user()->id)->first();
        // $check_harga_kategori = DB::table('kategori_beritas')->where('id', $request->kategori_berita)->first();

        // if (count($request->keywords) < 5) {
        //      return back()->with('warning', 'Minimal keywords harus 5')->with('warningTags', 'Minimal keywords harus 5')->withInput();
        // }

        // $removeABS = strip_tags($request->input('text_abstraks'));
        // $ds = strlen($removeABS);
        // dd($ds);

        // if (auth::user()->role != 4) {

        //      $hrg = $check_harga_kategori->harga_kategori;
        // }else {
        //      $hrg = 200000; //opini buat user yng udah request
        // }

        // // dd( $check_harga_kategori);
        // if ($check_harga_kategori == "") {
        //      return back()->with('warning', 'Data tidak valid')->withInput();
        // }

        // if ($check_user != "") {
             $data = new Artikel();

             if ($request->kategori_artikel != 22) {
                //  if ($request->input('check-abstak')) {
                //      $removeABS = strip_tags($request->input('text_abstraks'));
                //      if (strlen($removeABS) > 180) {
                //           return back()->with('warning', 'Lead berita tidak boleh lebih dari 180 karakter')->with('t_areaLead', 'Lead berita tidak boleh lebih dari 180 karakter')->withInput();
                //      }else {
                //           $data->text_abstraksi = $request->input('text_abstraks');
                //      }
                //  }

                //  if ($request->input('check-summary')) {
                //      $removeSMR = strip_tags($request->input('text_summary'));
                //      if (strlen($removeSMR) > 210) {
                //           return back()->with('warning', 'Lead berita tidak boleh lebih dari 210 karakter')->with('smry_Box', 'Summary Box tidak boleh lebih dari 210 karakter')->withInput();
                //      }else {
                //           $data->text_summary = $request->input('text_summary');
                //      }
                //  }

                 if ($request->has('foto_cover')) {
                    $file = $request->file('foto_cover');
                    $ext = $file->getClientOriginalName();
                    $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                    $thumbImage = Image::make($file->getRealPath())->resize(895, 475);

                    $thumbPath = public_path() . '/evamedia/artikel-img/foto-cover/'.$newName;


                    // $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);

                    $thumbImage = Image::make($thumbImage)->save($thumbPath);

                    // $file->move('public/img/artikel-img/foto-cover',$newName);
                    $data->foto_cover = $newName;
                }else{
                    $data->foto_cover = null;
                }

                if ($request->has('foto_artikel')) {
                    $file = $request->file('foto_artikel');
                    $ext = $file->getClientOriginalName();
                    $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                    $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                    $thumbPath = public_path() . '/evamedia/artikel-img/foto-artikel/'.$newName;

                    // $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                    $thumbImage = Image::make($thumbImage)->save($thumbPath);

                    // $file->move('public/img/artikel-img/foto-artikel',$newName);
                    $data->foto_artikel = $newName;
                }else{
                    $data->foto_artikel = null;
                }

                $data->sumber_fartikel = $request->input('sumber_foto_artikel');
                $data->deskripsi = $request->input('text_deskripsi');
                $data->deskripsi_artikel = $request->input('deskripsi_artikel');
            }else {
                $removeABS = strip_tags($request->input('text_deskripsi'));
                if (strlen($removeABS) > 700) {
                     return back()->with('warning', 'Isi Tulisan tidak boleh lebih dari 700 character');
                }else {
                     $data->deskripsi = $request->input('text_deskripsi');
                }


           }

             $ucw = ucwords($request->input('judul'));
             $data->judul = $ucw;
             $data->kategori_artikel = $request->input('kategori_artikel');
             $data->sumber_fcover = $request->input('sumber_foto_cover');
            //  $data->tag = implode(",",$request->keywords);
             $data->status = 1;
             $data->created_by = Auth::user()->id;
             // dd($data);

             if($data->save()){
                  $d = Artikel::where('id', $data->id)->first();
                  $rplc = str_replace(str_split('\\/:*?"<>|,.!'), '', $request->judul);
                  $low = strtolower($rplc);
                  $slug = str_replace(' ', '-', $low).'-'.$data->id;
                  $d->slug_url = $slug;
                  $d->save();
                  return redirect('artikel-pribadi')->with('success', 'Berhasil kirim artikel');
             }else{
                 return redirect('artikel-pribadi')->with('warning','Gagal kirim artikel')->withInput();
             }


    }

    public function storeDraft(Request $request)
    {
        $k = $request->kategori_artikel;
        $foto = DB::table('kategoris')->where('nama', 'Foto')->first();
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:90',
            'foto_cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_artikel' => 'required',
           //  'kategori_wilayah' => 'required',
            'text_deskripsi' => 'required',
           //  'keywords' => 'required',
        ]);
        // if ($k != $foto->id) {

        // }else {
        //      $validator = Validator::make($request->all(), [
        //           'judul' => 'required|max:90',
        //           'foto_ar1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //           'foto_ar2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //           'foto_ar3' => 'image|mimes:jpeg,png,jpg|max:2048',
        //           'foto_ar4' => 'image|mimes:jpeg,png,jpg|max:2048',
        //           'foto_ar5' => 'image|mimes:jpeg,png,jpg|max:2048',
        //           'kategori_wilayah' => 'required',
        //           'text_deskripsi' => 'required|max:700',
        //           'keywords' => 'required',
        //      ]);
        // }


        if ($validator->passes()) {
             // if (count($request->keywords) < 5) {
             //      return back()->with('warningTags', 'Minimal keywords harus 5')->withInput();
             // }
             $data = new Artikel();
            //  if (count($request->keywords) < 5) {
            //       return response()->json(['warn_key' => 'Minimal keywords harus 5']);
            //  }
             if ($request->kategori_berita != 22) {
                //   if ($request->input('check-abstak')) {
                //       $removeABS = strip_tags($request->input('text_abstraks'));
                //       if (strlen($removeABS) > 180) {
                //            return back()->with('warning', 'Lead berita tidak boleh lebih dari 180 karakter')->with('t_areaLead', 'Lead berita tidak boleh lebih dari 180 karakter')->withInput();
                //       }else {
                //            $data->text_abstraksi = $request->input('text_abstraks');
                //       }
                //   }

                //   if ($request->input('check-summary')) {
                //       $removeSMR = strip_tags($request->input('text_summary'));
                //       if (strlen($removeSMR) > 210) {
                //            return back()->with('warning', 'Lead berita tidak boleh lebih dari 210 karakter')->with('smry_Box', 'Summary Box tidak boleh lebih dari 210 karakter')->withInput();
                //       }else {
                //            $data->text_summary = $request->input('text_summary');
                //       }
                //   }


                  if ($request->has('foto_cover')) {
                      $file = $request->file('foto_cover');
                      $ext = $file->getClientOriginalName();
                      $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                      $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                      $thumbPath = public_path() . '/evamedia/artikel-img/foto-cover/'.$newName;

                    //   $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                      $thumbImage = Image::make($thumbImage)->save($thumbPath);

                      $data->foto_cover = $newName;
                  }else{
                      $data->foto_cover = null;
                  }

                  if ($request->has('foto_artikel')) {
                      $file = $request->file('foto_artikel');
                      $ext = $file->getClientOriginalName();
                      $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                      $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                      $thumbPath = public_path() . '/evamedia/artikel-img/foto-artikel/'.$newName;

                    //   $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                      $thumbImage = Image::make($thumbImage)->save($thumbPath);

                      $data->foto_artikel = $newName;
                  }else{
                      $data->foto_artikel = null;
                  }
                  $data->sumber_fartikel = $request->input('sumber_foto_artikel');
                  $data->deskripsi = $request->input('text_deskripsi');
                  $data->deskripsi_artikel = $request->input('deskripsi_artikel');
             }else {

             }


             $ucw = ucwords($request->input('judul'));
             $data->judul = $ucw;
             $data->kategori_artikel = $request->input('kategori_artikel');
             $data->sumber_fcover = $request->input('sumber_foto_cover');
             $data->status = 2;
             $data->created_by = Auth::user()->id;


             if($data->save()){
                  $d = Artikel::where('id', $data->id)->first();
                  $rplc = str_replace(str_split('\\/:*?"<>|,.!'), '', $request->judul);
                  $low = strtolower($rplc);
                  $slug = str_replace(' ', '-', $low).'-'.$data->id;
                  $d->slug_url = $slug;
                  $d->save();
                 return response()->json(['msg' => 'Berhasil', 'id' => $data->id]);
             }
        }else{
            return response()->json(['msg' => 'Gagal', 'error' => $validator->errors()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = DB::table('artikels')
        ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id')
        ->select('artikels.*', 'kategoris.nama as nama_kategori')
        ->where('artikels.id', $id)
        ->first();

        if ($artikel) {
             return view ('backend.artikel.detail-artikel', compact('artikel'));
        }else {
             return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function approval($id)
    {
        $artikel = DB::table('artikels')
        ->join('kategori_beritas', 'artikels.kategori_berita', '=', 'kategori_beritas.id')
        ->select('artikels.*', 'kategori_beritas.nama as nama_kategori')
        ->where('artikels.id', $id)
        ->first();

        if ($artikel) {
             return view ('backend.detail-approval-artikel', compact('artikel'));
        }else {
             return abort(404);
        }
    }

    public function edit($id)
    {
        $artikel = DB::table('artikels')
                    ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id')
                    ->select('artikels.*', 'kategoris.nama as n_kategori')
                    ->where('artikels.id', $id)
                    ->first();
        if ($artikel) {
             $kategori_berita = DB::table('kategoris')->pluck("nama as nama_kategori","id");

             return view('backend.artikel.edit-artikel', compact('artikel', 'kategori_berita'));
        }else {
             return abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data_for_harga = Artikel::find($id);
        if ($data_for_harga->kategori_berita == 22) {
             $this->validate($request, [
                 'judul' => 'required|max:90',
                 'foto_ar1' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'foto_ar2' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'foto_ar3' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'foto_ar4' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'foto_ar5' => 'image|mimes:jpeg,png,jpg|max:2048',
                 'kategori_wilayah' => 'required',
                 'text_deskripsi' => 'required',
                 'keywords' => 'required',
             ]);
        }else {
             $this->validate($request, [
                  'judul' => 'required|max:90',
                  // 'foto_cover' => 'required|image|mimes:jpeg,png,jpg|max:3072',
                  // 'kategori_berita' => 'required',
                //   'kategori_wilayah' => 'required',
                  'text_deskripsi' => 'required',

             ]);
        }

        // $check_token = Token::where('id_user', auth::user()->id)->first();
        // $check_user = User::whereIn('role', [1,2,5,6,7])->where('id', auth::user()->id)->first();
        $check_artikel = Artikel::where('id', $id)->whereIn('status', [3,4,5])->first();
        $data_for_harga = Artikel::find($id);

        // if (count($request->keywords) < 5) {
        //      return back()->with('warning', 'Minimal keywords harus 5')->with('warningTags', 'Minimal keywords harus 5')->withInput();
        // }


        // dd( $check_harga_kategori);
        // if ($check_harga_kategori == "") {
        //      return back()->with('warning', 'Data tidak valid')->withInput();
        // }

             $data = Artikel::find($id);




                if ($request->has('foto_cover')) {
                   $file = $request->file('foto_cover');
                   $ext = $file->getClientOriginalName();
                   $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                   $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                   $thumbPath = public_path() . '/evamedia/artikel-img/foto-cover/'.$newName;

                //    $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                   $thumbImage = Image::make($thumbImage)->save($thumbPath);

                   // $file->move('public/img/artikel-img/foto-cover',$newName);
                   $data->foto_cover = $newName;
               }else{
                   $data->foto_cover = $data->foto_cover;
               }

               if ($request->has('foto_artikel')) {
                   $file = $request->file('foto_artikel');
                   $ext = $file->getClientOriginalName();
                   $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                   $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                   $thumbPath = public_path() . '/evamedia/artikel-img/foto-artikel/'.$newName;

                //    $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                   $thumbImage = Image::make($thumbImage)->save($thumbPath);

                   // $file->move('public/img/artikel-img/foto-artikel',$newName);
                   $data->foto_artikel = $newName;
               }else{
                   $data->foto_artikel = $data->foto_artikel;
               }

               $data->sumber_fartikel = $request->input('sumber_foto_artikel');
               $data->deskripsi = $request->input('text_deskripsi');
               $data->deskripsi_artikel = $request->input('deskripsi_artikel');


             $ucw = ucwords($request->input('judul'));
             $data->judul = $ucw;
             $data->kategori_artikel = $request->input('kategori_artikel');
             $data->sumber_fcover = $request->input('sumber_foto_cover');

            if ($data->status == 4 || $data->status == 5) {
                $data->status = $data->status;
            }else{
                if (!$check_artikel) {
                    $data->status = 1;
               }else {
                    // $data->status = 3;
                    $data->status = $data->status;
               }
            }

            // if (Auth::user()->role == 1) {

            // } else {
            //     $status_berhasil = 'Berhasil Kirim Artikel';
            // }

            $status_berhasil = 'Berhasil Menyimpan Artikel';

             // $data->created_by = Auth::id();

             if($data->save()){
                  $d = Artikel::where('id', $data->id)->first();
                  $rplc = str_replace(str_split('\\/:*?"<>|,.!'), '', $request->judul);
                  $low = strtolower($rplc);
                  $slug = str_replace(' ', '-', $low).'-'.$data->id;
                  $d->slug_url = $slug;
                  $d->save();
                  return redirect('artikel-pribadi')->with('success', $status_berhasil);

             }else {
                 return redirect('artikel-pribadi')->with('warning','Gagal kirim artikel')->withInput();
                //  if (Auth::user()->role == 6) {
                //      return redirect('approval-artikel')->with('warning','Gagal kirim artikel')->withInput();
                //  } else {

                //  }
             }


            //       return redirect('artikel-pribadi')->with('success', 'Berhasil ubah artikel');
            //  }else{
            //      return redirect('artikel-pribadi')->with('warning','Gagal kirim artikel')->withInput();
            //  }

        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $artikel = Artikel::destroy($id);
        $artikel = Artikel::where('id', $id)->first();

        // dd( $check_harga_kategori);
        if ($artikel) {
             if(file_exists('public/evamedia/artikel-img/foto-artikel/'. $artikel->foto_artikel)){
                 @unlink('public/evamedia/artikel-img/foto-artikel/'.$artikel->foto_artikel);
             }
             if(file_exists('public/evamedia/artikel-img/foto-cover/'.$artikel->foto_cover)){
                 @unlink('public/evamedia/artikel-img/foto-cover/'.$artikel->foto_cover);
             }

            $artikel->delete();
            return redirect('artikel-pribadi')->with('success', 'Data Berhasil Dihapus');

        }else {
             return redirect('artikel-pribadi')->with('warning', 'Terjadi kesalahan');
        }

    }


    public function StatusDraft(Request $request, $id)
    {
         // return back()->with('warning', 'Terjadi kesalahan');
         $this->validate($request, [
            'judul' => 'required|max:200',
            // 'foto_cover' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            // 'kategori_berita' => 'required',
            'kategori_artikel' => 'required',
            'text_deskripsi' => 'required',

         ]);
        //  if (auth::user()->role != 3 && auth::user()->role != 4) {
        //       $this->validate($request, [

        //       ]);
        //  }
         $check_publish = Artikel::where('id', $id)->where('status', 3)->first();
         $check_draft = Artikel::where('id', $id)->where('status', 2)->first();
        //  $check_user = User::whereIn('role', [1,2,5,6,7])->where('id', auth::user()->id)->first();

         if (!$check_publish && !$check_draft) {

              $data = Artikel::find($id);
              if ($request->has('foto_cover')) {
                 $file = $request->file('foto_cover');
                 $ext = $file->getClientOriginalName();
                 $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                 $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                 $thumbPath = public_path() . '/evamedia/artikel-img/foto-cover/'.$newName;

                //  $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                 $thumbImage = Image::make($thumbImage)->save($thumbPath);

                 // $file->move('public/img/artikel-img/foto-cover',$newName);
                 $data->foto_cover = $newName;
             }else{
                 $data->foto_cover = $request->input('old_foto_cover');
             }

             if ($request->has('foto_artikel')) {
                 $file = $request->file('foto_artikel');
                 $ext = $file->getClientOriginalName();
                 $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                 $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                 $thumbPath = public_path() . '/evamedia/artikel-img/foto-artikel/'.$newName;

                //  $thumbImage->insert(public_path().'/evamedia/watermark-hi.png', 'bottom-right', 10, 10);
                 $thumbImage = Image::make($thumbImage)->save($thumbPath);

                 // $file->move('public/img/artikel-img/foto-artikel',$newName);
                 $data->foto_artikel = $newName;
             }else{
                 $data->foto_artikel = $request->input('old_foto_artikel');
             }

             $ucw = ucwords($request->input('judul'));
             $data->judul = $ucw;
             // $data->kategori_berita = $request->input('kategori_berita');
             // if (auth::user()->role != 4 || auth::user()->role != 3) {
             //      $data->kategori_berita = $request->input('kategori_berita');
             // }else {
             //      $data->kategori_berita = $data->kategori_berita;
             // }

            //  if (auth::user()->role == 3 || auth::user()->role == 4) {
            //       $data->kategori_artikel = $data->kategori_artikel;
            //  }else {
            //       $data->kategori_artikel = $request->input('kategori_artikel');
            //  }
             $data->kategori_artikel = $request->input('kategori_artikel');

            //  $data->kategori_wilayah = $request->input('kategori_wilayah');
            //  $data->text_abstraksi = $request->input('text_abstraks');
             $data->deskripsi = $request->input('text_deskripsi');
             $data->sumber_fcover = $request->input('sumber_foto_cover');
             $data->sumber_fartikel = $request->input('sumber_foto_artikel');
             $data->deskripsi_artikel = $request->input('deskripsi_artikel');
            //  $data->text_summary = $request->input('text_summary');
            //  $data->tag = implode(",",$request->keywords);
             $data->status = 2;
             // dd($data);
             $data->save();

             $d = Artikel::where('id', $data->id)->first();
             $rplc = str_replace(str_split('\\/:*?"<>|,.!'), '', $request->judul);
             $low = strtolower($rplc);
             $slug = str_replace(' ', '-', $low).'-'.$data->id;
             $d->slug_url = $slug;
             $d->save();

             return redirect('artikel-pribadi')->with('success', 'Berhasil Mengubah Status Artikel');
        //       if (Auth::user()->role == 6) {
        //             return redirect('approval-artikel')->with('success', 'Berhasil Mengubah Status Artikel');
        //         } else {

        //       }
        // }else {
        //     if (Auth::user()->role == 6) {
        //         return redirect('approval-artikel')->with('warning', 'Gagal ubah ke Draft');
        //     } else {
        //         return redirect('artikel-pribadi')->with('warning', 'Gagal ubah ke Draft');
        //     }
        // }
         }
         else
         {
            return redirect('artikel-pribadi')->with('warning', 'Gagal ubah ke Draft');
         }
    }

    public function StatusSubmit($id)
    {
        $artikel = Artikel::find($id);
        dd($artikel);
        $artikel->status = 1;
        if($artikel->save()){
            return redirect('artikel-pribadi')->with('success', 'Berhasil Mengubah Status Artikel');
        }else{
            return redirect('artikel-pribadi')->with('warning','Gagal Mengubah Status Artikel')->withInput();
        }
        $history_transaksi = BeliToken::where('id_artikel', $id)->where('status', '!=', 3)->first();
        if ($history_transaksi) {
         $history_new = new BeliToken();
         $history_new->id_user = $history_transaksi->id_user;
         $history_new->no_transaksi = $history_transaksi->no_transaksi;
         $history_new->jumlah_token = $history_transaksi->jumlah_token;
         $history_new->jumlah_bayar = $history_transaksi->jumlah_bayar;
         $history_new->tanggal = date('Y-m-d H:i:s');
         $history_new->jenis = 2;
         $history_new->status = 4;
         $history_new->save();

         $h_tambahToken = new HistoryPenambahanToken();
         $h_tambahToken->id_user = $history_new->id_user;
         $h_tambahToken->jumlah_token = $history_transaksi->jumlah_token;
         $h_tambahToken->tanggal = date('Y-m-d H:i:s');
         $h_tambahToken->id_beli = $history_new->id;
         $h_tambahToken->status = 1;
         $h_tambahToken->action = 4;
         $h_tambahToken->save();

         $check_token = Token::where('id_user', $history_transaksi->id_user)->first();
         $check_token->total_token = $check_token->total_token + 50000;

            if ($check_token->save()) {
                $check_token->percen_bar = $check_token->total_token / $check_token->last_token * 100;
                $check_token->save();
            }
        }

        return redirect('artikel-pribadi')->with('hapus', 'Data Berhasil Dihapus');
    }

    public function duplicate($id)
    {
        $artikel = Artikel::find($id);
        $artikel->status = 2;
        $artikel->publish_date = null;
        $artikel->publish_time = null;
        $artikel->publish_at = null;
        $artikel->click = null;
        $artikel->share = null;
        $random = Str::random(5);
        $foto_cover_baru = rand(100,999).'-copy-'.$artikel->foto_cover;
        //Add DIRECTORY_SEPARATOR between path and filename if needed
        if(file_exists('public/evamedia/artikel-img/foto-cover/'.$artikel->foto_cover)){
            copy('public/evamedia/artikel-img/foto-cover/'.$artikel->foto_cover, 'public/evamedia/artikel-img/foto-cover/'.$foto_cover_baru);
        }

        if ($artikel->foto_artikel != "") {
             if(file_exists('public/evamedia/artikel-img/foto-artikel/'.$artikel->foto_artikel)){
                  $foto_artikel_baru = rand(100,999).'-copy-'.$artikel->foto_artikel;
                  copy('public/evamedia/artikel-img/foto-artikel/'.$artikel->foto_artikel, 'public/evamedia/artikel-img/foto-artikel/'.$foto_artikel_baru);
             }
        }

        $slug = str_replace(' ', '-', $artikel->judul).'-'.$random;
        $artikel->slug_url =  $slug;

        $newArtikel = $artikel->replicate();

        $newArtikel->foto_cover = $foto_cover_baru;
        if ($artikel->foto_artikel != "") {
            $newArtikel->foto_artikel = $foto_artikel_baru;
        }


        if($newArtikel->save()){
            return redirect('artikel-pribadi')->with('success', 'Berhasil Salin Artikel');
        }else{
            return redirect('artikel-pribadi')->with('warning','Gagal Salin Artikel')->withInput();
        }
    }

    public function check_data_artikel(Request $request)
    {
         $id = $request->id;
         $artikel = Artikel::where('id', $id)->first();
         if ($artikel) {
              return response()->json(['msg' => 'berhasil', 'id' => $artikel->id]);
         }else {
              return response()->json(['msg' => 'gagal']);
         }
    }

    public function IndexArchive(Request $request)
    {
        $artikel = DB::table('artikels')
                    ->join('kategoris', 'artikels.kategori_artikel', '=', 'kategoris.id', 'left')
                    ->join('users', 'artikels.created_by', '=', 'users.id')
                    ->select('artikels.*', 'kategoris.nama as nama_kategori', 'users.name')
                    ->whereIn('status', [4, 5])
                    // ->whereIn('artikels.created_by', [auth::user()->id])
                    ->latest('artikels.updated_at')
                    ->get();

        return view('backend.artikel.archive-artikel', compact('artikel'));
    }

    public function StatusTolak(Request $request)
    {
        $id = $request->id;
        $artikel = Artikel::find($id);
        if ($artikel) {
             $message = new Message();
             $user_name = User::where('id', $artikel->created_by)->first();
             $message->pengirim = auth::user()->id;
             $message->penerima = $artikel->created_by;
             $message->subject = 'Tolak Artikel - '.$artikel->judul;
             $message->detail_pesan = '
             <div class="row">
                  <div class="col-md-12 mt-4">
                   <p class="mb-10">Dear, '.$user_name->name.'</p>
                   <p class="mb-0">Berita anda yang berjudul:</p>
                   <h4>'.$artikel->judul.'</h4>
                   <p class="mb-0">Telah <span class="text-danger text-regular">ditolak</span> oleh team redaksi, dengan alasan :</p>
                   <p>'.$request->alasan.'</p>
                   <p>Anda dapat mengedit ulang berita anda dengan mengklik tombol dibawah.</p>
                   <a href="'.url('edit-artikel/'.$artikel->id).'" target="_blank">
                        <button type="button" class="btn btn-successfully">Edit Berita</button>
                   </a>
                 </div>
             </div>
             ';
              $message->save();
              $msg_link = Message::where('id', $message->id)->first();
              $msg_link->link = Str::random(10).$msg_link->id;
              $msg_link->save();
              return back()->with('success', 'Berhasil Tolak Artikel');
        }

    }

    public function StatusPublish($id)
    {
        $artikel = Artikel::find($id);
        $artikel->status = 3;
        $artikel->publish_date = Carbon::now();
        $artikel->publish_time = Carbon::now()->timezone('Asia/Jakarta')->format('H:i');
        $artikel->publish_at = Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i');
        // dd($artikel);
        if($artikel->save()){
            //  $user_name = User::where('id', $artikel->created_by)->first();
             return redirect('artikel-pribadi')->with('success', 'Berhasil Mempublish Artikel');

        }else{
            return redirect('artikel-pribadi')->with('warning','Gagal Mempublish Artikel')->withInput;
        }
    }

    public function StatusArchive(Request $request, $id)
    {
        // return back()->with('warning', 'Terjadi kesalahan');
        $this->validate($request, [
            'judul' => 'required|max:200',
            // 'foto_cover' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            // 'kategori_berita' => 'required',
            'kategori_artikel' => 'required',
            'text_deskripsi' => 'required',


         ]);
         $check_publish = Artikel::where('id', $id)->where('status', 3)->first();

         if ($check_publish) {

              $data = Artikel::find($id);
              if ($request->has('foto_cover')) {
                 $file = $request->file('foto_cover');
                 $ext = $file->getClientOriginalName();
                 $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                 $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                 $thumbPath = public_path() . '/img/artikel-img/foto-cover/'.$newName;

                //  $thumbImage->insert(public_path().'/img/watermark-hi.png', 'bottom-right', 10, 10);
                 $thumbImage = Image::make($thumbImage)->save($thumbPath);

                 // $file->move('public/img/artikel-img/foto-cover',$newName);
                 $data->foto_cover = $newName;
             }else{
                 $data->foto_cover = $request->input('old_foto_cover');
             }

             if ($request->has('foto_artikel')) {
                 $file = $request->file('foto_artikel');
                 $ext = $file->getClientOriginalName();
                 $newName = date('d-m-Y')."-".rand(100,10000)."-".$ext;

                 $thumbImage = Image::make($file->getRealPath())->resize(895, 475);
                 $thumbPath = public_path() . '/public/img/artikel-img/foto-artikel/'.$newName;

                //  $thumbImage->insert(public_path().'/img/watermark-hi.png', 'bottom-right', 10, 10);
                 $thumbImage = Image::make($thumbImage)->save($thumbPath);

                 // $file->move('public/img/artikel-img/foto-artikel',$newName);
                 $data->foto_artikel = $newName;
             }else{
                 $data->foto_artikel = $request->input('old_foto_artikel');
             }

             $data->judul = $request->input('judul');
             // $data->kategori_berita = $request->input('kategori_berita');
             // if (auth::user()->role != 4 || auth::user()->role != 3) {
             //      $data->kategori_berita = $request->input('kategori_berita');
             // }else {
             //      $data->kategori_berita = $data->kategori_berita;
             // }

            //  if (auth::user()->role == 3 || auth::user()->role == 4) {
            //       $data->kategori_berita = $data->kategori_berita;
            //  }else {

            //  }


             $data->kategori_artikel = $request->input('kategori_artikel');
             $data->deskripsi = $request->input('text_deskripsi');
             $data->deskripsi_artikel = $request->input('deskripsi_artikel');


             $data->status = 4;
             // dd($data);
             $data->save();

             $d = Artikel::where('id', $data->id)->first();
             $rplc = str_replace(str_split('\\/:*?"<>|,.!'), '', $request->judul);
             $low = strtolower($rplc);
             $slug = str_replace(' ', '-', $low).'-'.$data->id;
             $d->slug_url = $slug;
             $d->save();

            //   if (!$check_user != "") {
            //        $history_transaksi = BeliToken::where('id_artikel', $id)->where('status', 2)->first();
            //       if ($history_transaksi) {
            //            $history_new = new BeliToken();
            //            $history_new->id_user = $history_transaksi->id_user;
            //            $history_new->no_transaksi = $history_transaksi->no_transaksi;
            //            $history_new->jumlah_token = $hrg;
            //            $history_new->jumlah_bayar = $hrg;
            //            $history_new->tanggal = date('Y-m-d H:i:s');
            //            $history_new->jenis = 2;
            //            $history_new->status = 4;
            //            $history_new->save();

            //            $h_tambahToken = new HistoryPenambahanToken();
            //            $h_tambahToken->id_user = $history_new->id_user;
            //            $h_tambahToken->jumlah_token = $history_transaksi->jumlah_token;
            //            $h_tambahToken->tanggal = date('Y-m-d H:i:s');
            //            $h_tambahToken->id_beli = $history_new->id;
            //            $h_tambahToken->status = 1;
            //            $h_tambahToken->action = 4;
            //            $h_tambahToken->save();

            //            $check_token = Token::where('id_user', $history_transaksi->id_user)->first();
            //            $check_token->total_token = $check_token->total_token + $hrg;

            //            if ($check_token->save()) {
            //                $check_token->percen_bar = $check_token->total_token / $check_token->last_token * 100;
            //                $check_token->save();
            //            }
            //      }
            //   }
            return redirect('artikel-pribadi')->with('success', 'Berhasil Mengubah Status Artikel');

        }else {

            return redirect('artikel-pribadi')->with('warning', 'Gagal ubah ke Draft');
        }
    }

    public function EditStatusSubmit($id)
    {

        // $check_user = User::whereIn('role', [1,2])->where('id', auth::user()->id)->first();
        $check_artikel = Artikel::where('id', $id)->whereIn('status', [3])->first();


        // dd($check_harga_kategori);
        $data = Artikel::find($id);

        // if ($check_user != "") {
            $c_status = Artikel::where('id', $id)->first();

            if ($c_status) {
                // dd($c_status);
                if ($c_status->status == 1 || $c_status->status == 3) {
                    if (!$check_artikel) {
                        $data->status = 1;
                    }else {
                        $data->status = 3;
                    }
                }
                if (!$check_artikel) {
                    $data->status = 1;
                    $data->save();
                }

                if($data->save()){
                    return redirect('artikel-pribadi')->with('success', 'Berhasil kirim artikel');
                }else {
                    return redirect('artikel-pribadi')->with('warning','Gagal kirim artikel')->withInput();
                }
            }
            else{
                return redirect('artikel-pribadi')->with('warning','Gagal kirim artikel')->withInput();
            }


    }

    public function TakedownStatus($id)
    {
        // $artikel = Artikel::destroy($id);
        $artikel = Artikel::where('id', $id)->first();

        // dd( $check_harga_kategori);
        if ($artikel) {

                //   $artikel->delete();
                  $artikel->status = 5;
                  if ($artikel->save()) {
                      return redirect('artikel-pribadi')->with('success', 'Data Berhasil Dihapus');
                    } else {
                        return redirect('artikel-pribadi')->with('success', 'Data Gagal Dihapus');
                  }


        }else {
             return redirect('artikel-pribadi')->with('warning', 'Terjadi kesalahan');
        }
    }


}
