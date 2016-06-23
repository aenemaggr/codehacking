@extends('layouts.admin')


@section('content')


    <h1>Create User</h1>

    @include('includes.form_error')

                                                                    {{--WE NEED FILES TO BE TRUE OR IT WONT WORK--}}
    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=> true]) !!}
        <div class="form-group">
              {!! Form::label('name', 'Name') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
              {!! Form::label('email', 'Email') !!}
              {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null,  ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status') !!}
            {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
              {!! Form::label('file', 'Choose a photo') !!}
              {!! Form::file('file', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
              {!! Form::label('password', 'Password') !!}
              {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


@endsection