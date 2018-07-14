<div class="jumbotron jumbotron-fluid bg-light text-black m-0">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="display-4">Search</h1>
			</div>
		</div>
		{!! Form::open(['action'=>'SearchController@search', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					 	<span class="input-group-text" id="searchbar-addon">#</span>
					</div>
					{{Form::text('searchTag', $value=null, ['class'=>'form-control', 'placeholder'=>'Enter tag...'])}}
					<div class="input-group-append">
						{{Form::submit('Search', ['class'=>'btn btn-primary'])}}
					</div>
				</div> 
			</div>
			<div class="col-12">
				<p>Search By:</p>
			</div>
			<div class="form-check mx-5">
				<input class="form-check-input" type="radio" name="searchOption" value="player" id="playerRadioCheck" checked>
				<label class="form-check-label" for="playerRadioCheck">
					Player
				</label>
			</div>
			<div class="form-check mx-5">
				<input type="radio" name="searchOption" class="form-check-input" value="clan" id="clanRadioCheck">
				<label class="form-check-label" for="clanRadioCheck">
					Clan
				</label>
			</div>
		{!!Form::close()!!}
	</div>
</div>