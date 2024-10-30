<?php
// Khi tao 1 session
include_once "controller/ProductController.php";
// Log thu gia tri session hien tai
// echo "Log thu gia tri session hien tai:<br>";
// var_dump($_SESSION);
// echo "<br>";

// kiem tra thong tin nguoi dung nhap vao co dung ko
// Log thu gia tri nguoi dung nhap trong form
// var_dump($_POST);
// echo "<br>";

// Khai bao bien xu ly thong tin dang nhap
$thongBao = "";

// kiem tra nguoi dung submit form dang nhap
if (isset($_POST["submitFormDangNhap"])) {
    // bat dau xu ly du lieu submit form

    // Lay du lieu username va password nguoi dung nhap vao
    $username = strtolower(trim($_POST["username"]));
    $password = $_POST["password"];

    // Kiem tra viec nhap du thong tin
    $check = false;
    if ($username != "" && $password != "") {
        // Nhap du thong tin ==> kiem tra viec nhap dung thong tin 
        $check = $value ?? $value;
        foreach ($check as $value1) {
            if ($username == $value1["name"] && $password == $value1['password']) {
                // echo "thanhcong";
                $check = true;
                break;
            }else{
                $thongBao = "Sai tài khoản hoặc mật khẩu!";
            }
        }
    } else {
        // Nhap thieu thong tin, yeu cau nhap lai
        $thongBao = "Moi ban nhap du thong tin";
    }
    if ($check == true) {
        header("Location: admin");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="css.css">

</head>

<body>
    <?php include_once "header.php" ?>

    <main>
        <div class="container">
            <div class="formlogin">

                <form action="" method="POST">
                    <h2>Đăng Nhập</h2>
                    <div class="nhap1">
                        User:
                        <input type="text" name="username">
                    </div>
                    <div class="nhap2">
                        Password:
                        <input type="password" name="password">
                    </div>
                    <button type="submit" name="submitFormDangNhap">Đăng nhập</button>
                </form>
                <?= $thongBao ?>

            </div>

        </div>
    </main>
    <?php include_once "footer.php" ?>
</body>

</html>