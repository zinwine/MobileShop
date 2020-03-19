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
                <form class="form-inline form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <h2 style="color:gold;">Register</h2><br>

                    <div class="form-group has-success has-feedback">
                        <!-- <label class="control-label" for="a"></label> -->
                        <div class="input-group m_form" style="margin-top: 0px">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="a" aria-describedby="inputGroupSuccess3Status" placeholder="Username" style="background-color: transparent;border:1px solid green;" name="name">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <!-- <label class="control-label" for="b"></label> -->
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" id="b" aria-describedby="inputGroupSuccess3Status" placeholder="Email" style="
                            background-color: transparent;border:1px solid green;" name="email">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <!-- <label class="control-label" for="c"></label> -->
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="c" aria-describedby="inputGroupSuccess3Status" placeholder="Password" style="
                            background-color: transparent;border:1px solid green;" name="password">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <!-- <label class="control-label" for="d"></label> -->
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="d" aria-describedby="inputGroupSuccess3Status" placeholder="Confirm Password" style="
                            background-color: transparent;border:1px solid green;" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <!-- <label class="control-label" for="d"></label> -->
                        <div class="input-group m_form">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status" placeholder="Phone Number" style="
                            background-color: transparent;border:1px solid green" name="phone">
                        </div>
                    </div>


                     <button style="margin-top:30px" type="submit" class="btn btn-primary">Register</button> 

                </form><br><br>
                <!--<button type="submit" class="btn regbtn" >Login</button>-->

                <!--END LOGIN-->
            </div>
        </div>
    </div>
@endsection
