<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <!-- Shareable -->
    <meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
    <title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="article/scripts/bootstrap/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="article/scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="article/scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="article/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="article/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="article/scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="article/scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="article/css/style.css">
    <link rel="stylesheet" href="article/css/skins/all.css">
    <link rel="stylesheet" href="article/css/demo.css">

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/autoScroll/animate.min.css" rel="stylesheet">
    <link href="css/autoScroll/prettyphoto.css" rel="stylesheet">
</head>

<body>

<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img class="favor" src="img/logo_vehicle.png" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="services.html">Dịch vụ</a></li>
                    <li class="active"><a href="news.php">Tin tức</a></li>
                    <li><a class="scroll" style="color: white !important;" href="#footer">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</header><!-- end header -->

<section class="single">
    <div class="container">
        <div class="row">
            <div style="align-content: center; margin: 0px 10px 0px 10px">
                <article class="article main-article">
                    <?php
                    $mySQL = new mysqli("localhost","id14351042_phaytran","|4-R)F>ix0nf3V8S","id14351042_vantaitanthanh") or die ($mySQL-> connect_error);
                    $id = $_GET['articleId'];
                    $table = 'editor';
                    $result = $mySQL-> query("SELECT * FROM $table where $table.id='".$id."'") or die($mySQL->error);
                    while ($data = mysqli_fetch_object($result)) {
                        echo '<header>
                        <h1>'.$data->title.'</h1>
                        <ul class="details">
                            <li>Ngày đăng: '.$data->created.'</li>
                            <li><a>'.$data->type.'</a></li>
                            <li>Lượt xem: '.$data->view.'</li>
                        </ul>
                    </header>
                    <div class="main">'
                        .$data->content.
                    '</div>';
                    }
                    ?>
                </article>
                <div class="sharing">
                    <div class="title"><i class="ion-android-share-alt"></i> Chia sẻ</div>
                    <ul class="social">
                        <li>
                            <a href="#" class="facebook">
                                <i class="ion-social-facebook"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <i class="ion-social-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#" class="googleplus">
                                <i class="ion-social-googleplus"></i> Google+
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin">
                                <i class="ion-social-linkedin"></i> Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="#" class="skype">
                                <i class="ion-ios-email-outline"></i> Email
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="line"><div>Những bài viết nổi bật</div></div>
                <div class="row">
                    <article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="#">
                                    <img src="article/images/news/img03.jpg">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="category.html">Lifestyle</a></div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="#">
                                    <img src="article/images/news/img08.jpg">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="category.html">Lifestyle</a></div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- JS -->
<script src="article/js/jquery.js"></script>
<script src="article/js/jquery.migrate.js"></script>
<script src="article/scripts/bootstrap/bootstrap.min.js"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="article/scripts/jquery-number/jquery.number.min.js"></script>
<script src="article/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="article/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="article/scripts/easescroll/jquery.easeScroll.js"></script>
<script src="article/scripts/sweetalert/dist/sweetalert.min.js"></script>
<script src="article/scripts/toast/jquery.toast.min.js"></script>
<script src="article/js/demo.js"></script>
<script src="article/js/e-magz.js"></script>
</body>
</html>
