@extends('layout.master')
@extends('layout.header')
@section('content')
    <style>
        body{
            background-color: #E6E6E6;

        }
        .smphone img{
            text-align:center;
        }
    </style>
    <div class="smartPhone">
        <div class="container">
            <div class="row">

                <!-- START SIDEBAR -->

                <div class="col-md-3 sidebar">
                    <div class="list-group side" style="text-align: left">
                        <a href="#" class="list-group-item active brand" style="text-align: center">Brand</a>
                            @foreach($brands as $brand)
                        <a href="{{url('phone_brand/show/'.$brand->id)}}" class="list-group-item list">{{$brand->brand}}</a>
                            @endforeach
                    </div>

                    <div class="list-group side" style="text-align: left">
                        <a href="#" class="list-group-item active range"  style="text-align: center">Range</a>
                               
                        <a href="#" class="list-group-item list"> under $ 100 </a>
                        <a href="#" class="list-group-item list">$ 150 - $ 300</a>
                        <a href="#" class="list-group-item list">$ 300 - $ 450</a>
                        <a href="#" class="list-group-item list">$ 450 - $ 600</a>
                        <a href="#" class="list-group-item list">$ 600 - $ 750</a>
                        <a href="#" class="list-group-item list">$ 600 upper </a>
                              
                    </div>
                </div>

                <!-- END SIDEBAR -->


                <!-- START ARTICLE -->

                <div class="col-md-9">
                    <div class="row title">
                        <legend class="smartTitle">Mobile Phone</legend>
                    </div>
                    <hr>
                    <div class="row">
                        
                        @foreach($products as $product)

                        <div class="col-md-4 smphone center-block">
                            <div class="well">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" class="front img-responsive">
                                        {{-- <img src="{{asset('/uploads/'.unserialize($product->imgs)[2])}}" alt="" class="back img-responsive"> --}}
                                    </div>
                                </div>
                                <hr>
                                <span class="name pull-left">{{$product->title}}</span>
                                <span class="price pull-right">$ {{$product->price}}</span>
                                <br>
                                <a href="{{asset('addtocart')}}"><div class="btn btn-default cart center-block"><i class="fa fa-shopping-cart" style="color: black"></i> <b>Add to cart</b></div></a>
                                <ul class="list-inline btndetail">
                                    <a href="{{url('detail/'.$product->id)}}"><li title="info"><i class="fa fa-info" style="color: black;"></i></li></a>
                                </ul>
                            </div>
                        </div>


                        @endforeach


                    </div>
            </div>
        </div>
    </div>
    <!-- END ARTICLE -->
@endsection
