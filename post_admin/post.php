<?php
session_start();
if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {
header("location: index.php");
exit();
}
else if($_GET['id'] == $_SESSION['token']){
  $token = $_SESSION['token'];
    include("config/conf.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>UTYCC Web Development</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/post.css">
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/simplePagination.css" />
    <script src="dist/jquery.simplePagination.js"></script>
    <script type="text/javascript">
      function close(){
        document.getElementById("a").style.display="none";
      }

      tinymce.init({
      selector: 'textarea',
      height: 200,
      menubar: true,
      plugins: [
        'advlist autolink lists link charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
      ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css']
    });
    </script>
  </head>
  <body>
  	<div class="wrapper">
  		<div class="container-fluid">
  			<div class="float-div">
          <div class="row justify-content-md-center">
              <div class="col-lg-10">
<?php
  echo "<span class='text-primary'>Hi, ".strtoupper($_SESSION['admin_name'])."</span><br>";
  echo "<small class='text-muted'>Thank you for your participation.</small><br><br>";
?>            </div>
          </div>

  				 <div class="row justify-content-md-center">
			    	<div class="col-lg-10 form-group">
			    		<form method="POST" action="post_add.php" enctype="multipart/form-data">
<?php
    if(isset($_GET['sd'])){ ?>
                            <label id="p2" onclick="document.getElementById('p2').style.display='none'" class="text-success alert">
                                <strong> Successfully Deleted! </strong>
                            </label>
  <?php  }
                            ?>
                            <?php
    if(isset($_GET['se'])){ ?>
                            <label id="p2" onclick="document.getElementById('p2').style.display='none'" class="text-success alert">
                                <strong> Successfully Updated! </strong>
                            </label>
   <?php }
                            ?>
                            <?php
if (isset($_GET['s'])) {
?>
  <label id="p2" onclick="document.getElementById('p2').style.display='none'" class="text-success alert">
    <strong> Successfully Posted! </strong>
  </label>
<?php
}
?>

			    			<input type="text" class="form-control user-input" name="title" placeholder="Enter Post Title" required>
			    			<textarea class="form-control user-input post-body" name="body"></textarea>
                Select Photos:
                <input type="file" name="images[]" class="form-control user-input" multiple>
                Select Posted Date:
                <input type="date" name="uploaded_date" class="form-control user-input" placeholder="11-1-2001" required>
                <input type="hidden" name="tok" value="<?php echo $token; ?>">
			    			<input type="submit" name="post" value="POST" class="btn btn-primary">
                <a href="logout.php" class="btn btn-danger">Log Out</a>
			    		</form>
			        </div>
	    		</div><hr style="width:50%;margin:0 auto;">
	    		<h4 style="width:50%;margin:0 auto;margin-top:10px;margin-bottom:5px;text-align:center;">Uploaded Posts</h4>
   <?php
	$limit = 10;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;

$sql = "SELECT * FROM post ORDER BY upload_date DESC LIMIT $start_from, $limit";
$result = mysqli_query($conn, $sql);
  ?>

	    		 <table class="table table-hover" style="width:83%; margin:0 auto;">
                        <thead>
                        <tr>
                            <th scope='col'>id</th>
                            <th scope='col' style="width:60%;">title</th>
                            <th scope='col'>date</th>
                             <th scope='col'>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td scope='col'><?php echo $row['id'];?></td>
                            <td scope='col' style="font-size:15px;"><?php echo $row['title'];?></td>
                            <td scope='col'><?php echo $row['upload_date'];?></td>
                            <td scope='col'><a href="edit_post.php?id=<?php echo $row['id'];?>&&tok=<?php echo $token;?>" class="btn btn-success btn-sm">Edit</a>&nbsp; <a href="delete_post.php?id=<?php echo $row['id'];?>&&tok=<?php echo $token;?>" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                        <?php  } ?>
                        </tbody>
                    </table>
					<?php
						$sql = "SELECT COUNT(id) FROM post";
						$rs_result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_row($rs_result);
						$total_records = $row[0];
						$total_pages = ceil($total_records / $limit);
						$pagLink = "<nav><ul class='pagination'>";
						for ($i=1; $i<=$total_pages; $i++) {
									 $pagLink .= "<li><a href='post.php?page=".$i."&&id=".$token."'>".$i."</a></li>";
						};
						echo $pagLink . "</ul></nav>";
                    ?>



  			</div>
  		</div>
  	</div>
  </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('.pagination').pagination({
            items: <?php echo $total_records;?>,
            itemsOnPage: <?php echo $limit;?>,
            cssStyle: 'light-theme',
            currentPage : <?php echo $page;?>,
            hrefTextPrefix : 'post.php?page='
        });
    });
</script>

<?php }
else{
  header("location:logout.php");
}
?>
