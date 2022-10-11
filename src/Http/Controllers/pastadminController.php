<?php

namespace splittlogic\past\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\past\past;

class pastadminController extends Controller
{


  public function index ()
  {

    $content = 'This is Admin'; 

    return view('past::blank', ['content' => $content]);

  }


}
