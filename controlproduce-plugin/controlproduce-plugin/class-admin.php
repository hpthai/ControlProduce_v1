<?php
global $wpdb;
global $danhmuc;
global $masp;
global $tensp;
global $dongia;
$queryInsert = "INSERT INTO khaivi (maSP, tenSP, donGia) 
VALUES ('$masp', '$tensp', $dongia)";
 
add_action('admin_menu', 'show_fbcomments_options');
function show_fbcomments_options() {
	add_options_page('Control Produce', 'Control Produce', 'manage_options', 'produce', 'control_produce');
}


// ADMIN PAGE
function control_produce() {
?>

<form action="" method="post">
<div>
        <h1><?php echo "Control Produce"?></h1>
</div>
<div>
	<h2><?php echo "Nhóm sản phẩm"?></h2>
	<select name="produce">
		<option value="Khai vi">Khai vị</option>
		<option value="Mon chinh">Món chính</option>
		<option value="Trang mieng">Tráng miệng</option>
		<option value="Thuc uong">Thức uống</option>
	</select>
</div>

<div>
	<h2><?php echo "Mã sản phẩm"?></h2>
	<input name="masanpham" type="text" id="masanpham" value="<?php form_option('masanpham'); ?>" class="regular-text" />
</div>
<div>
	<h2><?php echo "Tên sản phẩm"?></h2>
	<input name="tensanpham" type="text" id="tensanpham" value="<?php form_option('tensanpham'); ?>" class="regular-text" />
</div>
<div>
	<h2><?php echo "Đơn giá"?></h2>
	<input name="dongia" type="text" id="dongia" value="<?php form_option('dongia'); ?>" class="regular-text" />
</div>
<?php
if(isset($_POST['btnInsert'])) {
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
    		echo "Không thể connect đến database";
	}

	mysql_select_db("quanlysanpham",$con);
	$danhmuc= $_PORT['produce'];
	$masp = $_POST['masanpham'];
	$tensp = $_POST['tensanpham'];
	$dongia = $_POST['dongia'];
	echo $danhmuc;
	$resultold = mysql_query("SELECT * FROM khaivi");
	$nrowold = mysql_num_rows($resultold);
	mysql_query("INSERT INTO khaivi (maSP, tenSP, donGia) VALUES ('$masp', '$tensp', $dongia)");
	$resultnew = mysql_query("SELECT * FROM khaivi");
	$nrownew = mysql_num_rows($resultnew);
	if($nrownew > $nrowold)
		echo "Thêm thành công";
	else{//echo $danhmuc;
		echo "Thêm thất bại";
	}
	mysql_close($con);
}
if(isset($_POST['btnDelete'])) {
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
    		echo "Không thể connect đến database";
	}

	mysql_select_db("quanlysanpham",$con);
	$danhmuc= $_PORT['produce'];
	$masp = $_POST['masanpham'];
	$tensp = $_POST['tensanpham'];
	$dongia = $_POST['dongia'];
	echo $danhmuc;
	$resultold = mysql_query("SELECT * FROM khaivi");
	$nrowold = mysql_num_rows($resultold);
	mysql_query("DELETE FROM `khaivi` WHERE maSP ='$masp'");
	$resultnew = mysql_query("SELECT * FROM khaivi");
	$nrownew = mysql_num_rows($resultnew);
	if($nrownew < $nrowold)
		echo "Xóa thành công";
	else{//echo $danhmuc;
		echo "Xóa thất bại";
	}
	mysql_close($con);
}
if(isset($_POST['btnUpdate'])) {
$con = mysql_connect("localhost","root","");
	if (!$con)
	{
    		echo "Không thể connect đến database";
	}

	mysql_select_db("quanlysanpham",$con);
	$danhmuc= $_PORT['produce'];
	$masp = $_POST['masanpham'];
	$tensp = $_POST['tensanpham'];
	$dongia = $_POST['dongia'];
	echo $danhmuc;
	$resultold = mysql_query("SELECT * FROM khaivi");
	mysql_query("UPDATE khaivi SET tenSP = '$tensp', donGia = '$dongia' WHERE maSP = '$masp'");	
	mysql_close($con);
}
?>
<div>
	<table>
	<tr>
		<input type="submit" name="btnInsert" value="Insert" />
	</tr>
	<tr>
		<input type="submit" name="btnDelete" value="Delete" />
	</tr>
	<tr>
		<input type="submit" name="btnUpdate" value="Update" />
	</tr>
	</table>
</div>
</form>


<?php
}

?>