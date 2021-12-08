<?php
class Mysql
{
    private $servername = 'localhost';
    private $database = 'test';
    private $username = 'root';
    private $password = '';
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Connection failed: ") . mysqli_connect_error();
        }
    }
    function desconexion()
    {
        mysqli_close($this->conn);
    }

    function validar($user, $password)
    {
        $consulta = mysqli_query($this->conn, "SELECT * FROM `credential` WHERE `user` = '$user' AND `password`='$password'");

        $filas = mysqli_num_rows($consulta);
        if ($filas) {
            
            header('Location: ../principal.php');
        } else {
            echo 'No existe en la base de datos';
        }
    }


    function insertar($nombre, $apellidoM, $apellidoP, $email, $pass, $passD)
    {
        $query = "INSERT INTO user ('','','') VALUES ()";
    }
}

$obj = new Mysql();
