<section class="home-get-start">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="home-get-start-content">
                    <h3 class="section-title">@lang('app.get_started_today')</h3>
                    <p class="sub-title"> @lang('app.discover_desc') </p>
                    <div class="get-start-buttons">
                        <a href="{{route('browse_categories')}}" class="btn btn-outline">@lang('app.discover')</a>
                        @if(Auth::check() && Auth::user()->user_type == 'mahasiswa')
                        <a href="{{route('dashboard')}}" class="btn btn-filled">@lang('app.start_a_campaign')</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>