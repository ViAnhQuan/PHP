<?php
    class Product {
    public $id;
    public $name;
    public $price;
    public $amount;
    public $company;
    public $year;

    function __construct($id, $name, $price, $amount, $company, $year) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->company = $company;
        $this->year = $year;
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $company = $_POST["company"];
    $year = $_POST["year"];

    // Tạo một đối tượng sản phẩm mới từ dữ liệu nhận được
    $product = new Product($id, $name, $price, $amount, $company, $year);

    // Lưu đối tượng sản phẩm vào cơ sở dữ liệu hoặc thực hiện các thao tác khác ở đây

    // Ví dụ: hiển thị thông tin sản phẩm đã thêm vào
    echo "Sản phẩm đã được thêm vào:<br>";
    echo "ID: " . $product->id . "<br>";
    echo "Tên: " . $product->name . "<br>";
    echo "Giá: " . $product->price . "<br>";
    echo "Số lượng: " . $product->amount . "<br>";
    echo "Công ty: " . $product->company . "<br>";
    echo "Năm: " . $product->year . "<br>";
    }
?>