<?php
//import/nhúng file controller/models;
require './controllers/CarController.php';
require './models/Car.php';

/**
 * lấy dữ liệu từ url để điều hướng
 * sử dụng toán tử ba ngôi: 
 *     - nếu có ?act= trong url thì lấy giá trị
 *     - nếu không có thì gán giá trị là '/'
 */
$act = isset($_GET['act']) ? $_GET['act'] : '/'; 

//router để điều hướng người dùng:
switch ($act) {
    case '/': 
        echo "Home";
        break;
    case 'list':
        echo "Đây là trang danh sách";
        break;
    default: 
        echo "Router không hợp lệ";
        break;
};
?>
