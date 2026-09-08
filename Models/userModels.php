<?php
require_once "dbConnect.php";
function registerUser($name,$uni_id, $email_id, $password)
{
    $conn=dbConnection();

    if($conn){
        $sql="INSERT INTO users (name, uni_id, email_id, password) Values (?,?,?,?)";


        $stmt=mysqli_prepare($conn,$sql);
        
        mysqli_stmt_bind_param(
            $stmt,
            "ssss",
            $name,
            $uni_id,
            $email_id,
            $password
        );

        if(mysqli_stmt_execute($stmt))
        {
            return true;

        }
        else{
            return false;

        }
    }
    else{
        return false;
    }
}
                         //check if existing

function checkUserExists($name, $email_id, $uni_id)
{
    $conn = dbConnection();

    $sql = "SELECT u_id, name, email_id, uni_id
            FROM users
            WHERE name = ? OR email_id = ? OR uni_id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $name,
        $email_id,
        $uni_id
    );

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    return $result;
}

function loginUser($name)
{
    $conn = dbConnection();

    $sql = "SELECT u_id, name, email_id, uni_id, password, role, status
            FROM users
            WHERE name = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "s",
        $name
    );

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    return $result;
}
?>

