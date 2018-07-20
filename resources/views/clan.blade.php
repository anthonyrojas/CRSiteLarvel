@extends('includes.layout')
@section('title')
	@if(isset($clanData))
		{{$clanData['name']}}
	@else
		Error
	@endif
@endsection
@section('content')
	@include('includes.search')
	@if(isset($clanData))
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
				<div class="col-12 col-md-6">
					<div class="card bg-clash-1 border-white mb-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/type.png')}}" alt="clan type image">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Type</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['type']}}
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-2 border-white mb-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/members.png')}}" alt="clan members icon">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Member Count</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['memberCount']}}/50
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-3 border-white mb-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/location.png')}}" alt="location icon">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Location</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['location']['name']}}
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-1 border-white mb-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/trophies.png')}}" alt="clan trophies icon">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Trophies</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['score']}}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-2 border-white mb-2">
						<div class="bg-black-overlay p-2 h-100">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="clan donations icon">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Donations</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['donations']}}
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-3 border-white mb-2">
						<div class="bg-black-overlay p-2 h-100">
							<div class="row">
								<div class="col-2">
									<img class="img-desc-icon" src="{{url('/images/clan/required_trophies.png')}}" alt="clan required trophies icon">
								</div>
								<div class="col-10">
									<h5 class="card-title text-center">Required Trophies</h5>
									<p class="lead text-center first-letter-uppercase">
										{{$clanData['requiredScore']}}
									</p>								
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container bg-light p-0 my-0 box-shadow-1">
		<div class="table-responsive">
			<table class="table table-dark table-hover m-0">
				<thead class="bg-primary">
					<tr class="text-center">
						<th scope="col">Rank</th>
						<th scope="col px-1">Username</th>
						<th scope="col">Trophies</th>
						<th scope="col">Level</th>
						<th scope="col">Arena</th>
						<th scope="col">Role</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1 ?>
					@foreach($clanData['members'] as $member)
						<tr class="text-center">
							<td class="px-0 mx-0">{{$i++}}</td>
							<th scope="row px-1"><a class="text-white" href="/player/{{$member['tag']}}">{{$member['name']}}</a></th>
							<td>{{$member['trophies']}}</td>
							<td>{{$member['expLevel']}}</td>
							<td>{{$member['arena']['name']}}</td>
							<td class="first-letter-uppercase">{{$member['role']}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@else
	<div class="container">
		<div class="d-flex flex-row justify-content-center align-items-center align-content-center h-v100">
			<h2 class="text-secondary display-4">{{$errors->first('clanErr')}}</h2>
		</div>
	</div>
	@endif
@endsection