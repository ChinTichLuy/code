<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chu</title>
    <link rel="stylesheet" href="css.css">

</head>
<?php
include_once "header.php";

?>

<body>

    <main>
        <div class="container">
            <section class="sect">
                <article>
                    <div class="Banner">
                        <img src="/duAnMau/img/banner.png" alt="">
                    </div>

                    <div class="row">
                        <?php
                        $check = $danhSachSP ?? $danhSachSP; 
                        foreach ($check as $value) { ?>
                            <div class="col-4">
                                <div class="item">
                                    <div style="width: 250px; height:250px">
                                         <img src="<?= $value->anh_sp ?>" alt="" width="100%" height="100%">
                                    </div>
                                   
                                    <p><?= $value->don_gia ?>$</p>
                                    <h2><a href="?act=product-detail&id=<?= $value->ma_hh ?>"><?= $value->ten_hh ?></a></h2>
                                    <i><?= $value->so_luot_xem ?> views </i>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </article>
                <aside>
                    <div class="form">
                        <form action="">
                            <button><a href="?act=dang-nhap">Đăng Nhập</a></button>
                            <ul>
                                <h3>Bạn chưa có tài khoản? </h3>
                                <li><a href="#">Đăng kí ngay</a></li>

                            </ul>
                        </form>
                    </div>
                    <div class="form">
                        <form action="">
                            <h2>Danh Mục</h2>
                            <hr>
                            <div class="danhMuc">
                                <ul>
                                    <?php
                                     $check = $danhSachLoai ?? $danhSachLoai; 
                                     foreach ($check as $value) { ?>
                                        <li>
                                            <a href="#"><?= $value->ten_loai ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </form>
                    </div>
                </aside>
            </section>
        </div>
    </main>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>