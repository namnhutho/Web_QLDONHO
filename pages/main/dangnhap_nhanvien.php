<?php

if (isset($_POST['dangnhapnhanvien'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    $sql_dangnhapnv = "SELECT * FROM `nhanvien` WHERE `NV_USER`='" . $taikhoan . "' AND `NV_PASS`='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($connect, $sql_dangnhapnv);


    $row_data = mysqli_fetch_array($row);
    if ($row) {


        $_SESSION['dangnhapnhanvien'] = $row_data['NV_HOTEN'];
        $_SESSION['NV_MA'] = $row_data['NV_MA'];

        // echo '<p>Bạn đã đăng nhập thành công vào tài khoản nhân viên.</p>';
        // echo '<script>alert("Bạn đã đăng nhập thành công vào tài khoản nhân viên.")</script>';
        // $_SESSION['dangnhapnhanvien'] = $taikhoan;

        // if (isset($_SESSION['dangnhapnhanvien'])) {
        //     echo  '<span style="color:red;">' . 'Xin Chào: ' .  $_SESSION['dangnhapnhanvien'] . '</span>';

        //     echo  '<br>' . "Mã nhân viên: " . $_SESSION['NV_MA'];
        // }


        //sau khi đăng nhập vào tài khoản nhân viên, sẽ chuyển về trang chủ
        echo "<script> window.location.href='index.php';</script>";
        // header('Location:index.php?quanly=giohang');
    }
}

?>
<style>
    .title-p {
        padding: 10px;
        border: 5px;
        margin: 5px 28%;
        background: center;
        font-size: 25px;
        font-family: monospace;
    }
</style>
<p class="title-p">Mời bạn đăng nhập vào tài khoản nhân viên</p>
<div class="table-responsive-sm width_table" style="    padding: 15px;
                                                        width: 25%;
                                                        border-radius:5px;
                                                        border: 1px solid #0f73ab;
                                                        /* margin: 26px 50%; */
                                                        /* padding: 20px 25px; */
                                                        box-shadow: 10px 10px 12px 12px lightblue;
                                                        margin: auto;
                                                        /* margin-top: 5%; */
                                                        margin: 26px 30%;">


    <table class="table" border="1px" width="25%">
        <form method="POST" action="" autocomplete="off">
            <div class="form-group">
                <label for="formGroupExampleInput">Tài khoản</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mật khẩu</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" name="password" placeholder="">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" id="formGroupExampleInput3" name="dangnhapnhanvien" value="Đăng nhập">
            </div>
        </form>

    </table>
</div>