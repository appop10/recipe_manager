<?php
    try {
        require "../../admin_pages/databases/rmConnect.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id, recipe_name, recipe_category, recipe_ingredient, recipe_complexity, recipe_image FROM popular_recipes";

        $stmt = $conn->prepare("$sql");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // make parallel arrays for the recipe information
        $count = 0;
        $recipeIDs = [];
        $recipeNames = [];
        $recipeCategories = [];
        $recipeIngredients = [];
        $recipeComplexities = [];
        $recipeImages = [];

        while ($row = $stmt->fetch()) {
            $recipeIDs[$count] = $row['id'];
            $recipeNames[$count] = $row['recipe_name'];
            $recipeCategories[$count] = $row['recipe_category'];
            $recipeIngredients[$count] = $row['recipe_ingredient'];
            $recipeComplexities[$count] = $row['recipe_complexity'];
            $recipeImages[$count] = $row['recipe_image'];
            $count++;
        }

        // store all the recipe information in one array and convert to JSON
        $recipeInformation = [$recipeIDs, $recipeNames, $recipeCategories, $recipeIngredients, $recipeComplexities, $recipeImages];

        $recipeInformationJSON = json_encode($recipeInformation);

        echo $recipeInformationJSON;
        $conn = null;
    } catch(PDOException $e) {
        echo $e;
    }
?>