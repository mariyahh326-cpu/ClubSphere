<?php

session_start();

require_once "../Models/userModels.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $password = $_POST["password"];

    $result = loginUser($name);

    if(mysqli_num_rows($result) > 0)
    {
        $user = mysqli_fetch_assoc($result);
                                  

                             //Checking credentials
    
        if(password_verify($password, $user["password"]))
        {
            if($user["status"] == "Approved")
            {
               $_SESSION["u_id"] = $user["u_id"];
               $_SESSION["name"] = $user["name"];
               $_SESSION["role"] = $user["role"];

               echo "Login Successful!";
            }
            else if($user["status"] == "Pending")
            {
                echo "Your account is waiting for approval.";
            }
            else if($user["status"] == "Rejected")
            {
                echo "Your account has been rejected.";
            }
        }
        else
        {
            echo "Incorrect Password!";
        }
    }
    else
    {
        echo "User not found!";
    }
}

?>