<?php
// Khai bao bien moi truong
define("BASE_URL","http://localhost/duAnMau/");  


// 1. Nhúng các file cần thiết
include_once "controller/ProductController.php";
// tat ca cac model
include_once "model/productQuery.php";
include_once "model/product.php"; 

// 2. Giới thiệu cách người dùng sẽ tương tác với phần mềm
// Người dùng sẽ sử dụng đường url để thể hiển tương tác của mình
// VD: Nếu muốn truy cập trang danh sách --> Người dùng sẽ truyền param ?act=product-list lên đường dẫn url
// VD: Nếu muốn truy cập trang chi tiết với id=3 --> Người dùng sẽ truyền param ?act=detail&id=3 lên đường đẫn url

// 2.1. Lấy giá trị param "act" từ đường dẫn url
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}
// echo "Giá trị act là: $act <hr>";

// 2.2. Lấy giá trị "id" từ đường dẫn url
$ma_hh = "";
if (isset($_GET["id"])) {
    $ma_hh = $_GET["id"];
}
// echo "Giá trị id là: $id <hr>";


// 3. Kiểm tra giá trị act và gọi phương thức tương ứng
switch ($act) {
    case "":
        // Điều hướng sang trang mặc định (trang danh sách) nếu người dùng không truyền "act"
        header("Location: ?act=product-list");
        break;

    case "product-list":
        // Hiển thị trang danh sách và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showList();
        break;

    case "product-create":
        // Hiển thị trang tạo mới và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showCreate();
        break;
    case "product-update":
        // Hiển thị trang chỉnh sửa và xử lý logic
        $productCtrl = new ProductController();
        $productCtrl->showUpdate($ma_hh);
        break;
    case "product-delete":
        // goi controler de xu ly logic delete product
        $productCtrl= new ProductController();
        $productCtrl->deleteProduct($ma_hh);

    default:
        // Hiển thị "trang 404 fage not found" nếu giá trị "act" không nằm trong danh sách phía trên.
        include "view/404.php";
        break;
}
