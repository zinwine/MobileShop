@extends('layout.master')
@extends('layout.header')
@section('content')
    <style>
        body{
            background-size: 100%;
            background: rgba(88,70,40,0.1);
        }
        @media(max-width: 350px)
        {
            .aboutus .titleimg{
                width: 50px;
                height: 20px;
            }
        }
    </style>
    <div class="all" style="text-align: center;">
        <div class="aa container">
            <div class="row">
                <div class="col-md-12 aboutus">
                    <img src="image/mobile%20shop8.jpg" class="img-responsive shopimg center-block" alt="">
                    <img src="{{asset('image/left.png')}}" alt="" width="100px" class="titleimg">
                    <h3 class="aboutus" style="display: inline-block;">About Us</h3>
                    <img src="{{asset('image/right.png')}}" alt="" width="100px" class="titleimg">
                    <p class="aboutusP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, recusandae. Qui, quisquam nisi magnam asperiores delectus reiciendis, necessitatibus, fuga neque placeat assumenda quas similique ab pariatur suscipit officiis quam incidunt!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, asperiores. Excepturi sunt tenetur quidem unde mollitia magnam maiores minima dignissimos. Ab velit, voluptatibus, repudiandae reprehenderit iusto id ipsam vel voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. In animi repudiandae officiis natus cupiditate accusantium magni! Sunt itaque voluptate excepturi, quasi. Delectus corrupti accusantium vero ipsam adipisci provident error.</p>
                </div>
            </div>
            <hr>

            <div class="row">
                <h3 class="aboutus">Owner</h3>
                <div class="col-md-8">
                    <p class="aboutusP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum iusto fugit perspiciatis reiciendis, recusandae dignissimos obcaecati dolorum numquam quos odio tempore itaque ad unde corrupti laboriosam voluptas non! Tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque soluta perspiciatis error minus vero rerum totam non cumque corporis facilis temporibus modi in debitis, perferendis ipsum tenetur deleniti! A.</p>
                </div>
                <div class="col-md-4">
                    <img src="image/download.jpg" alt="" class="img-circle">
                </div>

            </div>
            <hr>
            <div class="row">
                <h3 class="aboutus">CEO</h3>
                <div class="col-md-4">
                    <img src="image/images%20(1).jpg" alt="" class="img-circle">
                </div>
                <div class="col-md-8">
                    <p class="aboutusP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum iusto fugit perspiciatis reiciendis, recusandae dignissimos obcaecati dolorum numquam quos odio tempore itaque ad unde corrupti laboriosam voluptas non! Tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque soluta perspiciatis error minus vero rerum totam non cumque corporis facilis temporibus modi in debitis, perferendis ipsum tenetur deleniti! A.</p>
                </div>


            </div>
            <hr>
            <div class="row">
                <h3 class="aboutus">Manager</h3>
                <div class="col-md-8">
                    <p class="aboutusP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum iusto fugit perspiciatis reiciendis, recusandae dignissimos obcaecati dolorum numquam quos odio tempore itaque ad unde corrupti laboriosam voluptas non! Tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque soluta perspiciatis error minus vero rerum totam non cumque corporis facilis temporibus modi in debitis, perferendis ipsum tenetur deleniti! A.</p>
                </div>
                <div class="col-md-4">
                    <img src="image/images%20(2).jpg" alt="" class="img-circle">
                </div>

            </div>
            <hr>
            <div class="row">
                <h3 class="aboutus">Assistant</h3>
                <div class="col-md-4">
                    <img src="image/download.jpg" alt="" class="img-circle">
                </div>
                <div class="col-md-8">
                    <p class="aboutusP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat illum iusto fugit perspiciatis reiciendis, recusandae dignissimos obcaecati dolorum numquam quos odio tempore itaque ad unde corrupti laboriosam voluptas non! Tempora!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique neque soluta perspiciatis error minus vero rerum totam non cumque corporis facilis temporibus modi in debitis, perferendis ipsum tenetur deleniti! A.</p>
                </div>


            </div>
            <hr>
            <div class="row">
                <h3 class="aboutus">Marketing Team</h3>
                <div class="col-md-12">
                    <p class="aboutusP">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum autem porro eius dicta dolorum esse tempore ut itaque voluptatum quibusdam voluptas, fuga, obcaecati similique odit et veniam ab libero expedita!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam beatae corporis, mollitia dicta quaerat voluptatem? Veritatis adipisci, unde voluptatum non eaque aliquam odio necessitatibus quod nisi! Voluptatum, at possimus dicta.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officia id odit recusandae eaque, suscipit cumque, alias quibusdam nisi blanditiis mollitia iste. Nobis earum ullam reiciendis quibusdam, inventore quod expedita.</p>
                </div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <img src="image/download.jpg" alt="" class="img-circle">
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <img src="image/images%20(1).jpg" alt="" class="img-circle">
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <img src="image/images%20(2).jpg" alt="" class="img-circle">
                </div>
            </div>
        </div>
    </div>
<!-- ************************************************* -->

<!--</div></div>-->
@endsection









