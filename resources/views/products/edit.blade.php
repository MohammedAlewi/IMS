@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4  col-sm-6 col-md-5 col-xs-12">
            <form action="/products/" method="POST" enctype="multipart/form-data" >
                @csrf
                @method("PUT")

                <div class="card">
                    <div class="card-header">
                        <p class="lead">Create a new Drug  {{$drug->drug_name}}</p>
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
                                <input type="text" name="druge_name"  value=" {{$drug->druge_name}}"  required class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="hidden" name="id" id="id" value="{{$drug->id}}">
                                <input type="text" class="form-control" id="name" name="druge_type" placeholder="druge type Name"  value=" {{$drug->druge_type}}"   required value="{{old('drug->druge_type')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="made_in" placeholder="made in" required  value=" {{$drug->made_in}}"   value="{{old('made_in')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="company_name" placeholder="company name"   value=" {{$drug->company_name}}"   required value="{{old('company_name')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="druge_type" placeholder="druge type Name"  value=" {{$drug->druge_type}}"   required value="{{old('druge_type')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-8">
                                <input type="text" class="form-control" id="name" name="type" placeholder=" type Name"  value=" {{$drug->type}}"   required value="{{old('type')}}">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 my-2">
                                <textarea class="form-control" rows="5" id="description" name="description" rows="1" placeholder="Description"  value=" "   required value="{{old('description')}}">
                                    {{$drug->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="text-muted col-12">
                                expire date
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control"  name="expire_date"  value="{{$drug->expire_date}}" ">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-danger float-left"><a class="text-secondary" href="/products/">Cancel</a></button>
                            </div>

                            <div class="col-6">
                                <input type="submit" class="btn btn-primary float-right" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
