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

        // Phương thức
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        } 

        function set_color($color) {
            $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }
    }

    // Tạo một đối tượng lemon từ lớp Fruit
    $lemon = new Fruit();
    $lemon->set_name("Lemon");
    $lemon->set_color("Yellow");
    echo "Name: " . $lemon->get_name() . ", Color: " . $lemon->get_color();

    // Tạo đối tượng apple từ lớp Fruit 
    $apple = new Fruit();
    $apple->set_name("Apple");
    $apple->set_color("Red");
    echo "Apple - Name: " . $apple->get_name() . ", Color: " . $apple->get_color();
    ?>
</body>
</html>
