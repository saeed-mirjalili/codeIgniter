<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $url     = "https://pokeapi.co/api/v2/pokemon/ditto";
        $opts    = array(
            'http'  => array(
                'method'    => "GET",
            )
        );
        $context = stream_context_create($opts);
        $data= file_get_contents($url, false, $context);
        $data = json_decode($data,true);
        return view('welcome_message',$data);
    }
}
