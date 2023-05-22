<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['submit'])){
    $connection = mysqli_connect('localhost', 'root', 'raco1026', 'introphp') or die("Connection failed: " .mysqli_connect_error());

    $usersTable = '
        CREATE TABLE users (
            id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username varchar(50) NOT NULL,
            email varchar(50) NOT NULL,
            password varchar(50) NOT NULL,
            bday DATE NOT NULL
        )
    ';

    $demoTable = '
        CREATE TABLE users (
            id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username varchar(50) NOT NULL,
            email varchar(50) NOT NULL,
            password varchar(50) NOT NULL,
            bday DATE NOT NULL
        )
    ';

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['bday'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $bday = $_POST['bday'];

        $addUser = "INSERT INTO `users` (`username`, `email`, `password`, `bday`) VALUES ('$name', '$email', '$password', '$bday')";

        $query = mysqli_query($connection, $addUser);

        if($query){
            echo 'Entry successfull';
            echo 'Username, email , password, bday: ', $name, ', ', $email, ', ', $password, ', ', $bday;
        }else{
            echo 'Error occurred';
        }
    }else{
        echo 'Wrong data';
    }
}
?>