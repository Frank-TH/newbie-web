<?php
if (isset($_POST['login'])) {
    include '../configuration/conexion.php';
    session_start();
    $user = $_POST['user'];
    $password = $_POST['pass'];

    $query = "SELECT customer.name FROM `credential` inner join `customer` on `credential.id` = customer.id where `credential.user` = '$user';";
    


    $obj->validar($user, $password);
}
