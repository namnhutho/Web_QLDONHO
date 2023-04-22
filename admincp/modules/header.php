<!-- <p>header ADMIN</p> -->
<!-- Đăng xuất ở phần header -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_GET['dangnhap']);
    header('Location:login.php');
}
?>
<a class="nav_dangxuat" href="./index.php?dangxuat=1">Đăng xuất:
    <?php
    if (isset($_SESSION['dangnhap'])) {
        echo $_SESSION['dangnhap'];
    }
    ?>
</a>