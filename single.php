<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <?php
    if (have_posts()) {
        the_post(); ?>


        <div class="row m-5 justify-content-center">

            <div class="col-md-10 p-1 mb-5 shadow border rounded bg-dark">

                <div class="card">
                    <a href="<?php echo (get_the_permalink()); ?>" class="btn mb-4">
                        <h1 class="p-2 rounded shadow text-center bg-dark text-white"><?php the_title(); ?></h1>
                    </a>

                    <?php if (!get_field("skills")) { ?>

                        <div class="card-img-top text-center m-3">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text m-2"><?php the_content(); ?></a>
                        </div>

                        <div class="card-footer text-muted text-center">
                            <b>Date:</b> <?php the_date(); ?> &nbsp;||&nbsp; <b> Categories:</b><?php the_category(); ?>
                        </div>

                    <?php } else { ?>
                        <?php if (get_field("skills") < 35) { ?>
                            <div class="ml-4 mr-4 mb-4 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-danger rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else if (get_field("skills") > 35 && get_field("skills") < 65) { ?>
                            <div class="ml-4 mr-4 mb-4 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-warning rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="ml-4 mr-4 mb-4 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-success rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>

            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php get_footer(); ?>