<style>
    .login_header {
        padding: 0;
        border: 0;
        margin: 0;
    }

    .login_header {

        float: right;
        padding: 5px;
        border-radius: 5px;
        margin: 2px;
        cursor: pointer;
        display: block;
        font: initial;
        /* background: #1f3d52; */
        color: white;
    }

    .link-a1 {
        padding: 0;
        border: 0;
        margin: 0;
    }

    .link-a1 {
        /* font-family: cursive;
        color: white;
        padding: 0 5px;
        margin: 0 4px; */
        text-align: center;
        font-size: 14px;
        font-family: cursive;
        background-color: #267d5d;
        color: white;
        padding: 10px 10px;
        margin: 5px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        display: block;
    }

    .link-a1:hover {
        opacity: 1;
        text-decoration: none;
        color: #DFE3EE;
    }
</style>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>


<!-- <?php
$sql_KH = "SELECT * FROM `khachhang` WHERE `khachhang`.`KH_MA` LIMIT 1";
$query_KH = mysqli_query($connect, $sql_KH);
?> -->

<div class="header">
    <!-- <img src="../images/donghocaocap_2_1280x720-800-resize.jpg" alt="banner" width="100%" height="200px"> -->
    <div class="login_header">

        <!-- <?php
        while ($row = mysqli_fetch_array($query_KH)) {
        ?> -->
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <a class="nav-link1 link-a1" href="index.php?dangxuat=1">
                    Đăng xuất
                </a>
                <a class="nav-link1 link-a1" href="index.php?quanly=thaydoimatkhau">
                    Thay đổi mật khẩu
                </a>


            <?php
            } else {
            ?>
                <a class="nav-link1 link-a1" href="index.php?quanly=dangky">
                    Đăng ký
                </a>
                <a class="nav-link1 link-a1" href="index.php?quanly=dangnhap">
                    Đăng nhập
                </a>
            <?php
            }
            ?>
        <!-- <?php
            break;
        }
        ?> -->
    </div>

</div>