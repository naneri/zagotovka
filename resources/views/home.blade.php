@extends('layouts._app')

@section('title', 'Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('internal')
    <div id="app">
        <p>Welcome to this beautiful admin panel.</p>
    </div>

    <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header with-border">
                    @include('partials._tools')
                 </div>
                 <div class="card-body">
                     Asd
                 </div>
             </div>
         </div>
    </div>
@stop
