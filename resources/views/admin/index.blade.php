@extends('admin.include.master')
@section('title','Admin')
@section('content')

@section('content-header','Dashboard')

<section class="content">
      <div class="row">

                   @foreach($errors->all() as $error )
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                    @endif


      </div>  
    </section>
@endsection