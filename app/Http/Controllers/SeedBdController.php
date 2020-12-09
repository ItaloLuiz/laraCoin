<?php

namespace App\Http\Controllers;

use App\SeedBd;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\DB;
use Response;

class SeedBdController extends Controller
{
 

    public function create()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://economia.awesomeapi.com.br/json/all');
        //usar para saber se a API esta online
        $status = $res->getStatusCode();
        $resposta = $res->getBody();
    
        $dados = json_decode($resposta,true);

       // print_r($dados);

        foreach($dados as $key => $value){            

             //Ex: USDT(Dólar Turismo)
             $code = $key;
             $coinOrigin = $value['code'];
             $codein     = $value['codein'];
             $name = $value['name'];
             $high = $value['high'];
             $low  = $value['low'];
             $bid  = $value['bid'];
             $ask  = $value['ask'];
             $data = date('Y-m-d H:i:s');

             $insert = DB::table('tbl_coins')->insert(
                [
                 'code' => $code,
                 'coinOrigin' => $coinOrigin,
                 'codein' => $codein,
                 'name'   => $name,
                 'high'   => $high,
                 'low'    => $low,
                 'bid' => $bid,
                 'ask' => $ask,
                 'created_at'  => $data               
                ]               
            ); 
        }

        if($insert){
         return Response::json(array('success' => true, 'user_created' => 1), 200);
        }else{
            return Response::json(array('error' => true, 'user_created' => 0), 200);    
        }
    }   
   
}
