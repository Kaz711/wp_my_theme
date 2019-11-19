<?php wp_footer(); ?>

<!-- FOOTER -->
<footer class="container">
  <p style="text-align: center;">&copy; 2016-2019 oune Co., Ltd. &middot; <a href="#" class="text-msc">Home</a> &middot; <a href="mailto:送信先メールアドレス" class="text-msc">Mail</a></p>
</footer>

<!-- Scroll btn -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
<div id="page_top"><a href="#"></a></div>

<!-- <p class="pagetop"><a href="#wrap">▲</a></p> -->
<script>
$(document).ready(function() {
  var page_top = $('#page_top');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            page_top.fadeIn();
       } else {
            page_top.fadeOut();
            }
       });
       page_top.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 1500);
              return false;
   });
});
</script>
<style>
  #page_top{
    display: none;
    width: 90px;
    height: 90px;
    position: fixed;
    right: 0;
    bottom: 0;
    background: #9f6f55;
    opacity: 0.8;
    border-radius: 50%;
  }
  #page_top a{
    position: relative;
    display: block;
    width: 90px;
    height: 90px;
    text-decoration: none;
  }
  #page_top a::before{
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    content: '\f102';
    font-size: 25px;
    color: #fff;
    position: absolute;
    width: 25px;
    height: 25px;
    top: -40px;
    bottom: 0;
    right: 0;
    left: 0;
    margin: auto;
    text-align: center;
  }
  #page_top a::after{
    content: 'PAGE TOP';
    font-size: 13px;
    color: #fff;
    position: absolute;
    top: 45px;
    bottom: 0;
    right: 0;
    left: 0;
    margin: auto;
    text-align: center;
  }
</style>
  
</main>
</body>
</html>