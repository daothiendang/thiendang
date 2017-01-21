<?php include(locate_template('header.php')); ?>
<style type="text/css">
    .top-content input {
        float: left;
        margin-left: 10px;
    }
    .top-content label {
        float: left;
        margin-left: 3px;
        color: #5BC0DE;
    }
    .top-content textarea {
        width: 100%;
        height: 150px;
    }
    #result_sky, #result_ferb {
        color: #1D6EE7;
    }
</style>

<div class="row">
    <div id="sub_banner">
        <h1><?php the_title(); ?></h1>
    </div>
    <div id="content">
        <div class="top-content">
            <?php echo apply_filters('the_content', $post->post_content); ?><br>
            <p>Ngôn ngữ Sky: thêm 's cuối mỗi từ</p>
            <input type="radio" value="to_sky" name="radio_sky" checked id="radio_to_sky"/>
            <label for="radio_to_sky">Tiếng việt sang ngôn ngữ Sky</label>
            <input type="radio" value="from_sky" name="radio_sky" id="radio_from_sky"/>
            <label for="radio_from_sky">Ngôn ngữ Sky sang tiếng Việt</label>
            <textarea rows="10" name="input_sky" id="input_sky"></textarea>
            <div id="result_sky"></div>
            
            <br/><br/><br/><br/>
            <p>Ngôn ngữ Ferb Latin: Chuyển phụ âm của từ xuống cuối và thêm -erb.<br>
                Các từ dưới 3 chữ cái thì giữ nguyên. Ví dụ: Thiên đàng -> Iên-therb àng-đerb</p>
            <input type="radio" value="to_ferb" name="radio_ferb" checked id="radio_to_ferb"/>
            <label for="radio_to_ferb">Tiếng việt/ Tiếng anh sang ngôn ngữ Ferb Latin</label>
            <input type="radio" value="from_ferb" name="radio_ferb" id="radio_from_ferb"/>
            <label for="radio_from_ferb">Ngôn ngữ Ferb Latin sang Tiếng việt/ Tiếng anh</label>
            <textarea rows="10" name="input_ferb" id="input_ferb"></textarea>
            <div id="result_ferb"></div>
            
            
            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            <div class="comments_template"><?php comments_template('', true); ?></div>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == '0') { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>
<?php get_footer();?>
<script>
    // search after finish typing 0.5 second
    var typingTimer = 0;
    var doneTypingInterval = 500;
    $('#input_sky').on('input', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(update_translate_sky, doneTypingInterval);
    });
    $('input[name=radio_sky]').change(function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(update_translate_sky, doneTypingInterval);
    });
    
    $('#input_ferb').on('input', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(update_translate_ferb, doneTypingInterval);
    });
    $('input[name=radio_ferb]').change(function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(update_translate_ferb, doneTypingInterval);
    });
    
    
    var ajaxUrl = siteUrl + 'wp-admin/admin-ajax.php';
    function update_translate_sky() {
        option = $('input[name=radio_sky]:checked').val();
        text   = $('#input_sky').val();
        if ($.trim(text) === '') {
            return false;
        }
        if (text.length > 200) {
            return alert('Vui lòng nhập dưới 200 từ');
        }
        $.ajax({
            url: ajaxUrl,
            data: {
               'action': 'translate_sky',
               'option': option,
               'text': $.trim(text)
            },
            success: function (data) {
               $('#result_sky').html(data);
            },
            error: function (errorThrown) {
               alert(errorThrown);
            }
         });
    }
    
    function update_translate_ferb() {
        option = $('input[name=radio_ferb]:checked').val();
        text   = $('#input_ferb').val();
        if ($.trim(text) === '') {
            return false;
        }
        if (text.length > 200) {
            return alert('Vui lòng nhập dưới 200 từ');
        }
        $.ajax({
            url: ajaxUrl,
            data: {
               'action': 'translate_ferb',
               'option': option,
               'text': $.trim(text)
            },
            success: function (data) {
               $('#result_ferb').html(data);
            },
            error: function (errorThrown) {
               alert(errorThrown);
            }
         });
    }
</script>