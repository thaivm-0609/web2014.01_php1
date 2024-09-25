<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang chi tiết</h1>
    <p>Tên: <?= $car['name'] ?></p>
    <p>Màu: <?= $car['color'] ?></p>
    <p>Hãng: <?= $car['brand'] ?></p>
    <p>Số ghế: <?= $car['seat'] ?></p>
    <img src="<?= $car['image'] ?>" alt="">
</body>
</html>