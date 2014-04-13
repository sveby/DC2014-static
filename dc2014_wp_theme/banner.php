<?php 
	if ($lang == "en") : /* English banner part goes below:*/
?> 

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
        
        
        <?php 
        	else: /*Croatian banner part goes below:*/ 
        ?>
        
        
        <div class="img_main">
	        <!--<div class="header">-->
	        <!--img class="img_main" src="back.jpg"-->
	        <div class="main_logo"><a href="http://2014.dorscluc.org"><img class="main_img" src="<?php bloginfo('template_url');?>/main_logo.png"></a>
	        <br>
                <span class="date">16. do 18. lipnja, 2014</span><span class="sub_date"><br>Zagreb, HGK</span>
                <br>
            </div>

	        <div class="pos_sponsor sponsor">
	            <div class="pos_sponsor_background"></div>
	            <div class="pos_sponsor_overlay">
                    <div class="pos_sponsor b_txt f42 w">
                        <a id="secondary_open_sponsorship_dialog" class="w">Zainteresirani za sponzorstvo?</a>
                    </div>
                    <div class="pos_sponsor n_txt f14 w">Želite se povezati s korisnicima ili predstaviti zajednici?<br>DORS/CLUC je idealno mjesto za to!</div>
                    <div class="pos_sponsor m_txt"><a class="f25 w" href="mailto:info@dorscluc.org">kontaktirajte nas!</a></div>
                </div>
	        </div>
        </div>

        <div class="panel">
	        <div class="sub_panel">
		        <div class="info info1">
		            <a href="https://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dDFSUDE0U0RRUUF4bzN6S2pCUXpXUVE6MA#gid=0" target="_blank" class="scroll w">
                        <div class="i_b_txt bn f52 w">Prijave za </div>
                        <div class="i_b_txt bn f52 w">predavače / radionice</div>
                        <div class="i_s f18 ">
                            su otovrene!
                        </div>
			        </a>
			        <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog">
					        Prijave za volontere
			        </a>
		        </div>
		        <div class="info info2 fr">
			        <div class="b bn f52">Nagrada</div>
			        <div class="b bn f52">Otvorena informatika</div>
			        <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
			        <div class="f13 h52 w">Natječaj je otvoren.</div>
			        <div class="f18 h20"><a style="display:block" class="w  t_d_u" href="http://www.open.hr/obavijesti/2014/04/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2013-godini/" target="_blank">Pročitajte detalje.</a></div>
		        </div>
	        </div>
	        <div class="clear"></div>
        </div>
        
        <?php endif; ?>