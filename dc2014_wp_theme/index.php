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

        <div class="speakers">
            <div class="sub_panel">
            <div class="info info1 bn f36 ib">
                <div class="ib lg" id="kn">KEYNOTE SPEAKERS</div>
                <div class="ib dg p10">2014</div>
            </div>
            <div class="info info2 ib">
                <div class="f18 b t_a_r">view all speakers</div>
            </div>
            <div class="sub_panel ib speaker_container">
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>
                <div class="img_sp"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/unk.gif">You?</div>    
            </div>
            <div class="sub_panel t_a_l f17 b p52 pt8">Could it be you?</div>
            <div class="sub_panel t_a_l f13 lg pt8">Speakers for 2014 are yet to be announced! Stay up to date via newsletter, our social networks or check our page regulary! :) <br>
            For future speakers: a call for Keynotes and Workshops will be announced, but if you are impatient <a href="mailto:info@dorscluc.org">contact us freely</a> or <a href="https://docs.google.com/spreadsheet/viewform?formkey=dDFSUDE0U0RRUUF4bzN6S2pCUXpXUVE6MA" target="_blank">pre-register early!</a></div>
            </div>
        </div>


        <div class="sp_sch">
        <div class="sub_panel b_top pb5">
        <div class="info info1 bn f24"><div class="ib lg">Schedule</div><div class="ib dg p10">of 2014 conference</div></div>
        <div class="info info3"><div class="button bn f23 w">Still too early!</div></div>
        </div>
        <!--<div class="sub_panel b_top pb5">
        <div class="info info1 bn f24"><div class="ib lg">PUBLISHED PRESENTATIONS</div><div class="ib dg p10">OF 2013 CONVENTION</div></div>
        <div class="info info3"><div class="button bn f23 w">MUST! Have!</div></div>
        </div>-->
        <div class="sub_panel b_top pb5">
        <div class="info info1 bn f24"><div class="ib lg">VIDEO RECORDING</div><div class="ib dg p10">OF 2013 CONVENTION</div></div>
        <div class="info info3"><a class="button bn f23 w" href="http://www.youtube.com/watch?list=PLDMnMa3XBHD-1_jHLfii4s1mzVA5TTvbO&v=Pta_mMIiTGI" style="display:block">woohoo! Show me!</a></div>
        </div>
        <div class="sub_panel b_top b_bottom pb5">
        <div class="info info1 bn f24"><div class="ib lg">PHOTOS</div><div class="ib dg p10">OF 2013 CONVENTION</div></div>
        <div class="info info3"><a class="button bn f23 w bbr" style="display:block" href="http://www.flickr.com/search/?q=dorscluc2013">Flickr link!</a></div>
        </div>
        </div>

<?php get_footer(); ?>
