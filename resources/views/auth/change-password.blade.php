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
                            <label for="password">password</label>
                            <input type="password" id="password" class="form-control" name="password" value="{{old('password')}}">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong class="text-red">{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">password_confirmation</label>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
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
