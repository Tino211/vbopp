<?php
session_start();
include('../connect.php');
$a = $_POST['sitename'];
$k = $_POST['sitelocation'];
$b = $_POST['phonenumber'];
$c = $_POST['site_id'];
$d = $_POST['user_id'];
// query


    
  //do your write to the database filename and other details   
$sql = "INSERT INTO sitee (sitename,sitelocation,phonenumber,site_id, user_id) VALUES (:a,:k,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b, ':c'=>$c, ':d' =>$d));
header("location: sites.php");

	
?>