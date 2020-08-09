<?php
// Include the database configuration file
require_once 'dbConfig.php';

$editorContent = $statusMsg = '';
$specialCheck = htmlspecialchars('<p><img');
$specialReplace = htmlspecialchars('<p style="text-align: center"><img');
$data = 'abc';
// If the form is submitted
if(isset($_POST['submit'])){
    // Get editor content
    $editorContent = $_POST['editor'];

    // Check whether the editor content is empty
    if(!empty($editorContent)){
        // Insert editor content in the database
        if(strpos(htmlspecialchars($editorContent),$specialCheck) !== false){
            $data = str_replace($specialCheck,$specialReplace,htmlspecialchars($editorContent));
           $editorContent = html_entity_decode($data);
            $insert = $db->query("INSERT INTO editor (content, created) VALUES ('".$editorContent."', NOW())");
        }else{
        $insert = $db->query("INSERT INTO editor (content, created) VALUES ('".$editorContent."', NOW())");
        }
        // If database insertion is successful
        if($insert){
            $statusMsg = "The editor content has been inserted successfully.";

        }else{
            $statusMsg = "Some problem occurred, please try again.";
        }
    }else{
        $statusMsg = 'Please add content in the editor.';
    }
    echo $data;

}
?>