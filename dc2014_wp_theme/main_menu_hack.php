        <div class="nav ddg ib">
	         <div class="nav_triangle"></div>
            <?php
            $args = array(
	            'theme_location'  => '',
	            'menu'            => 'primary_menu',
	            'container'       => '<span>',
	            'container_class' => '',
	            'container_id'    => '',
	            'menu_class'      => 'menu',
	            'menu_id'         => '',
	            'echo'            => '0',
	            'fallback_cb'     => 'wp_page_menu',
	            'before'          => '',
	            'after'           => '',
	            'link_before'     => '',
	            'link_after'      => '',
	            'items_wrap'      => '%3$s',
	            'depth'           => 0,
	            'walker'          => ''
            );
            #must hack the menu...:
            $menu = wp_nav_menu( $args );
            $menu = str_replace(array("<li", "</li>"), array("<div class='nav_links ib'", "</div>"), $menu);
            echo $menu;//var_dump($menu);
            ?>
        </div>
