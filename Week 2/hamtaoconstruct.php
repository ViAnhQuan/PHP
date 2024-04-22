<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <?php
    class Fruit {
        // Thuộc tính
        public $name;
        public $color;

        // Phương thức khởi tạo
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        // Phương thức
        function get_name() {
            return $this->name;
        } 

        function get_color() {
            return $this->color;
        }
    }

    // Tạo đối tượng lemon từ lớp Fruit 
    $lemon = new Fruit("Lemon", "Yellow");

    // Tạo đối tượng apple từ lớp Fruit 
    $apple = new Fruit("Apple", "Red");

    // Xuất thông tin của lemon ra màn hình
    echo "Lemon - Name: " . $lemon->get_name() . ", Color: " . $lemon->get_color();

    // Xuất thông tin của apple ra màn hình
    echo "Apple - Name: " . $apple->get_name() . ", Color: " . $apple->get_color();
    ?>
</body>
</html>
