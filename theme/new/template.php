<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php get_page_title(); ?> - Xiaoyang Kao</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<?php get_header(); ?>
		
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/common_head.php'); ?>
    </head>

    <body>
		<div style='max-width:960px;margin:0 auto;'>
			<div id="page_wrap" class="container row">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/header.php'); ?>
				
				<section id="content_wrap" class="row">
						<article id='article_body' class="col span_12 clr">
							<div id='center_article'>
							<h1><?php get_page_title(); ?></h1>
							
							<div id='subtitle_information'>
								<div id='subtitle_date'>
									<span class="flatui-16 fui-time-16 post_date-glyph"></span>
									<h3><?php echo return_custom_field('creation_date'); ?></h3>
									<span class="flatui-16 fui-menu-16 category-glyph"></span>
									<h3><?php get_parent(); ?></h3>
								</div>
								<div id='social_media'>
									<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fxy-kao.com%2Fprojects%2Fvirtual-graphics-for-swimming%2F&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
									<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
									<div class="g-plusone" data-size="medium"></div>
								</div>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								<script type="text/javascript">
								  (function() {
									var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									po.src = 'https://apis.google.com/js/plusone.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
								  })();
								</script>
							</div>
							
							<div id='text'>
								<?php get_page_content(); ?>
							</div>

							
							<div id="disqus_thread" style='margin-top:25px;'></div>
							<script type="text/javascript">
								var disqus_shortname = 'xyk2'; 
								(function() {
									var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
									dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
									(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
							<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
							</div>
						</article>
				</section>
			</div>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/footer.php'); ?>
	
    </body>
</html>