<!DOCTYPE html>
<!-- saved from url=(0028)http://ngyngyst.com/ -->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="Author" content="mscln.com">
      <meta name="description" content="Conrad Roset ">
      <meta name="keywords" content=", Conrad Roset">
      <title>Conrad Roset </title>
      <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!--
         <link rel="stylesheet" href="/public/css/style.css" type="text/css" media="screen" />
         <link rel="stylesheet" href="/public/css/shop.css" type="text/css" media="screen" />
         <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="/public/js/flexslider/flexslider.css" type="text/css" media="screen" />
         <link rel="stylesheet" type="text/css" href="/public/js/fancybox/jquery.fancybox.css?v=2.0.6" media="screen" />
         
         -->
      <!-- Scripts -->
      <script src="{{ asset('jquery.min.js') }}" defer></script>
      <script src="{{ asset('jquery.cycle.all.min.js') }}" defer></script>
      <script src="{{ asset('jquery.flexslider-min.js') }}" defer></script>
      <script src="{{ asset('jquery.validate.min.js') }}" defer></script>
      <script src="{{ asset('jquery.fancybox.js') }}" defer></script>
      <script src="{{ asset('conradroset.js') }}" defer></script>
      <script src="{{ asset('shop.js') }}" defer></script>
      
      <!-- Styles -->
      <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
      
   </head>
   <body>
      <!-- menu column -->
      <div id="menu">
         <h1><a href="http://ngyngyst.com/">Conrad Roset</a></h1>
         <ul>
            <li>
               <a href="http://ngyngyst.com/portfolio" class="ajax_ ">
               WORKS
               </a>
               <span><a href="http://ngyngyst.com/#" class="toggle" id="toggle_portfolio">desplegar</a></span>
               {{-- <ul class="portfolio_cat " style="display:none"> --}}
               <ul class="portfolio_cat ">
                  <li>
                     <a href="http://ngyngyst.com/portfolio/cat/1/personal-" class="ajax_ ">
                     Personal                     </a>
                  </li>
                  <li>
                     <a href="http://ngyngyst.com/portfolio/cat/5/comissioned-" class="ajax_ ">
                     Comissioned                     </a>
                  </li>
                  <li>
                     <a href="http://ngyngyst.com/portfolio/cat/3/editorial" class="ajax_ ">
                     Editorial                    </a>
                  </li>
                  <li>
                     <a href="http://ngyngyst.com/portfolio/cat/4/misc" class="ajax_ ">
                     Misc                    </a>
                  </li>
               </ul>
            </li>
         </ul>
         <ul class="nav">
            <li id="menuid_1"><a href="http://ngyngyst.com/about" class="">ABOUT ME</a></li>
            <li id="menuid_23"><a href="http://ngyngyst.com/exhibitions" class="">EXHIBITIONS</a></li>
            <li id="menuid_2"><a href="http://ngyngyst.com/contact" class="">CONTACT</a></li>
         </ul>
         <ul>
         </ul>
         <ul>
         </ul>
         <div class="langmenu">
            <a href="http://ngyngyst.com/?lang=en" class="selected number">
            english                    </a>
            <a href="http://ngyngyst.com/?lang=vn" class="">
            vietnamese                 </a>
         </div>
         <div class="socialbuttons ">
            <div> Follow me on:</div>
            <a href="https://www.facebook.com/conradrosetart" class="social facebook" target="_blank">Facebook</a>
            <a href="https://twitter.com/conradroset" class="social twitter" target="_blank">Twitter</a>
            <a href="https://instagram.com/conradroset" class="social instagram" target="_blank">Instagram</a>
         </div>
      </div>
      <!-- main content of the page -->
      <div id="content">

         @yield('content')

         <div class="socialbig">
            <div> Share this page on:</div>
            <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.conradroset.com%2F" class="facebook" target="_blank">Facebook</a>
            <a href="http://twitter.com/home?status=%20by%20%40conradroset%20http%3A%2F%2Fwww.conradroset.com%2F" class="twitter" target="_blank">Twitter</a>
            <a href="http://pinterest.com/pin/find/?url=http%3A%2F%2Fwww.conradroset.com%2F&amp;escription=Conradroset.com" class="pinterest" target="_blank">Pinterest</a>
         </div>
         <noscript>
            <div style="position:fixed;top:0;left:0;width:100%;color:#fff;background-color:#ae0000;padding:10px 0;text-align:center;z-index:2000;font-size:14px">This page uses Javascript. Your browser either doesn't support Javascript or you have it turned off.
               <br> To see this page as it is meant to appear please use a Javascript enabled browser.
            </div>
         </noscript>
         <script type="text/javascript" async="" src="js/ga.js"></script>
         <script type="text/javascript">
            var $base_url = "/";
         </script>
      </div>
   </body>
</html> 