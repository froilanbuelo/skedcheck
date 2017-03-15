@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $service->business_name }}
                    <div class="pull-right"><a href="{{ route('service.index') }}">< Back to Services</a></div>
                </div>

                <div class="panel-body">
                Available at ... 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
