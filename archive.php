<?php get_header(); ?>
<div class="main-wrapper">
    <div class="main">

        <div class="main-title">
            <h6><a><?php _e( 'Archives untuk ', 'html5blank' ); ?></a> >
			<a href=""><?php single_cat_title(); ?></a></h6>
        </div>

        <div class="main-berita row">
            <div class="col col-lg-8">
               <main role="main">
		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
        <!-- /section -->
    
	</main>
            </div>

            <div class="main-sidebar col col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>