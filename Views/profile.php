<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <title>User Profile</title>

</head>

<body>

    <div class="profile-container">

        <h1>User Profile</h1>

        <p class="username">
            Username: <?php echo $_SESSION["name"]; ?>
        </p>

        <form action="../Controls/profileControls.php" method="post">

            <div class="form-group">
                <label>Gaming Preference</label>
                <input type="text" name="game_type">
            </div>

            <div class="form-group">
                <label>Ranking</label>
                <input type="text" name="ranking">
            </div>

            <div class="form-group">
                <label>Social Media Link</label>
                <input type="text" name="social_link">
            </div>

            <button type="submit" name="submit">
                Update Profile
            </button>

        </form>

    </div>

</body>

</html>