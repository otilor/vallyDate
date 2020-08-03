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
			Role: {{ $job->role }}
		</h3>
		<h4>Company name:{{ $job->company }}</h4>	
		<h5><code class="text-dark">From: {{ $job->from }}</code></h5>
		<h5><code class="text-dark">To: {{ $job->from }}</code></h5>
		@if ($job->verified === 'Verified!')
			<span class="badge badge-success">{{ $job->verified }}</span>
		@else
			<span class="badge badge-danger">{{ $job->verified }}</span><br>
			<a href="/jobs/{{ $job->id }}/verify" class="btn btn-sm btn-primary">Get verification link</a>
		@endif
	@empty
	<p>You haven't supplied this information yet!</p>
	<a href="/jobs/create" class="btn btn-dark text-white">Add</a>
	
	</div>
	@endforelse		
	



