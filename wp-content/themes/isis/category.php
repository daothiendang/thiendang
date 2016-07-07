
<?php 
/**
 * The template for displaying Category pages
 *
 * @package Imonthemes
 * @subpackage isis
 * @since isis 1.5
 */

get_header(); ?>
<div class="row warp">
    <div id="content">
        <div class="top-content">
            <?php get_template_part('' . $isis = of_get_option('layout1_images') . ''); ?>
            <?php get_template_part('pagination'); ?>
        </div>
        <?php
            if (of_get_option('nosidebar_checkbox') == "0") {
                get_sidebar();
            }
        ?>
    </div>
</div> 
<?php get_footer();