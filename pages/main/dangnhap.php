<?php

if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM `khachhang` WHERE `KH_USER`='" . $taikhoan . "' AND `KH_PASS`='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    $row_data = mysqli_fetch_array($row);
    if ($count == 1) {
        // echo '<script>alert("Đăng nhập tài khoản thành công, mời bạn ghé giỏ hàng để tiếp tục mua sắm")</script>';
        $_SESSION['dangky'] = $row_data['KH_HOTEN'];
        $_SESSION['KH_MA'] = $row_data['KH_MA'];
        echo "<script> window.location.href='index.php';</script>";
        die();
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại")</script>';
        echo "<script> window.location.href='./index.php?quanly=dangnhap';</script>";
        // header("Location: login.php");
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
<p class="title-p">Mời bạn đăng nhập vào tài khoản</p>
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
                <input type="submit" class="form-control" id="formGroupExampleInput3" name="dangnhap" value="Đăng nhập">
            </div>
        </form>

    </table>
</div>