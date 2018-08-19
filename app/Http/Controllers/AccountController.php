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

class AccountController extends Controller{
	public function contact(Request $request){
		$this->validate($request, [
			'email'=>'required',
			'subject'=>'required',
			'message'=>'required'
		]);
		$email = $request->input('email');
		$subject = $request->input('subject');
		$emailMessage = $request->input('message');
		//sanitize email and check for valid entry
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if($email == null || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			//invalid email
			return redirect()->back()->withErrors(['emailFormErr'=>'You must enter a valid email.']);
		}
		if(empty($subject) || is_null($subject)){
			//null or empty subject
			return redirect()->back()->withErrors(['emailFormErr'=>'You must enter am email subject.']);
		}
		if(empty($emailMessage) || is_null($emailMessage)){
			//null or empty message
			return redirect()->back()->withErrors(['emailFormErr'=>'You must enter an email message.']);
		}
		$data = array('email'=>$email, 'emailMessage'=>$emailMessage, 'subject' => $subject);
      	Mail::send('mail.contactForm', $data, function($message) use ($email, $subject) {
        	$message->to('crnormies01@gmail.com', 'Sir Doge')->subject("Contact Form - " . $subject);
        	$message->from('crnormies01@gmail.com','CR Normie');
      	});
		return redirect()->back()->with('emailSuccess', 'Email sent successfully!');
	}

	public function sendMessage(){}
}