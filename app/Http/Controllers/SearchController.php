<?php
namespace App\Http\Controllers;

use Config;

//think of this like an interface that has to be imported and extended
use App\Http\Controllers\Controller;

//http request library
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
class SearchController extends Controller{
	public function index(){
		return view('search');
	}
	public function search(Request $request){

		return 'Form submitted! The search tag is: ' . $request->input('searchTag') . ' with option=>' . $request->input('searchOption');
	}
}