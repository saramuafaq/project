<?php
require('conn/conn.php');
$public_chat_id=$_GET['public_chat_id'];
$sql="delete from `spublic_chats` where `public_chat_id`='$public_chat_id'";
$result=$conn->query($sql);
 header('location:list_public_chat.php');
?>