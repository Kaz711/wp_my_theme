<?php wp_head(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
    <link href="/wp-content/themes/wp_my_theme/css/carousel.css" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="/wp-content/themes/wp_my_theme/css/normalize.css" rel="stylesheet">
    <link href="/wp-content/themes/wp_my_theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- Color CSS -->
    <link href="/wp-content/themes/wp_my_theme/css/ms_color.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="/wp-content/themes/wp_my_theme/js/jquery-3.4.1.min.js" ></script>
    <script>window.jQuery || document.write('<script src="/wp-content/themes/wp_my_theme/js/jquery-slim.min.js"><\/script>')</script><script src="/wp-content/themes/wp_my_theme/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>
    <script src="/wp-content/themes/wp_my_theme/js/SuperSimpleSlider.min.js"></script>
    <script type="text/javascript">
$(function(){
var $scroll = $('.scroll');
//$section.css('opacity', '0');

$(window).scroll(function(){
var wh = $(window).height(),
scrollTop = $(window).scrollTop();

$scroll.each(function(){
var pos = $(this).offset().top;
if(scrollTop > pos - wh) {
$(this).addClass('active');
}
});

});

});
</script>
  </head>

