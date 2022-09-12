<?php
require '../partials/header.php';

//retrieve user fron db
// if (isset($_SESSION['user-id'])) {
//     $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
//     $query = "SELECT avatar FROM users WHERE id=$id ";
//     $result = mysqli_query($connection, $query);
//     $avatar = mysqli_fetch_assoc($result);
// }

//check login status
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}
