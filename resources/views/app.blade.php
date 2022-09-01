<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
     <!--VIDEO JS CDN-->
    <link href="https://vjs.zencdn.net/7.20.1/video-js.css" rel="stylesheet" />

    <!-- Video.js base CSS -->
    <link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet"/>

    <!-- Video.js theme sea  -->
    <link href="https://unpkg.com/@videojs/themes@1/dist/sea/index.css" rel="stylesheet"/>

    <!--RTL BOOTSTRAP CDN-->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
      crossorigin="anonymous"/>

      <!--ICONS CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!--EXTERNAL CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!--ANIMATE CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
      <!-- slick slider used in univ-->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  <!--aos library -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--HOVER CSS LIBRARY-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- FLICKITY SWIPER-->
    <!--swiper in testimonials  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>




    <title>Edutrend</title>
  </head>

<body >


@yield('content')

@include('partials.footer')
</body>
