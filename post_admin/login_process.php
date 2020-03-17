<?php
	session_start();
	include("config/conf.php");
	if(isset($_POST['login']) && $_POST['tok'] == $_SESSION['token']) {

		$name = strtolower($_POST['name']);
		$name = addslashes($name);
		$pass = $_POST['pass'];
		$pass = hash("sha512", $pass);

		$query = "SELECT password 
		 		  FROM admin 
		 		  WHERE admin_name = :name";
		$prepare = $con -> prepare($query);
		$prepare -> execute(array(":name"=>"$name"));
		$check = $prepare -> fetch();
		$rowCount = $prepare -> rowCount();
		global $pre;
		if($rowCount == 1) {
			$sql = "SELECT id FROM admin WHERE password = :pass";
			$pre = $con -> prepare($sql);
			$pre -> execute(array(":pass"=>"$pass"));
			$row = $pre -> fetch();
			$count = $pre -> rowCount();
			if($count == 1){		
			 	$_SESSION['admin_id'] = $row['id'];
			 	$_SESSION['admin_name'] = $name;
			 	header("location:post.php?id=$_POST[tok]");
			 	if(!header("location:post.php?id=$_POST[tok]"))
			 	{
			 		echo "<a href='post.php?id=$_POST[tok]'>Go to Post.</a>";
			 	}
			}
			else{
				header("location: index.php");
			}
		}
	}
	else{
		header("location: index.php");
	}
?>