<!DOCTYPE html>
<html>
<head>
    <title>Thông tin đã gửi</title>
</head>
<body>

<h2>Thông tin đã gửi</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    echo "<p><strong>Tên:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Website:</strong> $website</p>";
    echo "<p><strong>Bình luận:</strong> $comment</p>";
    echo "<p><strong>Giới tính:</strong> $gender</p>";
} else {
    echo "Không có dữ liệu được gửi.";
}
?>

</body>
</html>
