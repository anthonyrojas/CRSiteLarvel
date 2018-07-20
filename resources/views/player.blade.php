@extends('includes.layout')
@section('title')
	@if(isset($playerData))
	{{$playerData['name']}}
	@else
	Error
	@endif
@endsection
@section('content')
	@include('includes.search')
	@if(isset($playerData))
	<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
		<div class="container">
			<div class="d-flex flex-row flex-wrap align-content-center justify-content-center align-items-center">
				<div class="d-flex flex-column col-12 col-md-3 align-items-center">
					@if($playerData['clan'] == null)
					<img src="/images/clan/no_clan.png" alt="no clan badge">
					@else
					<img src="{{$playerData['clan']['badge']['image']}}" alt="clan badge">
					@endif
				</div>
				<div class="d-flex flex-column col-12 col-md-9 align-items-center">
					<h1 class="display-3 text-center">{{$playerData['name']}}</h1>
				</div>
			</div>
			<hr class="fancy" />
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-3">
						<h4 class="card-title text-center">Player Tag</h4>
						<p class="lead text-center">{{$playerData['tag']}}</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-3">
						@if($playerData['clan'] != null)
						<h4 class="card-title text-center">Clan</h4>
						<p class="lead text-center">
							<span class="first-letter-uppercase">
								{{$playerData['clan']['role']}}
							</span> at 
							<a class="text-white" href="/player/{{$playerData['clan']['tag']}}">
								{{$playerData['clan']['name']}}
							</a>
						</p>
						@else
						<h4 class="card-title text-center">Clan</h4>
						<p class="lead text-center">No Clan</p>
						@endif
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-1 mb-3 border-white">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/trophies.png')}}" alt="trophies icon">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Trophies</h4>
									<p class="lead text-center">{{$playerData['trophies']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-2 mb-3 border-white">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="/images/arenas/{{$playerData['arena']['arenaID']}}.png" alt="arena image">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Arena</h4>
									<p class="lead text-center">{{$playerData['arena']['name']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-3 mb-3 border-white">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/required_trophies.png')}}" alt="highest trophies">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Highest Trophies</h4>
									<p class="lead text-center">{{$playerData['stats']['maxTrophies']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-4 border-white">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="total donations img">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Total Donations</h4>
									<p class="lead text-center">{{$playerData['stats']['totalDonations']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-1 border-white mb-3">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/type.png')}}" alt="level img">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Level</h4>
									<p class="lead text-center">{{$playerData['stats']['level']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-2 border-white mb-3">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/battles/win_badge.png')}}" alt="3 crown wins">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">3 Crown Wins</h4>
									<p class="lead text-center">{{$playerData['stats']['threeCrownWins']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-3 border-white mb-3">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="level img">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Donations Made</h4>
									<p class="lead text-center">{{$playerData['clan']['donations']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-4 border-white mb-3">
						<div class="bg-black-overlay h-100 p-3">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="3 crown wins">
								</div>
								<div class="col-10">
									<h4 class="card-title text-center">Donations Received</h4>
									<p class="lead text-center">{{$playerData['clan']['donationsReceived']}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="table-responsive box-shadow-1 m-0">
				<table class="table table-bordered table-dark m-0">
					<h4 class="bg-primary text-white p-2 m-0 text-center">Game Stats</h4>
					<tbody>
						<tr class="">
							<th scope="row" class="text-center">Total Games</th>
							<td>{{$playerData['games']['total']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Tournament Games</th>
							<td>{{$playerData['games']['tournamentGames']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Wins</th>
							<td>{{$playerData['games']['wins']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">War Day Wins</th>
							<td>{{$playerData['games']['warDayWins']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Win Percentage</th>
							<td>{{$playerData['games']['winsPercent']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Losses</th>
							<td>{{$playerData['games']['losses']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Loss Percentage</th>
							<td>{{$playerData['games']['lossesPercent']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Draws</th>
							<td>{{$playerData['games']['draws']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Draws Percentage</th>
							<td>{{$playerData['games']['drawsPercent']}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@if(isset($playerData['leagueStatistics']))
	<div class="container">
		<div class="row">
			<div class="table-responsive box-shadow-1 m-0">
				<table class="table table-bordered table-dark m-0">
					<h4 class="bg-warning text-dark p-2 m-0 text-center">League Stats</h4>
					<thead class="bg-secondary">
						<tr>
							<th scope="col" class="text-center">Season</th>
							<th scope="col">Trophies</th>
							<th scope="col">Highest Trophies</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" class="text-center">Current Season</th>
							<td>
								<img src="{{url('/images/clan/trophies.png')}}" class="img-icon" alt="trophies icon">
								{{$playerData['leagueStatistics']['currentSeason']['trophies']}}
							</td>
							<td>
								<img src="{{url('/images/clan/trophies.png')}}" class="img-icon" alt="trophies icon">
								{{$playerData['leagueStatistics']['currentSeason']['bestTrophies']}}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endif
	@else
	<div class="container">
		<div class="d-flex flex-row justify-content-center align-items-center align-content-center h-v100">
			<h2 class="text-secondary display-4">{{$errors->first('playerErr')}}</h2>
		</div>
	</div>
	@endif
@endsection