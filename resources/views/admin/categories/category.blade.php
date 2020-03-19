@extends('admin.include.master')
@section('title','category')
@section('style')
    <style>
        .d-none{
            display: none;
        }
    </style>
@endsection
@section('content')
@section('content-header','Category')
<section class="content">
    <?php if (isset($category)){ ?>
        <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Edit Category</legend>
            <form action="{{url('admin/category/update/'.$category->id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control add_cate" value="{{$category->name}}" id="name" placeholder="Name" name="name">
                </div>                      
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>   
    <?php }else{ ?> 
       <div class="col-sm-6 col-sm-offset-2 well">
            <legend>Add Category</legend>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control add_cate" id="name" placeholder="Name" name="name">
                    </div>                      
                    <button type="button" class="btn btn-primary" id="addCate" data-token="{{csrf_token()}}">Add Category</button>         
           </div>   
    <?php } ?>
<?php if (count($categories) > 0) { ?>         
<div class="col-md-8 col-md-offset-1">
    <p class="alert d-none" id="alert_success"></p>
    <div class="well">
        <legend> Category</legend>            
        <table class="table table-striped ">
            <thead>
                <th>No.</th>
                <th>Category Name</th>          
                <th>Edit</th>
            <?php if (!isset($category)) { ?>
                <th>Delete</th>
                <?php } ?>
            </thead>
            <tbody>
                <?php $num = 1; ?>
            @foreach($categories as $cate )
                <tr class="id{{$cate->id}}">
                    <td><?php echo $num++ ?></td>
                    <td><a href="{{url('admin/category/show',$cate->id)}}">{{$cate->name}}</a></td>                
                    <td><a href="{{url('admin/category/'.$cate->id.'/edit')}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                <?php if (!isset($category)) { ?>
                    <td><a href="#" iidd="{{$cate->id}}" class="cate_delete btn btn-danger"><i class="fa fa-trash"></i></a></td>
                <?php } ?>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
<?php } ?>    
</section>
@endsection
@section('script')
    
<script>    
    $('.cate_delete').click(function(){        
        if (confirm("Are You Confirm To Delete Category ?")) {
            var id = $(this).attr('iidd');
             $.ajax({
                url: "{{url('/admin/category/delete')}}",
                type: "GET",
                data: {
                    "id" : id,
                },
                success:function(data){
                    if (data == "success") {
                        $('.id'+id).remove();
                        // $('#alert_success').addClass('alert-success').removeClass('d-none').html('Successfully Category Delete');                        
                    }else{
                        alert(data);
                    }                   
                },
             });

        }else{
            alert("Delete Cancel!");
        }
        return false;
    });

    $('#addCate').click(function(){       
        var val = $('.add_cate').val();
        var token = $(this).data('token');
        $.ajax({
            url:"{{url('/admin/add_category')}}",
            type:"POST",
            data:{
                'value': val,
                '_token': token,
            },
            success:function(data){
                if (data == "success") {               
                 // $('#alert_success').addClass('alert-success').removeClass('d-none').html('Successfully Category Created');
                 $('.add_cate').val("");
                    location.reload();                                
                }
            },
        });
    });
     // setTimeout(function() {
     //    $('#alert_success').fadeOut('slow');
     // },2000); 
</script>

@endsection