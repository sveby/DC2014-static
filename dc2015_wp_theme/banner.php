<?php
    if ($lang == "en") : /* English banner part goes below:*/
?>

    <div class="img_main">
            <!--<div class="header">-->
            <img class="img_main_back" src="<?php bloginfo('template_url');?>/back.jpg">
            <div class="main_logo"><a href="http://2015.dorscluc.org"><img src="<?php bloginfo('template_url');?>/main_logo.png"></a>
            <br>
                <span class="date">May, 18<sup>th</sup> - 20<sup>th</sup>, 2015</span><span class="sub_date"><br>Zagreb, Croatia</span>
                <br>
            </div>


            <div class="pos_sponsor sponsor">
                <div class="pos_sponsor_overlay">
                    <div class="b_txt f36 w sponsor-title">
                        <a id="secondary_open_sponsorship_dialog" class="w" href="/en/call-for-sponsors/">Want to be a sponsor?</a>
                    </div>
                    <div class="n_txt f13 w">Want to connect with your users or introduce yourself to the open source community?<br>There is no better place than the biggest croatian open technology conference.</div>
                    <div class="m_txt" style="margin-top:15px;margin-bottom:10px;"><a class="f25 w t_d_u"  href="mailto:info@dorscluc.org">contact us!</a></div>
                    <!--<div class="pos_sponsor bm_txt w">or <a class="f18 w" href=">contact</a> us the way you prefer :)</div>-->
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="sub_panel">
                <div class="info info1">
                    <a class="scroll w" href="/en/talk-and-workshop-applications/">
                        <div class="i_b_txt bn f52 w">Keynotes, talks</div>
                        <div class="i_b_txt bn f52 w">and workshops</div>
                        <div class="i_s f18 ">
                            application is now available!
                        </div>
                    </a>
                    <!--
                    <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog" href="https://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dE1JSHFJTktUMVlpbDhkZXJSWXU0VVE6MA#gid=0">
                            Applications for volounteers
                    </a>-->
                </div>

                <?php /* ?>
                <div class="info info2 fr">
                    <div class="b bn f52"><a class="b bn f52" href="/hr/raspored-predavanja" >Conference schedule</a></div>
                    <div class="b bn f52"></div>
                    <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
                    <div class="f13 h52 w"></div>
                    <div class="f18 h20"></div>
                </div>
                <?php */ ?>
                
                <div class="info info2 fr">
                    <div class="b bn f52"><a class="b bn f52" href="/hr/raspored-predavanja" >Open Informatics Award</a></div>
                    <div class="b bn f52"></div>
                    <div class="b f18 pt28 h20"><a class="t_d_u" href="http://www.open.hr/2015/02/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2014-godini/" style="display:block">Apply here</a></div>
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
            <img class="img_main_back" src="<?php bloginfo('template_url');?>/back.jpg">
            <div class="main_logo"><a href="http://2015.dorscluc.org"><img src="<?php bloginfo('template_url');?>/main_logo.png"></a>
            <br>
                <span class="date">18. do 20. svibnja, 2015</span><span class="sub_date"><br>Zagreb</span>
                <br>
            </div>

            <div class="pos_sponsor sponsor">
                <div class="pos_sponsor_overlay">
                    <div class="b_txt f36 w sponsor-title">
                        <a id="secondary_open_sponsorship_dialog" class="w" href="/hr/poziv-sponzorima/">Zainteresirani za sponzorstvo?</a>
                    </div>
                    <div class="n_txt f13 w">Želite se povezati s korisnicima ili predstaviti zajednici?<br>DORS/CLUC je idealno mjesto za to!</div>
                    <div class="m_txt" style="margin-top:15px;margin-bottom:10px;"><a class="f25 w" href="mailto:info@dorscluc.org">kontaktirajte nas!</a></div>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="sub_panel">
                <div class="info info1">
                    <a href="/hr/prijave-predavanja-i-radionica/" class="scroll w">
                        <div class="i_b_txt bn f52 w">Prijava predavanja</div>
                        <div class="i_b_txt bn f52 w">i predavača</div>
                        <div class="i_s f18 ">
                            je otvorena!
                        </div>
                    </a>
                    <a class="i_b_txt bn f52 w pt20" style="display:block;"  id="open_volunteers_dialog" href="">
                            <!--Preliminarni raspored konferencije-->
                    </a>
                </div>
                <?php /* ?>
                <div class="info info2 fr">
                    <div class="b bn f52"><a class="b bn f52" href="/hr/raspored-predavanja" >Raspored predavanja</a></div>
                    <div class="b bn f52"></div>
                    <!--<div class="b f18 pt28 h20"><a class="t_d_u" href="#" style="display:block">Apply here</a></div>-->
                    <!--<div class="f13 h52 w"></div>-->
                </div>
                
                <?php */ ?>
                <div class="info info2 fr">
                    <div class="b bn f52">Nagrada otvorena</div>
                    <div class="b bn f52">Informatika</div>
                   <div class="b f18 pt28 h20"><a class="t_d_u" href="http://www.open.hr/2015/02/natjecaj-za-dodjelu-nagrade-otvorena-informatika-za-postignuca-u-2014-godini/" style="display:block">Prijavite se!</a></div>
                    <!--<div class="f13 h52 w"></div>-->
                </div>
                
            </div>
            <div class="clear"></div>
        </div>

        <?php endif; ?>
