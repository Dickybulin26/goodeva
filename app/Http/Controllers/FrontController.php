<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontController extends Controller

{

    //



    public function home()
    {

        return view('index');
    }

    public function wa(Request $request)
    {
        $text = "Halo saya ingin bertanya tentang goodeva";
        $phone = "628122234036";


        return redirect('https://wa.me/' . $phone . '?text=' . $text);
    }



    public function solution()
    {

        return view('frontend/solutions');
    }

    public function LoadImg()
    {

        $data = '

        <div class="row">

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-1.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-2.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-9.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

    </div>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-1.png") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-2.png") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 p-3">

            <img src="' . url("public/img/assets/about/goodeva-gallery-3.png") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

        </div>

    </div>

    
    
        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="700" data-aos-easing="linear">
            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-4.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-5.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-6.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-7.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-8.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-3.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

            </div>
            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-10.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-11.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 p-3">

                    <img src="' . url("public/img/assets/about/gallery/goodeva-gallery-12.jpg") . '"  alt="Gallery Goodeva" class="gallery-img b-radius10px ">

                </div>

            </div>
        
    ';


        return response()->json(['data' => $data]);
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

                    $message->subject('Request Permintaan Goodeva');

                    $message->from($request->email, $request->name);

                    $message->to('ignas@goodeva.co.id');
                    // $message->to('varits.gorga106@gmail.com');
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
