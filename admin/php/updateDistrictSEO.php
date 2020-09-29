<?php
// Include the database configuration file
require_once 'dbConfig.php';

$editorContent = $statusMsg = '';
$specialCheck = htmlspecialchars('<p><img alt="" src="ckeditor/..');
$specialReplace = htmlspecialchars('<p style="text-align: center"><img alt="" class="img-fluid" style="max-width: 100% !important;height: auto !important;" src="../admin');
$data = 'abc';
$type = "";
$title = "";
$miniImage = "";
$imageName ="";
$view = 0;
$array = array();
// If the form is submitted
if(isset($_POST['update'])){
    // Get editor content
    $editorContent = $_POST['editor'];
    $type = $_POST["type"];
    $district = $_POST["district"];
    $title = $_POST["title"];
    $typeCode = "";
    $success = false;
    $districtCode = "";
    if($type=="Chuyển nhà trọn gói"){
        $typeCode = "movingHome";
    }else if($type=="Chuyển văn phòng trọn gói"){
        $typeCode = "officeMoving";
    }else if($type=="Dịch vụ chuyển kho xưởng"){
        $typeCode = "factoryMoving";
    }else if($type=="Dịch vụ cho thuê xe tải"){
        $typeCode = "rentTruck";
    }else if($type=="Dịch vụ giao hàng thành phố Hồ Chí Minh"){
        $typeCode = "hcmDelivery";
    }else if($type=="Dịch vụ giao hàng liên tỉnh"){
        $typeCode = "outOfCityMoving";
    }

    if($district == "Quận 1"){
        $districtCode = "1";
    }  else if($district == "Quận 2"){
        $districtCode = "2";
    } else if($district == "Quận 3"){
        $districtCode = "3";
    } else if($district == "Quận 4"){
        $districtCode = "4";
    } else if($district == "Quận 5"){
        $districtCode = "5";
    } else if($district == "Quận 6"){
        $districtCode = "6";
    } else if($district == "Quận 7"){
        $districtCode = "7";
    } else if($district == "Quận 8"){
        $districtCode = "8";
    } else if($district == "Quận 9"){
        $districtCode = "9";
    } else if($district == "Quận 10"){
        $districtCode = "10";
    } else if($district == "Quận 11"){
        $districtCode = "11";
    } else if($district == "Quận 12"){
        $districtCode = "12";
    } else if($district == "Quận Thủ Đức"){
        $districtCode = "thuDuc";
    } else if($district == "Quận Gò Vấp"){
        $districtCode = "goVap";
    } else if($district == "Quận Bình Thạnh"){
        $districtCode = "binhThanh";
    } else if($district == "Quận Tân Bình"){
        $districtCode = "tanBinh";
    } else if($district == "Quận Tân Phú"){
        $districtCode = "tanPhu";
    } else if($district == "Quận Phú Nhuận"){
        $districtCode = "phuNhuan";
    } else if($district == "Quận Bình Tân"){
        $districtCode = "binhTan";
    } else if($district == "Huyện Củ Chi"){
        $districtCode = "cuChi";
    } else if($district == "Huyện Hóc Môn"){
        $districtCode = "hocMon";
    } else if($district == "Huyện Bình Chánh"){
        $districtCode = "binhChanh";
    }else if($district == "Huyện Nhà Bè"){
        $districtCode = "nhaBe";
    }else if($district == "Huyện Cần Giờ"){
        $districtCode = "canGio";
    }

    // Check whether the editor content is empty
    if(!empty($editorContent)){
        //Check is inserted
        if(strpos(htmlspecialchars($editorContent),$specialCheck) !== false){
            $xpath = new DOMXPath(@DOMDocument::loadHTML($editorContent));
            $miniImage = $xpath->evaluate("string(//img/@src)");
            $array = preg_split('"/"', $miniImage);
            $miniImage = $array[count($array)-1];
            $data = str_replace($specialCheck,$specialReplace,htmlspecialchars($editorContent));
            $editorContent = html_entity_decode($data);
        }
        $row = $db->query("SELECT * FROM DistrictSEO where DistrictSEO.type='".$typeCode."' AND DistrictSEO.district='".$districtCode."'");
//        $totalRow = mysqli_fetch_object($row);
        if(mysqli_num_rows($row)>0){
          $success = $db->query("UPDATE DistrictSEO SET `title`='".$title."',`miniImage`='".$miniImage."', `type`='".$typeCode."', `district`='".$districtCode."', `content`='".$editorContent."' WHERE DistrictSEO.type='".$typeCode."' AND DistrictSEO.district='".$districtCode."'");
        }else{
            $success = $db->query("INSERT INTO DistrictSEO (title,miniImage,type, district, content) VALUES ('".$title."','".$miniImage."','".$typeCode."' ,'".$districtCode."' , '".$editorContent."')");
        }

        // If database insertion is successful
        if($success){
            echo "<script> window.location.assign('../updateDistricSEO.html'); </script>";
        }else{
            echo "Lỗi đăng bài";
        }
    }else{
        echo 'Bạn chưa viết nội dung cho bài viết';
    }

}
?>