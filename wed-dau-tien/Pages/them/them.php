<?php
    include "../giaodien/ketnoi.php"; // BƯỚC 1: KẾT NỐI, BƯỚC 2: CHỌN DATABASE, BƯỚC 3: SET UTF8 gộp vào 1 file ketnoi.php để tái sử dụng
    
        $sql = "insert into sinhvien(masv,hosv,tensv,phai) values('"
            . $_POST["txtMasv"] . "','"
            . $_POST["txtHo"]   . "','"
            . $_POST["txtTen"]  . "','"
            . $_POST["rdPhai"]  . "')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
?>