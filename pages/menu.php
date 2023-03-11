<?php
$sql_danhmuc = "SELECT *FROM loai_sp ORDER BY LSP_MA DESC";
$query_danhmuc = mysqli_query($connect, $sql_danhmuc);

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="width: 100%;">
    <a class="navbar-brand" href="./index.php">
        <img src="../images/logo1.png" alt="logo" width="50px" height="50px" style="    border-radius: 8px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Danh mục sản phẩm
                </a>
                <div class="dropdown-menu">
                    <?php
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['LSP_MA'] ?>">
                            <?php echo $row_danhmuc['LSP_TEN'] ?></a>
                    <?php
                    }
                    ?>
                </div>
            </li>



            <li class="nav-item"><a class="nav-link" href="../pages/index.php?quanly=tintuc">Tin tức</a></li>
            <li class="nav-item"><a class="nav-link" href="../pages/index.php?quanly=lienhe">Liên hệ</a></li>
            <li class="nav-item"><a class="nav-link" href="../pages/index.php?quanly=giohang">Giỏ hàng</a></li>

            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
            <?php
            } else {
            ?>
                <li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky">Đăng ký</a></li>
            <?php
            }
            ?>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khóa ......" aria-label="Search" name="tukhoa">
            <button class="btn btn-outline-success my-2 my-sm-0" name="timkiem" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>


<!-- <div class="menu">
    <ul class="list_menu">
        <li><a href="../pages/index.php">Trang chủ</a></li>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li>
                <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['LSP_MA'] ?>">
                    <?php echo $row_danhmuc['LSP_TEN'] ?>
                </a>
            </li>
        <?php
        }
        ?>
        <li><a href="../pages/index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a href="../pages/index.php?quanly=tintuc">Tin tức</a></li>
        <li><a href="../pages/index.php?quanly=lienhe">Liên hệ</a></li>
    </ul>
</div> -->