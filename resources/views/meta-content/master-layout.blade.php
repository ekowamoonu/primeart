<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">

    <!--(production)-->
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

     <!--(development)-->
     <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" href="/css/commons.css" type="text/css">
     @yield('custom-css')
     <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
     @yield('custom-title')

  </head>

  <body>

    <header>@yield('header') </header>
    <main>@yield('main')</main>
    <footer>
   <!--   <div class="container-fluid" style="background-color:#212121;">
        <div class="row">
          <div class="col">
            <p class="text-white mb-0 p-3 text-center">
                Copyright &copy; {{ \Carbon\Carbon::now()->year }} - All rights reserved Tekloans LLC.
            </p>
          </div>
        </div>  
    </div> -->
    </footer>
 


    <!-- Dependencies (Production) -->
    <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->

    <!--(Development)-->
    <script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/js/popper.min.js" type="text/javascript"></script>
    <script src="/js/tooltip.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <script type="text/javascript">
      $(function(){
        $('.dropdown-toggle').dropdown()
      });
    </script>
    <script type="text/javascript">
      $(function(){
        $('a[href*="#"]').click(function(e){
          e.preventDefault();
        });
      });
    </script>

    <!--custom scripts-->
    @yield('custom-scripts')

  </body>
</html>