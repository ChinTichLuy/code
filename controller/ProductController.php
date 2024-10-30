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
        $danhSachLoai = $this->productQuery->all2();
        // Hiển thị file view tương ứng. Hiển thị file list.php
        
        
        include "view/product/list.php";
        // include_once "./gioiThieu.php";
        
    }
    public function dangnhap(){
        $value = $this->productQuery->dangnhap();
        // var_dump($value);
        include "login.php";
    }

    // Khái báo phương thức showDetail($id) để xử lý trường hợp người dùng truy cập trang chi tiết
    // Lưu ý: Phải nhận vào param là $id muốn xem xem chi tiết
    public function showDetail($ma_hh)
    {
        // Log thử giá trị id nhận được
        // echo "ID muốn xem chi tiết là: $ma_hh <hr>";
        
        $product = $this->productQuery->chiTietSP($ma_hh);
        // var_dump($product);
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";

        
        // var_dump($value);


        // Kiểm tra giá trị id để xử lý logic
        if ($ma_hh !== "") {
            // Hiển thị file view
            include "view/product/detail.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }

   
}
