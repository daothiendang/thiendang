<button id="toggle_sidebar" class="btn-info btn-sm">Ẩn sidebar</button>
<div id="sidebar">
    <div class="widgets">
        <?php if (is_active_sidebar('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) {} ?>
        <div id="archives-2" class="widget widget_archive">
            <div class="widget_wrap">
                <h3 class="widgettitle">Tiếng Nhật</h3>
                <?php
                    $siteUrl = get_site_url() . '/';
                    $args = array('numberposts' => 5, 'category_name' => 'tieng-nhat');
                    $posts = get_posts($args);
                ?>
                <ul>
                    <?php foreach ($posts as $post) { ?>
                        <li>
                            <a href="<?php echo $siteUrl . $post->post_name; ?>">
                                <?php echo $post->post_title; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>