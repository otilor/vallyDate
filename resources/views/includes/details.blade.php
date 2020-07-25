<form action = "/bvn/verify" method = "post">
    @csrf
  <div class="form-group">
  	<h5 class=" text-bold" style="font-weight: 800;text-transform: capitalize;">Personal details</h5>
    <label for="exampleFormControlInput1">Name</label>
    <p class="text-bold"><code>{{ auth()->user()->name }}</code></p>
  </div> 
  <hr>
   <div class="form-group">
    <h5 class=" text-bold capitalize">Job details</h5>
    <p>Application programmer</p>

  </div>
</form>
