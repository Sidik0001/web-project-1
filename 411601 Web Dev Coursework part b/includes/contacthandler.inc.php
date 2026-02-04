<?php

$first_name = $last_name = $username = $email = $enquiry = $topic= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $enquiry = $_POST["enquiry"];
    $topic = $_POST["topic"];
    

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO contacts (first_name, last_name, user_name, email, enquiry, topic) VALUES
        (?,?,?,?,?,?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$first_name, $last_name, $username, $email,  $enquiry, $topic]); // Run protect statement

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