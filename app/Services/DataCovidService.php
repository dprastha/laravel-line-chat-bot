<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DataCovidService
{
    public function index()
    {
        $results = Http::get('https://api.kawalcorona.com/indonesia')->json();
        foreach ($results as $responses) {
            foreach ($responses as $response) {
            }
        }
        dump($responses["positif"] . "\n" . "tes");
        // $response = json_decode($result);

        return $results;
    }
}
