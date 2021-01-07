@extends('adminlte::page')

{{--@section('title', 'Dashboard')--}}

{{--@section('content_header')--}}
{{--    <h1>Dashboard</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    <p>Welcome to this beautiful admin panel.</p>--}}
{{--@stop--}}

@section('content')
    <div id="app">
        <div class="row" >
            @if(!is_null(session("notification")))
                <div class="col-md-6 offset-md-3">
                    @if(isset(session('notification')['type']))
                        <div class="alert alert-{{session('notification')['type']}} alert-dismissible">
                            @else
                                <div class="alert alert-success alert-dismissible">
                                    @endif
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5>
                                        @if(isset(session("notification")['icon']))
                                            <i class="icon {{session("notification")['icon']}}"></i>
                                        @endif
                                        Alert!
                                    </h5>
                                    {{session('notification')['message']}}
                                </div>
                        </div>
                    @endif
                </div>
        @yield('internal')
    </div>
@endsection

@push("js")
    <script>
        @if(!is_null(session('alert')))
            @if(!isset(session('alert')['type']))
                toastr.success('{{session('alert')['message']}}')
            @else
                toastr.{{session('alert')['type']}}('{{session('alert')['message']}}')
            @endif
        @endif
    </script>
@endpush
