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

class AccountController extends Controller{
	public function contact(Request $request){
		$this->validate($request, [
			'email'=>'required',
			'firstName'=>'required',
			'lastName'=>'required',
			'subject'=>'required',
			'message'=>'required'
		]);
		$email = $request->input('email');
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$subject = $request->input('subject');
		$message = $request->input('message');
		//sanitize email and check for valid entry
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if($email == null || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			//invalid email
		}
		if(empty($firstName) || is_null($firstName)){
			//null or empty first name
		}
		if(empty($lastName) || is_null($lastName)){
			//null or empty last name
		}
		if(empty($subject) || is_null($subject)){
			//null or empty subject
		}
		if(empty($message) || is_null($message)){
			//null or empty message
		}

		//no errors, send email
	}
}