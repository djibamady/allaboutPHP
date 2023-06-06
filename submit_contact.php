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

        <?php include_once('header.php'); ?>
        <?php
        if (
            (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
            || (!isset($_GET['message']) || empty($_GET['message']))
        ) {
            echo ('Il faut un email et un message valides pour soumettre le formulaire.');

            header('Location: index.php');
        } else {
        ?>
            <h1>Message bien reçu !</h1>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo strip_tags(htmlspecialchars($_GET['email'])); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags(htmlspecialchars($_GET['message'])); ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <?php
    if (
        (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
        || (!isset($_GET['message']) || empty($_GET['message']))
    ) {
        echo ('Il faut un email et un message valides pour soumettre le formulaire.');
    }
    ?>
</body>

</html>