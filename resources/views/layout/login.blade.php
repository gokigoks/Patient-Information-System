<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
     <!--  <meta author="RAB" /> -->
      <title>
      	  @yield('title')
      </title>
      {!! HTML::style('styles/index.css') !!}
      {!! HTML::style('styles/form.css') !!}
      {!! HTML::style('styles/navbar.css') !!}
      <!-- {!! HTML::style('styles/main.css') !!}
      {!! HTML::script('scripts/myscripts.js') !!} -->
   </head>
   <body>
      @yield('contents') 

      <footer>
         @yield('footer')
      </footer>
   </body>
</html>