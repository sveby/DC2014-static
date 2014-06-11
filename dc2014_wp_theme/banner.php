<?php 
	if ($lang == "en") : /* English banner part goes below:*/
?> 

	<div class="img_main">
	        <!--<div class="header">-->
	        <!--img class="img_main" src="back.jpg"-->
	        <div class="main_logo"><a href="http://2014.dorscluc.org"><img class="main_img" src="<?php bloginfo('template_url');?>/main_logo.png"></a>
	        <br>
                <span class="date">June, 16<sup>th</sup> - 18<sup>th</sup>, 2014</span><span class="sub_date"><br>Nova cesta 7, Zagreb, Croatia</span>
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
		            <a href="http://2014.dorscluc.org/en/keynotes" target="_blank" class="scroll w">
                        <div class="i_b_txt bn f52 w">Summary of keynotes,</div>
                        <div class="i_b_txt bn f52 w">talks and workshops</div>
                        <div class="i_s f18 ">
                            is now available!
                        </div>
			        </a>
			        <!--
			        <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog" href="https://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dE1JSHFJTktUMVlpbDhkZXJSWXU0VVE6MA#gid=0">
					        Applications for volounteers
			        </a>-->
		        </div>
		        <div class="info info2 fr">
			        <div class="b bn f52"><a class="b bn f52" href="/hr/raspored-predavanja" >Conference schedule</a></div>
			        <div class="b bn f52"></div>
			        <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
			        <div class="f13 h52 w"></div>
			        <div class="f18 h20"></div>
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
                <span class="date">16. do 18. lipnja, 2014</span><span class="sub_date"><br>Zagreb, HGK - Nova cesta 7</span>
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
		            <a href="http://2014.dorscluc.org/hr/predavaci/" target="_blank" class="scroll w">
                        <div class="i_b_txt bn f52 w">Popis predavanja</div>
                        <div class="i_b_txt bn f52 w">i predavača</div>
                        <div class="i_s f18 ">
                            
                        </div>
			        </a>
			        <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog" href="http://2014.dorscluc.org/files/2014/06/DC2014agenda.pdf">
					        <!--Preliminarni raspored konferencije-->
			        </a>
		        </div>
		        <div class="info info2 fr">
			        <div class="b bn f52"><a class="b bn f52" href="/hr/raspored-predavanja" >Raspored predavanja</a></div>
			        <div class="b bn f52"></div>
			        <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
			        <!--<div class="f13 h52 w"></div>-->
		        </div>
	        </div>
	        <div class="clear"></div>
        </div>
        
        <?php endif; ?>
