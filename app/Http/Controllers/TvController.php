<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Html;
use Illuminate\Support\Facades\DB;
use App\Militar;
use App\Painel;

class TvController extends Controller
{
	private $painel;
 
  public function __construct(Painel $painel)
  {
    $this->painel = $painel;
  }

    public function tv()
    {
    	$painel = Painel::all();

    	//dd($painel);
    	//exit;
    	return view('tv', compact('painel'));
    }
}
