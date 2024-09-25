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

    public function getDetail() {
        //kiểm tra tham số id truyền trên url có tồn tại hay ko 
        $id = isset($_GET['id']) 
            ? $_GET['id'] 
            : null;
        
        if (isset($id) && $id > 0) { //nếu tồn tại $id và $id > 0
            $car = $this->carModel->getById($id);
            
            require_once './views/detail.php';
        }  
    }
}
?>
