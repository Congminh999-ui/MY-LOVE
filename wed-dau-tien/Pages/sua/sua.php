<?php
    include"../giaodien/ketnoi.php"; // BƯỚC 1: KẾT NỐI, BƯỚC 2: CHỌN DATABASE, BƯỚC 3: SET UTF8 gộp vào 1 file ketnoi.php để tái sử dụng

    $conn = mysqli_connect("127.0.0.1:3367", "root", "", "qlsv-ltm2");

    $sql = "update sinhvien set hosv='"
        . $_POST["txtHo"]   . "', tensv='"
        . $_POST["txtTen"]  . "', phai='"
        . $_POST["rdPhai"]  . "' where masv='"
        . $_POST["txtMasv"] . "';";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>