@extends('includes.layout')
@section('title')
	@if(isset($clanWarData) && isset($clanData))
	{{$clanData['name']}} | War History
	@else
	Error
	@endif
@endsection
@section('content')
@if(isset($clanData) && isset($clanWarData))
	<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
		<div class="container">
			<div class="d-flex flex-row flex-wrap align-content-center justify-content-center align-items-center">
				<div class="d-flex flex-column col-12 col-md-3 align-items-center">
					<img src="{{$clanData['badge']['image']}}" alt="clan badge">
				</div>
				<div class="d-flex flex-column col-12 col-md-9 align-items-center">
					<h1 class="display-3 text-center">{{$clanData['name']}}</h1>
				</div>
			</div>
			<hr class="fancy" />
			<div class="row">
				<div class="col-12">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Clan Tag</h5>
						<p class="lead text-center">{{$clanData['tag']}}</p>
					</div>
				</div>
				<div class="col-12">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">
							Description
						</h5>
						<p class="lead text-center">
							{{$clanData['description']}}
						</p>
					</div>
				</div>
				<div class="col-12 mt-3">
					<h2 class="display-4 text-center">Clan War History</h2>
				</div>
			</div>
		</div>
	</div>
	@foreach($clanWarData as $clanWarData)
		<div class="row bg-primary mt-5 py-4">
			<div class="col-12 m-0 text-white">
				<h4 class="text-center">Season Number: {{$clanWarData['seasonNumber']}}</h4>
				<p class="text-center lead clanWarDatetime">{{$clanWarData['createdDate']}}</p>
			</div>
		</div>
		<div class="container mt-3 box-shadow-1 px-0">
			<div class="row bg-success m-0 py-2">
				<div class="col-12 m-0 text-white">
					<h3 class="text-center">Participants</h3>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-dark table-hover m-0">
					<thead class="bg-success">
						<tr class="text-center">
							<th scope="col">Rank</th>
							<th scope="col px-1">Username</th>
							<th scope="col">Tag</th>
							<th scope="col">Cards Earned</th>
							<th scope="col">Battles Played</th>
							<th scope="col">Wins</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1 ?>
						@foreach($clanWarData['participants'] as $member)
							<tr class="text-center">
								<td class="px-0 mx-0">{{$i++}}</td>
								<th scope="row px-1"><a class="text-white" href="/player/{{$member['tag']}}">{{$member['name']}}</a></th>
								<td>{{$member['tag']}}</td>
								<td>{{$member['cardsEarned']}}</td>
								<td>{{$member['battlesPlayed']}}</td>
								<td>{{$member['wins']}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="container mb-5 box-shadow-1 px-0">
			<div class="row bg-warning m-0 py-2">
				<div class="col-12 m-0">
					<h3 class="text-center text-black">Clan Standings</h3>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-dark table-hover m-0">
					<thead class="bg-warning">
						<tr class="text-center text-black">
							<th scope="col">Rank</th>
							<th scope="col px-1">Clan Name</th>
							<th scope="col">Particpants</th>
							<th scope="col">Battles Played</th>
							<th scope="col">Wins</th>
							<th scope="col">Crowns</th>
							<th scope="col">War Trophies</th>
						</tr>
					</thead>
					<tbody>
						<?php $j=1 ?>
						@foreach($clanWarData['standings'] as $clan)
							<tr class="text-center">
								<td class="px-0 mx-0">{{$j++}}</td>
								<th scope="row px-1"><a class="text-white" href="/clan/{{$clan['tag']}}">{{$clan['name']}}</a></th>
								<td>{{$clan['participants']}}</td>
								<td>{{$clan['battlesPlayed']}}</td>
								<td>{{$clan['wins']}}</td>
								<td>{{$clan['crowns']}}</td>
								<td>{{$clan['warTrophies']}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>			
		</div>
	@endforeach
@else
	<div class="container">
		<div class="d-flex flex-row justify-content-center align-items-center align-content-center h-v100">
			<h2 class="text-secondary display-4">{{$errors->first('clanWarErr')}}</h2>
		</div>
	</div>
@endif
	@include('includes.search')
@endsection
@section('scripts')
	<script>
		document.addEventListener('DOMContentLoaded', function(e){
			var battleDates = document.querySelectorAll('.clanWarDatetime');
			for(var i=0; i < battleDates.length; i++){
				var utcSec = battleDates[i].innerHTML;
				var dateTime = new Date(utcSec*1000);
				battleDates[i].innerHTML = dateTime;
			}
		});
	</script>
@endsection