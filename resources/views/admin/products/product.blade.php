@extends('admin.include.master')
@section('title','product')
@section('style')
<style>
    .card_col{
        border: 1px solid #ccc;
    }
    .card_col .card img{
        margin-top: 15px;
        margin-bottom: 15px;
        width: 100%;
        height: 120px;
    }
    .card_col .card .btn{
        margin-bottom: 15px;
    }
    .card_col .card h4{
        margin: 15px auto;
    }
</style>
@endsection
@section('content')
@section('content-header','Product')
<section class="content">
    <?php if (isset($product)) { ?>

 <div class="row">
        <div class="col-sm-10 col-sm-offset-1 well">
            <form method="post" enctype="multipart/form-data" class="row" action="{{url('admin/product/edit/'.$product->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <div class="form-group col-sm-6">                          
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" <?php echo $category->id == $product->category_id ? "selected" :false ?>>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Brand</label>
                    <select name="brand" id="" class="form-control">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" <?php echo $brand->id == $product->brand_id ? "selected" :false ?>>{{$brand->brand}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Type</label>
                    <select name="type" id="" class="form-control">
                        @foreach($types as $type)
                            <option value="{{$type->id}}" <?php echo $type->id == $product->type_id ? "selected" :false ?>>{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="name">Device Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$product->title}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Price" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity" value="{{$product->quantity}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="color">Color</label>
                    <input type="color" class="form-control" id="color" placeholder="Quantity" name="color">
                </div>
                <div class="form-group col-sm-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{$product->description}}">
                </div>                                                          
                <div class="form-group col-sm-6">
                    <label for="status">Status</label>
                    <select id="" class="form-control"  name="status">
                        <option value="latest">Latest</option>
                        <option value="promotion">Promotion</option>
                    </select>                          
                </div>
                <div class="form-group col-sm-6">
                    <label for="image">Image</label>
                    
                    <input type="file" id="image" name="image[]" multiple class="form-control">
                    <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" style="width: 120px;height: 120px;" class="pull-right">
                </div>
                <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-primary pull-right" name="submit">Edit Product</button>
                </div>
            </form>           
        </div>
    </div>

    <?php }else{ ?>

    <?php if (count($categories) > 0 && count($brands) > 0 && count($types) > 0) { ?>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 well">
            <form method="post" enctype="multipart/form-data" class="row" action="{{url('admin/add_product')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <div class="form-group col-sm-6">                          
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Brand</label>
                    <select name="brand" id="" class="form-control">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Type</label>
                    <select name="type" id="" class="form-control">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="name">Device Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group col-sm-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Price" name="price">
                </div>
                <div class="form-group col-sm-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                </div>
                <div class="form-group col-sm-6">
                    <label for="color">Color</label>
                    <input type="color" class="form-control" id="color" placeholder="Quantity" name="color">
                </div>
                <div class="form-group col-sm-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="description" name="description">
                </div>                                                          
                <div class="form-group col-sm-6">
                    <label for="status">Status</label>
                    <select id="" class="form-control"  name="status">
                        <option value="latest">Latest</option>
                        <option value="promotion">Promotion</option>
                    </select>                          
                </div>
                <div class="form-group col-sm-6">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image[]" multiple>
                </div>
                <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-primary pull-right" name="submit">Add Product</button>
                </div>
            </form>           
        </div>
    </div>
<?php }else{ ?>
    <div class="row">
        <div class="col-sm-12">
            <legend class="text-center">Empty Category!!!, Please Insert Data</legend>
        </div>
    </div>
<?php } ?>

    <?php } ?>


<?php if (count($products)) { ?>
<div class="container">
    <div class="col-sm-12">  
        <div class="row">
            @foreach($products as $product )            
                <div class="col-sm-3 card_col">
                <div class="card">
                  <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="">
                  <div class="card-block">
                    <h4 class="card-title">{{$product->title}}<span class="pull-right">$ {{$product->price}}</span></h4> 
                    <p><?php echo strlen($product->description) > 30 ? substr($product->description, 0, 30)." ...." : $product->description ?></p>
                    <a href="{{url('admin/product/detail/'.$product->id)}}" class="btn btn-success pull-right">More <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                </div>
            @endforeach
        </div>
        
    </div>
</div>  
<?php } ?>
</section>
@endsection
