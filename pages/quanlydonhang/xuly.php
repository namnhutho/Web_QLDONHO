<?php
	include('../../admincp/config/config.php');
	
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE hoadon SET HD_TRANGTHAI=0 WHERE code_cart='".$code_cart."'";
		$query = mysqli_query($connect,$sql_update);
        header('Location:../quanlydonhang/lietke.php');
	} 
?>