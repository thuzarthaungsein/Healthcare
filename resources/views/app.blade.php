<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Healthcare Portal') }}</title>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/myJs.js') }}" defer></script>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/vue-clazy-load.js') }}"></script>
<!-- Fonts -->
<!--mailbox-->
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
<link href="{{ asset('css/all.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.scrolling-tabs.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/fullpage.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/pannellum.css') }}"/>
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<script src="{{asset('js/nprogress.js')}}"></script>

<style>
    .bg-light {
        background-color: #eae9e9 !important;
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 40px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #ff6117;
        color: transparent;
        cursor: pointer;
        padding: 15px;
        border-radius: 50%;
        background: url(../images/top-arrow.png) no-repeat left center;
    }

    #myBtn:hover {
        background: url(../images/top-arrow.png) no-repeat left center;
    }
    #panorama {
        width: 100%;
        height: 400px;
    }
    #homeBtn{
        display:none;
        position: fixed;
        top: 177px;
        left: -1px;
        z-index: 99;
        font-size: 14px;
        border: none;
        outline: none;
        background-color: #ff6117;
        color: #fff!important;
        cursor: pointer;
        border: 1px solid #e66527;
        border-radius: 30px !important;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        box-sizing: border-box;
        padding: 10px 20px;
        /* background: url(../images/home-24.png) no-repeat center; */
        /* box-shadow: 0 9px 10px -10px #d2571c; */
        box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        text-decoration: none;
    }
    #homeBtn i.fa {
        color: white!important;
    }
    #homeBtn:hover {
        background: #fbaa84;
        border-color: #fbaa84;
    }
</style>
</head>
<body>
<div id="app">
        <ul class="navbar-nav pad-free" id="headerbar">
            <li class="fav-item fav-color btn all-btn m-r-10" style="color: #000 !important;">
                <svg x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#c40000" opacity="0" visibility="hidden"><path d="M50.16667,78.83333h107.5v14.33333h-107.5zM50.16667,35.83333h107.5v14.33333h-107.5zM50.16667,121.83333h107.5v14.33333h-107.5zM21.5,75.25c-5.93706,0 -10.75,4.81294 -10.75,10.75c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75c0,-5.93706 -4.81294,-10.75 -10.75,-10.75zM21.5,118.25c-5.93706,0 -10.75,4.81294 -10.75,10.75c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75c0,-5.93706 -4.81294,-10.75 -10.75,-10.75zM21.5,32.25c-5.93706,0 -10.75,4.81294 -10.75,10.75c0,5.93706 4.81294,10.75 10.75,10.75c5.93706,0 10.75,-4.81294 10.75,-10.75c0,-5.93706 -4.81294,-10.75 -10.75,-10.75z"></path></g><g id="subtracted-icon" fill="#c40000"><path d="M50.16667,78.83333h107.5l0,10.81336c-1.5126,0.69131 -2.92913,1.65951 -4.17264,2.90462l-0.6155,0.61535h-102.71186zM50.16667,35.83333h107.5v14.33333h-107.5zM50.16667,121.83333h24.29256c-1.88479,4.7147 -1.16582,10.22759 2.1569,14.33333h-26.44946zM32.25,86c0,5.93706 -4.81294,10.75 -10.75,10.75c-5.93706,0 -10.75,-4.81294 -10.75,-10.75c0,-5.93706 4.81294,-10.75 10.75,-10.75c5.93706,0 10.75,4.81294 10.75,10.75zM32.25,129c0,5.93706 -4.81294,10.75 -10.75,10.75c-5.93706,0 -10.75,-4.81294 -10.75,-10.75c0,-5.93706 4.81294,-10.75 10.75,-10.75c5.93706,0 10.75,4.81294 10.75,10.75zM32.25,43c0,5.93706 -4.81294,10.75 -10.75,10.75c-5.93706,0 -10.75,-4.81294 -10.75,-10.75c0,-5.93706 4.81294,-10.75 10.75,-10.75c5.93706,0 10.75,4.81294 10.75,10.75zM123.60062,122.43755l-0.6045,-0.60422l1.20887,0z"></path></g><g><g id="Filled_3_" fill="#c40000"><path d="M123.60062,162.99169l-35.82908,-35.82908l10.13652,-10.13652l25.69256,25.69256l40.02993,-40.02993l10.13652,10.13652z"></path></g><g id="Filled_3_" fill="#000000" opacity="0"><path d="M183.90358,122.96087l-50.16644,50.16644c-2.79579,2.80295 -6.46615,4.20085 -10.13652,4.20085c-3.67037,0 -7.34073,-1.39789 -10.13652,-4.20085l-35.82908,-35.82908c-5.59874,-5.59874 -5.59874,-14.67429 0,-20.27304l10.13652,-10.13652c5.59157,-5.59874 14.68146,-5.59874 20.27304,0l15.55604,15.54887l29.89341,-29.88624c5.59157,-5.59874 14.68146,-5.59874 20.27304,0l10.13652,10.13652c5.59874,5.59874 5.59874,14.67429 0,20.27304z"></path></g></g></g></svg>

                &nbsp; <span class="font-weight-bold">お気に入り</span>
                <div class="div1 fav-nursing-link-box">
                    <router-link to="/favouriteNursing">
                    <i class="fa fa-chevron-circle-right is-nur"></i>
                    <span style="color:#d2571c;">
                    介護&nbsp;<span id="nus-fav-local"></span>&nbsp;<span style="color:#000;">件</span>
                    </span>
                    </router-link>
                </div>
                <div class="div2 fav-hospital-link-box">
                    <router-link to="/favouriteHospital">
                    <i class="fa fa-chevron-circle-right is-hos"></i>
                    <span style="color:#2981cc;">
                    病院&nbsp;<span id="hos-fav-local"></span>&nbsp;<span style="color:#000;">件</span>
                    </span>
                    </router-link>
                </div>
            </li>
            <li class="fav-item history-color btn all-btn m-r-10 m-b-10" style="color: #000 !important;">
                <svg x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#c40000"><path d="M86,15.0472l-78.83333,70.9528h21.5v64.5h59.44694c-1.3545,-4.54367 -2.11361,-9.3525 -2.11361,-14.33333h-43v-63.14225l43,-38.6888l57.61328,51.66439h21.22006zM136.19466,100.24935c-19.78717,0 -35.83333,16.04617 -35.83333,35.83333c0,19.78717 16.04617,35.83333 35.83333,35.83333c19.78717,0 35.83333,-16.04617 35.83333,-35.83333c0,-19.78717 -16.04617,-35.83333 -35.83333,-35.83333zM150.89193,119.24382l10.02213,10.03613l-28.30274,28.30274l-21.13606,-21.13607l10.02213,-10.03613l11.11393,11.11393z"></path></g></g></svg>
                &nbsp;<span class="font-weight-bold"> 最近見た施設</span>
                <div class="div1 his-nursing-link-box">

                    <router-link to="/nursing_history">
                        <i class="fa fa-chevron-circle-right is-nur"></i>
                        <span  style="color:#d2571c;">
                        介護&nbsp;<span id="nus-his-local"></span>&nbsp;<span style="color:#000;">件</span>
                        </span>
                    </router-link>
                </div>
                <div class="div2 his-hospital-link-box">

                    <router-link to="/hospital_history">
                        <i class="fa fa-chevron-circle-right is-hos"></i>
                        <span style="color:#2981cc;">
                        病院&nbsp;<span id="hos-his-local"></span>&nbsp;<span style="color:#000;">件</span>
                        </span>
                    </router-link>
                </div>
            </li>
        </ul>
  <index ></index>
