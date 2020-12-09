<?php

namespace App\Http\Controllers;

use Facades\App\Repository\Coin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Repository\Coin as RepositoryCoin;

class HomeController extends Controller
{
  
    public function index()
    {
        //$moedas = DB::table('tbl_coins')->paginate(15);
        $moedas = Coin::all('created_at');
        return view('home', ['moedas' => $moedas]);
    }
   
}
