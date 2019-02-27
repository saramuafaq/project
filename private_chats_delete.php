<?php
require('conn/conn.php');
$private_chat_id=$_GET['private_chat_id'];
$sql="delete from `private_chats` where `private_chat_id`='$private_chat_id'";
$result=$conn->query($sql);
 header('location:list_private_chat.php');
?>