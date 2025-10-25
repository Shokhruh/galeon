<?php get_template_part( 'template-parts/header/header' )?>
    <?php if (is_404()) {
        $title = "<p class='text-danger'>404 <br> Page Not Found</p>";
        $description = "The page you are looking for does not exist.";
    } ?>

    <?php get_template_part( 'template-parts/content/content', 'hero', ['title' => $title, 'description' => $description, 'class' => 'pb200'] ) ?>

<?php get_template_part('template-parts/footer/footer'); ?>
