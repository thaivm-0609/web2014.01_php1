<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang danh sách</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Seat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $c) { ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['name'] ?></td>
                    <td>
                        <img src="<?= $c['image'] ?>" alt="">
                    </td>
                    <td><?= $c['brand'] ?></td>
                    <td><?= $c['color'] ?></td>
                    <td><?= $c['seat'] ?></td>
                    <td>
                        <a href="?act=detail&id=<?=$c['id']?>">Chi tiết</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>