<?php get_header(); ?>

<!-- Page Content -->
<div class="container">
    <div class="row justify-content-end">
        <?php get_sidebar(); ?>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <!-- Blog Entries Column -->
                <div class="col-md-9 p-2">

                    <!-- Blog Post -->
                    <div class="card mb-3">
                        <a href="<?php echo (get_the_permalink()); ?>" class="btn">
                            <h1 class="m-1 mb-4 p-2 rounded shadow text-center bg-dark text-white"><?php the_title(); ?></h1>
                        </a>

                        <div class="card-img-top text-center">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?php the_content(); ?></a>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <b>Date:</b> <?php the_date(); ?> &nbsp;||&nbsp; <b> Categories:</b><?php the_category(); ?>
                        </div>
                    </div>

                </div>

            <?php
            }
        } else {
            ?>
            <div class="col-md-9 p-2">
                <div class="card">
                    <h1 class="m-3 border shadow text-center bg-danger text-white">No Skills</h1>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <hr>
    <div class="row justify-content-end">
        <?php
        $arg = array(
            'post_type' => 'skills',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($arg);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="col-md-9">
                    <div class="card">
                        <a href="<?php echo (get_the_permalink()); ?>" class="btn rounded">
                            <h2 class="p-auto rounded shadow text-center bg-info text-dark"><?php the_title(); ?></h2>
                        </a>
                        <?php if (get_field("skills") < 35) { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-danger rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else if (get_field("skills") > 35 && get_field("skills") < 65) { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-warning rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-success rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php
            }
        } else {
            ?>
            <div class="col-md-9 p-2">
                <div class="card">
                    <h1 class="m-3 border shadow text-center bg-danger text-white">No Skills</h1>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <hr>
    <div class="row justify-content-end">
        <?php
        $arg = array(
            'post_type' => 'cpt',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($arg);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="col-md-9">
                    <div class="card">
                        <a href="<?php echo (get_the_permalink()); ?>" class="btn rounded">
                            <h2 class="p-auto rounded shadow text-center bg-info text-dark"><?php the_title(); ?></h2>
                        </a>

                        <?php if (get_field("skills") < 35) { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-danger rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else if (get_field("skills") > 35 && get_field("skills") < 65) { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-warning rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="ml-4 mr-4 mb-3 card-footer text-muted border bg-secondray p-auto">
                                <h4 class="text-center"><i><?php echo (get_field("skills")); ?>%</i></h4>
                                <div class="border border-secondary rounded p-1">
                                    <img class="bg-success rounded" width="<?php echo (get_field("skills")); ?>%" height="22px">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php
            }
        } else {
            ?>
            <div class="col-md-9 p-2">
                <div class="card">
                    <h1 class="m-3 border shadow text-center bg-danger text-white">No Skills</h1>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>