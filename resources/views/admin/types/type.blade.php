@extends('admin.include.master')
@section('title','Type')
@section('content')
@section('content-header','Type')

<section class="content"> 
<?php if (isset($type)) { ?>  
    <div class="row">
        <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Edit Type</legend>
            <form method="post" action="{{url('admin/type/update/'.$type->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" <?php echo $category->id == $type->category_id ? "selected" :false; ?> >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    <input type="text" class="form-control" id="name" value="{{$type->type}}" name="type" required>
                </div>                      
                <button type="submit" class="btn btn-primary">Update</button>
            </form>            
        </div>
    </div>
<?php }else{ ?>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Add Type</legend>
            <form method="post" action="{{url('admin/add_type')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="type" required>
                </div>                      
                <button type="submit" class="btn btn-primary">Add Type</button>
            </form>            
        </div>
    </div>
<?php } ?>
<?php if (count($types)) { ?>
      <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="well">
                    <legend>Products Type</legend>
                    <table class="table table-striped ">
                        <thead>
                        <th>No</th>
                        <th>Category</th>
                        <th>Type</th>      
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($types as $type )
                                <tr>
                                    <td>{{$type->id}}</td>
                                    <td><?php foreach ($categories as $category) {
                        echo $category->id == $type->category_id ? $category->name : false; } ?></td>
                                    <td><a href="">{{$type->type}}</a></td>                    
                                    <td><a href="{{url('admin/type/edit/'.$type->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                    <td><a href="{{url('admin/type/delete/'.$type->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
      </div> 
<?php } ?>   
    </section>
@endsection
