<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SeedBdCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SeedBd:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pegar a cotação das moedas e inserir no banco de dados';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $url = env('APP_URL').'/api/alimentarBanco';
        $client = new Client();
        $res = $client->request('GET', $url);
        //usar para saber se a API esta online
        $status = $res->getStatusCode();
        $resposta = $res->getBody();    
        echo $resposta;

    
    }
}
