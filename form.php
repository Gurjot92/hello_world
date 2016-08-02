<?php 


$select = "SELECT * FROM tbl_signup WHERE id = 1";
$fetch = mysql_query($select);
$rows = mysql_num_rows();
if($rows > 0) {

$result = mysql_fetch_array();

$fistname = $result['fistname'];
$lastname = $result['lastname'];


}


?>