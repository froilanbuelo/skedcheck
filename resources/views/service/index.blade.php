@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Services Offered
                    <div class="pull-right"><a href="{{ route('service.create') }}">Setup New</a></div>
                </div>
                @if(count($services) <= 0)
                <div class="panel-body">
                    No Services yet. <a href="{{ route('service.create') }}">Setup your first service to offer.</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@foreach($services as $service)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ route('service.show', $service->id) }}">{{ $service->name }}</a>
                    <div class="pull-right"><a href="{{ route('service.edit', $service->id) }}">Edit</a></div>
                </div>

                <div class="panel-body">
                Available at ...
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
