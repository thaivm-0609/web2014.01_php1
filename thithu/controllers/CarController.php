<?php
class CarController {
    public $carModel; //khai báo thuộc tính

    //khai báo phương thức __contruct()
    public function __construct()
    {
        $this->carModel = new Car(); //khởi tạo ra object từ class Car
    }

    public function getList() {
        //gọi sang hàm getAllProducts() trong model để lấy dữ liệu
        $cars = $this->carModel->getAllCars();
        
        require_once './views/list.php';
    }
}
?>
