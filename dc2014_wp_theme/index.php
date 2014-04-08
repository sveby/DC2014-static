<?php get_header(); ?>


    <body>
        <div class="logo"><a href="/"><img src="<?php bloginfo('template_url');?>/logo.png"></a></div>
        
        <?php include("main_menu_hack.php");?>

        <div class="img_main">
	        <!--<div class="header">-->
	        <!--img class="img_main" src="back.jpg"-->
	        <div class="main_logo"><a href="http://2014.dorscluc.org"><img class="main_img" src="<?php bloginfo('template_url');?>/main_logo.png"></a>
	        <br>
                <span class="date">June, 16<sup>th</sup> - 18<sup>th</sup>, 2014</span><span class="sub_date"><br>Zagreb, Croatia</span>
                <br>
            </div>

	        <div class="pos_sponsor sponsor">
	            <div class="pos_sponsor_background"></div>
	            <div class="pos_sponsor_overlay">
                    <div class="pos_sponsor b_txt f42 w">
                        <a id="secondary_open_sponsorship_dialog" class="w">Want to be a sponsor?</a>
                    </div>
                    <div class="pos_sponsor n_txt f14 w">Want to connect with your users or introduce yourself to the open source community?<br>There is no better place than the biggest croatian open technology conference.</div>
                    <div class="pos_sponsor m_txt"><a class="f25 w" href="mailto:info@dorscluc.org">contact us!</a></div>
                    <!--<div class="pos_sponsor bm_txt w">or <a class="f18 w" href>contact</a> us the way you prefer :)</div>-->
                </div>
	        </div>
        </div>

        <div class="panel">
	        <div class="sub_panel">
		        <div class="info info1">
		            <a href="https://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dDFSUDE0U0RRUUF4bzN6S2pCUXpXUVE6MA#gid=0" target="_blank" class="scroll w">
                        <div class="i_b_txt bn f52 w">Applications for</div>
                        <div class="i_b_txt bn f52 w">keynotes / workshops</div>
                        <div class="i_s f18 ">
                            are now possible!
                        </div>
			        </a>
			        <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog">
					        Applications for volunteers
			        </a>
		        </div>
		        <div class="info info2 fr">
			        <div class="b bn f52">Open informatics</div>
			        <div class="b bn f52">Award 2014</div>
			        <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
			        <div class="f13 h52 w">The contest will be announced soon, only Croatian entities can apply.</div>
			        <div class="f18 h20"><a style="display:block" class="w  t_d_u" href="http://www.open.hr/djelatnosti/nagrada-otvorena-informatika/" target="_blank">Read the rules here</a></div>
		        </div>
	        </div>
	        <div class="clear"></div>
        </div>

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
                <div class="img_sp"><a href="http://2014.dorscluc.org/hr/elizabeth-krumbach-joseph/"><img class="img_sp1" src="<?php bloginfo('template_url');?>/speakers/elizabeth_krumbach_135.png"></a></div>
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
