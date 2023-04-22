<?php
$sql_lietke_nv = "SELECT * FROM `nhanvien` ORDER BY `nhanvien`.`NV_MA` ASC";
$query_lietke_nv = mysqli_query($connect, $sql_lietke_nv);
?>


    <p class="title-p">Liệt kê nhân viên</p>

    <table class="table table-hover table-td " border="1px" width="100%" style=" border-collapse: collapse">
        <tr class="bg-warning">
            <th>Mã nhân viên</th>
            <th>Họ tên nhân viên</th>
            <th>Ngày sinh</th>
            <th>Căn cước công dân</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Hệ số lương</th>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
            <th>Quản lý</th>


        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_lietke_nv)) {

        ?>
            <tr>


                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_MA'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_HOTEN'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_NGAYSINH'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_CCCD'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_DIACHI'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_SODIENTHOAI'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo number_format($row['NV_LUONG']) . "vnđ"  ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_USER'] ?>
                    </p>
                </td>
                <td>
                    <p class="font-nhanvien">
                        <?php echo $row['NV_PASS'] ?>
                    </p>
                </td>
                <td width="100px">
                    <a href="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['NV_MA'] ?>">Xóa</a> |
                    <a href="?action=quanlynhanvien&query=sua&idnhanvien=<?php echo $row['NV_MA'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>