<section class="random-div bg-not-too-white text-mpgray">
	<p class="card-header alert alert-dark" style="font-size: 18px">Personal information</p>
	<div class="text-center p-2">
		<img style = "width: 100px; height: 100px; border-radius: 40px;" src="{{ asset('img/male.webp') }}">
	</div>
	<div>
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			Name: {{ auth()->user()->name }}
		</h3>
	<h4 class = "text-center">Your email address:  {{ auth()->user()->email }} </h4>	
	<p class="card-header alert alert-dark" style="font-size: 18px">Employment information</p>
	<div class="text-center p-2">
		
	</div>
	@forelse ($jobs as $job)
	<div class="text-center m-5">
		<h3 class="pb-1 mx-auto">
			Role: Software Engineer
		</h3>
		<h4>Company name: Upperlink ltd </h4>	
		<h5><code class="text-dark">From: 2017 to 2020</code></h5>
		<span class="badge badge-danger">Not verified!</span>
	@empty
	<p>You haven't supplied this information yet!</p>
	
	
	</div>
	@endforelse		
	



