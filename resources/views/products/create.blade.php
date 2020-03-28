@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4  col-sm-6 col-md-5 col-xs-12">
            <form action="/products/" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="card">
                    <div class="card-header">
                        <p class="lead">Create a new Drug</p>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-7">
                                <input type="text" name="druge_name"  placeholder=" Drug Name" required class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="druge_type" placeholder="druge type Name" required value="{{old('product_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="made_in" placeholder="made in" required value="{{old('product_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="company_name" placeholder="company name" required value="{{old('product_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="druge_type" placeholder="druge type Name" required value="{{old('product_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="type" placeholder=" type Name" required value="{{old('product_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 my-2">
                                <textarea class="form-control" rows="5" id="description" name="description" rows="1" placeholder="Description" required value="{{old('description')}}"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="text-muted col-12">
                                expire date
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="price" name="expire_date" placeholder="Price" required min="10" value="{{old('price')}}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-danger float-left"><a class="text-secondary" href="/products/">Cancel</a></button>
                            </div>

                            <div class="col-6">
                                <input type="submit" class="btn btn-primary float-right" value="Next">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
