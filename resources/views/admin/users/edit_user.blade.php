@extends('admin.include.master')
@section('title','edit user')
@section('content')

@section('content-header','Edit User')

<section class="content">
      <div class="row">

            <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Edit User</legend>

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
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$user->name}}" disabled>
                        </div>
                <div class="form-group">
                    <label for="role">Roles</label>
                	<select name="role" id="role" class="form-control">
                            @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                    </select>
               	</div>
     
                <button type="submit" class="btn pull-right" style="background: #221111;color:#FFFFEE">Login</button>
            </form>

            </div>    
        </div>
     
    </section>

@endsection