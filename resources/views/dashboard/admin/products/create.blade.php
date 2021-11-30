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
                        <label for="newProduct" class="col-form-label">{{ __('New Product') }}</label>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('dashboard.admin.products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="file" class="col-md-3 col-form-label text-md-right">{{ __('Insert Product File') }}</label>
                             <div class="col-md-8">
                                  <input id="file" accept="image/*" type="file" class="form-control @error('file') is-invalid @enderror" name="file" placeholder="{{ __('Product File') }}" required autocomplete="file" autofocus>
                                 @error('file')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
                        <div class="form-group row">
                           <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Insert Product Name') }}</label>
                            <div class="col-md-8">
                                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Product Name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Insert Product Description') }}</label>
                             <div class="col-md-8">
                                  <textarea id="description" rows="3" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="{{ __('Product Description') }}" required autocomplete="description" autofocus></textarea>
                                 @error('description')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
                         <div class="form-group row">
                            <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Insert Product Price') }}</label>
                             <div class="col-md-8">
                                  <input id="price" type="number" min="1" step="any" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="{{ __('Product Price') }}" required autocomplete="price" autofocus>
                                 @error('price')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                             </div>
                         </div>
                        <div class="mb-0 form-group row d-flex justify-content-end">
                            <div class="col-md-3 offset-md-4">
                                <a href="{{ route('dashboard.admin.products.index') }}" class="btn btn-danger">
                                    <i class="fas fa-times-circle wd-10 mg-r-5"></i>
                                    {{ __('Cancel') }}
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-bolt wd-10 mg-r-5"></i>
                                    {{ __('Create') }}
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
