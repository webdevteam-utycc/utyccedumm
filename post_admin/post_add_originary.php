<?php
	session_start();
	if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {
	header("location: logout.php");
	}
	if(isset($_POST['post']) && $_POST['tok'] == $_SESSION['token']){
		include("resize-class.php");
		include("config/conf.php");
		include("functions.php");

		$title = $_POST['title'];
		$body = $_POST['body'];

		$randomAppend = rand(0,1000);

		$photoNameArray = $_FILES['images']['name'];
		$photoTemp = $_FILES['images']['tmp_name'];
		$photoSize = $_FILES['images']['size'];
		$photoError = $_FILES['images']['error'];
		$totalPhoto = count($photoNameArray);
		
		$uploaded_date = $_POST['uploaded_date'];
		$admin = $_SESSION['admin_id'];

		compressPhoto($photoNameArray,$photoTemp,$totalPhoto,$randomAppend);

		//trigger exception in a "try" block
		try {
		  checkPhoto($photoNameArray,$totalPhoto);
		  
		  try{
		  	compressPhoto($photoNameArray,$photoTemp,$totalPhoto,$randomAppend);
		  	for($i=0; $i<$totalPhoto; $i++){

		  		$dotIndex = stripos($photoNameArray[$i],".");
				$photoNameString = substr($photoNameArray[$i],0,$dotIndex);
				$photoNameString .= $randomAppend;
				$extension = substr($photoNameArray[$i],$dotIndex+1);
				$extension = strtolower($extension);
				$img = $photoNameString.".jpg";

			  	$resizeObj = new resize("../images/".$img);
			    $resizeObj -> resizeImage(360, 240, 'crop',1000);
			    $resizeObj -> saveImage('../thumbs/'.$img);

			    $photoNameArray[$i] = $img;  		
		  	}

			$photo_string = implode(",", $photoNameArray);

		  	$query = "INSERT INTO post(title,body,upload_date,uploaded_by,images)
			VALUES(:title,:body,:up_d,:up_by,:img)";
			$prepare = $con -> prepare($query);
			$prepare -> execute(array(":title"=>"$title",":body"=>"$body",
			":up_d"=>"$uploaded_date",":up_by"=>"$admin",":img"=>"$photo_string"));
			header("location:post.php?id=$_POST[tok]&s");
		  }

		  catch(Exception $e) {		  	
			  echo 'Error: ' .$e->getMessage()."<br>";
			  echo "<a href='post.php'>BACK</a>";
		  }
		}

		//catch exception
		catch(Exception $e) {
		  echo 'Error: ' .$e->getMessage()."<br>";
		  echo "<a href='post.php'>BACK</a>";
		}
	}
	else{
	    echo "Not OK";
		//header("location:logout.php");
	}
?>