<?php
    $tableName = "";
    $recipeID = "";

    // find and set which table to pull data from
    if (isset($_GET['location'])) {
        $location = $_GET['location'];

        switch ($location) {
            case "Recent":
                $tableName = "recent_recipes";
                break;
            case "Popular":
                $tableName = "popular_recipes";
                break;
            default: 
                $tableName = "all_recipes";
                break;
        }
    } else {
        $location = "All";
        $tableName = "all_recipes";
    }
    // make sure ID is set
    if (isset($_GET['recipeID'])) {
        $recipeID = $_GET['recipeID'];
    } else {
        echo "Could not find recipe";
        exit();
    }

    try {
        // connect to database and pull information
        require "../../admin_pages/databases/rmConnect.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT recipe_name, prep_time, cook_time, serving_size, recipe_category,  recipe_ingredient, recipe_complexity, recipe_ingredient_list, recipe_directions, recipe_image FROM $tableName WHERE id=:recipeID";

        $stmt = $conn->prepare("$sql");
        $stmt->bindParam(':recipeID', $recipeID);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // fetch information and store it in an array
        $row = $stmt->fetch();
        $recipeInformation = [$row['recipe_name'], $row['prep_time'], $row['cook_time'], $row['serving_size'], $row['recipe_category'], $row['recipe_ingredient'], $row['recipe_complexity'], $row['recipe_ingredient_list'], $row['recipe_directions'], $row['recipe_image']];

        // convert array to JSON
        $recipeInformationJSON = json_encode($recipeInformation);
        echo $recipeInformationJSON;
        $conn = null;
    } catch(PDOException $e) {
        echo $e;
    }
?>