<?php
include('../../config/config.php');
$manv = $_POST['manhanvien'];
$tennv = $_POST['hotennhanvien'];
$ngaysinhnv = $_POST['ngaysinhnhanvien'];
$cccd = $_POST['cccd'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$luongnv = $_POST['luongnhanvien'];
$tendangnhap = $_POST['tendangnhapnhanvien'];
$matkhau = $_POST['matkhaunhanvien'];



if (isset($_POST['themnhanvien'])) {
    //thêm
    $sql_them = "INSERT INTO `nhanvien`(`NV_MA`, `NV_HOTEN`, `NV_NGAYSINH`, `NV_CCCD`, `NV_DIACHI`, `NV_SODIENTHOAI`, `NV_LUONG`, `NV_USER`, `NV_PASS`)
                    VALUES ('" . $manv . "',
                            '" . $tennv . "',
                            '" . $ngaysinhnv . "',
                            '" . $cccd . "',
                            '" . $diachi . "',
                            '" . $sdt . "',
                            '" . $luongnv . "',
                            '" . $tendangnhap . "',
                            '" . $matkhau . "')";
    mysqli_query($connect, $sql_them);
    // move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlynhanvien&query=them');
} elseif (isset($_POST['suanhanvien'])) {
    //sửa

    $sql_update = "UPDATE `nhanvien` SET `NV_MA`='" . $manv . "',
                                        `NV_HOTEN`='" . $tennv . "',
                                        `NV_NGAYSINH`='" . $ngaysinhnv . "',
                                        `NV_CCCD`='" . $cccd . "',
                                        `NV_DIACHI`='" . $diachi . "',
                                        `NV_SODIENTHOAI`='" . $sdt . "',
                                        `NV_LUONG`='" . $luongnv . "',
                                        `NV_USER`='" . $tendangnhap . "',
                                        `NV_PASS`='" . $matkhau . "' WHERE NV_MA='$_GET[idnhanvien]'";

    mysqli_query($connect, $sql_update);
    header('Location:../../index.php?action=quanlynhanvien&query=them');
} else {
    //xoa
    $id = $_GET['idnhanvien'];
    $slq_xoa = "DELETE FROM `nhanvien` WHERE `nhanvien`.`NV_MA` = '" . $id . "'";
    mysqli_query($connect, $slq_xoa);
    header('Location:../../index.php?action=quanlynhanvien&query=them');
}
