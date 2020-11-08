<?php
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['code'];
$c = $_POST['type'];
$d = $_POST['sell'];
$e = $_POST['cost'];
$f = $_POST['re_order'];




// query
$sql = "INSERT INTO product (name,code,type,sell,cost,re_order) VALUES (:a,:b,:c,:d,:e,:f)";
$ql = $db->prepare($sql);
$ql->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: product_view.php");


?>