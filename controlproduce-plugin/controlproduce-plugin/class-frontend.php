<?php
function my_shortcode() {
 echo "Khai vị";
    $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Không thể kết nối đến database: ' . mysql_error());
  }

mysql_select_db("quanlysanpham", $con);

$result = mysql_query("SELECT * FROM khaivi");
if(mysql_num_rows($result) > 0){
	echo "<table border='1' cellpadding='5px'>
	<tr>
	<th>Mã sản phẩm</th>
	<th>Tên sản phẩm</th>
	<th>Giá</th>
	</tr>";

	while($row = mysql_fetch_array($result))
	{
		  echo "<tr>";
		  echo "<td>" . $row['maSP'] . "</td>";
		  echo "<td>" . $row['tenSP'] . "</td>";
		  echo "<td>" . $row['donGia'] . "</td>";
		  echo "</tr>";
	}
	echo "</table>";
}



mysql_close($con);
}
//Tạo shortcode tên là [manh] và sẽ được định nghĩa bởi hàm my_shortcode
add_shortcode( 'danhsachmonan', 'my_shortcode' );

?>