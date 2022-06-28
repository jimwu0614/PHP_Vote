<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VotingCenter</title>
    <!--使用拆分css檔案的方式來區分共用的css設定及前後台不同的css-->
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/front.css">
    <link rel="stylesheet" href="./CSS/slider.css">
</head>

<body>
    <!-- 頁首輪播器 -->
    <div id="header">
        <?php
        include "./layout/header.php";
        ?>
    </div>
    
    <!-- 選單 -->
    <div id="navbar">
        <?php
        include "./layout/nav_front.php";
        ?>
    </div>


    <!-- 主頁 -->
    <div id="container">
        <?php
        //把別的頁面顯示於container,同iframe
        if (isset($_GET['do'])) {
            $file = './front/' . $_GET['do'] . ".php";
        }
        if (isset($file) && file_exists($file)) {
            include $file;
        } else {
            include "./front/vote_list.php";
        }
        ?>
    </div>

    <div>
        <?php include "./layout/footer.php"; ?>
    </div>
</body>

</html>