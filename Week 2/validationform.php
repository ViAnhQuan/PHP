<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
</head>
<body>

<h2>Điền thông tin cá nhân</h2>

<form action="user.php" method="post">
    <label for="name">Tên:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="website">Website:</label><br>
    <input type=" " id="website" name="website"><br>
    <label for="comment">Bình luận:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
    <label for="gender">Giới tính:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Nam</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Nữ</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Khác</label><br>
    <br>
    <input type="submit" value="Gửi">
</form>

</body>
</html>
