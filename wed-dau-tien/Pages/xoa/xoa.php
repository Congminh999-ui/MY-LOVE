<?php
    include "../giaodien/ketnoi.php"; // BƯỚC 1: KẾT NỐI, BƯỚC 2: CHỌN DATABASE, BƯỚC 3: SET UTF8 gộp vào 1 file ketnoi.php để tái sử dụng

        $sql = "delete from sinhvien where masv='"
            . $_POST["cbMa"] . "';";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
?>