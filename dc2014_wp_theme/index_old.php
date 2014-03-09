<?php get_header(); ?>


    <body>
        <div class="logo"><img src="<?php bloginfo('template_url');?>/logo.png"></div>

        <div class="nav ddg ib">
	         <div class="nav_triangle"></div>
	         <!--<div class="nav_links ib"><a class="f16" href="http://2014.dorscluc.org/">Home</a></div>-->
	         <!-- Not yet: -->
	         <!-- <div class="nav_links ib"><a class="f16" href="#zasto" id="open_schedule_dialog">Convention Schedule</a></div> -->
	         <div class="nav_links ib"><a class="f16 scroll" href="#kn">Keynote speakers</a></div>
	         <!-- Download full sponsorship brochure: -->
	         <div class="nav_links ib"><a id="open_sponsorship_dialog" class="f16">Sponsorship</a></div>
	         <div class="nav_links ib"><a class="f16" id="open_media_dialog">Media sponsors</a></div>
	         <div class="nav_links ib"><a class="f16" id="open_organizers_dialog">Organisers</a></div>
        </div>

        <!-- Dialogs javascript: -->
	      <script>
	            $(function() {
	                $("#sponsorship_dialog").dialog({autoOpen: false});
	                $("#open_sponsorship_dialog").click(function() {
	                    $("#sponsorship_dialog").dialog("open");
	                    $("#sponsorship_dialog").dialog({width:"67%"});
                    });
                    $("#secondary_open_sponsorship_dialog").click(function() {
                        $("#sponsorship_dialog").dialog("open");
                        $("#sponsorship_dialog").dialog({width:"67%"});
                    });
	            });
	            
			    $(function() {
			        $("#media_dialog" ).dialog({autoOpen: false});
				    $("#open_media_dialog" ).click(function() {
					    $("#media_dialog" ).dialog( "open" );
					    $("#media_dialog").dialog({width:"67%"});
				    });
			    });
			
			    $(function() {
	                $("#volunteers_dialog").dialog({autoOpen: false});
	                $("#open_volunteers_dialog").click(function() {
	                    $("#volunteers_dialog").dialog("open");
	                    $("#volunteers_dialog").dialog({width:"67%"});
                    });
                    $("#secondary_open_volunteers_dialog").click(function() {
                        $("#open_volunteers_dialog").dialog("open");
                        $("#open_volunteers_dialog").dialog({width:"67%"});
                    });
	            });
	            $(function() {
	                $("#schedule_dialog").dialog({autoOpen: false});
	                $("#open_schedule_dialog").click(function() {
	                    $("#schedule_dialog").dialog("open");
	                    $("#schedule_dialog").dialog({width:"67%"});
                    });
	            });
	            
	            $(function() {
	                $("#organizers_dialog").dialog({autoOpen: false});
	                $("#open_organizers_dialog").click(function() {
	                    $("#organizers_dialog").dialog("open");
	                    $("#organizers_dialog").dialog({width:"500px"});
                    });
	            });
	     </script>
    <!-- Media announcement to display: -->
        <div id="media_dialog" title="Call for media coverage">
         	 We call on all printed and electronic media, magazines, radio and TV journalists, portals and other reporters to attend this conference. All of will be highlighted at the conference and their representatives will have free admission to the conference and a warm meal. Applications and more information through <a href="mailto:info@dorscluc.org">info@dorscluc.org</a>.
        </div>	 
         
        <div id="sponsorship_dialog" title="Call for sponsors">
           <p>We invite all businesses, individuals and institutions to assist in sponsoring DORS/CLUC 2014, the 21st DORS/CLUC - largest and most visited free and open source conference in the region.</p> 
           <p>Seize the opportunity to advertise your businesses to the visitors of the conference! <br>
           DORS / CLUC has always been designed and prepared as a non-profit conference, with the sole aim of sponsorships to cover the cost of financing the organization. For details about sponsorship options and conditions please contact us through <a href="mailto:info@dorscluc.org">info@dorscluc.org</a>.</p>
        </div>	 

        <div id="volunteers_dialog" title="We need you!">
            <p>We invite all interested parties to help with the preparation and holding of conferences to <a href="https://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dE1JSHFJTktUMVlpbDhkZXJSWXU0VVE6MA#gid=0" target="_blank">register</a> or contact us at <a href="mailto:info@dorscluc.org">info@dorscluc.org</a> (with an indication of when you are free).</p> 
            <p>Volunteer work includes preparations of materials for participants, accreditation, security guards at entrances, information providers, preparing drinks and snacks, wearing a microphone during keynotes, and the like. You all get a free admission to the conference and a hot meal.</p>
        </div>

        <div id="schedule_dialog" title="Nope, still too early!">
            Sorry, nothing yet.. please check back soon, or follow us on <a href="">Twitter</a>, <a href="">Facebook</a> or <a href="">Google+</a>!
        </div>

        <div id="organizers_dialog" title="Organizers">
            <table>
                <tr>
                    <td style="padding-top:0px" valign="top">
                        <img  title="hropen-logo-mini" src="http://www.dorscluc.org/wp-content/uploads/2012/12/hropen-logo-mini.png" alt="" width="210" />
                        <br>
                        <a href="http://www.open.hr">Croatian Association for Open<br>
                        Systems and Internet</a><br><br>
                        <i>Unska 3<br>
                        10 000 Zagreb<br>
                        Croatia<br><br></i>
                        Phone: + 385 (0)1 6129 674<br>
                        IBAN: HR5023600001101557175<br>
                        Matični broj: 1602845<br>
                        OIB: 09913557986<br>
                    </td>
                    
                    <td style="padding-top:0px; padding-left:10px;" valign="top">
                            <img title="hulk-logo-mini" src="http://www.dorscluc.org/wp-content/uploads/2012/12/hulk-logo-mini.jpg" alt="" width="210" height="72" />
                        
                        <div><a href="http://www.linux.hr">Croatian Linux Users' Association</a></div>
                        <br>
                        <i>Lastovska 9<br>
                        10 000 Zagreb<br>
                        Croatia<br><br></i>
                        Ban acc. no: 2340009-1110161537<br>
                        Matični broj: 1875833<br>
                        OIB: 09478538040<br>
                        
                        
                         LinkedIn: <a href="http://www.linkedin.com/e/gis/45456/12F1440B06D8" target="_blank">HULK/CLUG</a>
                         <br />
                        
                         Facebook: <a href="http://www.facebook.com/group.php?gid=6399423804" target="_blank">HULK</a>
                         <br />
                        
                         Google (+): <a href="https://plus.google.com/b/110735722057328263934/110735722057328263934" target="_blank">HULK</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="img_main">
	        <!--<div class="header">-->
	        <!--img class="img_main" src="back.jpg"-->
	        <div class="main_logo"><img class="main_img" src="<?php bloginfo('template_url');?>/main_logo.png"><br>
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
					        Applications for volounteers
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

        <?php if(have_posts()) : ?><?php $numPosts = 1; while(have_posts()) : the_post(); ?>
            <?php if ($numPosts==1) : ?>
        <div class="main_panel">
	        <div class="sub_panel">
	            <div class="info info1">
	                <div class="b bn f52"><?php the_title(); ?></div>
	                <div class="dg f13">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <p class="postmetadata">
                            <?php  the_author(); ?> <?php edit_post_link('Edit', ' &#124; ', ''); $numPosts++; ?>
                        </p>	
	                </div>
	            </div> <!-- info info1 -->
	        </div> <!-- sub_panel-->
	        <?php else : //numPosts>1 ?> 
	            <?php if ($numPosts==2) :?>
	        <div class="info info2 pl90">
	            <div class="up_arrow"></div>
	            <div class="news_bar ">
	            <?php endif; $numPosts++; ?>
	                <div class="news_c b f16"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	                <div class="news_sub dg f12"><?php the_author(); ?></div>
                
	        <?php endif; ?>
            <?php endwhile; get_sidebar(); ?>
            
        <?php endif; //end have_posts?> 
                </div>
                <div class="up_arrow"></div>
	        </div>
        </div><!-- main_panel -->
        

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
