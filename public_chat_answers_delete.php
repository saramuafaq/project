<?php
require('conn/conn.php');
$public_chat_ans_id=$_GET['public_chat_ans_id'];
$sql="delete from `public_chat_answer` where `answer_id`='$public_chat_ans_id'";
$result=$conn->query($sql);
 header('location:list_public_chat_answer.php');
?>