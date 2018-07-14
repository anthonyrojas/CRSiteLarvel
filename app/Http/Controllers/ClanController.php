<?php
namespace App\Http\Controllers;

use Config;

//think of this like an interface that has to be imported and extended
use App\Http\Controllers\Controller;

//http request library
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

//define rthe class and extend the Controller
class ClanController extends Controller
{
	public function index(){
		$client = new Client([ 'base_uri' => Config::get('constants.options.crhost') ]);
		$crkey = Config::get('contants.options.crkey');
		$normiesTag = Config::get('contants.options.normiesClanTag');
		$headers = [
			'Authorization' => 'Bearer ' . 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTkyLCJpZGVuIjoiMzkxNzU1NDg0MjUzNjUwOTY1IiwibWQiOnt9LCJ0cyI6MTUzMDQzODIzMzc4N30.KTRydG5WBjc1rLfaTcTpghd0b49LTYT9iMZNIkyqGOw',
			'Accept' => 'application/json'
		];
		$viewData = [];
		$reqPath = 'clan/8UJRVGY9';

		$response = $client->request('GET', $reqPath, [
			'headers'=> $headers
		]);
		if($response->getStatusCode() <= 302){
			$viewData['clanData'] = $response->getBody();
			return view('clan')->with('clanData',json_decode($response->getBody(), true));
		}else{
			//there was an error
			return view('clan');
		}
	}
}