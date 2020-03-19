@extends('layout.master')
@extends('layout.header')
@section('title','About')
@section('content')
    <div class="container atccontainer">
        <div class="row shoppingrow"  style="background: #47493F;">
            <div class="col-md-4 col-sm-3 col-xs-1 cartimg"></div>
            <div class="col-md-4 col-sm-6 col-xs-10 shopping" ><h1 style="color:#fafafa">Shopping Cart</h1></div>
            <div class="col-md-4 col-sm-3 col-xs-1cartimg"></div>
        </div>
        <div class="row">
            <div class="table-responsive addtable">
                <table class="table">
                    <tr class="tr">
                        <th>No.</th>
                        <th>IMAGE</th>
                        <th>PRODUCT NAME</th>
                        <th>MODEL</th>
                        <th>UNIT PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                        <th>CANCEL</th>
                    </tr>
                    @foreach($products as $product)
                    <tr class="trdesign">
                        <th style="text-align: center;vertical-align: middle;">{{$product->id}}</th>
                        <td><img src="{{asset('uploads/'.unserialize($product->imgs)[0])}}" alt="" id="trimage" width="50px" height="50px"></td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->title}}</td>
                        <td>$ {{$product->price}}</td>
                        <td><input type="number" value="1"></td>
                        <td>$ {{$product->price}}</td>
                        <td><a href="{{url('cart/trash/'.$product->id)}}"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="btndanger">
                <a href="{{url('smartphone')}}"><button type="submit" class="btn continuebtn">Continue Shopping</button></a>
                <button type="submit" class="btn pull-right checkoutbtn">Checkout</button>
            </div>   
        </div>

        <div class="row addtocart">
            <h4 style="text-align: center;">Secure Payment by <i><b>Pay Pal</b></h4>
            <div class="col-md-4 col-md-offset-4" style="padding: 20px 0;">
                <a data-toggle="modal" data-target="#myModal"><img src="image/VISA.jpg"></a>     
                <a data-toggle="modal" data-target="#myModal"><img src="image/MPU.jpg"></a>
                <a data-toggle="modal" data-target="#myModal"><img src="image/PayPal.jpg"></a>
            </div>
        </div>
    </div>


<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content modalmodal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Make Payment</h4>
      </div>
      <div class="modal-body">
        <div class="row pform">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputpname" class="col-sm-4 control-label">Card Holder Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control ppcol" id="inputpname" placeholder="Enter your Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputacc" class="col-sm-4 control-label">Account Number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control ppcol" id="inputacc" placeholder="Enter your Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsec" class="col-sm-4 control-label">Security Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control ppcol" id="inputsec" placeholder="Enter your Name">
                    </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn makebtn pull-left" data-dismiss="modal">Make Payment</button>
        <button type="button" class="btn cancelbtn pull-right">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection