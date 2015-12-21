<?php get_header(); ?>
<div class="row">
    <div id="sub_banner">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
    <div id="content">
        <div class="top-content">
            <div <?php post_class(); ?>> 
                <div class="post_content">
                    <label>Tìm kiếm theo</label>
                    <select id="search_option">
                        <option value="stt">Số thứ tự</option>
                        <option value="số nét">Số nét</option>
                    </select>
                    <select id="so_thu_tu">
                        <option value="all">Hiện toàn bộ</option>
                        <option value="1 - 40">1 - 40</option>
                        <option value="41 - 80">41 - 80</option>
                        <option value="81 - 120">81 - 120</option>
                        <option value="121 - 160">121 - 160</option>
                        <option value="161 - 200">161 - 200</option>
                        <option value="201 - 214">201 - 214</option>
                    </select>
                    <select id="so_net" style="display: none;">
                        <option value="1">1 nét</option>
                        <option value="2">2 nét</option>
                        <option value="3">3 nét</option>
                        <option value="4">4 nét</option>
                        <option value="5">5 nét</option>
                        <option value="6">6 nét</option>
                        <option value="7">7 nét</option>
                        <option value="8">8 nét</option>
                        <option value="9">9 nét</option>
                        <option value="10">10 nét</option>
                        <option value="11">11 nét</option>
                        <option value="12">12 nét</option>
                        <option value="13">13 nét</option>
                        <option value="14">14 nét</option>
                        <option value="15">15 nét</option>
                        <option value="16">16 nét</option>
                        <option value="17">17 nét</option>
                    </select>
                    <br/>
                    <div>
                        <input type="text" id="search_text"/>
                        <button id="search_button" class="btn-sm">Tìm kiếm</button>
                    </div>
                    <div id="fixed_wrap">
                        <div id="toggle_button">
                            <div id="toggle_bo_thu" class="active">Ẩn/Hiện Bộ thủ</div>
                            <div id="toggle_han_viet" class="active">Ẩn/Hiện Âm Hán Việt</div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <?php
                    global $wpdb;
                    $sql = 'SELECT * FROM kanji_bo_thu';
                    $results = $wpdb->get_results($sql, ARRAY_A);
                    // echo '<pre>';print_r($result);die;
                    foreach ($results as $item) {
                        //echo $item['so_net'] . ', ' . $item['bo_thu'] . ', ' . $item['han_viet'] . ', ' . $item['y_nghia'] . '<br/>';
                        echo '<div class="item">';
                        echo '<span>' . $item['id'] . '</span>';
                        echo '<div class="bo_thu">';
                        echo '<span>' . $item['bo_thu'] . '</span>';
                        echo '</div>';
                        echo '<div class="han_viet">';
                        echo '<span>' . $item['han_viet'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
                <div class="post_info_wrap">
                    
                </div>
                <div style="clear:both"></div>	
                <div class="post_wrap_n">
                </div>
            </div>
            <div class="comments_template"><?php comments_template('', true); ?></div>
            <?php $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home'))); ?>
            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>
</div>
<?php get_footer(); ?>

<style>
    .top-content select {
        width: auto;
    }
    #search_text {
        float: left;
    }
    #search_button {
        margin-left: 10px;
    }
    
    .fixed_wrap {
        height: 27px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        border: 1px solid #CCC;
        background: #FFF;
    }
    #toggle_button {
        margin-bottom: 10px;
        width: 300px;
    }
    #toggle_button div {
        float: left;
        margin-right: 10px;
        background: blue;
        color: #FFF;
        padding: 5px;
        cursor: pointer
    }
    .fixed_button {
        position: fixed;
        left: 50%;
        top: 0;
        transform: translateX(-50%);
    }
    .fixed_button #toggle_han_viet {
        left: 195px;
    }
    
    .item {
        float: left;
        margin: 5px;
        padding: 5px;
        width: 100px;
        text-align: center;
    }
    .bo_thu {
        height: 80px;
        border: 1px solid #CCC;
        text-align: center;
        font-size: 70px;
        color: #75BF75;
        cursor: pointer;
    }
    .han_viet {
        margin-top: 6px;
        height: 24px;
        line-height: 20px;
    }
</style>
<script>
    var $ = jQuery;
    
    var buttonDistance = $('#toggle_button').offset().top;
    $(window).on('scroll', function() {
        var windowDistance = window.pageYOffset;
        if(windowDistance > buttonDistance) {
            $('#toggle_button').addClass('fixed_button');
            $('#fixed_wrap').addClass('fixed_wrap');
        } else {
            $('#toggle_button').removeClass('fixed_button');
            $('#fixed_wrap').removeClass('fixed_wrap');
        }
    });
    
    $('#search_option').change(function() {
        option = $(this).val();
        if (option === 'stt') {
            $('#so_net').hide();
            $('#so_thu_tu').show();
        } else {
            $('#so_thu_tu').hide();
            $('#so_net').show();
        }
    });
    var ajaxUrl = siteUrl + 'wp-admin/admin-ajax.php'
    $('#so_thu_tu').change(function() {
        stt = $(this).val();
        $.ajax({
            url: ajaxUrl,
            data: {
                'action': 'search_bo_thu',
                'so_thu_tu': stt
            },
            success: function (data) {
                alert(data);
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });
    $('#so_net').change(function() {
        soNet = $(this).val();
    });
    
    $('#toggle_bo_thu').click(function() {
        $('.bo_thu span').toggle();
    });
    $('#toggle_han_viet').click(function() {
        $('.han_viet span').toggle();
    });
</script>