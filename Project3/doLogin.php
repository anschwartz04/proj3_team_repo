<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "proj3again";

$conn = mysqli_connect($server, $username, $password, $database);
    $sql = "SELECT pWord FROM student";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
            $datas[] = $row;
        }
    }
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $password = $_POST['password'];
    foreach($datas as $data){
    if($password == $data['pWord']){
    }
}
        $_SESSION["loggedIn"] = "true";
        header("Location:teachers.php");
    }
else{
    echo "Incorrect password";
}

?>