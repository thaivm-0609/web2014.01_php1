<?php 
//khai báo/khởi tạo 1 lớp/class
class sinhVien {
    //thuộc tính
    public $name;
    public $code;
    public $email;

    //phương thức
    //hàm construct được thực thi ngay khi khởi tạo class;
    public function __construct($ten, $maSV, $thuDienTu)
    {
        //gán lại giá trị $name->$ten, $code->$maSV, $email->$thuDienTu
        $this->name = $ten;
        $this->code = $maSV;
        $this->email = $thuDienTu;
    }


    public function hienThiThongTin() {
        //sử dụng $this-> để truy cập đến các thuộc tính của class
        echo "ten: $this->name <br>";
        echo "code: $this->code <br>";
        echo "email: $this->email";
    }
}

//khởi tạo object từ class sinhVien: $tenObject = new tenClass();
$hung = new sinhVien('hung', 'ph12345', 'hung@fpt.edu.vn');
//truy cập thuộc tính của object
echo $hung->name;
//thực thi hàm
$hung->hienThiThongTin();
?>
