<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hóa đơn</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <p style="background-color: #a9dbe7;
            padding: 25px;
            text-align: center;
            color: red;
            font-size: large;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgb(178, 146, 146);">Liệt kê hóa đơn của khách hàng</p>
  <?php
  include('../../admincp/config/config.php');
  $sql_lietke_dh = "SELECT * FROM hoadon,khachhang WHERE hoadon.KH_MA=khachhang.KH_MA
                                                     ORDER BY hoadon.HD_MA DESC";
  $query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
  ?>

  <div class="container-fuild table-responsive-sm" style="font-size: 18px;padding : 5px;">
    <table class="table table-hover table-td table-striped" border="1px" width="95%" style=" border-collapse: collapse">
      <tr class="table-warning">
        <th>Id</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Ngày đặt</th>
        <th>Quản lý</th>
        <!-- <th>In</th> -->

      </tr>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
      ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row['code_cart'] ?></td>
          <td><?php echo $row['KH_HOTEN'] ?></td>
          <td><?php echo $row['KH_DIACHI'] ?></td>
          <td><?php echo $row['KH_EMAIL'] ?></td>
          <td><?php echo $row['KH_SODIENTHOAI'] ?></td>
          <td>

            <?php if ($row['HD_TRANGTHAI'] == 1) {
              echo '<a href="./xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
            } else {
              echo 'Đã xem';
            }
            ?>
          </td>
          <td><?php echo $row['HD_NGAYDAT'] ?></td>
          <td>
            <a href="./xemdonhang.php?code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
          </td>
          <!-- <td>
            <a href="./indonhang.php?code=<?php echo $row['code_cart'] ?>">In Đơn hàng</a>
          </td> -->

        </tr>
      <?php
      }
      ?>

    </table>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>






<!-- <p>Liệt kê đơn hàng</p>
<?php
include('../../admincp/config/config.php');
$sql_lietke_dh = "SELECT * FROM hoadon,khachhang WHERE hoadon.KH_MA=khachhang.KH_MA
                                                     ORDER BY hoadon.HD_MA DESC";
$query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>

<div class=" table-responsive-xl" style="padding : 5px;">
  <table class="table table-hover table-td " border="1px" width="95%" style=" border-collapse: collapse">
    <tr class="table-warning">
      <th>Id</th>
      <th>Mã đơn hàng</th>
      <th>Tên khách hàng</th>
      <th>Địa chỉ</th>
      <th>Email</th>
      <th>Số điện thoại</th>
      <th>Tình trạng</th>
      <th>Ngày đặt</th>
      <th>Quản lý</th>
      <th>In</th>

    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
      $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['KH_MA'] ?></td>
        <td><?php echo $row['KH_DIACHI'] ?></td>
        <td><?php echo $row['KH_EMAIL'] ?></td>
        <td><?php echo $row['KH_SODIENTHOAI'] ?></td>
        <td>

          <?php if ($row['HD_TRANGTHAI'] == 1) {
            echo '<a href="./xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
          } else {
            echo 'Đã xem';
          }
          ?>
        </td>
        <td><?php echo $row['HD_NGAYDAT'] ?></td>
        <td>
          <a href="./xemdonhang.php?code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
        </td>
        <td>
          <a href="./indonhang.php">In Đơn hàng</a>
        </td>

      </tr>
    <?php
    }
    ?>

  </table>
</div> -->