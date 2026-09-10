<?php

require_once "../Models/userModels.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $u_id = $_POST["u_id"];

    if(isset($_POST["approve"]))
    {
        updateUserStatus($u_id, "Approved");
    }
    else if(isset($_POST["reject"]))
    {
        updateUserStatus($u_id, "Rejected");
    }

    header("Location:../Views/adminMembers.php");
    exit();
}

$pendingUsers = getPendingUsers();

?>