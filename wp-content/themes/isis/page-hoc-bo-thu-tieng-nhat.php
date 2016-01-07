<?php include(locate_template('header.php'));; ?>
<div class="row">
    <div id="sub_banner">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
    <div id="content">
        <div class="top-content">
            <button id="btn_test" class="btn-sm btn-danger">Kiểm tra</button>
            <div id="search_section">
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
                <div>
                    <input type="text" id="search_text" placeholder="Nhập bộ thủ hoặc âm Hán Việt" />
                    <button id="search_button" class="btn-sm">Tìm kiếm</button>
                </div>
                <div id="fixed_wrap">
                    <div id="toggle_button">
                        <div id="toggle_bo_thu" class="active">Ẩn/Hiện Bộ thủ</div>
                        <div id="toggle_han_viet" class="active">Ẩn/Hiện Hán Việt</div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div id="list_bo_thu">
                <?php
                    global $wpdb;
                    $sql = 'SELECT * FROM kanji_bo_thu';
                    $results = $wpdb->get_results($sql, ARRAY_A);
                    foreach ($results as $item) {
                        echo '<div class="item" id="item_' . $item['id'] . '">';
                        echo '<div class="bo_thu">';
                        echo '<span>' . $item['bo_thu'] . '</span>';
                        echo '</div>';
                        echo '<div class="han_viet">';
                        echo '<span>' . $item['han_viet'] . '</span>';
                        echo '</div>';
                        if ($item['bien_the'] != '') {
                            echo '<div class="bien_the">' . $item['bien_the'] . '</div>';
                        }
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="comments_template"><?php comments_template('', true); ?></div>
            <?php $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home'))); ?>
            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>

<div class="popup" id="popup1">
    <div id="popup_header">
        <div class="popup_title">
            Chi Tiết
        </div>
        <div class="btn_close"><img src="<?php echo $themeUrl; ?>/css/img/closebox.png" /></div>
    </div>
    <div class="popup_content">
        <?php $count = 1; ?>
        <?php foreach ($results as $item) { ?>
            <div id="word_<?php echo $count; ?>" class="words number_<?php echo $item['id']; ?>">
                <?php
                    echo '<div class="position">' . $item['id'] . '. ' . $item['han_viet'] . '</div>';
                    echo '<div class="bo_thu">' . $item['bo_thu'] . '</div>';
                    echo '<div class="y_nghia">' . $item['y_nghia'] . '</div>';
                    if ($item['bien_the'] != '') {
                        echo '<div>Biến thể:<br/><div class="bien_the">' . $item['bien_the'] . '</div></div>';
                    }
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
        <div class="popup_title">
            Kiểm tra
        </div>
        <div class="btn_close"><img src="<?php echo $themeUrl; ?>/css/img/closebox.png" /></div>
    </div>
    <div class="popup_content">
        <form action="#" id="test_type">
            <h3>Chọn loại câu hỏi</h3>
            <div class="test_type_option">
                <input type="radio" name="test_type" value="chu_han" id="test_chu_han" checked />
                <label for="test_chu_han">Chữ Hán</label><br/>
            </div>
            <div class="test_type_option">
                <input type="radio" name="test_type" value="han_viet" id="test_han_viet" />
                <label for="test_han_viet">Âm Hán Việt</label>
            </div>
            <h3>Số lượng câu hỏi</h3>
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
<style type="text/css">
    @font-face {
        font-family: UVNBachTuyet;
        src: url(<?php echo $themeUrl; ?>/fonts/UVNBachTuyet.TTF);
    }
    @font-face {
        font-family: UVNLaXanh;
        src: url(<?php echo $themeUrl; ?>/fonts/UVNLaXanh.TTF);
    }
    
    #btn_test {
        margin-left: 10px;
    }
    #search_section {
        margin: 0 10px;
    }
    .top-content select {
        width: auto;
    }
    .top-content input {
        min-width: 200px;
    }
    #search_text {
        float: left;
    }
    #search_button {
        margin-left: 10px;
    }
    
    .fixed_wrap {
        height: 32px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
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
    #list_bo_thu .bien_the {
        display: none;
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
        padding-top: 15px;
        height: 85%;
    }
    #popup1 .words {
        display: none;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        margin: 0 auto;
        max-width: 100%;
        text-align: center;
        color: #841D1D;
    }
    #popup1 .words > div {
        margin: 15px auto;
    }
    #popup1 .words .bo_thu {
        width: 140px;
        height: 140px;
        padding-top: 10px;
        font-size: 120px;
        cursor: default;
    }
    #popup1 .words .bien_the {
        margin-top: 5px;
        font-size: 50px;
        color: #75BF75;
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
    .prev, .next {
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
        width: 400px;
        max-width: 100%;
    }
    #test_type h3 {
        margin-top: 0;
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
    .question .bo_thu {
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
<script>
    var $ = jQuery;
    $(document).bind('mobileinit', function() {
        $.mobile.page.prototype.options.keepNative = "*";
        $.mobile.hidePageLoadingMsg();
    });
</script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
    var buttonDistance = $('#toggle_button').offset().top;
    $(window).on('scroll', function() {
        var windowDistance = window.pageYOffset - 80;
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
    
    $('#so_thu_tu, #so_net').change(function() {
        update_search($(this).attr('id'), $(this).val());
    });
    
    $('#search_text').on('keypress', function (event) {
         if(event.which === 13){
            hit_search();
         }
   });
    $('#search_button').click(function() {
        hit_search();
    });
    
    function hit_search() {
        searchText = $.trim($('#search_text').val());
        if (searchText === '') {
            if ($('#so_net').is(':visible')) {
                type  = 'so_net';
                value = $('#so_net').val();
            } else {
                type  = 'so_thu_tu';
                value = $('#so_thu_tu').val();
            }
        } else {
            type  = 'search';
            value = searchText;
        }
        update_search(type, value);
    }
    
    var ajaxUrl = siteUrl + 'wp-admin/admin-ajax.php';
    function update_search(type, value) {
        $.ajax({
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'action': 'search_bo_thu',
                'type': type,
                'value': value
            },
            success: function (data) {
                count        = 1;
                content      = '';
                popupContent = '';
                for (i = 0; i < data.length; i++) {
                    if (data[i]['bien_the'] !== null) {
                        bienTheContent = '<div class="bien_the">' + data[i]['bien_the'] + '</div>';
                        bienThePopup   = '<div>Biến thể:<br/><div class="bien_the">' + data[i]['bien_the'] + '</div></div>';
                    } else {
                        bienTheContent = '';
                        bienThePopup   = '';
                    }
                    
                    content += 
                        '<div class="item" id="item_' + data[i]['id'] + '">' +
                            '<div class="bo_thu">' +
                                '<span>' + data[i]['bo_thu'] + '</span>' +
                            '</div>' +
                            '<div class="han_viet">' +
                                '<span>' + data[i]['han_viet'] + '</span>' +
                            '</div>' + bienTheContent +
                        '</div>';
                    popupContent += 
                        '<div id="word_' + count + '" class="words number_' + data[i]['id'] + '">' +
                            '<div class="position">' + data[i]['id'] + '. ' + data[i]['han_viet'] + '</div>' +
                            '<div class="bo_thu">'   + data[i]['bo_thu'] + '</div>' +
                            '<div class="y_nghia">'  + data[i]['y_nghia'] + '</div>' + bienThePopup +
                        '</div>';
                    count++;
                }
                $('#list_bo_thu').html(content);
                $('#popup1 .words').remove();
                $('#popup1 .popup_content').append(popupContent);
                total = count - 1;
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    }
    
    $('#toggle_bo_thu').click(function() {
        $('.bo_thu span').toggle();
    });
    $('#toggle_han_viet').click(function() {
        $('.han_viet span').toggle();
    });
    
    
    index = 1;
    total = <?php echo $count - 1; ?>;
    
    $(document).on('click', '.bo_thu', function() {
        index = $('#list_bo_thu .item').index($(this).parent()) + 1;
        $('#popup1, #black_overlay').show();
        $('.words').hide();
        $('#word_' + index).show();
    });
    
    <?php // stop gallery ?>
    $('.btn_close, #black_overlay').click(function() {
        if ($('#popup2').is(':visible')) {
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
        } else {
            $('.popup, #black_overlay').hide();
        }
    });
    
    <?php // prev, next ?>
    $('.prev').click(function() {
        if (index === 1) {
            index = total;
        } else {
            index--;
        }
        $('.words').hide();
        $('#word_' + index).show();
    });
    $('.next').click(function() {
        if (index === total) {
            index = 1;
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
        maxQuest = $('#list_bo_thu .item').length;
        $('#max_question').text(maxQuest);
        $('#total_question').attr('max', maxQuest);
    });
    $('#total_question').on('input', function() {
        if ($(this).val().length > 3) {
            $(this).val($(this).val().slice(0, 3));
        } else if ($(this).val() > maxQuest) {
            $(this).val(maxQuest);
        }
    });
    $('#btn_start_test').click(function(e) {
        e.preventDefault();
        testType   = $('input[name="test_type"]:checked').val();
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
        
        $('#test_type').hide();
        $('#loading_message').show();
        listWords = '';
        $('#list_bo_thu .item').each(function() {
            itemId     = parseInt($(this).attr('id').replace('item_', ''));
            boThu      = $(this).find('.bo_thu span').text();
            hanViet    = $(this).find('.han_viet span').text();
            if ($(this).find('.bien_the').length > 0) {
                boThu += ', ' + $(this).find('.bien_the').text();
            }
            listWords += itemId + '.' + boThu + '.' + hanViet + ';';
        });
        
        
        $.ajax({
            url: ajaxUrl,
            dataType: 'json',
            data: {
                'action'    : 'create_questions',
                'type'      : testType,
                'total'     : totalQuest,
                'list_words': listWords
            },
            success: function (data) {
                popupContent = '';
                for (i = 0; i < data.length; i++) {
                    popupContent += '<div class="question" id="question_' + (i + 1) + '">' +
                            'Câu ' + (i + 1) + '/' + data.length +
                            '<input type="hidden" value="' + data[i]['id'] +'" class="word_id" />' +
                            '<br/><div class="bo_thu">' + data[i]['quest'] + '</div>';
                    for (j = 0; j < 4; j++) {
                        answerName = 'answer_' + i;
                        answerId   = 'answer_' + i + '.' + j;
                        popupContent += '<div class="answer">';
                        if (j == data[i]['right']) {
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
                chosen  = $('input:checked', curQuest).val();
                boThu   = curQuest.find('.bo_thu').text();
                hanViet = curQuest.find('input[value=right]').next().text();
                wordId  = curQuest.find('.word_id').val();
                yNghia  = $('.number_' + wordId).find('.y_nghia').text();
                result  = boThu + ' (' + hanViet + '): ' + yNghia;

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
                if (nextQuest.size() > 0) {
                    $(this).text('Chọn');
                    $('#result').html('');
                    nextQuest.show();
                } else {
                    $('#btn_confirm').hide();
                    $('#result').html('Bạn trả lời đúng ' + totalRight + '/' + questId + ' câu');
                }
            }
        }
    });
</script>