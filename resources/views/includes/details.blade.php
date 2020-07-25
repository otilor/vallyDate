<section class="random-div bg-not-too-white text-mpgray">
	<p class="card-header alert alert-dark" style="font-size: 18px">Your information</p>
	<div class="text-center p-2">
		<img style = "width: 100px; height: 100px; border-radius: 40px;" src="{{ asset('img/male.webp') }}">
	</div>
	<div>
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			Name: {{ auth()->user()->name }}
		</h3>
	<h4 class = "text-center">Your email address:  {{ auth()->user()->email }} </h4>		
	</div>



