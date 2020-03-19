@extends('admin.include.master')
@section('title','brand')
@section('content')
    @section('content-header','Brand')

<section class="content">     
    <div class="row">        
        <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Add Brand</legend>        
            <form method="post" action="{{url('admin/add_brand')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <div class="form-group">
                    <label for="name">Brand</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>                      
                <button type="submit" class="btn btn-primary">Add Brand</button>
            </form>           
        </div>
    </div>
   
</section>
@endsection
