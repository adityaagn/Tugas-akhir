@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css')}}">
@endsection

@section('content')
        <div id="user">
            <h2>Edit User</h2>
            {!! Form::model($user, ['method'=>'PATCH','action'=>['UserManagementController@update', $user->id]]) !!}
            @include('admin.user.form',['submitButtonText'=> 'Update User'])
            {!! Form::close() !!}
        </div>
@endsection

@section('page-js')

@endsection