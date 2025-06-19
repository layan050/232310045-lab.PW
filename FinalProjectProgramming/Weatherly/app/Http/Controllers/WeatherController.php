<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request){

        $weatherResponse = [];

        if($request->isMethod("post")){

           $cityName = $request->city;

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://open-weather13.p.rapidapi.com/city/{$cityName}/EN",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: open-weather13.p.rapidapi.com",
                    "x-rapidapi-key: 6a6f7b65e5msh5e5b27012f0b386p1598c5jsn529af17bc03a"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            $weatherResponse = json_decode($response, true);
        }

        return view("weather", [
            "data" => $weatherResponse
        ]);
    }
}

