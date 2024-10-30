<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <main>
        <div class="container">
            <div class="Banner">
                <img src="/duAnMau/img/banner2.png" alt="">
            </div>

            <div class="detail">
                <h2>Chi Tiet San Pham</h2>
                <?php 
                $check = $product ?? $product; 
                foreach ( $check as $key => $value) {
                    // foreach($value as $key1 => $value1){

                ?>
                    <div class="chiTietSP">
                        <div style="height:400px; width:300px">
                            <img src="<?= BASE_URL . $value['anh_sp'] ?>" alt="" style="max-width:300px; max-height:400px;">
                        </div>
                        <div class="motaSP">
                            <h3>Ten San Pham: </h3><p>-<?= $value['ten_hh'] ?></p>
                            <h3>Don Gia: </h3> <i>-<?= $value['don_gia'] ?>$</i>
                            <h3>Mo Ta San Pham: </h3>
                            <p>-<?= $value['mo_ta'] ?></p>

                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </main>
    <?php include_once "footer.php" ?>

</body>

</html>