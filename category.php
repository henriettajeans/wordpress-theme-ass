<?php
get_header();

$categories = get_the_category();
foreach ($categories as $cat) :
?>
    <?php echo $cat->name; ?>
<?php endforeach; ?>



<section class="category-container">
    <!-- <h1>
        <?php

        the_category(); ?> </h1> -->

    <?php
    if (have_posts()) : while (have_posts()) : the_post();

    ?>
            <div class="margin-container"></div>
            <article class="post-container">


                <!-- Länka inläggets id för att komma till sidan? -->
                <h2><a href="<?php the_permalink(); ?>"><?php
                                                        the_title();
                                                        ?> </a>
                </h2>
                <div id="img-container">
                    <?php the_post_thumbnail() ?>
                </div>

                <div class="margin-container"></div>

                <?php
                the_excerpt();
                ?>
                <article class="post-container_desc">
                    <?php
                    the_date();
                    the_category();
                    the_author_posts_link();
                    wp_get_archives();
                    ?>
                </article>

            </article>
    <?php

        endwhile;
    endif;

    ?>

</section>

<?php
next_posts_link('Äldre inlägg', $query->max_num_pages);
previous_posts_link('Nyare inlägg');

wp_reset_postdata();

get_footer();
