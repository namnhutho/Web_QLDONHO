<!-- <p>giỏ hàng</p> -->

<!-- <?php
        if (isset($_SESSION['dangky'])) {
            echo $_SESSION['KH_MA'];
        }
        ?> -->
<!-- 
<?php
if (isset($_SESSION['dangky'])) {
    echo  '<span style="color:red;">' . 'Xin Chào: ' .  $_SESSION['dangky'] . '</span>';
    echo $_SESSION['KH_MA'];
}
?> -->

<div class="table-responsive-md p-3 mb-2 bg-white text-dark" style=" margin: inherit;text-align:center; box-shadow: 8px 8px 10px 10px gray;">
    <table class="table table-hover table-bordered tb_td">
        <tr>
            <th>Thứ tự</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá bán</th>
            <th>thành tiền</th>
            <th>Quản lý</th>
        </tr>

        <?php
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                $tongtien += $thanhtien;
                $i++
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $cart_item['masp']; ?></td>
                    <td><?php echo $cart_item['tensp']; ?></td>
                    <td> <img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" alt="hinh anh sp" style="width: 100px;"> </td>
                    <td>
                        <a href="../pages/main/themgiohang.php?tru=<?php echo $cart_item['masp'] ?>"><i class='fas fa-angle-left' style='font-size:24px'></i></a>
                        <?php echo $cart_item['soluong']; ?>
                        <a href="../pages/main/themgiohang.php?cong=<?php echo $cart_item['masp'] ?>"><i class='fas fa-angle-right' style='font-size:24px'></i></a>
                    </td>
                    <td><?php echo number_format($cart_item['giasp']) . 'vnđ'; ?></td>
                    <td><?php echo number_format($thanhtien) . 'vnđ'; ?></td>
                    <td>
                        <p> <a href="../pages/main/themgiohang.php?xoa=<?php echo $cart_item['masp'] ?>">Xóa</a></p>
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="8">
                    <p>Tổng tiền: <?php echo number_format($tongtien) . 'vnđ'; ?> </p>
                    <p> <a href="../pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>

                    <div style="clear:both;"></div>
                    <?php
                    if (isset($_SESSION['dangky'])) {
                    ?>
                        <!-- <p><a href="index.php?quanly=thanhtoan">Đặt Hàng</a></p> -->
                        <p><a href="../pages/main/thanhtoan.php">Đặt Hàng</a></p>
                    <?php
                    } else {
                    ?>
                        <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        } else {
        ?>
            <tr>
                <td>
                    <p>Giỏ hàng hiện tại còn trống</p>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>