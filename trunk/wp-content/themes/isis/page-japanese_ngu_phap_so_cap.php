<?php
/*
  Template Name: Ngữ pháp sơ cấp tiếng Nhật bài 1-25
 */
?>
<?php get_header(); ?>
<div class="row">
    <div class="large-12">
        <?php $page2 = home_url() . '/giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt-3'; ?>
        <div id="content">
            <div class="top-content2">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                        <?php the_post(); ?>
                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                            <div class="post_content">
                                <div class="metainfo"><?php edit_post_link(); ?></div>
                                <div class="post_info_wrap">
                                    <?php the_content(); ?>
                                    <div class="center" style="margin: 0 0 0 65px;">
                                        <h2>Giáo trình 50 bài Shin no nihongo Đại học FPT</h2>
                                        <h2 style="margin-top: 10px;">Ngữ pháp từ bài 1 đến bài 25</h2>
                                        <div style="text-align:center;" id="loading_message">
					    Đang tải, xin đợi một chút... <img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/ajax_loader_blue_32.gif" />
					</div>
                                        <div class="paging">
                                            1&nbsp;&nbsp;-&nbsp;&nbsp;<a href="<?php echo $page2; ?>">2</a>
                                        </div>
                                        <table border="0" cellpadding="0" cellspacing="0" class="table" style="width: 850px;">
                                            <tr>
                                                <th width="4%">Bài</th>
                                                <th width="36%">Cấu trúc</th>
                                                <th width="60%">Ý nghĩa</th>
                                            </tr>
                                            <tr id="lesson_1">
                                                <td>1.1</td>
                                                <td>N1 は N2 です</td>
                                                <td>
                                                    <div class="summarize">N1 là N2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Danh từ đứng trước <span class="bold">は</span> là chủ đề hoặc chủ ngữ trong câu.<br>
                                                        - <span class="bold">です</span> được sử dụng cuối câu khẳng định, biểu lộ sự lịch sự đối với người nghe.<br>
                                                        - Đứng trước <span class="bold">です</span> là một danh từ hoặc tính từ.<br>
                                                        <span class="bold">* Chú ý: は</span> khi là trợ từ được đọc là <span class="bold">wa</span>, không phải <span class="bold">ha</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) わたし<span class="bold">は</span> たなかです。</div>
                                                                <div class="translate">Tôi <span class="bold">là</span> Tanaka.</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) わたし<span class="bold">は</span> 学生 です。</div>
                                                                <div class="translate">Tôi <span class="bold">là</span> sinh viên.</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.2</td>
                                                <td>N1 は N2 ではありません</td>
                                                <td>
                                                    <div class="summarize">N1 không phải là N2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - ではありません là dạng phủ định của です.<br>
                                                        - Trong hội thoại người ta có thể dùng <span class="bold">じゃ</span>ありません thay cho <span class="bold">では</span>ありません <br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ラオさんは エンジニアでは<span class="bold">（じゃ）ありません。</span></div>
                                                                <div class="translate">Anh Rao không phải là kỹ sư.</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý: では</span> đọc là <span class="bold">dewa</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.3</td>
                                                <td>S + か</td>
                                                <td>
                                                    <div class="summarize">1) Câu hỏi nghi vấn (câu hỏi Có Không)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Để tạo một câu hỏi chỉ cần thêm か vào cuối câu.<br>
                                                        - Câu trả lời cho loại câu hỏi này luôn phải có <span class="bold">はい (vâng, đúng)</span> hoặc <span class="bold">いいえ (không, 
                                                            không phải )</span>. Nếu giản lược đi bị xem là thất lễ.<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) マイさんは ベトナム人です<span class="bold">か</span></div>
                                                                <div class="translate">Bạn Mai là người Việt Nam <span class="bold">phải không?</span></div><br>
                                                                <div class="example">…<span class="bold">はい</span>、ベトナム人です</div>
                                                                <div class="translate">… <span class="bold">Đúng</span>, (bạn ấy) là người Việt Nam</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ミラさんは 学生ですか<span class="bold">か</span></div>
                                                                <div class="translate">Bạn Mira là học sinh <span class="bold">phải không?</span></div><br>
                                                                <div class="example">…<span class="bold">いいえ</span>、学生ではありません</div>
                                                                <div class="translate">… <span class="bold">Không,</span> (bạn ấy) không phải là học sinh</div>
                                                            </li>
                                                        </ul>
                                                    </div><br>
                                                    <div class="summarize">2) Câu hỏi có từ để hỏi</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Vị trí đặt từ để hỏi chính là chỗ có từ mà bạn muốn hỏi<br>
                                                        - Cuối câu hỏi đặt thêm trợ từ <span class="bold">か</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あの人は <span class="bold">だれ</span>ですか</div>
                                                                <div class="translate">Người kia là <span class="bold">ai?</span></div><br>
                                                                <div class="example">…<span class="bold">（あの人は）</span> 山田さんです</div>
                                                                <div class="translate">… (Người kia) Là anh Yamada</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi nói thì lên giọng ở trợ từ <span class="bold">か</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.4</td>
                                                <td>N も</td>
                                                <td>
                                                    <div class="summarize">N cũng</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        Trợ từ も được sử dụng thay cho は khi những thông tin về chủ đề của 
                                                        câu giống với những thông tin của chủ đề trước đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたし<span class="bold">は</span> <span class="underline">ベトナム人</span>ですか</div>
                                                                <div class="translate">Tôi là người Việt Nam</div>
                                                                <div class="example">タンさん<span class="bold">も</span> ベトナム人です</div>
                                                                <div class="translate">Anh Tân <span class="bold">cũng</span> là người Việt Nam</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.5</td>
                                                <td>N1 の N2</td>
                                                <td>
                                                    <div class="summarize">N2 của N1, N2 thuộc về N1</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Trợ từ の dùng để nối 2 danh từ<br>
                                                        - N1 làm rõ nghĩa cho N2<br>
                                                        - Trong bài này, N1 là một tổ chức, một nhóm mà N2 thuộc vào đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは FPT大学<span class="bold">の</span>学生です</div>
                                                                <div class="translate">Tôi là sinh viên của trường Đại học FPT</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.6</td>
                                                <td>～さん</td>
                                                <td>
                                                    <div class="summarize">Tên người + ～さん</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Trong tiếng Nhật sử dụng chữ さん đứng ngay sau tên của người nghe hoặc người 
                                                        thứ 3 để bày tỏ sự kính trọng đối với người đó.<br>
                                                        - Chữ さん không bao giờ sử dụng sau tên của chính mình<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは たなかです</div>
                                                                <div class="translate">Tôi là Tanaka</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あのかたは きむら<span class="bold">さん</span>です</div>
                                                                <div class="translate">Vị kia là Kimura</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi trao đổi trực tiếp thì người Nhật ít sử dụng あなた khi đã biết tên của người 
                                                        nghe, mà sẽ dùng tên để gọi. Ngoài ra, ở Nhật khi gọi một người nào đó thì gọi 
                                                        nguyên cả tên và họ hoặc chỉ cần gọi họ là đủ. Chỉ gọi tên trong những trường hợp 
                                                        bạn bè quen thân hay người thân trong gia đình
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.7</td>
                                                <td>～さい</td>
                                                <td>
                                                    <div class="summarize">～Tuổi</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        - Khi nói về tuổi thì thêm chữ さい (cách đếm tuổi) sau số thứ tự
                                                        - Khi hỏi tuổi sử dụng nghi vấn từ なんさい. Trường hợp lễ phép hơn dùng từ おいくつ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">すずきさんは <span class="bold">なんさい</span>（おいくつ）ですか</div>
                                                                <div class="translate">Cô Suzuki bao nhiêu tuổi?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...（わたしは）<span class="bold">29 </span>さいです</div>
                                                                <div class="translate">…(Tôi) 29 tuổi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... 29 です</div>
                                                                <div class="translate">29</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_2">
                                                <td>2.1</td>
                                                <td>これ／それ／あれ は N です</td>
                                                <td>
                                                    <div class="summarize">Cái này/cái đó/cái kia là N</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là các danh từ chỉ thị.<br>
                                                        - Được sử dụng như một danh từ.<br>
                                                        - Không có danh từ đi liền sau chúng.<br>
                                                        + これ dùng để chỉ vật ở gần người nói, xa người nghe (Trong phạm vi người nói)<br>
                                                        + それ dùng để chỉ vật ở gần người nghe, xa người nói (Trong phạm vi người nghe)<br>
                                                        + あれ dùng để chỉ vật ở xa cả hai người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="bold">これ</span>は 本ですか</div>
                                                                <div class="translate"><span class="bold">Đây là</span> quyển sách à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…いいえ、<span class="bold">それ</span>はノートです</div>
                                                                <div class="translate">… Không, <span class="bold">đó là</span> quyển vở</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) <span class="bold">あれ</span>は じどうしゃです</div>
                                                                <div class="translate"><span class="bold">Kia là</span> cái ô tô</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.2</td>
                                                <td>この N／その N／あの N</td>
                                                <td>
                                                    <div class="summarize">Cái N này/đó/kia</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - この、その、あの là các từ chỉ thị bổ nghĩa cho danh từ. Về tương quan khoảng 
                                                        cách thì giống với これ、それ、あれ nhưng khác về cách sử dụng vì luôn phải có 
                                                        danh từ đi liền đằng sau.<br/>
                                                        + “この N” dùng để chỉ vật hoặc người ở gần người nói, xa người nghe. <br>
                                                        + “その N” dùng để chỉ vật hay người ở gần người nghe, xa người nói.<br>
                                                        + “あの N” dùng để chỉ vật hay người ở xa cả hai người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">VD: あの人ひとは 山田さんです</div>
                                                                <div class="translate">Người kia là anh Yamada</div>
                                                            </li>
                                                        </ul>
                                                        Câu hỏi với từ để hỏi <span class="bold">なん?</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">N は <span class="bold">なん</span>ですか</div>
                                                                <div class="translate">N là <span class="bold">cái gì</span>?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý: なん</span> là từ để hỏi dùng cho vật, <span class="bold">だれ</span> là từ để hỏi dùng cho người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">これは <span class="bold">なん</span>ですか</div>
                                                                <div class="translate">Đây là <span class="bold">cái gì</span>?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…それは いすです</div>
                                                                <div class="translate">… Đó là cái ghế</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このひとは <span class="bold">だれ</span>ですか</div>
                                                                <div class="translate">Người này <span class="bold">là ai</span>?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…そのひとは 田中さんです</div>
                                                                <div class="translate">… Người đó là anh Tanaka</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi một vật ở gần cả hai người thì cả hai người đều có thể dùng これ hay この
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.3</td>
                                                <td>そうです／そうではありません</td>
                                                <td>
                                                    <div class="summarize">Đúng vậy/Không phải thế</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - そう được sử dụng để trả lời câu hỏi nghi vấn mà tận cùng là danh từ<br>
                                                        - Trong câu khẳng định dùng: はい、<span class="bold">そう</span>です<br>
                                                        - Trong câu phủ định dùng: いいえ、<span class="bold">そう</span>では（じゃ）ありません<br>
                                                        <span class="bold">* Chú ý:</span> Trong trường hợp câu nghi vấn mà tận cùng là động từ hay tính từ thì không 
                                                        sử dụng そうです hay そうではありません để trả lời<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) これは えんぴつですか</div>
                                                                <div class="translate">Đây là cái bút chì phải không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…はい、えんぴつです</div>
                                                                <div class="translate">…Vâng, đó là cái bút chì</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Hoặc …はい、<span class="bold">そうです</span></div>
                                                                <div class="translate">…Vâng, <span class="bold">đúng vậy</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) それは テレホンカードですか</div>
                                                                <div class="translate">Đó là cái thẻ điện thoại phải không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…いいえ、テレホンカードではありません</div>
                                                                <div class="translate">…Không, không phải cái thẻ điện thoại</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Hoặc …いいえ、<span class="bold">そうではありません</span></div>
                                                                <div class="translate">…Không, <span class="bold">không phải thế</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.4</td>
                                                <td>N1 ですか、N2 ですか</td>
                                                <td>
                                                    <div class="summarize">N1 hay là N2?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        Ở bài trước, N1 là một tổ chức mà N2 thuộc vào đó. Ở bài này trợ từ の có ý 
                                                        nghĩa chỉ sự sở hữu. N2 thuộc sở hữu của N1<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">これは わたし<span class="bold">の</span> ほんです</div>
                                                                <div class="translate">Đây là quyển sách <span class="bold">của</span> tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ボールペンです</div>
                                                                <div class="translate">…Là cái bút bi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - N2 đôi khi được lược bỏ khi đã được nhắc đến trước đó hay đã rõ nghĩa
                                                        - Khi N2 là một từ chỉ người thì không được bỏ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">それは ボールペン<span class="bold">ですか</span>、シャープペンシル<span class="bold">ですか</span></div>
                                                                <div class="translate">Đó là cái bút bi <span class="bold">hay là</span> bút chì kim?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ボールペンです</div>
                                                                <div class="translate">…Là cái bút bi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.5</td>
                                                <td>N1 の N2 (tiếp)</td>
                                                <td>
                                                    <div class="summarize">N2 của N1</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        Ở bài trước, N1 là một tổ chức mà N2 thuộc vào đó. Ở bài này trợ từ の có ý 
                                                        nghĩa chỉ sự sở hữu. N2 thuộc sở hữu của N1<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">これは わたし<span class="bold">の</span> ほんです</div>
                                                                <div class="translate">Đây là quyển sách <span class="bold">của</span> tôi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - N2 đôi khi được lược bỏ khi đã được nhắc đến trước đó hay đã rõ nghĩa<br>
                                                        - Khi N2 là một từ chỉ người thì không được bỏ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) あれは だれ<span class="bold">の</span>かばんですか</div>
                                                                <div class="translate">Kia là cái cặp <span class="bold">của</span> ai?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… わたし<span class="bold">の</span>です</div>
                                                                <div class="translate">… Là <span class="bold">của</span> tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) そのつくえは ラオさん<span class="bold">の</span>ですか</div>
                                                                <div class="translate">Cái bàn đó là <span class="bold">của</span> Rao phải không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… いいえ、ラオさん<span class="bold">の</span>ではありません</div>
                                                                <div class="translate">… Không, không phải <span class="bold">của</span> Rao</div>
                                                            </li>

                                                            <li>
                                                                <div class="example">3) ミラーさんは IMC <span class="bold">の</span>しゃいんですか</div>
                                                                <div class="translate">Mira là nhân viên công ty IMC phải không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… はい、IMC <span class="bold">の</span>しゃいんです</div>
                                                                <div class="translate">… Vâng, (anh ấy) là nhân viên công ty IMC</div><br>
                                                                (Không dùng : IMC のです)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.6</td>
                                                <td>そうですか</td>
                                                <td>
                                                    <div class="summarize">Ra vậy</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Sử dụng khi người nói nhận được thông tin mới và thể hiện 
                                                        rằng đã hiểu về nó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: このかさは あなたのですか</div>
                                                                <div class="translate">Cái ô này là của bạn à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: いいえ、タンさんのです</div>
                                                                <div class="translate">…Không, của anh Tân</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A: <span class="bold">そうですか</span></div>
                                                                <div class="translate">À, <span class="bold">ra vậy</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_3">
                                                <td>3.1</td>
                                                <td>ここ・そこ・あそこ は N ( địa điểm ) です</td>
                                                <td>
                                                    <div class="summarize">Chỗ này/đó/kia là N</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - <span class="bold">ここ、そこ、あそこ</span> là các đại danh từ chỉ nơi chốn<br>
                                                        - ここ chỉ chỗ của người nói. (Trong phạm vi của người nói)<br>
                                                        - そこ là chỗ của người nghe. (Trong phạm vi của người nghe)<br>
                                                        - あそこ chỉ nơi xa cả hai người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">ここ</span>は きょうしつです</div>
                                                                <div class="translate">Đây là phòng học</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">そこ</span>は おてあらいです</div>
                                                                <div class="translate">Đó là nhà vệ sinh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">あそこ</span>は しょくどうです</div>
                                                                <div class="translate">Kia là nhà ăn tập thể</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi người nói và người nghe ở cùng một địa điểm thì cả hai người đều sử dụng ここ
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.2</td>
                                                <td>N (địa điểm) はここ・そこ・あそこです</td>
                                                <td>
                                                    <div class="summarize">N ở chỗ này (chỗ đó, chỗ kia) (chỉ vị trí, tồn tại)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ロビーは <span class="bold">ここ</span>です</div>
                                                                <div class="translate">Hành lang ở đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">エレベーターは <span class="bold">あそこ</span>です</div>
                                                                <div class="translate">Cầu thang máy ở chỗ kia</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">うけつけは <span class="bold">そこ</span>です</div>
                                                                <div class="translate">Tiếp tân ở chỗ đó</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                    <div class="summarize">Câu hỏi cho địa điểm</div>
                                                    <div class="hide">
                                                        <div class="example">N (địa điểm) は どこ ですか</div>
                                                        <div class="translate">N ở đâu</div>
                                                        <span class="bold">* Chú ý:</span> Có thể mở rộng trường hợp này cho địa điểm tồn tại của người và vật<br>
                                                        N1( người hoặc vật ) は N2(địa điểm) です。 N1 ở N2<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ラオさんは うちです</div>
                                                                <div class="translate">Anh Rao ở nhà</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) マイさんは あそこです</div>
                                                                <div class="translate">Bạn Mai ở đằng kia</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) せんせいは きょうしつです</div>
                                                                <div class="translate">Cô giáo ở trong phòng học</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) マリアさんは どこですか</div>
                                                                <div class="translate">Bạn Maria ở đâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…にわです</div>
                                                                <div class="translate">…Ngoài sân</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.3</td>
                                                <td>こちら・そちら・あちら・どちら</td>
                                                <td>
                                                    <div class="summarize">Chỗ này/Chỗ đó/Chỗ kia</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Nghĩa tương đương với ここ・そこ・あそこ・どこ nhưng trang trọng, lịch sự hơn<br>
                                                        - Nghĩa gốc của chúng là các đại danh từ chỉ phương hướng<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) でんわは <span class="bold">どちら</span>ですか</div>
                                                                <div class="translate">Điện thoại <span class="bold">ở đâu</span> nhỉ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">… あちら</span>です</div>
                                                                <div class="translate">… Ở <span class="bold">đằng kia</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2)（お）くには <span class="bold">どちら</span>ですか</div>
                                                                <div class="translate">Đất nước của bạn là <span class="bold">ở đâu</span>?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ベトナムです</div>
                                                                <div class="translate">… Việt Nam</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Với câu hỏi 「あなたのかいしゃは どちらですか。」thì có thể hiểu theo 2 
                                                        nghĩa: Công ty bạn ở đâu? và Công ty bạn là công ty nào? (tên công ty). 
                                                        Nhưng phần lớn được hiểu theo nghĩa thứ 2. Và ở đây, quy định là hiểu theo 
                                                        nghĩa thứ 2<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あなたのかいしゃは どちらですか</div>
                                                                <div class="translate">Công ty của bạn là công ty nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… FPT です</div>
                                                                <div class="translate">… FPT</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.4</td>
                                                <td>これ・それ・あれ は N1 の N2 です</td>
                                                <td>
                                                    <div class="summarize">1. Khi muốn nói 1 đồ vật nào đó có xuất xứ từ đâu, do nước nào hoặc 
                                                        công ty nào sản xuất ra</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) あれは 日本 <span class="bold">の</span> シャープペンシルです</div>
                                                                <div class="translate">Kia là bút chì kim của Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) それは ソニー <span class="bold">の</span> テレビです</div>
                                                                <div class="translate">Đó là tivi của Sony</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Câu hỏi どこの<br>これ・それ・あれ は どこ の N2 ですか</span><br>
                                                        Là câu hỏi cho mẫu câu trên, dùng để hỏi xuất xứ của đồ vật, muốn biết đồ vật đó có 
                                                        nguồn gốc từ đâu, do nước nào, công ty nào sản xuất<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">これは <span class="bold">どこの</span> じどうしゃですか</div>
                                                                <div class="translate">Đây là ôtô của nước nào/của công ty nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…日本<span class="bold">の</span> じどうしゃです</div>
                                                                <div class="translate">Ôtô của Nhật</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                    <div class="summarize">2. Khi muốn nói về thuộc tính của đồ vật: thuộc lĩnh vực gì, về chuyên 
                                                        ngành nào, tiếng nước nào…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) これは じどうしゃ <span class="bold">の</span> ほんです</div>
                                                                <div class="translate">Đây là quyển sách về xe ôtô</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) それは にほんご <span class="bold">の</span> しんぶんです</div>
                                                                <div class="translate">Đó là tờ báo tiếng Nhật</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Câu hỏi なんの<br>これ・それ・あれ は なん の N ですか</span><br>
                                                        Là câu hỏi cho mẫu câu trên, dùng để khi muốn hỏi 1 vật nào đó thuộc lĩnh vực gì, về
                                                        chuyên ngành nào, viết bằng tiếng nước nào…<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">これは <span class="bold">なんの</span> ざっしですか</div>
                                                                <div class="translate">Đây là tạp chí gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… それは コンピューターのです</div>
                                                                <div class="translate">Đó là tạp chí (về) máy tính</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Mở rộng:</span> Có thể dùng để nói 1 công ty nào đó hoạt động trong lĩnh vực nào
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) FPT は コンピューター<span class="bold">の</span> かいしゃです</div>
                                                                <div class="translate">FPT là công ty máy tính</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ひたちは <span class="bold">なんの</span> かいしゃです</div>
                                                                <div class="translate">Hitachi là công ty gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…. テレビ <span class="bold">の</span> かいしゃです</div>
                                                                <div class="translate">… Là công ty sản xuất TV</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.5</td>
                                                <td>N は いくらですか</td>
                                                <td>
                                                    <div class="summarize">N bao nhiêu tiền</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">このざっし は <span class="bold">いくら</span>ですか</div>
                                                                <div class="translate">Cái áo này bao nhiêu tiền?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…１００円です</div>
                                                                <div class="translate">…100 Yên</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.6</td>
                                                <td>こ, そ, あ, ど + Cách đếm tuổi, yên, tầng</td>
                                                <td>
                                                    <div class="summarize">こ, そ, あ, ど + Cách đếm tuổi, yên, tầng</div>
                                                    <div class="hide">
                                                        <div class="link_popup" data="popup_cac_tu_chi_thi">Tổng hợp こ, そ, あ, ど</div>
                                                        <div class="link_popup" data="popup_dem_tuoi">Cách đếm tuổi, yên, tầng</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_4">
                                                <td>4.1</td>
                                                <td>今(いま) ～時(じ) ～分(ふん／ぷん)です</td>
                                                <td>
                                                    <div class="summarize">Bây giờ là ~ giờ ~ phút</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        - じ đặt sau số đếm, dùng chỉ giờ<br>
                                                        - ふん（ぷん）đặt sau số đếm, dùng chỉ phút<br>
                                                        <div class="link_popup" data="popup_dem_gio">Bảng đếm giờ</div>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今８じです</div>
                                                                <div class="translate">Bây giờ là 8 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">とうきょうは 今９時３０分です</div>
                                                                <div class="translate">Tokyo bây giờ là 9 giờ 30 phút</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Câu hỏi: なんじですか</span>
                                                        <span> Dùng để hỏi giờ giấc</span><br>
                                                        <span class="bold">今 なんじですか</span><br>
                                                        <span class="bold">* Chú ý:</span> ～じはん: Sử dụng khi nói giờ rưỡi<br>
                                                        <span class="example">いま ９時半です</span>
                                                        <span class="translate">Bây giờ là 9 rưỡi</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.2</td>
                                                <td>
                                                    N (danh từ chỉ ngày) は ～曜日です<br>
                                                    (Cách nói thứ ngày tháng)
                                                </td>
                                                <td>
                                                    <div class="summarize">N là thứ ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今日は <span class="bold">火曜日</span>です</div>
                                                                <div class="translate">Hôm nay là thứ ba</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">明日は <span class="bold">水曜日</span>です</div>
                                                                <div class="translate">Ngày mai là thứ tư</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あさっては <span class="bold">木曜日</span>です</div>
                                                                <div class="translate">Ngày kia là thứ năm</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">N (danh từ chỉ ngày) は 何曜日ですか: N là thứ mấy?</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あさっては何曜日ですか</div>
                                                                <div class="translate">Ngày kia là thứ mấy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">土曜日です</div>
                                                                <div class="translate">Thứ bẩy</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.3</td>
                                                <td>V ます</td>
                                                <td>
                                                    <div class="summarize">Động từ dạng ます</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - <span class="bold">～ます</span> là một dạng động từ, biểu thị thái độ lịch sự với người nghe, thể hiện 
                                                        một hành động ở thì hiện tại hoặc tương lai
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あした <span class="bold">はたらきます</span></div>
                                                                <div class="translate">Ngày mai tôi sẽ làm việc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">まいばん <span class="bold">べんきょうします</span></div>
                                                                <div class="translate">Hàng ngày tôi đều học bài</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.4</td>
                                                <td>V ます／V ません／<br>V ました／V ませんでした</td>
                                                <td>
                                                    <div class="summarize">Cách chia thì của động từ</div>
                                                    <div class="hide">
                                                        Cách chia thể (khẳng định, phủ định) và thời (hiện tại, quá khứ, tương lai) của động từ
                                                        dạng ～ます
                                                        <ul>
                                                            <li>Khẳng định quá khứ: Vました</li>
                                                            <li>Khẳng định Hiện tại: Vます</li>
                                                            <li>Phủ định quá khứ: Vませんでした</li>
                                                            <li>Phủ định hiện tại: Vません</li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">まいあさ べんきょうします</div>
                                                                <div class="translate">Hàng ngày tôi đều học bài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あした べんきょうしません</div>
                                                                <div class="translate"> Ngày mai tôi sẽ không học bài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">きのう べんきょうしました</div>
                                                                <div class="translate">Hôm qua tôi đã học bài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">おととい べんきょうしませんでした</div>
                                                                <div class="translate">Hôm kia tôi đã không học bài</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.5</td>
                                                <td>N (chỉ thời gian) に＋V ます</td>
                                                <td>
                                                    <div class="summarize">Làm gì vào lúc nào</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Để chỉ thời điểm tiến hành một hành động ta thêm trợ từ に sau danh từ chỉ
                                                        thời gian. Chú ý: nếu thời gian không biểu hiện bằng những con số thì không 
                                                        thêm に<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは まいあさ 6 時<span class="bold">に</span> おきます</div>
                                                                <div class="translate">Hàng sáng tôi dậy lúc 6 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">きのうの 7 時<span class="bold">に</span> ねました</div>
                                                                <div class="translate">Hôm qua tôi ngủ lúc 7 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example" style="text-decoration: line-through;">あした に はたらきます</div>
                                                                <div class="translate">Ngày mai tôi sẽ làm việc</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Tuy nhiên, sau danh từ là các thứ trong tuần ta có thể có に hay không đều được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日曜日（に）べんきょうしません</div>
                                                                <div class="translate">Chủ nhật tôi thường không học bài</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.6</td>
                                                <td>～から～まで</td>
                                                <td>
                                                    <div class="summarize">Từ ~ đến ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Trợ từ から biểu thị điểm bắt đầu của thời gian hay nơi chốn, trợ
                                                        từ まで biểu thị điểm kết thúc của thời gian hay nơi chốn<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">８時半はん<span class="bold">から</span> 5時半<span class="bold">まで</span>はたらきます</div>
                                                                <div class="translate">Tôi làm việc <span class="bold">từ</span> 8 rưỡi <span class="bold">đến</span> 5 rưỡi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> <span class="bold">から</span> và <span class="bold">まで</span> không nhất thiết phải sử dụng cùng nhau<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">９時<span class="bold">から</span> べんきょうします</div>
                                                                <div class="translate">Tôi học <span class="bold">từ</span> 9 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">５時<span class="bold">まで</span> べんきょうします</div>
                                                                <div class="translate">Tôi học <span class="bold">đến</span> 5 giờ</div>
                                                            </li>
                                                        </ul>
                                                        Không giống như に phải có động từ đi sau, ta có thể sử dụng です ngay sau～から、～
                                                        まで hay ～から～まで<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) こうぎは ８時半<span class="bold">から</span>１１時半<span class="bold">まで</span>です</div>
                                                                <div class="translate">Bài giảng sẽ từ 8 rưỡi đến 11 rưỡi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">日本語ごのべんきょうは ８時<span class="bold">から</span>４時<span class="bold">まで</span>です</div>
                                                                <div class="translate">Học tiếng Nhật từ 8 giờ đến 4 giờ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.7</td>
                                                <td>N1 と N2</td>
                                                <td>
                                                    <div class="summarize">N1 và, với, cùng với N2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span>
                                                        - Trợ từ と dùng để nối 2 danh từ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ぎんこうの休は 土ど曜日<span class="bold">と</span>日曜日です</div>
                                                                <div class="translate">Buổi nghỉ của ngân hàng là thứ 7 và CN</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4.8</td>
                                                <td>(câu văn) ～ね</td>
                                                <td>
                                                    <div class="summarize">～ Nhỉ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        - ね Được đặt ở cuối câu để truyền đạt cho người nghe tình cảm của mình hoặc kỳ
                                                        vọng người nghe đồng ý với những gì mình nói<br>
                                                        - ね sẽ được phát âm dài và giọng xuống thấp<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: 何時から何時まで はたらきますか</div>
                                                                <div class="translate">Bạn làm việc từ mấy giờ đến mấy giờ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: ７じはんから５じはんまでです</div>
                                                                <div class="translate">Từ 7 rưỡi đến 5 rưỡi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A: たいへんですね</div>
                                                                <div class="translate">Bạn vất vả nhỉ!</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_5">
                                                <td>5.1</td>
                                                <td>N は ～月(がつ) ～日(にち)です</td>
                                                <td>
                                                    <div class="summarize">N là ngày ~ tháng ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">きょうは 七月八日(しちがつようか) です</div>
                                                                <div class="translate">Hôm nay là ngày mùng 8 tháng 7</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あしたは 12日です</div>
                                                                <div class="translate">Mai là ngày 12</div>
                                                            </li>
                                                        </ul>
                                                        * Câu hỏi??? (Cách hỏi ngày, tháng, thời điểm)<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">N は <span class="underline">いつ</span>ですか</div>
                                                                <div class="translate">N là bao giờ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">N は <span class="underline">何月</span>ですか</div>
                                                                <div class="translate">N là tháng mấy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">N は <span class="underline">何日</span>ですか</div>
                                                                <div class="translate">N là mùng mấy / ngày bao nhiêu?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">たんじょうびは いつですか</div>
                                                                <div class="translate">Sinh nhật bạn là bao giờ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">しち月なの日かです</div>
                                                                <div class="translate">… Mùng 7 tháng 7</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">こんげつは 何月ですか</div>
                                                                <div class="translate">Tháng này là tháng mấy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">１０月です</div>
                                                                <div class="translate">…Tháng 10</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あしたは 何日ですか</div>
                                                                <div class="translate">Ngày mai là mùng mấy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">１４日(じゅうよっか) です</div>
                                                                <div class="translate">… Ngày 14</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Cách nói ngày tháng năm của Nhật ngược so với tiếng Việt. Phải nói NĂM, sau 
                                                        đó đến THÁNG và cuối cùng là NGÀY<br>
                                                        - いつ có thể dùng thay thế cho các từ để hỏi có nghĩa tương tự như
                                                        なんじ、なんがつ、なんにち
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.2</td>
                                                <td>N (Danh từ chỉ địa điểm) へ いきます/ きます/ かえります</td>
                                                <td>
                                                    <div class="summarize">Đi/Đến/Về đâu đó (địa điểm N)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        - N là danh từ chỉ nơi chốn, địa điểm. “へ” (đọc là e) là trợ từ chỉ phương 
                                                        hướng di chuyển. Đi sau cùng là động từ mang nghĩa di chuyển từ nơi này sang nơi 
                                                        khác<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは だいがく<span class="bold">へ</span> いきます</div>
                                                                <div class="translate">Tôi đi đến trường</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">マイさんは ここ<span class="bold">へ</span> きます</div>
                                                                <div class="translate">Bạn Mai đến đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは うち<span class="bold">へ</span> かえります</div>
                                                                <div class="translate">Tôi trở về nhà</div>
                                                            </li>
                                                        </ul>
                                                        * Câu hỏi??? (Cách hỏi đi đâu, đến đâu, về đâu)<br>
                                                        <span class="bold example">&nbsp;&nbsp;&nbsp;～は どこへ ～(Động từ) か</span>
                                                        <span class="translate">Bạn đi đâu thế?</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">きょうのごご <span class="bold">どこ</span>へ いきます<span class="bold">か</span></div>
                                                                <div class="translate">Chiều hôm nay bạn sẽ đi đâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… スーパーへ いきます</div>
                                                                <div class="translate">Tôi sẽ đi đến siêu thị</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">おととい <span class="bold">どこ</span>へ いきました<span class="bold">か</span></div>
                                                                <div class="translate">Hôm kia bạn đã đi đâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ぎんこうへ いきました</div>
                                                                <div class="translate">Tôi đã đi đến ngân hàng</div>
                                                            </li>
                                                        </ul>
                                                        * Câu phủ định hoàn toàn (Cách thể hiện ý không đi đâu, đến đâu cả)<br>
                                                        <span class="bold example">&nbsp;&nbsp;&nbsp;どこ（へ）も いきません</span>
                                                        <span class="translate">(Không đi đâu cả / Chỗ nào cũng không đi)</span><br>
                                                        <span class="bold">- Trợ từ も + thể phủ định của động từ:</span> Dùng để phủ định tất cả những gì trong 
                                                        phạm vi mà từ để hỏi どこ đưa ra. Có thể dùng も hoặc để cả へも đều được, nhưng 
                                                        dùng へも thì ý nghĩa phủ định sẽ mạnh hơn<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">きょうのごご <span class="bold">どこ</span>へ いきます<span class="bold">か</span></div>
                                                                <div class="translate">Chiều hôm nay bạn sẽ đi đâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… どこも いきません</div>
                                                                <div class="translate">Tôi sẽ không đi đâu cả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">きのう <span class="bold">どこ</span>へ いきました<span class="bold">か</span></div>
                                                                <div class="translate">Hôm qua bạn đã đi đâu vậy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… どこ<span class="bold">へも</span> いきませんでした</div>
                                                                <div class="translate">Tôi (đã) không đi đâu cả</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.3</td>
                                                <td>～で いきます/ きます/ かえります</td>
                                                <td>
                                                    <div class="summarize">Đi/đến/về bằng N (phương tiện)</div>
                                                    <div class="hide">
                                                        * <span class="bold">Trong đó:</span><br>
                                                        - N là DT chỉ phương tiện giao thông, phương tiện đi lại<br>
                                                        - で là trợ từ, mang ý nghĩa xác định cách thức, phương tiện, có thể dịch tiếng Việt 
                                                        là “bằng～”, “bởi～”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは じどうしゃ<span class="bold">で</span> びょういんへ いきます</div>
                                                                <div class="translate">Tôi đi đến bệnh viện bằng ôtô</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ラオさんは バス<span class="bold">で</span> わたしのうちへ きます</div>
                                                                <div class="translate">Bạn Rao đến nhà tôi bằng xe buýt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">まいこさんは ひこうき<span class="bold">で</span> くにへ かえります</div>
                                                                <div class="translate">Bạn Maiko về nước bằng máy bay</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Trường hợp muốn nói là “đi bộ” thì sử dụng <span class="bold">あるいて</span> và không dùng <span class="bold">で</span>.
                                                        <ul>
                                                            <li class="example">まいにち あるいて がっこうへ いきます</li>
                                                            <li class="translate">Hàng ngày tôi đi bộ đến trường</li>
                                                        </ul>
                                                        * <span class="bold">Câu hỏi??? (Cách hỏi đi đâu, đến đâu, về đâu bằng cách nào, bằng 
                                                            phương tiện gì)</span><br>
                                                        <span class="example bold">〔～へ〕 なんで ～ (động từ) か</span>
                                                        <span class="translate bold">(Đi/đến đâu bằng phương tiện gì?)</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">なんで</span> ここへ きましたか</div>
                                                                <div class="translate">Bạn (đã) đến đây bằng gì vậy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… あるいて きました</div>
                                                                <div class="translate">Tôi (đã) đi bộ đến</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.4</td>
                                                <td>N (Danh từ chỉ người) と V ます</td>
                                                <td>
                                                    <div class="summarize">Làm gì cùng với N</div>
                                                    <div class="hide">
                                                        * <span class="bold">Trong đó:</span> N là danh từ chỉ người; と là trợ từ có ý nghĩa xác định đối tượng cùng tham 
                                                        gia hành động, có thể dịch tiếng Việt là “cùng, với, cùng với”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ともだち<span class="bold">と</span> 大学へ きます</div>
                                                                <div class="translate">Tôi đến trường cùng với bạn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">母<span class="bold">と</span> デパートへ 行きます</div>
                                                                <div class="translate">Tôi đi đến bách hóa cùng với mẹ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Trường hợp muốn nói làm gì đó “một mình” thì dùng từ ひとりで và không có と<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">ひとりで</span> くにへ かえりました</div>
                                                                <div class="translate">Tôi đã về nước một mình</div>
                                                            </li>
                                                        </ul>
                                                        * <span class="bold">Câu hỏi??? (Cách hỏi làm gì với ai)</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">だれと ～ (động từ) か</div>
                                                                <div class="translate">Làm gì với ai?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">だれと</span> ぎんこうへ いきましたか</div>
                                                                <div class="translate">Bạn đã đi đến ngân hàng cùng ai?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ジョンさんと いきました</div>
                                                                <div class="translate">Tôi đã đi với John</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5.5</td>
                                                <td>Sentence + よ</td>
                                                <td>
                                                    <div class="summarize">～Nhỉ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - - よ được đặt ở cuối câu để nhấn mạnh về 1 sự việc mà người nghe chưa biết hoặc để
                                                        bộc lộ sự phán xét hay ý kiến bản thân một cách chắc chắn<br>
                                                        - Không nên nói quá mạnh sẽ khiến người nghe có cảm giác bị ép buộc<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">このバスは Giap Bat へ 行きますか</div>
                                                                <div class="translate">Xe buýt này đi đến Giáp Bát phải không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...いいえ、いきません。21 ばんせんです<span class="bold">よ</span></div>
                                                                <div class="translate">Không. Đường số 21 cơ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_6">
                                                <td>6.1</td>
                                                <td>N を V ます</td>
                                                <td>
                                                    <div class="summarize">Cách sử dụng động từ với trợ từ を</div>
                                                    <div class="hide">
                                                        * <span class="bold">Trong đó:</span><br>
                                                        - N: Danh từ (đối tượng của hành động)<br>
                                                        - V: Tha động từ (ngoại động từ)<br>
                                                        - を : Trợ từ (chỉ đối tượng tác động của hành động)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ごはん<span class="bold">を</span> たべます</div>
                                                                <div class="translate">Tôi ăn cơm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">本<span class="bold">を</span> よみました</div>
                                                                <div class="translate">Tôi đã đọc sách</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Cách đặt câu hỏi: ai đó đã/sẽ làm cái gì?</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">なにを V ますか</div>
                                                                <div class="translate">Làm cái gì (ăn gì, uống gì, đọc gì…)?</div>
                                                            </li>
                                                        </ul>
                                                        * Câu hỏi chung cho tất cả các động từ là:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">なにを しますか</div>
                                                                <div class="translate">Bạn làm cái gì?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">けさ 何を買ましたか</div>
                                                                <div class="translate">Sáng nay bạn đã mua gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… やさいを買ました</div>
                                                                <div class="translate">Tôi đã mua rau</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">としょかんで 何を しますか</div>
                                                                <div class="translate">Bạn làm gì ở thư viện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ほんを よみます</div>
                                                                <div class="translate">Tôi đọc sách..</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - も được thay cho を khi cùng chung một hành động với 2 đối tượng khác 
                                                        nhau (cùng V nhưng khác N)
                                                        <ul>
                                                            <li class="example">私は ビール<span class="bold">を</span> のみます。おさけ<span class="bold">も</span> のみます</li>
                                                            <li class="translate">Tôi uống bia. Uống cả rượu nữa</li>
                                                        </ul>
                                                        - と đươc dùng để nối 2 danh từ cùng làm đối tượng của hành động trong câu
                                                        <ul>
                                                            <li class="example">私は さかな<span class="bold">と</span> たまご<span class="bold">を</span> たべます</li>
                                                            <li class="translate">Tôi ăn cá và trứng</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.2</td>
                                                <td>なにも V ません</td>
                                                <td>
                                                    <div class="summarize">Không làm gì cả</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Khi trợ từ も đi sau từ để hỏi và đi cùng với thể phủ định thì có nghĩa phủ
                                                        định hoàn toàn mọi đối tượng trong phạm vi từ để hỏi<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"> けさ 何も たべませんでした</div>
                                                                <div class="translate">Sáng nay tôi đã không ăn gì cả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あした 何も しません</div>
                                                                <div class="translate">Ngày mai tôi sẽ không làm gì cả</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.3</td>
                                                <td>N1 で N2 を V ます</td>
                                                <td>
                                                    <div class="summarize">Làm ~ ở/tại N1</div>
                                                    <div class="hide">
                                                        * <span class="bold">Trong đó:</span><br>
                                                        - N1: Danh từ chỉ địa điểm diễn ra hành động<br>
                                                        - N2: Danh từ chỉ đối tượng tác động của hành động (Tân ngữ trực tiếp)<br>
                                                        - で: Trợ từ chỉ địa điểm diễn ra hành động<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">レストラン<span class="bold">で</span> ごはんを たべす</div>
                                                                <div class="translate">Tôi ăn cơm <span class="bold">ở</span> nhà hàng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">としょかん<span class="bold">で</span> 本を よみました</div>
                                                                <div class="translate">Tôi đã đọc sách <span class="bold">ở</span> thư viện</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Cách đặt câu hỏi: ai đó đã/sẽ làm gì ở đâu?:</span><br>
                                                        <ul><li>どこで V ますか</li></ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">どこで</span> このしゃしんを とりましたか</div>
                                                                <div class="translate">Bạn đã chụp bức ảnh này <span class="bold">ở đâu?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… こうえん<span class="bold">で</span> とりました</div>
                                                                <div class="translate">Tôi chụp <span class="bold">ở</span> công viên</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.4</td>
                                                <td>いっしょに V ませんか</td>
                                                <td>
                                                    <div class="summarize">Cùng làm ~ nhé!</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Đây không phải là câu phủ định, mà là câu mang ý mời mọc, rủ rê người 
                                                        khác cùng làm việc gì đó với mình<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">いっしょに ビールを のみませんか</div>
                                                                <div class="translate">Cùng uống bia nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ええ、いいですね</div>
                                                                <div class="translate">… Vâng, tốt quá!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… すみません。ちょっと…</div>
                                                                <div class="translate">… Xin lỗi. Nhưng mà… (cách từ chối khéo)</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi muốn từ chối lời đề nghị thì dùng … すみません。ちょっと… “ちょっと” đi cùng 
                                                        với giọng điệu ngập ngừng hàm ý mình có việc gì đó
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.5</td>
                                                <td>V ましょう</td>
                                                <td>
                                                    <div class="summarize">Cùng làm ~ nhé!</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Cũng là một lời để nghị cùng làm với mình nhưng trên cơ sở đã biết người 
                                                        kia sẽ đồng ý => mang tính chất thoả thuận, hô hào mọi người cùng làm 
                                                        (một điều đã giao hẹn, thoả thuận từ trước)<br>
                                                        => Khác với V ませんか: dùng khi chưa biết người kia có đồng ý hay ko<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ロビーで 休み<span class="bold">ましょう</span></div>
                                                                <div class="translate">Chúng ta hãy nghỉ ở hành lang nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">はじめ<span class="bold">ましょう</span></div>
                                                                <div class="translate">Nào, chúng ta bắt đầu nào!</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6.6</td>
                                                <td>なん／なに</td>
                                                <td>
                                                    <div class="summarize">Cái gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span>Cả なん và なに đều có nghĩa là “cái gì”, đều viết chung 1 chữ Hán là 何. Nhưng
                                                        cần lưu ý các trường hợp phân biệt cách dùng, cách đọc như sau:<br>
                                                        I. Đọc là なん:<br>
                                                        <span class="bold">1)Khi 何 đứng trước một từ bắt đầu bằng “d, n hay t”</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">何ですか</div>
                                                                <div class="translate">Cái gì vậy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">何の会社ですか</div>
                                                                <div class="translate">Công ty gì vậy?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">2) Khi đứng sau 何 là các từ chỉ cách đếm</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">何さい</div>
                                                                <div class="translate">Bao nhiêu tuổi?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">何ようび</div>
                                                                <div class="translate">Thứ mấy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">何にち</div>
                                                                <div class="translate">Ngày bao nhiêu?</div>
                                                            </li>
                                                        </ul>
                                                        II. Các trường hợp khác thì 何 đọc là なに<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">何を たべますか</div>
                                                                <div class="translate">Bạn ăn gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">何も のみませんでした</div>
                                                                <div class="translate">Tôi đã không uống gì</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_7">
                                                <td>7.1</td>
                                                <td>N で V ます</td>
                                                <td>
                                                    <div class="summarize">Làm gì đó bằng phương cách, công cụ gì</div>
                                                    <div class="hide">
                                                        * <span class="bold">Trong đó:</span><br>
                                                        - N: Danh từ chỉ phương tiện, công cụ<br>
                                                        - で: trợ tự chỉ phương tiện, phương thức, phương pháp thực hiện hành động<br>
                                                        * <span class="bold">Ý nghĩa: Làm ~ bằng N</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">はし<span class="bold">で</span> ごはんを たべます</div>
                                                                <div class="translate">Tôi ăn cơm <span class="bold">bằng</span> đũa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">コンピューター<span class="bold">で</span> レポートを かきます</div>
                                                                <div class="translate">Tôi viết báo cáo <span class="bold">bằng</span> máy tính</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Câu hỏi??? (Cách hỏi làm gì bằng phương tiện, công cụ, hình thức gì )</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">なんで V ますか</div>
                                                                <div class="translate">Làm ~ bằng gì?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">なんで</span> りんごを きりますか</div>
                                                                <div class="translate">Bạn cắt táo bằng gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ナイフ<span class="bold">で</span> きります</div>
                                                                <div class="translate">Tôi cắt bằng dao</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Ngoài ra, trợ từ で cũng chỉ cả phương tiện ngôn ngữ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本語で でんわを かけます</div>
                                                                <div class="translate">Tôi nói chuyện điện thoại bằng tiếng Nhật</div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.2</td>
                                                <td>～(Từ/Câu) は ～語で 何ですか</td>
                                                <td>
                                                    <div class="summarize"> “Từ/Câu” trong tiếng~ là gì?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 
                                                        dùng để hỏi cách nói một từ hoặc câu bằng một thứ tiếng nào đó. Khi viết, 
                                                        từ/câu được hỏi thường để trong dấu 「 」(dấu ngoặc kép trong tiếng Nhật)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">(1)「ありがとう」は 英語で 何なんですか</div>
                                                                <div class="translate">“ありがとう” trong tiếng Anh là gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…「Thank you」です</div>
                                                                <div class="translate">… là “Thank you”</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">(2) 「Tết」は 日本語にほんごで 何ですか</div>
                                                                <div class="translate">“Tết” tiếng Nhật là gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">「お 正月」です</div>
                                                                <div class="translate">… là 「お 正月」</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.3</td>
                                                <td>N1 (người, công ty, quốc gia) に N2 を + <br>あげます (Cho, tặng, biếu)/ <br>かします (Cho vay, cho mượn)/ <br>かきます (Viết)/ <br>おしえます… (Dậy, chỉ bảo)</td>
                                                <td>
                                                    <div class="summarize">Làm ~ cho N1</div>
                                                    <div class="hide">
                                                        * <span class="bold">Cách dùng:</span> に trợ từ chỉ hướng đến của hành động : “cho ai”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ともだち<span class="bold">に</span> てがみを かきます</div>
                                                                <div class="translate">Tôi sẽ viết thư cho bạn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 母に プレゼントをあげます</div>
                                                                <div class="translate">Tôi sẽ tặng quà cho mẹ</div>
                                                            </li>
                                                        </ul>
                                                        * <span class="bold">Cách đặt câu hỏi làm gì cho ai, hướng tới đối tượng nào:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example bold">だれに V ますか</div>
                                                                <div class="translate bold">Làm ~ cho ai?</div>
                                                            </li>
                                                        </ul>
                                                        * <span class="bold">Ví dụ</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">だれに 日本語を おしえますか</div>
                                                                <div class="translate">Bạn dậy tiếng Nhật cho ai?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... タンさんに おしえます</div>
                                                                <div class="translate">... Dậy cho bạn Tân</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Với động từ あげます, N1 không được dùng là わたし
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.4</td>
                                                <td>N1(người) に N2 を + <br>もらいます (Nhận được)<br>かります (Vay, mượn)<br>ならいます (Học)</td>
                                                <td>
                                                    <div class="summarize">(Nhận được) ~ từ N1</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - N1: chỉ xuất xứ của thứ hoặc vật mà chủ hành động nhận được/vay mượn 
                                                        được/học được<br>
                                                        - N2: chỉ thứ hoặc vật mà chủ hành động nhận được/vay mượn được/ học được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 木村さんは山田さんに花をもらいました</div>
                                                                <div class="translate">Chị Kimura đã nhận được hoa từ Yamada</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">鈴木先生に日本語を習いました</div>
                                                                <div class="translate">Tôi đã học tiếng Nhật từ cô Suzuki</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi N1 không phải là người mà là một cơ quan/tổ chức nào đó, sẽ dùng trợ từ 
                                                        から thay cho に<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">銀行<span class="bold">から</span> お金を借ります</div>
                                                                <div class="translate">Tôi sẽ vay tiền <span class="bold">từ</span> ngân hàng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">大学<span class="bold">から</span>プレゼントをもらいました</div>
                                                                <div class="translate">Tôi đã nhận được quà <span class="bold">từ</span> trường đại học</div>
                                                            </li>
                                                        </ul>
                                                        * <span class="bold">Cách đặt câu hỏi: </span><br>
                                                        <div class="example">だれ に（から）V ますか</div>
                                                        <div class="translate">～ từ ai?</div>
                                                        <span class="bold">* Ví dụ:</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">だれに</span> この時計を もらいましたか</div>
                                                                <div class="translate">Bạn đã nhận chiếc đồng hồ này từ ai vậy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">母<span class="bold">に</span> もらいました</div>
                                                                <div class="translate">... Tôi nhận từ mẹ tôi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7.5</td>
                                                <td>もう ＆ まだ</td>
                                                <td>
                                                    <div class="summarize">đã …rồi & vẫn chưa</div>
                                                    <div class="hide">
                                                        * <span class="bold">Ý nghĩa:<br>
                                                            - もう＋V ました</span>：đã …rồi<br>
                                                        - <span class="bold">まだ：</span>vẫn/chưa, chỉ một hành động hay trạng thái chưa xảy ra, chưa hoàn 
                                                        thành ở thời điểm nói<br>
                                                        * <span class="bold">Cách dùng:</span> Với câu hỏi もう V ましたか？ câu trả lời như sau:<br>
                                                        - Câu trả lời khẳng định : はい、もう V ました<br>
                                                        - Câu trả lời phủ định: いいえ、まだです<br>
                                                        (Không trả lời いいえ、まだ V ませんでした)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">もう</span> ごはんを たべましたか</div>
                                                                <div class="translate">Bạn đã ăn cơm rồi à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... はい、<span class="bold">もう</span> たべました</div>
                                                                <div class="translate">... Vâng, tôi ăn rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... いいえ、<span class="bold">まだ</span></div>
                                                                <div class="translate">... Không, tôi vẫn chưa ăn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_8">
                                                <td>8.1</td>
                                                <td>な- Adj & い- Adj</td>
                                                <td>
                                                    <div class="summarize">Giới thiệu về tính từ trong tiếng Nhật</div>
                                                    <div class="hide">
                                                        * <span class="bold">Tính từ đuôi い:</span> Có đuôi tận cùng là い<br>
                                                        - Ví dụ: 小さい(nhỏ)、大きい(to)、熱い(nóng)、寒い(lạnh)、高い(cao, đắt)<br>
                                                        * <span class="bold">Tính từ đuôi な:</span> Có đuôi tận cùng là な<br>
                                                        - Ví dụ: ハンサム（な） (đẹp trai)、しんせつ（な）(tốt bụng)、 しずか（な）(yên tĩnh)、べんり（な）(thuận tiện)<br>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Không giống tính từ đuôi い, do một số chức năng về ngữ pháp mà đuôi な
                                                        có lúc xuất hiện có lúc không xuất hiện trong từ và câu. Vì thế, về mặt thể
                                                        hiện, người ta hay để đuôi な trong ngoặc đơn.<br>
                                                        - Một số từ dễ nhầm với tình từ đuôi い: きれい（な）(đẹp, sạch)、有名な
                                                        (nổi tiếng)、きらい（な）(ghét, không thích)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.2</td>
                                                <td>Các mẫu câu với tính từ</td>
                                                <td>
                                                    <div class="summarize">1. Câu khẳng định</div>
                                                    <div class="hide">
                                                        N は な-Adj <span class="strike">[な]</span>です<br>
                                                        N は い-Adj です<br>
                                                        <span class="bold">* Cách dùng:</span> Tương tự mẫu câu với danh từ, trong đó です dược đặt sau tính từ
                                                        trong câu khẳng định để biểu thị sự lịch sự đối với người nghe<br>
                                                        <span class="bold">* Chú ý:</span> Tính từ đứng trước です, nếu là tính từ đuôi い thì giữ nguyên い còn nếu 
                                                        là tính từ đuôi な thì sẽ không có な<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 田中先生は しんせつです</div>
                                                                <div class="translate">Thầy Takaka tốt bụng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 富士山は 高いです</div>
                                                                <div class="translate">Núi Phú Sĩ cao</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) ハノイは あたたかいです</div>
                                                                <div class="translate">Hà Nội ấm áp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) あの人は ゆうめいです</div>
                                                                <div class="translate">Người kia nổi tiếng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                    <div class="summarize">2. Câu phủ định</div>
                                                    <div class="hide">
                                                        + <span class="bold">Đối với tính từ đuôi な:</span> Biến đổi như với trường hợp danh từ. Tức là đổi です
                                                        thành ではありません hoặc じゃありません<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ハノイは <span class="bold">静ではありません(じゃありません)</span></div>
                                                                <div class="translate">Hà Nội không yên tĩnh</div>
                                                            </li>
                                                        </ul>
                                                        + <span class="bold">Đối với tính từ đuôi い:</span> đổi cụm いです thành くないです<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この映画は おもしろくないです</div>
                                                                <div class="translate">Bộ phim này không hay</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý: Trường hợp đặc biệt</span> tính từ いい sẽ đổi いいです thành よくないです<br><br>
                                                        <span class="bold underline" style="margin-left:15px;">Bảng tính từ ở thời hiện tại và tương lai</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th>Adj</th>
                                                                <th>い-Adj </th>
                                                                <th>な-Adj</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Khẳng định:</td>
                                                                <td>い-Adj いです;</td>
                                                                <td>な-Adj <span class="strike">[な]</span>です</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phủ định:</td>
                                                                <td>A くないです</td>
                                                                <td>な-Adj <span class="strike">[な]</span> ではありません</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Cách đặt câu hỏi với tính từ: cái gì đó thế nào?</span><br>
                                                        <span class="example bold">N は どうですか。 </span>
                                                        <span class="translate bold">N thế nào?</span><br>
                                                        - どう là từ để hỏi cho tính chất, cảm tưởng về vật, sự vật, người<br>
                                                        <span class="bold">Ví dụ</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本の生活は どうですか</div>
                                                                <div class="translate">Cuộc sống ở Nhật thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... 楽しいです</div>
                                                                <div class="translate">Rất vui</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.3</td>
                                                <td>な- Adj (bỏ na) + N; &nbsp;&nbsp;い- Adj + N</td>
                                                <td>
                                                    <div class="summarize">Dùng tính từ để bổ sung ý nghĩa cho danh từ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Tính từ được đặt trước danh từ để bổ nghĩa cho danh từ đó<br>
                                                        - Khi đứng trước danh từ: <br>
                                                        + Tính từ đuôi な giữ nguyên な<br>
                                                        + Tính từ đuôi い thì giữ nguyên い 
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） ジョンさんは <span class="bold">ハンサムな</span>人です</div>
                                                                <div class="translate">Anh John là người đẹp trai</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 今日は <span class="bold">暑い</span>日です</div>
                                                                <div class="translate">Hôm nay là một ngày nóng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) Ａｎさんは <span class="bold">ゆうめいな</span> ひとです</div>
                                                                <div class="translate">Bạn An là người nổi tiếng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4） 富士山は <span class="bold">たかい</span>山です。 </div>
                                                                <div class="translate">Núi Phú Sĩ là ngọn núi cao</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.4</td>
                                                <td>あまり ＋ ．．．phủ định của tính từ</td>
                                                <td>
                                                    <div class="summarize">Không ~ lắm / Không ~ mấy </div>
                                                    <div class="hide">
                                                        * <span class="bold">Cách dùng:</span>: あまり đứng trước tính từ dạng phủ định thể hiện sự phủ định một phần<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) この食べ物は <span class="bold">あまり</span> おいしくないです</div>
                                                                <div class="translate">Đồ ăn này không ngon lắm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) この辞書は <span class="bold">あまり</span> 便利ではありません</div>
                                                                <div class="translate">Quyển từ điển này không tiện lợi lắm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 日本語は 難しいですか</div>
                                                                <div class="translate">Tiếng Nhật khó phải không? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example"> ...いいえ、<span class="bold">あまり</span> 難しくないです</div>
                                                                <div class="translate">... Không, không khó lắm</div>
                                                            </li>
                                                        </ul>
                                                        * <span class="bold">Cách đặt câu hỏi: một cái gì đó có tính chất như thế nào?</span><br>
                                                        <span class="example bold">N1 は どんな N2 ですか</span>
                                                        <span class="translate bold">N1 là N2 như thế nào?</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"> Hueは どんな町ですか</div>
                                                                <div class="translate">Huế là thành phố như thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example"> ... 静かな 町です</div>
                                                                <div class="translate">Là thành phố yên tĩnh</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.5</td>
                                                <td>どう／どんな </td>
                                                <td>
                                                    <div class="summarize">Như thế nào</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span>: どう・どんな đều là nghi vấn từ để hỏi về cảm tưởng, tính chất, tình trạng của người hay vật<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Nは どうですか</div>
                                                                <div class="translate">N như thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example">N1 は どんな N2 ですか</div>
                                                                <div class="translate">N1 là N2 như thế nào? </div>
                                                            </li>
                                                        </ul>
                                                        Tuy nhiên, cần chú ý, どう thì hỏi trực tiếp vào tính chất của danh từ (không có danh từ 
                                                        đằng sau) còn どんな thì hỏi 1 danh từ nào có tính chất gì (phải có danh từ đi sau)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）日本の料理は <span class="bold">どう</span>ですか</div>
                                                                <div class="translate">Món ăn Nhật thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...おいしいです<span class="bold">が</span>、高いです</div>
                                                                <div class="translate">...Ngon nhưng đắt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）鈴木さんは <span class="bold">どんな</span> 人ですか</div>
                                                                <div class="translate">Suzuki là người thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example"> ...親切な人です</div>
                                                                <div class="translate">... Chị ấy là người tốt</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.6</td>
                                                <td>Sentence1 が、Sentence2</td>
                                                <td>
                                                    <div class="summarize">S1 nhưng mà S2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa: </span>S1 nhưng mà S2<br>
                                                        <span class="bold">* Cách dùng:</span> Trợ từ <span class="bold">が</span> có nghĩa là “nhưng”, dùng để nối 2 mệnh đề có ý nghĩa tương 
                                                        phản nhau<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本の食べ物は どうですか</div>
                                                                <div class="translate">Đồ ăn Nhật như thế nào? </div>
                                                            </li>
                                                            <li>
                                                                <div class="example"> ... おいしいです<span class="bold">が</span>、高いです</div>
                                                                <div class="translate">... Ngon nhưng đắt</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.7</td>
                                                <td>Sentence1。そして Sentence2</td>
                                                <td>
                                                    <div class="summarize">S1. Và S2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - そして là liên từ có nghĩa là “và”
                                                        - そして dùng để nối 2 câu có nội dung tương đồng<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ベトナムの食べ物は おいしいです。<span class="bold">そして</span>、安いです</div>
                                                                <div class="translate">Đồ ăn Việt Nam ngon. Và rẻ nữa</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> cách dùng そして khác với と (と dùng để nối 2 danh từ)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8.8</td>
                                                <td>N はどれですか </td>
                                                <td>
                                                    <div class="summarize">N là cái nào?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - どれ： là từ để hỏi có nghía là “cái nào”<br>
                                                        - Sử dụng để yêu cầu người nghe chọn một trong số những cái đưa ra (từ 2 thứ trở lên)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">山田さんのとけいは <span class="bold">どれ</span>ですか</div>
                                                                <div class="translate">Đồng hồ của Yamda là <span class="bold">cái nào?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... あおい とけいです</div>
                                                                <div class="translate">... Đồng hồ mầu xanh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... あおい のです</div>
                                                                <div class="translate">... Cái mầu xanh</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_9">
                                                <td>9.1</td>
                                                <td>N が あります/ <br>わかります<br>
                                                    N が好きです/ 嫌いです/ 上手です/ 下手です</td>
                                                <td>
                                                    <div class="summarize">Tính từ, động từ đi với trợ từ が</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Trong những bài trước đã học trợ từ đi với động từ là を hoặc へ.Nhưng trong bài 
                                                        này trợ từ của các động từ あります／わかります là が<br>
                                                        - Một số tính từ như すき、きらい、じょうず、へた... cũng sử dụng trợ từ が<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） わたしは イタリア料理<span class="bold">が</span> 好きです</div>
                                                                <div class="translate">Tôi thích món ăn Ý</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 私の恋人は 英語<span class="bold">が</span> わかります</div>
                                                                <div class="translate">Người yêu tôi hiểu được tiếng Anh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3） 田中さんは バイク<span class="bold">が</span> あります</div>
                                                                <div class="translate">Anh Tanaka có xe máy</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Động từ あります chỉ sự sở hữu chỉ dùng với đồ vật, không dùng cho người và động vật
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9.2</td>
                                                <td>どんな N</td>
                                                <td>
                                                    <div class="summarize">Cái nào</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Ngoài cách sử dụng đã học ở bài <a href="#lesson_8">8</a>, どんな còn được sử dụng để yêu 
                                                        cầu người nghe lựa chọn 1 thứ trong nhóm mà danh từ sau どんな
                                                        đưa ra<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="bold">どんな</span> 食べ物が 好きですか</div>
                                                                <div class="translate">Bạn thích đồ ăn <span class="bold">nào?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... 魚が 好きです</div>
                                                                <div class="translate">... Tôi thích cá</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) どんなスポーツが 上手ですか</div>
                                                                <div class="translate">Bạn giỏi môn thể thao nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... テニスが 上手です</div>
                                                                <div class="translate">... Tôi giỏi Tennis</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9.3</td>
                                                <td>よく／だいたい／たくさん／少し／あまり／全然</td>
                                                <td>
                                                    <div class="summarize">Phó từ chỉ mức độ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là các phó từ đặt trước động từ/ tính từ để chỉ mức độ của chúng<br>
                                                        - Các phó từ あまり、ぜんぜん thường sử dụng với thể phủ định<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 日本語が <span class="bold">よく</span>わかります</div>
                                                                <div class="translate">Tôi <span class="bold">rất</span> giỏi tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 英語が <span class="bold">だいたい</span> わかります</div>
                                                                <div class="translate">Tôi biết tiếng Anh cũng <span class="bold">đại khái</span> thôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) フランス語が <span class="bold">あまり</span> わかりません</div>
                                                                <div class="translate">Tôi <span class="bold">không</span> biết tiếng Pháp <span class="bold">nhiều lắm</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) お金が <span class="bold">たくさん</span> あります</div>
                                                                <div class="translate">Tôi có <span class="bold">nhiều</span> tiền</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) きょうは <span class="bold">すこし</span> 寒いです</div>
                                                                <div class="translate">Hôm nay <span class="bold">hơi</span> lạnh</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9.4</td>
                                                <td>S1 から、S2</td>
                                                <td>
                                                    <div class="summarize">Vì S1 nên S2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - から để nối 2 câu có mối quan hệ nhân quả<br>
                                                        - から được đặt sau câu chỉ nguyên nhân<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 時間が ありませんから、テレビを 見ません</div>
                                                                <div class="translate">Vì không có thời gian nên tôi không xem ti vi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) スポーツが 好きですから、毎日します</div>
                                                                <div class="translate">Vì thích thể thao, nên ngày nào tôi cũng chơi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9.5</td>
                                                <td>どうして＋Sentence か</td>
                                                <td>
                                                    <div class="summarize">Tại sao ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - どうして là từ để hỏi lý do<br>
                                                        - Câu trả lời sẽ thêm から vào cuối câu<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">どうして</span> しゅくだいをしませんか</div>
                                                                <div class="translate">Vì sao bạn không làm bài tập?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...時間が ありません<span class="bold">から</span></div>
                                                                <div class="translate">Vì tôi không có thời gian</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Câu hỏi どうしてですか。Là câu hỏi lý do chung nghĩa là “Tại sao lại thế?”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あしたは 会社を 休みます</div>
                                                                <div class="translate">Ngày mai tôi sẽ nghỉ làm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...<span class="bold">どうして</span>ですか</div>
                                                                <div class="translate">... Tại sao thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ようじが あります<span class="bold">から</span></div>
                                                                <div class="translate">Vì tôi có việc</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_10">
                                                <td>10.1</td>
                                                <td>N が あります／います</td>
                                                <td>
                                                    <div class="summarize">Có N (Cách thể hiện sự sở hữu người và đồ vật)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Hai động từ あります／います để chỉ sự sở hữu<br>
                                                        - あります sử dụng khi N là đồ vật<br>
                                                        - います sử dụng khi N là người và động vật<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) コンピューターが あります</div>
                                                                <div class="translate">Tôi có máy vi tính</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 兄が います</div>
                                                                <div class="translate">Tôi có anh trai</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.2</td>
                                                <td>N1(địa điểm)に N2 が あります／いま</td>
                                                <td>
                                                    <div class="summarize">Có N2 ở N1 / Ở N1 có N2 (nhấn mạnh vào vị trí)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là câu miêu tả một sự thật (như quang cảnh, vị trí...)<br>
                                                        - N1 là địa điểm tồn tại của N2 và được xác định bằng trợ từ に<br>
                                                        - Nếu N2 là đồ vật: dùng あります; nếu N2 là người, động vật: dùng います<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私の部屋に 電話があります</div>
                                                                <div class="translate">Trong phòng tôi có cái điện thoại</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 庭に さくらの木があります</div>
                                                                <div class="translate">Ở ngoài sân có cây hoa Anh đào</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 教室に 田中さんがいます</div>
                                                                <div class="translate">Trong phòng học có bạn Tanaka</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Cách đặt câu hỏi cho sự tồn tại của người, đồ vậ:</span><br>
                                                        <div class="example"><span class="bold">N に なに</span>が ありますか</div>
                                                        <div class="translate bold">Ở N (nơi chốn) có cái gì?</div>
                                                        <div class="example"><span class="bold">N に なに</span>が いますか</div>
                                                        <div class="translate bold">Ở N (nơi chốn) có con gì?</div>
                                                        <div class="example"><span class="bold">N に だれ</span>が いますか</div>
                                                        <div class="translate bold">Ở N (nơi chốn) có ai? </div>
                                                        <span class="bold">Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) かばんに <span class="bold">何が</span> ありますか</div>
                                                                <div class="translate">Trong cặp có gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… 本や ペンが あります</div>
                                                                <div class="translate">... Có sách và bút...</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）にわに <span class="bold">何が</span> いますか</div>
                                                                <div class="translate">Ngoài sân có con gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… 犬が います</div>
                                                                <div class="translate">... Có con chó</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">３） 教室に <span class="bold">だれが</span> いますか</div>
                                                                <div class="translate">Trong phòng học có ai thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… 鈴木先生が います</div>
                                                                <div class="translate">... Có cô Suzuki</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.3</td>
                                                <td>N1 は N2 (địa điểm) に あります／います</td>
                                                <td>
                                                    <div class="summarize">N1 ở N2: (nhấn mạnh vào chủ thể)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là câu chỉ về nơi tồn tại của người hay vật<br>
                                                        - N1 được đưa lên làm chủ đề của cả câu<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ランさんの電話は うけつけにあります</div>
                                                                <div class="translate">Điện thoại của Lan ở quầy tiếp tân</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) パソコンは 事務所に あります</div>
                                                                <div class="translate">Máy Laptop ở văn phòng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 犬は にわに います</div>
                                                                <div class="translate">Con chó ở ngoài sân</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 鈴木さんは 食堂に います</div>
                                                                <div class="translate">Cô Suzuki ở phòng ăn</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> です thỉnh thoảng được sử dụng thay thế cho động từ chỉ vị trí あります・
                                                        います khi những động từ đó đã được nói đến hoặc đã xác định
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Dam Sen は どこに ありますか</div>
                                                                <div class="translate">Đầm Sen ở đâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... Sai Gon です</div>
                                                                <div class="translate">... Ở Sài Gòn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.4</td>
                                                <td>N1 (vật, người, địa điểm) の N2 (danh từ chỉ vị trí)</td>
                                                <td>
                                                    <div class="summarize">Thể hiện tương quan vị trí</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） つくえ<span class="bold">の</span> 上</div>
                                                                <div class="translate">Trên bàn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） としょかん<span class="bold">の</span> 前</div>
                                                                <div class="translate">Trước thư viện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3） ビル<span class="bold">の</span> となり</div>
                                                                <div class="translate">Bên cạnh tòa nhà</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Cách dùng:</span> Cả cụm “N1 の N2” được sử dụng như một danh từ chỉ địa điểm<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） <span class="underline">つくえの上</span>に 本があります</div>
                                                                <div class="translate">Ở trên bàn có quyển sách</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） <span class="underline">としょかんの前</span>に こうえんがあります</div>
                                                                <div class="translate">Ở trước thư viện có công viên</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3） <span class="underline">駅の近く</span>で ともだちと会います</div>
                                                                <div class="translate">Tôi gặp bạn ở gần nhà ga</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10.5</td>
                                                <td>N1 や N2</td>
                                                <td>
                                                    <div class="summarize">N1 và N2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - や dùng để nối các danh từ<br>
                                                        - Khác với と dùng để liệt kê toàn bộ, や chỉ liệt kê mang tính chất tượng trưng<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）きょうしつの中に つくえ<span class="bold">や</span> いすが あります</div>
                                                                <div class="translate">Trong phòng học có bàn, ghế...</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）かばんの中に ペン<span class="bold">や</span> 本が あります</div>
                                                                <div class="translate">Trong cặp có bút, sách...</div>
                                                            </li>
                                                        </ul>
                                                        - Đôi khi など được đặt sau danh từ cuối cùng để nhấn mạnh thêm là vẫn còn 
                                                        những vật khác nữa<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）きょうしつの中に つくえ<span class="bold">や</span> いす<span class="bold">など</span>が あります</div>
                                                                <div class="translate">Trong phòng học có bàn, ghế...</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）かばんの中に ペン<span class="bold">や</span> 本な<span class="bold">どが</span> あります</div>
                                                                <div class="translate">Trong cặp có bút, sách...</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_11">
                                                <td>11.1</td>
                                                <td>Số đếm</td>
                                                <td>
                                                    <div class="summarize">Số đếm</div>
                                                    <div class="hide">
                                                        * ひとつ、ふたつ...とお là số đếm chung cho đồ vật đến 10. Từ 11 sử dụng như đếm số thông thường<br>
                                                        - <span class="bold">Các trợ từ số đếm:</span> Là những từ được đặt sau số để đếm các đồ vật, người...<br>
                                                        - 人 dùng đếm người (đặc biệt đếm 1, 2 người dùng ひとり, ふたり)<br>
                                                        - ひき･ぴき dùng đếm con vật kích thước nhỏ<br>
                                                        - 枚 dùng đếm những vật mỏng như giấy, đĩa, áo...<br>
                                                        - 回 dùng đếm số lần<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Số đếm thường đứng ngay trước động từ mà nó bổ nghĩa. (giữa số đếm và động từ không có trợ từ đứng giữa)<br>
                                                        - Tuy nhiên, với các từ chỉ khoảng thời gian lại được đặt ở mọi vị trí trong câu (trừ cuối câu)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） りんごを <span class="bold">4つ</span> 買います</div>
                                                                <div class="translate">Tôi mua <span class="bold">4</span> quả táo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 日本人の学生が <span class="bold">ふたり</span> います</div>
                                                                <div class="translate">Có <span class="bold">2</span> sinh viên người Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3） 国で 2 か月日本語を 勉強しました</div>
                                                                <div class="translate">Tôi đã học tiếng Nhật ở trong nước <span class="bold">2</span> tháng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11.2</td>
                                                <td>いくつ, なん ＋ trợ từ số đếm</td>
                                                <td>
                                                    <div class="summarize">Các từ để hỏi cho số đếm</div>
                                                    <div class="hide">
                                                        <span class="bold">＊ Từ để hỏi:</span><br>
                                                        - いくつ là từ dùng để hỏi cho đồ vật đếm bằng ～つ<br>
                                                        - Các cách đếm khác dùng なん＋trợ từ số đếm<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) みかんを いくつ食べましたか</div>
                                                                <div class="translate">Bạn đã ăn bao nhiêu quýt?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... ７つ 食べました</div>
                                                                <div class="translate">... Tôi đã ăn 7 quả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）きってを 何枚買いますか</div>
                                                                <div class="translate">Bạn mua mấy cái tem?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... ５枚 買います</div>
                                                                <div class="translate">... Tôi mua 5 cái</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11.3</td>
                                                <td>どのぐらい V ますか<br>... N（lượng thời gian ）くらい（ぐらい）V ます</td>
                                                <td>
                                                    <div class="summarize">Câu hỏi về khoảng thời gian</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - どのぐらい là từ để hỏi cho khoảng thời gian<br>
                                                        - Thường đi kèm với động từ かかります(Nghĩa là: Mất bao nhiêu lâu)<br>
                                                        - くらい・ぐらい đứng sau từ chỉ số lượng, có nghĩa là “khoảng”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) どのぐらい日本語を 勉強しましたか</div>
                                                                <div class="translate">Bạn đã học tiếng Nhật bao nhiêu lâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">... 2年ぐらい 勉強しました</div>
                                                                <div class="translate">... Tôi đã học khoảng 2 năm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）ハノイから ホーチミンまで ひこうきで どのぐらい かかりますか。</div>
                                                                <div class="translate">Từ Hà Nội đến TP Hồ Chí Minh đi bằng máy bay mất bao nhiêu lâu?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...二時間くらい かかります</div>
                                                                <div class="translate">...Mất khoảng 2 tiếng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11.4</td>
                                                <td>N だけ</td>
                                                <td>
                                                    <div class="summarize">Chỉ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> だけ đứng sau danh từ, có nghĩa là “chỉ”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） うちから 大学まで 5分だけ かかります</div>
                                                                <div class="translate">Từ nhà tôi đến trường chỉ mất 5 phút</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 休みは 日曜日だけです</div>
                                                                <div class="translate">Ngày nghỉ chỉ có chủ nhật</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_12">
                                                <td>12.1</td>
                                                <td>Các thì của câu kết thúc bởi danh từ và tính từ đuôi な</td>
                                                <td>
                                                    <div class="summarize">Các thì của danh từ & tính từ đuôi な</div>
                                                    <div class="hide">
                                                        <table cellpadding="0" class="inner_table" style="margin:0;">
                                                            <tr>
                                                                <th></th>
                                                                <th style="padding:2px;">Hiện tại</th>
                                                                <th style="padding:2px;">Quá khứ</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0px;">Khẳng định</td>
                                                                <td style="padding:2px;">N です<br>(あめ です)<br>な-adj です<br>(しずか です)<br></td>
                                                                <td style="padding:2px;">N でした<br>(あめ でした)<br>な-adj でした<br>(しずか でした)</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0px;">Phủ định</td>
                                                                <td style="padding:2px;">N ではありません<br>(あめではありません)<br>な-adj ではありません<br>(しずかで はありません)</td>
                                                                <td style="padding:2px;">N ではありませんでした<br>(あめ ではありませんでした)<br>な-adj ではありませんでした<br>(しずかではありませんでした)</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) きのうは <span class="bold">雨でした</span></div>
                                                                <div class="translate">Hôm qua (đã) mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) きのうの試験は <span class="bold">簡単ではありませんでした</span></div>
                                                                <div class="translate">Kỳ thi hôm qua (đã) không đơn giản</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12.2</td>
                                                <td>Các thì của câu kết thúc bằng tính từ đuôi い</td>
                                                <td>
                                                    <div class="summarize">Các thì của tính từ đuôi い</div>
                                                    <div class="hide">
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th></th>
                                                                <th>Hiện tại</th>
                                                                <th>Quá khứ</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Khẳng định</td>
                                                                <td>い-adj いです</td>
                                                                <td>い-adj かったです</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phủ định</td>
                                                                <td>い-adj くないです</td>
                                                                <td>い-adj くなかったです</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） おとといは <span class="bold">寒かったです</span></div>
                                                                <div class="translate">Hôm kia (đã) lạnh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） おとといのパーティーは あまり<span class="bold">楽たのしくなかったです</span></div>
                                                                <div class="translate">Bữa tiệc hôm kia (đã) không vui lắm</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12.3</td>
                                                <td>N1 は N2 より Adj です</td>
                                                <td>
                                                    <div class="summarize">N1 ~ hơn N2</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Đây là câu so sánh hơn. Trong đó, N1 được đưa ra so sánh với N2<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ひこうきは 自動車<span class="bold">より はやい</span>です</div>
                                                                <div class="translate">Máy bay <span class="bold">nhanh hơn</span> ô tô</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 田中さんは 私<span class="bold">より 高い</span>です</div>
                                                                <div class="translate">Anh Tanaka <span class="bold">cao hơn</span> tôi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12.4</td>
                                                <td>N1 と N2 と どちらが Adj ですか<br>...N1(N2)のほうが Adj です</td>
                                                <td>
                                                    <div class="summarize">N1 và N2 cái nào ~ hơn?<br>...N1 ( N2) ~ hơn</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Luôn sử dụng từ để hỏi どちら khi muốn so sánh giữa 2 vật hay người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) テニス<span class="bold">と</span>サッカー<span class="bold">と どちらが</span> おもしろいですか</div>
                                                                <div class="translate">Tennis và bóng đá cái nào thú vị hơn?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...サッカーのほうが おもしろいです</div>
                                                                <div class="translate">...Bóng đá thú vị hơn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 春<span class="bold">と</span>秋<span class="bold">と どちらが</span> 好きですか</div>
                                                                <div class="translate">Mùa xuân và mùa thu bạn thích mùa nào hơn?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...秋の<span class="bold">ほうが</span> 好きです</div>
                                                                <div class="translate">... Tôi thích mùa thu hơn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12.5</td>
                                                <td>N1[のなか]で N2 が いちばん Adj です</td>
                                                <td>
                                                    <div class="summarize">Trong phạm vi N1 thì N2 ~ nhất</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là câu so sánh cao nhất<br>
                                                        - Trong đó: N2 thuộc phạm vi của N1 và có tính chất [Adj] nhất trong phạm vi đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) くだもの<span class="bold">のなかで</span>、りんごが <span class="bold">いちばん</span> すきです</div>
                                                                <div class="translate">Trong các loại quả, tôi thích nhất táo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) スポーツ<span class="bold">で</span> サッカーが <span class="bold">いちばん</span> おもしろいです</div>
                                                                <div class="translate">Trong các môn thể thao, bóng đá thú vị nhất</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Cách đặt câu hỏi so sánh cao nhất:</span><br>
                                                        <span class="example">N [のなか] で なに／どこ／だれ／いつが いちばん Adj ですか</span>
                                                        <span class="translate">Trong phạm vi N thì cái gì/nơi nào/ai/khi nào thì Adj nhất?</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1年で いつが いちばん 寒いですか</div>
                                                                <div class="translate">Trong 1 năm khi nào lạnh nhất?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...2月が いちばん 寒いです</div>
                                                                <div class="translate">... Tháng 2 lạnh nhất</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">クラスで だれが いちばん 若いですか</div>
                                                                <div class="translate">Trong lớp, ai trẻ nhất?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… An さん です</div>
                                                                <div class="translate">Bạn An (trẻ nhất)</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_13">
                                                <td>13.1</td>
                                                <td>（ 私は）N が ほしいです</td>
                                                <td>
                                                    <div class="summarize">(Tôi) muốn/ muốn có/ mong có N</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Dùng để nói về ước muốn, ham thích của người nói<br>
                                                        - ほしい là tính từ đuôi い<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は カメラ<span class="bold">が ほしい</span>です</div>
                                                                <div class="translate">Tôi muốn có máy ảnh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私は 友達<span class="bold">が ほしい</span>です</div>
                                                                <div class="translate">Tôi muốn có bạn bè</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 私は 子供<span class="bold">が ほしくない</span>です</div>
                                                                <div class="translate">Tôi không muốn có con</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Cách đặt câu hỏi về mong muốn của ai đó: </span><br>
                                                        <span class="example bold">何が ほしいですか</span>
                                                        <span class="translate">Bạn mong muốn, muốn có cái gì?</span><br>
                                                        <span class="bold">Ví dụ</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 誕生日に 何が ほしいですか</div>
                                                                <div class="translate">Vào ngày sinh nhật bạn thích gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...時計が ほしいです</div>
                                                                <div class="translate">...Tôi muốn cái đồng hồ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 今何が いちばん ほしいですか</div>
                                                                <div class="translate">Bây giờ bạn muốn cái gì nhất?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...パソコンが ほしいです</div>
                                                                <div class="translate">...Tôi muốn có máy tính</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13.2</td>
                                                <td>（私は）N を V-<span class="strike">ます</span> ＋ たいで</td>
                                                <td>
                                                    <div class="summarize">Cách thể hiện mong muốn làm gì đó</div>
                                                    <div class="hide">
                                                        <span class="bold">* Thể ます của động từ:</span> Là thể của động từ khi bỏ đuôi ます<br>
                                                        * Ví dụ:<br>
                                                        かいます ==========> かい<br>
                                                        たべます ==========> たべ<br>
                                                        よみます ==========> よみ<br>
                                                        <span class="bold">* Ý nghĩa: </span>(Tôi) thích, muốn làm ~<br>
                                                        <span class="bold">* Cách dùng: </span><br>
                                                        - Câu này thể hiện mong muốn làm việc gì đó của người nói<br>
                                                        - Có thể dùng trợ từ を hoặc が(が dùng nhiều hơn). Các trợ từ khác （に、へ、と…）giữ nguyên, không thay đổi<br>
                                                        - Động từ thể ます + たい được coi như một tính từ đuôi い. Vì thế, cách 
                                                        biến đổi sang thể phủ định hay quá khứ đều giống với tính từ đuôi い<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 私は 日本へ 行きたいです</div>
                                                                <div class="translate">Tôi muốn đi Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 私は 自動車を（が）買いたいです</div>
                                                                <div class="translate">Tôi muốn mua ô tô</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3）今、何を 食べたいですか</div>
                                                                <div class="translate">Bây giờ, bạn muốn ăn gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...何も 食べたくないです</div>
                                                                <div class="translate">…Tôi chả muốn ăn gì cả</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> ほしいです hay ～たいです không sử dụng để nói về mong muốn của người thứ ba<br>
                                                        <span class="bold">* Ví dụ: Không dùng như sau</span><br>
                                                        <span class="example">(X) ラオさんは コンピューターが ほしいです</span>
                                                        <span class="translate">(X) Anh Rao muốn có máy tính</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13.3</td>
                                                <td>N (Địa điểm)へ V-ます(N) に 行きます/来ます/帰ります</td>
                                                <td>
                                                    <div class="summarize">Đi/đến/về N để làm ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là mẫu câu sử dụng để nói về mục đích đi đến/ về đâu đó để thực hiện hành động nào đó<br>
                                                        - Động từ chỉ mục đích để thể ます, danh từ chỉ mục đích là những danh động từ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 私は スーパーへ 服を買いに 行きました</div>
                                                                <div class="translate">Tôi đã đi siêu thị (để) mua quần áo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 田中さんは 日本へ 日本語を 勉強しに 来ました</div>
                                                                <div class="translate">Anh Tanaka đến Nhật (để) học tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3）田中さんは 日本へ <span class="bold">日本語の勉強</span>に 来ました</div>
                                                                <div class="translate">Anh Tanaka đến Nhật (để) học tiếng Nhật</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Danh từ trước に cũng có thể là các sự kiện như lễ hội, buổi hòa nhạc... Khi 
                                                        đó, ý của người nói là việc xem hay tham gia vào sự kiện đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Giang Vo へ 桜の祭りに 行きました</div>
                                                                <div class="translate">Tôi đi đến Giảng Võ để tham gia vào Lễ hội Hoa anh đào</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13.4</td>
                                                <td>どこか／なにか</td>
                                                <td>
                                                    <div class="summarize">Nơi nào đó, cái gì đó</div>
                                                    <div class="hide">
                                                        <span class="bold">Ý nghĩa</span><br>
                                                        - どこか nghĩa là “ chỗ nào đó, nơi nào đó ” không xác định rõ<br>
                                                        - なにか nghĩa là “ cái gì đó, 1 cái gì đó ” không xác định rõ<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - どこか được dùng như một danh từ chỉ địa điểm<br>
                                                        - なにか được dùng như một danh từ chỉ đồ vật, sự việc<br>
                                                        - Cả 2 từ khi đứng trước các động từ đi với các trợ từ へ、が、を thì các 
                                                        trợ từ này có thể được lược bỏ. Các trợ từ khác vẫn giữ nguyên<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）夏休みは <span class="bold">どこか</span>（へ）行きましたか</div>
                                                                <div class="translate">Nghỉ hè, bạn có đi đâu không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...はい、行きました</div>
                                                                <div class="translate">Có, tôi có đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 暑いですから、何か（を）飲みたいです</div>
                                                                <div class="translate">Vì trời nóng nên tôi muốn uống gì đó</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_14">
                                                <td>14.1</td>
                                                <td>Các nhóm của động từ</td>
                                                <td>
                                                    <div class="summarize">Các nhóm của động từ</div>
                                                    <div class="hide">
                                                        * Động từ trong tiếng Nhật được chia làm 3 nhóm theo cách chia sang các thể của chúng<br>
                                                        <span class="bold">(1) Nhóm 1</span><br>
                                                        - Bao gồm các động từ đứng trước đuôi ます là các chữ cái thuộc hàng “i”<br>
                                                        - Ví dụ: かきます; のみます<br>
                                                        <span class="bold">(2) Nhóm 2</span>
                                                        - Hầu hết các động từ thuộc nhóm này có dạng đứng trước đuôi ます là các chữ cái thuộc hàng “e”<br>
                                                        - Ví dụ: たべます; みせます<br>
                                                        - Tuy nhiên cũng có một số động từ đứng trước đuôi ます là các chữ cái thuộc hàng “i”<br>
                                                        - Ví dụ: みます; おきます<br>
                                                        <span class="bold">(3) Nhóm 3</span><br>
                                                        - Bao gồm 2 động từ: します(làm); きます(đến)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14.2</td>
                                                <td>Thể て của động từ</td>
                                                <td>
                                                    <div class="summarize">Động từ thể て</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Các động từ kết thúc bằng て、で được gọi là thể て. Cách chia của thể て phụ thuộc vào 
                                                        các nhóm động từ. <div class="link_popup" data="popup_dong_tu_the_te">Cách chia</a><br>
                                                        </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14.3</td>
                                                <td>V てください</td>
                                                <td>
                                                    <div class="summarize">Câu nói sai khiến, nhờ vả lịch sự</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa: </span>Hãy làm ~, Vui lòng làm ~<br>
                                                        <span class="bold">* Cấu tạo: </span>Động từ để thể て thêm ください<br>
                                                        <span class="bold">* Cách dùng: </span>Mẫu câu này dùng khi yêu cầu, nhờ ai đó làm gì một cách lịch sự<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）ちょっと待って<span class="bold">ください</span></div>
                                                                <div class="translate">Vui lòng/Xin hãy chờ một chút</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 辞書を 貸して<span class="bold">ください</span></div>
                                                                <div class="translate">Vui lòng/Hãy cho tôi mượn quyển từ điển</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3）ゆっくり 言って<span class="bold">ください</span></div>
                                                                <div class="translate">Vui lòng/Hãy nói chậm lại</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14.4</td>
                                                <td>V ています</td>
                                                <td>
                                                    <div class="summarize">Cách thể hiện thời tiếp diễn</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> Đang làm ~<br>
                                                        <span class="bold">* Cấu tạo:</span> Động từ thể て thêm います<br>
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này dùng để diễn tả một hành động đang diễn ra tại thời điểm nói<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）田中さんは 今日本語を勉強<span class="bold">しています</span></div>
                                                                <div class="translate">Bạn Tanaka đang học tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 今雨が 降っ<span class="bold">ています</span></div>
                                                                <div class="translate">Bây giờ trời đang mưa</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14.5</td>
                                                <td>V（thể ます）ましょうか</td>
                                                <td>
                                                    <div class="summarize">Đề nghị được làm giúp ai đó việc gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Sử dụng khi người nói ngỏ ý làm gì đó giúp cho người nghe<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）タクシーを よび<span class="bold">ましょうか</span></div>
                                                                <div class="translate">Tôi gọi taxi cho bạn nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...すみません。おねがいします</div>
                                                                <div class="translate">...Xin lỗi. Bạn giúp tôi nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 荷物を 持ち<span class="bold">ましょうか</span></div>
                                                                <div class="translate">Tôi cầm hành lý giúp bạn nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...いいえ、けっこうです</div>
                                                                <div class="translate">...Không, tôi làm được rồi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_15">
                                                <td>15.1</td>
                                                <td>V てもいいです</td>
                                                <td>
                                                    <div class="summarize">Có thể làm ~, được phép làm ~, làm ~ cũng được</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cấu tạo:</span> Động từ thể て thêm もいいです<br>
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này ám chỉ một sự cho phép làm gì đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">その部屋でタバコを吸っ<span class="bold">てもいい</span>です</div>
                                                                <div class="translate">Được phép hút thuốc ở phòng đó</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Thể nghi vấn của mẫu câu này được sử dụng như một câu xin phép làm gì đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）ここで 写真を撮って<span class="bold">もいいですか</span></div>
                                                                <div class="translate">Tôi chụp ảnh ở đây có được không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...ええ、いいです</div>
                                                                <div class="translate">...Vâng, được</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） タバコを 吸って<span class="bold">もいいですか</span></div>
                                                                <div class="translate">Tôi hút thuốc có được không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...すみません。いけません</div>
                                                                <div class="translate">...Xin lỗi. Không được</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15.2</td>
                                                <td>V ては いけません</td>
                                                <td>
                                                    <div class="summarize">Không được làm ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cấu tạo:</span> Động từ thể て thêm はいけません<br>
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này sử dụng khi muốn nói ý không được phép làm gì<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）ここでタバコを吸っ<span class="bold">てはいけません</span></div>
                                                                <div class="translate">Không được hút thuốc ở đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）ここで 写真を撮ってもいいですか</div>
                                                                <div class="translate">Tôi chụp ảnh ở đây được không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...いいえ、いけません</div>
                                                                <div class="translate">...Không, không được</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15.3</td>
                                                <td>V ています</td>
                                                <td>
                                                    <div class="summarize">Cách nói và ý nghĩa khác của động từ dạng tiếp diễn</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng 1:</span><br>
                                                        - Ngoài cách dùng đã được nói đến trong bài <a href="#lesson_14">14</a> thì mẫu câu này còn 
                                                        thể hiện ý một hành động nào đó đã diễn ra trong quá khứ và hiện tại 
                                                        vẫn còn tiếp diễn, kết quả của nó vẫn hiển hiện trong hiện tại và tương lai<br>
                                                        - Một số động từ luôn chia ở thể tiếp diễn mặc dù hành động đã thực 
                                                        hiện trong quá khứ: 知っています、住んでいます、結婚しています、持っています<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 私は 結婚し<span class="bold">ています</span></div>
                                                                <div class="translate">Tôi đã kết hôn (đã, và đang có gia đình)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 私は 鈴木さんを 知っ<span class="bold">ています</span></div>
                                                                <div class="translate">Tôi biết cô Suzuki (đã và đang biết)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3）私は カメラを 持っ<span class="bold">ています</span></div>
                                                                <div class="translate">Tôi có máy ảnh (đã và đang có)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4）私は ハノイに 住ん<span class="bold">でいます</span></div>
                                                                <div class="translate">Tôi sống ở Hà Nội (đã, đang và sẽ)</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> 持っています ở đây mang nghĩa sở hữu<br>
                                                        <span class="bold">* Cách dùng 2:</span><br>
                                                        - Thể tiếp diễn còn được sử dụng để biểu thị những tập quán, thói 
                                                        quen, những hành động được lặp đi lặp lại trong thời gian dài<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）FPT は コンピューターソフトを作っ<span class="bold">ています</span></div>
                                                                <div class="translate">FPT sản xuất phần mềm máy tính</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）私は CMC で 働い<span class="bold">ています</span></div>
                                                                <div class="translate">Tôi làm việc ở CMC</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3）私は FPT大学で 勉強し<span class="bold">ています</span></div>
                                                                <div class="translate">Tôi học ở trường đại học FPT</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_16">
                                                <td>16.1</td>
                                                <td>V1て、V2 て...V ます</td>
                                                <td>
                                                    <div class="summarize">Làm V1 rồi làm V2,...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Mẫu câu sử dụng để liệt kê các hành động xẩy ra theo trình tự thời gian, hành động đứng trước xẩy ra trước<br>
                                                        - Thì của cả câu được chia ở động từ cuối cùng<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）毎朝ジョギングをして、シャワーを浴びて、学校へ行きます</div>
                                                                <div class="translate">Hàng sáng tôi chạy bộ rồi tắm sau đó đến trường</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) きのう Vicom へ行って、友だちにあって、映画を見ました</div>
                                                                <div class="translate">Hôm qua tôi đến Vincom, gặp bạn và xem phim</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16.2</td>
                                                <td>い- adj(<span class="strike">[い]</span>) ～くて、～<br>な-adj <span class="strike">[な]</span> で、～<br>N で、～</td>
                                                <td>
                                                    <div class="summarize">Cách nối 2 hay nhiều tính từ, 2 hay nhiều danh từ với nhau</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Khi nối 2 hay nhiều tính từ của cùng 1 chủ thể, nếu đi trước là tính từ
                                                        đuôi い thì đuôi い sẽ được bỏ đi thay thế bằng くて, các tính từ có thể
                                                        được cách nhau bởi dấu phẩy ( 、)<br>
                                                        大きい 新しい &nbsp;&nbsp;     ======> &nbsp;&nbsp;大きくて、新しい (to và mới)<br>
                                                        小さい 古い &nbsp;&nbsp;&nbsp;&nbsp;   ======> &nbsp;&nbsp;小さくて、古い (nhỏ và cũ)<br>
                                                        いい 安い &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ======> &nbsp;&nbsp;よくて、安い (tốt và rẻ)<br>
                                                        - Khi nối 2 hay nhiều tính từ của cùng 1 chủ thể, nếu đi trước là tính từ
                                                        đuôi な thì đuôi な sẽ được bỏ đi thay thế bằng で, các tính từ có thể được cách nhau bởi dấu phẩy ( 、)<br>
                                                        元気（な） 若い &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ======> &nbsp;&nbsp;元気で、若い (khỏe và trẻ)<br>
                                                        有名（な） きれい（な）    ======> &nbsp;&nbsp;有名で、きれい (nổi tiếng và đẹp)<br>
                                                        - Cách nối đó có nghĩa là <span class="bold">“ và ”</span> vì vậy không sử dụng để nối 2 câu có ý nghĩa trái ngược<br>
                                                        - Thì của cả câu được chia ở câu đứng sau<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）鈴木さんは 若くて、元気です</div>
                                                                <div class="translate">Cô Suzuki trẻ và khỏe mạnh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）ハノイは 人が多くて、にぎやかです</div>
                                                                <div class="translate">Hà Nội đông người và nhộn nhịp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) ラオさんは ハンサムで、親切です</div>
                                                                <div class="translate">Anh Rao đẹp trai và tốt bụng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) Hue は 静かで、きれいな町です</div>
                                                                <div class="translate">Huế là thành phố yên tĩnh và đẹp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) 田中さんは 日本人で、留学生です</div>
                                                                <div class="translate">Anh Tanaka là người Nhật và là lưu học sinh</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Riêng cấu trúc với danh từ, không nhất thiết chỉ sử dụng khi có cùng chủ
                                                        ngữ, có thể là 2 câu có chủ ngữ khác nhau (trong trường hợp này, nó sẽ trở thành cách kết hợp 2 câu với nhau)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">カリナさんは 研修生で、マリアさんは 主婦です</div>
                                                                <div class="translate">Karina là tu nghiệp sinh còn Maria là vợ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16.3</td>
                                                <td>V１てから、V2 ます</td>
                                                <td>
                                                    <div class="summarize">Làm V1 rồi làm V2 / Sau</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Mẫu câu này cũng diễn tả sự liên tiếp của hành động nhưng nhấn mạnh 
                                                        hành động thứ nhất kết thúc rối mới đến hành động 2<br>
                                                        - Thì của cả câu được quyết định ở cuối câu<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）国へ帰っ<span class="bold">てから</span>、父の会社で 働きます</div>
                                                                <div class="translate">Sau khi về nước tôi sẽ làm việc ở công ty của bố</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）コンサートが 終わっ<span class="bold">てから</span>、レストランで 食事しました</div>
                                                                <div class="translate">Sau khi kết thúc buổi biểu diễn âm nhạc tôi đã ăn ở nhà hàng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16.4</td>
                                                <td>N1 は N2 が Adj</td>
                                                <td>
                                                    <div class="summarize">Tính từ miêu tả cụ thể một thành phần, một bộ phận của 1 vật hoặc người</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này dùng để miêu tả cụ thể một thành phần, một bộ phận của 1 vật hoặc người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) Hue は 食べ物が おいしいです</div>
                                                                <div class="translate">Đồ ăn Huế ngon</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) マリアさんは 髪が 長いです</div>
                                                                <div class="translate">Maria có mái tóc dài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 田中さんは 背が 高いです</div>
                                                                <div class="translate">Bạn Tanaka cao</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16.5</td>
                                                <td>どうやって</td>
                                                <td>
                                                    <div class="summarize">～như thế nào</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Đây là từ để hỏi cho cách làm, phương thức làm một việc nào đó 
                                                        và có nghĩa là <span class="bold">“ Làm thế nào”</span> Để trả lời cho câu hỏi này thường sử dụng mẫu câu số 16.1<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">大学まで <span class="bold">どうやって</span> 行きますか</div>
                                                                <div class="translate">Đến trường bạn đi thế nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...バス乗り場まで 5分ぐらいあるいて、16番のバスに乗って、大学前でおります</div>
                                                                <div class="translate">...Tôi đi bộ khoảng 5 phút đến bến xe bus, lên xe số 16 và xuống ở đằng trước trường</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16.7</td>
                                                <td>どの N</td>
                                                <td>
                                                    <div class="summarize">～nào</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Trước đây đã học các từ この、その、あの và どの là từ để hỏi cho 
                                                        các từ đó và có nghĩa là <span class="bold">“nào”</span><br>
                                                        - Đằng sau どの luôn là một danh từ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">田中さんは <span class="bold">どの</span>人ですか</div>
                                                                <div class="translate">Tanaka là người nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...あの背が高くて、髪が 黒い人です</div>
                                                                <div class="translate">...Là người cao và tóc màu đen</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_17">
                                                <td>17.1</td>
                                                <td>V ない</td>
                                                <td>
                                                    <div class="summarize">Phủ định dạng ngắn của động từ (thể ない)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách chia:</span><br>
                                                        - <span class="bold">Nhóm I :</span> là các động từ đều có vần [-i] đứng trước ます. Để chuyển sang thể ない
                                                        chỉ cần thay thế [-i] bằng vần [-a]. Trường hợp đặc biệt, những động từ có đuôi là い thì chuyển thành わ<br>
                                                        Ví dụ:<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>あい－ます</td>
                                                                <td>あわ－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>かき－ます</td>
                                                                <td>かか－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>いそぎ－ます</td>
                                                                <td>いそが－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>はなし－ます</td>
                                                                <td>はなさ－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>まち－ます</td>
                                                                <td>また－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>あそび－ます</td>
                                                                <td>あそば－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>よみ－ます</td>
                                                                <td>よま－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>とり－ます</td>
                                                                <td>とら－ない</td>
                                                            </tr>
                                                        </table>
                                                        - <span class="bold">Nhóm II :</span> bỏ [-ます] thêm ない<br>
                                                        Ví dụ:<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>たべ－ます</td>
                                                                <td>たべ－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>み－ます</td>
                                                                <td>み－ない</td>
                                                            </tr>
                                                        </table>
                                                        - <span class="bold">Nhóm III :</span> là 2 động từ đặc biệt nên phải nhớ<br>
                                                        Ví dụ:<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>し－ます</td>
                                                                <td>し－ない</td>
                                                            </tr>
                                                            <tr>
                                                                <td>き－ます</td>
                                                                <td>こ－ない</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17.2</td>
                                                <td>V ないで ください</td>
                                                <td>
                                                    <div class="summarize">Xin đừng…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi muốn khuyên hay yêu cầu ai không làm gì việc gì đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 私は 元気ですから、心配し<span class="bold">ないで ください</span></div>
                                                                <div class="translate">Tôi khỏe lắm nên đừng lo lắng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）ここで 写真を 撮ら<span class="bold">ないで ください</span></div>
                                                                <div class="translate">Xin đừng chụp ảnh ở đây</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17.3</td>
                                                <td>V なければ なりません</td>
                                                <td>
                                                    <div class="summarize">Phải…, bắt buộc phải…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách chia:</span> động từ chia sang thể ない, bỏ い + ければ なりません<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Mẫu câu này biểu thị một việc coi như nghĩa vụ phải làm, bất chấp ý hướng của người làm<br>
                                                        - Chú ý: Mặc dù động từ chia ở dạng phủ định nhưng cả câu không mang 
                                                        nghĩa phủ định (thực chất là phủ định của phủ định: “không làm gì thì không được”)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1） 薬を 飲ま<span class="bold">なければなりません</span></div>
                                                                <div class="translate">Phải uống thuốc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2）毎日日本語を 勉強しなければなりません</div>
                                                                <div class="translate">Hàng ngày (tôi) phải học tiếng Nhật</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17.4</td>
                                                <td>V なくても いいです</td>
                                                <td>
                                                    <div class="summarize">Không cần … cũng được</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> biểu thị sự không cần thiết của hành vi mà động từ diễn tả<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）明日来<span class="bold">なくても</span> いいです</div>
                                                                <div class="translate">Ngày mai bạn không đến cũng được</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 土曜日の午後勉強し<span class="bold">なくても いいです</span></div>
                                                                <div class="translate">Chiều thứ 7 không học cũng được</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Mở rộng:</span> Áp dụng mẫu câu này ở thể nghi vấn, ta sẽ được câu hỏi, xin phép không 
                                                        làm gì có được không<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）明日来<span class="bold">なくても いいですか</span></div>
                                                                <div class="translate">Ngày mai không đến cũng được chứ ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2） 土曜日の午後勉強し<span class="bold">なくても いいですか</span></div>
                                                                <div class="translate">Chiều thứ 7 không học có được không ạ?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17.5</td>
                                                <td>N (tân ngữ) は</td>
                                                <td>
                                                    <div class="summarize">Đưa tân ngữ lên làm chủ đề nhằm nhấn mạnh ý muốn diễn tả</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> vì được đưa lên làm chủ đề nên trợ từ を của tân ngữ được thay bằng は<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）ここに 荷物<span class="bold">を</span> 置かないでください</div>
                                                                <div class="translate">Đừng để hành lý ở đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">→ 荷物<span class="bold">は</span> ここに 置かないでください</div>
                                                                <div class="translate"><span class="underline">Hành lý thì</span> xin đừng để ở đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）会社の 食堂で 昼ごはん<span class="bold">を</span> 食べます</div>
                                                                <div class="translate">Tôi ăn cơm trưa tại nhà ăn công ty</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">→ 昼ごはん<span class="bold">は</span> 会社の 食堂で 食べます</div>
                                                                <div class="translate"><span class="underline">Cơm trưa thì</span> tôi ăn tại nhà ăn cty</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17.6</td>
                                                <td>N(thời gian)までに V</td>
                                                <td>
                                                    <div class="summarize">Chậm nhất, trễ nhất, trước (thời điểm)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> chỉ rõ thời gian cuối mà một hành động hay một công việc phải được tiến 
                                                        hành. Có nghĩa là, hành động hay công việc phải được tiến hành trước thời hạn được chỉ định bởi までに<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）会議は ５時<span class="bold">までに</span> 終わります</div>
                                                                <div class="translate">Cuộc họp sẽ kết thúc <span class="bold">trước</span> 5 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）土曜日<span class="bold">までに</span> 本を 返さなければなりません</div>
                                                                <div class="translate">Phải trả sách <span class="bold">trước</span> thứ 7</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> phân biệt までに với trợ từ まで và trợ từ に<br>
                                                        1. まで：chỉ thời điểm chấm dứt một hành động<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">昼１２時まで 日本語を 勉強します</div>
                                                                <div class="translate">Buổi trưa, tôi học đến 12 giờ</div>
                                                            </li>
                                                        </ul>
                                                        2. に：chỉ thời điểm mà một hành động diễn ra
                                                        <ul>
                                                            <li>
                                                                <div class="example">朝６時に 起きます</div>
                                                                <div class="translate">Tôi thức dậy vào lúc 6 giờ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_18">
                                                <td>18.1</td>
                                                <td>Thể tự điển V る</td>
                                                <td>
                                                    <div class="summarize">Thể nguyên mẫu (thể từ điển) của động từ</div>
                                                    <div class="hide">
                                                        - Thể nguyên mẫu (còn gọi là thể từ điển) là thể cơ bản (động từ gốc) của động từ, trong 
                                                        sách từ điển các động từ được trình bày ở thể này<br>
                                                        <span class="bold">1. Nhóm 1:</span> Ký hiệu G1 hoặc (I)<br>
                                                        - Là các động từ có kết thúc bởi các âm sau:<br>
                                                        - [-う] ]、 [-つ] 、[-る] [-む] ]、 [-ぬ] 、[-ぶ] [-す] ]、 [-く] 、[-ぐ]<br>
                                                        - Ví dụ<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>かいます</td>
                                                                <td>かう</td>
                                                            </tr>
                                                            <tr>
                                                                <td>まちます</td>
                                                                <td>まつ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>とります</td>
                                                                <td>とる</td>
                                                            </tr>
                                                            <tr>
                                                                <td>すみます</td>
                                                                <td>すむ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>しにます</td>
                                                                <td>しぬ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>よびます</td>
                                                                <td>よぶ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>はなします</td>
                                                                <td>はなす</td>
                                                            </tr>
                                                            <tr>
                                                                <td>かきます</td>
                                                                <td>かく</td>
                                                            </tr>
                                                            <tr>
                                                                <td>およぎます</td>
                                                                <td>およぐ</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">2. Nhóm 2:</span> Ký hiệu G2 hoặc (II)<br>
                                                        Là các động từ có dạng [-e る] [-i る]<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>たべます</td>
                                                                <td>たべる (ăn)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>みます</td>
                                                                <td>みる (xem)</td>
                                                            </tr>
                                                        </table>
                                                        Trừ một số động từ đặc biệt:<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>かえります</td>
                                                                <td>かえる (trở về)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>しります</td>
                                                                <td>しる (biết)</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">3. Nhóm 3:</span> Ký hiệu G3 hoặc (III)<br>
                                                        - Bao gồm 2 động từ<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>します</td>
                                                                <td>する</td>
                                                            </tr>
                                                            <tr>
                                                                <td>きます</td>
                                                                <td>くる</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18.2</td>
                                                <td>N (V ること) が できます; </td>
                                                <td>
                                                    <div class="summarize">Có thể làm…, biết làm…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        <span class="bold">a) Trường hợp danh từ:</span> danh từ được sử dụng phải có tính động tác
                                                        (tức là những danh từ có thể ghép với します để trở thành động từ có nghĩa tương ứng ) như: 
                                                        運転、買い物、ダンス (=> gọi chung là danh động từ) ...
                                                        Ngoài ra, các danh từ chỉ về những khả năng như 日本語、ピアノ、スキー cũng có thể sử dụng.<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）<span class="bold">運転が できます</span></div>
                                                                <div class="translate">Tôi biết/có thể lái xe</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）ミラーさんは <span class="bold">日本語が できます</span></div>
                                                                <div class="translate">Anh Miler biết tiếng Nhật (có thể nói tiếng Nhật)</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">b) Trường hợp động từ:</span> khi biểu thị một khả năng có thể làm được một chuyện gì thì 
                                                        phải thêm こと sau động từ thể nguyên mẫu để biến thành một nhóm danh từ. (=> danh từ hóa)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）ミラーさんは 漢字を <span class="bold">読むことが できます</span></div>
                                                                <div class="translate">Anh Miler biết/có thể đọc được chữ Hán</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）カードで <span class="bold">払うことが できます</span></div>
                                                                <div class="translate">Có thể thanh toán/trả tiền bằng thẻ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Nghĩa của động từ できます<br>
                                                        1. Năng lực<br>
                                                        <div class="example">漢字を <span class="bold">読むことが できます</span></div>
                                                        <div class="translate">Biết đọc chữ Hán</div><br>
                                                        2. Khả năng<br>
                                                        <div class="example">受付で タクシーを <span class="bold">呼ぶことが できます</span></div>
                                                        <div class="translate">Có thể gọi taxi tại quầy lễ tân</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18.3</td>
                                                <td>私の 趣味は N(V ること) です</td>
                                                <td>
                                                    <div class="summarize">Sở thích (của tôi) là…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Nói về sở thích<br>
                                                        - Khi một danh từ không thể biểu hiện đầy đủ ý nghĩa thì ta có thể diễn 
                                                        tả dùng cách danh từ hóa để trình bày rõ, cụ thể hơn<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）<span class="bold">私の趣味は</span> 絵です</div>
                                                                <div class="translate">Sở thích của tôi là hội họa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）<span class="bold">私の趣味は</span> 絵を描くことです</div>
                                                                <div class="translate">Sở thích của tôi là (việc) vẽ tranh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">３）<span class="bold">私の趣味は</span> 絵を見ることです</div>
                                                                <div class="translate">Sở thích của tôi là (việc) ngắm tranh</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi một vật ở gần cả hai người thì cả hai người đều có thể dùng これ hay この
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18.4</td>
                                                <td>V る/ N の/ Số tự (thời gian) + まえに、V2</td>
                                                <td>
                                                    <div class="summarize">Làm V2 trước..., trước khi làm V1…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        <span class="bold">a) Động từ:</span><br>
                                                        - Hành động thứ 2 diễn ra trước hành động thứ nhất<br>
                                                        - Không thay đổi theo thì của động từ. Nghĩa là khi thì của động từ thứ 2 là quá 
                                                        khứ hay tương lai thì thì của động từ 1 luôn ở thể từ điển<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）日本へ 来る <span class="bold">前に</span>、日本語を 勉強しました</div>
                                                                <div class="translate">Tôi đã học tiếng Nhật trước khi đến Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）寝る <span class="bold">まえに</span>、本を 読みます</div>
                                                                <div class="translate">Trước khi đi ngủ, tôi đọc sách</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">b) Danh từ</span><br>
                                                        - Thêm trợ từ の ở giữa danh từ và まえに<br>
                                                        - Danh từ đứng trước まえに là những danh từ biểu thị hành động<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）食事の <span class="bold">まえに</span>、手を洗います</div>
                                                                <div class="translate">Trước bữa cơm/Trước khi ăn cơm, (tôi) rửa tay</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）講義の <span class="bold">まえに</span>、事務所へ 行ってください</div>
                                                                <div class="translate">Hãy đến văn phòng trước giờ họp</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">c) Số tự (thời gian)</span><br>
                                                        - Đứng sau danh từ chỉ số thì không cần の<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）３年<span class="bold">前に</span>、結婚しました</div>
                                                                <div class="translate">Tôi đã kết hôn cách đây 3 năm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）田中さんは １時間<span class="bold">前に</span>、出かけました</div>
                                                                <div class="translate">Tanaka đã ra ngoài cách đây 1 tiếng</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18.5</td>
                                                <td>なかなか</td>
                                                <td>
                                                    <div class="summarize">Mãi mà không ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> luôn đi với động từ ở dạng phủ định<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）日本で <span class="bold">なかなか</span> 馬を 見ることが できません</div>
                                                                <div class="translate">Ở Nhật, mãi mà tôi không thể nhìn thấy con ngựa nào</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）バスが <span class="bold">なかなか</span> 来ません</div>
                                                                <div class="translate">Xe buýt mãi mà không thấy tới</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18.6</td>
                                                <td>ぜひ</td>
                                                <td>
                                                    <div class="summarize">nhất định</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Được dùng để biểu thị sự hy vọng hay yêu cầu<br>
                                                        - thường đi với các dạng câu ほしいです、V たいです、V てください với ý nghĩa nhấn mạnh sự biểu thị<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）<span class="bold">ぜひ</span> 北海道へ 行きたいです</div>
                                                                <div class="translate">Tôi rất muốn đi Hokkaido (nhất định sẽ đi)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）<span class="bold">ぜひ</span> 遊びに 来てください</div>
                                                                <div class="translate">Bạn nhất định phải đến nhà tôi chơi đấy nhé!</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_19">
                                                <td>19.1</td>
                                                <td>Động từ quá khứ dạng ngắn: thể た</td>
                                                <td>
                                                    <div class="summarize">Cách tạo động từ thể た: => giống y như thể て</div>
                                                    <div class="hide">
                                                        - Chỗ nào chia là て và で thì thay bằng た và だ<br>
                                                        <span class="bold">Nhóm I:</span><br>
                                                        - かい<span class="bold">て</span> => かい<span class="bold">た</span><br>
                                                        - のん<span class="bold">で</span> => のん<span class="bold">だ</span><br>
                                                        <span class="bold">Nhóm II:</span><br>
                                                        - たべ<span class="bold">て</span> => たべ<span class="bold">た</span><br>
                                                        - み<span class="bold">て</span> &nbsp;=> み<span class="bold">た</span><br>
                                                        <span class="bold">Nhóm III:</span><br>
                                                        - き<span class="bold">て</span> => き<span class="bold">た</span><br>
                                                        - し<span class="bold">て</span> => し<span class="bold">た</span><br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19.2</td>
                                                <td>V たことが あります</td>
                                                <td>
                                                    <div class="summarize">Đã từng (làm)...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> nói về một kinh nghiệm đã gặp, đã từng trải qua trong quá khứ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）馬に <span class="bold">乗ったことが あります</span></div>
                                                                <div class="translate">Tôi đã từng cưỡi ngựa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２） 桜を <span class="bold">見たことが あります</span></div>
                                                                <div class="translate">Tôi đã từng nhìn thấy hoa anh đào</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> thể câu văn này khác cơ bản với thể câu văn muốn diễn tả một hành động 
                                                        chỉ đơn thuần xảy ra ở quá khứ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）去年北海道で 馬に 乗りました</div>
                                                                <div class="translate">Năm ngoái tôi đã cưỡi ngựa ở Hokkaido</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２） 先週桜を 見ました</div>
                                                                <div class="translate">Tuần trước, tôi đã nhìn thấy hoa anh đào</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Câu hỏi:</span> câu hỏi của mẫu câu này sẽ có nghĩa là hỏi xem ai đó đã từng làm gì đó hay chưa<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本へ <span class="bold">行ったことが ありますか</span></div>
                                                                <div class="translate">Bạn đã bao giờ đi Nhật Bản chưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… はい、あります／…はい、３回 あります</div>
                                                                <div class="translate">Có, đã từng/Có, đã 3 lần</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… いいえ、ありません／…いいえ、一度も ありません</div>
                                                                <div class="translate">Chưa lần nào</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19.3</td>
                                                <td>V たり、V たり します</td>
                                                <td>
                                                    <div class="summarize">Lúc thì… lúc thì… và...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Dùng khi muốn biểu hiện một vài hành động đại diện trong số nhiều
                                                        hành động mà chủ thể thực hiện mà không cần biết cái nào xảy ra trước, cái nào xảy ra sau<br>
                                                        - Thì của mẫu câu được biểu thị ở cuối câu<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）日曜日は <span class="bold">テニスを したり、映画を 見たり します</span></div>
                                                                <div class="translate">Chủ Nhật, lúc thì tôi chơi tenis, lúc thì xem phim</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）昨日<span class="bold">買い物したり、音楽を 聞いたり しました</span></div>
                                                                <div class="translate">Hôm qua, lúc thì tôi đi mua sắm, lúc thì nghe nhạc</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> không nhầm với câu văn sử dụng て để nối câu đã học ở bài <a href="#lesson_16">16</a><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）日曜日は <span class="bold">テニスを したり、映画を 見たり します</span></div>
                                                                <div class="translate">Chủ Nhật, lúc thì tôi chơi tenis, lúc thì xem phim</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）日曜日は <span class="bold">テニスを して、映画を みます</span></div>
                                                                <div class="translate">Chủ Nhật, tôi chơi tenis, xong rồi xem phim</div>
                                                            </li>
                                                        </ul>
                                                        Ở câu 2 ý nghĩa là hành động xem phim diễn ra sau khi chơi tennis<br>
                                                        Ở câu 1 không có mối quan hệ về mặt thời gian giữa hai hành động. Trong rất 
                                                        nhiều các hoạt động diễn ra vào ngày chủ nhật sẽ bao gồm hai hành động chơi 
                                                        tennis và xem phim. Và sẽ không tự nhiên khi dùng để liệt kê những hành động 
                                                        mang tính chất hàng ngày của con người như ngủ dậy, ăn cơm hay đi ngủ..
                                                    </div>
                                                </td>
                                            </tr>
                                            <td>19.4</td>
                                            <td>
                                                A い <span class="strike">[い]</span> => ～く + なります<br>
                                                A な <span class="strike">[な]</span> => ～に + なります<br>
                                                Nに + なります
                                            </td>
                                            <td>
                                                <div class="summarize">Trở nên (được)</div>
                                                <div class="hide">
                                                    <span class="bold">* Cách dùng:</span> chỉ sự thay đổi một tình trạng hay một điều kiện<br>
                                                    <span class="bold">* Ví dụ:</span><br>
                                                    <ul>
                                                        <li>
                                                            <div class="example">１）寒いです => 寒く なります</div>
                                                            <div class="translate">Trời trở nên lạnh</div>
                                                        </li>
                                                        <li>
                                                            <div class="example">２）元気[な] => 元気に なります</div>
                                                            <div class="translate">Trở nên khỏe mạnh</div>
                                                        </li>
                                                        <li>
                                                            <div class="example">３）25歳  => 25歳に なります</div>
                                                            <div class="translate">Sang tuổi 25</div>
                                                        </li>
                                                    </ul>
                                                    <span class="bold">* Chú ý:</span> Khi một vật ở gần cả hai người thì cả hai người đều có thể dùng これ hay この
                                                </div>
                                            </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_20">
                                                <td>20.1</td>
                                                <td>Thể văn thông thường và thể văn lịch sự</td>
                                                <td>
                                                    <div class="summarize">Thể thường và thể lịch sự</div>
                                                    <div class="hide">
                                                        <span class="bold">- Thể lịch sự:</span> là cách nói mà kết thúc câu luôn là –desu (với tính từ, danh từ) và –masu 
                                                        (với động từ) và các dạng phái sinh của nó (-deshita, -dewa arimasen, -masen, -mashita)<br>
                                                        <span class="bold">- Thể thông thường:</span> là cách nói không có –desu hay –masu. Dùng luôn dạng cơ bản, 
                                                        dạng gốc và các dạng phái sinh dạng ngắn của các loại từ đó<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th width="55%">Thể lịch sự</th>
                                                                <th width="45%">Thể thông thường</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding-left:15px; text-align:left;">
                                                                    (1) Người lớn tuổi<br>
                                                                    (2) Người gặp lần đầu tiên<br>
                                                                    (3) Cấp trên<br>
                                                                    (4) Mình là nhân viên mới<br>
                                                                    (5) Trong các sự kiện nghiêm túc (họp hành, phát biểu…)
                                                                </td>
                                                                <td style="padding-left:15px; text-align:left;">
                                                                    a. Người kém tuổi<br>
                                                                    b. Người ngang tuổi<br>
                                                                    c. Bạn thân<br>
                                                                    d. Người trong gia đình
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        1. Các trường hợp từ (1) đến (5) mà sử dụng thể thông thường thì bị coi là thất lễ<br>
                                                        2. Người Nhật đối với người nước ngoài hay nhân viên lâu năm khi chỉ đạo, hướng dẫn nhân 
                                                        viên mới để thể hiện sự thân mật tùy thuộc vào ý đồ vẫn có thể sử dụng được thể thông thường<br>
                                                        3. Từ a~d, cũng tùy thuộc vào trường hợp vẫn có thể sử dụng thể lịch sự. Ví dụ:<br>
                                                        <div style="margin-left: 15px;">
                                                            - muốn giáo dục con nhỏ<br>
                                                            - trước khi gặp gỡ biết nhau<br>
                                                            - xưng hô với bố mẹ
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20.2</td>
                                                <td>Trình bày về thể văn lịch sự và thông thường</td>
                                                <td>
                                                    <div class="summarize">Trình bày về thể lịch sự và thông thường </div>
                                                    <div class="hide">
                                                        <span class="bold">a) Thể văn lịch sự và thông thường của động từ, tính từ, danh từ</span><br>
                                                        <table class="inner_table" style="margin: 10px 0;">
                                                            <tr>
                                                                <th width="25%"></th>
                                                                <th width="35%">Thể lịch sự</th>
                                                                <th width="50%">Thể thông thường</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">Động từ</td>
                                                                <td style="text-align:left;">
                                                                    かきます<br>
                                                                    かきません<br>
                                                                    かきました<br>
                                                                    かきませんでした
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    かく(thể từ điển)<br>
                                                                    かかない (thể ない)<br>
                                                                    かいた (thể た)<br>
                                                                    かかなかった (thể ない quá khứ)
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    Tính từ <span class="bold">-i</span><br>
                                                                    Tính từ <span class="bold">-na</span>
                                                                    Danh từ
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    あついです<br>
                                                                    あつくないです<br>
                                                                    あつかったです<br>
                                                                    あつくなかったです
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    あつい (bỏ です)<br>
                                                                    あつい (bỏ です)<br>
                                                                    あつかった<br>
                                                                    あつくなかった
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td style="text-align:left;">
                                                                    ひまです<br>
                                                                    ひまではありません<br>
                                                                    ひまでした<br>
                                                                    ひまではありませんでした
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    ひまだ<br>
                                                                    ひまではない<br>
                                                                    ひまだった<br>
                                                                    ひまではなかった
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">b. Thể văn lịch sự và thông thường của các nhóm từ ngữ theo sau</span><br>
                                                        <table class="inner_table" style="margin: 10px 0;">
                                                            <tr>
                                                                <th>Thể lịch sự</th>
                                                                <th>Thể thông thường</th>
                                                                <th>Ý nghĩa</th>
                                                                <th>Bài</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    飲みたいです<br>
                                                                    飲みに 行きます
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    飲みたい<br>
                                                                    飲みに 行く<br>
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Muốn uống<br>
                                                                    Đi uống<br>
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_13">13</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    書いてください<br>
                                                                    書いています
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    書いて<br>
                                                                    書いている<br>
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Xin hãy viết<br>
                                                                    Đang viết<br>
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_14">14</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    書いても いいです<br>
                                                                    書かなくてもいいです
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    書いても いい<br>
                                                                    書かなくても いい<br>
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Có thể viết<br>
                                                                    Không cần phải viết<br>
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_15">15</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    書いてあげます<br>
                                                                    書いてもらいます<br>
                                                                    書いてくれます
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    書いてあげる<br>
                                                                    書いてもらう<br>
                                                                    書いてくれる
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Sẽ viết giúp cho<br>
                                                                    Nhờ viết giúp<br>
                                                                    Viết giúp đi
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_2">24</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">行かなければなりません</td>
                                                                <td style="text-align:left;">行かなければならない</td>
                                                                <td style="text-align:left;">Phải đi</td>
                                                                <td style="text-align: left">17</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    食べることが できます<br>
                                                                    食べることです
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    食べることが できる<br>
                                                                    食べることだ<br>
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Có thể ăn<br>
                                                                    (là) để ăn<br>
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_18">18</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    読んだことがあります<br>
                                                                    読んだり、書いたりします
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    読んだことがある<br>
                                                                    読んだり、書いたりする<br>
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    Có đọc<br>
                                                                    Đọc, viết và…<br>
                                                                </td>
                                                                <td style="text-align: left"><a href="#lesson_19">19</a></td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Chú ý:</span> Khi đổi những câu được nối với nhau bằng から hay が、けど (thường sử dụng trong hội 
                                                        thoại) thành thể văn thông thường thì tất cả các từ lịch sự trong câu phải được đổi sang thể thông thường
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）おなかが 痛いです<span class="bold">から</span>、 病院へ 行きます</div>
                                                                <div class="translate">Vì đau đầu nên tôi phải đến bệnh viện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> おなかが 痛い<span class="bold">から</span>、 病院へ いく</div>
                                                                <div class="translate">Vì đau đầu nên tôi phải đến bệnh viện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）日本の食べ物は おいしいです<span class="bold">が</span>、高いです</div>
                                                                <div class="translate">Món ăn Nhật ngon nhưng mà đắt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> おなかが 痛い<span class="bold">から</span>、 病院へ いく</div>
                                                                <div class="translate">Món ăn Nhật ngon nhưng mà đắt</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20.3</td>
                                                <td>Câu nghi vấn ở thể văn thông thường</td>
                                                <td>
                                                    <div class="summarize">Câu nghi vấn ở thể văn thông thường</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> bỏ trợ từ chỉ sự nghi vấn là か ở cuối câu, thay vào đó đọc cao
                                                        giọng chữ ở cuối câu để biểu thị sự nghi vấn<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）コーヒーを 飲む？&#10138;</div>
                                                                <div class="translate">Uống cà phê nhé?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…うん、飲む&#10136;</div>
                                                                <div class="translate">Ừm, uống</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> cũng có những câu nghi vấn ở thể văn thông thường mà không bỏ chữ か ở
                                                        sau như: 飲むか、見たか…, nhưng chỉ được sử dụng giới hạn trong phạm vi nam 
                                                        giới khi người trên hỏi người dưới hoặc những người quá thân nhau (như cha hỏi con trai)<br>
                                                        - Đối với câu nghi vấn danh từ hay tính từ thì chữ だ thể thông thường của です được giản lược<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今晩 暇？</div>
                                                                <div class="translate">Tối nay rảnh không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…うん、暇（だよ）</div>
                                                                <div class="translate">Ừm, có rảnh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ううん、暇ではない</div>
                                                                <div class="translate">Không rảnh đâu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ううん、暇じゃない</div>
                                                                <div class="translate">Không rảnh đâu</div>
                                                            </li>
                                                        </ul>
                                                        - Khi đàm thoại thường dùng じゃない<br>
                                                        * Trợ từ trong câu nghi vấn ở thể văn thông văn cũng thường được lược bỏ<br>
                                                        Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）ご飯「を」食べる？</div>
                                                                <div class="translate">Ăn cơm nhé?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）明日京都「へ」行かない？</div>
                                                                <div class="translate">Ngày mai đi Kyoto nhé?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">３）このりんご「は」おいしいですね</div>
                                                                <div class="translate">Quả táo này ngon nhỉ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">４）そこに はさみ「が」ある？</div>
                                                                <div class="translate">Đằng kia có kéo không?</div>
                                                            </li>
                                                        </ul>
                                                        * Trong thể thông thường, chữ い trong mẫu câu V ている cũng thường được lược bỏ<br>
                                                        Ví dụ:
                                                        <ul>
                                                            <li>
                                                                <div class="example">１）辞書、持って「い」る？</div>
                                                                <div class="translate">Bạn có từ điển không</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…うん、持って「い」る</div>
                                                                <div class="translate">Có, mình có</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ううん、持って「い」ない</div>
                                                                <div class="translate">Không, mình không có</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20.4</td>
                                                <td>Thể thông thường của はい、いいえ</td>
                                                <td>
                                                    <div class="summarize">Thể thông thường của はい、いいえ</div>
                                                    <div class="hide">
                                                        はい&nbsp; => うん<br>
                                                        いいえ → ううん (phát âm "ự ưn")
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_21">
                                                <td>21.1</td>
                                                <td>Thể thông thường + と おもいます</td>
                                                <td>
                                                    <div class="summarize">(Tôi) nghĩ rằng ~ / (tôi) cho rằng ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> Thể hiện sự phỏng đoán, ý kiến chủ quan của cá nhân về một vấn đề, sự việc nào đó.
                                                        Nội dung phỏng đoán, ý kiến đưa ra được xác định bởi trợ từ と<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        <table class="inner_table" style="width:96%;">
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    Động từ<br>
                                                                    Tính từ đuôi i<br>
                                                                    Tính từ đuôi na<br>
                                                                    Danh từ
                                                                </td>
                                                                <td>Dạng ngắn</td>
                                                                <td>
                                                                    V る･V ない･V た<br>
                                                                    ～い<br>
                                                                    ～だ<br>
                                                                    ～だ
                                                                </td>
                                                                <td>と おもいます</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 明日 雨が <span class="bold">降ると</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> ngày mai trời sẽ mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) テレサちゃんは もう <span class="bold">寝たと</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> bé Teresa chắc là đã ngủ rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) かれは 日本語が <span class="bold">分からないと</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> anh ấy không biết tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) あのカメラは <span class="bold">よくないと</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> cái máy ảnh kia không tốt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) 彼女は <span class="bold">日本人だと</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> cô ấy là người Nhật Bản</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">6) 日よう日は <span class="bold">ひまだと</span> 思います</div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ</span> Chủ Nhật thì rỗi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        <span class="underline">1. Khi nói câu phủ định, có 2 cách thể hiện:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本語のテストは どうですか</div>
                                                                <div class="translate">Bài kiểm tra tiếng Nhật thế nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">1) … むずかしくないと 思います</div>
                                                                <div class="translate">Tôi <span class="bold">nghĩ là không</span> khó</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) … むずかしいと 思いません</div>
                                                                <div class="translate">Tôi <span class="bold">không nghĩ là</span> khó</div>
                                                            </li>
                                                        </ul>
                                                        - Cả 2 đều thể hiện sự phỏng đoán, ý kiến ở thể phủ định, nhưng về ý nghĩa có chút khác biệt. Cách 
                                                        nói thứ 2) có ý nghĩa phủ định mạnh hơn<br>
                                                        - Tuy nhiên, trong sơ cấp và trong bài này, chúng ta chỉ dùng cách nói 1)<br>
                                                        <span class="underline">2. Cách nói ngắn khi đồng ý hay không đồng ý với quan điểm của ai đó:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: ファクスは 便利ですね</div>
                                                                <div class="translate">Máy fax thuận tiện thật đấy nhỉ!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: 私も <span class="bold">そう思います</span></div>
                                                                <div class="translate">Tôi cũng <span class="bold">nghĩ như vậy</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">C: 私は <span class="bold">そう［は］思いません</span></div>
                                                                <div class="translate">Tôi thì <span class="bold">không nghĩ là như vậy</span></div>
                                                            </li>
                                                        </ul>
                                                        <span class="underline">3. Câu hỏi:</span> khi muốn hỏi quan điểm của ai đó về 1 vấn đề nào đó, ta dùng mẫu câu
                                                        ～に ついて どう思いますか (không cần trợ từ と sau どう nữa)<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">新しい空港<span class="bold">に ついて どう思いますか</span></div>
                                                                <div class="translate">Bạn nghĩ thế nào về sân bay mới?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…きれいですが、ちょっと交通が 不便<span class="bold">だと 思います</span></div>
                                                                <div class="translate"><span class="bold">Tôi nghĩ rằng</span> nó đẹp nhưng giao thông hơi bất tiện</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21.2</td>
                                                <td>“Sentence” dạng thông thường と 言います (言いました)</td>
                                                <td>
                                                    <div class="summarize">(Ai đó) nói rằng / đã nói rằng ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Nội dung trích dẫn được xác định bởi trợ từ と<br>
                                                        <table class="inner_table" style="width:96%;">
                                                            <tr>
                                                                <td style="text-align:left;">
                                                                    Động từ<br>
                                                                    Tính từ đuôi i<br>
                                                                    Tính từ đuôi na<br>
                                                                    Danh từ
                                                                </td>
                                                                <td>Dạng ngắn</td>
                                                                <td>
                                                                    V る･V ない･V た<br>
                                                                    ～い<br>
                                                                    ～だ<br>
                                                                    ～だ
                                                                </td>
                                                                <td>と いいます</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold underline">Có 2 kiểu trích dẫn:</span><br>
                                                        <span class="underline">1) Trích dẫn trực tiếp:</span> nhắc lại chính xác nội dung câu nói
                                                        => để nội dung đó trong ngoặc kép「 」
                                                        <ul>
                                                            <li>
                                                                <div class="example">寝る前に「お休みなさい」<span class="bold">と 言います</span></div>
                                                                <div class="translate">Trước khi đi ngủ thì <span class="bold">nói</span> “Chúc ngủ ngon”</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ミラーさんは「来週 東京へ 出張 します」<span class="bold">と 言いました</span></div>
                                                                <div class="translate"> Ông Miler <span class="bold">đã nói rằng</span> “Tuần sau tôi sẽ đi công tác Tokyo”</div>
                                                            </li>
                                                        </ul>
                                                        <span class="underline">2) Trích dẫn gián tiếp:</span> sử dụng thể thông thường trước trợ từ と,
                                                        Thì của câu trích dẫn không bị ảnh hưởng bởi thì của câu chính<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ミラーさんは 来週 東京へ出張<span class="bold">すると 言いました</span></div>
                                                                <div class="translate">Ông Miler <span class="bold">đã nói rằng</span> tuần sau ống ấy sẽ đi công tác Tokyo</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21.3</td>
                                                <td>Thể thường + でしょう？</td>
                                                <td>
                                                    <div class="summarize">～có đúng không? / ～có đúng không nhỉ? <br>(giống câu hỏi đuôi trong tiếng Anh)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng khi kỳ vọng rằng người nghe cũng biết hoặc có sự hiểu biết về chuyện mình nói 
                                                        và mong muốn người nghe sẽ tán thành ý kiến của mình. でしょう được đọc lên 
                                                        giọng giống như 1 câu hỏi để xác nhận sự đồng tình của người nghe<br>
                                                        <span class="bold">* Cách chia</span> trước でしょう là thể thông thường. Tuy nhiên đối với tính từ đuôi な và danh từ, 
                                                        bỏ だ và ghép thẳng với でしょう<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 明日パーティーに行く<span class="underline">でしょう</span>？</div>
                                                                <div class="translate">Ngày mai bạn đi party chứ <span class="bold">nhỉ?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ええ、行きます</div>
                                                                <div class="translate">Ừ, đi chứ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 北海道は 寒かった<span class="underline">でしょう</span>?</div>
                                                                <div class="translate">Hokkaido chắc là lạnh lắm <span class="bold">nhỉ?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…いいえ、そんなに寒くなかったです</div>
                                                                <div class="translate">Không, không lạnh đến thế đâu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 新宿は にぎやか<span class="underline">でしょう？</span></div>
                                                                <div class="translate">Khu Shinjuku nhộn nhịp lắm <span class="bold">nhỉ?</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…はい、にぎやかです</div>
                                                                <div class="translate">Vâng, rất nhộn nhịp</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21.4</td>
                                                <td>N1 (địa điểm)で N2 があります</td>
                                                <td>
                                                    <div class="summarize">Ở N1 được tổ chức, diễn ra N</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi N2 là các sự kiện như bữa tiệc, buổi hòa nhạc, ngày hội, vụ tai nạn hay thảm họa…
                                                        thì lúc đó あります có nghĩa là được tổ chức, diễn ra<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1. 東京<span class="bold">で</span> 日本とブラジルの サッカー試合<span class="bold">が あります</span></div>
                                                                <div class="translate">Ở Tokyo sẽ (có) diễn ra trận bóng đá giữa Nhật Bản và Braxin</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2. 神戸で 大き地震が ありました</div>
                                                                <div class="translate">Ở Kobe đã (có) xảy ra trận động đất lớn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_22">
                                                <td>22.1</td>
                                                <td>Các cách bổ nghĩa cho danh từ:</td>
                                                <td>
                                                    <div class="summarize">Các cách bổ nghĩa cho danh từ:</div>
                                                    <div class="hide">
                                                        ミラーさんの 家: Ngôi nhà của anh Miller (bài <a href="#lesson_2">2</a>)<br>
                                                        新しい 家: Ngôi nhà mới (bài <a href="#lesson_8">8</a>)<br>
                                                        きれいな 家: Ngôi nhà đẹp (bài <a href="#lesson_8">8</a>)<br>
                                                        <span class="bold">Bài này học: bổ nghĩa bằng đơn vị câu với động từ (=> định ngữ)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>22.2</td>
                                                <td>Cách cấu thành định ngữ: (bổ nghĩa danh từ bằng câu động từ)</td>
                                                <td>
                                                    <div class="summarize">Động từ dạng ngắn + Danh từ</div>
                                                    <div class="hide">
                                                        <span class="bold">Động từ dạng ngắn (Vる･V ない･V た) + DANH TỪ</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>京都へ </td>
                                                                <td>
                                                                    行く人<br>行かない人<br>行った人<br>行かなかった人
                                                                </td>
                                                                <td>Người sẽ đi Kyoto<br>Người không đi Kyoto<br>Người đã đi Kyoto<br>Người đã không đi Kyoto</td>
                                                            </tr>
                                                        </table>
                                                        Các danh từ đóng vai trò là các yếu tố khác nhau trong câu có thể được chọn ra và bổ nghĩa bằng chính 
                                                        động từ của câu đó => định ngữ:<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は 先週映画を 見ました</div>
                                                                <div class="translate">Tuần trước tôi đã xem phim</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> 私が 先週見た 映画</div>
                                                                <div class="translate">Bộ phim mà tuần trước tôi đã xem</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ワンさんは 病院で 働いています</div>
                                                                <div class="translate">Ông Wang làm việc tại bệnh viện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> ワンさんが 働いている 病院</div>
                                                                <div class="translate">Bệnh viên nơi ông Wang làm việc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 私は 明日友達に 会います</div>
                                                                <div class="translate">Ngày mai tôi sẽ gặp bạn tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> 私が 明日会う 友達</div>
                                                                <div class="translate">Người bạn mà ngày mai tôi sẽ gặp</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Khi các danh từ được bổ nghĩa thì các trợ từ を, で, に ở câu gốc sẽ không cần nữa
                                                        - Định ngữ (danh từ được bổ nghĩa bằng câu động từ ) có thể ở nhiều vị trí trong câu, đóng vai trò nhiều 
                                                        thành phần của câu (như 1 danh từ bình thường)<br>
                                                        * Ví dụ: <br>với định ngữ <span class="underline">ミラーさんが 住んでいる家</span> (ngôi nhà ông Miler đang ở) ta có thể có:
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) これは ミラーさんが 住んでいる家です</div>
                                                                <div class="translate">Đây là ngôi nhà ông Miller đang ở</div>
                                                                <br>=> là một chủ ngữ
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ミラーさんが 住んでいる家は 古いです</div>
                                                                <div class="translate">Ngôi nhà ông Miller đang ở thật là cũ</div>
                                                                <br>=> Là một vị ngữ
                                                            </li>
                                                            <li>
                                                                <div class="example">3) ミラーさんが 住んでいる家を 買いました</div>
                                                                <div class="translate">Tôi đã mua căn nhà mà ông Miller đang ở</div>
                                                                <br>=> Là một tân ngữ
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 私は ミラーさんが 住んでいる家が 好きです</div>
                                                                <div class="translate">Tôi thích căn nhà mà ông Miller đang ở</div>
                                                                <br>=> Là một tân ngữ
                                                            </li>
                                                            <li>
                                                                <div class="example">5) ミラーさんが 住んでいる家に 猫が いました</div>
                                                                <div class="translate">Đã có một con mèo ở ngôi nhà ông Miller đang ở</div>
                                                                <br>=> Là 1 danh từ chỉ vị trí
                                                            </li>
                                                            <li>
                                                                <div class="example">6) ミラーさんが 住んでいる家へ 行ったことが あります</div>
                                                                <div class="translate">Tôi đã từng đến ngôi nhà mà ông Miller đang ở</div>
                                                                <br>=> Là một danh từ chỉ địa điểm
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>22.3</td>
                                                <td>N が</td>
                                                <td>
                                                    <div class="summarize">Danh từ trong câu có sử dụng định ngữ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi câu động từ bổ nghĩa cho 1 danh từ (tạo ra định ngữ) thì chủ ngữ (chủ thể của 
                                                        hành động) trong câu bổ nghĩa đó được xác định bởi trợ từ が<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ミラーさん<span class="bold">は</span> ケーキを 作りました</div>
                                                                <div class="translate">Ông Miller đã làm bánh ngọt</div>
                                                                <br>=> Câu bình thường
                                                            </li>
                                                            <li>
                                                                <div class="example">これ<span class="bold">は</span> ミラーさん<span class="bold">が</span> 作ったケーキです</div>
                                                                <div class="translate">Đây là cái bánh ngọt ông Miller đã làm</div>
                                                                <br>=> Câu định ngữ
                                                            </li>
                                                            <li>
                                                                <div class="example">2) カリナさん<span class="bold">は</span> 絵を 書きました</div>
                                                                <div class="translate">Chị Carina đã vẽ tranh</div>
                                                                <br>=> Câu bình thường
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは カリナさん<span class="bold">が</span> 書いた絵が 好きです</div>
                                                                <div class="translate">Tôi thích bức tranh mà chị Carina đã vẽ</div>
                                                                <br>=> Câu định ngữ
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_23">
                                                <td>23.1</td>
                                                <td>～ とき、～</td>
                                                <td>
                                                    <div class="summarize">khi ～, lúc ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> giống hệt cách tạo 1 định ngữ. Về bản chất, とき cũng là 1 danh từ, vì vậy, cách 
                                                        cấu thành mẫu câu này áp dụng toàn bộ quy tắc bổ nghĩa danh từ hay tạo 1 định ngữ (đối với động từ)<br>
                                                        V thể thường + とき, V2<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 図書館で 本を<span class="bold">借りるとき</span>、カードが 要ります</div>
                                                                <div class="translate">Khi mượn sách ở thư viện cần có thẻ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 使い方が <span class="bold">分からないとき</span>、 私に 聞いてください</div>
                                                                <div class="translate"><span class="bold">Khi không biết</span> cách sử dụng thì hãy hỏi tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) <span class="bold">忙しいとき</span>、１０時ごろまで 働きます</div>
                                                                <div class="translate"><span class="bold">Khi bận rộn</span> thì làm cho đến khoảng 10 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) <span class="bold">暇なとき</span>、うちへ 遊びに行きませんか</div>
                                                                <div class="translate">Bạn sẽ đến nhà tôi chơi <span class="bold">khi rảnh rỗi</span> chứ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) 妻が <span class="bold">病気のとき</span>、会社を 休みます</div>
                                                                <div class="translate"><span class="bold">Khi vợ ốm</span> tôi sẽ xin nghỉ làm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">6) <span class="bold">子供のとき</span>、よく 川で 泳ぎました</div>
                                                                <div class="translate"><span class="bold">Hồi còn bé / Khi còn là trẻ con</span>, tôi rất hay bơi trên sông</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">7) 若いとき、あまり 勉強しませんでした</div>
                                                                <div class="translate"><span class="bold">Khi còn trẻ</span>, tôi không học hành mấy</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> thì của câu tính từ và câu danh từ bổ nghĩa cho とき không bị ảnh hưởng bởi thì của mệnh đề
                                                        chính trong câu. (ví dụ 6 và 7)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23.2</td>
                                                <td>V る / V た とき、～</td>
                                                <td>
                                                    <div class="summarize">phân biệt giữa V る ＋ とき、và V た ＋ とき</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> đều có nghĩa là “khi” nhưng nếu thì của động từ trước とき khác nhau thì nghĩa của câu 
                                                        cũng khác nhau. Cụ thể:<br>
                                                        - V る: biểu thị một hành động chưa hoàn thành<br>
                                                        - V た: biểu thị một việc, hành động hay tình trạng đã hoàn tất<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 東京へ<span class="bold">行くとき</span>、このかばんを 買いました</div>
                                                                <div class="translate">Tôi đã mua chiếc cặp này <span class="bold">khi đi</span> Tokyo</div>
                                                                <br>=> Chiếc cặp này được mua <span class="underline">trên đường đi đến</span> Tokyo
                                                            </li>
                                                            <li>
                                                                <div class="example">② 東京へ<span class="bold">行ったとき</span>、このかばんを 買いました</div>
                                                                <div class="translate">Tôi đã mua chiếc cặp này <span class="bold">khi đi</span> Tokyo</div>
                                                                <br>=> Chiếc cặp này được mua <span class="underline">sau khi đã đến</span> Tokyo
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23.3</td>
                                                <td>V る / V ない と、～</td>
                                                <td>
                                                    <div class="summarize">Nếu… thì…; cứ … thì sẽ…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> câu giả sử kiểu này dùng khi diễn tả 1 tình huống mà ở đó, do kết quả của 1 hành 
                                                        động nào đó mà 1 hành động, 1 sự việc khác <span class="underline">chắn chắn sẽ xảy ra</span>. Trợ từ と (mang 
                                                        nghĩa là “nếu”) được đặt ở giữa để nối 2 câu và đóng vai trò xác định mệnh đề giả sử<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) このボタンを <span class="bold">押すと</span>、お釣りが 出ます</div>
                                                                <div class="translate">Nếu bấm nút này thì tiền thừa sẽ chạy ra</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) これを <span class="bold">回すと</span>、音が 大きく なります</div>
                                                                <div class="translate">Nếu vặn cái này thì tiếng sẽ to lên</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 右へ <span class="bold">曲がると</span>、郵便局が あります</div>
                                                                <div class="translate">Nếu rẽ phải thì sẽ có một cái bưu điện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 日本語が <span class="bold">分からないと</span>、困りますよ</div>
                                                                <div class="translate">Nếu không biết tiếng Nhật thì sẽ khó khăn đấy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) もっと <span class="bold">がんばらないと</span>、合格できません</div>
                                                                <div class="translate">Nếu không cố gắng hơn nữa thì sẽ không thể đỗ được</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> mệnh đề đứng sau ~と không sử dụng để biểu hiện một ý hướng, một hy vọng, một sự
                                                        rủ rê hay một sự nhờ vả<br>
                                                        <table class="inner_table" width="96%;">
                                                            <tr>
                                                                <td>X<br> 時<br>間<br>が<br> あ<br>る<br>と<br></td>
                                                                <td style="text-align:left;">
                                                                    映画を 見に行きます<br><br>
                                                                    映画を 見に行きたいです<br><br>
                                                                    映画を 見に行きませんか<br><br>
                                                                    ちょっと手伝ってください
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    thì sẽ đi xem phim.<br><span style="color: #B17688;">&nbsp;(ý hướng)</span><br>
                                                                    thì muốn đi xem phim.<br><span style="color: #B17688">&nbsp;(hy vọng)</span><br>
                                                                    thì có đi xem phim không?<br><span style="color: #B17688;">&nbsp;(rủ rê)</span><br>
                                                                    thì hãy giúp một chút.<br><span style="color: #B17688;">&nbsp;(nhờ vả)</span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        Kiểu giả sử này chúng ta sẽ học ở bài <a href="#lesson_25">25</a> với mẫu câu 「～たら」
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23.4</td>
                                                <td>N が Adj／V</td>
                                                <td>
                                                    <div class="summarize">Tính từ, động từ bổ nghĩa cho danh từ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi biểu thị một tình trạng hay một quang cảnh như nó vốn có, thì trợ từ được sử dụng 
                                                        sau chủ ngữ sẽ là が<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 音<span class="bold">が</span> 小さいです。 </div>
                                                                <div class="translate">Tiếng nhỏ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 天気<span class="bold">が</span> 明るくなりました</div>
                                                                <div class="translate">Thời tiết trở nên quang đãng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) この ボタンを 押すと、切符<span class="bold">が</span> 出ます</div>
                                                                <div class="translate">Nếu bấm nút này thì vé sẽ ra</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23.5</td>
                                                <td>N (địa điểm) を V (động từ di chuyển) + <br>あるきます: đi bộ /<br>わたります: băng qua /<br>さんぽします: đi dạo</td>
                                                <td>
                                                    <div class="summarize">Đi qua, băng qua, dạo qua... ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> được sử dụng để chỉ địa điểm, vị trí nơi mà 1 người hay 1 vật nào đó đi qua<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 橋<span class="bold">を</span> 渡ります</div>
                                                                <div class="translate">Đi qua cầu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 公園<span class="bold">を</span> 散歩します</div>
                                                                <div class="translate">Đi dạo trong công viên</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 交差点<span class="bold">を</span> 右へ 曲がります</div>
                                                                <div class="translate">Rẽ phải ở ngã tư</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi một vật ở gần cả hai người thì cả hai người đều có thể dùng これ hay この
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_24">
                                                <td>24.1</td>
                                                <td>N をくれます</td>
                                                <td>
                                                    <div class="summarize">Hành động ai đó cho, tặng mình hoặc người thân trong gia đình mình cái gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> về ý nghĩa, くれます giống với あげます học trong <a href="#lesson_7">bài 7</a> nhưng điểm khác biệt là ở
                                                        chỗ あげます chỉ dùng khi thể hiện việc người nói tặng cho ai, người nào đó tặng cho người khác 
                                                        chứ không dùng để thể hiện việc ai đó tặng, cho người nói hoặc người thân trong gia đình người nói<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) わたしは <span class="bold">佐藤さんに</span> 花を <span class="bold">あげました</span></div>
                                                                <div class="translate">Tôi đã tặng hoa cho chị Sato</div>
                                                                <br><span style="color: green;">=> OK</span>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 佐藤さんは <span class="bold">キムさんに</span> プレゼントを <span class="bold">あげました</span></div>
                                                                <div class="translate">Chị Sato đã tặng quà cho bạn Kim</div>
                                                                <br><span style="color: green;">=> OK</span>
                                                            </li>
                                                            <li>
                                                                <div class="example">3)) 佐藤さんは <span class="bold">わたしに</span> クリスマスカードを <span class="bold">あげました</span></div>
                                                                <div class="translate">Chị Sato đã tặng thiệp giáng sinh cho tôi</div>
                                                                <br><span style="color: red;">=> SAI</span>
                                                            </li>
                                                        </ul>
                                                        Trong trường hợp này, chúng ta dùng động từ くれます thay thế<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 佐藤さんは 私に クリスマスカードを くれました</div>
                                                                <div class="translate">Sato đã tặng tôi một tấm thiếp Giáng Sinh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 佐藤さんは 妹に お菓子を くれました</div>
                                                                <div class="translate">Sato đã tặng kẹo cho em gái tôi</div>
                                                            </li>
                                                        </ul><br>
                                                        <div style="width: 100%; text-align: center;">
                                                            BIỂU HIỆN CỦA HÀNH ĐỘNG CHO VÀ NHẬN
                                                            <table class="inner_table" style="margin: 10px auto;">
                                                                <tr>
                                                                    <td>V て</td>
                                                                    <td>あげます<br>もらいます<br>くれます</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        Cả あげます、もらいます、くれます đều dùng để thể hiện hành động cho, tặng, biếu, nhận 1 vật 
                                                        nào đó. Chúng cũng được sử dụng để thể hiện sự cho và nhận các hành động: ai làm gì đó cho ai đồng 
                                                        thời bao hàm trong đó tình cảm, thái độ của người thực hiện hành động. Trong trường hợp này, hành 
                                                        động được thể hiện bởi động từ dạng -te
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24.2</td>
                                                <td>V てあげます</td>
                                                <td>
                                                    <div class="summarize">Cách nói làm gì đó cho ai</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> ai đó làm cho người khác một việc với ý nghĩa thiện chí, lòng tốt, thân thiện<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は <span class="bold">木村さんに</span> 本を <span class="bold">貸して あげました</span></div>
                                                                <div class="translate">Tôi đã cho chị Kimura mượn sách</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私は <span class="bold">ラオさんに</span> ひらがなを <span class="bold">教えて あげました</span></div>
                                                                <div class="translate">Tôi đã dạy cho anh Rao chữ Hiragana</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Khi người nói là người thực hiện hành động và người nghe là người nhận hành động, thì cách thể
                                                        hiện này có thể gây cảm giác người nói đang ra vẻ bề trên. Vì vậy, cần chú ý tránh sử dụng cách nói này
                                                        đối người lớn hay cấp trên, người không mấy thân thiết, chỉ nên sử dụng với người thân thiết<br>
                                                        - Khi muốn nói ý tương tự đối với người không thân thiết thì sử dụng mẫu câu V ましょうか.<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) タクシーを 呼びましょうか</div>
                                                                <div class="translate">Để tôi gọi taxi cho nhé</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 手伝いましょうか</div>
                                                                <div class="translate">Để tôi giúp một tay nhé</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24.3</td>
                                                <td>V てもらいます</td>
                                                <td>
                                                    <div class="summarize">Cách nói nhận được việc gì đó do ai làm cho</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Biểu thị lòng biết ơn của người được nhận hành vi giúp đỡ<br>
                                                        - Chủ ngữ là người nhận<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は <span class="bold">鈴木さんに</span> 日本語を <span class="bold">教えて もらいました</span></div>
                                                                <div class="translate">Tôi được cô Suzuki dạy cho tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私は <span class="bold">田中さんに</span> 病院へ <span class="bold">連れて 行って もらいました</span></div>
                                                                <div class="translate">Tôi được anh Tanaka dẫn đến bệnh viện</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>24.4</td>
                                                <td>V てくれます</td>
                                                <td>
                                                    <div class="summarize">Cách nói ai đó làm gì cho mình</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Giống với ～てもらいます、～てくれます cũng nói lên sự cảm tạ của người nhận hành vi giúp đỡ<br>
                                                        - Khác với ～てもらいます chủ ngữ là người nhận, còn trong câu ～てくれます chủ ngữ là người thực hiện hành động<br>
                                                        - Người nhận thường là người nói nên 私に (chỉ người nhận) thường được lược bỏ
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 家内は <span class="bold">(私に)</span> 子供の写真を <span class="bold">送ってくれました</span></div>
                                                                <div class="translate">Vợ tôi gửi ảnh mấy đứa con (cho tôi)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 加藤さんは (私に) 宿題を 出してくれまし</div>
                                                                <div class="translate">Bạn Kato đã nộp bài tập (giúp tôi)</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi một vật ở gần cả hai người thì cả hai người đều có thể dùng これ hay この
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_25">
                                                <td>25.1</td>
                                                <td>Thể quá khứ thông thường + ら、～</td>
                                                <td>
                                                    <div class="summarize">Câu điều kiện loại 2: dùng cho hầu hết các trường hợp</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Thêm chữ ら ở thể quá khứ thông thường của động từ, tính từ… thì sẽ biến mệnh đề
                                                        đứng trước nó thành mệnh đề biểu hiện điều kiện<br>
                                                        - Có thể dùng khi người nói muốn bày tỏ lập trường, ý kiến, yêu cầu, lời mời… của mình trong điều kiện đó<br>
                                                        <div style="width:100%;">
                                                            <table class="inner_table" style="margin: 10px auto;">
                                                                <tr>
                                                                    <td style="text-align:left;">
                                                                        Động từ<br>
                                                                        Tính từ đuôi i<br>
                                                                        Tính từ đuôi na<br>
                                                                        Danh từ
                                                                    </td>
                                                                    <td style="text-align:left;">
                                                                        V た<br>
                                                                        ～かった<br>
                                                                        ～だった<br>
                                                                        ～だった
                                                                    </td>
                                                                    <td>ら</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) お金が <span class="bold">あったら</span>、旅行します</div>
                                                                <div class="translate"><span class="bold">Nếu</span> có tiền tôi sẽ đi du lịch</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 時間が <span class="bold">なかったら</span>、テレビを 見ません</div>
                                                                <div class="translate">…(Tôi ) 29 tuổi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) <span class="bold">安かったら</span>、パソコンを 買いたいです</div>
                                                                <div class="translate"><span class="bold">Nếu</span> rẻ tôi muốn mua 1 cái máy tính cá nhân</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) <span class="bold">暇だったら</span>、手伝ってください</div>
                                                                <div class="translate"><span class="bold">Nếu</span> rỗi thì giúp tôi một tay nhé</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) いい天気だったら、散歩しませんか</div>
                                                                <div class="translate"><span class="bold">Nếu</span> thời tiết đẹp thì bạn có đi bộ cùng tôi không?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25.2</td>
                                                <td>V たら、～</td>
                                                <td>
                                                    <div class="summarize">Ý nghĩa thứ 2 của mẫu câu ～たら: khi, sau khi</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> ngoài cách dùng thể hiện điều kiện, mẫu câu ～たら còn được dùng để thể hiện 1 
                                                        hành động sẽ được thực hiện, hoặc 1 tình huống sẽ xẩy ra khi 1 sự việc nào đó mà được cho là chắc 
                                                        chắn sẽ xảy ra trong tương lai được hoàn thành hoặc đạt được. Thì của mệnh đề chính luôn ở thời hiện tại<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) １０時に<span class="bold">なったら</span>、出かけましょう</div>
                                                                <div class="translate">Chúng ta sẽ đi ra ngoài khi nào 10 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 家へ <span class="bold">帰ったら</span>、すぐ シャワーを 浴びます</div>
                                                                <div class="translate">Về nhà là tôi đi tắm ngay</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 何時ごろ 見学に 行きますか</div>
                                                                <div class="translate">Khoảng mấy giờ thì đi tham quan?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…昼ごはんを <span class="bold">食べたら</span>、すぐ 行きます</div>
                                                                <div class="translate">Sau khi ăn cơm trưa xong là đi ngay</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25.3</td>
                                                <td>Thể て + も, ～</td>
                                                <td>
                                                    <div class="summarize">Mệnh đề tương phản: Dù…, mặc dù…, cho dù…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Thêm も sau て là có được một từ chỉ điều kiện nghịch<br>
                                                        - Ngược với mẫu câu ～たら, mẫu câu ～ても dùng trong tình huống hy vọng một 
                                                        việc gì đó đương nhiên sẽ xảy ra trong điều kiện cho trước nhưng lại không xảy ra, 
                                                        hoặc kết quả xảy ra trái ngược với những gì đã kỳ vọng<br>
                                                        <div style="width: 100%;">
                                                            <table class="inner_table">
                                                                <tr>
                                                                    <td style="text-align: left;">
                                                                        V て<br>い－Adj (bỏ i) + くて<br>な－Adj (bỏ na) + で<br>N で
                                                                    </td>
                                                                    <td>も,～</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) スイッチを <span class="bold">入れても</span>,機械が 動きません</div>
                                                                <div class="translate"><span class="bold">Dù</span> đã bật công tắc nhưng máy vẫn không chạy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) <span class="bold">高くても</span>、このラジカセを 買いたいです</div>
                                                                <div class="translate"><span class="bold">Mặc dù</span> đắt nhưng tôi vẫn muốn mua cái radio-cassette này</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) <span class="bold">静かでも</span>、寝ることが できません</div>
                                                                <div class="translate"><span class="bold">Mặc dù</span> yên tĩnh nhưng cũng không ngủ được</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) <span class="bold">日曜日でも</span>、仕事を します</div>
                                                                <div class="translate"><span class="bold">Mặc dù</span> là chủ nhật nhưng vẫn làm việc</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25.4</td>
                                                <td>もし ＆ いくら </td>
                                                <td>
                                                    <div class="summarize">Nhấn mạnh cho mẫu câu ~たら và mẫu câu ~ても</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - もし được sử dụng trong mẫu câu ~たら、bao hàm ý nhấn mạnh về giả thuyết của người nói<br>
                                                        - いくら được sử dụng trong mẫu câu ~ても（～でも）, nhấn mạnh về mức độ điều kiện<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="bold">もし</span> １億円あっ<span class="bold">たら</span>、いろいろな国を 旅行したいです</div>
                                                                <div class="translate"><span class="bold">Giả sử, nếu có</span> 100 triệu yên tôi muốn đi du lịch thật nhiều nước</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) <span class="bold">いくら</span> 考え<span class="bold">ても</span>、分かりません</div>
                                                                <div class="translate"><span class="bold">Mặc dù</span> có suy nghĩ <span class="bold">bao nhiêu đi chăng nữa</span> cũng chẳng hiểu được</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                        <div id="backgroundPopup"></div>
                                        <div id="popup_area">
                                            <div class="toPopup" id="popup_cac_tu_chi_thi" style="width: 750px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        3.6 Các từ chỉ thị <a href="ko_so_a_do.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <table border="0" cellpadding="0" cellspacing="0" class="table" style="width: 720px;">
                                                        <tbody>
                                                            <tr>
                                                                <th>Chỉ thị đại danh từ</th>
                                                                <th>Chỉ thị tính từ</th>
                                                                <th>Đại danh từ chỉ nơi chốn</th>
                                                                <th>Đại danh từ chỉ phương hướng</th>
                                                            </tr>
                                                            <tr>
                                                                <td>これ  Cái này</td>
                                                                <td>この  này: N này</td>
                                                                <td>ここ  Chỗ này</td>
                                                                <td>こちら Hướng này, phía này, chỗ này</td>
                                                            </tr>
                                                            <tr>
                                                                <td>それ  Cái đó</td>
                                                                <td>その  đó: N đó</td>
                                                                <td>そこ   Chỗ đó</td>
                                                                <td>そちら  Hướng đó, phía đó, chỗ đó</td>
                                                            </tr>
                                                            <tr>
                                                                <td>あれ  Cái kia</td>
                                                                <td>あの  N kia</td>
                                                                <td>あそこ  Chỗ kia</td>
                                                                <td>あちら  Hướng kia, phía kia, chỗ kia</td>
                                                            </tr>
                                                            <tr>
                                                                <td>どれ   Cái nào</td>
                                                                <td>どの + N</td>
                                                                <td>どこ  Chỗ nào</td>
                                                                <td>どちら  Hướng nào</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dem_tuoi" style="width: 620px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>3.6 Cách đếm tuổi, yên, tầng</span> <a href="dem_tuoi.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <table cellpadding="0" cellspacing="0" class="table" style="width: 580px; text-align: center;">
                                                        <tbody>
                                                            <tr>
                                                                <th width="10%">Số đếm</th>
                                                                <th>~  歳(さい)( Tuổi)</th>
                                                                <th>~  円(えん)( Yên )</th>
                                                                <th>~  階(かい)( Tầng )</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><span class="bold">いっさい</span></td>
                                                                <td>にえん</td>
                                                                <td>いっかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>にさい</td>
                                                                <td>にえん</td>
                                                                <td>にかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>さんさい</td>
                                                                <td>さんえん</td>
                                                                <td><span class="bold">さんがい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>よんさい</td>
                                                                <td><span class="bold">よえん</span></td>
                                                                <td>よんかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>ごさい</td>
                                                                <td>ごえん</td>
                                                                <td>ごかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>ろくさい</td>
                                                                <td>ろくえん</td>
                                                                <td><span class="bold">ろっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>ななさい</td>
                                                                <td>ななえん</td>
                                                                <td>ななかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td><span class="bold">はっさい</span></td>
                                                                <td>はちえん</td>
                                                                <td><span class="bold">はっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>きゅうさい</td>
                                                                <td>きゅうえん</td>
                                                                <td>きゅうかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td><span class="bold">じゅっさい</span></td>
                                                                <td>じゅうえん</td>
                                                                <td><span class="bold">じゅっかい（じっかい）</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td><span class="bold">じゅういっさい</span></td>
                                                                <td>じゅういちえん</td>
                                                                <td><span class="bold">じゅういっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>じゅうよんさい</td>
                                                                <td>じゅうよえん</td>
                                                                <td>じゅうよんかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>じゅうろくさい</td>
                                                                <td>じゅうろくえん</td>
                                                                <td><span class="bold">じゅうろっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>20</td>
                                                                <td><span class="bold">はたち</span></td>
                                                                <td>にじゅうえん</td>
                                                                <td><span class="bold">にじゅっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>100</td>
                                                                <td>ひゃくさい</td>
                                                                <td>ひゃくえん</td>
                                                                <td><span class="bold">ひゃっかい</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1000</td>
                                                                <td>せんさい</td>
                                                                <td>せんえん</td>
                                                                <td>せんかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10000</td>
                                                                <td>いちまんさい </td>
                                                                <td>いちまんえん</td>
                                                                <td>いちまんかい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>?</td>
                                                                <td>なんさい </td>
                                                                <td>いくら</td>
                                                                <td><span class="bold">なんがい</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dem_gio" style="width: 720px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>4.1 Đếm giờ, phút</span> <a href="dem_gio.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <h2>Bảng đếm giờ</h2>
                                                    <table cellpadding="0" cellspacing="0" class="table" style="text-align: center;">
                                                        <tr>
                                                            <th>0h</th>
                                                            <th>1h</th>
                                                            <th>2h</th>
                                                            <th>3h</th>
                                                            <th>4h</th>
                                                            <th>5h</th>
                                                        </tr>
                                                        <tr>
                                                            <td>れいじ</td>
                                                            <td>いちじ</td>
                                                            <td>にじ</td>
                                                            <td>さんじ</td>
                                                            <td><span class="bold">よじ</span></td>
                                                            <td>ごじ</td>
                                                        </tr>
                                                        <tr>
                                                            <th>6h</th>
                                                            <th>7h</th>
                                                            <th>8h</th>
                                                            <th>9h</th>
                                                            <th>10h</th>
                                                            <th>11h</th>
                                                        </tr>
                                                        <tr>
                                                            <td>ろくじ</td>
                                                            <td><span class="bold">しちじ</span></td>
                                                            <td>はちじ</td>
                                                            <td><span class="bold">くじ</span></td>
                                                            <td>じゅうじ</td>
                                                            <td>じゅういちじ</td>
                                                        </tr>
                                                        <tr>
                                                            <th>12h</th>
                                                            <th>?</th>
                                                            <th>3h30</th>
                                                            <th>6 a.m</th>
                                                            <th>7 p.m</th>
                                                            <th></th>
                                                        </tr>
                                                        <tr>
                                                            <td>じゅうにじ</td>
                                                            <td>なんじ</td>
                                                            <td>さんじはん</td>
                                                            <td>ごぜんろくじ</td>
                                                            <td>ごごしちじ</td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                    <h2>Bảng đếm phút</h2>
                                                    <table cellpadding="0" cellspacing="0" class="table" style="text-align: center;">
                                                        <tr>
                                                            <th>1</th>
                                                            <th>2</th>
                                                            <th>3</th>
                                                            <th>4</th>
                                                            <th>5</th>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="bold">いっぷん</span></td>
                                                            <td>にふん</td>
                                                            <td><span class="bold">さんぷん</span></td>
                                                            <td><span class="bold">よんぷん</span></td>
                                                            <td>ごふん</td>
                                                        </tr>
                                                        <tr>
                                                            <th>6</th>
                                                            <th>7</th>
                                                            <th>8</th>
                                                            <th>9</th>
                                                            <th>?</th>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="bold">ろくぷん</span></td>
                                                            <td>ななふん</td>
                                                            <td><span class="bold">はっぷん</span></td>
                                                            <td>きゅうふん</td>
                                                            <td>なんぷん</td>
                                                        </tr>
                                                        <tr>
                                                            <th>10</th>
                                                            <th>20</th>
                                                            <th>30</th>
                                                            <th>40</th>
                                                            <th>50</th>
                                                        </tr>
                                                        <tr class="bold">
                                                            <td>じゅっぷん じっぷん</td>
                                                            <td>にじゅっぷん にじっぷん</td>
                                                            <td>さんじゅっぷん さんじっぷん</td>
                                                            <td>よんじゅっぷん よんじっぷん</td>
                                                            <td>ごじゅっぷん ごじっぷん</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_te" style="width: 630px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        14.2 Động từ thể te <a href="dong_tu_the_te.html" target="_blank">Xem trong tab mới</a><br><br>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    (1) Nhóm 1:
                                                    <table border="0" cellpadding="0" cellspacing="0" class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tbody>
                                                            <tr>
                                                                <th>V (i)ます</th>
                                                                <th>Cách chia</th>
                                                                <th>V て</th>
                                                                <th>Nghĩa</th>
                                                            </tr>
                                                            <tr>
                                                                <td>かきます</td>
                                                                <td rowspan="2">V きます－＞ V いて</td>
                                                                <td>かいて</td>
                                                                <td>Viết</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ききます</td>
                                                                <td>きいて</td>
                                                                <td>Nghe</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>いそぎます</td>
                                                                <td>V ぎます－＞ V いで</td>
                                                                <td>いそいで </td>
                                                                <td>Vội</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>のみます</td>
                                                                <td rowspan="4">V みます－＞ V んで<br>V びます－＞ V んで<br>V にます－＞ V んで</td>
                                                                <td>のんで</td>
                                                                <td>Uống</td>
                                                            </tr>
                                                            <tr>
                                                                <td>よみます</td>
                                                                <td>よんで</td>
                                                                <td>Đọc</td>
                                                            </tr>
                                                            <tr>
                                                                <td>よびます</td>
                                                                <td>よんで</td>
                                                                <td>Gọi</td>
                                                            </tr>
                                                            <tr>
                                                                <td>しにます</td>
                                                                <td>しんで</td>
                                                                <td>Chết</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>かいます</td>
                                                                <td rowspan="6">
                                                                    V います－＞ V って<br>
                                                                    V ります－＞ V って<br>
                                                                    V ちます－＞ V って<br>
                                                                    <span class="bold">＊いきます</span><br>
                                                                </td>
                                                                <td>かって</td>
                                                                <td>Mua</td>
                                                            </tr>
                                                            <tr>
                                                                <td>いいます</td>
                                                                <td>いって</td>
                                                                <td>Nói</td>
                                                            </tr>
                                                            <tr>
                                                                <td>とります</td>
                                                                <td>とって</td>
                                                                <td>Lấy, cầm lấy</td>
                                                            </tr>
                                                            <tr>
                                                                <td>あります</td>
                                                                <td>あって</td>
                                                                <td>Có</td>
                                                            </tr>
                                                            <tr>
                                                                <td>まちます</td>
                                                                <td>まって</td>
                                                                <td>Đợi</td>
                                                            </tr>
                                                            <tr class="bold">
                                                                <td >いきます</td>
                                                                <td>いって</td>
                                                                <td>Đi</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>かします</td>
                                                                <td rowspan="2">V します－＞ V して</td>
                                                                <td>かして</td>
                                                                <td>Cho mượn</td>
                                                            </tr>
                                                            <tr>
                                                                <td>はなします</td>
                                                                <td>はなして</td>
                                                                <td>Nói chuyện</td>
                                                            </tr>
                                                        </tbody>
                                                    </table >
                                                    (2) Nhóm 2
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <th>V (i)ます</th>
                                                            <th>Cách chia</th>
                                                            <th>V て</th>
                                                            <th>Nghĩa</th>
                                                        </tr>
                                                        <tr>
                                                            <td>食べます</td>
                                                            <td rowspan="4">V (e)ます－＞  V (e)て</td>
                                                            <td>おしえて</td>
                                                            <td>Dạy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>あげます</td>
                                                            <td>あげて</td>
                                                            <td>Cho, tặng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ねます</td>
                                                            <td>ねて</td>
                                                            <td>Ngủ</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>みます</td>
                                                            <td rowspan="4">V (i)ます－＞  V (i)て</td>
                                                            <td>みて</td>
                                                            <td>Xem</td>
                                                        </tr>
                                                        <tr>
                                                            <td>います</td>
                                                            <td>いて</td>
                                                            <td>Có (ở)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>おきます</td>
                                                            <td>おきて</td>
                                                            <td>Thức dậy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>かります</td>
                                                            <td>かりて</td>
                                                            <td>Mượn</td>
                                                        </tr>
                                                    </table>
                                                    (3) Nhóm 3
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <th>V (i)ます</th>
                                                            <th>Cách chia</th>
                                                            <th>V て</th>
                                                            <th>Nghĩa</th>
                                                        </tr>
                                                        <tr>
                                                            <td>べんきょうします</td>
                                                            <td rowspan="4">
                                                                します    －＞  して<br>
                                                                N します  －＞N して
                                                            </td>
                                                            <td>べんきょうして</td>
                                                            <td>Học</td>
                                                        </tr>
                                                        <tr>
                                                            <td>じっしゅうします</td>
                                                            <td>じっしゅうして</td>
                                                            <td>Thực tập</td>
                                                        </tr>
                                                        <tr>
                                                            <td>かいものします</td>
                                                            <td>かいものして</td>
                                                            <td>Mua sắm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>けんぶつします</td>
                                                            <td>けんぶつして</td>
                                                            <td>Tham quan</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>きます</td>
                                                            <td>きます －＞  きて</td>
                                                            <td>きて</td>
                                                            <td>Đến</td>
                                                        </tr>
                                                    </table>
                                                    <div class="bold" style="margin-bottom:150px;">
                                                        Chú ý: Khi chia sang thể て , ý nghĩa của động từ không thay đổi. Thể て là 1 thể của 
                                                        động từ, dùng để cấu thành các mẫu câu khác nhau
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="paging paging_bottom">
                                            1&nbsp;&nbsp;-&nbsp;&nbsp;<a href="<?php echo esc_url( home_url( '/')); ?>giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt-3">2</a>
                                        </div>
                                        <div class="fix_item">
                                            <div class="link_popup" data="popup_cac_tu_chi_thi">3.6 Các từ chỉ thị ko/so/a/do</div>
                                            <div class="link_popup" data="popup_dem_tuoi">3.6 Cách đếm Tuổi, Yên, Tầng</div>
                                            <div class="link_popup" data="popup_dem_gio">4.1 Cách đếm giờ, phút</div>
                                            <div class="link_popup" data="popup_dong_tu_the_te">14.2 Cách chia động từ thể て</div>
                                        </div>
					<?php $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home'))); ?>
                                        <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
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