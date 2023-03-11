<?php
include('../../config/config.php');
$maloaisp = $_POST['maloaisp'];

$tenloaisp = $_POST['tenloaisp'];

if (isset($_POST['themdanhmuc'])) {
    //thêm
    $sql_them = "INSERT INTO `loai_sp`(`LSP_MA`, `LSP_TEN`) VALUES ('$maloaisp','$tenloaisp')";
    mysqli_query($connect, $sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    //sửa
    $sql_update = "UPDATE `loai_sp` SET `LSP_MA`='" . $maloaisp . "',`LSP_TEN`='" . $tenloaisp . "' WHERE LSP_MA='$_GET[iddanhmuc]'";
    mysqli_query($connect, $sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
} else {
    $id = $_GET['iddanhmuc'];
    $slq_xoa = "DELETE FROM loai_sp WHERE `loai_sp`.`LSP_MA`='" . $id . "'";
    mysqli_query($connect, $slq_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
