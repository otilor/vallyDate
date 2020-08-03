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
</div>
@endsection
