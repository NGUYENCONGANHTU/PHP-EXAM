<?php 
$severname ="localhost";
$username ="root";
$password ="";
$database ="quanlidienthoai";

$conn= mysqli_connect($severname,$username,$password,$database);
if(!$conn){
    echo("Defeat");
}else{
    echo("Successfully");
}
if(isset($_GET['delete'])){
    $user = $_GET['delete'];
    $conn -> query("DELETE FROM contacts WHERE ID='$user'");
    header("Location: manager.php");
}
?>