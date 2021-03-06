@extends('layouts.admin')

@section('content')
    <h1>Edit a user</h1>
<div class="row">
    <div class="col-sm-3">
    <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded" />
    </div>
    <div class="col-sm-9">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role Id:') !!}
                {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status','Status:') !!}
                {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Select Photo:') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>
            <!-- <div class="form-group">
                {!! Form::file('file', ['class'=>'form-control']) !!}
            </div> -->

            <!-- <input type="text" name="title" placeholder="Enter Title"> -->
            <!-- <input type="submit" name="submit"> -->
            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary  col-sm-6']) !!}
            </div>
        {!! Form::close() !!}


{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy',$user->id] , 'files'=>true]) !!}

<div class="form-group">
    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
</div>
{!! Form::close() !!}

    </div>
</div>
<!-- print errors-->
<div class="row">
	@include('includes.form_errors');
</div>
@stop