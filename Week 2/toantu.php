<!doctype html>
<html lang="en">
    <body>
    <?php
    function summynumbers(...$x){
        $n=0;
        $len = count($x);
        for($i=0; $i<$len; $i++){
            $n += $x[$i];
        }
        return $n;
    }
    $a = summynumbers(5,2,6,2,7,7);
    echo $a;
        ?>
    </body>
</html>
