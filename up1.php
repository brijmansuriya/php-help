<?php include 'conn.php';?>
<?php

echo $id=$_POST['id'];
$name=$_POST['name'];
$Email=$_POST['email'];
$job=$_POST['job'];
$password=$_POST['password'];

$sql="UPDATE login SET id=$id,name='$name',email='$Email',job='$job',password='$password' WHERE id=$id";
// UPDATE `login` SET `id`=$id,`name`=$name,`email`=$Email,`job`=$job,`password`=$password id=$id

$res=mysqli_query($conn,$sql);

if($res)
{
    echo "Records added successfully.";
    header('Location:show.php');

} else{
    echo "ERROR: Could not able to execute $sql. ";
}

?>