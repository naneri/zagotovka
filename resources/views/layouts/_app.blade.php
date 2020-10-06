@extends('adminlte::page')

{{--@section('title', 'Dashboard')--}}

{{--@section('content_header')--}}
{{--    <h1>Dashboard</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    <p>Welcome to this beautiful admin panel.</p>--}}
{{--@stop--}}

@section('content')
    <div class="row">
        @if(!is_null(session("notification")))
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-{{session('notification')['type']}} alert-dismissible">
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
@endsection

@push("js")
    <script>
        @if(!is_null(session('alert')))
            toastr.{{session('alert')['type']}}('{{session('alert')['message']}}')
        @endif
    </script>
@endpush
