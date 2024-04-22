<!doctype html>
<html lang="en">
    <body>
    <?php
    $cars = array("volvo", "bmw", "toyota");
    unset($cars[1]);
    echo $cars[0], ",", $cars[2],"\n";
    echo $cars[0], ",", $cars[1];
        ?>
    </body>
</html>
