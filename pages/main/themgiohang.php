
<?php
// echo $_GET['idsanpham'];

session_start();
include("../../admincp/config/config.php");

if (isset($_POST['themgiohang'])) {
    // session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = $_POST['them'];
    $sql = "SELECT * FROM `sanpham` WHERE `sanpham`.`SP_MASANPHAM`='" . $id . "' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(array(
            'masp' => $id,
            'maloaisp' => $row['LSP_MA'],
            'tensp' => $row['SP_MASANPHAM'],
            'giasp' => $row['SP_GIA'],
            'soluong' => $soluong,
            'hinhanh' => $row['SP_HINHANH']
        ));
        //kiểm tra session gio hang ton tai
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //nếu dữ liệu trung, thì tăng số lượng lên 1 lần
                if ($cart_item['masp'] == $id) {
                    $product[] = array(
                        'masp' => $cart_item['masp'],
                        'maloaisp' => $cart_item['maloaisp'],
                        'tensp' => $cart_item['tensp'],
                        'giasp' => $cart_item['giasp'],
                        'soluong' => $soluong += 1,
                        'hinhanh' => $cart_item['hinhanh']
                    );
                    $found = true;
                } else {
                    //nếu không trùng
                    $product[] = array(
                        'masp' => $cart_item['masp'],
                        'maloaisp' => $cart_item['maloaisp'],
                        'tensp' => $cart_item['tensp'],
                        'giasp' => $cart_item['giasp'],
                        'soluong' => $soluong,
                        'hinhanh' => $cart_item['hinhanh']
                    );
                }
            }
            if ($found == false) {
                //liên kết dữ liệu new_product với product
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
}

?>
<?php
header('Location:../index.php?quanly=giohang');
?>


<?php
// if (isset($_SESSION['cart'])) {
//     echo '<pre>';
//     print_r($_SESSION['cart']);

//     echo '</pre>';
// }
?>
