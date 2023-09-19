<?php
get_header();



?>

<section>
    <h1><?php the_title(); ?></h1>
    <?php

    if (have_posts()) : while (have_posts()) : the_post();

    ?>
            <section>
                <?php the_content(); ?>
            </section>
            TEST
            <p><?php echo post_type_archive_title(); ?></p>

    <?php

        endwhile;
    endif;
    ?>
</section>
<article class="sidebar_container">
    <?php if (is_active_sidebar('sidebar-widget-area')) : ?>
        <div id="sidebar">
            <?php dynamic_sidebar('sidebar-widget-area'); ?>
        </div>
    <?php endif; ?>

    <!-- <?php if (is_active_sidebar('left-sidebar')) : ?>
        <ul id="sidebar">
            <?php dynamic_sidebar('left-sidebar'); ?>
        </ul>
    <?php endif; ?> -->
</article>
<?php


get_footer(); ?>