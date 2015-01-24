<?php get_header(); ?>

    <!-- Blog Posts
    ================================================== -->
    <div class="blog">
        <div class="container">
            <div class="row">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content'); ?>
                <?php endwhile; ?>

                <!-- Pagination -->
                <?php rokophotolite_pagination(); ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>