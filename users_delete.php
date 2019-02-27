<?php
require('conn/conn.php');
$user_id=$_GET['user_id'];
$sql="delete from `users` where `user_id`='$user_id'";
$result=$conn->query($sql);
 header('location:list_user.php');
?>