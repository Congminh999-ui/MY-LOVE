<?php
// BƯỚC 1: KẾT NỐI
$conn = mysqli_connect("127.0.0.1:3367", "root", "", "qlsv-ltm2");

// BƯỚC 2: CHỌN DATABASE
if (!mysqli_select_db($conn, "qlsv-ltm2")) {
    die('Không thể kết nối với csdl: ' . mysqli_error($conn));
    exit();
}

// BƯỚC 3: SET UTF8
mysqli_query($conn, "SET NAMES 'utf8'");