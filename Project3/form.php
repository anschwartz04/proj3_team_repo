<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/style.css" media="screen">
        <title>Project 3 - Review Form</title>
    </head>
    <body class = header>
        <header>
            <h1>simple SCHED</h1>
            <aside>Villanova University</aside>
            <hr>
        </header>
        <main class = mainnn>
            <br>
            <br>
            <br>
            <nav>
                <br>
                <ul>
                    <li><a href = "index.php">Log In</a></li>
                    <li><a href = "teachers.php">Teachers</a></li>
                    <li><a href = "top.php">Top Rated</a></li>
                    <li><a href = "lowest.php">Lowest Rated</a></li>
                    <li><a href = "form.php">Write A Review</a></li> 
                </ul>
            </nav>
            <section class = box>
                <p class = title>Review</p>
                <br>
                <br>
                <hr>
                <form class = review action='paymentReceipt.html' method='GET'>
                    <p>Your Information</p>
                    <input class='rev' type='text' id='studId' name='studId' placeholder='Student Id' required='required'/>
                    </br>
                    </br>
                    <input class='rev' type='text' id='major' name='major' placeholder='Major' required='required'/>
                    </br>
                    <p>Teacher Information</p>
                    <input class='rev' type='text' id='first' name='first' placeholder='First Name' required='required'/>
                    </br>
                    </br>
                    <input class='rev' type='text' id='last' name='last' placeholder='Last Name' required='required'/>
                    </br>
                    </br>
                    <input class='rev' type='text' id='class' name='class' placeholder='Class' required='required'/>
                    </br>
                    </br>
                    <input class='rev' type='date' id='Date' name='Date' required='required'/>
                    </br>
                    <p>Rating (out of 5)</p>
                    <label><input type='radio' name='rate' id='one' value='1' required='required'/>1</label>
                    <label><input type='radio' name='rate' id='two' value='2' required='required'/>2</label>
                    <label><input type='radio' name='rate' id='three' value='3' required='required'/>3</label>
                    <label><input type='radio' name='rate' id='four' value='4' required='required'/>4</label>
                    <label><input type='radio' name='rate' id='five' value='5' required='required'/>5</label>
                    <br>
                    <p>Comments</p>
                    <input class='com' type='text' id='comment' name='comment'/>
                    </br>
                    </br>
                    <button onclick=''>Submit</button>
                </form>
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