<?php
session_start();
if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {
    header("location: logout.php");
}

if(isset($_POST['post']) && $_POST['tok'] == $_SESSION['token']){
    /*$conn = mysqli_connect("localhost","root","","utycc_base");*/
    include("config/conf.php");
    $post_id=$_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $uploaded_date = $_POST['uploaded_date'];
    $sql="update post set title='{$title}',body='{$body}',upload_date='{$uploaded_date}' where id=".$post_id;
    $result=mysqli_query($conn,$sql);
    var_dump($result);
    if($result){
        header("location:post.php?id=$_POST[tok]&se");
    }
}
?>