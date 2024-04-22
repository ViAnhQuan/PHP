<<!doctype html>
<html lang="en">
    <head>
        <title>Thu nghiem</title>
    </head>
    <body>
    <?php
        //$hoTen = "Nguyễn Thi Mai";
       // $gioiTinh = "Nữ";
        //$tuoi = 45;
       // $hoTen = trim($hoTen);
        //echo "Chào ";
        //if ($tuoi < 18) {
          //  echo "em";
        //} elseif ($tuoi >= 18 && $tuoi < 40) {
          //  if ($gioiTinh == "Nam") {
            //    echo "anh";
            //} else {
          //      echo "chị";
            //}
        //} elseif ($tuoi >= 40 && $tuoi < 60) {
          //  if ($gioiTinh == "Nam") {
            //    echo "bác";
            //} else {
            //    echo "cô";
           // }
       // }
        //echo " '" . trim($hoTen) . "' !";

        
    // Tạo mảng chứa tên của 10 sinh viên
    $sinhVien = array(
    "Nguyen Van A",
    "Tran Thi B",
    "Le Van C",
    "Pham Thi D",
    "Hoang Van E",
    "Nguyen Thi F",
    "Tran Van G",
    "Le Thi H",
    "Pham Van I",
    "Hoang Thi K"
);
echo "Danh sách sinh viên:<br>";
foreach ($sinhVien as $ten) {
    echo $ten . "<br>";
}
?>
    </body>
</html>

