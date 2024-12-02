<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontProductController extends Controller
{

  // function to show product detail page
  public function index($product)
  {

    $default_lang = 'english';
    $text_lang = 'english';

    $products = [
      'b20' => 'b20-product',
      'kadin' => 'kadin-product',
      'pertanian' => 'pertanian-product',
      'undp' => 'undp-product',
      'lkpp' => 'lkpp-product',
      'asean' => 'asean-product',
    ];

    if (!isset($products[$product])) {

      abort(404);
    }

    return view('frontend/bs/detail-product/' . $products[$product], compact(
      'text_lang',
      'default_lang',
    ));
  }

}
