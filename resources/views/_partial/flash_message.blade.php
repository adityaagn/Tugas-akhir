@if(Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('penting') ? 'alert-important':'' }}" >
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        {{ Session::has('flash_message') }}
    </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
