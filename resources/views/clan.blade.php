@extends('includes.layout')
@section('title')
	@if(isset($clanData))
		{{$clanData['name']}}
	@else
		Error
	@endif
@endsection
@section('content')
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
		<div class="row bg-primary m-0 py-2">
			<div class="col-12 m-0 text-white">
				<h3 class="text-center">Members</h3>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-dark table-hover m-0">
				<thead class="bg-primary">
					<tr class="text-center">
						<th scope="col">Rank</th>
						<th scope="col px-1">Username</th>
						<th scope="col">Tag</th>
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
							<td>{{$member['tag']}}</td>
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
	<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-0">
		@if($clanWarData['state'] == 'notInWar')
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="display-4 text-white text-center">Clan War</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="lead text-center text-white">This clan is currently not in War.</p>
				</div>
			</div>
		</div>
		@elseif($clanWarData['state'] == 'collectionDay')
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="display-4 text-center">Clan War</h2>
					<p class="lead text-center">Collection Day</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card bg-clash-1 border-white my-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center">Particpants</h5>
								<p class="text-center lead">{{$clanWarData['clan']['participants']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card bg-clash-2 border-white my-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center">Battles Played</h5>
								<p class="text-center lead">{{$clanWarData['clan']['battlesPlayed']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card bg-clash-3 border-white my-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center">Wins</h5>
								<p class="text-center lead">{{$clanWarData['clan']['wins']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card bg-clash-4 border-white my-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center">Crowns</h5>
								<p class="text-center lead">{{$clanWarData['clan']['crowns']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card bg-clash-1 border-white my-2">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center">War Trophies</h5>
								<p class="text-center lead">{{$clanWarData['clan']['warTrophies']}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@else
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="display-4 text-center">Clan War</h2>
					<p class="lead text-center">War Day</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card bg-clash-1 my-2 border-white">
						<div class="bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center text-white">Participants</h5>
								<p class="text-center text-white lead">{{$clanWarData['clan']['participants']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-2 my-2 border-white">
						<div class="card bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center text-white">Battles Played</h5>
								<p class="text-center text-white lead">{{$clanWarData['clan']['battlesPlayed']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-3 my-2 border-white">
						<div class="card bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center text-white">Crowns</h5>
								<p class="text-center text-white lead">{{$clanWarData['clan']['crowns']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-4 my-2 border-white">
						<div class="card bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center text-white">War Trophies</h5>
								<p class="text-center text-white lead">{{$clanWarData['clan']['warTrophies']}}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="card bg-clash-1 my-2 border-white">
						<div class="card bg-black-overlay h-100 p-2">
							<div class="card-body p-0">
								<h5 class="card-title text-center text-white">Wins</h5>
								<p class="text-center text-white lead">{{$clanWarData['clan']['wins']}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
		@if($clanWarData['state'] == 'collectionDay')
		<div class="container my-5 box-shadow-1 px-0">
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
		@elseif($clanWarData['state'] == 'warDay')
		<div class="container my-5 box-shadow-1 px-0">
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
		<div class="container my-5 box-shadow-1 px-0">
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
		@endif

	@else
	<div class="container">
		<div class="d-flex flex-row justify-content-center align-items-center align-content-center h-v100">
			<h2 class="text-secondary display-4">{{$errors->first('clanErr')}}</h2>
		</div>
	</div>
	@endif
	@include('includes.search')
@endsection
@section('scripts')
@endsection