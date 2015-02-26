                <!-- Blog post -->
                <div <?php post_class('blog-posts'); ?> id="post-<?php the_ID(); ?>">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="post wow fadeIn" data-wow-duration="2s">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <ul class="list-inline">
                                <li><?php _e( 'Post By:', 'rokophoto' ); ?> <?php the_author_posts_link(); ?></li>
                                <li><?php _e( 'Date:', 'rokophoto' ); ?> <time><?php the_time( get_option( 'date_format' ) ); ?></time></li>
                                <li><?php _e( 'Category:', 'rokophoto' ); ?> <?php the_category(', '); ?></li>
                            </ul>
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                <?php the_post_thumbnail( 'full', array( 'class' => "img-responsive")); ?>
                            <?php endif; ?>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Read More', 'rokophoto' ); ?></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="divider"></div>
                </div>