<?php get_header(); ?>


    <body>
        <div class="logo"><a href="/"><img src="<?php bloginfo('template_url');?>/logo.png"></a></div>

        <?php include("main_menu_hack.php");?>


        <div class="main_panel">
            <div class="sub_panel">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

                <div class="single_info1 info info1 mt40">
                    <br/>
                    <div class="b bn f52"><?php the_title(); ?></div>
                    <br/>
                    <br/>
                    <div class="dg">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <p class="postmetadata">
                            <?php  /*the_author();*/ ?> <?php edit_post_link('Edit', '', ''); $numPosts++; ?>
                        </p>
                    </div>
                </div> <!-- info info1 -->


            <?php endwhile; ?>

        <?php endif; //end have_posts <div class="up_arrow"></div> ?>

                <?php get_sidebar(); ?>


            </div> <!-- sub_panel-->
        </div><!-- main_panel -->

    <div class="clear"></div>
<?php get_footer(); ?>
