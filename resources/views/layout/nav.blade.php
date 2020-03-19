
<!--Header Section Start-->

<div class="cc container-fluid" style="margin-top: -20px;">
    <div class="row">
        <div class="fh_img col-md-3" style="margin-top: 15px" style="width: 100px;">
        <img src="{{asset('image/logo1.png')}}" alt="">
        </div>
        <div class="col-md-9 fh_ul">
            <ul class="nav navbar-nav navbar-right form">
                <li style="margin-top: 40px;">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                </li>
                <li style="margin-top: 30px;"><a href="#" style="color: #EC971F;"><i class="fa fa-tty" style="font-size:12px;color: #EC971F"></i> 091212121</a></li>

                <!--<li><a href="register.html" >Register</a></li>-->

                <li style="margin-top:22px;margin-right:10px;"><a href="{{asset('addtocart')}}" style="color: #fff;"><div class="btn btn-default navcart" style="width:70px;height: 40px"><i class="fa fa-shopping-cart fa-2x" style="width:20px;color: white"></i> 

                    @if(session('items'))

                       <span class="cart_number" style="margin-left: 10px;color: red;font-weight:bold;font-size:20px"> {{count(session('items'))}}</span>

                    @endif

                 </div></a></li>
            </ul>
        </div>
    </div>
</div>
<!--Header section end-->


<!--Navigation Start-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header   ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('phone')}}">Phone</a></li>
                <li><a href="{{url('computer')}}">Computer</a></li>
                <li><a href="{{url('accessories')}}">Accessories</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
               

                    @if(Auth::check() &&  Auth::user()->hasRole('Admin'))

                  <li><a href="{{asset('admin/dashboard')}}">Admin</a></li>
                  
                  @endif
                 @if(Auth::check())

                  <li><a href="{{url('/logout')}}">Logout</a></li>

                  @else

                   <li class="dropdown regdrop">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<span class="caret"></span></a>

                     <ul class="dropdown-menu regmenu">
                        <li><a href="{{url('/login')}}">Login</a></li>
                        <li><a href="{{url('/register')}}">Register</a></li>
                    </ul>
                @endif
                </li>
                <li><a href="{{url('about')}}">About</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Navigation End-->
