<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De onderstaande regel code gebruikt de WordPress-functies bloginfo() welke de naam en de omschrijving van de applicatie ophaalt -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- De onderstaande regel code gebruikt de WordPress-functie get_stylesheet_uri() om de URL van het huidige thema's style.css-bestand op te halen en dit te koppelen aan het stijlblad van je website. -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
</head>

<body>
    <?php require_once "header.php"; ?>

    <main>
    <!-- De onderstaande regels code kijkt of en hoeveel posts er zijn en plaatst deze op de pagina.  -->
    <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <div class="entry-content">
                        
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>
                </article>
                    
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>Geen berichten gevonden.</p>
        <?php endif; ?>
    </main>


    <footer>
        <?php
   	require_once "footer.php"; ?>
    </footer>
</body>
</html>