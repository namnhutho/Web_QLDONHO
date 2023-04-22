<?php
$temp=0;
if (isset($_POST['dangky'])) {
    $makhachhang = rand(1, 1000);
    $tenkhachhang = $_POST['hoten'];
    $dienthoai = $_POST['sodienthoai'];
    $cccd = $_POST['cccd'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    $sql_add_khachhang = "INSERT INTO `khachhang`(`KH_MA`, `KH_HOTEN`, `KH_SODIENTHOAI`, `KH_CCCD`,
                                                 `KH_NGAYSINH`, `KH_EMAIL`, `KH_DIACHI`, `KH_USER`, `KH_PASS`) 
                            VALUES ('" . $makhachhang . "','" . $tenkhachhang . "',
                            '" . $dienthoai . "','" . $cccd . "','" . $ngaysinh . "',
                            '" . $email . "','" . $diachi . "','" . $tendangnhap . "','" . $matkhau . "')";
    $sql_dangky = mysqli_query($connect, $sql_add_khachhang);
    $temp=1;
}

if ($temp==1) {
        
    $sql = "SELECT * FROM `khachhang` WHERE `KH_USER`='" . $tendangnhap . "' AND `KH_PASS`='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    $row_data = mysqli_fetch_array($row);
    if ($count == 1) {
        //  echo '<script>alert("Đăng ký tài khoản thành công, mời bạn ghé giỏ hàng để tiếp tục mua sắm")</script>';
        $_SESSION['dangky'] = $row_data['KH_HOTEN'];
        $_SESSION['KH_MA'] = $row_data['KH_MA'];
        echo "<script> window.location.href='index.php?quanly=giohang';</script>";
        die();
    } else {
        // echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại")</script>';
        // echo "<script> window.location.href='./index.php?quanly=dangnhap';</script>";
        // header("Location: login.php");
    }
}
?>
<p>Đăng ký thành viên</p>
<div class="table-responsive-sm " style="    width: 40%;
    border: 1px solid #000;
    padding: 24px;
    margin: 20px 25%;
    box-shadow: 10px 10px 12px 12px lightblue;">

    <table class="table" border="1px" style="border-collapse: collapse">
        <form method="POST" enctype="multipart/form-data">


            <div class="form-group">
                <label for="formGroupExampleInput2">Họ tên </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="hoten">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Số điện thoại</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="sodienthoai">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Căn cước công dân</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="cccd">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Ngày sinh</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="ngaysinh">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="email">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Địa chỉ</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="diachi">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Tên đăng nhập</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="tendangnhap">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Mật khẩu</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="matkhau">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" id="formGroupExampleInput3" name="dangky" value="Đăng ký">
                <!-- <a href="index.php?quanly=dangnhap">
                    <p>Đăng nhập</p>
                </a> -->
            </div>

        </form>
    </table>
</div>