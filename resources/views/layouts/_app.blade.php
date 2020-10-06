@extends('adminlte::page')

{{--@section('title', 'Dashboard')--}}

{{--@section('content_header')--}}
{{--    <h1>Dashboard</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    <p>Welcome to this beautiful admin panel.</p>--}}
{{--@stop--}}


@push("js")
    <script>
        @if(!is_null(session('alert')))
            toastr.{{session('alert')['type']}}('{{session('alert')['message']}}')
        @endif
    </script>
@endpush
