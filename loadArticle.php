<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="Vận chuyển Hồ Chí Minh,
     Giao hàng Hồ Chí Minh, Xe tải chở hàng quận 1,
     Xe tải chở hàng quận 2, Xe tải chở hàng quận 3, Xe tải chở hàng quận 4, Xe tải chở hàng quận 5, Xe tải chở hàng quận 6, Xe tải chở hàng quận 7, Xe tải chở hàng quận 8
        , Xe tải chở hàng quận 9, Xe tải chở hàng quận 10, Xe tải chở hàng quận 11, Xe tải chở hàng quận 12, Xe tải chở hàng quận Thủ Đức, Xe tải chở hàng quận Gò Vấp, Xe tải chở hàng quận Bình Thạnh
     , Xe tải chở hàng quận Tân Bình, Xe tải chở hàng quận Tân Phú, Xe tải chở hàng quận Phú Nhuận, Xe tải chở hàng quận Bình Tân, Xe tải chở hàng Củ Chi, Xe tải chở hàng Hóc Môn
    , Xe tải chở hàng Bình Chánh, Xe tải chở hàng Nhà Bè, Xe tải chở hàng Cần Giờ, Taxi tải giá rẻ Hồ Chí Minh, Thuê xe liên tỉnh Hồ Chí Minh, Thuê xe chở hàng, Dịch vụ vận tải giá rẻ">    <!-- Shareable -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
    <title>Vận tải Tấn Thành</title>
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

    <!--[if lt IE 9]>
    <script src="js/autoScroll/html5shiv.js"></script>
    <script src="js/autoScroll/respond.min.js"></script>
    <![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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

<section class="single" style="margin-top: 20px">

    <div class="container">
        <div class="row">
            <div style="align-content: center; margin: 0px 10px 0px 10px">
                <article class="article main-article">
                    <?php
                    $mySQL = new mysqli("localhost","id14351042_phaytran","|4-R)F>ix0nf3V8S","id14351042_vantaitanthanh") or die ($mySQL-> connect_error);
                    $id = $_GET['articleId'];
                    $table = 'editor';
                    $updateView = "UPDATE editor SET `view`=`view`+1 WHERE id='".$id."'";
                    $isSuccess = $mySQL->query($updateView);
                    $result = $mySQL-> query("SELECT * FROM $table where $table.id='".$id."'") or die($mySQL->error);
                    while ($data = mysqli_fetch_object($result)) {
                        echo '<header>
                        <h2 style="font-size: 18pt">'.$data->title.'</h2>
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
                    mysqli_close($mySQL);
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

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Liên lạc với chúng tôi</h5>
                    <address>
                        <strong>Vận tải Tấn Thành</strong><br>
                        2290 QL1A, phường Trung Mỹ Tây<br>
                        quận 12, Thành phố Hồ Chí Minh.
                    </address>
                    <p>
                        <i class="icon-phone"></i>0779444123 <br>
                        <i class="icon-envelope-alt"></i> vantaitanthanh.com@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Liên kết nhanh</h5>
                    <ul class="link-list">
                        <a href="https://www.facebook.com/Vận-tải-Tấn-Thành-121373502725406">
                            <div class="iconRow">
                                <div class="iconCol">
                                    <li><img class="icon" src="img/index/fanpage-dich-vu-chuyen-nha-hcm.png"></li>
                                </div>
                                <div class="iconDesCol">
                                    <p>Fanpage</p>
                                </div>
                            </div>
                        </a>
                        <br>
                        <a href="https://www.google.com/search?tbm=isch&q=vpdev.xyz">
                            <div class="iconRow">
                                <div class="iconCol">
                                    <li><img class="icon"
                                             src="img/index/hinh-anh-dich-vu-chuyen-nha-gia-re-hcm.png"></li>
                                </div>
                                <div class="iconDesCol">
                                    <p>Hình ảnh</p>
                                </div>
                            </div>
                        </a>
                        <br>
                        <a href="https://www.facebook.com/Vận-tải-Tấn-Thành-121373502725406">
                            <div class="iconRow">
                                <div class="iconCol">
                                    <li><img class="icon" src="img/index/fanpage-dich-vu-chuyen-nha-hcm.png"></li>
                                </div>
                                <div class="iconDesCol">
                                    <p>Fanpage</p>
                                </div>
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h5 class="widgetheading">Chỉ dẫn</h5>
                <iframe class="mapSize"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1753.4158415272793!2d106.62580612033028!3d10.849692014436693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a266eb397a9%3A0x3dc5e2db8f0b8d61!2zQ2h1bmcgQ8awIFRow6FpIEFu!5e0!3m2!1svi!2s!4v1596687684965!5m2!1svi!2s"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

                </iframe>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Vận tải Tấn Thành All right reserved. By </span><a
                                    href="http://webthemez.com" target="_blank">vpdev</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:0779444123" class="pps-btn-img">
                <img src="img/icon_call.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0779444123">
            <span class="text-hotline">0779444123</span>
        </a>
    </div>
</div>

<div class="social-ring-wrap zalo-margin">
    <div class="hotline-phone-ring">
        <div class="zalo-ring-circle"></div>
        <div class="zalo-ring-circle-fill"></div>
        <div class="zalo-ring-img-circle">
            <a href="http://zaloapp.com/qr/p/1pcmppi8bhu2d" class="pps-btn-img">
                <img src="img/icon-zalo.png" alt="Gọi zalo" width="50">
            </a>
        </div>
    </div>

</div>

<div class="social-ring-wrap mess-margin">
    <div class="hotline-phone-ring">
        <div class="zalo-ring-circle"></div>
        <div class="zalo-ring-circle-fill"></div>
        <div class="zalo-ring-img-circle">
            <a href="http://m.me/121373502725406" class="pps-btn-img">
                <img src="img/icon-messenger.png" alt="Messenger" width="50">
            </a>
        </div>
    </div>

</div>
<!--sticky footer-->
<div class="sticky-phone-call">
    <div class="rowCus">
        <a href="tel:0779444123" class="pps-btn-img">
            <div class="column">
                <div class="column1">
                    <div class="phone-ring-img-circle ">
                        <a href="tel:0779444123" class="pps-btn-img">
                            <img src="img/icon_call.png" alt="Gọi dt" width="30">
                        </a>
                    </div>

                </div>
                <div class="column2 hotline-text">
                    <p>077-944-4123</p>
                </div>
            </div>
        </a>

        <a href="tel:0967654454" class="pps-btn-img">
            <div class="column">
                <div class="column1">
                    <div class="phone-ring-img-circle">
                        <a href="tel:0967654454" class="pps-btn-img">
                            <img src="img/icon_call.png" alt="Gọi dt" width="30">
                        </a>
                    </div>
                </div>
                <div class="column2 hotline-text">
                    <p style="margin-left: 10px">096-765-4454</p>
                </div>
            </div>
        </a>

    </div>
</div>


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
<script src="js/autoScroll/mousescroll.js"></script>
<script src="js/autoScroll/smoothscroll.js"></script>
<script src="js/autoScroll/jquery.prettyphoto.js"></script>
<script src="js/autoScroll/jquery.isotope.min.js"></script>
<script src="js/autoScroll/jquery.inview.min.js"></script>
<script src="js/autoScroll/wow.min.js"></script>
<script src="js/autoScroll/custom-scripts.js"></script>
</body>
</html>