<?php

// 1. Khai báo class ProductController
class ProductController
{
    // Khai báo thuộc tính
    // Code...
    public $productQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
        $this->productQuery = new ProdutcQuery();
    }

    public function __destruct()
    {
        // Code...
    }

    // Khái báo phương thức showList() để xử lý trường hợp người dùng truy cập trang danh sách
    public function showList()
    {
        //Goi lop model de lay danh sach
        $danhSachSP = $this->productQuery->all();
        // Hiển thị file view tương ứng. Hiển thị file list.php
        include "view/product/list.php";
        // include "view/product/create.php";

    }

    // Khái báo phương thức showCreate() để xử lý trường hợp người dùng truy cập trang tạo mới
    public function showCreate()
    {
        // khai bao bien dung trong view 
        $product = new Product();
        $thongBaoLoi = "";
        $thongBaoThanhCong = "";
        $danhSachLoai = $this->productQuery->all2();

        // kiem tra nguoi dung
        if (isset($_POST["submitForm"])) {
            // var_dump($_POST);

            // Gan gia tri cac o nhap cho object $product
            $product->ten_hh = trim($_POST["ten_hh"]);
            $product->don_gia = trim($_POST["don_gia"]);
          
            $product->mo_ta = trim($_POST["mo_ta"]);
            $product->ma_loai = trim($_POST["ma_loai"]);


            // validate bat buoc nhap
            if ($product->ten_hh == "" || $product->don_gia == "" || $product->mo_ta == "" || $product->ma_loai == "") {
                $thongBaoLoi = " moi ban nhap day du";
            }

            // Xu ly anh TODO
            // var_dump($_FILES);
            // echo "<hr>";
            // luu y 2 thong tin
            // tmp_name: bo nho tam dang luu tru file anh
            // name: ten file anh

            if (isset($_FILES["file_upload"]) && $_FILES["file_upload"]["tmp_name"]) {
                // tham so 1: bo nho tam dang luu file
                // tham so 2: noi luu file sau khi upload xong
                $hinh_anh = $_FILES["file_upload"]["tmp_name"];
                $vi_tri_luu_tru = "../img/" . $_FILES["file_upload"]["name"];
                if (move_uploaded_file($hinh_anh, $vi_tri_luu_tru)) {
                    $thongBaoThanhCong ="file upload thanh cong";
                    // luu gia tri duong dan vao object
                    $product->anh_sp = "./img/" . $_FILES["file_upload"]["name"];
                } else {
                    $thongBaoLoi ="co loi trong qua trinh xu ly file";
                }
            }

            // goi model de insert gia tri nhap vao csdl
            if ($thongBaoLoi === "") {
                $data = $this->productQuery->insert($product);
                if ($data === "success") {
                    // resert gia tri bien $product
                    $product = new Product();

                    // Thong bao
                    $thongBaoThanhCong = "tao moi thanh cong. moi tiep tuc tao";
                } else {
                    $thongBaoLoi = "Tao Moi that bai. moi kiem tra loi va thuc hien lai";
                }
            }
        }
        // Hiển thị file view
        include "view/product/create.php";
    }

    // Khái báo phương thức showUpdate($id) để xử lý trường hợp người dùng truy cập trang chỉnh sửa
    // Lưu ý: Phải nhận vào param là $id muốn xem chỉnh sửa
    public function showUpdate($ma_hh)
    {
        // Log thử giá trị id nhận được
        // echo "ID muốn xem chỉnh sửa là: $id <hr>";
        $thongBaoLoi = "";
        $danhSachLoai = $this->productQuery->all2();
        $product = $this->productQuery->find($ma_hh);

        // kiem tra nguoi dung
        if (isset($_POST["submitForm"])) {
            // var_dump($_POST);

            // Gan gia tri cac o nhap cho object $product
            $product->ten_hh = trim($_POST["ten_hh"]);
            $product->don_gia = trim($_POST["don_gia"]);
            $product->mo_ta = trim($_POST["mo_ta"]);
            $product->ma_loai = trim($_POST["ma_loai"]);


            if ($product->ten_hh == "" || $product->don_gia == "" || $product->mo_ta == "" || $product->ma_loai == "") {
                $thongBaoLoi = " moi ban nhap day du";
            }
    
            // Xu ly anh TODO
            // var_dump($_FILES);
            // echo "<hr>";
            // luu y 2 thong tin
            // tmp_name: bo nho tam dang luu tru file anh
            // name: ten file anh
            if ($_FILES["file_upload"]["tmp_name"] !== "") {
                // tham so 1: bo nho tam dang luu file
                // tham so 2: noi luu file sau khi upload xong
                $hinh_anh = $_FILES["file_upload"]["tmp_name"];
                $vi_tri_luu_tru = "../img/" . $_FILES["file_upload"]["name"];
                if (move_uploaded_file($hinh_anh, $vi_tri_luu_tru)) {
                    echo "file upload thanh cong";
                    // luu gia tri duong dan vao object
                    $product->anh_sp = "img/" . $_FILES["file_upload"]["name"];
                } else {
                    echo "co loi trong qua trinh xu ly file";
                }
            }
    
            // goi model de insert gia tri nhap vao csdl
            if ($thongBaoLoi === "") {
                $data = $this->productQuery->update($product);
                if ($data === "success") { 
                    header("Location: ?act=product-list");
                    // $thongBaoLoi = "check";
                  
                }
            }
        }

        // validate bat buoc nhap
        

        // Kiểm tra giá trị ma_hh để xử lý logic
        if ($ma_hh !== "") {
            // Hiển thị file view
            include "view/product/update.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }

    // xoa product
    public function deleteProduct($ma_hh)
    {
        // log gia tri id nhand duoc
        // echo "ID muon xoa $ma_hh <hr>";

        // kiem tra gia tri id de goi model tuong ung
        if ($ma_hh !== "") {
            // goi ham xoa trong model
            $data = $this->productQuery->delete($ma_hh);
            if ($data == "ok") {
                header("Location: ?act=product-list");
            } else {
                echo "Loi: Xoa khong thanh cong. Moi kiem tra lai<hr>";
            }
        }
    }
}
