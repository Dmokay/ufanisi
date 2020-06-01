<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('http://thewebmax.com/spa/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Ufanisi</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/loader.min.css')}}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('css/skin/skin-7.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">  

    <link href="{{('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/navigation.css')}}">
    
    <!-- GOOGLE FONTS -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

</head>
<body id="bg">

    <div class="page-wraper">

        @include('layouts.includes.header')

        @yield('content')

        @include('layouts.includes.footer')

    </div>
    
    <!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{asset('js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script   src="{{asset('js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{asset('js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script   src="{{asset('js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->

<script   src="{{asset('js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{asset('js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script   src="{{asset('js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script   src="{{asset('js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{asset('js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script   src="{{asset('js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

<script   src="{{asset('js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{asset('js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{asset('js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{asset('js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="{{asset('js/rev-script-1.js')}}"></script>



<!-- STYLE SWITCHER  ======= --> 
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>
    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-1')}}" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-2')}}" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-3')}}" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-4')}}" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-5')}}" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-6')}}" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-7')}}" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-8')}}" title="blue Theme"></a></li>
            <li><a class="theme-skin skin-9" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-9')}}" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-10" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-10')}}" title="brown Theme"></a></li>
            <li><a class="theme-skin skin-11" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-11')}}" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-12" href="{{url('index-4.html?theme=css%252Fskin%252Fskin-12')}}" title="golden Theme"></a></li>
        </ul>   
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-view">
            <li class="nav-light active">Light</li>
            <li class="nav-dark">Dark</li>
        </ul>
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-width">
            <li class="nav-boxed active">Boxed</li>
            <li class="nav-wide">Wide</li>
        </ul>   
        
        <h6 class="switcher-title">Header</h6>
        <ul class="header-view">
            <li class="header-fixed active">Fixed</li>
            <li class="header-static">Static</li>
        </ul> 
        
        <h6 class="switcher-title">Layout</h6>
        <ul class="layout-view">
            <li class="wide-layout active">Wide</li>
            <li class="boxed">Boxed</li>
        </ul>   
                    
        <h6 class="switcher-title">Background Image</h6>
        <ul class="background-switcher">
            <li><img src="{{asset('images/switcher/switcher-bg/thum/bg1.jpg')}}" rel="{{asset('images/switcher/switcher-bg/large/bg1.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-bg/thum/bg2.jpg')}}" rel="{{asset('images/switcher/switcher-bg/large/bg2.jpg')}}"  alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-bg/thum/bg3.jpg')}}" rel="{{asset('images/switcher/switcher-bg/large/bg3.jpg')}}"  alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-bg/thum/bg4.jpg')}}" rel="{{asset('images/switcher/switcher-bg/large/bg4.jpg')}}"  alt=""></li>
        </ul>
        
        <h6 class="switcher-title">Background Pattern</h6>
        <ul class="pattern-switcher">
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg1.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt1.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg2.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt2.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg3.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt3.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg4.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt4.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg5.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt5.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg6.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt6.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg7.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt7.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg8.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt8.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg9.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt9.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg10.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt10.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg11.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt11.jpg')}}" alt=""></li>
            <li><img src="{{asset('images/switcher/switcher-patterns/thum/bg12.jpg')}}"  rel="{{asset('images/switcher/switcher-patterns/large/pt12.jpg')}}" alt=""></li>
        </ul>
        
        
    </div>    
</div>
<!-- STYLE SWITCHER END ==== -->
<script>
$('.circle-block-outer[data-toggle="tab-hover"] div').hover( function(){
    $(this).tab('show');
});
</script>


</body>