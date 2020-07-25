@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @cannot('view details')
            <div class="card">
                <div class="card-header">{{ __('Bvn verification') }}</div>

                <div class="card-body">
                    @include('includes.messages')
                    @include('includes.bvn-verification')
                    
                </div>
            </div>
            @endcannot

            @can ('view details')
            @include('includes.details')
            @endcan
        </div>
    </div>
</div>
@endsection
