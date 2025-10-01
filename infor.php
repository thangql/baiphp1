<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mssv = isset($_POST["mssv"]) ? $_POST["mssv"] : "";
    $hoten = isset($_POST["hoten"]) ? $_POST["hoten"] : "";
    $gioitinh = isset($_POST["GioiTinh"]) ? $_POST["GioiTinh"] : "";
    $languages1 = isset($_POST["language1"]) ? (array) $_POST["language1"] : [];
    
    
    $thanhpho = isset($_POST["thanhpho"]) ? $_POST["thanhpho"] : "";
    $tinnhan = isset($_POST["tinnhan"]) ? $_POST["tinnhan"] : "";

    echo "<h3>Thông Tin Sinh Viên</h3>";
    echo "MSSV: " . ($mssv) . "<br>";
    echo "Họ và Tên: " .($hoten) . "<br>";
    echo "Giới Tính: " . ($gioitinh == "0" ? "Nam" : ($gioitinh == "1" ? "Nữ" : "Chưa chọn")) . "<br>";
    echo "Ngôn Ngữ Lập Trình: " . (empty($languages1) ? "Chưa chọn" : implode(", ",$languages1)) . "<br>";
    
    echo "Thành Phố: " .($thanhpho) . "<br>";
    echo "Tin Nhắn: " . ($tinnhan) . "<br>";
}
?>