<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/code/cssTrangChu.css">
</head>

<body>
    <div class="container">
        <header>
            <svg width="250" height="80">
                <rect x="0" y="0" width="150" height="80" fill="#234BBB"></rect>
                <text x="45" y="50" fill="#fdd602" font-size="30" font-weight="700">ChinPET.vn</text>
                <div>
                    <input type="text">
                    <button>Tìm Kiếm</button>
                </div>
                <div>
                    <Button>Đăng nhập</Button>
                </div>
                <div>
                    <Button>Giỏ hàng</Button>
                </div>
        </header>
        <section class="sec1">
            <nav>
                <ul>
                    <li><a href="#">Chó</a></li>
                    <li><a href="#">Mèo</a></li>
                    <li><a href="#">Dụng cụ</a></li>
                </ul>
            </nav>
        </section>
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
                    function showNextSlide()
                    {
                    
                    }                 
                    setInterval(showNextSlide, 3000);
                    
                </script>

            </section>

        </main>
        <footer>

        </footer>
    </div>
</body>

</html>