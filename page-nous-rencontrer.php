<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <title>Planty</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <?php get_header();  // inclure le fichier header.php 
    ?>


    <main>
    
            <!--Conteneur de superposition (feuilles + canette)-->
          
                <?php the_content(); ?>
   

    </main>
    <?php get_footer();  // inclure le fichier footer.php 
    ?>
    <?php wp_footer(); ?>
</body>

</html>   
