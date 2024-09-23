<?php
class Car {
    public $conn;

    public function __construct()
    {
        //gán lại giá trị cho biến $conn = connectDB();
        $this->conn = connectDB();
    }

    public function getAllCars() {
        $sql = "SELECT * FROM cars"; //khao báo câu truy vấn
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(); //thực thi câu truy vấn

        return $stmt->fetchAll();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
?>
