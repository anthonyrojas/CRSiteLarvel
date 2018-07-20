<div class="jumbotron jumbotron-fluid bg-light text-black m-0" id="searchSection">
	<div class="container">
		@if($errors->first('searchErrMsg'))
			<div class="row" id="searchErr">
				<div class="col-12">
					<div class="alert alert-danger" role="alert">
						{{$errors->first('searchErrMsg')}}
					</div>
				</div>
			</div>
		@endif
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="display-5">Search</h2>
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
			<div class="col-12">
				<div class="form-check d-inline-block mx-5">
					<input class="form-check-input" type="radio" name="searchOption" value="player" id="playerRadioCheck" checked>
					<label class="form-check-label" for="playerRadioCheck">
						Player
					</label>
				</div>
				<div class="form-check d-inline-block mx-5">
					<input type="radio" name="searchOption" class="form-check-input" value="clan" id="clanRadioCheck">
					<label class="form-check-label" for="clanRadioCheck">
						Clan
					</label>
				</div>
			</div>
		{!!Form::close()!!}
	</div>
</div>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function(e){
		var searchErr = document.getElementById('searchErr');
		if(searchErr !== null && searchErr !== undefined){
			document.getElementById('searchSection').scrollIntoView();
		}
	})
</script>