<?php

require_once('../includes/initialize.php');

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if (!empty($username) && !empty($password))
    {
        $result = User::authenticate($username, $password);
        unset($result['password']);
        unset($result['status']);

        if ($result)
        {
            $json = array("status" => 1, "info" => $result);
        }
        else
        {
            $json = array("status" => 0, "msg" => "Wrong username or password");
        }
    }
    else
    {
        $json = array("status" => 0, "msg" => "Wrong username or password");
    }
}
else
{
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

header('Content-type: application/json');
echo json_encode($json);
