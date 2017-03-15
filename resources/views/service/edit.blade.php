@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Service
                    <div class="pull-right"><a href="{{ route('service.index') }}">< Back to Services</a></div>
                </div>

                <div class="panel-body">
                {!! form_start($form)!!}
                {!! form_until($form, 'active') !!}
                <input type="submit" class="btn btn-primary" value="Save" name="submit">
                {!! form_end($form, true) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
