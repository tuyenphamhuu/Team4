<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\TypeProduct;
class PagesController
{

  public function index()
  {
    //session_start();
    $_SESSION['data'] = TypeProduct::selectAll();
    return view('index');
  }

  public function iphone()
  {
    return view('iphone');
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
