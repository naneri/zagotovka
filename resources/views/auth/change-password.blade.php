@extends('layouts._app')

@section('title', 'Change Password')

@section('internal')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <b>Change Password</b>
                </div>
                <div class="card-body">
                    <form action="{{route('update-password')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control @if($errors->has('password'))is-invalid @endif" name="password" value="{{old('password')}}">
                            @if($errors->has('password'))
                            <span class="help-block">
                                <strong class="text-red">{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" id="password_confirmation" class="form-control @if($errors->has('password_confirmation'))is-invalid @endif" name="password_confirmation" value="{{old('password_confirmation')}}">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                <strong class="text-red">{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
