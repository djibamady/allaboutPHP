 <?php require_once 'variables.php'; ?>

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
         <?php foreach ($recipes as $recipe) : ?>
             <!-- si la clé existe et a pour valeur "vrai", on affiche -->
             <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) :

                    foreach ($recipes as $recipe) {
                        echo '<h2>' . $recipe['title'] . '</h2>';
                        echo '<p><strong>Auteur:</strong> ' . $recipe['author'] . '</p>';
                        echo '<p>' . $recipe['recipe'] . '</p>';

                        if ($recipe['is_enabled']) {
                            echo '<p>La recette est activée.</p>';
                        } else {
                            echo '<p>La recette est désactivée.</p>';
                        }

                        echo '
                <hr>';
                    }

                endif; ?>
         <?php endforeach ?>
     </div>
 </body>

 </html>