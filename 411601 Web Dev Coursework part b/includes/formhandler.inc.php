<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $interest = $_POST["interest"];
    

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email, first_name, last_name, interest) VALUES
        (?,?,?,?,?,?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email, $first_name, $last_name, $interest]); // Run protect statement

        $pdo = null;
        $stmt = null; 

        header("Location: ../index.php"); // Return to homepage


        die();
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
        header("Location: ../index.php");
    }