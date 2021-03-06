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

class PlayerController extends Controller{
	public function getPlayer($playerTag){
		//check for session storage from search function
		$playerSearchData = Session::get('playerSearchData');
		$playerChestData = Session::get('playerSearchChestsData');
		$playerBattlesData = Session::get('playerBattlesData');
		if(isset($playerSearchData) && isset($playerSearchChestsData) && isset($playerBattlesData) && $playerSearchData != null && $playerSearchChestsData != null && $playerBattlesData != null){
			return view('player')->with('playerData', $playerSearchData)->with('playerSearchChestsData', $playerSearchChestsData)->with('playerBattlesData',$playerBattlesData);
		}else{
			$client = new Client(['base_uri' => Config::get('constants.options.crhost')]);
			$token = Config::get('constants.options.crkey');
			$headers = [
				'Authorization' => 'Bearer ' . $token,
				'Accept' => 'application/json'
			];
			$reqPath = 'player/' . $playerTag;
			$reqPathChests = 'player/' . $playerTag . '/chests';
			$reqPathBattles = 'player/' . $playerTag . '/battles';
			try{
				$response  = $client->request('GET', $reqPath, ['headers'=>$headers]);
				$chestsRes = $client->request('GET', $reqPathChests, ['headers'=>$headers]);
				$battlesRes = $client->request('GET', $reqPathBattles, ['headers'=>$headers]);
				//return $response->getBody();
				return view('player')->with('playerData', json_decode($response->getBody(), true))->with('playerChestData', json_decode($chestsRes->getBody(), true))->with('playerBattlesData', json_decode($battlesRes->getBody(), true));
			}catch(ClientException $e){
				$errBody = json_decode($e->getResponse()->getBody(), true);
				return view('player')->withErrors(['playerErr'=>'Player not found. ' . $errBody['message']]);
			}catch(ServerException $e){
				$errBody = json_decode($e->getResponse()->getBody(), true);
				return view('player')->withErrors(['playerErr'=>'Service to Clash Royale API interrupted. ' . $errBody['message']]);
			}
		}
	}
}