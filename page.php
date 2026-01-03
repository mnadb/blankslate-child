
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
       