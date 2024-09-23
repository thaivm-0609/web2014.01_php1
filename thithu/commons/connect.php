<?php
//khởi tạo kết nối CSDL
function connectDB() {
    $host = DB_HOST;
    $port = DB_PORT;
    $dbName = DB_NAME;

    try {
        //khởi tạo kết nối CSDL thông qua PDO
        $conn = new PDO(
            "mysql:host=$host;port=$port;dbname=$dbName",
            DB_USERNAME,
            DB_PASSWORD);

        //xử lý lỗi, ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //định dạng dữ liệu trả về
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (\Exception $e) {
        echo ("Something went wrong");
    }
}
?>
