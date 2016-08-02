<?php

require_once('../includes/initialize.php');

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";

    // Check database to see if username exist.
    $found_user = User::find_by_username($username);
    if (!$found_user)
    {
        $found_user = User::find_by_mail($mail);
        if (!$found_user)
        {

            $user->username = $username;
            $user->password = $password;
            $user->mail = $mail;
            $user->type_ID = 1001; // Customer

            $result = User::create($user);
            if ($result)
            {
                $json = array("status" => 1, "info" => "Successfully Registered");
            }
            else
            {
                $json = array("status" => 0, "msg" => "Database Connection Error");
            }
        }
        else
        {
            $json = array("status" => 0, "msg" => "Invalid mail");
        }
    }
    else
    {
        $json = array("status" => 0, "msg" => "Invalid Username");
    }
}
else
{
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

header('Content-type: application/json');
echo json_encode($json);

