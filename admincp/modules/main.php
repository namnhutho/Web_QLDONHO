<div class="clear"></div>
<!-- <p>main ADMIN</p> -->

<div class="container-fluid" width="100%" height="auto">
    <div class="col-lg-12">
        <?php
        if (isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }
        if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
            include("./modules/quanlydanhmucsp/them.php");
            include("./modules/quanlydanhmucsp/lietke.php");
        } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
            include("./modules/quanlydanhmucsp/sua.php");
        } elseif ($tam == 'quanlysp' && $query == 'them') {
            include("./modules/quanlysp/them.php");
            include("./modules/quanlysp/lietke.php");
        } elseif ($tam == 'quanlysp' && $query == 'sua') {
            include("modules/quanlysp/sua.php");
        } elseif ($tam == 'quanlynhanvien' && $query == 'them') {
            include("./modules/quanlynhanvien/them.php");
            include("./modules/quanlynhanvien/lietke.php");
        } elseif ($tam == 'quanlynhanvien' && $query == 'sua') {
            include("modules/quanlynhanvien/sua.php");
        }
         elseif ($tam == 'quanlylienhe' && $query == 'them') {
            include("./modules/quanlylienhe/lietke.php");
        }
        else {
            include("./modules/dashboard.php");
        }
        ?>
    </div>


</div>