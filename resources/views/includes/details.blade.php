<form action = "/bvn/verify" method = "post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input  name = "name" class="form-control" id="exampleFormControlInput1" disabled placeholder="{{ auth()->user()->name }}" data-toggle="tooltip" data-placement="top" title="Your details will be verified via your Bank Verification Number">
  </div> 

   <div class="form-group">
    <label for="exampleFormControlInput1">Job details</label>
  </div>
</form>
