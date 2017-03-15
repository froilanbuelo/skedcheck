@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Setup New Location
                    <div class="pull-right"><a href="{{ route('account.index') }}"> < Back to Locations</a></div>
                </div>

                <div class="panel-body">
                {!! form_start($form)!!}
                {!! form_until($form, 'business_name') !!}
                <input type="submit" class="btn btn-primary" value="Create" name="submit">
                {!! form_end($form, true) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
