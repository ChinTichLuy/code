<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/code/cssTrangChu.css">
    <script src="https://kit.fontawesome.com/e14b23f1dc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>
            <svg width="250" height="80">
                <rect x="0" y="0" width="150" height="80" fill="#234BBB"></rect>
                <text x="45" y="50" fill="#fdd602" font-size="30" font-weight="700">ChinPET.vn</text>
            </svg>
            <form action="" method="POST">
                <input type="text" name="search">
                <button class="btn_search" aria-label="Tìm kiếm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-search">
                        <path
                            d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5  
                             S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   
                             C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z">
                        </path>
                    </svg>
                </button>
            </form>
            <div class="head_right">
                <div class="hotline">
                    Hotline
                    <br>
                    <b>086 767 7891</b>
                </div>
                <a href="#">
                    <div class="favorite">
                        <i class="fa-solid fa-heart"></i><br>
                        Wishlist
                    </div>
                </a>
                <a href="">
                    <div class="login_header">
                        <i class="fa-solid fa-user"></i><br>
                        Đăng nhập
                    </div>
                </a>
                <a href="#">
                    <div class="cart_header">
                        <i class="fa-solid fa-cart-shopping"></i><br>
                        Giỏ hàng
                    </div>
                </a>
            </div>
        </header>
        <div class="nav">
            <ul>
                <li><a href="#">Chó</a></li>
                <li><a href="#">Mèo</a></li>
                <li><a href="#">Dụng cụ</a></li>
            </ul>
        </div>
        <section style="background-color: #FFD700; height:50px; text-align:center">
            Welcome to ChinPET!!!
        </section>
        <main>
            <section class="secSlide">
                <div class="banner-slide" id="bannerSlide">
                    <img src="/code/img/slide1.webp" class="banner">
                    <img src="/code/img/slide2.webp" class="banner">
                    <img src="/code/img/slide3.webp" class="banner">
                    <img src="/code/img/slide4.webp" class="banner">
                </div>
                <script>
                    <!-- đoạn này định làm banner tự chuyển ảnh sau 3 giây  -->
                    var slideIndex = 0;
                    function showNextSlide() {

                    }
                    setInterval(showNextSlide, 3000);

                </script>

            </section>

        </main>
        <footer>

        </footer>
    </div>


</html>