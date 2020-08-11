<?php
//include_once("admin/php/dbConfig.php");
//$query = "Select * from editor";
//$result = mysqli_query($query);
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vận tải Tấn Thành</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="http://webthemez.com"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/autoScroll/animate.min.css" rel="stylesheet">
    <link href="css/autoScroll/prettyphoto.css" rel="stylesheet">
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
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
<div id="wrapper">

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

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Tin tức</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container content">
            <div class="container">
                <div class="tabContainer">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Chuyển nhà trọn gói</a></li>
                    <li><a data-toggle="tab" href="#menu1">Chuyển văn phòng trọn gói</a></li>
                    <li><a data-toggle="tab" href="#menu2">Dịch vụ chuyển kho xưởng</a></li>
                    <li><a data-toggle="tab" href="#menu3">Dịch vụ cho thuê xe tải</a></li>
                </ul>
                </div>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <main class="mt-5 pt-5">
                            <div class="container">
                                <section class="pt-4">
                                    <hr class="mb-5">
                                    <div class="row wow fadeIn">
                                        <div class="col-lg-5 col-xl-4 mb-4">
                                            <div class="view overlay rounded z-depth-1">
                                                <img src="img/service1.jpg" class="img-fluid" alt="">
                                                 <div class="mask rgba-white-slight"></div>
                                            </div>
                                        </div>
<!--                                        Start tag-->
                                        <?php
                                        $mySQL = new mysqli("localhost","id14351042_phaytran","|4-R)F>ix0nf3V8S","id14351042_vantaitanthanh") or die ($mySQL-> connect_error);
                                        $table = 'editor';
                                        $result = $mySQL-> query("SELECT * FROM $table") or die($mySQL->error);
                                        while ($data = mysqli_fetch_object($result))
                                        {
                                            echo /*"<h1>".$data -> title."</h1> <br>";*/
                                        '<div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                                            <h3 class="mb-3 font-weight-bold dark-grey-text">
                                                <strong>'.$data->title.'</strong>
                                            </h3>
                                            <p class="grey-text">Tom tat noi dung bai viet</p>
                                            <img src=""/>
                                            <div class="iconRow" style="height: 20px!important;">
                                                <div class="iconCol">
                                                    <img class="icon" src="'.$data->miniImage.'" style="height: 20px!important;width: 20px!important;">
                                                </div>
                                                <div class="iconDesCol">
                                                    <p style="font-size: 12px">Ngày đăng:'. $data->created.'</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="iconRow" style="height: 20px!important;">
                                            <div class="iconCol">
                                                <img class="icon" src="img/icon/ic_eye.png" style="height: 20px!important;width: 20px!important;">
                                            </div>
                                            <div class="iconDesCol">
                                                <p style="font-size: 12px">Lượt xem:'. $data->view.'</p>
                                            </div>
                                        </div>
                                        </div>';
                                        }
                                        ?>
<!--                                        End tag-->
                                    </div>
                                    <hr class="mb-5">
                                </section>
                            </div>
                        </main>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
                            <i class="icon-phone"></i> (+84) 0779444123 <br>
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
                    <p>(+84) 077-944-4123</p>
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
                    <p style="margin-left: 10px">(+84) 096-765-4454</p>
                </div>
            </div>
        </a>

    </div>
</div>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/autoScroll/mousescroll.js"></script>
<script src="js/autoScroll/smoothscroll.js"></script>
<script src="js/autoScroll/jquery.prettyphoto.js"></script>
<script src="js/autoScroll/jquery.isotope.min.js"></script>
<script src="js/autoScroll/jquery.inview.min.js"></script>
<script src="js/autoScroll/wow.min.js"></script>
<script src="js/autoScroll/custom-scripts.js"></script>
</body>
</html>