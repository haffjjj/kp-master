<?php get_header(); ?>
<div class="main-wrapper">
	 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="main">

        <div class="main-title">
            <h6><a href="<?php echo get_site_url() ?>/category/berita">Berita</a> >
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			
        </div>

        <div class="main-berita row">
            <div class="col col-lg-8">
               
                <div id="post-<?php the_ID(); ?>" class="berita">

                   <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="berita-img" style="background-image: url(<?php the_post_thumbnail_url('large')?>)"></div>
                    </a>
                    <?php endif; ?>

                    

                    <h5>
                        <a class="title-berita" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>

                    <p class="post-info">
                        <span class="date">
                            <?php the_time('F j, Y'); ?>
                            <?php the_time('g:i a'); ?>
                        </span>
                        <span class="author">
                            <?php _e( 'Ditulis oleh', 'html5blank' ); ?>
                            <?php the_author_posts_link(); ?>
                        </span>
                        <span class="comments">
                            <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Tinggalkan komentar anda', 'ts_project' ), __( '1 Comment', 'html5blank' ), __( '% Komen', 'html5blank' )); ?>
                        </span>
                    </p>

                    <?php the_content(); // Dynamic Content ?>
					
					<div class="tag-category-written">
						<p><?php the_tags( __( 'Tags : ', 'html5blank' ), ', ', '<br>');?></p>
                    	<p><?php _e( 'Post ini dalam kategori ', 'html5blank' ); the_category(', ');?></p>
                    	<p><?php _e( 'Post ini ditulis oleh : ', 'html5blank' ); the_author(); ?></p>
					</div>
                    

                    <?php edit_post_link(); // admin edit ?>



                    <div class="komentar">
                        <?php comments_template(); ?>
                    </div>
                </div>
                <?php endwhile; ?>


            </div>

            <div class="main-sidebar col col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
	
                <?php else: ?>
              	<h3>
					Halaman tidak ditemukan
	</h3>
                <?php endif; ?>

</div>

<?php get_footer(); ?>