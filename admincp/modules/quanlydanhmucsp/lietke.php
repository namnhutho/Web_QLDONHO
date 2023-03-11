<?php
$sql_lietke_danhmucsp = "SELECT * FROM `loai_sp` ORDER BY `loai_sp`.`LSP_TEN` ASC";
$query_lietke_danhmucsp = mysqli_query($connect, $sql_lietke_danhmucsp);
?>
<br><br>
<div class="table-responsive-sm" style="border:1px solid #000; padding:20px 25px; box-shadow: 10px 10px 12px 12px lightblue;">
    <p class="title-p">Liệt kê danh mục sản phẩm</p>

    <table class="table" border="1px" width="75%" style="border-collapse: collapse">
        <tr class="table-primary">
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
            $i++;
        ?>
            <tr class="">
                <td><?php echo $i ?></td>
                <td><?php echo $row['LSP_TEN'] ?></td>
                <td>
                    <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['LSP_MA'] ?>">Xóa</a> |
                    <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['LSP_MA'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>