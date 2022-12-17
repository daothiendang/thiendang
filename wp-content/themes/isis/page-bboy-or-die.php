<?php 
get_header(); ?>

<div class="row">
    <div class="large-12">
        <div id="content">
            <div class="top-content2" style="background: #E7E2E4;">
                <div class="post_content" style="padding-bottom:30px;">
                    <div class="metainfo"><?php edit_post_link(); ?></div>
                    <div id="sub_banner">
                        <h1>B-BOY OR DIE!</h1>
                    </div>
                    <div style="margin:25px 15px;">
                        <h5>Check out my breakdance photos ^^</h5>
                    </div>
                    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1000px;margin:0px auto 98px;">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
							<?php
							$bboy = array(
								array("fujisan_airchair", "Airchair or die"),
								array('skiing', 'Trượt tuyết Nagoya'),
								array("paris_eiffel", "Paris - In the city of love"),
								array("one_hand_stand", "Treo chuối một tay ở Big Ben :))"),
								array("sing_marina_bay", "Hello from the horizontal side"),
								array("malaysia_petronas_towers", "Tháp đôi Kuala Lumpur"),
								array("amsterdam_windmill", "Breakdance windmill vs real Holland windmill :))"),
								array("pisa_leaning_tower", "Leaning at Pisa - The leanning Tower"),
								array("rome_colosseum", "Nike kick - Đấu trường La Mã"),
								array("elbow_handstand", "Elbow freeze at Stonehenge"),
								array("tokyo_tower_handhop", "Handhop - Tokyo đất chật người đông"),
								array("osaka_castle", "Thành cổ osaka"),
								array("kyoto_bamboo_forest", "Các chàng trai vàng trong làng airchair =))"),
								array("airchair", "Airchair on a chair"),
								array("airbaby_with_bending_leg", "airbaby gập chân"),
								array("bntt", "Bước nhảy tuổi teen"),
								array("bntt_2", "Bước nhảy tuổi teen"),
								array("handstand", "Handstand"),
								#array("handhop", "Nhảy chuối một tay"),
								#array("handstand_1", ""),
								array("headspin", "Quay đầu là hiphop"),
								array("leaning_handstand", "Biển Quảng Bình"),
								array("NiI", "NiI Crew"),
								array("sidechair", "Sidechair"),
								array("turtle_freeze", "Ke rùa một tay"),
								array("vũ điệu trẻ", "Giải nhất Vũ điệu trẻ"),
							);
							
							?>
                            <ul class="amazingslider-slides" style="display:none;">
								<?php
								foreach ($bboy as $big_photo) {
									echo '<li><img src="' . $themeUrl . '/images/bboy_or_die/' . $big_photo[0] . '.jpg" alt="' . $big_photo[0] . '"data-description="' . $big_photo[1] . '" /></li>';
								}
								?>
                            </ul>
                            <ul class="amazingslider-thumbnails" style="display:none;">
								<?php
								foreach ($bboy as $small_photo) {
									echo '<li><img src="' . $themeUrl . '/images/bboy_or_die/' . $small_photo[0] . '-tn.jpg" alt="' . $small_photo[0] . '"/></li>';
								}
								?>
                            </ul>
                            <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Image Slider">Responsive jQuery Image Slider</a></div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div style="position: relative; margin:0px 15px; top: 30px;">
                        <?php
                            $currentLink = $linkFbComment . str_replace(home_url(), '', get_permalink());
                            include(locate_template('share_this.php'));
                        ?>
                        <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
                    </div>
                </div>
                <div class="space35"></div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $themeUrl;?>/js/custom/sliderengine/amazingslider.js"></script>
<script src="<?php echo $themeUrl;?>/js/custom/sliderengine/initslider-1.js"></script>

<?php get_footer();