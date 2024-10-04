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

        return $stmt->fetchAll(); //fetchAll() để lấy danh sách
    }

    public function getById($id) {
        $sql = "SELECT * FROM cars WHERE id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetch(); //fetch() để lấy 1 bản ghi
    }

    public function save($name,$image,$brand,$seat,$color) 
    {
        $sql = "INSERT INTO cars (name,image,brand,seat,color)
            VALUE('$name','$image','$brand','$seat','$color')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function update($id,$name,$image,$brand,$seat,$color)
    {
        $sql = "UPDATE cars 
            SET name='$name',image='$image',brand='$brand',seat='$seat',color='$color'
            WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
?>
