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

    public function create() {
        //kiểm tra ng dùng đã bấm submit hay chưa?
        if (isset($_POST['them'])) {
            //lấy dữ liệu
            $name = $_POST['name'];
            $image = $_POST['image'];
            $brand = $_POST['brand'];
            $seat = $_POST['seat'];
            $color = $_POST['color'];
        
            //gọi sang model, lưu vào database
            $this->carModel->save($name,$image,$brand,$seat,$color);
            
            //đưa về trang danh sách
            header('location: index.php?act=list');
        }
        
        require_once './views/create.php'; //form nhập liệu
    }

    public function edit() {
        //hiển thị dữ liệu cũ ra form sửa
        $id = isset($_GET['id']) 
            ? $_GET['id'] 
            : null;
        $car = $this->carModel->getById($id);
        
        if (isset($_POST['sua'])) { //kiểm tra ng dùng đã bấm vào nút sửa
            //lấy dữ liệu ng dùng nhập vào form
            $name = $_POST['name'];
            $image = $_POST['image'];
            $brand = $_POST['brand'];
            $seat = $_POST['seat'];
            $color = $_POST['color'];

            //thực hiện truy vấn
            $this->carModel->update($id,$name,$image,$brand,$seat,$color);
            header('location: index.php?act=list');
        }
        require_once './views/edit.php';
    }

    public function delete()
    {
        //lấy id bản ghi cần xóa
        $id = isset($_GET['id']) 
            ? $_GET['id'] 
            : null;
        if (isset($id) && $id > 0) { //nếu id hợp lệ 
            $this->carModel->delete($id);
            header('location: index.php?act=list');
        }
    }
}
?>
