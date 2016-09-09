
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
            <?php 
                get_template_part('' . $isis = of_get_option('layout1_images') . '');
                get_template_part('pagination');
                $curCat = get_category ($cat);
                $currentLink = $linkFbComment . 'category/' . $curCat->slug;
                include(locate_template('share_this.php'));
            ?>
            <div style="margin:30px auto; width:90%">
                <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            </div>
            <div class="comments_template">
                <?php comments_template('', true); ?>
            </div>
        </div>
        <?php
            if (of_get_option('nosidebar_checkbox') == "0") {
                get_sidebar();
            }
        ?>
    </div>
</div>
<?php get_footer();