@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Locations
                    <div class="pull-right"><a href="{{ route('account.create') }}">Setup New</a></div>
                </div>
                @if(count($accounts) <= 0)
                <div class="panel-body">
                    No Account yet. <a href="{{ route('account.create') }}">Setup your first business location.</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@foreach($accounts as $account)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ route('account.show', $account->id) }}">{{ $account->business_name }}</a>
                    <div class="pull-right"><a href="{{ route('account.edit', $account->id) }}">Edit</a></div>
                </div>

                <div class="panel-body">
                No services setup yet.
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
