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
				$response = $client->request('GET', $reqPath, [
					'headers'=>$headers
				]);
				return redirect('player/' . $searchTag)->with(['playerSearchData' => json_decode($response->getBody(), true)]);
				//return $response->getBody();
			}else{
				$reqPath = '/clan/' . $searchTag;
				$response = $client->request('GET', $reqPath, [
					'headers'=>$headers
				]);
				return redirect('clan/' . $searchTag)->with(['clanSearchData' => json_decode($response->getBody(), true)]);
				//return $response->getBody();,
			}
		}catch(ClientException $e){
			return redirect()->back()->withErrors(['searchErrMsg'=>'Unable to find a player or clan with that tag.']);
		}catch(ServerException $e){
			return redirect()->back()->withErrors(['searchErrMsg'=>'Unable to find a player or clan with that tag.']);
		}
		return redirect()->back()->withErrors(['Unable to find a player or clan with that tag.']);
		//return 'Form submitted! The search tag is: ' . $request->input('searchTag') . ' with option=>' . $request->input('searchOption');
	}
}