@include('_partial.flash_message')
@if (isset($user))
	{!! Form::hidden('id', $user->id)!!}
@endif

	{{-- Nama --}}
	@if ($errors->any())
		<div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success'}}">
	@else

	<div class="panel-body">
<div class="form-group">
	@endif

	{!! Form::label('name','Name:',['class'=>'control-label']) !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
	@if ($errors->has('name'))
	<span class="help-block">{{ $errors->first('name')}}</span>
	@endif
</div>


{{--Email--}}

	@if ($errors->any())
		<div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success'}}">
	@else
<div class="form-group">
	@endif

	{!! Form::label('email','Email:',['class'=>'control-label']) !!}
	{!! Form::text('email',null,['class'=>'form-control']) !!}
	@if ($errors->has('email'))
	<span class="help-block">{{ $errors->first('email')}}</span>
	@endif
</div>

{{--Level--}}

	@if ($errors->any())
		<div class="form-group {{ $errors->has('user_type') ? 'has-error' : 'has-success'}}">
	@else
<div class="form-group">
	@endif

	{!! Form::label('user_type','Level:',['class'=>'control-label']) !!}
	<div class="radio">
		<label>{!! Form::radio('user_type','admin') !!} Admin </label>
	</div>
	<div class="radio">
		<label>{!! Form::radio('user_type','user') !!} General </label>
	</div>
	<div class="radio">
		<label>{!! Form::radio('user_type','mahasiswa') !!} Mahasiswa </label>
	</div>
	
</div>


{{--Password--}}

	@if ($errors->any())
		<div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success'}}">
	@else
<div class="form-group">
	@endif

	{!! Form::label('password','Password:',['class'=>'control-label']) !!}
	{!! Form::password('password',['class'=>'form-control']) !!}
	@if ($errors->has('password'))
	<span class="help-block">{{ $errors->first('password')}}</span>
	@endif
</div>

{{--Submit Button--}}
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
</div>