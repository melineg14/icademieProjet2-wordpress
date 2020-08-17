<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printing 3D</title>
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img id="logo-header" src=" <?= get_template_directory_uri() . "/assets/images/general/logo.png" ?> " alt="logo de l'entreprise Printing3D">
        <div class="collapse navbar-collapse">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
            ])
            ?>
        </div>
    </nav>