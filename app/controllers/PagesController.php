<?php

namespace App\Controllers;
use App\Core\App;
use App\Models\Product;

class PagesController
{

  public function index()
  {
    return view('index');
  }

  public function iphone()
  {
    $products = Product::selectAll();

    return view('iphone', ['products' => $products ]);
  }

  public function ipad()
  {
    return view('ipad');
  }
  public function mac()
  {
    return view('mac');
  }
  public function tv()
  {
    return view('tv');
  }
  public function watch()
  {
    return view('watch');
  }
  public function admin()
  {
    return view('signin');
  }

  public function detailiPad()
  {
    return view('detail-iPad');
  }
}
