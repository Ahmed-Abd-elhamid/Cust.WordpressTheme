<?php get_header(); ?>


<div class="container">

    <ul class="tilesWrap">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <li>
                    <h2><?php the_title(); ?></h2>

                    <p>
                        <div class="card-img-top text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    </p>

                    <a href="<?php echo (get_the_permalink()); ?>" class="btn"><button class="bg-light text-dark h5">Go to</button></a>
                </li>

        <?php
            }
        }
        ?>

    </ul>
</div>
<?php get_footer(); ?>