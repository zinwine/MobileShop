@extends('admin.include.master')
@section('title','add_role')
@section('content')
    @section('content-header','Add Role')

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
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Role</button>
                    </form>
            
            </div>


      </div>
     
    </section>
@endsection