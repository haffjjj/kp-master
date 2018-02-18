<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- article -->
<div class="berita" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-lg-4">
			<!-- post thumbnail -->
			<?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

				<div style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>)" class="berita-img berita-img-post"></div>
			</a>
			<?php endif; ?>
		</div>
		<!-- /post thumbnail -->
		<div class="col-lg-8">
			<!-- post title -->
			<h5>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h5>
			<!-- /post title -->

			<!-- post details -->
			<p class="post-info">
				<span class="date">
					<?php the_time('F j, Y'); ?>
					<?php the_time('g:i a'); ?>
				</span>
				<span class="author">
					<?php _e('Published by', 'html5blank'); ?>
					<?php the_author_posts_link(); ?>
				</span>
				<span class="comments">
					<?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?>
				</span>
			</p>
			<!-- /post details -->

			<?php html5wp_excerpt('html5wp_custom_post'); // Build your custom callback length in functions.php ?>
		</div>
	</div>
	<div class="edit-post-admin">
			<?php edit_post_link(); ?>
	</div>
	<div class="post-line"></div>

</div>
<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

<!-- 	not found -->

<?php endif; ?>