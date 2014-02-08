<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		BlackSimple theme for GetSimple CMS
*
*****************************************************/
?>

<?php require('header.inc.php'); ?>
      
        <section id="main" class="clearfix">
        
            <section id="content">    
                <article>
                    <h2><?php get_page_title(); ?></h2>
                    <p><?php get_page_content(); ?></p>
                </article>            
            </section>
            
      </section>

<?php require('footer.inc.php'); ?>