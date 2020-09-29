<?php
require_once 'dbConfig.php';


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
                                $table = 'editor';
                                $result = $db-> query("SELECT COUNT(*) as total FROM $table where $table.type='Chuyển nhà trọn gói'") or die($mySQL->error);
                                $result_per_page = 5;
                                $type="chuyenNhaTronGoi";
                                $total = mysqli_fetch_object($result);
                                $number_of_result = $total->total;
                                 $num_of_page = ceil($number_of_result/$result_per_page);
                                 if(!isset($_GET['page'])){
                                 $page = 1;
                                 }else{
                                 $page = $_GET['page'];
                                 }
                                 $this_page_first_result = ($page-1)*$result_per_page;
                                 $result = $db -> query("SELECT * FROM $table where $table.type='Chuyển nhà trọn gói' LIMIT ".$this_page_first_result. ',' .$result_per_page);
                                echo  '<div class="container">';

                                while ($data = mysqli_fetch_object($result))
                                {
                                    echo
                                '<section class="pt-4">
                                    <hr class="mb-5">
                                   <a href="loadArticle.php?articleId='.$data->id.'">
                                   <div class="row wow fadeIn">
                                        <div class="col-lg-5 col-xl-4 mb-4">
                                            <div class="view overlay rounded z-depth-1">
                                                <img src="admin/uploads/' .$data->miniImage.'" class="img-fluid" alt="">
                                                 <div class="mask rgba-white-slight"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                                            <h3 class="mb-3 font-weight-bold dark-grey-text">
                                                <strong>'.$data->title.'</strong>
                                            </h3>
                                            <p class="grey-text">'.$data->summary.'</p>
                                            <img src=""/>
                                            <div class="iconRow" style="height: 20px!important;">
                                                <div class="iconCol">
                                                    <img class="icon" src="img/icon/ic_clock.png" style="height: 20px!important;width: 20px!important;">
                                                </div>
                                                <div class="iconDesCol">
                                                    <p style="font-size: 12px">Ngày đăng: '. $data->created.'</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="iconRow" style="height: 20px!important;">
                                            <div class="iconCol">
                                                <img class="icon" src="img/icon/ic_eye.png" style="height: 20px!important;width: 20px!important;">
                                            </div>
                                            <div class="iconDesCol">
                                                <p style="font-size: 12px">Lượt xem: '. $data->view.'</p>
                                            </div>
                                        </div>
                                        </div>
<!--                                        End tag-->
                                    </div>
                                    </a>
                                    <hr class="mb-5">
                                </section>';
                                }
                   echo '<div class="divCenterOuter">
                   <div id="pagin" class="pagination divCenterInner">';
                                if($page>1){
                                    $page_num = $page-1;
                                    echo '<a href="news.php?page=' . $page_num . '">' . "&laquo;" . '</a> ';

                                }else{
                                    echo '<a href="#pagin">&laquo;</a>';
                                }
                       for ($i=1;$i<=$num_of_page;$i++) {
                           if($i==$page){
                               echo '<a class="active" href="news.php?page=' . $i . '&&type='.$type.'">' . $i . '</a> ';
                           }else{
                               echo '<a href="news.php?page=' . $i . '">' . $i . '</a> ';

                           }
                            }
                                if($page<$num_of_page){
                                    $page_num = $page+1;
                                    echo '<a href="news.php?page=' . $page_num . '">' . "&raquo;" . '</a> ';
                                }else {
                                    echo '<a href="#pagin">&raquo;</a>';
                                }

                                  echo  '</div> </div> </div>';
                      