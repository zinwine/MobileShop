@extends('layout.master')
@extends('layout.header')
@section('content')
    <style>
        body{
            background-color: #DBE2EC;
        }
        .conbody{
            margin-bottom: 50px;
        }
    </style>
    <div class="container conbody">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                <div class="img">

                    @foreach(unserialize($product->imgs) as $imgs)
                    <img src="{{asset('uploads/'.$imgs)}}" alt="" class="imgimg">
                    @endforeach
                </div>
            </div>

            <div class="col-sm-10 col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="phoneimg center-block">
                            <img src="{{asset('uploads/'.unserialize($product->imgs)[0])}}" class="ph_detail_img center-block img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 colorandmodel">
                        <div class="colorchoose">
                            <span style="font-weight: bold;font-size: 25px;color: red;font-family: 'aa';font-size: 17px;">$250</span><span style="text-decoration: line-through;"><sup> $ {{$product->price}}</sup></span>
                            <br><p></p>
                            <span style="font-family: 'aa';font-size: 17px;">Color: </span>
                            <div class="first"></div>
                            <div class="phcolor second"></div>
                            <div class="phcolor third"></div>
                            <br>
                            <a href="{{asset('addtocart/'.$product->id)}}"><div class="btn btn-default ph_detail_btn" style="font-family: 'aa';font-size: 17px;">Add to cart</div></a>
                        </div>


                        <p class="phdetail">
                        Model number : Che-2-UL00<br>
                        Build number : Che-2-UL00 V100<br>
                        CPU : Octa-core 1.2GHZ<br>
                        RAM : 2.0GB<br>
                        Internal storage : 8.00 GB total<br>
                        Resolution : 720 x 1280<br>
                        Android version : 4.4.2<br>
                        Baseband version : 22.325<br>
                        Kernel version : android@localhost<br>
                        EMUI version : EMUI 3.0<br>
                        </p>
                    </div>
                 </div>
                 <hr>

                </div>
            </div>
            <div class="row ph_detail_para">
                <h2 style="text-align: center;font-family: 'aa'">{{$product->title}}</h2>
                <p>
                        {{$product->description}}
                </p>
            </div>
        </div>
    </div>
@endsection




