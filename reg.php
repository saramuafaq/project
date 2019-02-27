
<?php
if(isset($_POST['reg']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
    $p=$_POST['password'];
	$c=$_POST['confirm'];
	$g=$_POST['gender'];
	$ph=$_POST['phone'];
    if($p==$c)
    {
	require('conn/conn.php');
	 $sql="insert into `users` (`full_name`,`email`,`user_password`,`gender`,`phone_number`) 
	VALUES('$n','$e','$p','$g','$ph')";
	$result=$conn->query($sql);
    echo "Registered";
}
    else{
        echo "NOT Matched Password";
    }
}
    ?>