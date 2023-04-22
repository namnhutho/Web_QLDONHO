<p>Thanh toán đơn hàng</p>

<?php
session_start();
include("../../admincp/config/config.php");

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('y-m-d h:i:s');
//lấy thời gian hiện tại

$id_nhanvien = $_SESSION['NV_MA'];
$id_khachhang = $_SESSION['KH_MA'];
$ma_hoadon = rand(1, 1000);
$code_order = rand(0, 9999);

$insert_cart = "INSERT INTO `hoadon` (`HD_MA`, `NV_MA`, `KH_MA`, `HD_NGAYDAT`, `code_cart`, `HD_TRANGTHAI`)
        VALUES ('" . $ma_hoadon . "', '" . $id_nhanvien . "', '" . $id_khachhang . "', '" . $date . "', '" . $code_order . "', '1')";

$cart_query = mysqli_query($connect, $insert_cart);

if ($cart_query) {
        //them gio hang chi tiet
        foreach ($_SESSION['cart'] as $key => $value) {
                $id_sanpham = $value['masp'];
                $soluong = $value['soluong'];
                $giasanpham = $value['giasp'];
                $insert_order_details = "INSERT INTO `chitiethoadon`(`HD_MA`, `SP_MASANPHAM`, `SOLUONG`, `TONGTIEN`, `code_cart`)
                        VALUES ('" . $ma_hoadon . "','" . $id_sanpham . "','" . $soluong . "','" . $giasanpham . "','" . $code_order . "')";
                mysqli_query($connect, $insert_order_details);
        }
}
unset($_SESSION['cart']);
header('Location:../index.php?quanly=camon');

?>