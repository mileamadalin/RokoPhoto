<?php
$rokophoto_vision_display_settings = get_theme_mod('rokophoto_vision_display_settings');
$rokophoto_portfolio_heading = get_theme_mod('rokophoto_portfolio_heading',__( 'Portfolio', 'rokophoto' ));
$rokophoto_portfolio_subheading = get_theme_mod('rokophoto_portfolio_subheading',__( 'Recent pictures I have taken. Check them out!', 'rokophoto' ));
$rokophoto_portfolio_count = get_theme_mod('rokophoto_portfolio_count', 9);
?>

	<?php if( isset($rokophoto_vision_display_settings) && $rokophoto_vision_display_settings != 0 ): ?>
		<section id="vision" style="background-image: url('<?php if(!empty($rokophoto_vision_image)) { echo $rokophoto_vision_image; } ?>');">
	<?php endif; ?>
    <!-- Portfolio Title -->
      <div class="light-overlay ptitle">
	<?php if(!empty($rokophoto_portfolio_heading)) : ?>
        <h2><?php echo $rokophoto_portfolio_heading; ?></h2>
	<?php endif; ?>
	<?php if(!empty($rokophoto_portfolio_subheading)) : ?>
        <h5><?php echo $rokophoto_portfolio_subheading; ?></h5>
	<?php endif; ?>
      </div>
    </section>

    <section id="portfolio" class="grid">

	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $rokophoto_portfolio_count ) ); ?>

	<?php if ( $loop->have_posts() ) : $loop->the_post(); ?>
	
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
				<?php the_post_thumbnail( 'full', array( 'class' => "img-responsive")); ?>
				<figcaption> <!-- Caption -->
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
				</figcaption> <!-- End caption -->   
			</figure> <!-- End portfolio -->
	
		<?php endwhile; ?>

	<?php else: ?>
	
		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 1', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 2', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 3', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->
	
		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 4', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 5', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 6', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a class="portfolio-link" ><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->
	
	<?php endif; ?>
    </section> <!-- End Portfolio Section -->