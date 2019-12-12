<!DOCTYPE html>
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
            <div class=form>
               <form method=post action="doLogin.php">

                    <input class='input' type='text' id='username' name='username' placeholder="username"/>
                    <br/>
                    <input class ='input' type='password' id='password' name='password' placeholder="password"/>
                    <br/>
                    <button type = 'submit'>Submit</button>
                </form>
            </div>

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
