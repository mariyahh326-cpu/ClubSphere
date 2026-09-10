<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>ClubSphere Dashboard</title>
    <link rel="stylesheet" href="../Css/profile.css">
    <link rel="stylesheet" href="../Css/memberDashboard.css">
</head>

<body>

    <div class="dashboard">

                                        <!-- SIDEBAR -->
        <div class="sidebar">

            <img src="../Images/logo.png" class="logo">

            <div class="club-name">ClubSphere</div>

            <div class="welcome">

                <img src="../Images/member.png" class="member-icon">

                <span>Hello, <?php echo $_SESSION["name"]; ?></span>

            </div>


            <div class="menu">

                <a href="#">Teams</a>

                <a href="#">Tournaments</a>

                <a href="#">Events</a>

                <a href="#">Notification</a>

                <a href="#">Reports</a>

                <a href="profile.php">User Profile</a>

            </div>


            <a href="logout.php" class="logout">Logout</a>

        </div>


                  <!-- MAIN CONTENT -->
        <div class="main-content">


                                      <!-- TOP CARDS -->

            <div class="top-cards">

                <div class="card team-card">

                    <img src="../Images/prx.png">

                    <p>PRX</p>

                    <div class="results">

                        <span class="win">W</span>
                        <span class="win">W</span>
                        <span class="draw">D</span>
                        <span class="loss">L</span>

                    </div>

                </div>


                <div class="card wins-card">

                    <img src="../Images/trophy.png">

                    <p>Wins:</p>

                </div>


                <div class="card champion-card">

                    <img src="../Images/champion.png">

                    <p>Champion:</p>

                </div>

            </div>


                                   <!-- UPCOMING EVENTS -->

            <div class="events-card">

                <h2>Upcoming Events</h2>

                <div class="events-box">

                    <div class="events-top"></div>

                    <div class="events-message">
                        There is no upcoming events currently
                    </div>

                </div>

            </div>


        </div>

    </div>

</body>

</html>