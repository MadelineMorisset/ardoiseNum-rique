<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/23c1a897ea.js" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="./assets/script.js"></script>
    <title>Ardoise Numérique</title>
</head>

<body>
    <?php include('./views/header.php');?>

    <main>
        <h1 class="main-h1">ARDOISE NUMÉRIQUE</h1>

        <section>
            <?php include('./models/slate.php'); ?>
            <?php displaySlates(); ?>
        </section>
    </main>
</body>

</html>