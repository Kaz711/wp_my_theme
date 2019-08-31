   <!-- scroll btn -->
<p class="pagetop"><a href="#wrap">▲</a></p>
<script>
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 1500);
              return false;
   });
});
</script>
<style>
  .pagetop {
    display: none;
    position: fixed;
    bottom: 30px;
    right: 15px;
}
.pagetop a {
    display: block;
    background-color: #ccc;
    text-align: center;
    color: #222;
    font-size: 12px;
    text-decoration: none;
    padding: 5px 10px;
  filter:alpha(opacity=50);
    -moz-opacity: 0.5;
    opacity: 0.5;
}
.pagetop a:hover {
    display: block;
    background-color: #b2d1fb;
    text-align: center;
    color: #fff;
    font-size: 12px;
    text-decoration: none;
    padding:5px 10px;
  filter:alpha(opacity=50);
    -moz-opacity: 0.5;
    opacity: 0.5;
}
</style>
    <!-- /scroll btn -->

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- ================================================== -->
  <!-- Profile & Individuality -->

  <div class="container marketing">

    <div class="row featurette">
      <div class="col-md-4 order-md-1 mb-4">
        <!-- <img src="..." alt="image" class="img-thumbnail"> -->
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto  img-thumbnail" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">photo</text></svg>
      </div>
      <div class="col-md-4 order-md-2 mb-4">
        <p class="h1 mb-4">Profile</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Name : Kazumi Oki</li>
          <li class="list-group-item">Gender : Female</li>
          <li class="list-group-item">Blood type : AB</li>
          <li class="list-group-item">Birthplace : Yokohama,kanagawa</li>
          <li class="list-group-item">Lessons : Programming technology</li>
          <li class="list-group-item">Hobby : Design, Flower arrangement, therapist, yoga, accessories, handicraft, organized storage,Antique collection</li>
        </ul>
      </div>
      <div class="col-md-4 order-md-3">
        <p class="h1">Individuality</p>
      　<ul>
          <li class="mb-1">協調性<span class="text-info">＃包容力</span></li>
          <li class="mb-1">心配性<span class="text-info">＃安全運転</span></li> 
          <li class="mb-1">ドライ<span class="text-info">＃ぼっち力</span></li>
          <li class="mb-1">計画的<span class="text-info">＃策士</span></li>  
          <li class="mb-1">察する<span class="text-info">＃センス</span></li>
          <li class="mb-1">こだわり・工夫好き<span class="text-info">＃発明</span></li> 
          <li class="mb-1">挑戦好き<span class="text-info">＃実行力</span></li>
          <li class="mb-1">集中力<span class="text-info">＃ストイック</span></li> 
          <li>飽き性<span class="text-info">＃好奇心旺盛</span></li>
        </ul>
        <div>［First impression］<br>Gentle / Seriously / Looks weak</div>
        <div>→ People are different from the appearance...</div>
      </div>    
    </div>

    <hr class="featurette-divider" style="margin-top: 2em;"> 

<!-- Three columns of js -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="160" height="160" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Philosophy</h2>
        <p style="margin-top: 20px;">［WIN-WIN-WIN］<br>ユーザー／クライアント／制作支援の全ての立場に対してメリットがある仕組みを作りたい、ハブ（繋）の存在として貢献してゆく</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
      <div class="col-lg-4">
        <div class="chart-container" style="position: relative; width:100%">
          <canvas id="myCircleChart"></canvas>
        </div>
<script>
  var ctx = document.getElementById('myCircleChart').getContext('2d');
  var chart = new Chart(ctx, {
      // 作成したいチャートのタイプ
      type: 'pie',
      data:{
        labels:["ブランドサイト","キャンペーンサイト","ショップサイト","アプリ"],
        datasets:[{
          label: "データセット",
          data:[48,22,25,5]
        }]
      }
    }
  );
</script>
        <h2>Business category</h2>
        <p style="margin-top: 20px;">［Various industries］<br>官公庁／建設業／不動産／遺伝子解析／車／教育教材／病院／IT／EC通販／ファッション／美容健康／飲食</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
      <div class="col-lg-4">
<div class="chart-container" style="position: relative; width:100%">
  <canvas id="myRadarChart"></canvas>
</div>
<script>
  new Chart(document.getElementById("myRadarChart"),
    {"type":"radar","data":
      {"labels":["プロジェクト統括","企画・設計","デザインUIUX","システム開発","運用"],
        "datasets":[
          {
            "label":"スキルセット",
            "data":[40,60,85,15,50],
            "fill":true,
            "backgroundColor":"rgba(54, 162, 235, 0.2)",
            "borderColor":"rgb(54, 162, 235)",
            "pointBackgroundColor":"rgb(54, 162, 235)",
            "pointBorderColor":"#fff",
            "pointHoverBackgroundColor":"#fff",
            "pointHoverBorderColor":"rgb(54, 162, 235)"
          }
        ]
      },
      "options":{
        "elements":{
          "line":{
            "tension":0,
            "borderWidth":3
          }
        }
      }
    });
</script>
        <h2>work ability</h2>
        <p style="margin-top: 20px; margin-bottom: -10px;">［Strengthening］<br>DTPからWEBへ転身。デザイナー経歴が長め。企業常駐型WEBディレクター。企画設計・UIUX・プログラミングスキル強化中。</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
    </div>
<!-- /Three columns of js -->

    <hr class="featurette-divider" style="margin-top: 2em;">

<!-- SuperSimpleSlider -->
<script type="text/javascript" >
sAutoplayDelay = 4000;
sArrowLeftUrl = 'img/arrows/arrow_left_white.png'; // image url for left arrow
sArrowRightUrl = 'img/arrows/arrow_right_white.png'; // image url for right arrow
</script>

    <hr class="featurette-divider">
    <p class="h1" style="text-align: center;">achievements</p>
    <p style="text-align: center; margin-bottom: 30px;">Here is Recent works.</p>
<div class="simpleSlider" id="sNr1" style="height: 300px;">
<img src="img/sampleImg1.jpg" alt="sample image 1" />
<img src="img/sampleImg2.jpg" alt="sample image 2" />
<img src="img/sampleImg3.jpg" alt="sample image 3" />
<img src="img/sampleImg4.jpg" alt="sample image 4" />
</div>
<!-- /SuperSimpleSlider -->

<!-- Card decks & btn -->
    <hr class="featurette-divider">
    <p class="h1" style="text-align: center;">Tiles Blog</p>
    <p style="text-align: center; margin-bottom: 30px;">It is a daily record.</p>

<div class="card-deck">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.This card has supporting text below as a.....</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<!-- /Card decks & btn -->

<!-- Card decks & btn -->
    <hr class="featurette-divider">
    <p class="h1" style="text-align: center;">Tiles Blog</p>
    <p style="text-align: center; margin-bottom: 30px;">Here is my career history.</p>

<div class="card mb-3" style="max-width: 1200px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 1200px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="max-width: 1200px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<!-- /Card decks & btn -->

  </div><!-- /.container -->