<?php

namespace splittlogic\past\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\past\past;

class pastController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/past'; 

    return view('past::blank', ['content' => $content]);

  }


}
