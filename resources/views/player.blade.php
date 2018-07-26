@extends('includes.layout')
@section('title')
	@if(isset($playerData))
	{{$playerData['name']}}
	@else
	Error
	@endif
@endsection
@section('content')
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
							<a class="text-white" href="/clan/{{$playerData['clan']['tag']}}">
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
			<div class="table-responsive box-shadow-1 mx-0 my-3">
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
							<td class="bg-primary">{{$playerData['games']['winsPercent']*100}}%</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Losses</th>
							<td>{{$playerData['games']['losses']}}</td>
						</tr>
						<tr class="bg">
							<th scope="row" class="text-center">Loss Percentage</th>
							<td class="bg-danger">{{$playerData['games']['lossesPercent']*100}}%</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Draws</th>
							<td>{{$playerData['games']['draws']}}</td>
						</tr>
						<tr class="">
							<th scope="row" class="text-center">Draws Percentage</th>
							<td class="bg-secondary">{{$playerData['games']['drawsPercent']*100}}%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@if(isset($playerData['leagueStatistics']))
	<div class="container">
		<div class="row">
			<div class="table-responsive box-shadow-1 mx-0 my-3">
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
							@if(isset($playerData['leagueStatistics']['currentSeason']['bestTrophies']))
							<td>
								<img src="{{url('/images/clan/trophies.png')}}" class="img-icon" alt="trophies icon">
								{{$playerData['leagueStatistics']['currentSeason']['bestTrophies']}}
							</td>
							@endif
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endif
	<div class="row mt-3">
		<div class="col-12 px-4 bg-white">
			<ul class="nav nav-pills" role="tablist" id="playerTabs">
				<li class="nav-item w-50 text-center">
					<a class="nav-link active" id="pills-cards-chests-tab" href="#cards-and-chests" data-toggle="pill" role="tab" aria-controls="cards-and-chests" aria-selected="true">Cards and Chests</a>
				</li>
				<li class="nav-item w-50 text-center">
					<a class="nav-link" id="pills-battle-history-tab" href="#battle-history" data-toggle="pill" role="tab" aria-controls="battle-history" aria-selected="true">Battle History</a>
				</li>
			</ul>	
		</div>
	</div>
	<div class="tab-content">
		<section id="cards-and-chests" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-cards-chests-tab">
			<div class="jumbotron jumbotron-fluid bg-faded-blue text-white mb-2 mt-0">
				<div class="row">
					<div class="col-12">
						<h2 class="display-4 mb-3 text-center">Cards</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="card bg-clash-1 border-white mb-3">
								<div class="bg-black-overlay h-100 p-2">
									<div class="row">
										<div class="col-2">
											<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="cards">
										</div>
										<div class="col-10">
											<h4 class="card-title text-center">Cards Found</h4>
											<p class="lead text-center">{{$playerData['stats']['cardsFound']}}</p>
										</div>
									</div>
								</div>
							</div>					
						</div>
						<div class="col-12 col-md-6">
							<div class="card bg-clash-2 border-white mb-3">
								<div class="bg-black-overlay h-100 p-2">
									<div class="row">
										<div class="col-2">
											<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="cards">
										</div>
										<div class="col-10">
											<h4 class="card-title text-center">Clan Cards Collected</h4>
											<p class="lead text-center">{{$playerData['stats']['clanCardsCollected']}}</p>
										</div>
									</div>
								</div>
							</div>					
						</div>
						<div class="col-12 col-md-6">
							<div class="card bg-clash-3 border-white mb-3">
								<div class="bg-black-overlay h-100 p-2">
									<div class="row">
										<div class="col-2">
											<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="cards">
										</div>
										<div class="col-10">
											<h4 class="card-title text-center">Tournament Cards Won</h4>
											<p class="lead text-center">{{$playerData['stats']['tournamentCardsWon']}}</p>
										</div>
									</div>
								</div>
							</div>					
						</div>
						<div class="col-12 col-md-6">
							<div class="card bg-clash-4 border-white mb-3">
								<div class="bg-black-overlay h-100 p-2">
									<div class="row">
										<div class="col-2">
											<img class="img-desc-icon" src="{{url('/images/clan/donations.png')}}" alt="cards">
										</div>
										<div class="col-10">
											<h4 class="card-title text-center">Challenge Cards Won</h4>
											<p class="lead text-center">{{$playerData['stats']['challengeCardsWon']}}</p>
										</div>
									</div>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<div class="container py-5">
				<div class="row bg-dark box-shadow-1 py-5 px-3">
					<div class="col-12">
						<h3 class="text-center text-white">Current Deck</h3>
					</div>
					@foreach($playerData['currentDeck'] as $deckCard)
					<div class="col-6 col-md-3 my-2">
						<div class="card bg-none">
							<img class="card-img-top" alt="{{$deckCard['name']}}" src="{{$deckCard['icon']}}">
							<div class="card-body p-0">
								<p class="card-text text-center text-white"><strong>{{$deckCard['name']}}</strong></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="container py-5">
				<div class="row bg-dark box-shadow-1 py-5 px-3">
					<div class="col-12">
						<h3 class="text-center text-white">Cards Found</h3>
					</div>
					@foreach($playerData['cards'] as $card)
					<div class="col-4 col-md-3 col-lg-2 mx-0 px-0">
						<div class="card bg-card-gradient">
							<img class="card-img-top" alt="{{$card['name']}}" src="{{$card['icon']}}">
							<div class="card-body px-1">
								<p class="card-text text-center">{{$card['name']}}</p>
								<div class="progress">
									@if($card['requiredForUpgrade'] != 'Maxed' && !isset($card['leftToUpgrade']))
									<div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="{{$card['requiredForUpgrade']}}" aria-valuemin="0" aria-valuemax="{{$card['requiredForUpgrade']}}">Data N/A</div>
									@elseif($card['requiredForUpgrade'] != 'Maxed' && $card['leftToUpgrade'] > 0)
									<div class="progress-bar" role="progressbar" style="width: {{$card['leftToUpgrade']*100/$card['requiredForUpgrade']}}%;" aria-valuenow="{{$card['leftToUpgrade']}}" aria-valuemin="0" aria-valuemax="{{$card['requiredForUpgrade']}}"></div>
									@elseif($card['requiredForUpgrade'] != 'Maxed' && $card['leftToUpgrade'] < 0)
									<div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="$card['requiredForUpgrade']}}" aria-valuemin="0" aria-valuemax="{{$card['requiredForUpgrade']}}">Upgrade!</div>
									@else
									<div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Max</div>
									@endif
								</div>
								<p class="text-center"><small>Level {{$card['level']}}</small></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="row py-5" style="background-color: #EAEAEA;">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="text-center">Chest Cycle</h3>
						</div>
						@foreach($playerChestData['upcoming'] as $chest)
						<div class="col-3 col-md-2">
							<img src="{{url('/images/chests/'.$chest.'.png')}}" alt="{{$chest}}" class="img-thumbnail bg-none">
						</div>
						@endforeach
						<div class="col-3 col-md-2">
							<span class="badge badge-secondary float-right">+{{$playerChestData['giant']+1}}</span>
							<img src="/images/chests/giant.png" alt="giant chest" class="img-thumbnail bg-none">
						</div>
						<div class="col-3 col-md-2">
							<span class="badge badge-secondary float-right">+{{$playerChestData['epic']+1}}</span>
							<img src="/images/chests/epic.png" alt="epic chest" class="img-thumbnail bg-none">
						</div>
						<div class="col-3 col-md-2">
							<span class="badge badge-secondary float-right">+{{$playerChestData['magical']+1}}</span>
							<img src="/images/chests/magical.png" alt="magical chest" class="img-thumbnail bg-none">
						</div>
						<div class="col-3 col-md-2">
							<span class="badge badge-secondary float-right">+{{$playerChestData['superMagical']+1}}</span>
							<img src="/images/chests/superMagical.png" alt="super magical chest" class="img-thumbnail bg-none">
						</div>
						<div class="col-3 col-md-2">
							<span class="badge badge-secondary float-right">+{{$playerChestData['legendary']+1}}</span>
							<img src="/images/chests/legendary.png" alt="legendary chest" class="img-thumbnail bg-none">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="battle-history" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-battle-history-tab">
			<div class="row bg-faded-blue">
				<div class="col-12 py-5">
					<h2 class="display-4 text-center text-white">Battle History</h2>
				</div>
			</div>
			@if(count($playerBattlesData) > 10)
				@for($i=0; $i<10; $i++)
				<div class="container my-3 py-3">
					<div class="row box-shadow-1 bg-dark py-3 px-1">
						<div class="col-12">
							<h3 class="first-letter-uppercase text-center text-white">
								<?php
									$battleType = str_replace('_', '', $playerBattlesData[$i]['type']);
									if($battleType == 'PvP'){
										echo($battleType);
									}else{
										$formattedType = preg_split('/(?=[A-Z])/', $battleType); 
										print join(' ', $formattedType);
									}
								?>	
							</h3>
							<h3 class="first-letter-uppercase text-center text-white">
								<?php
									$battleMode = str_replace('_', '', $playerBattlesData[$i]['mode']['name']);
									$formattedMode = preg_split('/(?=[A-Z])/', $battleMode); 
									print join(' ', $formattedMode);
								?>	
							</h3>
							@if($playerBattlesData[$i]['winner'] > 0)
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-primary">Win</span></h4>
							@elseif($playerBattlesData[$i]['winner'] < 0)
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-danger">Loss</span></h4>
							@else
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-secondary">Draw</span></h4>
							@endif
							<div class="row px-1">
								<div class="col-12 col-md-6 bg-primary">
									<div class="row">
										<div class="col-12 bg-light text-center py-2">
											<img src="/images/battles/team.png" class="img-icon" alt="team crowns">
											<span class="py-1 px-4 bg-black text-white">{{$playerBattlesData[$i]['teamCrowns']}}</span>
										</div>
									</div>
									@foreach($playerBattlesData[$i]['team'] as $player)
									<div class="row pt-2">
										<div class="col-12 my-2">
											<p class="lead text-center">
												@if(isset($player['clan']) && $player['clan'] != null)
												<img class="img-icon" alt="player clan" src="{{$player['clan']['badge']['image']}}">
												@endif
												<a href="/player/{{$player['tag']}}" class="bg-black text-white p-2">
												{{$player['name']}}
												</a>
											</p>
											@if(isset($player['clan']) && $player['clan'] != null)
											<p class="text-center">
												<a href="/clan/{{$player['clan']['tag']}}" class="bg-light p-1">
												{{$player['clan']['name']}}
												</a>
											</p>
											@endif
										</div>
									</div>
									<div class="row p-0 mx-0 my-2">
										@foreach($player['deck'] as $card)
										<div class="col-4 col-lg-3 m-0 p-0">
											<div class="card bg-card-gradient m-0">
												<img src="{{$card['icon']}}" class="card-img-top">
												<div class="card-body p-0">
													<small><p class="text-center">{{$card['name']}}</p></small>
													<p class="text-center"><span class="badge badge-secondary">Lvl.{{$card['level']}}</span></p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									@endforeach
								</div>
								<div class="col-12 col-md-6 bg-danger">
									<div class="row">
										<div class="col-12 bg-light text-center py-2">
											<img src="/images/battles/opponent.png" class="img-icon" alt="opponent crowns">
											<span class="py-1 px-4 bg-black text-white">{{$playerBattlesData[$i]['opponentCrowns']}}</span>
										</div>
									</div>
									@foreach($playerBattlesData[$i]['opponent'] as $player)
									<div class="row pt-2">
										<div class="col-12 my-2">
											<p class="lead text-center">
												@if(isset($player['clan']) && $player['clan'] != null)
												<img class="img-icon" alt="player clan" src="{{$player['clan']['badge']['image']}}">
												@endif
												<a href="/player/{{$player['tag']}}" class="bg-black text-white p-2">
												{{$player['name']}}
												</a>
											</p>
											@if(isset($player['clan']) && $player['clan'] != null)
											<p class="text-center">
												<a href="/clan/{{$player['clan']['tag']}}" class="bg-light p-1">
												{{$player['clan']['name']}}
												</a>
											</p>
											@endif
										</div>
									</div>
									<div class="row p-0 mx-0 my-2">
										@foreach($player['deck'] as $card)
										<div class="col-4 col-lg-3 m-0 p-0">
											<div class="card bg-card-gradient m-0">
												<img src="{{$card['icon']}}" class="card-img-top">
												<div class="card-body p-0">
													<small><p class="text-center">{{$card['name']}}</p></small>
													<p class="text-center"><span class="badge badge-secondary">Lvl.{{$card['level']}}</span></p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="col-12 text-center pt-4">
							<p class="playerBattleDatetime text-center text-white">{{$playerBattlesData[$i]['utcTime']}}</p>
						</div>
					</div>
				</div>
				@endfor
			@else
				@for($i=0; $i<count($playerBattlesData); $i++)
				<div class="container my-3 py-3">
					<div class="row box-shadow-1 bg-dark py-3 px-1">
						<div class="col-12">
							<h3 class="first-letter-uppercase text-center text-white">
								<?php
									$battleType = str_replace('_', '', $playerBattlesData[$i]['type']);
									if($battleType == 'PvP'){
										echo($battleType);
									}else{
										$formattedType = preg_split('/(?=[A-Z])/', $battleType); 
										print join(' ', $formattedType);
									}
								?>	
							</h3>
							<h3 class="first-letter-uppercase text-center text-white">
								<?php
									$battleMode = str_replace('_', '', $playerBattlesData[$i]['mode']['name']);
									$formattedMode = preg_split('/(?=[A-Z])/', $battleMode); 
									print join(' ', $formattedMode);
								?>	
							</h3>
							@if($playerBattlesData[$i]['winner'] > 0)
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-primary">Win</span></h4>
							@elseif($playerBattlesData[$i]['winner'] < 0)
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-danger">Loss</span></h4>
							@else
							<h4 class="text-center text-white my-4"><span class="py-1 px-4 bg-secondary">Draw</span></h4>
							@endif
							<div class="row px-1">
								<div class="col-12 col-md-6 bg-primary">
									<div class="row">
										<div class="col-12 bg-light text-center py-2">
											<img src="/images/battles/team.png" class="img-icon" alt="team crowns">
											<span class="py-1 px-4 bg-black text-white">{{$playerBattlesData[$i]['teamCrowns']}}</span>
										</div>
									</div>
									@foreach($playerBattlesData[$i]['team'] as $player)
									<div class="row pt-2">
										<div class="col-12 my-2">
											<p class="lead text-center">
												@if(isset($player['clan']) && $player['clan'] != null)
												<img class="img-icon" alt="player clan" src="{{$player['clan']['badge']['image']}}">
												@endif
												<a href="/player/{{$player['tag']}}" class="bg-black text-white p-2">
												{{$player['name']}}
												</a>
											</p>
											@if(isset($player['clan']) && $player['clan'] != null)
											<p class="text-center">
												<a href="/clan/{{$player['clan']['tag']}}" class="bg-light p-1">
												{{$player['clan']['name']}}
												</a>
											</p>
											@endif
										</div>
									</div>
									<div class="row p-0 mx-0 my-2">
										@foreach($player['deck'] as $card)
										<div class="col-4 col-lg-3 m-0 p-0">
											<div class="card bg-card-gradient m-0">
												<img src="{{$card['icon']}}" class="card-img-top">
												<div class="card-body p-0">
													<small><p class="text-center">{{$card['name']}}</p></small>
													<p class="text-center"><span class="badge badge-secondary">Lvl.{{$card['level']}}</span></p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									@endforeach
								</div>
								<div class="col-12 col-md-6 bg-danger">
									<div class="row">
										<div class="col-12 bg-light text-center py-2">
											<img src="/images/battles/opponent.png" class="img-icon" alt="opponent crowns">
											<span class="py-1 px-4 bg-black text-white">{{$playerBattlesData[$i]['opponentCrowns']}}</span>
										</div>
									</div>
									@foreach($playerBattlesData[$i]['opponent'] as $player)
									<div class="row pt-2">
										<div class="col-12 my-2">
											<p class="lead text-center">
												@if(isset($player['clan']) && $player['clan'] != null)
												<img class="img-icon" alt="player clan" src="{{$player['clan']['badge']['image']}}">
												@endif
												<a href="/player/{{$player['tag']}}" class="bg-black text-white p-2">
												{{$player['name']}}
												</a>
											</p>
											@if(isset($player['clan']) && $player['clan'] != null)
											<p class="text-center">
												<a href="/clan/{{$player['clan']['tag']}}" class="bg-light p-1">
												{{$player['clan']['name']}}
												</a>
											</p>
											@endif
										</div>
									</div>
									<div class="row p-0 mx-0 my-2">
										@foreach($player['deck'] as $card)
										<div class="col-4 col-lg-3 m-0 p-0">
											<div class="card bg-card-gradient m-0">
												<img src="{{$card['icon']}}" class="card-img-top">
												<div class="card-body p-0">
													<small><p class="text-center">{{$card['name']}}</p></small>
													<p class="text-center"><span class="badge badge-secondary">Lvl.{{$card['level']}}</span></p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="col-12 text-center pt-4">
							<p class="playerBattleDatetime text-white text-center">{{$playerBattlesData[$i]['utcTime']}}</p>
						</div>
					</div>
				</div>
				@endfor
			@endif
		</section>
	</div>
	@else
	<div class="container">
		<div class="d-flex flex-row justify-content-center align-items-center align-content-center h-v100">
			<h2 class="text-secondary display-4">{{$errors->first('playerErr')}}</h2>
		</div>
	</div>
	@endif
	@include('includes.search')
@endsection
@section('scripts')
	<script>
		$('#playerTabs a').on('click', function (e) {
  			e.preventDefault()
  			$(this).tab('show');
		});
		document.addEventListener('DOMContentLoaded', function(e){
			var battleDates = document.querySelectorAll('.playerBattleDatetime');
			for(var i=0; i < battleDates.length; i++){
				var utcSec = battleDates[i].innerHTML;
				var dateTime = new Date(utcSec*1000);
				battleDates[i].innerHTML = dateTime;
			}
		});
	</script>
@endsection