</div>







<!-- <script src="/js/app.js" type="text/javascript"></script> -->
<!-- <script src="{{ asset('js/map-api.js') }}"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-2U_IRuSrajQavHadFp8FlXNi61MA3nw&libraries=places&sensor=false"></script>
<script src="{{ asset('js/vue2-5-13.js') }}"></script>
<script src="{{ asset('js/vue-scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pannellum.js') }}"></script>
<!-- Include after Vue (before closing body) -->
<script src="{{ asset('js/vue-fullpage.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
<!-- script for editor -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- end script for editor -->
<script src="{{ asset('js/jquery.scrolling-tabs.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/adsslider.js') }}" type="text/javascript"></script>

<script type="text/javascript">

 $(document).ready(function() {
   
     /*added for back to top*/
     var mybutton = document.getElementById("myBtn");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        topFunction = function () {
            // document.body.scrollTop = 0;
            // document.documentElement.scrollTop = 0;
            $("html, body").animate({ scrollTop: 0 }, "slow");
	            return false;
        }

    if(localStorage.getItem("hospital_history")){
        $("#hos-his-local").html(localStorage.getItem("hospital_history").split(",").length);
        $('.his-hospital-link-box>a').css({'cursor':'pointer','pointer-events':'auto'});
    }
    else{
        $("#hos-his-local").html(0);       
        $('.his-hospital-link-box>a').css({'cursor':'not-allowed','pointer-events':'none'});
        $( '.his-hospital-link-box>a ').parent('div').css({'cursor':'not-allowed'});
    }
    if(localStorage.getItem("nursing_history")){
        $("#nus-his-local").html(localStorage.getItem("nursing_history").split(",").length);
        $('.his-nursing-link-box>a').css({'cursor':'pointer','pointer-events':'auto'});
    }
    else{
        $("#nus-his-local").html(0);
        $('.his-nursing-link-box>a').css({'cursor':'not-allowed','pointer-events':'none'});
        $( '.his-nursing-link-box>a').parent('div').css({'cursor':'not-allowed'});
    }
    if(localStorage.getItem("hospital_fav")){
        $("#hos-fav-local").html(localStorage.getItem("hospital_fav").split(",").length);
        $('.fav-hospital-link-box>a').css({'cursor':'pointer','pointer-events':'auto'});
    }
    else{
        $("#hos-fav-local").html(0);
        $('.fav-hospital-link-box>a').css({'cursor':'not-allowed','pointer-events':'none'});
        $( '.fav-hospital-link-box>a').parent('div').css({'cursor':'not-allowed'});
    }
    if(localStorage.getItem("nursing_fav")){
        $("#nus-fav-local").html(localStorage.getItem("nursing_fav").split(",").length);
        $('.fav-nursing-link-box>a').css({'cursor':'pointer','pointer-events':'auto'});
    }
    else{
        $("#nus-fav-local").html(0);
        $('.fav-nursing-link-box>a').css({'cursor':'not-allowed','pointer-events':'none'});
        $( '.fav-nursing-link-box>a').parent('div').css({'cursor':'not-allowed'});
    }

    

});


</script>
</body>
</html>