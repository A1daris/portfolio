<?php get_header();?>

<section id="about" class="s_about bg_light" >
	<div class="section_header">
		<h2><?php echo get_cat_name(2) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(2) ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : query_posts('p=7');
					while (have_posts()) : the_post(); ?>
				<div class="col-md-4 col-md-push-4 animation_1">
					<h3>Photo</h3>
					<div class="person">
						<?php if ( has_post_thumbnail() ): ?>
						<a class="popup" href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(),'large' );
						echo $large_image_url[0]; ?>"

						   title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(array(400, 200)); ?>
						</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-4 col-md-pull-4 animation_2">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?></div>
				<? endwhile; endif; wp_reset_query(); ?>
				<div class="col-md-4 animation_3 personal_last_block">
					<?php if ( have_posts() ) : query_posts('p=9');
						while (have_posts()) : the_post(); ?>

					<h3><?php the_title(); ?></h3>
					<h2 class="personal_header"><?php echo get_bloginfo('name'); ?></h2>
							<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
					<div class="social_wrap">
						<ul>
							<?php if ( have_posts() ) : query_posts('cat=3');
								while (have_posts()) : the_post(); ?>
									<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID,'fonts_awesome', true); ?>"></i></a></li>
							<? endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</section>
<section id="resume" class="s_resume" >
	<div class="section_header">
		<h2><?php echo get_cat_name(4); ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(4); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="resume_container">
					<div class="col-md-6 col-sm-6 left">
						<h3><?php echo get_cat_name(5); ?></h3>
						<div class="resume_icon">
							<i class="icon-basic-book-pen"></i>
						</div>
						<?php if ( have_posts() ) : query_posts('cat=5');
						while (have_posts()) : the_post(); ?>
						<div class="resume_item">
							<div class="year"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
							<div class="resume_description"><?php echo get_post_meta($post->ID, 'resume_place', true); ?> <strong><?php the_title(); ?></strong>
								<?php the_content(); ?>
							</div>
						</div>
						<? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="col-md-6 col-sm-6 right">
						<h3><?php echo get_cat_name(6); ?></h3>
						<div class="resume_icon">
							<i class="icon-basic-case"></i>
						</div>

							<?php if ( have_posts() ) : query_posts('cat=6');
							while (have_posts()) : the_post(); ?>
								<div class="resume_item">
									<div class="year"><?php echo get_post_meta($post->ID, 'resume_years', true); ?></div>
									<div class="resume_description"><strong><?php the_title(); ?></strong><?php echo get_post_meta($post->ID, 'resume_place', true); ?>
										<?php the_content(); ?>
									</div>
								</div>
							<? endwhile; endif; wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="s_portfolio bg_dark" >
	<div class="section_header">
		<h2><?php echo get_cat_name(7); ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(7); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="filter_div controls">
					<ul>
						<li class="filter active" data-filter="all">All project</li>
						<li class="filter" data-filter=".sites">Web sites</li>
						<li class="filter" data-filter=".logos">Logos</li>
						<li class="filter" data-filter=".iface">UI</li>
					</ul>
				</div>
				<div id="portfolio_grid">

					<?php if ( have_posts() ) : query_posts('cat=7');
						while (have_posts()) : the_post(); ?>

					<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item <?php
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
						foreach($tags as $tag) {
							echo ' ' . $tag->name;
						}
					};
					?>">
						<?php the_post_thumbnail(array(370, 250)); ?>
						<div class="port_item_cont">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a class="popup_content">Fast view</a>
							<div class="hidden">
								<div class="port_descr">
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
									<?php the_post_thumbnail(array(800, 600)); ?>
								</div>
							</div>
						</div>
					</div>
					<? endwhile; endif; wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="contacts" class="s_contacts bg_light" >
	<div class="section_header">
		<h2><?php echo get_cat_name(11); ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(11); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact_box">
						<div class="contacts_icon icon-basic-geolocalize-05"></div>
						<h3>Adress:</h3>
						<p><?php
							$options = get_option('sample_theme_options');
							echo $options['adress']; ?>
						</p>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-webpage-img-txt"></div>
						<h3>Phone</h3>
						<p><a href="#">
								<?php
								$options = get_option('sample_theme_options');
								echo $options['Phone']; ?>
							</a></p>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-webpage-img-txt"></div>
						<h3>Web site</h3>
						<p><a href="http://<?php
							$options = get_option('sample_theme_options');
							echo $options['website']; ?>" target="_blank"><?php
								$options = get_option('sample_theme_options');
								echo $options['website']; ?></a></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="" class="main_form" novalidate>
						<label class="form_group">
							<span class="color_element">*</span> Your name:
							<input type="text" name="name" placeholder="Your name here" data-validation-required-message="ZZZZZ mothrfcr" required />
							<span class="help-block text-danger">Please fill this form</span>
						</label>
						<label class="form_group">
							<span class="color_element">*</span> E-mail:
							<input type="email" name="email" placeholder="Your name here" data-validation-email-message="email is incorrect" required />
							<span class="help-block text-danger">Please fill email</span>
						</label>
						<label class="form_group">
							<span class="color_element">*</span> E-mail:
							<textarea name="message" id="" cols="10" rows="4" placeholder="Your message here" data-validation-required-message="ZZZZZ mothrfcr" required></textarea>
							<span class="help-block text-danger">Please fill email</span>
						</label>
						<button>Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>