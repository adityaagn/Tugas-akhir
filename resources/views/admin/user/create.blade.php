@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css')}}">
@endsection

@section('content')
  <div id="user">
    <div id="wrapper">
    	@include('admin.menu')
        <div id="page-wrapper">
        	 

            <h2>Add User</h2>
            {!! Form::open(['url' => 'dashboard/userman']) !!}
            @include('admin.user.form',['submitButtonText'=> 'Submit'])
            {!! Form::close() !!}
        </div>
  </div>
</div>
@endsection

@section('page-js')

@endsection