<?php
$sql_sua_danhmucsp = "SELECT * FROM `loai_sp`WHERE LSP_MA='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($connect, $sql_sua_danhmucsp);
?>
<div class="table-responsive-sm " style="border:1px solid #000; padding:15px; box-shadow: 10px 10px 12px 12px lightblue;">
    <p class="title-p">Sửa danh mục sản phẩm</p>
    <table border="1px" width="50%" style="border-collapse: collapse">
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?> ">
            <?php
            while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
            ?>

                <!-- <tr>
                <td>Mã loại sản phẩm</td>
                <td><input type="text" value="<?php echo $dong['LSP_MA'] ?>" name="maloaisp"></td>
            </tr>
            <tr>
                <td>Tên loại sản phẩm</td>
                <td><input type="text" value="<?php echo $dong['LSP_TEN'] ?>" name=" tenloaisp"></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr> -->


                <div class="form-group">
                    <label for="formGroupExampleInput">Mã loại sản phẩm</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $dong['LSP_MA'] ?>" name="maloaisp">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tên loại sản phẩm</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $dong['LSP_TEN'] ?>" name=" tenloaisp">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" id="formGroupExampleInput3" name="suadanhmuc" value="Sửa danh mục sản phẩm">
                </div>

            <?php
            }
            ?>
        </form>
    </table>
</div>