<!DOCTYPE html>
<html>
<head>
<?php //theme tutorial used: http://www.onextrapixel.com/2011/03/08/how-to-code-a-wordpress-3-0-theme-from-scratch/ ?>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <title><?php /*the_title() ." ".*/ bloginfo("name"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/ui-css/jquery-ui.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/dc2014_wp_theme/dcfavicon.png" />
    <script src="<?php bloginfo('template_url');?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/ui-minified/jquery-ui.min.js"></script>

    <script>
        <?php // The smooth scrolling javascript ?>
        $(function() {
            $(".scroll").click(function (event) {
                event.defaultPrevented = 1;
                //calculate destination place
                var dest = 0;
                if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                    dest = $(document).height() - $(window).height();
                } else {
                    dest = $(this.hash).offset().top;
                }
                //go to destination
                $('html,body').animate({
                    scrollTop: dest
                }, 2000, 'swing');
            });
        });
    </script>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

