<?php 

require_once 'crud.php';

// Define PDO database connection parameters and store each of them into a variable.
$host = 'localhost';
$name = 'test_db';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$name";

// Use try and catch block to execute the code and to handle possible errors.
try {

    // This line of code is the database connection.
    $pdo = new PDO($dsn, $user, $pass);

    // This line of code sets the error mode of PDO to be PDO Exception.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    // This line of code gets executed if there is an error and it displays the error message.
    echo 'There was an error while connecting to the database: ' . $e->getMessage();

}

$crud = new crud($pdo);

?>