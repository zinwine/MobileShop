@extends('layout.master')

@section('title','Create Product')

@section('content')
    <div class="conteiner">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <legend>Insert A New Product</legend>
                {{--{{csrf_token()}}--}}
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="price">
                    </div>
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                         <input type="file" name="file" id="exampleInputFile">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection