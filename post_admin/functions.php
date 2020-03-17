<?php
function checkPhoto($photoNameArray,$totalPhoto) // checking image extension
	{
		$whiteList = array("JPG","JPEG","PNG","GIF","jpg","jpeg","png","gif");
		$available = 0;
		for($i=0; $i<$totalPhoto; $i++)
		{
			$dotIndex = stripos($photoNameArray[$i],".");
			$afterDotString = substr($photoNameArray[$i],$dotIndex+1);
			if(in_array($afterDotString, $whiteList)){				
				if (!file_exists("../images/" . $photoNameArray[$i]))
				{
					$available++;
				}
			}			
		}
		if($available==$totalPhoto){ 
			return 1; 
		} // return 1 if image extension is acceptable
		else{ 
			throw new Exception("Invalid File Format"); 
		}
	}

	function compressPhoto($photoNameArray,$photoTemp,$totalPhoto,$random)
	{
		$count = 0;
		for($k=0; $k<$totalPhoto; $k++)
		{		
			$dotIndex = stripos($photoNameArray[$k],".");
			$photoNameString = substr($photoNameArray[$k],0,$dotIndex);
			$photoNameString .= $random;
			$extension = substr($photoNameArray[$k],$dotIndex+1);
			$extension = strtolower($extension);
			$size=filesize($photoTemp[$k]);
			if($size < 1*1024)
			{
				move_uploaded_file($photoTemp[$k],"../images/".$photoNameString.".jpg");
			}
			else if($size > 1*1024)
			{
				$dotIndex = stripos($photoNameArray[$k],".");
				$photoNameString = substr($photoNameArray[$k],0,$dotIndex);
				$photoNameString .= $random;
				$extension = substr($photoNameArray[$k],$dotIndex+1);
				$extension = strtolower($extension);

				if($extension=="jpg" || $extension=="jpeg" || $extension=="JPG" || $extension=="JPEG")
				{
					$src = imagecreatefromjpeg($photoTemp[$k]);
					list($width,$height)=getimagesize($photoTemp[$k]);

					$tmp = imagecreatetruecolor($width, $height);
					imagecopyresampled($tmp,$src,0,0,0,0,$width,$height,$width,$height);

					$filename = "../images/".$photoNameString.".".$extension;
					imagejpeg($tmp,$filename,40);
				}
				else if($extension=="png" || $extension=="PNG")
				{
					$src = imagecreatefrompng($photoTemp[$k]);
					list($width,$height)=getimagesize($photoTemp[$k]);

					$tmp = imagecreatetruecolor($width, $height);
					imagecopyresampled($tmp,$src,0,0,0,0,$width,$height,$width,$height);

					$filename = "../images/".$photoNameString."."."jpg";

					imagejpeg($tmp,$filename,40); 
				}
				imagedestroy($src);
				imagedestroy($tmp);
			}
			$count++;
		}
				
		if($count==$totalPhoto){ 
			return 1; 
		} // return 1 if all images compression is completed
		else{ 
			throw new Exception("Problem occurs in photo compression."); 
		}
	}
		function checkValidPostId($id){
		include("config/conf.php");
		$query = "SELECT id FROM post ORDER BY id";
		$prepare = $con -> prepare($query);
		$prepare -> execute();
		$indexArray = array();
		$index = 0;
		while ($row = $prepare -> fetch()) {
			$indexArray[$index] = $row['id'];
			$index++;
		}
		if(in_array($id, $indexArray)){
			return TRUE;
		}
		else
			return FALSE;
	}
?>















