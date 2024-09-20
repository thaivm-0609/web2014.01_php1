<?php
class CarController {
    public $car; //khai báo thuộc tính

    //khai báo phương thức __contruct()
    public function __construct()
    {
        $this->car = new Car(); //khởi tạo ra object từ class Car
    }
}
?>
