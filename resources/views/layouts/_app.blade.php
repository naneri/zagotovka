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
        @include("partials._notification")
        @yield('internal')
    </div>
@endsection

@push("js")
    @include("partials._alertjs")
@endpush
