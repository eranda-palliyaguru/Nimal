<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Colombo"); 

$a1 = $_POST['vehicle_no'];
$d = $_POST['km'];
$model = $_POST['model'];
$type = $_POST['type'];





$c = "Unknown customer";
$b = "ds".date("ymdhis");
$e = date("Y-m-d");
$f = $_SESSION['SESS_FIRST_NAME'];


$iina = "-22".$a1;
$sql = "UPDATE  sales_list
        SET invoice_no=?
		WHERE invoice_no=?";
$q = $db->prepare($sql);
$q->execute(array($b,$iina));

// query
$sql = "INSERT INTO sales (vehicle_no,invoice_number,customer_name,km,date,cashier,model,type) VALUES (:a,:b,:c,:d,:e,:f,:model,:type)";
$ql = $db->prepare($sql);
$ql->execute(array(':a'=>$a1,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':model'=>$model,':type'=>$type));
header("location: sales.php?id=$b");


?>