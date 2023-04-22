<div class="table-responsive-sm " style=" width:35%;
    display:block;
    margin:60px 30px;
    border: 1px solid #000;
    padding: 15px;
    box-shadow: 10px 10px 12px 12px lightblue; float:left; ">
    <p class="title-p">Thêm danh mục sản phẩm</p>
    <table class="table" border="1px" width="100%" style="border-collapse: collapse">
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
            <div class="form-group">
                <label for="formGroupExampleInput">Mã loại sản phẩm</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="maloaisp" placeholder="Xin mời nhập thông tin vào">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Tên loại sản phẩm</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="tenloaisp" placeholder="Xin mời nhập thông tin vào">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" id="formGroupExampleInput3" name="themdanhmuc" value="Thêm danh mục sản phẩm">
            </div>
        </form>
    </table>
</div>