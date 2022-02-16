<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes() ?>>
    <meta charset="<?php ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Montserrat&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <?php wp_head()?>

</head>


<body <?php body_class() ?>>
<!-- <?php bloginfo('template_directory') ?> -->


<header class="container-fluid">

    <!-- Le haut de mon header -->
    <h1>
        <div class="row">
            <div class="col-6 bleu"><?php dynamic_sidebar('haut-gauche') ?>Développeur Web</div>

            <div class="col-6 rouge"><?php dynamic_sidebar('haut-droite') ?></div>
        </div>
</h1>
    <!-- fin haut de header -->

    <!-- barre de navigation -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- fin barre de navigation -->

    <!-- image entete -->

        <div class="row">
            <div class="col-12 vert"><?php dynamic_sidebar('entete') ?></div>
        </div>

    <!-- fin image entete -->

    </header>



