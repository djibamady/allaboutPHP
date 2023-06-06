<!-- contact.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- Navigation -->
        <?php include_once('header.php'); ?>



        <!-- Si l'utilisateur existe, on affiche les recettes -->
        <?php if (!isset($loggedUser)) : ?>
            <div class="alert alert-success" role="alert">
                Bonjour <?php echo $_POST['email']; ?> et bienvenue sur le site !
            </div>


        <?php endif; ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>