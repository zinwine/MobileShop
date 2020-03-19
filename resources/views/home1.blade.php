@extends('layout.master')
@extends('layout.header')
@section('title','Home')

@section('content')

    <style>
        body{
            background: url('image/ss.jpeg') fixed;
            background-size: cover;
        }

    </style>

    <!--Body Section Start-->

    <div class="con" style="margin-top: -46px;">
        <div class="ff container-fluid">
            @foreach ($products as $key => $product)
            @if ($product->status == 'latest' && $key == 0)

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 wow bounceInLeft" data-wow-duration="1s" data-wow-iteration="1">
                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" class="front">
                </div>

                <div class="col-md-6 col-sm-6 wow bounceInRight" data-wow-duration="1s">

                    <div class="bt center-block">
                        <h1 style="font-weight: bold;">{{$product->title}}</h1>
                        <p><b>{{$product->description}}</b></p>
                        <a href="{{asset('detail/' . $product->id)}}"><button class=" btn btn-warning shopnow" style="border-radius: 0">Shop Now!</button></a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>

    <!--Body Section End-->

    <div class="f_contet container-fluid" style="background: #fafafa">
        <div class="row">
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg center-block text-center">
                    <a href="{{url('phone')}}"><img src="image/pp.png" alt=""></a>
                </div>
                <a href="{{url('phone')}}"> <h4  class="text-center shaimg" style="font-family: 'aa'">PHONE</h4></a>
            </div>  
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg center-block text-center">
                    <a href="{{url('computer')}}"><img src="image/pp.png" alt=""></a>
                </div>
                <a href="{{url('computer')}}"> <h4  class="text-center shaimg" style="font-family: 'aa'">COMPUTER</h4></a>
            </div>  
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg center-block text-center">
                    <a href="{{url('accessories')}}"><img src="image/pp.png" alt=""></a>
                </div>
                <a href="{{url('accessories')}}"> <h4  class="text-center shaimg" style="font-family: 'aa'">ACCESSORIES</h4></a>
            </div>  
        </div>
    </div>
    <!-- ******Space******** -->

    <div class="container-fluid" style="height: 300px; background-color: rgba(12,12,11,0.3)">

    </div>
    <!-- *********end space*********** -->
    <!--New Product Start-->
    <div class="newPhone">
        <div class="container1 container-fluid">
            <div class="row wow rollIn" data-wow-delay="0.3s" style="text-align: center;padding:50px 0px">
                <img src="{{asset('image/left.png')}}" alt="" width="100px" class="titleimg">
                <h1 style="display: inline" class="imgtitle">New Phones</h1>
                <img src="{{asset('image/right.png')}}" alt="" width="100px" class="titleimg">
            </div>
            <div class="row">

                @foreach ($products as $product)
                    @if ($product->status == 'latest')
                        
                    
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 wow flipInY img1" id="b1" data-wow-delay="0.8s">
                        <div class="newP centerBlock">
                            <div class="flip-container center-block">
                                <div class="flipper">
                                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" class="front">
                                    {{-- <img src="{{asset('image/bb.png')}}" alt="" class="back"> --}}
                                </div>
                            </div><br><hr>
                        <p style="font-size: 19px">$ {{$product->price}}</p>
                            <p>{{$product->title}}</p>
                            <a href="{{asset('addtocart')}}">
                                <div class="btn btn-default cart">Add to cart</div></a>
                                <ul class="list-inline btndetail">
                                    <a href="{{asset('detail/' . $product->id)}}"><li title="info"><i class="fa fa-info" style="color: black;"></i></li></a>
                                </ul>
                            </div>
                        </div>
                        
                        @endif
                    @endforeach
            </div>
        </div>
        <hr>
        <div class="discount">
            <div class="container2 container-fluid">
                <div class="row wow rollIn" data-wow-delay="0.2s" style="text-align: center;padding:50px 0px">
                    <img src="image/left.png" alt="" width="100px" class="titleimg1">
                    <h1 style="display: inline;font-family: 'arr'" class="imgtitle1">Discount Items</h1>
                    <img src="image/right.png" alt="" width="100px" class="titleimg1">
                </div>
                <div class="row">

                    @foreach ($products as $product)
                    @if ($product->status == 'promotion')
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 wow flipInY img1" id="a1" data-wow-delay="0.8s">
                        <div class="newP centerBlock">
                            <div class="flip-container center-block">
                                <div class="flipper">
                                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" class="front">
                                </div>
                            </div><br><hr>
                            <span style="font-size: 19px"><b>$ {{$product->price}}</b></span>
                            <span style="text-decoration: line-through;color: red;"><span style="font-size:17px;color: black;">$200</span></span><p></p>
                            <p>{{$product->title}}</p>
                            <a href="{{asset('addtocart')}}">
                                <div class="btn btn-default cart">Add to cart</div></a>
                            <ul class="list-inline btndetail">
                                <a href="{{asset('detail/' . $product->id)}}"><li title="info"><i class="fa fa-info" style="color: black;"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--New Phone End-->

@endsection