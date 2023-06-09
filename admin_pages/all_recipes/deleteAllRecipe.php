<?php
    session_start();

    if ($_SESSION['validUser']) {
        $eventID = $_GET["eventID"];  

        // do the delete
        try {
            require "../databases/rmConnect.php";
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql = "DELETE FROM all_recipes WHERE id=:eventID";

            $stmt = $conn->prepare("$sql");
            $stmt->bindParam(':eventID', $eventID);
            
            $stmt->execute();

            header("Location: viewAllRecipes.php");
        } catch(PDOException $e) {
            echo "Oops, something went wrong";
        }
    } else {
        header("Location: ../loginPage.php");
    }
?>