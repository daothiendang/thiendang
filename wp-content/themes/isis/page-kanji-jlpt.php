<style type="text/css">
    @font-face {
        font-family: UVNBachTuyet;
        src: url(<?php echo $themeUrl; ?>/fonts/UVNBachTuyet.TTF);
    }
    @font-face {
        font-family: UVNLaXanh;
        src: url(<?php echo $themeUrl; ?>/fonts/UVNLaXanh.TTF);
    }
    
    #top_button {
        float: left;
        width: 100%;
    }
    #top_button button {
        float: left;
        margin: 5px 0 20px 5px;
        padding-right: 10px;
    }
    #top_button button .caret {
        margin-left: 5px;
    }
    .toggle_info {
        display: none;
        margin-bottom: 20px;
        padding: 0 10px;
    }
    .toggle_info p {
        color: #097FC7;
    }
    .toggle_info a {
        color: #ed008e;
    }
    #search_section {
        margin: 0 10px;
    }
    .top-content select {
        width: auto;
        font-size: 15px;
    }
    .top-content input {
        min-width: 200px;
        height: 15px;
    }
    input[type="search"] {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-appearance: searchfield;
    }
    input[type="search"]::-webkit-search-cancel-button {
        -webkit-appearance: searchfield-cancel-button;
    }
    
    .fixed_wrap {
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 32px;
        border-bottom: 1px solid #CCC;
        background: #1F0B0B;
    }
    #toggle_button {
        margin-bottom: 10px;
    }
    #toggle_button div {
        float: left;
        padding: 7px;
        border: 1px solid #090F4C;
        background: #CCC;
        font-size: 15px;
        font-family: UVNBachTuyet;
        color: #F10B0B;
        cursor: pointer;
    }
    #toggle_button #toggle_han_viet {
        margin-left: 10px;
    }
    .fixed_button {
        position: relative;
        margin: 0 auto;
        width: 300px;
    }
    .fixed_button #toggle_han_viet {
        left: 195px;
    }
    
    #paging {
        float: left;
        margin-top: 15px;
        width: 100%;
        text-align: center;
    }
    #paging li {
        display: inline;
        padding: 8px 16px;
        border-radius: 5px;
        border: 1px solid #ddd;
        text-decoration: none;
        cursor: pointer;
        transition: background-color .3s;
    }
    #paging li.active {
        color: red;
        background-color: #4CAF50;
        color: white;
        cursor: default;
    }
    #paging li:not(.active):hover {
        background-color: #ddd;
    }
    
    #list_kanji {
        float: left;
        width: 100%;
    }
    .item {
        float: left;
        margin: 5px;
        padding: 5px;
        width: 100px;
        text-align: center;
    }
    .kanji {
        padding-top: 3px;
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
    
    .popup {
        display :none;
        position: fixed;
        z-index: 1001;
        top: 5%;
        left: 30%;
        width: 40%;
        height: 90%;
        min-height: 300px;
        max-height: 600px;
        border-radius: 10px;
        margin: 0;
        background: #FFFFFF;
        font-size: 20px;
    }
    #popup_header {
        clear: both;
        height: 35px;
        border-bottom: 1px solid #B39C9C;
        width: 100%;
    }
    .popup_title {
        float: left;
        margin-top: 10px;
        width: 100%;
        text-align: center;
        color: #05BAD2;
    }
    .btn_close {
        position: absolute;
        right: 0;
        padding: 10px;
        width: 36px;
        border-left: 1px solid #B39C9C;
        border-top-right-radius: 10px;
        background: #E6E6E6;
        text-align: right;
        cursor: pointer;
    }
    .popup_content {
        clear: both;
        overflow-y: auto;
        padding: 0 34px;
        height: 85%;
    }
    #popup1 .words {
        display: none;
        position: relative;
        margin: 0 auto;
        max-width: 100%;
        text-align: center;
        color: #841D1D;
    }
    #popup1 .words > div {
        margin: 15px auto;
    }
    #popup1 .words .kanji {
        width: 140px;
        height: 140px;
        padding-top: 10px;
        font-size: 120px;
        cursor: default;
    }
    .detail {
        line-height: 24px;
        font-size: 18px;
        color: gray;
    }
    .detail .thanh_phan, .detail .kun_yomi, .detail .on_yomi {
        color: #D03609;
    }
    
    #black_overlay {
        position: fixed;
        top:0%;
        left: 0%;
        width: 100%;
        height: 100%;
        display: none;
        background-color: black;
        z-index: 1000;
        -moz-opacity: .9;
        opacity: .9;
        filter: alpha(opacity=90);
    }
    .popup .prev, .popup .next {
        position: absolute;
        z-index: 1004;
        top: 45%;
        font-size: 30px;
    }
    .prev {
        left: 5px;
    }
    .next {
        right: 5px;
    }
    
    #popup2 .popup_content {
        margin: 0 auto;
        padding: 15px;
        width: 600px;
        max-width: 100%;
    }
    #test_type h3 {
        margin-top: 0;
        color: #6309DC;
    }
    h5 {
        font-size: 18px;
        color: #6309DC;
    }
    #test_type div {
        float: left;
        width: 100%;
    }
    .test_type_option input {
        float: left;
        margin-top: 3px;
    }
    .test_type_option label {
        float: left;
        margin-left: 8px;
    }
    #total_question {
        width: 100px;
    }
    #max_question {
        color: #F50FEE;
    }
    #test_type div:last-child {
        text-align: center;
    }
    
    .question {
        display: none;
        float: left;
        width: 100%;
    }
    .question .quest_title {
        display: inline-block;
        margin: 10px;
        height: auto;
        border: 0;
        font-size: 45px;
        color: red;
        cursor: default;
    }
    .question .answer {
        float: left;
        width: 100%;
    }
    .question .answer input {
        float: left;
        margin-top: 3px;
    }
    .question .answer label {
        float: left;
        margin-left: 8px;
    }
    
    #result div {
        margin-bottom: 10px;
    }
    
    @media screen and (max-width: 767px) {
        .item {
            margin: 0;
        }
        .popup {
            left: 0;
            width: 100%;
        }
    }
</style>
<?php
/*
 * Template Name: Page Kanji JLPT
 */

include(locate_template('header.php'));
$title = get_the_title();
$level = strtolower(substr($title, -2));

global $wpdb;
$sqlTotal = 'SELECT count(id) FROM kanji_' . $level;
$total = $wpdb->get_var($sqlTotal);
$sql = 'SELECT * FROM kanji_' . $level . ' LIMIT 100';
$results = $wpdb->get_results($sql, ARRAY_A);
?>
<div class="row">
    <div id="sub_banner">
        <h1><?php echo $title; ?></h1>
    </div>
    <div id="content">
        <div class="top-content">
            <div id="top_button">
                <button class="btn btn-primary" id="btn_intro">
                    Giới thiệu <span class="caret"></span>
                </button>
                <button class="btn btn-primary" id="btn_how_to_use">
                    Hướng dẫn <span class="caret"></span>
                </button>
                <button id="btn_test" class="btn btn-danger">Kiểm tra</button>
            </div>
            <div class="toggle_info" id="intro">
                <h2>Giới thiệu</h2>
                <?php echo apply_filters('the_content', $post->post_content); ?>
            </div>
            <div class="toggle_info" id="how_to_use">
                <h2>Chức năng chính</h2>
                <p>- Hiển thị theo số thứ tự hoặc số nét.</p>
                <p>- Tìm theo kanji hoặc âm Hán Việt.</p>
                <p>- Ẩn/Hiện kanji hoặc Ẩn/Hiện Hán Việt.</p>
                <p>- Click vào kanji hiện popup thông tin chi tiết.
                    Click 2 mũi tên trên màn hình hoặc bấm nút mũi tên trên bàn phím để xem từ tiếp theo hoặc quay lại
                    (Trên mobile và tablet có thể vuốt sang trái sang phải).
                </p>
                <p>- Kiểm tra: Những từ được kiểm tra là những từ đang hiện trên màn hình.
                    Chọn loại câu hỏi và số lượng câu hỏi, bấm Bắt Đầu.
                </p>
            </div>
            <div id="search_section">
                Sắp xếp theo
                <select id="order_by">
                    <option value="id">on_yomi</option>
                    <option value="kun_yomi">kun_yomi</option>
                    <option value="so_net">Số nét</option>
                    <option value="han_viet">Âm Hán Việt</option>
                </select>
                <select id="order">
                    <option value="asc">Tăng dần (abcxyz)</option>
                    <option value="desc">Giảm dần (zyxcba)</option>
                </select><br/>
                Số từ trên một trang
                <select id="words_per_page">
                    <option value="50">50</option>
                    <option value="100" selected>100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="<?php echo $total; ?>">Toàn bộ</option>
                </select><br/>
                <span style="float: left; margin: 10px 10px 0 0;">Từ cần tìm </span>
                <input type="search" id="search_text" placeholder="Nhập kanji, Hán Việt, kun yomi, hoặc on yomi" />
                <div id="fixed_wrap">
                    <div id="toggle_button">
                        <div id="toggle_kanji" class="active">Ẩn/Hiện kanji</div>
                        <div id="toggle_han_viet" class="active">Ẩn/Hiện Hán Việt</div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            
            <?php $numOfPages = ceil($total / 100); ?>
            <ul id="paging">
                <?php
                    if ($numOfPages > 1) {
                        echo '<li class="active">1</li>';
                        for ($i = 2; $i <= $numOfPages; $i++) {
                            echo '<li>' . $i . '</li>';
                        }
                    }
                ?>
            </ul>
            <div id="list_kanji">
                <?php
                    $count = 1;
                    foreach ($results as $item) {
                        echo '<div class="item" id="item_' . $item['id'] . '">';
                        echo '<span>' . $count . '</span>';
                        echo '<div class="kanji">';
                        echo '<span>' . $item['kanji'] . '</span>';
                        echo '</div>';
                        echo '<div class="han_viet">';
                        echo '<span>' . $item['han_viet'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                        $count++;
                    }
                ?>
            </div>
            <?php
                $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home')));
                include(locate_template('share_this.php'));
            ?>
            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            <div class="comments_template"><?php comments_template('', true); ?></div>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>

<div class="popup" id="popup1">
    <div id="popup_header">
        <div class="popup_title">Chi Tiết</div>
        <div class="btn_close"><img src="<?php echo $themeUrl; ?>/css/img/closebox.png" /></div>
    </div>
    <div class="popup_content">
        <?php $count = 1; ?>
        <?php foreach ($results as $item) { ?>
            <div id="word_<?php echo $count; ?>" class="words number_<?php echo $item['id']; ?>">
                <?php
                    echo '<div class="position">' . $count . '. <span class="han_viet">' . $item['han_viet'] . '</span></div>';
                    echo '<div class="kanji">' . $item['kanji'] . '</div>';
                    echo '<div class="detail">';
                    echo '<span class="y_nghia">' . $item['y_nghia'] . '</span><br/>';
                    echo 'Bộ thành phần: <span class="thanh_phan">' . $item['bo_thanh_phan'] . '</span><br/>';
                    echo 'On yomi: <span class="on_yomi">' . $item['on_yomi'] . '</span><br/>';
                    echo 'Kun yomi: <span class="kun_yomi">' . $item['kun_yomi'] . '</span><br/>';
                    echo 'Số nét: <span class="so_net">' . $item['so_net'] . '</span>';
                    echo '</div>';
                    $count++;
                ?>
            </div>
        <?php } ?>
        <a href="javascript:void(null)" class="prev glyphicon glyphicon-arrow-left"></a>
        <a href="javascript:void(null)" class="next glyphicon glyphicon-arrow-right"></a>
    </div>
</div>
<div class="popup" id="popup2">
    <div id="popup_header">
        <div class="popup_title">Kiểm tra</div>
        <div class="btn_close"><img src="<?php echo $themeUrl; ?>/css/img/closebox.png" /></div>
    </div>
    <div class="popup_content">
        <form action="#" id="test_type">
            <h3>Chọn bài kiểm tra</h3>
            <div class="test_type_option">
                <input type="radio" name="test_type" value="chu_han" id="test_chu_han" checked />
                <label for="test_chu_han">Chữ Hán</label><br/>
            </div>
            <div class="test_type_option">
                <input type="radio" name="test_type" value="tu_vung" id="test_tu_vung" />
                <label for="test_tu_vung">Từ vựng</label>
            </div>
            <table>
                <tr>
                    <td id="list_quest_type">
                        <h5>Chọn loại câu hỏi</h5>
                        <div class="test_type_option">
                            <input type="radio" name="quest_type" value="kanji" id="quest_chu_han" checked />
                            <label for="quest_chu_han">Chữ Hán</label><br/>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="quest_type" value="han_viet" id="quest_han_viet" />
                            <label for="quest_han_viet">Âm Hán Việt</label>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="quest_type" value="on_yomi" id="quest_on_yomi" />
                            <label for="quest_on_yomi">on_yomi</label>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="quest_type" value="kun_yomi" id="quest_kun_yomi" />
                            <label for="quest_kun_yomi">kun_yomi</label>
                        </div>
                    </td>
                    <td id="list_answer_type">
                        <h5>Chọn câu trả lời</h5>
                        <div class="test_type_option">
                            <input type="radio" name="answer_type" value="kanji" id="answer_chu_han" />
                            <label for="answer_chu_han">Chữ Hán</label><br/>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="answer_type" value="han_viet" id="answer_han_viet" />
                            <label for="answer_han_viet">Âm Hán Việt</label>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="answer_type" value="on_yomi" id="answer_on_yomi" checked />
                            <label for="answer_on_yomi">on_yomi</label>
                        </div>
                        <div class="test_type_option">
                            <input type="radio" name="answer_type" value="kun_yomi" id="answer_kun_yomi" />
                            <label for="answer_kun_yomi">kun_yomi</label>
                        </div>
                    </td>
                </tr>
            </table>
            <h5>Số lượng câu hỏi</h5>
            <div><input type="number" min="1" max="214" id="total_question" value="1" /></div>
            <div>(Số câu tối đa <span id="max_question"></span>)</div>
            <div>
                <input type="submit" class="btn-success btn-sm" value="Bắt Đầu" id="btn_start_test" style="margin: 10px auto 0 auto;" />
            </div>
        </form>
        <div style="display: none; text-align:center;" id="loading_message">
            Đang tạo câu hỏi, xin đợi một chút...<br/><img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/ajax_loader_blue_32.gif" />
        </div>
        <div><button id="btn_confirm" class="btn-sm btn-success" style="display: none;">Chọn</button></div>
        <div id="result"></div>
    </div>
</div>
<div id="black_overlay"></div>
<?php get_footer(); ?>

<script>
    var $ = jQuery;
    $(document).bind('mobileinit', function() {
        $.mobile.page.prototype.options.keepNative = "*";
        $.mobile.hidePageLoadingMsg();
    });
</script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
    var level = '<?php echo $level; ?>';
    var ajaxUrl = siteUrl + 'wp-admin/admin-ajax.php';
    
    $('#btn_intro').click(function() {
        $('#how_to_use').hide();
        $('#intro').slideToggle('slow', 'swing', function() {
            buttonDistance = $('#toggle_button').offset().top;
        });
    });
    $('#btn_how_to_use').click(function() {
        $('#intro').hide();
        $('#how_to_use').slideToggle('slow', 'swing', function() {
            buttonDistance = $('#toggle_button').offset().top;
        });
    });
    
    var buttonDistance = $('#toggle_button').offset().top;
    $(window).on('scroll', function() {
        var windowDistance = window.pageYOffset - 100;
        if(windowDistance > buttonDistance) {
            $('#toggle_button').addClass('fixed_button');
            $('#fixed_wrap').addClass('fixed_wrap');
        } else {
            $('#toggle_button').removeClass('fixed_button');
            $('#fixed_wrap').removeClass('fixed_wrap');
        }
    });
    
    $('#order, #order_by, #words_per_page').change(function() {
        update_search($('#paging li.active').text());
    });
    $('#words_per_page').change(function() {
        update_search();
//        wordsTotal   = <?php // echo $total; ?>;
//        wordsPerPage = $('#words_per_page').val();
//        if (wordsPerPage !== 'all') {
//            pagingTotal = Math.ceil(wordsTotal / wordsPerPage);
//            pagingContent = '';
//            for (i = 1; i <= pagingTotal; i++) {
//                pagingContent += '<li>' + i + '</li>';
//            }
//            $('#paging').html(pagingContent);
//            $('#paging li:first-child').addClass('active');
//            $('#paging').show();
//        }
    });
    $('#search_text').on('input', function() {
        update_search();
    });
    $(document).on('click', '#paging li', function() {
        if (!$(this).hasClass('active')) {
            $('#paging li.active').removeClass('active');
            $(this).addClass('active');
            update_search($(this).text());
        }
    });
    
    function update_search(page) {
        $('#list_kanji').html('<div style="width: 100%; text-align: center;"><img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/ajax_loader_blue_32.gif" /></div>');
        search       = $.trim($('#search_text').val());
        orderBy      = $('#order_by').val();
        order        = $('#order').val();
        wordsPerPage = $('#words_per_page').val();
        if (!page) {
            page = 1;
        }
        $.ajax({
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'action'        : 'search_kanji',
                'level'         : level,
                'search'        : search,
                'order_by'      : orderBy,
                'order'         : order,
                'page'          : page,
                'words_per_page': wordsPerPage
            },
            success: function (data) {
                content      = '';
                popupContent = '';
                
                listKanji = data['list'];
                if (listKanji.length === 0) {
                    $('#list_kanji').html('<p>Không tìm thấy. Xin hãy thử lại!</p>');
                    return false;
                }
                
                if (data['total']) {
                    total = data['total'];
                } else {
                    total = <?php echo $total; ?>;
                }
                
                numOfPage = Math.ceil(total / wordsPerPage);
                pagingContent = '';
                if (numOfPage > 1) {
                    for (i = 1; i <= numOfPage; i++) {
                        if (i == page) {
                            pagingContent += '<li class="active">' + i + '</li>';
                        } else {
                            pagingContent += '<li>' + i + '</li>';
                        }
                    }
                }
                $('#paging').html(pagingContent);
                
                count = (page - 1) * wordsPerPage + 1;
                for (i = 0; i < listKanji.length; i++) {
                    content += 
                        '<div class="item" id="item_' + listKanji[i]['id'] + '">' +
                            '<span>' + count + '</span>' +
                            '<div class="kanji">' +
                                '<span>' + listKanji[i]['kanji'] + '</span>' +
                            '</div>' +
                            '<div class="han_viet">' +
                                '<span>' + listKanji[i]['han_viet'] + '</span>' +
                            '</div>' +
                        '</div>';
                    popupContent += 
                        '<div id="word_' + listKanji[i]['id'] + '" class="words number_' + count + '">' +
                            '<div class="position">' + count + '. <span class="han_viet">' + listKanji[i]['han_viet'] + '</span></div>' +
                            '<div class="kanji">'   + listKanji[i]['kanji'] + '</div>' +
                            '<div class="detail">' +
                                '<span class="y_nghia">' + listKanji[i]['y_nghia'] + '</span><br/>' +
                                'Bộ thành phần: <span class="thanh_phan">' + listKanji[i]['bo_thanh_phan'] + '</span><br/>' +
                                'On yomi: <span class="on_yomi">' + listKanji[i]['on_yomi'] + '</span><br/>' +
                                'Kun yomi: <span class="kun_yomi">' + $.trim(listKanji[i]['kun_yomi']) + '</span><br/>' +
                                'Số nét: <span class="so_net">' + listKanji[i]['so_net'] + '</span>' +
                            '</div>' +
                        '</div>';
                    count++;
                }
                $('#list_kanji').html(content);
                $('#popup1 .words').remove();
                $('#popup1 .popup_content').append(popupContent);
                total = count - 1;
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    }
    
    $('#toggle_kanji').click(function() {
        $('.kanji span').toggle();
    });
    $('#toggle_han_viet').click(function() {
        $('.han_viet span').toggle();
    });
    
    
    index = 1;
    total = <?php echo $count - 1; ?>;
    
    $(document).on('click', '#list_kanji .item', function() {
        index = $(this).attr('id').replace('item_', '');
        $('#popup1, #black_overlay').show();
        $('.words').hide();
        $('#word_' + index).show();
    });
    
    <?php // stop gallery ?>
    $('.btn_close, #black_overlay').click(function() {
        if ($('#popup2').is(':visible') && $('#popup2 .question').is(':visible')) {
            var stop = confirm('Bạn muốn dừng bài kiểm tra?\n(Dữ liệu bài kiểm tra sẽ mất)');
            if (stop) {
                $('#test_type').show();
                $('#popup2 .question').remove();
                $('#btn_confirm').text('Chọn');
                $('#result').html('');
                totalRight = 0;
                $('#popup2 .popup_title').text('Kiểm tra');
                $('.popup, #black_overlay, #btn_confirm, #result').hide();
            }
        } else if ($('#popup2').is(':visible')) {
            $('#result').html('');
            $('#popup2 .question').remove();
            $('#popup2 .popup_title').text('Kiểm tra');
            $('.popup, #black_overlay, #result').hide();
        } else if ($('#popup1').is(':visible')) {
            $('.popup, #black_overlay').hide();
        }
    });
    
    <?php // prev, next ?>
    $('.prev').click(function() {
        min = $('#list_kanji .item:first-child > span').text();
        if (index == min) {
            index = $('#list_kanji .item:last-child > span').text();;
        } else {
            index--;
        }
        $('.words').hide();
        $('#word_' + index).show();
    });
    $('.next').click(function() {
        max = $('#list_kanji .item:last-child > span').text();
        if (index == max) {
            index = $('#list_kanji .item:first-child > span').text();
        } else {
            index++;
        }
        $('.words').hide();
        $('#word_' + index).show();
    });
    $(document).keydown(function(e) {
        if ($('#popup1').is(':visible')) {
            switch (e.keyCode) {
                case 37:
                    $('.next').blur();
                    $('.prev').click().focus();
                    break;
                case 39:
                    $('.prev').blur();
                    $('.next').click().focus();
                    break;
            }
        }
    });
    $('#popup1').on('swipeleft', function() {
        if ($(window).width() < 768) {
            $('.prev').blur();
            $('.next').click().focus();
        }
    }).on('swiperight', function() {
        if ($(window).width() < 768) {
            $('.next').blur();
            $('.prev').click().focus();
        }
    });
    
    var maxQuest = 0;
    $('#btn_test').click(function() {
        $('#test_type, #popup2, #black_overlay').show();
        maxQuest = $('#list_kanji .item').length;
        $('#max_question').text(maxQuest);
        $('#total_question').attr('max', maxQuest);
        if ($('#total_question').val() > maxQuest) {
            $('#total_question').val(maxQuest);
        }
    });
    $('#total_question').on('input', function() {
        if ($(this).val().length > 3) {
            $(this).val($(this).val().slice(0, 3));
        } else if ($(this).val() > maxQuest) {
            $(this).val(maxQuest);
        }
    });
    $('input[name="quest_type"]').click(function() {
        questType  = $('input[name="quest_type"]:checked').val();
        answerType = $('input[name="answer_type"]:checked').val();
        if (questType === answerType) {
            currentAnswer = $('input[name="answer_type"][value="' + answerType + '"]')
            currentAnswer.prop('checked', false);
            if (currentAnswer.parent().is(':last-child')) {
                $('#list_answer_type input').eq(0).prop('checked', true);
            } else {
                currentAnswer.parent().next().find('input').prop('checked', true);
            }
        }
    });
    $('input[name="answer_type"]').click(function() {
        questType  = $('input[name="quest_type"]:checked').val();
        answerType = $('input[name="answer_type"]:checked').val();
        if (questType === answerType) {
            currentQuest = $('input[name="quest_type"][value="' + questType + '"]')
            currentQuest.prop('checked', false);
            if (currentQuest.parent().is(':last-child')) {
                $('#list_quest_type input').eq(0).prop('checked', true);
            } else {
                currentQuest.parent().next().find('input').prop('checked', true);
            }
        }
    });
    
    $('#btn_start_test').click(function(e) {
        e.preventDefault();
        testType   = $('input[name="test_type"]:checked').val();
        if (testType === 'tu_vung') {
            alert('Chưa có dữ liệu cho phần này!');
            return false;
        }
        
        totalQuest = $.trim($('#total_question').val());
        if (totalQuest === '') {
            alert('Hãy nhập số lượng câu hỏi');
            $('#total_question').focus();
            return false;
        } else if (totalQuest > maxQuest) {
            return(alert('Số lượng câu hỏi phải nhỏ hơn ' + maxQuest));
        } else if (totalQuest < 1) {
            return(alert('Số lượng câu hỏi phải lớn hơn 1'));
        }
        
        questType  = $('input[name="quest_type"]:checked').val();
        answerType = $('input[name="answer_type"]:checked').val();
        
        $('#test_type').hide();
        $('#loading_message').show();
        listWords = '';
        $('#popup1 .words').each(function() {
            itemId     = parseInt($(this).attr('id').replace('word_', ''));
            kanji      = $(this).find('.kanji').text();
            hanViet    = $(this).find('.han_viet').text();
            onYomi     = $(this).find('.on_yomi').text();
            kunYomi    = $(this).find('.kun_yomi').text();
            listWords += itemId + '+' + kanji + '+' + hanViet + '+' + onYomi + '+' + kunYomi + '&';
        });
        listWords = listWords.slice(0, -1);
        
        $.ajax({
            url: ajaxUrl,
            dataType: 'json',
            method: 'post',
            data: {
                'action'     : 'create_questions_kanji',
                'level'      : level,
                'test_type'  : testType,
                'quest_type' : questType,
                'answer_type': answerType,
                'total'      : totalQuest,
                'list_words' : listWords
            },
            success: function (data) {
                popupContent = '';
                for (i = 0; i < data.length; i++) {
                    popupContent += '<div class="question" id="question_' + (i + 1) + '">' +
                            'Câu ' + (i + 1) + '/' + data.length +
                            '<input type="hidden" value="' + data[i]['id'] +'" class="word_id" />' +
                            '<br/><div class="quest_title">' + data[i]['quest'] + '</div>';
                    for (j = 0; j < 4; j++) {
                        answerName = 'answer_' + i;
                        answerId   = 'answer_' + i + '.' + j;
                        popupContent += '<div class="answer">';
                        if (j === data[i]['right']) {
                            popupContent += '<input type="radio" id="' + answerId + '" name="' + answerName + '" value="right" />';
                        } else {
                            popupContent += '<input type="radio" id="' + answerId + '" name="' + answerName + '" />';
                        }
                        popupContent += '<label for="' + answerId +'">' + data[i]['answer'][j] + '</label></div>';
                    }
                    popupContent +='</div>';
                }
                $('#loading_message').hide();
                $('#popup2 .popup_content form').after(popupContent);
                $('#popup2 .popup_content .question:first, #btn_confirm, #result').show();
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });
    
    var totalRight = 0;
    $('#btn_confirm').on('click', function() {
        curQuest  = $('.popup_content .question:visible');
        if (curQuest.find('input[type=radio]').is(':checked')) {
            questId   = parseInt(curQuest.attr('id').replace('question_', ''));
            nextQuest = curQuest.next('.question');
            curQuest.find('input[type=radio]').attr('disabled', 'disabled');
            
            if ($(this).text() === 'Chọn') {
                wordId  = $('#popup1 #word_' + curQuest.find('.word_id').val());
                kanji   = wordId.find('.kanji').text();
                hanViet = wordId.find('.han_viet').text();
                detail  = wordId.find('.detail').html();
                result  = kanji + ' (' + hanViet + '):<div class="detail">' + detail + '</div>';
                
                chosen  = $('input:checked', curQuest).val();
                if (chosen === 'right') {
                    $('#result').html('<div style="color: green;">Đúng</div>' + result);
                    totalRight++;
                } else {
                    $('#result').html('<div style="color: red;">Sai</div>' + result);
                }
                $('#popup2 .popup_title').text('Số câu đúng: ' + totalRight);

                $(this).text('Câu tiếp theo');
            } else if ($(this).text() === 'Câu tiếp theo') {
                curQuest.hide();
                $(this).text('Chọn');
                if (nextQuest.size() > 0) {
                    $('#result').html('');
                    nextQuest.show();
                } else {
                    $(this).hide();
                    $('#result').html('Bạn trả lời đúng ' + totalRight + '/' + questId + ' câu');
                    totalRight = 0;
                }
            }
        }
    });
</script>