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
    <div class="header">
        <header>
            <svg width="250" height="80">
                <rect x="0" y="0" width="150" height="80" fill="#234BBB"></rect>
                <text x="45" y="50" fill="#fdd602" font-size="30" font-weight="700">ChinPET.vn</text>
            </svg>
            <form action="" method="POST">
                <input type="text" name="search">
                <button class="btn_search" aria-label="Tìm kiếm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-search">
                        <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5  
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
                <a href="#">
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
        <section class="sec1">
            <li>
                <a href="#">Chó</a>
                <ul class="menu">
                    <div class="sub_menu">
                        <li><a href="#"><b>Thức Ăn Cho Chó</b></a></li>
                        <li><a href="#">Thức ăn hạt</a></li>
                        <li><a href="#">Thức ăn ướt</a></li>
                        <li><a href="#">Thức ăn hữu cơ</a></li>
                    </div>
                    <!-- end 1 muc -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Phụ Kiến</b></a></li>
                        <li><a href="#">Vòng cổ</a></li>
                        <li><a href="#">Dụng cụ ăn uống</a></li>
                        <li><a href="#">Khay vệ sinh</a></li>
                    </div>
                    <!-- end mục 2 -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Bánh</b></a></li>
                        <li><a href="#">Xương gặp sạch răng</a></li>
                        <li><a href="#">Bánh quy</a></li>
                        <li><a href="#">Thịt sấy khô</a></li>
                    </div>
                    <!-- end mục 3 -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Đồ Chơi</b></a></li>
                        <li><a href="#">Xương gặm</a></li>
                        <li><a href="#">Nhồi bông</a></li>
                    </div>
                    <!-- end mục 4 -->
                </ul>
            </li>
            <li>
                <a href="#">Mèo</a>
                <ul class="menu">
                    <div class="sub_menu">
                        <li><a href="#"><b>Thức Ăn Cho Mèo</b></a></li>
                        <li><a href="#">Thức ăn hạt</a></li>
                        <li><a href="#">Thức ăn ướt</a></li>
                        <li><a href="#">Thức ăn hữu cơ</a></li>
                    </div>
                    <!-- end 1 muc -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Phụ Kiến</b></a></li>
                        <li><a href="#">Vòng cổ</a></li>
                        <li><a href="#">Dụng cụ ăn uống</a></li>
                        <li><a href="#">Khay vệ sinh</a></li>
                    </div>
                    <!-- end mục 2 -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Vệ Sinh</b></a></li>
                        <li><a href="#">Cát cho mèo</a></li>
                        <li><a href="#">Sữa tắm</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </div>
                    <!-- end mục 3 -->
                    <div class="sub_menu">
                        <li><a href="#"><b>Chuồng</b></a></li>
                        <li><a href="#">Balo</a></li>
                        <li><a href="#">Lồng vẫn chuyển</a></li>
                    </div>
                    <!-- end mục 4 -->
                </ul>
            </li>
            <li><a href="#">Thiết bị thông minh</a></li>
            <li><a href="#">Hàng mới về</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
        </section>
        <div class="Hello">
            Welcome to ChinPET!!!
        </div>
    </div>
    <div class="container">
        <main>
            <section class="secSlide">
                <div class="banner-container">
                    <img id="bannerImage" class="banner" src="/code/img/slide1.webp" width=100%>
                </div>
                <script>
                    var index = 0;
                    var images = [
                        '/code/img/slide1.webp',
                        '/code/img/slide2.webp',
                        '/code/img/slide3.webp',
                        '/code/img/slide4.webp'
                    ];
                    var bannerImage = document.getElementById('bannerImage');

                    function nextSlide() {
                        index = (index + 1) % images.length;
                        bannerImage.src = images[index];
                    }
                    setInterval(nextSlide, 2000);
                </script>
            </section>

        </main>
    </div>
    <div class="footer">
        <footer>

            <div class="form-footer">
                <div class="content-footer">
                    <h2>Thành viên Chiners</h2>
                    <p>Đăng ký thành viên ngay hôm nay để nhận email về sản phẩm mới và chương trình khuyến mãi của ChinPET</p>

                </div>
                <div class="email">
                    <form action="" method="GET">
                        <input type="text" placeholder="Email của bạn..." style="width: 500px; height:50px;border:1px solid #b3b3b3; border-radius:10px;">

                        <button style=" width: 150px;
                                         height: 50px;
                                         border-radius: 90px;
                                         background-color: #234BBB;
                                         color: white;
                                         font-size: 20px;
                                          border: none;
                                          margin-left:20px;
                                        ">Đăng kí</button>
                    </form>
                </div>
            </div>

            <div class="in4-footer">
                <div class="tt">
                    <p>Shop</p>

                    <li><a href="#">Dành cho Chó</a></li>
                    <li><a href="#">Dành cho Mèo</a></li>
                    <li><a href="#">Thương hiệu</a></li>
                    <li><a href="#">Blogs </a></li>
                    <li> <a href="#">Bộ sưu tập</a></li>

                </div>
                <div class="tt">
                    <p>ChinPET Shop</p>

                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Thành viên Chiner</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Tuyển dụng</a></li>


                </div>
                <div class="tt">
                    <p>Hỗ Trợ Khách Hàng</p>

                    <li><a href="#">Chính sách đổi trả hàng</a></li>
                    <li><a href="#">Phương thức vận chuyển</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Phương thức thanh toán</a></li>
                    <li><a href="#">Chính sách hoàn tiền</a></li>

                </div>
                <div class="tt">
                    <p>Liên Hệ</p>
                    CÔNG TY CỔ PHẦN THUƠNG MẠI & DỊCH VỤ <br>
                    MST: 0987654321 <br>
                    116 Nguyễn Văn Thủ, Phường Đa Kao, Quận 1, <br> Thành phố Hà Nội, Việt Nam <br>
                    Hotline: 0987654321 <br>
                    Email: marketing@chinpet.vn

                </div>
            </div>
        </footer>
    </div>




</html>