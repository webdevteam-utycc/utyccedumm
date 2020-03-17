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
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $photo = explode(",",$row['images']);
    if($photo[0]!='ycc.png'){
    for($i=0; $i<count($photo); $i++){
        $url='../images/'.$photo[$i];
        $tmp_url='../thumbs/'.$photo[$i];
        unlink($url);
        unlink($tmp_url);
    }
  }
    $sql="delete from post where id=".$post_id;
    echo $sql;
    $result=mysqli_query($conn,$sql);
    
    if($result){
        header("location:post.php?id=$_GET[tok]&&sd");
        
        
    }
?>
<?php
}
else{
    echo "Not OK";
    //header("location:logout.php");
}
?>