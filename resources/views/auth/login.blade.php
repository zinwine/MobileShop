@extends('layout.master')
@extends('layout.header')
@section('content')

    <style>
        body
        {
            background:url('image/logbg.jpg') fixed;
            background-size: cover;
        }
    </style>
    <div class="lo container">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
            <div class="well" id="wel1">



                <!--START LOGIN-->
                <form class="form-inline form" method="post">
                 {{ csrf_field() }}
                    <h2 style="color:gold;"> Log in</h2><br>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="a"></label>
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" id="a" aria-describedby="inputGroupSuccess3Status" placeholder="Email" style="background-color: transparent;" name="email"> 
                        </div>
                    </div><br><br><br>


                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="b"></label>
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="b" aria-describedby="inputGroupSuccess3Status" placeholder="Password" style="background-color: transparent;" name="password">
                        </div>
                    </div>


                     <button style="margin-top:30px" type="submit" class="btn btn-primary">Login</button> 

                </form><br><br>
                <!--<button type="submit" class="btn logbtn" >Login</button>-->

                <!--END LOGIN-->
            </div>
        </div>
    </div>
@endsection