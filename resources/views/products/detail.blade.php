@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 col-xs-12">
            <div class="card product-card my-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <span class="lead float-left px-2">{{$product->druge_name}}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="text-muted col-12">
                            Description
                        </div>
                        <div class="col-12">
                            <p class="text-justify">
                                {{$product->description}}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                           <div class="text-muted row">
                               <div class="col-12"> Drug Type</div>
                            <s class=" col-12 mx-1"><span class="lead ">{{$product->druge_type}}</span>. </s>

                           </div>
                           <div class="text-muted row">
                            <div class="col-12"> Made In</div>
                             <span class="  col-12 mx-1"><span class="lead ">{{$product->made_in}}</span> .</span>

                           </div>
                           <div class="text-muted row">
                            <div class="col-12"> Company Name</div>
                             <s class=" col-12 mx-1"><span class="lead ">{{$product->company_name}}</span>. </s>
                           </div>
                           <div class="text-muted row">
                            <div class="col-12">  Type</div>
                             <span class=" col-12 mx-1"><span class="lead text-primary">{{$product->type}}</span> .</span>
                           </div>
                           <div class="text-muted row">
                            <div class="col-12"> Expire Date</div>
                             <span class=" col-12 mx-1"><span class="lead text-primary">{{$product->expire_date}}</span> .</span>
                           </div>
                        </div>
                        </div>

                    </div>
                <div class="card-footer p-1">
                    <div class="row">
                        <div class="col-6">
                            <span class="float-left"><small> {{$product->created_at->format('M d Y | H:i')}}</small></span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
