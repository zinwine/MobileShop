@extends('layout.master')
@section('title','Contact')
@section('content')
    <h2 style="font-family: 'aa';text-align: center;">Contact Us</h2>
    <div class="row concol">
        <div class="col-md-4">
            <div class="smh" style="font-family: 'aa'">
                <i class="fa fa-home"></i> Our Location
            </div>
            <div>
                <address>
                    NEW Style Mobile phon shop, <br>
                    NO5, Yandana St.,Sinu Quatar,pyay
                </address>
            </div>
        </div>
        <div class="col-md-4">
            <div class="smh">
                <i class="fa fa-phone"></i>
                Telephone</div>
            <br>
            (+95)9796801987
        </div>
        <div class="col-md-4">
            <div class="smh">
                <i class="fa fa-clock-o"></i> Opening Time </div>
            9AM To 5:30AM <br>
            Remark: 24hr/7day online
        </div>
    </div>
    </div>
    <!--<hr>-->
    <legend style="background: red!important;"></legend>
    <div class="container yconcon">
        <div class="row">
            <div class="col-md-6 yformcol">
                <h3 align="center">Contact Form</h3>
                <form class="form-horizontal ymarcon">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control yincol" id="inputname" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="yincol form-control" id="inputEmail3" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control yincol" id="inputPassword3" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTelNO" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control yincol" id="inputTelNO" placeholder="Enter TelephoneNumber">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputmes" class="col-sm-3 control-label">
                            Message
                        </label>
                        <div class="col-sm-9">
                            <textarea class="form-control yincol" style="height: 100px;" row="10" id="inputmes" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn  yincol">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <legend class="panel-heading text-center" style="font-size: 25px;">Google Map</legend>
                <div id="map">

                </div>
            </div>
        </div>
    </div>
    @endsection