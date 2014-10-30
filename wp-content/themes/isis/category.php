
<?php 
/**
 * The template for displaying Category pages
 *
 * @package Imonthemes
 * @subpackage isis
 * @since isis 1.5
 */


get_header(); ?>
<div class="row  warp">
<div class="large-12 ">
 
<div style="min-height:500px; margin-top:40px;">

<?php get_template_part(''.$isis = of_get_option('layout1_images').''); ?>



</div>
<?php get_template_part('pagination'); ?>  
</div></div>
 
<?php get_footer(); ?>