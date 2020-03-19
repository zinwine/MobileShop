@extends('admin.include.master')
@section('title','Edit Product')
@section('content')
@section('content-header','Edit Product')

<section class="content">
      <div class="row">

            <div class="col-sm-6 col-sm-offset-2 well">

                    <form method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @foreach($errors->all() as $error )
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                    @endif

                         <div class="form-group">                          
                            <label for="category_id">Category</label>

                            <select class="form-control" name="category">

                            @foreach($categories as $category)

                              <option value="{{$category->name}}">{{$category->name}}</option>  

                            @endforeach
                            </select>

                        </div>
                                  <div class="form-group">
                            <label for="">brand</label>
                            <select name="brand" id="" class="form-control">
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$product->title}}">
                        </div>
                         <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" placeholder="Price" name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{$product->description}}">
                        </div>
                      
                        <div class="form-group">
                         <img src="{{asset('/uploads/'.unserialize($product->imgs)[0])}}" alt="" width="100px" height="100px;">              
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image[]" multiple>
                        </div>
                            <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control"  name="status" value="{{$product->status}}">>
                                <option value="latest">Latest</option>
                                <option value="promotion">Promotion</option>
                            </select>
                           
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Product</button>
                    </form>
            
            </div>


      </div>
     
</section>

@endsection