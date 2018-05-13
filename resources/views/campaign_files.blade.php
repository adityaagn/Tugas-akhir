@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')

    <section class="campaign-details-wrap">

        @include('single_campaign_header')

        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="campaign-decription">

                        @if($campaign->files->count() > 0)
                            

                               <div class="row">
                                <div class="col-xs-12">
                                    <table class="table table-bordered categories-lists">
                                        <tr>
                                            <th>@lang('app.title') </th>
                                            <th>@lang('app.description') </th>
                                            <th>@lang('app.file_name') </th>
                                            <th>@lang('app.action') </th>
                                        </tr>
                                        @foreach($campaign->files  as $file)
                                            <tr>
                                                <td> {{ $file->title }}  </td>
                                                <td> {{ $file->description }}  </td>
                                                <td> {{ $file->filename }}  </td>
                                                <td width="100">   
                                                    <a href="{{ route('download_file', [$file->campaign_id,$file->filename]) }}" class="btn btn-info btn-xs"><i class="fa fa-download"></i> </a>
                                                 </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                     

                        @else
                            <div class="no-data">
                                <i class="fa fa-bell-o"></i><h1>@lang('app.no_lpj')</h1>
                            </div>
                        @endif



                    </div>

                </div>

                <div class="col-md-4">
                    @include('campaign_single_sidebar')
                </div>

            </div>
        </div>


    </section>

    @include('footer_get_start_section')



@endsection

@section('page-js')

    <script>
        $(function(){
            $(document).on('click', '.donate-amount-placeholder ul li', function(e){
                $(this).closest('form').find($('[name="amount"]')).val($(this).data('value'));
            });
        });
    </script>

@endsection