<?php
namespace App\Http\Controllers;

use Config;
use Session;

//think of this like an interface that has to be imported and extended
use App\Http\Controllers\Controller;

//http request library
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
class SearchController extends Controller{
	public function index(){
		return view('search');
	}
	public function search(Request $request){
		$token = Config::get('constants.options.crkey');
		$host = Config::get('constants.options.crhost');
		$client = new Client([ 'base_uri' => $host]);
		$this->validate($request, [
			'searchTag' => 'required',
			'searchOption' => 'required'
		]);
		$headers = [
			'Authorization' => 'Bearer ' . $token,
			'Accept' => 'application/json'
		];
		$searchOption = $request->input('searchOption');
		$searchTag = $request->input('searchTag');
		try{
			if($searchOption == 'player'){
				$reqPath = '/player/' . $searchTag;
				$response = $client->request('GET', $reqPath, [ 'headers'=>$headers ]);
				$reqPathChests = 'player/' . $searchTag . '/chests';
				$reqPathBattles = 'player/' . $searchTag . '/battles';
				$chestsRes = $client->request('GET', $reqPathChests, ['headers'=>$headers]);
				$battlesRes = $client->request('GET', $reqPathBattles, ['headers' => $headers]);
				return redirect('player/' . $searchTag)->with('playerSearchData', json_decode($response->getBody(), true))->with('playerSearchChestsData', json_decode($chestsRes->getBody(), true))->with('playerBattlesData',json_decode($battlesRes->getBody(), true));
				//return $response->getBody();
			}else{
				$reqPath = '/clan/' . $searchTag;
				$reqPathClanWar = 'clan/' . $searchTag . '/war';
				$response = $client->request('GET', $reqPath, ['headers'=>$headers]);
				$resClanWar = $client->request('GET', $reqPathClanWar, ['headers'=>$headers]);
				return redirect('clan/' . $searchTag)->with('clanSearchData', json_decode($response->getBody(), true))->with('clanWarSearchData', json_decode($resClanWar->getBody(), true));
				//return $response->getBody();,
			}
		}catch(ClientException $e){
			return redirect()->back()->withErrors(['searchErrMsg'=>'Unable to find a player or clan with that tag.']);
		}catch(ServerException $e){
			return redirect()->back()->withErrors(['searchErrMsg'=>'Unable to find a player or clan with that tag.']);
		}
		return redirect()->back()->withErrors(['searchErrMsg'=>'Unable to find a player or clan with that tag.']);
		//return 'Form submitted! The search tag is: ' . $request->input('searchTag') . ' with option=>' . $request->input('searchOption');
	}
}