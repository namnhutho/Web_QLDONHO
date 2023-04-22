<?php
$sql_pro = "SELECT * FROM `loai_sp`,`sanpham` WHERE `sanpham`.`LSP_MA`=loai_sp.`LSP_MA`
                        AND `sanpham`.`LSP_MA`='$_GET[id]' ORDER BY `sanpham`.`LSP_MA` DESC ";
$query_pro = mysqli_query($connect, $sql_pro);
$row_title = mysqli_fetch_array($query_pro);
?>
<h3>Danh mục sản phẩm:<?php echo $row_title['LSP_TEN'] ?></h3>
<div class="row product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="col-xl-12">
            <a style="text-decoration: none;" href="index.php?quanly=sanpham&id=<?php echo $row_pro['SP_MASANPHAM'] ?>">
                <img class="img img-responsive" width="100%" src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['SP_HINHANH'] ?>">
                <div class="h_product h_pro_2">
                    <p class="title_product"><?php echo $row_pro['SP_TENSANPHAM'] ?></p>
                    <p class="price_product"><?php echo number_format($row_pro['SP_GIABAN']) . 'vnđ' ?></p>
                </div>
            </a>
        </div>
    <?php
    }
    ?>
</div>