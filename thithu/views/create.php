<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới</h1>
    <form action="index.php?act=create" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Image</label>
            <input type="text" name="image">
        </div>
        <div>
            <label for="">Brand</label>
            <input type="text" name="brand">
        </div>
        <div>
            <label for="">Color</label>
            <input type="text" name="color">
        </div>
        <div>
            <label for="">Seat</label>
            <input type="number" name="seat">
        </div>
        <input type="submit" name="them" value="Thêm mới">
    </form>
</body>
</html>