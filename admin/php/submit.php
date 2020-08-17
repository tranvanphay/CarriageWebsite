<?php
// Include the database configuration file
require_once 'dbConfig.php';

$editorContent = $statusMsg = '';
$specialCheck = htmlspecialchars('<p><img alt="" src="ckeditor/..');
$specialReplace = htmlspecialchars('<p style="text-align: center"><img alt="" class="img-fluid" style="max-width: 100% !important;height: auto !important;" src="admin');
$data = 'abc';
$type = "";
$title = "";
$miniImage = "";
$imageName ="";
$view = 0;
$array = array();
// If the form is submitted
if(isset($_POST['submit'])){
    // Get editor content
    $editorContent = $_POST['editor'];
    $type = $_POST["type"];
    $title = $_POST["title"];

    // Check whether the editor content is empty
    if(!empty($editorContent)){
        // Insert editor content in the database
        if(strpos(htmlspecialchars($editorContent),$specialCheck) !== false){
            $xpath = new DOMXPath(@DOMDocument::loadHTML($editorContent));
            $miniImage = $xpath->evaluate("string(//img/@src)");
            $array = preg_split('"/"', $miniImage);
            $miniImage = $array[count($array)-1];
            $data = str_replace($specialCheck,$specialReplace,htmlspecialchars($editorContent));
            $editorContent = html_entity_decode($data);
            $insert = $db->query("INSERT INTO editor (type, title, content, view,created, miniImage) VALUES ('".$type."' , '".$title."', '".$editorContent."', $view, NOW(),'".$miniImage."')");
        }else{
            $insert = $db->query("INSERT INTO editor (type, title, content, view,created, miniImage) VALUES ('".$type."' , '".$title."', '".$editorContent."', $view, NOW(),'".$miniImage."')");
        }
        // If database insertion is successful
        if($insert){
            echo "<script> window.location.assign('../adminAddArticle.html'); </script>";

        }else{
            echo "Lỗi đăng bài";
        }
    }else{
        echo 'Bạn chưa viết nội dung cho bài viết';
    }

}
?>