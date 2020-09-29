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
    <meta property="og:type" content="article" />
   
	<?php
                    $mySQL = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQL-> connect_error);
                    $typeCode = $_GET['type'];
                    $district = $_GET['district'];
                    $table = 'DistrictSEO';
                    $result = $mySQL-> query("SELECT * FROM $table where $table.type='".$typeCode."' and $table.district='".$district."'") or die($mySQL->error);
                    while ($data = mysqli_fetch_object($result)) {
                        echo '<meta property="og:title" content="'.$data->title.'" />
                <meta property="og:image" content="http://taxitaigiarehcm.com/admin/uploads/'.$data->miniImage.'" />
                <meta property="og:url" content="http://taxitaigiarehcm.com/loadArticle.php?articleId='.$_GET["articleId"].'" />';
                    }
                    mysqli_close($mySQL);
                    ?>
	
    <title>Taxi tải giá rẻ HCM</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../article/scripts/bootstrap/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="../article/scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="../article/scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="../article/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../article/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../article/scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="../article/scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="../article/css/style.css">
    <link rel="stylesheet" href="../article/css/skins/all.css">
    <link rel="stylesheet" href="../article/css/demo.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/flexslider.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"/>
    <link href="../css/autoScroll/animate.min.css" rel="stylesheet">
    <link href="../css/autoScroll/prettyphoto.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="../js/autoScroll/html5shiv.js"></script>
    <script src="../js/autoScroll/respond.min.js"></script>
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
                <a href="../index.php"><img class="favor" src="../img/logo_vehicle.png" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="../about.html">Giới thiệu</a></li>
                    <li><a href="../services.html">Dịch vụ</a></li>
                    <li class="active"><a href="../news.php">Tin tức</a></li>
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
                    $mySQL = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQL-> connect_error);
                    $typeCode = $_GET['type'];
                    $district = $_GET['district'];
                    $type = "";
                    if($typeCode == "movingHome"){
                        $type = "Chuyển nhà trọn gói";
                    } else if($typeCode == "officeMoving"){
                        $type = "Chuyển văn phòng trọn gói";
                    }else if($typeCode == "factoryMoving"){
                        $type = "Dịch vụ chuyển kho xưởng";
                    }else if($typeCode == "truckRent"){
                        $type = "Dịch vụ cho thuê xe tải";
                    }
                    $table = 'DistrictSEO';
                    $result = $mySQL-> query("SELECT * FROM $table where $table.type='".$typeCode."' and $table.district='".$district."'") or die($mySQL->error);
                    while ($data = mysqli_fetch_object($result)) {
                        echo '<header>
                        <h2 style="font-size: 18pt">'.$type.'</h2>
                        <ul class="details">
                            <li>Ngày đăng: 25/08/2020</li>
                            <li><a>'.$type.'</a></li>
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
                            <?php
                            $type = $_GET["type"];
                            $districtCode = $_GET["district"];
                            echo '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://taxitaigiarehcm.com/DistrictsSEO/districtSEO.php?type='.$type.'&&'.$districtCode.'" class="facebook">';?>
                                <i class="ion-social-facebook"></i> Facebook
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

                    <?php
                    $table1 = 'editor';
                    $mySQLHM = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQLHM-> connect_error);
                    $resultHomeMoving = $mySQLHM-> query("SELECT * FROM $table1 where $table1.type='Chuyển nhà trọn gói' AND $table1.view=(SELECT MAX(view) FROM $table1 where $table1.type='Chuyển nhà trọn gói' ) LIMIT 1") or die($mySQLHM->error);
                    while ($dataHM = mysqli_fetch_object($resultHomeMoving)) {
                        echo '<article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="../../loadArticle.php?articleId='.$dataHM->id.'">
                                    <img src="../admin/uploads/'.$dataHM->miniImage.'">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="../../loadArticle.php?articleId='.$dataHM->id.'">'.$dataHM->title.'</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="../../loadArticle.php?articleId='.$dataHM->id.'">'.$dataHM->type.'</a></div>
                                    <div class="time">'.$dataHM->created.'</div>
                                </div>
                            </div>
                        </div>
                    </article>';
                    }
                    ?>



                    <?php
                    $table2 = 'editor';
                    $mySQLOF = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQLOF-> connect_error);
                    $resultOF = $mySQLOF-> query("SELECT * FROM $table2 where $table2.type='Chuyển văn phòng trọn gói' AND $table2.view=(SELECT MAX(view) FROM $table2 where $table2.type='Chuyển văn phòng trọn gói' ) LIMIT 1") or die($mySQLOF->error);
                    while ($dataOF = mysqli_fetch_object($resultOF)) {
                        echo '<article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="../../loadArticle.php?articleId='.$dataOF->id.'">
                                    <img src="../admin/uploads/'.$dataOF->miniImage.'">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="../../loadArticle.php?articleId='.$dataOF->id.'">'.$dataOF->title.'</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="../../loadArticle.php?articleId='.$dataOF->id.'">'.$dataOF->type.'</a></div>
                                    <div class="time">'.$dataOF->created.'</div>
                                </div>
                            </div>
                        </div>
                    </article>';
                    }
                    ?>


                    <?php
                    $table3 = 'editor';
                    $mySQL3 = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQL3-> connect_error);
                    $result3 = $mySQL3-> query("SELECT * FROM $table3 where $table3.type='Dịch vụ chuyển kho xưởng' AND $table3.view=(SELECT MAX(view) FROM $table3 where $table3.type='Dịch vụ chuyển kho xưởng' ) LIMIT 1") or die($mySQLOF->error);
                    while ($data3 = mysqli_fetch_object($result3)) {
                        echo '<article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="../../loadArticle.php?articleId='.$data3->id.'">
                                    <img src="../admin/uploads/'.$data3->miniImage.'">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="../../loadArticle.php?articleId='.$data3->id.'">'.$data3->title.'</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="../../loadArticle.php?articleId='.$data3->id.'">'.$data3->type.'</a></div>
                                    <div class="time">'.$data3->created.'</div>
                                </div>
                            </div>
                        </div>
                    </article>';
                    }
                    ?>


                    <?php
                    $table4 = 'editor';
                    $mySQL4 = new mysqli("localhost:3306","tax55389_phay.tran99","Phaytran#1@@","tax55389_taxitaigiarehcm") or die ($mySQL4-> connect_error);
                    $result4 = $mySQL4-> query("SELECT * FROM $table4 where $table4.type='Dịch vụ cho thuê xe tải' AND $table4.view=(SELECT MAX(view) FROM $table4 where $table4.type='Dịch vụ cho thuê xe tải' ) LIMIT 1") or die($mySQLOF->error);
                    while ($data4 = mysqli_fetch_object($result4)) {
                        echo '<article class="article related col-md-6 col-sm-6 col-xs-12">
                        <div class="inner">
                            <figure>
                                <a href="../../loadArticle.php?articleId='.$data4->id.'">
                                    <img src="../admin/uploads/'.$data4->miniImage.'">
                                </a>
                            </figure>
                            <div class="padding">
                                <h2><a href="../../loadArticle.php?articleId='.$data4->id.'">'.$data4->title.'</a></h2>
                                <div class="detail">
                                    <div class="category"><a href="../../loadArticle.php?articleId='.$data4->id.'">'.$data4->type.'</a></div>
                                    <div class="time">'.$data4->created.'</div>
                                </div>
                            </div>
                        </div>
                    </article>';
                    }
                    ?>


                </div>

                <?php
                $typeCode = $_GET['type'];
                $type = "";
                if($typeCode == "movingHome"){
                    $type = "Chuyển nhà trọn gói";
                } else if($typeCode == "officeMoving"){
                    $type = "Chuyển văn phòng trọn gói";
                }else if($typeCode == "factoryMoving"){
                    $type = "Dịch vụ chuyển kho xưởng";
                }else if($typeCode == "truckRent"){
                    $type = "Dịch vụ cho thuê xe tải";
                }else if($typeCode == "hcmDelivery"){
                    $type = "Dịch vụ giao hàng";
                }else if($typeCode == "outOfCityMoving"){
                    $type = "Dịch vụ giao hàng liên tỉnh";
                }else{
				    $type = "Chuyển văn phòng trọn gói";
				}
                echo  '<div>
                    <a>   Xem thêm:</a>
                    <div class=" rowDistrictSeo boxDistrictSeo">
                        <div class="columnDistrictSeo boxDistrictSeo" style="margin-left: 10px;margin-top: 10px;color: #1c71ff">
                            <a href="districtSEO.php?type='.$typeCode.'&&district=1">'.$type. ' quận 1</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=2">'.$type. ' quận 2</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=3">'.$type. ' quận 3</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=4">'.$type. ' quận 4</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=5">'.$type. ' quận 5</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=6">'.$type. ' quận 6</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=7">'.$type. ' quận 7</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=8">'.$type. ' quận 8</a>
                        </div>

                        <div class="columnDistrictSeo boxDistrictSeo" style="margin-left: 10px;margin-top: 10px;color: #1c71ff">
                            <a href="districtSEO.php?type='.$typeCode.'&&district=9">'.$type. ' quận 9</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=10">'.$type. ' quận 10</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=11">'.$type. ' quận 11</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=12">'.$type. ' quận 12</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=thuDuc">'.$type. ' quận Thủ Đức</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=goVap">'.$type. ' quận Gò Vấp</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=binhThanh">'.$type. ' quận Bình Thạnh</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=tanBinh">'.$type. ' quận Tân Bình</a>
                        </div>

                        <div class="columnDistrictSeo boxDistrictSeo" style="margin-left: 10px;margin-top: 10px;color: #1c71ff">
                            <a href="districtSEO.php?type='.$typeCode.'&&district=tanPhu">'.$type. ' quận Tân Phú</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=phuNhuan">'.$type. ' quận Phú Nhuận</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=binhTan">'.$type. ' quận Bình Tân</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=cuChi">'.$type. ' huyện Củ Chi</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=hocMon">'.$type. ' huyện Hóc Môn</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=binhChanh">'.$type. ' huyện Bình Chánh</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=nhaBe">'.$type. ' huyện Nhà Bè</a></br>
                            <a href="districtSEO.php?type='.$typeCode.'&&district=canGio">'.$type. ' huyện Cần Giờ</a>
                        </div>

                    </div>
                </div>';
                ?>


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
                        <strong>Taxi tải giá rẻ HCM</strong><br>
                        2290 QL1A, phường Trung Mỹ Tây<br>
                        quận 12, Thành phố Hồ Chí Minh.
                    </address>
                    <p>
                        <i class="icon-phone"></i> 0779444123 <br>
                        <i class="icon-envelope-alt"></i> taxitaigiarehcm.com@gmail.com
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
                                    <li><img class="icon" src="../img/index/fanpage-dich-vu-chuyen-nha-hcm.png"></li>
                                </div>
                                <div class="iconDesCol">
                                    <p>Fanpage</p>
                                </div>
                            </div>
                        </a>
                        <br>
                        <a href="https://www.google.com/search?tbm=isch&q=taxitaigiarehcm.com">
                            <div class="iconRow">
                                <div class="iconCol">
                                    <li><img class="icon"
                                             src="../img/index/hinh-anh-dich-vu-chuyen-nha-gia-re-hcm.png"></li>
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
                                    <li><img class="icon" src="../img/index/fanpage-dich-vu-chuyen-nha-hcm.png"></li>
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
                            <a href="http://taxitaigiarehcm.com"> Copyright &copy; 2020 <span class="nameWeb">Taxi tải giá rẻ HCM</span></a> All right reserved.
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
                <img src="../img/icon_call.png" alt="Gọi điện thoại" width="50">
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
                <img src="../img/icon-zalo.png" alt="Gọi zalo" width="50">
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
                <img src="../img/icon-messenger.png" alt="Messenger" width="50">
            </a>
        </div>
    </div>

