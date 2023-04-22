<div class="table-responsive-sm " style="    width: 45%;
    margin: 20px 28%;
    border: 1px solid #000;
    padding: 15px;
    box-shadow: 10px 10px 12px 12px lightblue;">
    <p class="title-p">Thêm sản phẩm</p>
    <table class="table" border="1px" width="100%" style="border-collapse: collapse">
        <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="formGroupExampleInput">Mã sản phẩm</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="masp">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mã loại sản phẩm</label>
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
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Tên sản phẩm</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tensp">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Giá bán</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="giasp">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Số lượng</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="soluong">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Hình ảnh</label>
                <input type="file" id="formGroupExampleInput" name="hinhanh">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" id="formGroupExampleInput3" name="themsanpham" value="Thêm sản phẩm"">
            </div>
        </form>
    </table>
</div>