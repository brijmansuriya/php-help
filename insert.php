<?php include 'conn.php';?>
<?php 


echo $name=$_REQUEST['name'];
echo $Email=$_REQUEST['Email'];
echo $job=$_REQUEST['job'];
echo $password=$_REQUEST['password'];

$sql="INSERT INTO login (name,email,job,password) VALUES ('$name','$Email','$job','$password')";



if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. ";
}
header('Location:show.php');

?>