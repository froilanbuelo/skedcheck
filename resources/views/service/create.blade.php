@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Service
                    <div class="pull-right"><a href="{{ route('service.index') }}"> < Back to Services</a></div>
                </div>

                <div class="panel-body">
                {!! form_start($form)!!}
                <h3>General Information</h3>
                <div class="row">
                    <div class="col-sm-6">
                        {!! form_row($form->name) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! form_row($form->category) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {!! form_row($form->description, $options = ['attr' => ['rows'=>2]]) !!}
                    </div>
                </div>
                <h3>Duration</h3>
                <div class="row">
                    <div class="col-sm-1">
                        {!! form_row($form->duration_hours ,$options = ['label' => 'Hours','attr'=>['placeholder'=>'00']]) !!}
                    </div>
                    <div class="col-sm-1">
                        {!! form_row($form->duration_minutes ,$options = ['label' => 'Minutes','attr'=>['placeholder'=>'00']]) !!}
                    </div>
                </div>
                <h3>Scheduling Options</h3>
                <div class="row">
                    <div class="col-sm-2">
                        Allow Buffer of 
                    </div>
                    <div class="col-sm-1">
                        {!! form_row($form->buffer_before, $options = ['label'=>'Before', 'attr'=>['placeholder'=>'00']]) !!}
                    </div>
                    <div class="col-sm-2">
                        minutes, and 
                    </div>
                    <div class="col-sm-1">
                        {!! form_row($form->buffer_after, $options = ['label'=>'After','attr'=>['placeholder'=>'00']]) !!}
                    </div>
                    <div class="col-sm-3">
                        minutes after each schedule.
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Maximum scheduling notice of 
                    </div>
                    <div class="col-sm-1">
                        {!! form_row($form->maximum_schedule_notice_hours, $options = ['label'=>'Hours','attr'=>['placeholder'=>'4']]) !!}
                    </div>
                    <div class="col-sm-8">
                        before change or cancellation.
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        Maximum reservation per day of  
                    </div>
                    <div class="col-sm-3">
                        {!! form_row($form->maximum_per_day, $options = ['label'=>'Reservations','attr'=>['placeholder'=>'Unlimited']]) !!}
                    </div>
                </div>
                <h3>Pricing</h3>
                <div class="row">
                    <div class="col-sm-3">
                        {!! form_row($form->pricing_type, $options = ['attr'=>['placeholder'=>'Paid']]) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! form_row($form->pricing_bill_at, $options = ['attr'=>['placeholder'=>'On Location']]) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! form_row($form->pricing_amount, $options = ['attr'=>['placeholder'=>'0.00']]) !!}
                    </div>
                </div>
                {!! form_until($form, 'active') !!}
                <input type="submit" class="btn btn-primary" value="Create" name="submit">
                {!! form_end($form, true) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
