<?php get_header(); ?>
<?php // if (is_home()) { ?>
    <!--<div class="row">--> 
<!--        <div id="slider">
            <?php // if (get_option('isis')) { ?>
                <?php // get_template_part('' . $slides = of_get_option('slider_select', 'nivo') . ''); ?>
            <?php // } else { ?>
                <?php // get_template_part('dummy/dummy', 'nivo'); ?>
            <?php // } ?>
        <?php // } ?>
        </div>-->
    <!--</div>-->
    <div class="row">
        <?php echo do_shortcode('[slideshow_deploy id="46"]');?>
    </div>
</div>
</div>
    <!--MIDROW STARTS-->
    <div class="row "> 
        <?php if (is_home()) { ?>
            <div class="services-wrap large-12 columns">
                <?php if (get_option('isis')) { ?>   
                    <?php if (of_get_option('blocks_checkbox', 'isis') == "1") { ?>
                        <div class="midrow">
                            <div class="midrow_wrap">  
                                <?php if (of_get_option('block1_text')) { ?>     
                                    <div class="midrow_blocks">  
                                        <div class="midrow_blocks_wrap">
                                            <i class="fa <?php echo of_get_option('block1_logo'); ?> fa-3x icon"></i> 
                                            <div class="midrow_block">
                                                <div class="mid_block_content">
                                                    <h3><?php echo of_get_option('block1_text'); ?></h3>
                                                    <p><?php echo of_get_option('block1_textarea'); ?></p>
                                                </div>
                                                <?php if (of_get_option('block1_link')) { ?><a href="<?php echo of_get_option('block1_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a><?php } ?>
                                            </div>
                                        </div>
                                        <div class="shadow"><img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" /></div>
                                    </div>
                                <?php } ?>
                                <?php if (of_get_option('block2_text')) { ?>  
                                    <div class="midrow_blocks">  
                                        <div class="midrow_blocks_wrap">
                                            <i class="fa <?php echo of_get_option('block2_logo'); ?> fa-3x icon"></i>
                                                <div class="midrow_block">
                                                    <div class="mid_block_content">
                                                        <h3><?php echo of_get_option('block2_text'); ?></h3>
                                                        <p><?php echo of_get_option('block2_textarea'); ?></p>
                                                    </div>
                                            <?php if (of_get_option('block2_link')) { ?><a href="<?php echo of_get_option('block2_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a><?php } ?>
                                                </div>
                                        </div>
                                        <div class="shadow"><img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" /></div>
                                    </div>
                                <?php } ?>

                                <?php if (of_get_option('block3_text')) { ?>
                                    <div class="midrow_blocks">  
                                        <div class="midrow_blocks_wrap">
                                            <i class="fa <?php echo of_get_option('block3_logo'); ?> fa-3x icon"></i>
                                                <div class="midrow_block">
                                                    <div class="mid_block_content">
                                                        <h3><?php echo of_get_option('block3_text'); ?></h3>
                                                        <p><?php echo of_get_option('block3_textarea'); ?></p>
                                                    </div>
                                                    <?php if (of_get_option('block3_link')) { ?><a href="<?php echo of_get_option('block3_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a><?php } ?>
                                                </div>
                                        </div>
                                        <div class="shadow"><img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" /></div>
                                    </div>
                                <?php } ?>

                                <?php if (of_get_option('block4_text')) { ?>
                                    <div class="midrow_blocks">  
                                        <div class="midrow_blocks_wrap">
                                            <i class="fa <?php echo of_get_option('block4_logo'); ?> fa-3x icon"></i>
                                            <div class="midrow_block">
                                                <div class="mid_block_content">
                                                    <h3><?php echo of_get_option('block4_text'); ?></h3>
                                                    <p><?php echo of_get_option('block4_textarea'); ?></p>
                                                </div>
                                                <?php if (of_get_option('block4_link')) { ?><a href="<?php echo of_get_option('block4_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a><?php } ?>
                                            </div>
                                        </div>
                                        <div class="shadow"><img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" /></div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php get_template_part('dummy/dummy', 'bloks'); ?>
                        <?php } ?>  
                            </div>
                        </div>
        </div>   
    </div><!--MIDROW END-->
<?php } ?>
</div> 
<?php if (is_home()) { ?>
    <div class="row "> 
        <div class="warp large-12 columns">
            <?php if (get_option('isis')) { ?>
                <!--recent work-->
                <?php if (of_get_option('recentwork_checkbox', 'isis') == "1") { ?>
                    <?php get_template_part('parts/mid', 'contant'); ?>
                <?php } ?>
            <?php } else { ?>
            <?php get_template_part('dummy/dummy', 'contant'); ?>
        <?php } ?> 
        </div>
    </div>		
    <?php } ?>
</div>




<!--recent work end-->
<!--MIDROW END-->
<?php if (is_home()) { ?>

    <div class="warp row">
        <div class=" large-12">
        <?php if (of_get_option('isis_welcome')) : ?>
            <section id="callout"><!-- Start Callout section -->
                <?php echo apply_filters('the_content', of_get_option('isis_welcome')); ?>
            </section>
        </div>
    </div>          <!-- END #callout -->
    <?php endif; ?>
<?php } ?> 
<!--Layout--></div>
</div>

<!--LATEST POSTS-->
<?php if (get_option('isis')) { ?>
    <?php if (is_home()) { ?>
        <div class="row "> 
            <div class="warp columns ">

        <?php if (of_get_option('latstpst_checkbox') == "1") {
            ?><?php get_template_part('' . $os_lays = of_get_option('layout1_images', 'layout1') . ''); ?><?php } else { ?><?php } ?>
    <?php } else { ?>
                <?php get_template_part('' . $os_lays = of_get_option('layout1_images', 'layout1') . ''); ?>

            <?php } ?> 
        <?php } else { ?>

            <?php get_template_part('dummy/dummy', 'layout1'); ?>
        <?php } ?> 
    </div>
</div>
</div>
        <?php if (of_get_option('ourclient_checkbox', 'isis') == "1") { ?>
            <div class="row "> 
                <div class=" warp large-12 columns">
                    <?php get_template_part('parts/our', 'client'); ?>
                </div>
            </div>
        <?php } ?> 

<!--LATEST POSTS END-->

<!--Layout END-->


<?php get_footer(); ?>