</div>
<!--sticky footer-->
<div class="sticky-phone-call">
    <div class="rowCus">
        <a href="tel:0779444123">
            <div class="column">
                <div class="column1">

                    <div class="phone-ring-img-circle ">
                        <!--                        <a href="tel:0779444123" class="pps-btn-img">-->
                        <img src="../img/icon_call.png" alt="Gọi dt" width="30">
                        <!--                        </a>-->
                    </div>
                </div>
                <div class="column2 hotline-text">
                    <p class="textWhite">077-944-4123</p>
                </div>
            </div>
        </a>

        <a href="tel:0967654454">
            <div class="column">
                <div class="column1">
                    <div class="phone-ring-img-circle">
                        <!--                        <a href="tel:0967654454" class="pps-btn-img">-->
                        <img src="../img/icon_call.png" alt="Gọi dt" width="30">
                        <!--                        </a>-->
                    </div>
                </div>
                <div class="column2 hotline-text">
                    <p style="margin-left: 10px" class="textWhite">096-765-4454</p>
                </div>
            </div>
        </a>

    </div>
</div>


<!-- JS -->
<script src="../article/js/jquery.js"></script>
<script src="../article/js/jquery.migrate.js"></script>
<script src="../article/scripts/bootstrap/bootstrap.min.js"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="../article/scripts/jquery-number/jquery.number.min.js"></script>
<script src="../article/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="../article/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../article/scripts/easescroll/jquery.easeScroll.js"></script>
<script src="../article/scripts/sweetalert/dist/sweetalert.min.js"></script>
<script src="../article/scripts/toast/jquery.toast.min.js"></script>
<!--<script src="article/js/demo.js"></script>-->
<script src="../article/js/e-magz.js"></script>
<script src="../js/autoScroll/mousescroll.js"></script>
<script src="../js/autoScroll/smoothscroll.js"></script>
<script src="../js/autoScroll/jquery.prettyphoto.js"></script>
<script src="../js/autoScroll/jquery.isotope.min.js"></script>
<script src="../js/autoScroll/jquery.inview.min.js"></script>
<script src="../js/autoScroll/wow.min.js"></script>
<script src="../js/autoScroll/custom-scripts.js"></script>
</body>
</html>
