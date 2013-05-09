fundify-widget
==============

this is an iframe widget for fundify theme

this is a new page template for fundify

if you don't use any fundify child theme

copy the campaign-widget.php  to fundify->pages-template 
copy the header-widget.php to the fundify root
extract the function function get_excerpt_by_id($the_excerpt) from function.php and append it to the fundify function.php


if you use a fundify child theme:

copy the pages-template directory to your fundify child theme
copy the header-widget.php to your fundify child-theme root directory
copy the function.php to your fundify child-thee root directoty


go to admin panel,  
create a new page,   name it widget or what ever name you want
select widget page from pages template
update


to test it, just add this line in any HTML 


<iframe src="http://<your web site>/<widget page>/?ID=<you campaign ID>" target="_blank" style="border:0px  none; width: 100%; min-height: 100%;" name="widget" marginheight="0px" marginwidth="0px" frameborder="0" scrolling="yes"></iframe>

this iframe is generated automatically from the theme, i will update the code later