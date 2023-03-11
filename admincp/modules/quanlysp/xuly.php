<?php
include('../../config/config.php');
$masanpham = $_POST['masp'];
$maloaisp = $_POST['maloaisp'];
$tensanpham = $_POST['tensp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];

//xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '' . $hinhanh;


if (isset($_POST['themsanpham'])) {
    //thêm
    $sql_them = "INSERT INTO `sanpham`(`SP_MASANPHAM`, `LSP_MA`, `SP_TENSANPHAM`, `SP_GIABAN`, `SP_SOLUONG`, `SP_HINHANH`)
                        VALUES ('" . $masanpham . "','" . $maloaisp . "','" . $tensanpham . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "')";
    mysqli_query($connect, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
} elseif (isset($_POST['suasanpham'])) {
    //sửa
    // if ($hinhanh != '') {

    //     move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

    //     $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` = '$_GET[idsanpham]' LIMIT 1";
    //     $query = mysqli_query($connect, $sql);
    //     while ($row = mysqli_fetch_array($query)) {
    //         unlink('uploads/' . $row['SP_HINHANH']);
    //     }
    //     $sql_update = "UPDATE `sanpham` SET `SP_MASANPHAM`='" . $masanpham . "',`LSP_MA`='" . $maloaisp . "',`SP_TENSANPHAM`='" . $tensanpham . ",
    //                         `SP_GIABAN`='" . $giasp . "',`SP_SOLUONG`='" . $soluong . "',`SP_HINHANH`='" . $hinhanh . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    // } else {
    //     $sql_update = "UPDATE `sanpham` SET `SP_MASANPHAM`='" . $masanpham . "',`LSP_MA`='" . $maloaisp . "',`SP_TENSANPHAM`='" . $tensanpham . ",
    //                         `SP_GIABAN`='" . $giasp . "',`SP_SOLUONG`='" . $soluong . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    // }

    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` = '$_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['SP_HINHANH']);
    }
    $sql_update = "UPDATE `sanpham` SET `SP_MASANPHAM`='" . $masanpham . "',
                                        `LSP_MA`='" . $maloaisp . "',
                                        `SP_TENSANPHAM`='" . $tensanpham . "',
                                        `SP_GIABAN`='" . $giasp . "',
                                        `SP_SOLUONG`='" . $soluong . "',
                                        `SP_HINHANH`='" . $hinhanh . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    mysqli_query($connect, $sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
} else {
    //xoa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` = '$id' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['SP_HINHANH']);
    }

    $slq_xoa = "DELETE FROM sanpham WHERE `sanpham`.`SP_MASANPHAM` = '" . $id . "'";
    mysqli_query($connect, $slq_xoa);
    header('Location:../../index.php?action=quanlysp&query=them');
}
