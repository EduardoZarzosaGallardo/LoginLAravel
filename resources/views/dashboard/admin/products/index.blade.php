@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header form-row">
                    <div class="col-md-6 d-flex">
                        <label for="configProducts" class="col-form-label">{{ __('Products Admin') }}</label>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('dashboard.admin.products.create') }}" class="btn btn-sm pd-x-15 btn-success btn-uppercase mg-l-5">
                            <i class="fas fa-bolt wd-10 mg-r-5"></i>
                            {{ __(' New Product') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        @foreach ( $products as $product )
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{$product->name}}</label>
                            <div class="col-md-6">
                                <h5>jhhj</h5>
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        @endforeach
                        <div class="mb-0 form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
