<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>WinPredictor</title>

</head>

<body>

    <header>
        <div class="navbar" id="navbar">
            <div class="nav-items">
                <div class="nav-logo">
                    <img src="images/Logo.png" alt="">
                </div>
                <div class="nav-links">
                    <ul>

                        <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a href="about.html"><i class="fa fa-user" aria-hidden="true"></i> About Project</a></li>
                        
                    </ul>
                </div>
                <div class="menu-btn">
                    <i id="bars" class="fa-solid fa-bars fa-xl active" aria-hidden="true"></i>
                    <i id="close" class="fa fa-times fa-xl" aria-hidden="true"></i>

                </div>
            </div>
        </div>
        <div id="hamburger-menu" class="hamburger-menu">
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href=""><i class="fa fa-user" aria-hidden="true"></i> About Project</a></li>
            
        </div>
    </header>
    <main>
        <div class="containerC">
            <h1 align="center">IPL Win Predictor</h1>

            <div class="Form-container">

          

                <form action="predict.php" method="post">
                    Batting Team : 
                    <select name="batting-team" id="batting-team">
                        <!-- <option value="" selected>Select a team</option> -->

                        <option value="SRH">Sunrisers Hyderabad</option>
                        <option value="MI">Mumbai Indians</option>
                        <option value="RCB">Royal Challengers Bangalore</option>
                        <option value="KKR">Kolkata Knight Riders</option>
                        <option value="KXIP">Kings XI Punjab</option>
                        <option value="CSK">Chennai Super Kings</option>
                        <option value="RR">Rajasthan Royals</option>
                        <option value="DC">Delhi Capitals</option>


                    </select><br><br>
                    Bowling-team:
                    <select name="bowling-team" id="bowling-team">
                        
                        <!-- <option value="" selected>Select a team</option> -->
                        <option value="SRH">Sunrisers Hyderabad</option>
                        <option value="MI">Mumbai Indians</option>
                        <option value="RCB">Royal Challengers Bangalore</option>
                        <option value="KKR">Kolkata Knight Riders</option>
                        <option value="KXIP">Kings XI Punjab</option>
                        <option value="CSK">Chennai Super Kings</option>
                        <option value="RR">Rajasthan Royals</option>
                        <option value="DC">Delhi Capitals</option>

                    </select><br><br>


                    Select Host City:
                    <select name="city" id="city">
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Indore">Indore</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Cape Town">Cape Town</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Port Elizabeth">Port Elizabeth</option>
                        <option value="Durban">Durban</option>
                        <option value="Centurion">Centurion</option>
                        <option value="East London">East London</option>
                        <option value="Johannesburg">Johannesburg</option>
                        <option value="Kimberley">Kimberley</option>
                        <option value="Bloemfontein">Bloemfontein</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Cuttack">Cuttack</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Dharamsala">Dharamsala</option>
                        <option value="Visakhapatnam">Visakhapatnam</option>
                        <option value="Pune">Pune</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Abu Dhabi">Abu Dhabi</option>
                        <option value="Sharjah">Sharjah</option>
                        <option value="Sharjah">Sharjah</option>
                        <option value="Mohali">Mohali</option>
                        <option value="Bengaluru">Bengaluru</option>
                    </select><br><br>
                    Target:
                    <input type="number" name="target" id="target">
                    Current Score:
                    <input type="number" name="score" id="score"><br><br>
                    Overs Completed:
                    <input type="number" name="overs-completed" id="overs-completed">
                    Wickets Out:
                    <input type="number" name="wickets-out" id="wickets-out">
                    <br><br>
                    <button type="submit">Predict Probability</button>
      
                </form>

                <div class="resultContainer">
                    <?php 
                        if (isset($_SESSION['output'])) {
                            echo $_SESSION['output'];
                        }
                    
                    ?>
                    
                </div>


            </div>

            

        </div>
    </main>
    <script src="main.js">

    </script>
</body>

</html>