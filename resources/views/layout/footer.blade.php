
<!--Footer Start-->
<div class="footer container-fluid" style="margin-top: -18px;margin-bottom: -18px">
    <div class=" row " style="padding: 50px 0px">

        <div class="col-md-4 footpara">
            <img src="image/logo1.png" class="center-block img-responsive" alt="" >
            <p style="text-align: justify; margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias corporis culpa fuga impedit quos sint totam. entium vel veritatis! Architeam.</p>
        </div>

        <div class="col-md-4">
            <h3 style="margin-top: 20px;text-align: center">Contact Us</h3>
            <div  class="text-center" style="margin-top: 20px">
                <div class="address">
                    <i class="fa fa-home"></i>
                    Yandana St.,Pyay Township
                </div>
                <div class="address">
                    <i class="fa fa-envelope"></i>
                    72coder@gmail.com
                </div>
                <div class="address">
                    <i class="fa fa-phone"></i>
                    091234345
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h3 style="margin-top: 20px;text-align: center">Follow Us</h3>
            <div class="text-center" style="margin-top: 20px">
                <ul style="list-style-type: none">
                    <li style="display: inline-block; padding-left: 10px"><a href="#"><i class="fa fa-facebook fa-2x"> </i></a></li>
                    <li style="display: inline-block; padding-left: 10px"><a href="#"><i class="fa fa-twitter fa-2x"> </i></a></li>
                    <li style="display: inline-block; padding-left: 10px"><a href="#"><i class="fa fa-google fa-2x"> </i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<i class="fa fa-angle-double-up up_go"></i>
{{--**********************End footer***********************--}}

<!-- <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
<script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script> -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/bootstrap.css')}}"></script>
<script src="{{asset('js/go_top_plugin.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>


<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    });
</script>


<script>
    function initMap() {
        var uluru = {lat: 16.8660694, lng: 96.19513200000006};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVtam6fbTvGFJkRAq7qcY-eHj0XDVYeNg&callback=initMap">
</script> -->