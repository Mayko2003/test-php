<?php
use db\DB;

include_once 'db/db.php';

$db = new DB();


// check POST username and password

$username = $_POST['username'];
$password = $_POST['password'];
$action = $_GET['action'];

if ($action == 'signup') {
    $db->signup($username, $password);
} else if ($action == 'signin') {
    $db->signin($username, $password);
}


?>


