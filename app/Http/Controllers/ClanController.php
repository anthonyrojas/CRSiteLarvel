<?php
namespace App\Http\Controllers;

use Config;

//think of this like an interface that has to be imported and extended
use App\Http\Controllers\Controller;

//http request library
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Session;

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
	public function getClan($clanTag){
		//setting this returns an array accessible through normal php array syntax
		$clanSearchData = Session::get('clanSearchData');
		if($clanSearchData != null){
			return view('clan')->with('clanData', $clanSearchData);
		}else{
			$client = new Client(['base_uri' => Config::get('constants.options.crhost')]);
			$token = Config::get('constants.options.crkey');
			$headers = [
				'Authorization' => 'Bearer ' . $token,
				'Accept' => 'application/json'
			];
			$reqPath = 'clan/' . $clanTag;
			try{
				$response = $client->request('GET', $reqPath, ['headers'=>$headers]);
				return view('clan')->with('clanData', json_decode($response->getBody(), true));
			}catch(ClientException $e){
				$errBody = json_decode($e->getResponse()->getBody(), true);
				return view('clan')->withErrors(['clanErr' => 'Clan not found. '.$errBody['message']]);
			}catch(ServerException $e){
				$errBody = json_decode($e->getResponse()->getBody(), true);
				return view('clan')->withErrors(['clanErr' => 'Clash Royale server error. ' . $errBody['message']]);
			}
		}
	}
}