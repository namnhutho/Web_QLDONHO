<?php
$sql_sua_sp = "SELECT * FROM `sanpham` WHERE `sanpham`.`SP_MASANPHAM`='$_GET[idsanpham] ' LIMIT 1";
$query_sua_sp = mysqli_query($connect, $sql_sua_sp);
?>


<p class="title-p">Sửa sản phẩm</p>
<div class="table-responsive-sm " style="border:1px solid #0000; margin-top: 20px; box-shadow: 10px 10px 12px 12px lightblue;">
    <table border="1px" width="100%" style="border-collapse: collapse">
        <?php
        while ($row = mysqli_fetch_array($query_sua_sp)) {
        ?>
            <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['SP_MASANPHAM'] ?>" enctype="multipart/form-data">
                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" value="<?php echo $row['SP_MASANPHAM'] ?>" name="masp"></td>
                </tr>
                <tr>
                    <td>Mã loại sản phẩm</td>

                    <td>
                        <select name="maloaisp" id="">
                            <?php
                            $sql_danhmuc = "SELECT *FROM loai_sp ORDER BY LSP_MA DESC";
                            $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            ?>
                                <option value="<?php echo $row_danhmuc['LSP_MA'] ?>">
                                    <?php echo $row_danhmuc['LSP_MA'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <!-- <td><input type="text" value="<?php echo $row['LSP_MA'] ?>" name="maloaisp"></td> -->
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" value="<?php echo $row['SP_TENSANPHAM'] ?>" name="tensp"></td>
                </tr>

                <tr>
                    <td>Giá bán</td>
                    <td><input type="text" value="<?php echo $row['SP_GIABAN'] ?>" name="giasp"></td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td><input type="text" value="<?php echo $row['SP_SOLUONG'] ?>" name="soluong"></td>
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td>
                        <input type="file" name="hinhanh">
                        <img src="modules/quanlysp/uploads/<?php echo $row['SP_HINHANH'] ?>" width="150px">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa mục sản phẩm"></td>
                </tr>

            </form>
        <?php
        }
        ?>
    </table>
</div>