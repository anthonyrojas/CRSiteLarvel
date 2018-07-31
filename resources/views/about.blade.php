@extends('includes.layout')
@section('title')
About
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
	<div class="container">
		<div class="row py-3">
			<div class="col-12">
				<h1 class="display-3 text-center">About</h1>
			</div>
		</div>
	</div>
</div>
<div class="container py-3 mb-3">
	<div class="row bg-dark py-3 px-1 box-shadow-1">
		<div class="col-12">
			<p class="lead text-white">
				This website is built on Laravel and draws data from the wonderful public service named RoyaleAPI. Any error you may find with information about your clan or player profile is due to the data being pulled from RoyaleAPI. That being said, there is rarely ever an issue or problem between information. Their service provides real-time updates on information as well, which is a big help to making this a smooth and reliable website.
			</p>
			<p class="lead text-white">
				One drawback to their service, however, is their insistance on limiting the number of requests to 5/second. This may cause problems at times if traffic gets overly heavy on this site. So stay calm and don't panic if you see that you cannot load a page at times. It is not the end of the Normie world.
			</p>
			<p class="lead text-white">
				A contact form is provided below to address any problems, errors, or issues you may have or experience while using this site. Or you can just send stuff for lulz. Your choice.
			</p>
		</div>
	</div>
</div>
<div class="container py-5 bg-dark box-shadow-1">
	<div class="row my-4">
		<div class="col-12">
			<h3 class="text-white text-center">Contact</h3>
		</div>
	</div> 
	{!! Form::open(['action'=>'AccountController@contact', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group py-3">
			<div class="input-group">
				{{Form::email('email', $value=null, ['class'=>'form-control', 'placeholder'=>'Email'])}}
			</div> 
		</div>
		<div class="form-group py-3">
			<div class="input-group">
				{{Form::text('subject', $value=null, ['class'=>'form-control', 'placeholder'=>'Subject'])}}
			</div>
		</div>
		<div class="form-group py-3">
			<div class="input-group">
				{{Form::textarea('message', $value=null, ['class'=>'form-control', 'placeholder'=>'Email Message...'])}}
			</div>
		</div>
		<div class="form-group text-center">
			{{Form::submit('Send', ['class'=>'btn btn-success'])}}
		</div>
	{!!Form::close()!!}
</div>
@endsection
@section('scripts')
@endsection