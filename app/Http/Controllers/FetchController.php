<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class FetchController extends Controller
{

    /**
     * FetchController constructor.
     */
    public function __construct()
    {
    }
    public  function fetch(){

        //api key
        $api_key="0ba10ba0-3efd-11ec-8843-a535b812ab97";
        $client = new Client(['base_uri' => 'https://freecurrencyapi.net']);
        try {
            //base currency
            $response = $client->request('GET', "/api/v2/latest?apikey={$api_key}&base_currency=USD");
//            dd($response);
            if($response->getStatusCode()==200){
                $body = json_decode($response->getBody());
                date_default_timezone_set('Africa/Johannesburg');
                //getting last update date
                $last_update=date('d M Y H:i',$body->query->timestamp);
                $data=$body->data;
                //creating an array of necessary currencies

                $array=['zar'=>$data->ZAR,'bdt'=>$data->BDT,'pkr'=>$data->PKR,'inr'=>$data->INR,"last_updated"=>$last_update];
                return $array;
            }
            else{
                return null;
            }

        } catch (GuzzleException $e) {
            return null;
        }
    }
}
