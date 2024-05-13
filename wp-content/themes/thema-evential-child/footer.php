<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Evential
 * @subpackage Evential
 * @since Evential 1.0
 */
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-iasd.png">
				</div>		
				<div class="social">
						<div class="clearfix"></div>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['facebook_url']) && $tlazya_evential['facebook_url'] != '') {
						?>
							<a href="<?php echo esc_url($tlazya_evential['facebook_url']); ?>" title="facebook">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						<?php } ?> 
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['twitter_url']) && $tlazya_evential['twitter_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['twitter_url']); ?>" title="twitter">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>								
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['google_url']) && $tlazya_evential['google_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['google_url']); ?>" title="google plus">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</span>									
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['youtube_url']) && $tlazya_evential['youtube_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['youtube_url']); ?>" title="youtube">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</span>			
							</a>
						<?php } ?> 
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['linkedin_url']) && $tlazya_evential['linkedin_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['linkedin_url']); ?>" title="linkedin">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</span>		
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['dribble_url']) && $tlazya_evential['dribble_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['dribble_url']); ?>" title="dribble">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
								</span>									
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['behance_url']) && $tlazya_evential['behance_url'] != '') {
							?><a title="behance" href="<?php echo esc_url($tlazya_evential['behance_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-behance fa-stack-1x fa-inverse"></i>
								</span>		
							</a>
						<?php } ?>          
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['pin_url']) && $tlazya_evential['pin_url'] != '') {
							?><a title="pinterest" href="<?php echo esc_url($tlazya_evential['pin_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['vimeo_url']) && $tlazya_evential['vimeo_url'] != '') {
							?><a title="vimeo" href="<?php echo esc_url($tlazya_evential['vimeo_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>   
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['rss_url']) && $tlazya_evential['rss_url'] != '') {
							?><a title="rss" href="<?php echo esc_url($tlazya_evential['rss_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-rss fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?> 
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['skype_url']) && $tlazya_evential['skype_url'] != '') {
							?> <a title="skype" href="<?php echo esc_url($tlazya_evential['skype_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-skype fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?> 
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['github_url']) && $tlazya_evential['github_url'] != '') {
							?><a title="github" href="<?php echo esc_url($tlazya_evential['github_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-github-alt fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['flickr_url']) && $tlazya_evential['flickr_url'] != '') {
							?><a title="flickr" href="<?php echo esc_url($tlazya_evential['flickr_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-flickr fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?> 
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['dropbox_url']) && $tlazya_evential['dropbox_url'] != '') {
							?><a title="dropbox" href="<?php echo esc_url($tlazya_evential['dropbox_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-dropbox fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>  
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['bitbucket_url']) && $tlazya_evential['bitbucket_url'] != '') {
							?><a title="bitbucket" href="<?php echo esc_url($tlazya_evential['bitbucket_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-bitbucket fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['instagram_url']) && $tlazya_evential['instagram_url'] != '') {
							?><a title="instagram" href="<?php echo esc_url($tlazya_evential['instagram_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['soundcloud_url']) && $tlazya_evential['soundcloud_url'] != '') {
							?><a title="soundcloud" href="<?php echo esc_url($tlazya_evential['soundcloud_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-soundcloud fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['stack_url']) && $tlazya_evential['stack_url'] != '') {
							?><a href="<?php echo esc_url($tlazya_evential['stack_url']); ?>" title="stack-overflow">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['wordpress_url']) && $tlazya_evential['wordpress_url'] != '') {
							?><a title="wordpress" href="<?php echo esc_url($tlazya_evential['wordpress_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-wordpress fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
						<?php
						global $tlazya_evential;
						if (isset($tlazya_evential['tumblr_url']) && $tlazya_evential['tumblr_url'] != '') {
							?><a title="tumblr" href="<?php echo esc_url($tlazya_evential['tumblr_url']); ?>">
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
								</span>											
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">
<?php
global $tlazya_evential;
if (isset($tlazya_evential['google_tracking']) && $tlazya_evential['google_tracking'] != '') {
	echo $tlazya_evential['google_tracking'];
}
?>
</script>
<?php wp_footer(); ?>
<!-- Início do script Omnize --> 
<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//login.omnize.com.br/widget/public/assets/javascripts/main.js',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:1572});}},false);</script> 
<!-- Fim do script Omnize -->
</html>