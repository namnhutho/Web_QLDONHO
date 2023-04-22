<?php
$sql_pro = "SELECT * FROM `loai_sp`,`sanpham` WHERE `sanpham`.`LSP_MA`=loai_sp.`LSP_MA`
                        ORDER BY `sanpham`.`LSP_MA` DESC LIMIT 25 ";
$query_pro = mysqli_query($connect, $sql_pro);

?>
<h3>Sản phẩm mới nhất</h3>
<div class="row product_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <div class="col-md-2">
            <a href="index.php?quanly=sanpham&id=<?php echo $row['SP_MASANPHAM'] ?>" style="text-decoration: none;">
                <img class="img img-responsive" width="100%" src="../admincp/modules/quanlysp/uploads/<?php echo $row['SP_HINHANH'] ?>">
                <div class="h_product">
                    <p class="title_product"><?php echo $row['SP_TENSANPHAM'] ?></p>
                    <p class="price_product"><?php echo number_format($row['SP_GIABAN']) . 'vnđ' ?></p>
                    <p class="cate_product"><?php echo $row['LSP_TEN'] ?></p>
                </div>
            </a>
        </div>
    <?php
    } ?>
</div>