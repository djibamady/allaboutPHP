<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Affichage des recettes</h1>
        <!-- Boucle sur les recettes -->
        <?php
        $mysqlClient = include_once('config/connexion.php');



        // On récupère tout le contenu de la table recipes
        $sqlQuery = 'SELECT * FROM recipes';
        $recipesStatement = $mysqlClient->prepare($sqlQuery);
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();

        // On affiche chaque recette une à une
        foreach ($recipes as $recipe) {

        ?>
            <p><?php echo  htmlspecialchars($recipe['title']) . " est crée par :"; ?>
                <?php echo  htmlspecialchars($recipe['author']); ?></p>
        <?php
        }
        ?>

        <?php require_once 'variables.php'; ?>

    </div>
</body>

</html>