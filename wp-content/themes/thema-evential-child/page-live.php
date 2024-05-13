<?php
/*

Template Name: Live

*/

get_header(); ?>
<?php 
	global $tlazya_evential; 
?>
<section id="top" class="innder-page" style="background: url(<?php echo esc_url($tlazya_evential['inner_url']['url']); ?>) no-repeat 0% 0%;">
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
<section>
	<div class="player container">
		<div class="col-md-12">
			<?php
				while ( have_posts() ) : the_post();
			?>
			<article class="stand">
				<div class="videoWrapper">
					<?php echo the_content(); ?>
				</div>
			</article>
			<div style="clear:both"></div>
			<?php
				endwhile;
			?>
		</div>
	</div>
	<div class="galeria container">
		<div class="col-md-12">
			<h1>Galeria de Vídeos</h1>
			<div class="row">
			<?php
				while ( have_rows('galeria_de_videos') ) : the_row(); 
					$titulo = get_sub_field('titulo_do_video');
					$imagem = get_sub_field('miniatura');
					$youtube = get_sub_field('id_youtube');
				?>
				<div class="video col-md-3">
					<a href="http://www.youtube.com/embed/<?php echo $youtube; ?>?autoplay=1" class="wplightbox" title="<?php echo $titulo; ?>" data-width="640" data-height="360">
						<figure>
							<img src="<?php echo $imagem['url']; ?>" alt="<?php echo $titulo; ?>" class="img-responsive">
							<figcaption><?php echo $titulo; ?></figcaption>
						</figure>
					</a>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();