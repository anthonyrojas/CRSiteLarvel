@extends('includes.layout')
@section('title')
	Search
@endsection
@section('content')
	<div class="jumbotron jumbotron-fluid bg-light text-black mb-0 h-v100">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center"><h1 class="display-3">Search</h1></div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="lead">
						From here you can search for clans and players playing Clash Royale. Have a friend that plays this game but isn't in our clan? No problem! Now you can view their stats and their clan without having to open the Clash Royale app, making it a little easier and faster to keep track of them.
					</p>
				</div>
			</div>
			<form class="row" method="POST">
				<div class="col-12">
					<div class="form-group">
						<div class="input-group my-4">
							 <div class="input-group-prepend">
							 	<span class="input-group-text" id="searchbar-addon">#</span>
							 </div>
							<input type="text" class="form-control" placeholder="Enter tag..." aria-label="Enter tag..." aria-describedby="search-btn">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit" id="search-btn"><i class="material-icons">search</i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-1 col-11 my-3">
					<p>Search By:</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="searchOption" value="player" id="playerRadioCheck" checked>
						<label class="form-check-label" for="playerRadioCheck">
							Player
						</label>
					</div>
					<div class="form-check">
						<input type="radio" name="searchOption" class="form-check-input" value="clan" id="clanRadioCheck">
						<label class="form-check-label" for="clanRadioCheck">
							Clan
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection