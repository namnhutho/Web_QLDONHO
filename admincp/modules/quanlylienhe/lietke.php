<?php
$sql_lietke_danhmucsp =  "SELECT * FROM `lienhe1` WHERE 1";
$query_lietke_danhmucsp = mysqli_query($connect, $sql_lietke_danhmucsp);
?>
<div class=" table-responsive-xl" style="padding : 5px; ">
    <table class="table" border="1px" width="75%" style="border-collapse: collapse">
        <tr class="table-primary">
            <th>Họ tên</th>
            <th>Địa chỉ email</th>
            <th>Lời nhắn</th>
        </tr>
        <?php

        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {

        ?>
            <tr class="">
                <td><?php echo $row['LH_HOTEN'] ?></td>
                <td><?php echo $row['LH_EMAIL'] ?></td>
                <td><?php echo $row['LH_LOINHAN'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>