<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
  public function home()
  {
    return view('static_pages/home');
  }

  public function help()
  {
    return view('static_pages/help');
  }

  public function about()
  {
    return view('static_pages/about');
  }

  public function test()
  {
    echo "<pre>";
    var_dump(getenv('IS_TEST'));
    var_dump(getenv('IS_IN_HEROKU'));
    var_dump(getenv('DATABASE_URL'));
    var_dump(parse_url(getenv("DATABASE_URL")));

    phpinfo();
    //return view('static_pages/test', $myvar);
  }
}
