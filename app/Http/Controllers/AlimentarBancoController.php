<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class AlimentarBancoController extends Controller
{
  
    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://economia.awesomeapi.com.br/json/all');
        //usar para saber se a API esta online
        $status = $res->getStatusCode();
        $resposta = $res->getBody();
    
        echo $resposta;
    }


    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
