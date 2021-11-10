<!DOCTYPE html>
<html lang="en">

  <head>
    @include('frontend.layouts.head')
  </head>

  <body>
    {{-- PreLoder --}}
    @include('frontend.layouts.page-header')


    <!-- Navigation Bar-->
    @include('frontend.layouts.navbar')
    <!-- End Navigation Bar-->


    @section('main-section')
    @show



    {{-- Footer --}}
    @include('frontend.layouts.footer')
  </body>



</html>
