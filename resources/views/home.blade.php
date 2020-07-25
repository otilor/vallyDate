@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Details panel') }}</div>

                <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">BVN number</label>
                        <input type="number" maxlength="11" class="form-control" id="exampleFormControlInput1" placeholder="12345678901" data-toggle="tooltip" data-placement="top" title="Your details will be verified via your Bank Verification Number">
                      </div>

                      <div class="form-group">
                          <input type = "submit" class="form-control btn btn-dark" value="Verify">
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
