@extends('layouts.app')
@section('content')
<div class="mx-50\% text-center container">
	<img class="img img-responsive" src="{{ asset('img/office_bag.png') }}">
	<section class="random-div bg-not-too-white text-mpgray">
	<div>
		<h3 class="text-23px pb-1 text-mpgray mx-auto random-div-title-description text-center">
			{{ $job->role }} @ {{ $job->company }}
		</h3>
	<code class="text-dark mt-1"><h4 class = "text-center">Duration: {{ $job->duration }} </h4>	</code>
	@if($job->verified === 'Verified!')
	<code class="text-dark mt-1">
		<h4 class = "text-center">Status: 
			<span class = "text-success">
				{{ $job->verified }}
			</span>
		 </h4>	
		</code>
	@else	
	<code class="text-dark mt-1">
		<h4 class = "text-center">Status: 
			<span class = "text-danger">
				{{ $job->verified }}
			</span>
		</h4>
		<a>{{ $job->validation_token }}</a> <span class="badge badge-info">This token will be sent to your HR</span>
		<form action = "{{ route('jobs.verify', $job->id) }}" method = "post">
			@csrf
			@include('includes.messages')
			<div class="form-group" method = "post">
				<div>
					<input name="hr_mail" class = "form-control" type="email" placeholder="hr@example.com" required="true">
				</div>
				<div>
					<input class = "form-control btn btn-dark mt-2" value="Send" type="submit">
				</div>
			</div>	
		</form>
	</code>
	@endif


</div>
@endsection
