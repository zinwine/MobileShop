@extends('admin.include.master')
@section('title','all users')
@section('content')
    @section('content-header','View All Users')

<section class="content">
      <div class="row">

<div class="col-md-8 col-md-offset-1">
    <div class="well">
        <legend> View All Users</legend>
        @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
        <table class="table table-striped ">
            <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>         
            <th>Edit</th>
            <th>Delete</th>

            </thead>
            <tbody>
            @foreach($users as $user )
                <tr>
                    <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>              
                    <td><a href="{{url('admin/user/edit/'.$user->id)}}">Edit</a></td>
                    <td><a href="{{url('admin/user/delete/'.$user->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
      </div>
     
    </section>
@endsection
