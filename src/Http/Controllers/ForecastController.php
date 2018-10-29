<?php

namespace  KeithRoye\Forecast\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  ForecastController extends Controller
{
	public  function getWeather(Request $request)
	{

		try {

			$client = new 	Client([

				'base_uri' => 'http://api.openweathermap.org/data/2.5/',
			]);

			$response = $client->request('GET', 'forecast', [
				'query' => [
					'zip' =>  $request->input('zip'),
					'country code' => 'us',
					'APPID' => env('OPENWEATHER_APP_ID');

				],

			]);

			if($response->getStatusCode() == 200) {
				return $response->getBody()->getContents();
				
			}
		} catch(Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}

