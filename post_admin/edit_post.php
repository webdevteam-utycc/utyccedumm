
<?php
session_start();
if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {
    header("location: logout.php");
}
if($_GET['tok'] == $_SESSION['token']){
    $token = $_SESSION['token'];
    include("resize-class.php");
    include("config/conf.php");
    include("functions.php");
/*$conn = mysqli_connect("localhost","root","","utycc_base");*/
$post_id=$_GET['id'];
$sql="select * from post where id=".$post_id;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>UTYCC Web Development</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/post.css">
        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
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
                <div class="float-div" style="width:80%;">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-10 form-group">
                            <form method="POST" action="edit_post_process.php">
                                <input type="text" class="form-control user-input" name="title" value="<?php echo $row['title'];?>" required>
                                <textarea class="form-control user-input post-body" name="body"><?php echo $row['body'];?></textarea>
                                Select Posted Date:
                                <input type="date" name="uploaded_date" class="form-control user-input" value="<?php echo $row['upload_date'];?>" required>
                                 <input type="hidden" name="tok" value="<?php echo $token; ?>">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <input type="submit" name="post" value="UPDATE" class="btn btn-primary">
                                <a href="logout.php" class="btn btn-danger">Log Out</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
}
   else{
       echo "Not OK";
       //header("location:logout.php");
   }
?>
    

