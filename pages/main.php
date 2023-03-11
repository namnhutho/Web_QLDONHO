    <!-- <div class="wrapper"> -->

    <div id="main">
        <!-- larger middle small x-small -->
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 sidebar-color" style="padding-left: 40px;">
                <?php
                include("sidebar/sidebar.php");
                ?>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="background-color: darkgrey;">
                <div class="maincontent">
                    <?php
                    if (isset($_GET['quanly'])) {
                        $tam = $_GET['quanly'];
                    } else {
                        $tam = '';
                    }
                    if ($tam == 'danhmucsanpham') {
                        include("./main/danhmuc.php");
                    } elseif ($tam == 'giohang') {
                        include("./main/giohang.php");
                    } elseif ($tam == 'tintuc') {
                        include("./main/tintuc.php");
                    } elseif ($tam == 'lienhe') {
                        include("./main/lienhe.php");
                    } elseif ($tam == 'sanpham') {
                        include("./main/sanpham.php");
                    } elseif ($tam == 'timkiem') {
                        include("./main/timkiem.php");
                    } else {
                        include("./main/index.php");
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>


    <!-- </div> -->