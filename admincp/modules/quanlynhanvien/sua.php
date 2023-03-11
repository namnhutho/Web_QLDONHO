<?php
$sql_sua_nv = "SELECT * FROM `nhanvien` WHERE `nhanvien`.`NV_MA`='$_GET[idnhanvien] ' LIMIT 1";
$query_sua_nv = mysqli_query($connect, $sql_sua_nv);
?>

<div class="table-responsive-lg" style="box-shadow: 10px 10px 12px 12px lightblue;">
    <p class="title-p">Sửa thông tin nhân viên</p>
    <table class="table" border="3px" width="100%" style="border-collapse: collapse">
        <?php
        while ($row = mysqli_fetch_array($query_sua_nv)) {
        ?>
            <form method="POST" action="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['NV_MA'] ?>" enctype="multipart/form-data">


                <tr>
                    <td>Mã nhân viên</td>
                    <td><input type="text" value="<?php echo $row['NV_MA'] ?>" name="manhanvien"></td>
                </tr>
                <tr>
                    <td>Họ tên nhân viên</td>
                    <td><input type="text" value="<?php echo $row['NV_HOTEN'] ?>" name="hotennhanvien"></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="date" value="<?php echo $row['NV_NGAYSINH'] ?>" name="ngaysinhnhanvien"></td>
                </tr>

                <tr>
                    <td>Căn cước công dân</td>
                    <td><input type="text" value="<?php echo $row['NV_CCCD'] ?>" name="cccd"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" value="<?php echo $row['NV_DIACHI'] ?>" name="diachi"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" value="<?php echo $row['NV_SODIENTHOAI'] ?>" name="sdt"></td>
                </tr>
                <tr>
                    <td>Hệ lương nhân viên</td>
                    <td><input type="text" value="<?php echo $row['NV_LUONG'] ?>" name="luongnhanvien"></td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td><input type="text" value="<?php echo $row['NV_USER'] ?>" name="tendangnhapnhanvien"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" value="<?php echo $row['NV_PASS'] ?>" name="matkhaunhanvien"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" name="suanhanvien" value="Thay đổi thông tin"></td>
                </tr>
            </form>
        <?php
        }
        ?>
    </table>
</div>