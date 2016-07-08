<div class="row"> 
    <div id="branding2">
        <div id="site-title2">
        <?php if (of_get_option('isis_logo_image')) { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-img"><img src="<?php echo of_get_option('isis_logo_image'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
        <?php } else { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo('description'); ?>" rel="home"><?php bloginfo('name'); ?></a>
        <?php } ?>
        </div>
        <div class="desc"><?php bloginfo('description'); ?></div>
    </div>
</div>
<div class="row">
    <div id="menu_wrap2">
        <div id="navmenu">
            <?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
        </div>
    </div>
    <div id="hot_list">
        Top phim hot:
        <a href="http://thiendang.vn/phineas-and-ferb/">Phineas and Ferb;</a>
        <a href="http://thiendang.vn/tag/ban-trai-toi-500-tuoi/">Bạn Trai Tôi 500 Tuổi;</a>
        <a href="http://thiendang.vn/tag/khi-nguoi-dan-ong-yeu/">Khi Người Đàn Ông Yêu;</a>
        <a href="http://thiendang.vn/tag/ceo-tai-ba/">CEO Tài Ba</a>
    </div>
</div>
</div>
</div>