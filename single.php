<?php
// wp_nav_menu();
get_header();
the_post();

?>
<section>
    <h2>
        <?php
        the_title(); ?>
    </h2>

    <article>
        <?php
        the_content();


        ?>
        <img id="img-container_item" src=" <?php the_post_thumbnail() ?> ">
    </article>
    <p> <?php the_author_posts_link() ?>
    </p>
    <p> Såhär många inlägg har <?php
                                the_author(); ?> gjort: <?php
                                                        echo get_the_author_posts();
                                                        ?>
    </p>
    <p>
        <?php the_category(); ?>
    </p>

</section>
<?php
get_footer();
