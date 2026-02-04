<?php


$comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["comment"];
    

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO posts (Postcomment) VALUES
        (?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$comment]); // Run protect statement

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