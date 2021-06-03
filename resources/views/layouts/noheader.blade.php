<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/cropped-favicon-32x32.png" sizes="32x32" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'My Hunter') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}?v=1.0" rel="stylesheet"> 
        <link href="{{ asset('css/styles.css') }}?v=1.0" rel="stylesheet"> 

        <?php if (App::environment('local')) { ?>
            <meta name="robots" content="noindex">
            <meta name="googlebot" content="noindex">
        <?php } ?>

        <?php if (App::environment('production')) { ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154576303-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-154576303-1');
            </script>
        <?php } ?>

        @yield('cssContent')
          
    </head>
    <body>
        

            <div class="site-content-contain">
                    @yield('content')
            </div>
            
        
    </body>

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
   
    
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        @section('jsContent')

   $(document).ready(function() { 
      $(".mobile-menu").click(function() { 
         $(".main-navigation").slideToggle("slow"); 
      }); 
   });  
   $(document).ready(function() { 
      $(".mobile-profile-menu").click(function() { 
         $(".user-left-menu").slideToggle("slow"); 
      }); 
   });  


    </script>
    
    
    @yield('jsContent')

</html>
