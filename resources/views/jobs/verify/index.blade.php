@extends('layouts.app')
@section('content')
<div class="container">
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Validation key</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter validation key">
  </div>

  <div class="form-group">
    <input type="submit" value = "Verify" class="btn btn-dark form-control" id="exampleFormControlInput1" placeholder="Enter validation key">
  </div>
  
@endsection