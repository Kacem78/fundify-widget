fundify-widget
==============

this is an iframe widget for fundify theme

this is a new page template for fundify

if you don't use any fundify child theme

copy the campaign-widget.php  to fundify->pages-template 
copy the header-widget.php to the fundify root
extract the content of function.php  and append it to the fundify function.php


if you use a fundify child theme:

copy the pages-template directory to your fundify child theme
copy the header-widget.php to your fundify child-theme root directory
copy the function.php to your fundify child-thee root directoty


go to admin panel,  
create a new page,   name it 'widget'
select widget page from pages template
update


to test it, just add this line in any HTML 


<iframe src="http://<your web site>/your_campaign_id/widget/" target="_blank" style="border:0px  none; width: 100%; min-height: 100%;" name="widget" marginheight="0px" marginwidth="0px" frameborder="0" scrolling="yes"></iframe>


to generate the iframe automatically  insert this line in what ever program you want
i did it in single-campaign.php

<textarea name="share-widget" class="iframe notranslate"><iframe src="<?php echo get_site_url(); ?>/<?php echo the_ID(); ?>/widget/" style="border:0px  none; width: 100%; min-height: 100%;" name="widget" marginheight="0px" marginwidth="0px" frameborder="0" scrolling="yes" target="_blank"></iframe></textarea>

you should also add an endpoint in permalink.php

	add_rewrite_endpoint( 'widget', EP_ALL );
	
futur update:

get the $wp_rewrite()function fired during the init() in crowdfunding.php 


