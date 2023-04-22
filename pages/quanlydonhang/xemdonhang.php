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
  <p style="
    background-color: #a9dbe7;
    padding: 25px;
    text-align: center;
    color: red;
    font-size: large;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgb(178, 146, 146);
">Xem đơn hàng</p>
  <?php
  include('../../admincp/config/config.php');

  $code = $_GET['code'];
  $sql_lietke_dh = "SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.SP_MASANPHAM=sanpham.SP_MASANPHAM 
              AND chitiethoadon.code_cart='" . $code . "' ORDER BY chitiethoadon.HD_MA DESC";
  // $sql_lietke_dh = "SELECT * FROM ((hoadon
  //               INNER JOIN chitiethoadon ON hoadon.code_cart = chitiethoadon.code_cart)
  //               INNER JOIN sanpham ON sanpham.SP_MASANPHAM =chitiethoadon.SP_MASANPHAM )";

  $query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
  ?>

  <div class="container-fuild" style="padding : 5px; font-size: 18px;">
    <table class="table table-hover table-td " border="1px" width="95%" style=" border-collapse: collapse">
      <tr class="table-warning">
        <th>id</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>

      <?php
      $i = 0;
      $tongtien = 0;
      while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
        $thanhtien = $row['SP_GIABAN'] * $row['SOLUONG'];
        $tongtien += $thanhtien;
      ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row['code_cart'] ?></td>
          <td><?php echo $row['SP_TENSANPHAM'] ?></td>
          <td><?php echo $row['SOLUONG'] ?></td>
          <td><?php echo number_format($row['SP_GIABAN'], 0, ',', '.') . 'vnđ' ?></td>
          <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></td>

        </tr>
      <?php
      }
      ?>
      <tr>
        <td colspan="6">
          <p>Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
        </td>

      </tr>
    </table>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>