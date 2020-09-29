<!doctype html>
<html lang="en">
<head>
    <title>Carriage Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Main CSS-->
    <link href="css/formAddArticle.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--      <script src="vendor/jquery/jquery.js"></script>-->
    <!--    <link type="text/css" href="CKEditor/sample/css/sample.css" rel="stylesheet" media="screen"/>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="CKEditor/ckeditor.js"></script>
    <script src="CKEditor/js/sample.js"></script>
    <link rel="stylesheet" href="CKEditor/css/samples.css">
    <link rel="stylesheet" href="CKEditor/toolbarconfigurator/lib/codemirror/neo.css">


</head>
<body>
    <?php
        $mySQL = new mysqli("localhost","id14351042_phaytran","|4-R)F>ix0nf3V8S","id14351042_vantaitanthanh") or die ($mySQL-> connect_error);
        $table = 'editor';
        $result = $mySQL-> query("SELECT * FROM $table") or die($mySQL->error);
        while ($data = mysqli_fetch_object($result)) {
            echo "$data->content";
        }
    ?>

</body>
</html>
