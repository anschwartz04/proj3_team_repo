<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "proj3again";


$conn = mysqli_connect($server, $username, $password, $database);


//usernames to database
    $sql = "SELECT * FROM nameofdatabase"
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if(mysqli_num_rows($result) >0){
        while($row = myqli_fetch_assoc($result)){
            $datas[] = $row;
        }
    }
}
    foreach($datas as $data){
        echo $data['COLUMN NAME']
    }

function avg_score_user($datas){
    while($datas != )
        $avg = 0;
        foreach($datas as $data){}
            $avg += $data['totalScore'];
        }
        for(i=1; i!=0;i++)
        $avg = $data['totalScore']/i;
    }
}

function avg_score_professor($datas){
    while($datas != )
        $avg = 0;
        foreach($datas as $data){}
            $avg += $data['totalScore'];
        }
        for(i=1; i!=0;i++)
        $avg = $data['totalScore']/i;
    }
}
//login info
session_start();
$server = "localhost";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($server, $username, $password, $database);
    $sql = "SELECT pWord FROM student";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if(mysqli_num_rows($result) >0){
        while($row = myqli_fetch_assoc($result)){
            $datas[] = $row;
        }
    }
}
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $password = $_POST['password'];
    foreach($datas as $data){
    if($password == "$data['pWord']"){
    }
}
        $_SESSION["loggedIn"] = "true";
        header("Location:teachers.php");
    }
else{
    echo "Incorrect password";
}
