@extends('layouts.admin')

@section('content')
    <h1 class="page-header">Create Page</h1>

        {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','name') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role') !!}
                {!! Form::select('role_id',array(''=>'-- Select option --') +$roles,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active','status') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','File:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('create User',['class'=>'btn btn-primary']) !!}
            </div>



        {!! Form::close() !!}

    @include('includes.form_error')
@endsection