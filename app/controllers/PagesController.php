<?php

namespace App\Controllers;

class PagesController
{

  public function index()
  {
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
}
