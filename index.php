<?php 
//khai báo/khởi tạo 1 lớp/class
class SinhVien {
    /** 4 tính chất của Lập trình hướng đối tượng OOP:
     *  - Tính đóng gói:
     *  - Tính trừu tượng:
     *  - Tính kế thừa: class con kế thừa class cha sẽ có thể sử dụng những thuộc tính/phương thức (public/protected) mà class cha đã định nghĩa 
     *  - Tính đa hình: 
     */

    /** Access level: phạm vi truy cập, thể hiện tính đóng gói
     * - public: có thể truy cập từ bất cứ đâu
     * - protected: chỉ bản thân class + class con có thể truy cập
     * - private: chỉ bản thân class được truy cập
     */

    //thuộc tính: $bien
    public $name;
    public $code;
    public $email;

    //phương thức: function
    /** hàm __construct được thực thi ngay khi khởi tạo class (constructor)
     * - Không định nghĩa __construct: PHP sẽ tự động tạo 1 hàm __construct ko có tham số truyền vào
     * - Có thể truyền tham số
     *  */ 

    public function __construct($ten, $maSV, $thuDienTu)
    {
        //gán lại giá trị $name->$ten, $code->$maSV, $email->$thuDienTu
        $this->name = $ten;
        $this->code = $maSV;
        $this->email = $thuDienTu;
    }

    public function hienThiThongTin() {
        //sử dụng $this->tenThuocTinh để truy cập đến các thuộc tính của class
        echo "ten: $this->name <br>";
        echo "code: $this->code <br>";
        echo "email: $this->email";
    }

    //hàm __destruct (destructor)
    public function __destruct()
    {
        
    }
}

//khởi tạo object từ class sinhVien: $tenObject = new TenClass(tham-số);
$thaivm2 = new SinhVien('thaivm2', 'PH12345', 'thaivm2@fe.edu.vn');
//truy cập thuộc tính của object: $tenObject->tenThuocTinh
echo "$thaivm2->name <br>";
//thực thi hàm: $tenObject->tenHam()
$thaivm2->hienThiThongTin();
?>
