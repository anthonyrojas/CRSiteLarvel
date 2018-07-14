@extends('includes.layout')
@section('title')
	{{$clanData['name']}}
@endsection
@section('content')
	@include('includes.search')
	<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
		<div class="container">
			<div class="d-flex flex-row justify-content-center align-items-center">
				<img src="{{$clanData['badge']['image']}}" alt="clan badge">&nbsp;&nbsp;<h1 class="display-2 text-center">{{$clanData['name']}}</h1>
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
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Type</h5>
						<p class="lead text-center">
							{{$clanData['type']}}
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Member Count</h5>
						<p class="lead text-center">
							{{$clanData['memberCount']}}/50
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Location</h5>
						<p class="lead text-center">
							{{$clanData['location']['name']}}
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Score</h5>
						<p class="lead text-center">
							{{$clanData['score']}}
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Donations</h5>
						<p class="lead text-center">
							{{$clanData['donations']}}
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-black border-white p-2 mb-2">
						<h5 class="card-title text-center">Required Score</h5>
						<p class="lead text-center">
							{{$clanData['requiredScore']}}
						</p>
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
						<th scope="col px-1">Username</th>
						<th scope="col">Trophies</th>
						<th scope="col">Level</th>
						<th scope="col">Arena</th>
						<th scope="col">Role</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clanData['members'] as $member)
						<tr class="text-center">
							<th scope="row px-1">{{$member['name']}}</th>
							<td>{{$member['trophies']}}</td>
							<td>{{$member['expLevel']}}</td>
							<td>{{$member['arena']['name']}}</td>
							<td>{{$member['role']}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection