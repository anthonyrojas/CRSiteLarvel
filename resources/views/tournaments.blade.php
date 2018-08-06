@extends('includes.layout')
@section('title')
Open Tournaments
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
	<div class="container">
		<div class="row py-2">
			<div class="col-12">
				<h1 class="display-3 text-center">Open Tournaments</h1>
			</div>
			<div class="col-12">
				<p class="lead text-white">From here you may see which tournaments are currently open for you to join. Within Clash Royale, search for a specific tournament via tag to find it right away. May this bring you many cards.</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		@foreach($tournamentData as $tournament)
		@if($tournament['currentPlayers'] < $tournament['maxPlayers'])
		<div class="col-md-6 col-lg-4 col-12 p-0">
			<div class="card m-2 box-shadow-1">
				<div class="card-header pb-0 bg-dark text-white">
					<img alt="tournament-logo" class="img-desc-icon d-block" src="images/battles/Tournament.png" style="margin: 0 auto;">
					<h5 class="card-title text-center">{{$tournament['name']}}</h5>
				</div>
				<div class="card-body bg-secondary text-white p-0">
					<ul class="list-group list-group-flush">
					    <li class="list-group-item bg-secondary">
					    	<p class="text-center m-0">Players: {{$tournament['currentPlayers']}}/{{$tournament['maxPlayers']}}</p>
					    </li>
					    <li class="list-group-item bg-secondary">
							<p class="text-center text-capitalize m-0">						
								<?php 
									$formattedStatus = preg_split('/(?=[A-Z])/', $tournament['status']);
									print 'Status: ' . join(' ', $formattedStatus);
								?>
							</p>
					    </li>
					    <li class="list-group-item bg-secondary px-0">
					    	<p class="text-center text-capitalize m-0">
					    		Description: <small>{{$tournament['description']}}</small>
					    	</p>
					    </li>
  					</ul>
				</div>
				<div class="card-footer bg-dark text-white p-0">
					<p class="lead text-center">Tag: #{{$tournament['tag']}}</p>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</div>
@endsection