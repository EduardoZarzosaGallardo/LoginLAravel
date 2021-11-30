@extends('adminlte::page')

@section('title', 'Password Update')

@section('content_header')
    <h1>Password Update</h1>
@stop

@section('content')
@if (Session::has('message'))
    <div class="text-danger">
        {{Session::get('message')}}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile Setings') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dashboard.profile.updatePassword') }}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="mypassword" class="col-md-4 col-form-label text-md-right">{{ __('Current password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" name="mypassword" class="form-control">
                                    <div class="text-danger">{{$errors->first('mypassword')}}</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control">
                                    <div class="text-danger">{{$errors->first('password')}}</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mypassword" class="col-md-4 col-form-label text-md-right">{{ __('Confirm new password') }}</label>
                                <div class="col-md-6">
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="mb-0 form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Change my Password') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
