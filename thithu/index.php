<?php
//nhúng file env và connect để kết nối CSDL
require './commons/env.php';
require './commons/connect.php';

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
        (new CarController())->getList();
        break;
    case 'detail':
        (new CarController())->getDetail();
        break;
    case 'create':
        (new CarController())->create();
        break;
    case 'edit':
        (new CarController())->edit();
        break;
    case 'delete':
        (new CarController())->delete();
        break;
    default: 
        echo "Router không hợp lệ";
        break;
};
?>
