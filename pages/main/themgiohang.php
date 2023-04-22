
<?php
session_start();
include("../../admincp/config/config.php");
//cong so luong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['masp'] != $id) {
            $product[] = array(
                'masp' => $cart_item['masp'],
                'maloaisp' => $cart_item['maloaisp'],
                'tensp' => $cart_item['tensp'],
                'giasp' => $cart_item['giasp'],
                'soluong' => $cart_item['soluong'],
                'hinhanh' => $cart_item['hinhanh']
            );
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] <= 9) {

                $product[] = array(
                    'masp' => $cart_item['masp'],
                    'maloaisp' => $cart_item['maloaisp'],
                    'tensp' => $cart_item['tensp'],
                    'giasp' => $cart_item['giasp'],
                    'soluong' => $tangsoluong,
                    'hinhanh' => $cart_item['hinhanh']
                );
            } else {
                $product[] = array(
                    'masp' => $cart_item['masp'],
                    'maloaisp' => $cart_item['maloaisp'],
                    'tensp' => $cart_item['tensp'],
                    'giasp' => $cart_item['giasp'],
                    'soluong' => $cart_item['soluong'],
                    'hinhanh' => $cart_item['hinhanh']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../index.php?quanly=giohang');
}

//tru so luong
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['masp'] != $id) {
            $product[] = array(
                'masp' => $cart_item['masp'],
                'maloaisp' => $cart_item['maloaisp'],
                'tensp' => $cart_item['tensp'],
                'giasp' => $cart_item['giasp'],
                'soluong' => $cart_item['soluong'],
                'hinhanh' => $cart_item['hinhanh']
            );
            $_SESSION['cart'] = $product;
        } else {
            $giamsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {

                $product[] = array(
                    'masp' => $cart_item['masp'],
                    'maloaisp' => $cart_item['maloaisp'],
                    'tensp' => $cart_item['tensp'],
                    'giasp' => $cart_item['giasp'],
                    'soluong' => $giamsoluong,
                    'hinhanh' => $cart_item['hinhanh']
                );
            } else {
                $product[] = array(
                    'masp' => $cart_item['masp'],
                    'maloaisp' => $cart_item['maloaisp'],
                    'tensp' => $cart_item['tensp'],
                    'giasp' => $cart_item['giasp'],
                    'soluong' => $cart_item['soluong'],
                    'hinhanh' => $cart_item['hinhanh']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../index.php?quanly=giohang');
}
//xoa san pham
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['masp'] != $id) {
            $product[] = array(
                'masp' => $cart_item['masp'],
                'maloaisp' => $cart_item['maloaisp'],
                'tensp' => $cart_item['tensp'],
                'giasp' => $cart_item['giasp'],
                'soluong' => $soluong + 1,
                'hinhanh' => $cart_item['hinhanh']
            );
        }
        $_SESSION['cart'] = $product;
        header('Location:../index.php?quanly=giohang');
    }
}

//xoa tat ca
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location:../index.php?quanly=giohang');
}

if (isset($_POST['themgiohang'])) {
    // session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM `sanpham` WHERE `sanpham`.`SP_MASANPHAM`='" . $id . "' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(array(
            'masp' => $id,
            'maloaisp' => $row['LSP_MA'],
            'tensp' => $row['SP_TENSANPHAM'],
            'giasp' => $row['SP_GIABAN'],
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
                        'soluong' => $soluong + 1,
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
    header('Location:../index.php?quanly=giohang');
}

?>

