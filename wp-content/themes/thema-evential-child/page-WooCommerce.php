<?php
/*

Template Name: WooCommerce

*/

get_header(); ?>
<?php 
	global $tlazya_evential; 
	if (isset($tlazya_evential['inner_url']['url']) && $tlazya_evential['inner_url']['url'] != '' ) {
?>
<section id="top" class="innder-page" style="background: url(<?php echo esc_url($tlazya_evential['inner_url']['url']); ?>) no-repeat 0% 0%;">
<?php 
	}
	else 
	{
?>
<section id="top" class="innder-page" style="background: url(<?php echo get_template_directory_uri(); ?>/img/register-bg.png) no-repeat 0% 0%;">
<?php
	}
?>
	<div class="container">
		<div class="countdown">
			<div class="row">
                            <div class="col-xs-12">
				<div class="counter-title align-center blog-banner">
				<?php
					while ( have_posts() ) : the_post();
				?>
					<h2><?php echo get_the_title();?></h2>	
				<?php
					endwhile;
				?>
				</div>	
			</div>
                    </div><!--/ .row-->
		</div><!--/ .countdown-->
	</div><!--/ .container-->
</section>        
<section id="about">
    <div class="container">
        <div class="col-md-12 blog-all">
			<?php
				while ( have_posts() ) : the_post();
			?>
			<article class="stand">
				<div class="blog-post-date default-page">
				<?php 
				if(has_post_thumbnail()) {
				?>
				<a href="<?php echo get_permalink();?>">
					<?php echo get_the_post_thumbnail(get_the_ID()); ?>
				</a>
				<?php } else { ?>
					<div class="empty-image"></div>
				<?php } ?>
				</div>
				<p>
					<?php echo the_content(); ?>
				</p>
            </article>
			<div style="clear:both"></div>
			<?php
				endwhile;
			?>
        </div>  
    </div>
</section>

<?php
get_footer();