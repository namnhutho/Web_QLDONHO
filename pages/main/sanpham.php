<!-- <p>Chi tiết sản phẩm</p> -->
<?php
$sql_chitiet = "SELECT * FROM `loai_sp`,`sanpham` WHERE `sanpham`.`LSP_MA`=loai_sp.`LSP_MA`
AND `sanpham`.`SP_MASANPHAM`='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($connect, $sql_chitiet);
// print_r($query_chitiet);

while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

    <div class="wrapper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="100%" src="../../../webQL_dongho/admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['SP_HINHANH'] ?>">
        </div>
        <form method="POST" action="main/themgiohang.php?idsanpham=<?php echo $row_chitiet['SP_MASANPHAM'] ?>">
            <div class=" chitiet_sanpham">
                <h3 style="margin:0;"><?php echo $row_chitiet['SP_TENSANPHAM'] ?></h3>
                <p>DANH MỤC SP: <?php echo $row_chitiet['LSP_TEN'] ?></p>
                <p>MÃ SP: <?php echo $row_chitiet['SP_MASANPHAM'] ?></p>
                <p>SỐ LƯỢNG SP: <?php echo $row_chitiet['SP_SOLUONG'] ?></p>
                <p><input class=" btn btn-primary" id="them" type="submit" name="themgiohang" value="Thêm giỏ hàng"></p>
            </div>
        </form>
    </div>

<?php } ?>