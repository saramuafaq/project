<?php
if(isset($_POST['submit']))
{
	$u=$_POST['email'];
	$p=$_POST['password'];
	require('conn/conn.php');
	$sql="select * from `users` 
	where `email`='$u' and `user_password`='$p'";
	$result=$conn->query($sql);
	$num=$result->num_rows;
	if($num==0)
	{
		echo"Incorrect User or Password";
	}
	else
	{
		if($row=$result->fetch_assoc())
		{
			$title=$row['title'];
			@session_start();
			$u_id=$row['user_id'];
			$_SESSION['u_id']=$u_id;
		}
		if($title==0)
		{
		//header('Location:student.php');
            print"<script type='text/javascript'>window.location='profile.html'</script>";
		}
		elseif($title==1)
		{
			//header('Location:home.php');
            print"<script type='text/javascript'>window.location='admin.php'</script>";
		}
        		elseif($title==2)
		{
			//header('Location:home.php');
            print"<script type='text/javascript'>window.location='instructor.php'</script>";
		}
	}
}
?>