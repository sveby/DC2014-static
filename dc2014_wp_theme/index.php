<?php get_header(); 
	$tmp = explode("/",$_SERVER['REQUEST_URI']);
	$lang = $tmp[1];
?>


    <body>
        <div class="logo"><a href="/"><img src="<?php bloginfo('template_url');?>/logo.png"></a></div>
        
        <?php include("main_menu_hack.php");?>

        <?php include("banner.php"); ?>        

        <div class="main_panel">
	        <div class="sub_panel">
	            <div class="info info1">
	                <?php if(have_posts()) : ?><?php while(have_posts()) :  the_post(); ?>
	                <div class="b bn f52"><?php the_title(); ?></div>
	                <div class="dg f13">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <p class="postmetadata">
                            <?php  the_author(); ?> <?php edit_post_link('Edit', ' &#124; ', '');?>
                        </p>	
                    </div>
                    <?php break; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div> <!-- info info1 -->
	        </div> <!-- sub_panel-->
	        <div class="info info2 ">
	            <div class="up_arrow"></div>
	            <div class="news_bar ">

                    <?php get_sidebar('titlepage_right'); ?>
                    
                </div>
                <div class="up_arrow"></div>
	        </div>
        </div><!-- main_panel -->
        
        <div class="clear"></div>

        <?php include("speakers-part.php"); ?>

        <?php include("quick-links-part.php"); ?>
        

<?php get_footer(); ?>
