<!DOCTYPE html>
<html>
<head>
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

    <h2>Thêm Sản Phẩm</h2>
    <form method="post" action="ds.php">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="name">Tên Sản Phẩm:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="price">Giá:</label><br>
        <input type="text" id="price" name="price"><br>

        <label for="amount">Số Lượng:</label><br>
        <input type="text" id="amount" name="amount"><br>

        <label for="company">Công Ty:</label><br>
        <input type="text" id="company" name="company"><br>

        <label for="year">Năm:</label><br>
        <input type="text" id="year" name="year"><br>

        <input type="submit" value="Thêm">
    </form>
</body>
</html>

