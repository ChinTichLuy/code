<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tạo Mới Sản Phẩm</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <!-- Form nhap lieu -->
    <main>
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- khu vuc nhap ten -->
                <div style="margin-bottom:16px;">
                    <span>Nhap ten</span>
                    <input type="text" name="ten_hh">

                </div>
                <!-- khu vuc nhap gia -->
                <div style="margin-bottom:16px;">
                    <span>Nhap gia</span>
                    <input type="float" name="don_gia">

                </div>
             
                <!-- khu vuc chon anh -->
                <div style="margin-bottom:16px;">
                    <span>Chon anh</span>
                    <input type="file" name="file_upload">
                </div>
                <!-- khu vuc chon mo ta -->
                <div style="margin-bottom:16px;">
                    <span>Nhap mô tả</span>
                    <input type="text" name="mo_ta">

                </div>
                <!-- khu vuc chon ma loai -->
                <div style="margin-bottom:16px;">
                    <span>Nhap mã Loại</span>
                    <select id="ma_loai" name="ma_loai">
                        <?php
                        $check = $danhSachLoai ?? $danhSachLoai;
                        foreach ($check as $product) { ?>
                            <option value="<?= $product->ma_loai ?>"><?= $product->ten_loai ?></option>
                        <?php } ?>
                    </select>

                </div>
                <!-- khu vuc nut -->
                <div style="margin-bottom:16px;">
                    <button type="submit" name="submitForm">Tao moi</button>
                </div>
                <!-- khu vuc thong bao loi -->
                <div style="margin-bottom:16px;color:red;">
                    <span><?= $thongBaoLoi ?></span>
                </div>
                <!-- khu vuc thong bao thanh cong -->
                <div style="margin-bottom:16px;color:green;">
                    <span><?= $thongBaoThanhCong ?></span>
                </div>

            </form>
            <!-- Het form -->

            <!-- Khu vực link điều hướng -->
            <div>
                <a href="?act=product-list">Quay Lại</a>
            </div>
        </div>
    </main>

    <?php include_once "../footer.php" ?>


</body>

</html>