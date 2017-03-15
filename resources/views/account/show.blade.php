@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $account->business_name }}
                    <div class="pull-right"><a href="{{ route('account.index') }}">< Back to Locations</a></div>
                </div>

                <div class="panel-body">
                No Services setup yet. 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
