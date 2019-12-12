<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/style.css" media="screen">
        <title>Project 3 - Teacher List</title>
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
                <p class = title>Teachers</p>
                        <?php
                            echo "<br><br><br><br><br>"; 
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "proj3again";
                        
                        
                        $conn = mysqli_connect($server, $username, $password, $database);
                        
                        
                            $sql = "select fName, lName, department, avgScore, empID, comments from professor";
                            $result = mysqli_query($conn, $sql);
                            $datas = array();
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $datas[] = $row;
                                }
                            }
                        
                            foreach($datas as $data){
                            
                                echo '<a href = teachers.php?teacher=' . $data['empID'] . '>' . $data['fName'] . ' ' . $data['lName'] . '</a><br><br><br>';
                            }
                        ?>

            </section>
            <aside class = lbox>
                <br>
                <br>
                  
                <p class = title>Teacher Details</p>
                <br>
                <br>
                <hr>
                <br>
                <p class = type>Department:</p>
                <div class = type>
                    <?php  
                    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                        if (isset($_GET['teacher'])) {
                          $requestedTeacher = $datas[$_GET['teacher'] - 1];
                            echo $requestedTeacher['department'] . ' ';
                            }
                        }
                    ?>
                </div>
                <br>
                <br>
                <p class = type>Average Score:</p>
                <?php  
                    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                        if (isset($_GET['teacher'])) {
                          $requestedTeacher = $datas[$_GET['teacher'] - 1];

                            echo $requestedTeacher['avgScore'] . ' ';
                            
                            }
                        }
                ?>
            </aside>
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