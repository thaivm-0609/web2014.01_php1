<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sửa</h1>
    <form action="index.php?act=edit&id=<?=$car['id']?>" method="POST">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?=$car['name']?>">
        </div>
        <div>
            <label for="">Image</label>
            <input type="text" name="image" value="<?=$car['image']?>">
        </div>
        <div>
            <label for="">Brand</label>
            <input type="text" name="brand" value="<?=$car['brand']?>">
        </div>
        <div>
            <label for="">Color</label>
            <input type="text" name="color" value="<?=$car['color']?>">
        </div>
        <div>
            <label for="">Seat</label>
            <input type="number" name="seat" value="<?=$car['seat']?>">
        </div>
        <input type="submit" name="sua" value="Sửa">
    </form>
</body>
</html>