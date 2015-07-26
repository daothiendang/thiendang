<?php get_header(); ?>
<div class="row">
    <div class="large-12">
        <div id="content">
            <div class="top-content2">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                        <?php the_post(); ?>
                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                            <div class="post_content">
                                <div class="metainfo"><?php edit_post_link(); ?></div>
                                <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1000px;margin:0px auto 98px;">
                                    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                        <ul class="amazingslider-slides" style="display:none;">
                                            <li><img src="images/one_hand_stand.jpg" alt="one_hand_stand" data-description="Treo chuối một tay ở Big Ben :))" />
                                            </li>
                                            <li><img src="images/air_baby.jpg" alt="air_baby" data-description="Airbaby at the beach" />
                                            </li>
                                            <li><img src="images/elbow_handstand.jpg" alt="elbow_handstand" data-description="Chống khuỷu ở Stonehenge" />
                                            </li>
                                            <li><img src="images/airchair.jpg" alt="airchair_on_a_chair" data-description="airchair trên ghế" />
                                            </li>
                                            <li><img src="images/airbaby_with_bending_leg.jpg" alt="airbaby_at_home" data-description="air baby gập chân" />
                                            </li>
                                            <li><img src="images/bntt.jpg" alt="bntt" />
                                            </li>
                                            <li><img src="images/bntt_2.jpg" alt="bntt_2" />
                                            </li>
                                            <li><img src="images/handhop.jpg" alt="handhop" data-description="Nhảy chuối một tay" />
                                            </li>
                                            <li><img src="images/handstand.jpg" alt="handstand" />
                                            </li>
                                            <li><img src="images/handstand_1.jpg" alt="handstand_1" />
                                            </li>
                                            <li><img src="images/headspin.jpg" alt="headspin" />
                                            </li>
                                            <li><img src="images/leaning_handstand.jpg" alt="leaning_handstand" />
                                            </li>
                                            <li><img src="images/NiI.jpg" alt="NII crew" />
                                            </li>
                                            <li><img src="images/sidechair.jpg" alt="sidechair" />
                                            </li>
                                            <li><img src="images/turtle_freeze.jpg" alt="turtle_freeze" data-description="Ke rùa một tay" />
                                            </li>
                                            <li><img src="images/v%C5%A9%20%C4%91i%E1%BB%87u%20tr%E1%BA%BB.jpg" alt="vũ điệu trẻ" data-description="Giải nhất Vũ điệu trẻ" />
                                            </li>
                                        </ul>
                                        <ul class="amazingslider-thumbnails" style="display:none;">
                                            <li><img src="images/one_hand_stand-tn.jpg" alt="one_hand_stand" /></li>
                                            <li><img src="images/air_baby-tn.jpg" alt="air_baby" /></li>
                                            <li><img src="images/elbow_handstand-tn.jpg" alt="elbow_handstand" /></li>
                                            <li><img src="images/airchair-tn.jpg" alt="airchair_on_a_chair" /></li>
                                            <li><img src="images/airbaby_with_bending_leg-tn.jpg" alt="airbaby_at_home" /></li>
                                            <li><img src="images/bntt-tn.jpg" alt="bntt" /></li>
                                            <li><img src="images/bntt_2-tn.jpg" alt="bntt_2" /></li>
                                            <li><img src="images/handhop-tn.jpg" alt="handhop" /></li>
                                            <li><img src="images/handstand-tn.jpg" alt="handstand" /></li>
                                            <li><img src="images/handstand_1-tn.jpg" alt="handstand_1" /></li>
                                            <li><img src="images/headspin-tn.jpg" alt="headspin" /></li>
                                            <li><img src="images/leaning_handstand-tn.jpg" alt="leaning_handstand" /></li>
                                            <li><img src="images/NiI-tn.jpg" alt="NII crew" /></li>
                                            <li><img src="images/sidechair-tn.jpg" alt="sidechair" /></li>
                                            <li><img src="images/turtle_freeze-tn.jpg" alt="turtle_freeze" /></li>
                                            <li><img src="images/v%C5%A9%20%C4%91i%E1%BB%87u%20tr%E1%BA%BB-tn.jpg" alt="vũ điệu trẻ" /></li>
                                        </ul>
                                    <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Image Slider">Responsive jQuery Image Slider</a></div>
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            <?php endwhile ?> 
                            </div>
                        <div class="space35"></div>
                    <?php endif ?>
                        </div>
                <!--PAGE END-->
            </div>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>
<script>
    var $ = jQuery;
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom/japanese_ngu_phap_so_cap/hoverPlugIn.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom/japanese_ngu_phap_so_cap/popup.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom/japanese_ngu_phap_so_cap/script.js"></script>