<?php

    require 'db-connection.php';

        $sql = "select avgScore from professor where fName = ? and lName = ?";
        $state = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($state, 'ss', $tFname, $tLname);
        mysqli_stmt_execute($state);
        mysqli_stmt_bind_result($state, $wanted);
        mysqli_stmt_fetch($state);

    if(isset($_GET['form-submit'])) {

        $tFname = $_GET['first'];
        $tLname = $_GET['last'];
        $rating = $_GET['rate'];
        //echo "check for data: <br> $tFname $tLname $rating";

        
        $target = ($wanted + $rating) / 2;
        //echo '<br>' . $target;

        $sql = "update professor set avgScore = '$target' where fName = '$tFname' and lName = '$tLname'";
        if($conn->query($sql) === TRUE) {
            //echo "Record updated successfully";
        } else {
            //echo "error updating record " . $conn->error;
        }
        
        $conn->close();
        
    }

?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/style.css" media="screen">
        <title>Project 3 - Log In</title>
    </head>
    <body class = header>
        <header>
            <h1>simple SCHED</h1>
            <aside>Villanova University</aside>
            <hr>
        </header>
        <main class = main>
            <br>
            <br>
            <br>
            <nav>
                <br>
                <ul>
                    <li><a href = "index.php">Log In</a></li>
                    <li><a href = "teachers.php">Teachers</a></li>
                    <li><a href = "TopRated.php">Top Rated</a></li>
                    <li><a href = "LowestRated.php">Lowest Rated</a></li>
                    <li><a href = "ReviewForm.php">Write A Review</a></li>
                </ul>
            </nav>
            <form method = post action = "teachers.php">
            <button class = move type = submit>Go to Teachers!</button>
        </main>
        <footer>
            <br>
            <div>Bella Paladino,  Andrew Schwartz,  Peter Thabit,  2019.</div>
            <div>Please Note: The reviews collected on Simple SCHED are an assortment of 
            opinions from Villanova University students.</div>
            <div>The accuracy of these reviews can be personally determined by the student profile rating.</div>
        </footer>
    </body>
</html>
    



    