<?php
$sql_lietke_sp = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` ASC";
$query_lietke_sp = mysqli_query($connect, $sql_lietke_sp);
?>

<div class="table-responsive-lg" style="padding-top: 30px;">
    <p class="title-p">Liệt kê sản phẩm</p>

    <table class="table table-hover" border="1px" width="90%" style="border-collapse: collapse">
        <tr class="bg-warning">
            <th>Thứ tự</th>
            <th>Mã sản phẩm</th>
            <th>Mã loại sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá bán</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
            <th>Quản lý</th>

        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_sp)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>

                <td><?php echo $row['SP_MASANPHAM'] ?></td>
                <td><?php echo $row['LSP_MA'] ?></td>
                <td><?php echo $row['SP_TENSANPHAM'] ?></td>
                <td><?php echo number_format($row['SP_GIABAN']) ?></td>
                <td><?php echo $row['SP_SOLUONG'] ?></td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['SP_HINHANH'] ?>" width="150px"></td>
                <td width="15%">
                    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['SP_MASANPHAM'] ?>">Xóa</a> |
                    <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['SP_MASANPHAM'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>

</div>