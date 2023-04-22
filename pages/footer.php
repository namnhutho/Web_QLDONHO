<div class=" clear"></div>
<div class="footer">
        <p class="footer_copyright">&copy;Copyright by Nam 2023</p>
    <div style="margin: 0 0 0 45%; padding: 2px;">
        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>
        <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>
    </div>

    <!-- <a href="index.php?quanly=dangnhapnhanvien">
        <p>Đăng nhập nhân viên</p>
    </a> -->

    <div style="float: right;margin: -30px 40px;">
        <?php
        if (isset($_GET['dangxuatnhanvien']) && $_GET['dangxuatnhanvien'] == 1) {
            unset($_SESSION['dangnhapnhanvien']);
        }
        ?>

        <?php
        if (isset($_SESSION['dangnhapnhanvien'])) {
        ?>
            <!-- <?php
                    if (isset($_SESSION['dangnhapnhanvien'])) {
                        echo  '<span style="color:red;">' . 'Xin Chào: ' .  $_SESSION['dangnhapnhanvien'] . '</span>';
                        // session_destroy();
                        echo  '<br>' . 'Mã nhân viên:' . $_SESSION['NV_MA'];
                    }
                    ?>
            <a class="" href="index.php?dangxuatnhanvien=1">
                <br>Đăng xuất nhân viên
            </a> -->


        <?php
        } else {
        ?>
            <a class="" href="index.php?quanly=dangnhapnhanvien">
                Đăng nhập nhân viên
            </a>
        <?php
        }
        ?>
    </div>
</div>