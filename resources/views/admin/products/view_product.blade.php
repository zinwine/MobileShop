@extends('admin.include.master')
@section('title','product')
@section('style')
<style>
    .product_detail .col-sm-12
    {
        margin: 15px auto;
        
    }
    .product_detail>.row
    {
        border: 1px solid #ddd;
        padding-left: 15px;
    }
    .product_detail> h3
    {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding: 15px;
        display: inline-block;
    }
    .product_detail img
    {
        width: 100%;
        height: 120px;       
    }
    .product_detail .btn-warning
    {
        margin-left:  15px;
        margin-right:  15px;
    }
    .product_detail span
    {
        margin-right:  15px;
    }

</style>
@endsection
@section('content')
<section class="content"> 
    <div class="col-sm-8 col-sm-offset-2 product_detail">
        <h3><span><a href="{{url('admin/product')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i></a></span> Product Detail </h3>
        <div class="row">            
            <div class="col-sm-12">
                <div class="row">
                    <?php for ($i=0; $i < count(unserialize($detail->imgs)) ; $i++) { ?>
                        <div class="col-sm-3">                      
                            <img src="{{asset('/uploads/'.unserialize($detail->imgs)[$i])}}">    </div>  
                     <?php } ?>                  
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                   <div class="col-sm-5">
                        <p>Device Category</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->category_id}}</p>
                    </div> 
                </div>               
            </div> 
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Type</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->type_id}}</p>
                    </div>
                </div>               
            </div>              
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Brand</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->brand_id}}</p>
                    </div> 
                </div>                
            </div> 
            <div class="col-sm-12">
               <div class="row">
                    <div class="col-sm-5">
                        <p>Device Name</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->title}}</p>
                    </div>
               </div>
            </div> 
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Price</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ {{$detail->price}}</p>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Quantity</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->quantity}}</p>
                    </div>
                </div>   
            </div> 
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Description</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->description}}</p>
                    </div>
                </div>   
            </div> 
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Device Manangement</p>
                    </div>
                    <div class="col-sm-7">
                        <p>: <a href="{{url('admin/product/edit/'.$detail->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a><a href="{{url('admin/product/delete/'.$detail->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></p>
                    </div>
                </div>   
            </div> 
        </div>
    </div>
</section>
@endsection
