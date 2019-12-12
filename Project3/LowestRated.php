<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/style.css" media="screen">
        <title>Project 3 - Lowest Rated List</title>
    </head>
    <body class = header>
        <header>
            <h1>simple SCHED</h1>
            <aside>Villanova University</aside>
            <hr>
        </header>
        <main class = mainn>
            <br>
            <br>
            <br>
            <nav>
                <br>
                <ul>
                    <li><a href = "index.php">Log In</a></li>
                    <li><a href = "teachers.php">Teachers</a></li>
                    <li><a href = "topRated.php">Top Rated</a></li>
                    <li><a href = "lowestRated.php">Lowest Rated</a></li>
                    <li><a href = "reviewform.php">Write A Review</a></li>
                </ul>
            </nav>
            <section class = boxx>
                <p class = title>Lowest Rated Teachers</p>
                <br>
                <br>
                <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "proj3again";
                
                
                $conn = mysqli_connect($server, $username, $password, $database);
                
                
                    $sql = "select fName, lName, department, avgScore from professor order by avgScore asc";
                    $result = mysqli_query($conn, $sql);
                    $datas = array();
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $datas[] = $row;
                        }
                    }
                
                    foreach($datas as $data){
                        echo $data['fName'] . ' ' . $data['lName'] . ' ' . $data['department'] . ':<br>Average Score: ' . $data['avgScore'] . '<br>';
                    }
                ?>
            </section>
            
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
