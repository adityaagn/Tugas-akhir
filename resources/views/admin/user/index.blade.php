@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css')}}">
@endsection

@section('content')
     <section class="auth-form">
    <div id="container">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
                 <div class="panel panel-default">
        <h2> User </h2>

@include('_partial.flash_message')

         <div class="panel-body">
        @if (@count($user_list) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach ($user_list as $user);?>
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{$user ->name }}</td>
                    <td>{{$user ->email }}</td>
                    <td>{{$user -> user_type }}</td>
                    <td>
                       <a href="{{ url('dashboard/userman/'.$user->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div>
        <a href="{{ url('dashboard/userman/create') }}" class="btn btn-primary"> Tambah user</a>
        </div>
    </div>
    </div>
        </div>
        </div>
        
    </section>
        @endif
@endsection
