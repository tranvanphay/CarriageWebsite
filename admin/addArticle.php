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
    <link rel="stylesheet" href="css/style.css">
    <script src="CKEditor/ckeditor.js"></script>
    <script src="CKEditor/js/sample.js"></script>
    <link rel="stylesheet" href="CKEditor/css/samples.css">
    <link rel="stylesheet" href="CKEditor/toolbarconfigurator/lib/codemirror/neo.css">


</head>
<body>

<div class="wrapper d-flex align-items-stretch">


    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5" style="margin-left: 20px">

        <main>
            <div class="adjoined-top">
                <div class="grid-container">
                    <div class="content grid-width-100">

                    </div>
                </div>
            </div>
            <div class="adjoined-bottom">
                <div class="grid-container">

                    <div class="grid-width-100">
                        <form method="post" action="php/submit.php">
                            <input type="text" class ="inputMini" placeholder="Tiêu đề" name="title"/>
                                <label for="sel1" style="color: black;font-weight: bold">Loại bài viết:</label>
                                <select name="type" class="form-control" id="sel1">
                                    <option>Chuyển nhà trọn gói</option>
                                    <option>Chuyển văn phòng trọn gói</option>
                                    <option>Dịch vụ chuyển kho xưởng</option>
                                    <option>Dịch vụ cho thuê xe tải</option>
                                </select>
<!--                            <label style="color: black;font-weight: bold">Tóm tắt:</label>-->
                            <input type="text" style="margin: 10px 0px 10px 0px" class ="inputMini" placeholder="Tóm tắt" name="summary"/>
                            <label style="color: black;font-weight: bold">Nội dung:</label>
                            <textarea name="editor" id="editor" style ="visibility: visible!important;" rows="10" cols="10">
                            </textarea>
                            <input type="submit" class="btn btn-info" style="background-color: #007bff;margin: 10px 0px 0px 0px" name="submit" value="Đăng bài">
                        </form>
                    </div>

                </div>
            </div>

        </main>

        <footer class="footer-a grid-container">
            <div class="grid-container">
                <p class="grid-width-100">
                    Dịch vụ Vận tải Tấn Thành
                    <br>
                    Copyright © 2020 – Design by vpdev. All rights reserved.
                </p>
            </div>
        </footer>
        <script>
            CKEDITOR.replace('editor',{
                filebrowserUploadUrl:"CKEditor/ck_upload.php",
                filebrowserUploadMethod:"form"
            });
        </script>
        <script>
            tinymce.init({
                selector: '#editor'
            });
        </script>


    </div>
</div>

<!--<script src="../js/jquery.min.js"></script>-->
<!--<script src="../js/popper.js"></script>-->
<!--<script src="../js/bootstrap.min.js"></script>-->
<!--<script src="../js/main.js"></script>-->
<script src="CKEditor/js/tinymce.min.js"></script>
</body>
</html>
