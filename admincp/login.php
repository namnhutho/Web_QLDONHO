<?php
session_start();
include("./config/config.php");
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM `tbl_admin` WHERE `username`='" . $taikhoan . "' AND `password`='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location: index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại")</script>';
        // header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY ADMIN</title>

    <link rel="shortcut icon" type="image/png" href="../images/logo1.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleadmincp.css">
</head>

<body>
    <div class="table-responsive-sm width_table">
        <p class="title-p">Mời bạn đăng nhập vào tài khoản admin</p>

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

</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</html>