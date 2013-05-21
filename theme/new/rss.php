<?php
	
	//header("Content-Type: application/xml");
	//echo $_SERVER['HTTP_USER_AGENT'];


	/*echo "<?xml version='1.0'?>\n";*/ // handled in /index.php
	echo "<rss version='2.0'>\n";
	echo "	<channel>\n";
	echo "
		<title>xy-kao.com: projects and experiments of Xiaoyang Kao</title>
		<link>http://xy-kao.com</link>
		<description>New articles from xy-kao.com.</description>
		<generator>Custom rss.php</generator>
		";
	
	
	/* Removes <p> tags and &nbsp; from CKEditor output */
	/* Eval()'s home page and runs embedded PHP code to generate RSS feed */
	$content = returnPageContent('index'); 
	$new_content = strip_tags($content);
	$new_content = str_replace(array('&nbsp;', '&nbsp'), '', $new_content);
	
	eval($new_content);
	
	function homepage_listing($title, $url, $post_date, $category, $image_url, $excerpt, $custom_image_width='40%', $excerpt_length=250) {
		$post_date = date('r', strtotime($post_date));
		if(substr($url, 0, 1) == '/') $url = substr($url, 1); // remove leading slash if existing
		
		echo "<item>
			<title>{$title}</title>
			<description>{$excerpt}</description>
			<link>";
			
		if(strpos($url, 'http://') == FALSE) { // echo link regardless if relative or not
			get_site_url();
			echo $url;
		}
			
		echo "</link>
			<guid>";
		if(strpos($url, 'http://') == FALSE) { // echo link regardless if relative or not
			get_site_url();
			echo $url;
		}
		
		echo "</guid>
			<pubDate>{$post_date}</pubDate>
		</item>
		";
	
	
	}
	echo "</channel>\n";
	echo "</rss>";
	
?>