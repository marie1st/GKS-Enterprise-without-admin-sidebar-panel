@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        EDIT PROFILE PAGE
        <div class="col-md-8">
        {{ Form::open(['action'=>'CompanyController@store, $data->id]', 'method' =>'PUT')}}
            <div class ="col-md-6">
                <div class = "form-group">
                {{ Form::label ('Company Name') }}
                {{ Form::text('company_name', $data->company_name, ["class" => "form-control"]) }}
                </div>
                <div class = "form-group">
                {{ Form::label ('Contact Name') }}
                {{ Form::text('contact_name', $data->contact_name, ["class" => "form-control"]) }}
                </div>
                <div class = "form-group">
                {{ Form::label ('EMAIL') }}
                {{ Form::text('email', $data->email, ["class" => "form-control"]) }}
                </div>
                <div class = "form-group">
                {{ Form::label ('Phone') }}
                {{ Form::text('phone', $data->phone, ["class" => "form-control"]) }}
                </div>
                </div>
                <div>
                <div class = "form-group">
                {{ Form::label ('Address') }}
                {{ Form::text('address', $data->address, ["class" => "form-control"]) }}
                </div>
                <div>
                </div>
                <input type="submit" value="Update" class ="btn btn-primary">
                <a href = "/company" class = "btn btn-success">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
