<?php
include('conn.php');
$id=$_REQUEST['id'];
$del="delete from login where id=$id";
$res=mysqli_query($conn,$del);
if($res)
{
    echo "record delete successfully";
    header("Location:show.php");
}
else
{
    echo "record not deleted";
}
?>
