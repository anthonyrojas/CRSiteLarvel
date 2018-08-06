<?php 
namespace App\Http\Controllers;

use Config;
use Mail;
//think of this like an interface that has to be imported and extended
use App\Http\Controllers\Controller;

//http request library
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Session;
use Illuminate\Http\Request;
class TournamentController extends Controller{
	public function findOpen(){
		$client = new Client(['base_uri' => Config::get('constants.options.crhost')]);
		$token = Config::get('constants.options.crkey');
		$headers = [
			'Authorization' => 'Bearer ' . $token,
			'Accept' => 'application/json'
		];
		$reqPath = '/tournaments/open';
		try{
			$response = $client->request('GET', $reqPath, ['headers'=>$headers]);
			return view('tournaments')->with('tournamentData', json_decode($response->getBody(),true));
		}catch(ClientException $e){
			$errBody = json_decode($e->getResponse()->getBody(), true);
			return view('tournaments')->withErrors(['tournamentErr' => 'Could not find open tournaments at this time. ' . $errBody['message']]);
		}catch(ServerException $e){
			$errBody = json_decode($e->getResponse()->getBody(), true);
			return view('tournaments')->withErrors(['tournamentErr' => 'Service to Clash Royale API interrupted. ' . $errBody['message']]);
		}
	}
}