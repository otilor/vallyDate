<section class="random-div bg-not-too-white text-mpgray">
<div class="mx-auto text-center text-semibold">
	<div class="alert alert-success">Your BVN has been verified.</div>
</div>

	<h1 class="text-center py-15px text-35px text-semibold">Your profile</h1>
	
	<div class="text-center">
		<img class = "rounded-img img-responsive" style = "height: 100px; border-radius: 10px; width: 100px;" src="{{ asset('img/male.webp') }}">
	</div>
	
	
	<div>
		<h3 class="text-23px pt-5 pb-1 text-mpgray mx-auto random-div-title-description text-center">{{ auth()->user()->name }}</h3>

	<h4 class = "text-center">Your email address:  {{ auth()->user()->email }} </h4>		
	</div>

	<div class="text-center">
		<a href = "#" class="btn text-white text-caps btn-info edit">Edit</a>	
	</div>
