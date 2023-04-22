<?php
if (isset($_POST['doimatkhau'])) {
	$taikhoan = $_POST['username1'];
	$matkhau_cu = ($_POST['password_old']);
	$matkhau_moi = ($_POST['password_new']);
	$sql = "SELECT * FROM `khachhang` WHERE `KH_USER`='" . $taikhoan . "' 
									AND `KH_PASS`='" . $matkhau_cu . "' LIMIT 1";
	$row = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$sql_update = mysqli_query($connect, "UPDATE `khachhang` SET `KH_PASS`='" . $matkhau_moi . "' WHERE `KH_USER`='" . $taikhoan . "'");
		echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
	} else {
		echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
	}
}
?>
<div class="table-responsive-sm width_table" style="    padding: 15px;
                                                        width: 25%;
                                                        border-radius:5px;
                                                        border: 1px solid #0f73ab;
                                                        /* margin: 26px 50%; */
                                                        /* padding: 20px 25px; */
                                                        box-shadow: 10px 10px 12px 12px lightblue;
                                                        margin: auto;
                                                        /* margin-top: 5%; */
                                                        margin: 26px 30%;">


	<table class="table" border="1px" width="25%">
		<form method="POST" action="" autocomplete="off">
			<div class="form-group">
				<label for="formGroupExampleInput">Tài khoản</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="username1" placeholder="">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Mật khẩu cũ</label>
				<input type="password" class="form-control" id="formGroupExampleInput2" name="password_old" placeholder="">
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Mật khẩu mới</label>
				<input type="password" class="form-control" id="formGroupExampleInput2" name="password_new" placeholder="">
			</div>
			<div class="form-group">
				<input type="submit" class="form-control" id="formGroupExampleInput3" name="doimatkhau" value="Đổi mật khẩu">
			</div>
		</form>

	</table>
</div>
<!-- <form action="" autocomplete="off" method="POST">
	<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
		<tr>
			<td colspan="2">
				<h3>Đổi mật khẩu Admin</h3>
			</td>
		</tr>
		<tr>
			<td>Tài khoản</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Mật khẩu cũ</td>
			<td><input type="text" name="password_old"></td>
		</tr>
		<tr>
			<td>Mật khẩu mới</td>
			<td><input type="text" name="password_new"></td>
		</tr>
		<tr>

			<td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
		</tr>
	</table>
</form> -->