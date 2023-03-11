<h4 class="title_danhmuc">Danh mục sản phẩm</h4>
<ul class="list_sidebar">
    <?php
    $sql_danhmuc = "SELECT *FROM loai_sp ORDER BY LSP_MA DESC";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
    while ($row = mysqli_fetch_array($query_danhmuc)) {
    ?>
        <li><a href="../pages/index.php?quanly=danhmucsanpham&id=<?php echo $row['LSP_MA'] ?>"><?php echo $row['LSP_TEN'] ?></a></li>
    <?php
    }
    ?>

</ul>