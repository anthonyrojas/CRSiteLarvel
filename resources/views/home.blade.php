<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Normies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A website made for a Clash Royale clan named The Normies that allows us to keep track of everyone in the clan along with other Clash Royale game data.">
	<link rel="icon" href="{{asset('favicon.ico')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	@include('includes.nav')
	<main>
		<div id="homeCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block fullscreen-image" src="{{url('/images/home/cr1.jpg')}}" alt="First main carousel">
				</div>
				<div class="carousel-item">
					<img class="d-block fullscreen-image" src="{{url('/images/home/cr2.jpg')}}" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block fullscreen-image" src="{{url('/images/home/cr3.jpg')}}" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="d-block fullscreen-image" src="{{url('/images/home/cr4.jpg')}}" alt="4th slide">
				</div>
				<div class="carousel-item">
					<img class="d-block fullscreen-image" src="{{url('/images/home/cr5.jpg')}}" alt="5th slide">
				</div>
				<div class="carousel-content"><img class="d-inline-block" src="{{url('/images/navbrand.png')}}" alt="normies logo"><span class="d-block">The Normies</span></div>
			</div>
		</div>
		<div class="container bg-faded-blue py-4">
			<div class="row">
				<div class="col-12 col-md-10 offset-md-1">
					<div class="card bg-light m-3 box-shadow-1">
						<h5 class="card-header bg-dark text-white p-4 text-center">Origin of Normies</h5>
						<div class="card-body p-2">
							<h5 class="card-title">A Super Poo story...</h5>
							<p class="lead">
								A long time ago in a galaxy not so far away, there was a normie manchild who decided to download and play Clash Royale for the first time. He spread the joy for the game to those around him and from this the first Normies clan was born. It thrived until the Pina uprising, when we had to abandon the old clan and form a new, better Normies. Ever since this rebirth, the Normies have once again thrived with many members from all sorts of locations; hopefully, this continued flow of active members will help boost our standing and performance on clan wars.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="parallax" data-image="{{url('/images/home/parallax1.jpg')}}"></div>
		</div>
		<div class="container bg-faded-blue py-4">
			<div class="row">
				<div class="col-12 col-md-10 offset-md-1">
					<div class="card bg-light m-3 box-shadow-1">
						<h5 class="card-header bg-dark text-white p-4 text-center">Why Make This?</h5>
						<div class="card-body p-2">
							<h5 class="card-title">Because Why Not</h5>
							<p class="lead">
								But really, this was made in order to help everyone view their stats without having to log into the Clash Royale app. Using this website will simplify the task of viewing your recent battle record, viewing your friends battle records, and viewing our clan's performance on recent clan wars. Additionally, this will help me and other co-leaders keep track of who should be kicked due to inactivity. One final feature I hope to be able to add is a messaging interface and deck builder/rating in a blog format.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('includes.search')
	</main>
	@include('includes.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>
		$('.carousel').carousel({
			interval: 5500,
			keyboard: false,
			pause: false
		})
	</script>
	<script src="{{asset('js/parallax.js')}}"></script>
</body>
</html>