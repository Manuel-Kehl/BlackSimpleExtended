<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		BlackSimple theme for GetSimple CMS
*
*****************************************************/
?>

<!doctype html>
<html lang="en">
<head>
<title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
<?php get_header(); ?>
<meta charset="utf-8" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" type="text/css" media="screen" />
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

	<div id="wrapper">
    
        <nav>
            <ul class="menu">
                <?php get_navigation(return_page_slug(FALSE)); ?>
            </ul>
        </nav>
        
        <header>
        	<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
        </header>
        
        <?php
	  /*
	    First check if go_child_menu is availabe, so the theme does not
	    cause php Errors, if the Child Menu Plugin is unavailable
	  */
	  if (function_exists('go_child_menu')) {
	    go_child_menu();
	  }
        ?>
      
        <section id="main" class="clearfix">
          
            <section id="content">
    
                <article>
                    <h2><?php get_page_title(); ?></h2>
                    <p><?php get_page_content(); ?></p>
                </article>
            
            </section>
            
            <aside id="sidebar">
            <?php get_component('sidebar'); ?>
            </aside>
            
        </section>

        <footer>
            
            <section id="templatecopy">
			<!-- Please do not remove the copyright below! Of course you can edit it, but I would be grateful if you leave link to my main site. -->
                <p>Copyright &copy; <a href="/"><?php get_site_name(); ?></a> | <?php get_site_credits(); ?> | Original Theme by <a href="http://artglow.me" target="_blank">ArtGlow</a> enhanced by <a href="http://manuel-kehl.de" target="_blank">mank319</a></p>
				
            </section>
        
        </footer>
      
    </div>
<?php get_footer(); ?>
</body>
</html>
