@extends('includes.layout')
@section('title')
	@if(isset($clanWarData) && isset($clanData))
	{{$clanData['name']}} | War History
	@else
	Error
	@endif
@endsection
@section('content')
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
<div class="container">
@foreach($clanWarData as $clanWar)

@endforeach
</div>
@endsection
@section('scripts')
@endsection