@extends('admin.include.master')
@section('title','brand')
@section('content')
    @section('content-header','Brand')

<section class="content">
    
<div class="row">

    <div class="col-md-8 col-md-offset-1">
        <div class="well">
        <legend> View All Brands</legend>
        <table class="table table-striped ">
            <thead>
                <th>No</th>
                <th>Brand</th>      
                <th>Edit</th>
                <th>Delete</th>
                </thead>
            <tbody>
            @foreach($brands as $brand )
                <tr>
                    <td>{{$brand->id}}</td>
                    <td><a href="">{{$brand->brand}}</a></td>                    
                    <td><a href="{{url('admin/brand/edit/'.$brand->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                    <td><a href="{{url('admin/brand/'.$brand->id.'/delete')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <div id="app-2">
            <span v-bind:title="message">
              Hover your mouse over me for a few seconds
              to see my dynamically bound title!
            </span>
        </div>
        <div id="app-3">
            <span v-if="seen">Now you see me</span>
        </div>
        <div id="app-4">
            <ol>
              <li v-for="todo in todos">
                {{ todo.text }}
              </li>
            </ol>
        </div>
    </div>
</div> 
</section>
@endsection
@section('script')
    <script>
       var app2 = new Vue({
            el: '#app-2',
            data: {
                message: 'You loaded this page on ' + new Date().toLocaleString()
            }
        })
        var app3 = new Vue({
            el: '#app-3',
            data: {
                seen: false
            }
        })
        var app4 = new Vue({
            el: '#app-4',
            data: {
                todos: [
                { text: 'Learn JavaScript' },
                { text: 'Learn Vue' },
                { text: 'Build something awesome' }
                ]
            }
        })
    </script>
@endsection
