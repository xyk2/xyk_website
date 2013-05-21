<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>projects, experiments of Xiaoyang Kao</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="The projects and experiments of Xiaoyang Kao in electronics, web development, and computer science." />

        <?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/common_head.php'); ?>
    </head>

    <body>
		<div style='max-width:960px;margin:0 auto;'>
			<div id="page_wrap" class="container row">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/header.php'); ?>
				
								
				<section id="content_wrap" class="row">
					<?php 
						/* Removes <p> tags and &nbsp; from CKEditor output */
						/* Eval()'s home page and runs embedded PHP code to generate homepage */
						$content = returnPageContent(return_page_slug()); 
						$new_content = strip_tags($content);
						$new_content = str_replace(array('&nbsp;', '&nbsp'), '', $new_content);
						eval($new_content);
					?>
				</section>

				<?php 
					function homepage_listing($title, $url, $post_date, $category, $image_url, $excerpt, $custom_image_width='40%', $excerpt_length=250) {
					$category = ucfirst($category);
					$post_date = ucfirst($post_date);
						echo "<div class='row article_row'>
						<article class='col span_12 clr front_page_article'>
							<a href='{$url}'><img src='{$image_url}' style='width:{$custom_image_width};'></a>
							<a href='{$url}'><h2>{$title}</h2></a>
							<div style='margin-top: 2px;'>
								<span class='flatui-16 fui-time-16 post_date-glyph'></span>
								<h3>{$post_date}</h3>
								<span class='flatui-16 fui-menu-16 category-glyph'></span>
								<h3 style='float:none'>{$category}</h3>
							</div>
							<p>
								{$excerpt}
								<a href='{$url}'><span class='read_more'>Read...</span></a>
							</p>
						</article>
					</div>";
					}
				?>
				
			</div>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/theme/new/footer.php'); ?>
	
    </body>
</html>
