<!DOCTYPE html>
<html lang="en">

<head>
    <title>GCS | Error400</title>
    <meta charset="utf-8">
    <!-- begin scroll to top Step 1-1) Add HTML: -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- end scroll to top Step 1-1) Add HTML: -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 100px;
            background: #aaa;
        }
        /* begin scroll to top Step 2) Add CSS style: */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 50px;
            right: 200px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
        }
        
        #myBtn:hover {
            background-color: #cc0000;
        }
        /* end scroll to top Step 2) Add CSS style: */
        /* Make the image fully responsive */
        
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- begin scroll to top Step 1-2) Add HTML: -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!-- end scroll to top Step 1-2) Add HTML: -->


    <?php
     
    include 'navbar-1sticky.html';
    ?>

        <!-- carousel begin -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../picture/05-banner/banner-pg-sw-400-th.jpg" alt=" ขออภัยไม่พบหน้าเว็บไซต์ที่ต้องการหน้าเว็บไซต์ดังกล่าวอาจกำลังปรับปรุงหรือแก้ไข กรุณากลับมาอีกครั้งภายหลัง">
                </div>
                <div class="carousel-item">
                    <img src="../picture/05-banner/banner-pg-sw-400-en.jpg" alt="">
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!--

     ขออภัยไม่พบหน้าเว็บไซต์ที่ต้องการ
    หน้าเว็บไซต์ดังกล่าวอาจกำลังปรับปรุงหรือแก้ไข กรุณากลับมาอีกครั้งภายหลัง

        -->
        <!-- carousel end -->



        <?php include 'footer-menu.html'; ?>

        <!--
    FileName : \pg-400.html

    Start : Teeratus Rojananak 2020-02-21
    Final : Teeratus Rojananak 2020-02-21

    Job :

    -->
        <p style="color: #d0d0d0">Creator : Teeratus Rojananak 22-Jan-2019</p>
        <p style="color: #d0d0d0">Editor :</p>


        <!-- begin scroll to top Step 3) Add Javascript: -->
        <script>
            //scroll to top Step 3) Add JavaScript:
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- end scroll to top Step 3) Add Javascript: -->




</body>

</html>