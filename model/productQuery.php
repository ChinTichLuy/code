<?php
include_once "product.php";

class ProdutcQuery
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=dbmypham", "root", "");
            // echo "ket noi co so du lieu thanh cong!!";
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function all()
    {
        try {
            $sql = " SELECT * FROM hang_hoa";
            $data  = $this->pdo->query($sql)->fetchAll();

            $danhSachSP = [];

            foreach ($data as $value) {
                $product = new Product();
                $product->ma_hh = $value['ma_hh'];
                $product->ten_hh = $value['ten_hh'];
                $product->don_gia = $value['don_gia'];
                $product->anh_sp = $value['anh_sp'];
                $product->so_luot_xem = $value['so_luot_xem'];

                $danhSachSP[] = $product;
            }

            // tra ve mang chinh
            return $danhSachSP;
        } catch (Exception $error) {
            echo $error->getMessage();
        }
       
    }
    public function all2(){
        try {
            $sql = " SELECT * FROM loai_hang";
            $data  = $this->pdo->query($sql)->fetchAll();

            $danhSachLoai = [];

            foreach ($data as $value) {
                $product = new Product();               
                $product->ten_loai = $value['ten_loai'];
                $danhSachLoai[] = $product;
            }

            // tra ve mang chinh
            return $danhSachLoai;
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
    
    // lay thong tin chi tiet
    public function find($ma_hh)
    {
        try {
            $sql = "SELECT * FROM `hang_hoa` WHERE `ma_hh` = $ma_hh";
            $data = $this->pdo->query($sql)->fetch();
            // Chyen doi du lieu dang object
            if ($data != false) {
                $product = new Product();
                $product->ma_hh = $data['ma_hh'];
                $product->ten_hh = $data['ten_hh'];
                $product->don_gia = $data['don_gia'];
                $product->anh_sp = $data['anh_sp'];
                $product->mo_ta = $data['mo_ta'];

                return $product;
            } else {
                echo "ban ghi khong ton tai";
            }
        } catch (Exception $e) {
            echo "Loi: " . $e->getMessage();
            echo "<hr>";
        }
    }

    public function dangnhap(){
        try{
            $sql = "SELECT name, password FROM actor;";
            $data = $this->pdo->query($sql)->fetchAll();        
            return $data;

        } catch (Exception $e) {
            echo "Loi: " . $e->getMessage();
            echo "<hr>";
        }
    }
    
    public function chiTietSP($ma_hh){
        try{
            $sql = "SELECT * FROM `hang_hoa` WHERE `ma_hh` = $ma_hh;";
            $data = $this->pdo->query($sql)->fetchAll();        
            return $data;

        } catch (Exception $e) {
            echo "Loi: " . $e->getMessage();
            echo "<hr>";
        }
    }
}
