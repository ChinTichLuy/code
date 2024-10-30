<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang dành cho Admin</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php include_once "header.php" ?>

    <!-- Khu vuc bang du lieu -->
    <table border="1" style="width: 1440px; margin: 30px auto">
        <thead>
            <tr>
                <th>Mã Hàng Hoá</th>
                <th>Ten San pham</th>
                <th>Gia</th>
                <th>Anh</th>
                <th>Mô tả</th>
                <th>Mã Loại</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $check = $danhSachSP ?? $danhSachSP;
            foreach ($check as $value) {
                // echo "<pre>";
                // print_r($value);
            ?>

                <tr>
                    <td><?= $value->ma_hh ?></td>
                    <td><?= $value->ten_hh ?></td>
                    <td><?= $value->don_gia ?>$</td>
                    <td>
                        
                        <!-- <?= $value->anh_sp ?> -->
                        <div style="height:100px; width:100px">
                            <img src="<?= BASE_URL . $value->anh_sp ?>" alt="" style="max-width:100%; max-height:100%;">
                        </div>
                    </td>
                    <td><?= $value->mo_ta ?></td>
                    <td><?= $value->ma_loai ?></td>
                    <td>
                        <a href="?act=product-update&id=<?= $value->ma_hh ?>">Sua</a>
                        <a href="?act=product-delete&id=<?= $value->ma_hh ?>" onclick="return confirm('Are you sure about that?')">Xoa</a>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php include_once "../footer.php" ?>
</body>

</html>