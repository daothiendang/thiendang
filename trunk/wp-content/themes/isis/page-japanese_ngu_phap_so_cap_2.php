<?php
/*
  Template Name: Ngữ pháp sơ cấp tiếng Nhật bài 26-50
 */
?>
<?php get_header(); ?>
<div class="row">
    <div class="large-12">
        <?php $page1 = home_url() . '/giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt'; ?>
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
                                    <div class="center" style="margin: 0 0 0 80px;">
                                        <h2>Giáo trình 50 bài Shin no nihongo Đại học FPT</h2>
                                        <h2 style="margin-top: 10px;">Ngữ pháp từ bài 26 đến bài 50</h2>
                                        <div style="text-align:center;">(Click vào tiêu đề màu đỏ để hiện nội dung bài học)</div>
                                        <div class="paging">
                                            <a href="<?php echo $page1; ?>">1</a>&nbsp;&nbsp;-&nbsp;&nbsp;2
                                        </div>
                                        <table border="0" cellpadding="0" cellspacing="0" class="table" style="width: 850px;">
                                            <tr>
                                                <th width="4%">Bài</th>
                                                <th width="36%">Cấu trúc</th>
                                                <th width="60%">Ý nghĩa</th>
                                            </tr>
                                            <tr id="lesson_26">
                                                <td>26.1</td>
                                                <td>Thể thường + んです</td>
                                                <td>
                                                    <div class="summarize">Nhấn mạnh ý muốn nói, muốn hỏi; dùng nhiều trong văn nói</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cấu tạo</span>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td style="text-align: left; padding: 5px 15px;">
                                                                    Động từ dạng ngắn<br>
                                                                    Tính từ đuôi i<br>
                                                                    Tính từ đuôi na<br>
                                                                    Danh từ
                                                                </td>
                                                                <td style="text-align: left; padding: 5px 15px;">
                                                                    Vる･Vない･Vた<br>
                                                                    ～い<br>
                                                                    ～な<br>
                                                                    ～な 
                                                                </td>
                                                                <td style="padding: 15px;">んです</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Cách dùng :</span><br>
                                                        <span class="bold">1. Trong các câu hỏi:「～んですか。」</span><br>
                                                        a) Dùng trong trường hợp xác nhận lại thông tin xem có đúng như cái mà mình đang nhìn thấy hoặc đang suy đoán không<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">渡辺さんは ときどき 大阪べんを 使いますね。大阪に 住んでいた<span class="underline">んですか</span></div>
                                                                <div class="translate">Anh watanabe thỉnh thoảng dùng tiếng Osaka nhỉ. Anh đã sống ở Osaka à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…ええ、１５歳まで 大阪に 住んでいました</div>
                                                                <div class="translate">Vâng, tôi đã sống ở Osaka đến năm 15 tuổi</div>
                                                            </li>
                                                        </ul>
                                                        b) Khi người nói hỏi về thông tin mà anh ấy nghe hoặc nhìn thấy<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">いいカメラですね。どこで 買った<span class="underline">んですか</span></div>
                                                                <div class="translate">Chiếc máy ảnh đẹp quá. Anh mua ở đâu vậy?</div>
                                                            </li>
                                                        </ul>
                                                        c) Khi người nói muốn nghe giải thích nguyên nhân, lý do của sự việc mà anh ấy nghe hoặc nhìn thấy<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">どうして 遅れた<span class="underline">んですか</span></div>
                                                                <div class="translate">Tại sao anh lại đến muộn thế?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Chú ý:</span> Đôi khi ．～んですか biểu thị sự ngạc nhiên, mối nghi ngờ hay sự tò mò sâu sắc. Tuy nhiên,
                                                        nếu không dùng đúng thì có thể làm tổn thương người nghe. Vì thế nên cẩn thận khi dùng<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example red">(X) 社長、帰らない<span class="underline">んですか</span></div>
                                                                <div class="translate">Anh không về sao, giám đốc?</div>
                                                                <span class="translate">=> Biểu hiện này có hàm ý trách móc, dễ dẫn đến thất lễ</span>
                                                            </li>
                                                            <li>
                                                                <div class="example">(O) 社長、帰りませんか</div>
                                                                <div class="translate">Anh không về sao, giám đốc?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">2. Trong câu trần thuật: 「～んです。」</span><br>
                                                        Biểu hiện này thường dùng trong những trường hợp sau:<br>
                                                        a) Khi trả lời câu hỏi tại sao giống như ý C ở phần trên. (phía sau không còn から nữa)<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">どうして 遅れた<span class="underline">んですか</span></div>
                                                                <div class="translate">Tại sao anh lại đến muộn?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…バスが 来なかった<span class="underline">んです</span></div>
                                                                <div class="translate"><span class="underline">Tại vì</span> xe buýt không đến</div>
                                                            </li>
                                                        </ul>
                                                        b) Khi người nói trình bày thêm nguyên nhân, lý do. (phía sau không còn から nữa)<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">毎朝、新聞を 読みますか</div>
                                                                <div class="translate">Hàng sáng anh có đọc báo không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…いいえ。時間が ない<span class="underline">んです</span></div>
                                                                <div class="translate">Không. <span class="underline">Vì</span> tôi không có thời gian</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Không được dùng ～んです để diễn tả sự thật đơn thuần như ví dụ sau đây<br>
                                                        O 私は ミラーです: Tôi là Miller<br>
                                                        <span class="red">X 私は ミラーなんです</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26.2</td>
                                                <td>～んですが、～</td>
                                                <td>
                                                    <div class="summarize">Giới thiệu về mẫu câu ～んですが,~</div>
                                                    <div class="hide">
                                                        んですが thường dùng để giới thiệu một chủ đề, giới hạn lại câu chuyện muốn nói. Theo sau nó 
                                                        thường là một yêu cầu, một lời mời hay xin lời khuyên. [が] trong trường hợp này được dùng để nối 
                                                        các vế câu 1 cách tự nhiên va biểu thị sự ngập ngừng do dự từ phía người nói chữ không mang nghĩa là 
                                                        “nhưng”. Ở bài này んですが được dùng trong 2 mẫu câu dưới đây<br>
                                                        - ～んですが、V ていただけませんか: cách yêu cầu, đề nghị ai làm gì giúp mình 1 cách lịch sự<br>
                                                        - ～んですが、V たらいいですか: cách hỏi cách làm, xin lời khuyên, sự chỉ dẫn
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26.2.1</td>
                                                <td>～んですが、V ていただけませんか</td>
                                                <td>
                                                    <div class="summarize">Mong (ai đó) làm gì giúp được không?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để yêu cầu, nhờ ai đó làm gì giúp mình nhưng có ý nghĩa yêu cầu, nhờ vả lịch 
                                                        sự hơn V てください rất nhiều<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本語で 手紙を 書いた<span class="bold">んですが、見て いただけませんか</span></div>
                                                                <div class="translate">Tôi đã viết 1 bức thư bằng tiếng Nhật, anh/chị xem giúp tôi được không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">コピー機の 使い方が 分からない<span class="bold">んですが、教えて いただけませんか</span></div>
                                                                <div class="translate">Tôi không biết cách sử dụng máy photo, anh/chị chỉ giúp tôi được không ạ?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> ～ていただけませんか chứ không phải là ～ていただきませんか
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26.2.2</td>
                                                <td>～んですが、V たらいいですか</td>
                                                <td>
                                                    <div class="summarize">Làm thế nào … thì được nhỉ?; nên làm thế nào nhỉ?...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng khi muốn được người nghe cho lời khuyên hoặc hướng dẫn phải làm gì<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 日本語を 勉強したい<span class="bold">んですが、どうしたら いいですか</span></div>
                                                                <div class="translate">Tôi muốn học tiếng Nhật, vậy thì nên làm thế nào nhỉ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…FPT大学で 勉強したら いいと思います</div>
                                                                <div class="translate">Tôi nghĩ anh nên học tiếng Nhật ở Đại học FPT</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 試験の予定を 知りたい<span class="bold">んですが、だれに 聞いたら いいですか</span></div>
                                                                <div class="translate">Tôi muốn biết kế hoạch thi, vậy tôi nên hỏi ai bây giờ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…試験部の Nga さんに 聞いて ください</div>
                                                                <div class="translate">Anh/chị hãy hỏi chị Nga phòng khảo thí</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_27">
                                                <td>27.1</td>
                                                <td>Động từ thể khả năng.（可能形）</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_kha_nang">Động từ thể khả năng</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27.2</td>
                                                <td>～が見えます và 聞こえます</td>
                                                <td>
                                                    <div class="summarize">Nhìn thấy, nghe thấy</div>
                                                    <div class="hide">
                                                        - 見えます (nhìn thấy) và 聞こえます(nghe thấy) là 2 động từ đặc biệt của 見る và 聞く<br>
                                                        - Hai động từ này chỉ khả năng của mắt, tai một cách tự nhiên. Được dùng khi hình ảnh hay âm thanh 
                                                        đập vào mắt, tai một cách tự nhiên, không liên quan đến khả năng của con người. Tân ngữ của chúng 
                                                        cũng đi với trợ từ [が]<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1）2階から 山<span class="bold">が 見えます</span></div>
                                                                <div class="translate">Từ tầng 2 <span class="bold">có thể nhìn thấy núi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）ここから 波の音<span class="bold">が 聞こえます</span></div>
                                                                <div class="translate">Từ đây <span class="bold">có thể nghe thấy</span> tiếng sóng biển</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Phân biệt với 見られます và 聞けます<br>
                                                        Hai động từ này mới chính là thể khả năng (theo đúng quy tắc và ý nghĩa) của 見みる và 聞きく.
                                                        Thể hiện về khả năng, năng lực thực hiện hành động<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">１） 忙しいですから、テレビが <span class="bold">見られません</span></div>
                                                                <div class="translate">Vì bận nên tôi <span class="bold">không thể xem</span> được tivi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">２）ラジオが ありませんから、音楽が <span class="bold">聞けません</span></div>
                                                                <div class="translate">Vì không có đài nên <span class="bold">không thể nghe</span> được nhạc</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27.3</td>
                                                <td>～まだ 「V khả năng」～ません</td>
                                                <td>
                                                    <div class="summarize">Chưa thể (làm gì)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> thể hiện 1 việc trong thời điểm nói thì chưa thể làm được nhưng sẽ cố gắng để sau 
                                                        này có thể thực hiện được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本の歌が <span class="bold">まだ 歌えません</span></div>
                                                                <div class="translate">Tôi chưa thể hát được bài hát Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">日本語が <span class="bold">まだ</span> 上手に <span class="bold">話せません</span></div>
                                                                <div class="translate">Tôi <span class="bold">chưa thể</span> nói giỏi tiếng Nhật được</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27.4</td>
                                                <td>～しか ～ません</td>
                                                <td>
                                                    <div class="summarize">Chỉ ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> thể hiện sự giới hạn trong thực hiện hành động. Động từ đi sau しか luôn chia ở
                                                        dạng phủ định. Loại câu này thuộc hình thức phủ định nhưng luôn mang nghĩa 
                                                        khẳng định (người Nhật dùng với ý khiêm tốn)<br>
                                                        <span class="bold">* Chú ý:</span> trước đây chúng ta đã học [だけ] với ý nghĩa là “chỉ”. Sự khác nhau cơ bản ở đây là:<br>
                                                        - [だけ] đi với câu dạng khẳng định<br>
                                                        - [しか ] đi với câu dạng phủ định<br>
                                                        - Ngoài ra, [しか ] có thể thay thế cho các trợ từ như [が、を]<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは ひらがな<span class="bold">だけ 書け<span class="underline">ます</span></span></div>
                                                                <div class="translate">Tôi <span class="bold">chỉ có thể viết</span> được chữ Hiragana</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは ひらがな<span class="bold">しか 書けま<span class="underline">せん</span></span></div>
                                                                <div class="translate">Tôi <span class="bold">chỉ có thể viết</span> được chữ Hiragana</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は 英語しか 分かりません</div>
                                                                <div class="translate">Anh ấy <span class="bold">chỉ biết</span> tiếng Anh thôi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27.5</td>
                                                <td>N1は～が、N2は～</td>
                                                <td>
                                                    <div class="summarize">N1 thì ～, nhưng N2 thì ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để thể hiện 2 điều trái ngược hoàn toàn, thường là về khả năng với ý nghĩa “cái 
                                                        này thì làm được, còn cái kia thì không làm được”. Khi đó, trợ từ được dùng ở đây là 
                                                        [は] thay cho [が]; còn trợ từ [が] ở giữa là để nối 2 vế với nghĩa là “nhưng” <br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ひらがな<span class="bold">は</span> 書けます<span class="bold">が</span>、漢字<span class="bold">は</span> 書けません</div>
                                                                <div class="translate">Chữ Hiragana <span class="bold">thì</span> tôi <span class="bold">có thể</span> viết <span class="bold">nhưng</span> chữ Hán thì <span class="bold">không thể</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">テニス<span class="bold">は</span> できます<span class="bold">が</span>、スキー<span class="bold">は</span> できません</div>
                                                                <div class="translate">Tenis <span class="bold">thì</span> tôi <span class="bold">chơi được nhưng</span> trượt tuyết <span class="bold">thì không</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27.6</td>
                                                <td>N1 に N2 が できます</td>
                                                <td>
                                                    <div class="summarize">Ở N1 có N2 được hoàn thành</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để thể hiện sự hoàn thành của sự vật<br>
                                                        <span class="bold">* Chú ý:</span> Trợ từ cho danh từ chỉ nơi chốn trong mẫu câu này là [に]<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">駅の前<span class="bold">に</span> 大きいスーパー<span class="bold">が できました</span></div>
                                                                <div class="translate">Trước cửa nhà ga, một siêu thị lớn đã được xây xong</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">大阪<span class="bold">に</span> 新しい 空港<span class="bold">が できました</span></div>
                                                                <div class="translate">Ở Osaka một sân bay mới đã hoàn thành</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_28">
                                                <td>28.1</td>
                                                <td>V1 bỏ ます + ながら、 V2</td>
                                                <td>
                                                    <div class="summarize">vừa (làm 1) vừa (làm 2)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn tả 2 hành động xảy ra đồng thời vào cùng một thời điểm. Trong đó, 
                                                        hành động thứ 2 là hành động chính, được nhấn mạnh hơn<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">私は 毎朝コーヒーを <span class="bold">飲みながら</span> 新聞を 読みます</div>
                                                                <div class="translate">Hàng sáng tôi <span class="bold">vừa</span> uống cà phê <span class="bold">vừa</span> đọc báo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は テレビを <span class="bold">飲みながら</span> ご飯を 食べています</div>
                                                                <div class="translate">Anh ấy đang <span class="bold">vừa</span> ăn cơm <span class="bold">vừa</span> xem tivi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Mẫu câu này không chỉ diễn tả 2 hành động xảy ra trong 1 thời gian ngắn mà còn diễn tả 
                                                        2 hành động xảy ra đồng thời, liên tục trong 1 thời gian dài<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">学生の時、アルバイトを<span class="bold">しながら</span> 大学で 勉強しました</div>
                                                                <div class="translate">Hồi học sinh, tôi <span class="bold">vừa</span> làm thêm <span class="bold">vừa</span> đi học</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は <span class="bold">働きながら</span> 大学に 通っています</div>
                                                                <div class="translate">Anh ấy <span class="bold">vừa</span> đi làm <span class="bold">vừa</span> đi học đại học</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28.2</td>
                                                <td>V ています</td>
                                                <td>
                                                    <div class="summarize">Động từ dạng tiếp diễn diễn tả 1 thói quen, 1 hành động thường lặp đi lặp lại nhiều lần</div>
                                                    <div class="hide">
                                                        Mẫu câu này chúng ta đã làm quen ở <a href="<?php echo $page1; ?>#lesson_14" target="_blank">bài 14</a>
                                                        với ý nghĩa <span class="bold">hành động đang diễn ra tại thời điểm nói.</span> Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今テレビを <span class="underline">見ています</span></div>
                                                                <div class="translate">Bây giờ tôi đang xem tivi</div>
                                                            </li>
                                                        </ul>
                                                        Hoặc <span class="bold">hành động diễn ra liên tục trong 1 thời gian dài</span> như công việc, học tâp. Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">FPT大学で <span class="underline">勉強しています</span></div>
                                                                <div class="translate">Tôi đang học tại đại học FPT</div>
                                                            </li>
                                                        </ul>
                                                        Ở <a href="<?php echo $page1; ?>#lesson_15" target="_blank">bài 15</a> với ý nghĩa <span class="bold">diễn tả trạng thái, kết quả của hành động</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">結婚しています</div>
                                                                <div class="translate">Tôi đã kết hôn rồi</div>
                                                            </li>
                                                        </ul>
                                                        Ở bài này, gần giống như ý nghĩa trên, 「V ています」dùng để diễn tả <span class="bold">1 thói quen, 1 hành động có 
                                                            tính chất lặp đi lặp lại nhiều lần</span> trong cuộc sống sinh hoạt hàng ngày. Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">休みの日は スポーツを <span class="underline">しています</span></div>
                                                                <div class="translate">Ngày nghỉ tôi hay/thường chơi thể thao</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">夜は いつも 日本語を <span class="underline">勉強しています</span></div>
                                                                <div class="translate">Buổi tối tôi hay/thường học tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ひまな時、友達と 話したり、本を 読んだり <span class="underline">しています</span></div>
                                                                <div class="translate">Những lúc rỗi rãi, tôi thường lúc thì trò chuyện với bạn bè, lúc thì đọc sách</div>
                                                            </li>
                                                        </ul>

                                                        <span class="bold">* Chú ý:</span> Hành động mang tính chất thói quen trong quá khứ thì được biểu thị bởi「V ていました」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">子供の時、毎晩 8時に <span class="underline">寝ていました</span></div>
                                                                <div class="translate">Hồi còn bé tối nào tôi cũng vào lúc 8 giờ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28.3</td>
                                                <td>Thể thường し、Thể thường し、～</td>
                                                <td>
                                                    <div class="summarize">Vừa thế này, lại thế kia nữa; Vì thế này, và vì thế này nên…</div>
                                                    <div class="hide">
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td style="text-align: left;">Động từ</td>
                                                                <td rowspan="4">dạng ngắn</td>
                                                                <td>V る･V ない･V た</td>
                                                                <td rowspan="4"> + し</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left;">Tính từ đuôi i</td>
                                                                <td>～い</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left;">Tính từ đuôi na</td>
                                                                <td>～だ</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left;">Danh từ</td>
                                                                <td>～だ</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Cách dùng:</span> し được dùng để liệt kê các nội dung khác nhau của một đề tài
                                                        hoặc trình bày nhiều hơn một nguyên nhân, lý do (có thể nhiều hơn 2, nhưng thường chỉ liệt kê 2)<br>
                                                        <span class="bold">* Chú ý:</span> trong mẫu câu này, ta dùng trợ từ「も 」 để thay thế cho trợ từ「が」hay「を」với hàm ý 
                                                        nhấn mạnh vào các lý do đưa ra<br>
                                                        <span class="bold">a) ~し, ~し, (それに)~:</span> vừa …vừa…, hơn nữa<br>
                                                        Có thể dùng mẫu câu này để miêu tả những nội dung khác nhau của một đề tài<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ミラーさんは 親切だ<span class="bold">し</span>、 頭もいい<span class="bold">し</span>、<span class="bold">それに</span> ハンサムです</div>
                                                                <div class="translate">Anh Miller vừa tốt bụng, vừa thông minh, hơn nữa lại đẹp trai</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ミラーさんは ビアノ<span class="bold">も</span> 弾ける<span class="bold">し</span>、ダンス<span class="bold">も</span> できるし、<span class="bold">それに</span> 歌も 歌えます</div>
                                                                <div class="translate">Anh Miller vừa chơi được piano, vừa có thể khiêu vũ, hơn nữa cũng có thể hát</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">b) ～し、～し、（それで）～:</span> Vì… và vì…, nên…<br>
                                                        Cấu trúc này cũng được dùng khi trình bày hơn một lý do hoặc nguyên nhân<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) きょうは 雨だ<span class="bold">し</span>、お金もない<span class="bold">し</span>、（<span class="bold">それで</span>） 出かけません</div>
                                                                <div class="translate">Hôm nay trời vừa mưa, hơn nữa không tiền nên tôi không đi ra ngoài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) この店は 食べ物も おいしい<span class="bold">し</span>、値段も 安い<span class="bold">し</span>、<span class="bold">（それで）</span> 人が 多いです</div>
                                                                <div class="translate">Cửa hàng này đồ ăn ngon, giá lại rẻ nên rất đông khách</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">c) ～し、～し、～から:</span> Vì…, và vì… (ngoài ra còn có các nguyên nhân khác)<br>
                                                        Cấu trúc này dùng để trả lời cho câu hỏi tại sao. Với ngụ ý: ngoài những nguyên nhân người ta nêu 
                                                        ra còn có thể có nhiều nguyên nhân khác nữa<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">どうして この会社に 入ったんですか</div>
                                                                <div class="translate">Tại sao bạn lại vào công ty này làm việc?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...残業<span class="bold">も</span> ない<span class="bold">し</span>、ボーナス<span class="bold">も</span> 多い<span class="bold">ですから</span></div>
                                                                <div class="translate">Cửa hàng này đồ ăn ngon, giá lại rẻ nên rất đông khách</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_29">
                                                <td>29.1</td>
                                                <td>V ています</td>
                                                <td>
                                                    <div class="summarize">Ý nghĩa mới, cách dùng mới của động từ dạng tiếp diễn: diễn tả trạng thái</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này được dùng để diễn tả trạng thái của sự vật
                                                        diễn ra ngay trước mắt và kết quả của nó hiện vẫn còn như thế. Các động từ dùng trong mẫu câu này
                                                        là <span class="bold">tự động từ</span>, tức là các động từ chỉ trạng thái và hầu hết là diễn tả các hành động tức thời<br>
                                                        Cũng với ý nghĩa này, chúng ta đã học 「結婚しています」「住んでいます」「知っています」
                                                        「持っています」<a href="<?php echo $page1; ?>#lesson_15" target="_blank">(bài 15)</a> nhưng những biểu hiện này
                                                        có chủ thể là <span class="bold">con người</span>. Bài này, chúng ta học cách thể hiện với chủ thể
                                                        là những đồ vật mà chúng ta nhìn thấy
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29.1.1</td>
                                                <td>N が V ています</td>
                                                <td>
                                                    <div class="summarize">Câu thể hiện trạng thái của đồ vật</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Thể hiện trạng thái của đồ vật sau khi xảy ra 1 việc gì đó 
                                                        và hiện giờ (thời điểm nói) kết quả của việc đó vẫn còn tồn tại và người nói nhìn thấy được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">まど<span class="bold">が</span> <span class="underline">閉まっています</span></div>
                                                                <div class="translate">Cửa sổ đóng</div>
                                                                => cửa sổ đang trong trạng thái đóng, có thể là do gió hoặc ai đó làm nó đóng lại
                                                            </li>
                                                            <li>
                                                                <div class="example">いす<span class="bold">が</span> <span class="underline">壊れています</span></div>
                                                                <div class="translate">Cái ghế bị hỏng</div>
                                                                => cái ghế đang trong trạng thái hỏng, có thể là do ai đó làm hỏng
                                                            </li>
                                                            <li>
                                                                <div class="example">ふくろ<span class="bold">が</span> <span class="underline">破れています</span></div>
                                                                <div class="translate">Cái túi bị rách</div>
                                                                => cái túi đang trong trạng thái rách, có thể là do vướng vào đâu đó hoặc ai đó làm rách
                                                            </li>
                                                            <li>
                                                                <div class="example">窓のガラス<span class="bold">が</span> <span class="underline">割れています</span>から、危ないです</div>
                                                                <div class="translate">Kính cửa sổ bị vỡ nên rất nguy hiểm</div>
                                                                => kính cửa sổ đang trong trạng thái vỡ, có thể là do ai đó ném đá… làm vỡ
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi diễn tả trạng thái xảy ra trong quá khứ, chúng ta dùng V ていました<br>
                                                        <span class="bold">Ví dụ</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今朝道が <span class="bold">込んでいました</span></div>
                                                                <div class="translate">Sáng nay đường đông nghịt</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29.1.2</td>
                                                <td>N は V ています</td>
                                                <td>
                                                    <div class="summarize">Cách giới hạn chủ đề câu chuyện với trợ từ は</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Khi muốn đưa 1 sự vật, sự việc nào đó làm chủ đề của câu nói 
                                                        thì thay trợ từ「が」 bằng 「は」. Với cách nói này người ta thường sử dụng các đại từ chỉ định như
                                                        「この」「その」「あの」 để chỉ rõ chủ thể được nhắc đến<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">このいす<span class="bold">は</span> <span class="underline">壊れています</span></div>
                                                                <div class="translate">Cái ghế này thì bị hỏng rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">その皿<span class="bold">は</span> <span class="underline">割れています</span></div>
                                                                <div class="translate">Cái đĩa đó thì vỡ rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あの皿<span class="bold">は</span> <span class="underline">汚れています</span>から、洗ってください</div>
                                                                <div class="translate">Cái đĩa kia thì bẩn quá, đem đi rửa đi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29.2</td>
                                                <td>そうです／そうではありません</td>
                                                <td>
                                                    <div class="summarize">(1) (làm gì) hết / xong rồi; (2) (làm gì) mất rồi (nuối tiếc)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> có 2 cách dùng tương ứng với 2 ý nghĩa bên trên<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29.2.1</td>
                                                <td>V てしまいました／V てしまいます</td>
                                                <td>
                                                    <div class="summarize">Diễn tả sự hoàn thành, hoàn tất 1 hành động</div>
                                                    <div class="hide">
                                                        <span class="bold">a) V ていしまいました:</span><br>
                                                        - Đã hoàn thành; Đã xong (1 hành động trong quá khứ).<br>
                                                        - Mẫu câu này dùng để nhấn mạnh sự hoàn thành thật sự của hành động. Vì vậy đứng trước nó 
                                                        thường là các trạng từ như もう、ぜんぶ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">宿題は <span class="bold">もう</span> <span class="underline">やってしまいました</span></div>
                                                                <div class="translate">Bài tập thì tôi <span class="bold">đã làm hết rồi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">お酒を <span class="bold">全部</span><span class="underline">飲んでしまいました</span></div>
                                                                <div class="translate">Tôi đã <span class="bold">uống hết</span> rượu rồi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">b) V てしまいます:</span><br>
                                                        - Sẽ hoàn thành, sẽ xong (1 hành động trong tương lai).<br>
                                                        - Mẫu câu này dùng để diễn tả sự hoàn thành của hành động trong tương lai<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">明日までに レポートを <span class="underline">書いてしまいます</span></div>
                                                                <div class="translate">Đến ngày mai tôi sẽ viết xong báo cáo</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29.2.2</td>
                                                <td>V てしまいました</td>
                                                <td>
                                                    <div class="summarize">(làm gì) mất rồi</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này được dùng để biểu thị sự hối tiếc, tâm trạng biết lỗi
                                                        của người nói trong một tình huống xấu<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">パスポートを <span class="underline">無くしてしまいました</span></div>
                                                                <div class="translate">Tôi làm mất hộ chiếu <span class="bold">mất rồi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">電車に かばんを <span class="underline">忘れてしまいました</span></div>
                                                                <div class="translate">Tôi để quên cặp trên xe điện <span class="bold">mất rồi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">スーパーで 財布を <span class="underline">落としてしまいました</span></div>
                                                                <div class="translate">Tôi đánh rơi ví tại siêu thị <span class="bold">mất rồi</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_30">
                                                <td>30.1</td>
                                                <td>V てあります</td>
                                                <td>
                                                    <div class="summarize">Diễn tả trạng thái, kết quả hành động với tha động từ</div>
                                                    <div class="hide">
                                                        Để diễn tả sự tồn tại của đồ vật hay người nào đó, ta đã học cách nói với 「います」「あります」
                                                        Để diễn tả tình trạng, trạng thái hiện thời của đồ vật, ta có 2 cách nói:<br>
                                                        - 「～ています」: đã học ở bài trước<br>
                                                        - 「～てあります」: sẽ học ở bài này<br>
                                                        <span class="bold">* Ý nghĩa:</span> Mẫu câu「～てあります」dùng để diễn tả trạng thái của sự vật như là kết quả của hành 
                                                        động được ai đó thực hiện trước đó với mục đích hay ý đồ gì đó. Mẫu câu này thường sử
                                                        dụng tha động từ, tức là những động từ chỉ động tác của con người
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.1.1</td>
                                                <td>N1 に N2 が V てあります</td>
                                                <td>
                                                    <div class="summarize">Diễn tả trạng thái, kết quả hành động: Ở đâu có cái gì</div>
                                                    <div class="hide">
                                                        Thể hiện trạng thái của đồ vật sau khi xảy ra 1 việc gì đó và hiện giờ (thời điểm nói) kết quả của 
                                                        việc đó vẫn còn tồn tại và người nói nhìn thấy được. Trong đó, đặt trọng tâm ý muốn nói ở hành 
                                                        động và mục đích thực hiện hành động đó
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">壁に 地図<span class="bold">が</span> <span class="underline"> はってあります</span></div>
                                                                <div class="translate">Trên tường <span class="bold">có dán</span> bản đồ</div>
                                                                => (hàm ý là một ai đó đã dán bản đồ lên tường nhằm một mục đích nào đó (xem bản đồ để
                                                                biết đường hoặc vị trí của các thành phố…) và kết quả là trên tường hiện có bản đồ) 
                                                            </li>
                                                            <li>
                                                                <div class="example">教室<span class="bold">に</span> テレビ<span class="bold">が</span> <span class="underline">置いてあります</span></div>
                                                                <div class="translate">Trong lớp học có <span class="bold">đặt</span> tivi</div>
                                                                => hàm ý là một ai đó đã để cái tivi vào trong lớp học nhằm một mục đích nào đó (học tập, 
                                                                xem thời sự…) và kết quả là trong lớp hiện có 1 cái tivi
                                                            </li>
                                                            <li>
                                                                <div class="example">これは 私の本です。名前<span class="bold">が</span><span class="underline">書いてあります</span>から</div>
                                                                <div class="translate">Đây là quyển sách của tôi. Vì có ghi tên mà</div>
                                                                => hàm ý là tôi đã ghi tên mình vào quyển sách nhằm mục đích không lẫn với của người 
                                                                khác và kết quả là trong quyển sách hiện có tên của tôi
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.1.2</td>
                                                <td>N2は N1に V てあります</td>
                                                <td>
                                                    <div class="summarize">Diễn tả trạng thái, kết quả hành động: <span class="bold">cái gì thì… ở đâu</span></div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Về ý nghĩa thì không khác gì mẫu câu trên nhưng trọng tâm ý muốn nói 
                                                        trong mẫu câu này là ở vị trí tồn tại của kết quả nói đến<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) A：地図は どこですか</div>
                                                                <div class="translate">Bản đồ ở đâu vậy?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B：地図<span class="bold">は</span> 壁<span class="bold">に</span> <span class="underline">張ってあります</span></div>
                                                                <div class="translate">Bản đồ <span class="bold">có dán</span> ở trên tường</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) パスポート<span class="bold">は</span> 引き出しの中<span class="bold">に</span> <span class="underline">しまってあります</span></div>
                                                                <div class="translate">Hộ chiếu <span class="bold">được cất</span> ở trong ngăn kéo</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Cần phân biệt sự khác nhau giữa V てあります và V ています<br>
                                                        「V てあります」: Các động từ dùng trong mẫu câu này là <span class="bold">tha động từ</span><br>
                                                        「 V ています」: Các động từ dùng trong mẫu câu này là <span class="bold">tự động từ</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 窓が <span class="underline">閉まっています</span></div>
                                                                <div class="translate">Cửa sổ (đang) đóng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 窓が <span class="underline">閉めてあります</span></div>
                                                                <div class="translate">Cửa sổ (đang) được đóng</div>
                                                            </li>
                                                        </ul>
                                                        Ở ví dụ 1 chỉ đơn thuần diễn tả trạng thái của cái cửa sổ là đóng.<br>
                                                        Còn ở ví dụ 2 lại ngụ ý rằng ai đó đã đóng cửa sổ với mục đích nào đó<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.2</td>
                                                <td>V ておきます</td>
                                                <td>
                                                    <div class="summarize">Một mẫu câu mới với động từ dạng -te</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span><br>
                                                        1) (làm gì) trước (để chuẩn bị);<br>
                                                        2) (làm gì) tiếp theo (sau 1 hành động nào đó sẽ kết thúc);<br>
                                                        3) (làm gì) giữ nguyên trạng thái ban đầu<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.2.1</td>
                                                <td>（～まえに）、～V ておきます</td>
                                                <td>
                                                    <div class="summarize">Diễn tả 1 hành động cần làm trước để chuẩn bị cho 1 hành động khác xảy ra</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">旅行の まえに、切符を <span class="underline">買っておきます</span></div>
                                                                <div class="translate">Trước khi đi du lịch tôi sẽ mua vé <span class="bold">trước</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">パーティの まえに、部屋を <span class="underline">掃除しておきます</span></div>
                                                                <div class="translate">Trước bữa tiệc, tôi sẽ dọn dẹp phòng <span class="bold">trước</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">パーティの まえに、 料理を <span class="underline">作っておいた</span>ほうがいいです</div>
                                                                <div class="translate">Trước bữa tiệc, bạn nên chuẩn bị các món ăn <span class="bold">trước</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.2.2</td>
                                                <td>(～たら、)～V ておきます </td>
                                                <td>
                                                    <div class="summarize">Diễn tả 1 hành động cần thiết phải làm sau khi 1 việc nào đó kết thúc</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">授業が 終わったら、電気を <span class="underline">消しておきます</span></div>
                                                                <div class="translate">Khi kết thúc giờ học thì sẽ tắt điện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">パーティーが 終わったら、部屋を <span class="underline">片付けておきます</span></div>
                                                                <div class="translate">Khi bữa tiệc kết thúc thì sẽ dọn phòng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">練習が 終わったら、道具を 元の 所に <span class="underline">しまっておいてください</span></div>
                                                                <div class="translate">Khi buổi luyện tập kết thúc thì hãy cất đồ vào chỗ cũ nhé!</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.2.3</td>
                                                <td>（そのまま）～V ておきます</td>
                                                <td>
                                                    <div class="summarize">Giữ nguyên trạng thái ban đầu</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">まだ 使っていますから、そのままに <span class="underline">しておいてください</span></div>
                                                                <div class="translate">Vì tôi còn đang dùng nên cứ để nguyên như thế nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A：テレビを消してもいいですか</div>
                                                                <div class="translate">Tôi tắt tivi có được không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B：もうすぐ ニュースの 時間ですから、<span class="underline">つけておいて</span>ください。</div>
                                                                <div class="translate">Vì sắp đến giờ thời sự rồi nên cứ để bật như thế</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30.3</td>
                                                <td>まだ V ています／V ていません</td>
                                                <td>
                                                    <div class="summarize">Vẫn đang… / Vẫn chưa…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Diễn tả hành động hay trạng thái vẫn đang tiếp diễn thì dùng câu ở dạng khẳng định; 
                                                        còn diễn đạt ý vẫn chưa hoàn thành tại thời điểm hiện tại thì dùng câu phủ định<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">まだ</span> 雨<span class="bold">が</span> <span class="underline">降っています</span></div>
                                                                <div class="translate">Trời vẫn đang mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">まだ</span> 漢字<span class="bold">を</span> <span class="underline">覚えていません</span></div>
                                                                <div class="translate">Tôi vẫn chưa nhớ được chữ Hán</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は <span class="bold">まだ</span> <span class="underline"> 発表しています</span></div>
                                                                <div class="translate">Anh ấy vẫn đang phát biểu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">田中さんは <span class="bold">まだ</span> <span class="underline">来ていません</span></div>
                                                                <div class="translate">Anh Tanaka vẫn chưa đến</div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_31">
                                                <td>31.1</td>
                                                <td>Động từ thể ý chí</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_y_chi">
                                                        Cách chia động từ thể ý chí (chia từ động từ dạng từ điển)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.2.1</td>
                                                <td>Cách sử dụng V ý chí:</td>
                                                <td>
                                                    <div class="summarize">Cách sử dụng V ý chí:</div>
                                                    <div class="hide">
                                                        Về bản chất, “thể ý chí” chính là cách nói thông thường (cách nói thân thiết, suồng 
                                                        sã được đề cập ở <a href="<?php echo $page1; ?>#lesson_20" target="_blank">bài 20</a>) của động từ
                                                        dạng 「～ましょう」nên có thể dùng thay cho 「～ましょう」khi rủ ai đó cùng làm một việc gì hay đề nghị giúp ai đó làm gì<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ちょっと 休まない?</div>
                                                                <div class="translate">Nghỉ một lát không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...うん、休もう</div>
                                                                <div class="translate">Ừ, nghỉ đi!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 少し 休もうか</div>
                                                                <div class="translate">Nghỉ một lát đi!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 手伝おうか</div>
                                                                <div class="translate">Mình giúp một tay nhé?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> trong ví dụ 2 và 3, ở cuối các câu, か không được lược bỏ<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.2.2</td>
                                                <td>V thể ý chí と思っています。</td>
                                                <td>
                                                    <div class="summarize">(Tôi/ai đó) định làm gì / dự định sẽ làm gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để biểu lộ dự định, ý muốn làm một chuyện gì cho người nghe biết<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 週末は デパートで <span class="bold">買い物しよう と思っています</span></div>
                                                                <div class="translate">Tôi dự định đi mua sắm vào cuối tuần</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 今から 銀行へ <span class="bold">行こう と思っています</span></div>
                                                                <div class="translate">Tôi dự định đi đến ngân hàng bây giờ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> 「~とおもっています」 cũng được dùng để chỉ dự định của người thứ ba<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">彼は 外国で <span class="bold">働こうと 思っています</span></div>
                                                                <div class="translate">Anh ấy có ý định làm việc ở nước ngoài</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.3</td>
                                                <td>V る / V ない + つもりです</td>
                                                <td>
                                                    <div class="summarize">Dự định làm, dự định không làm một việc gì đó</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">来年結婚する <span class="bold">つもり</span>です</div>
                                                                <div class="translate">Năm tới tôi dự định sẽ kết hôn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">明日からは たばこを 吸わない <span class="bold">つもり</span>です</div>
                                                                <div class="translate">Tôi định từ ngày mai sẽ không hút thuốc</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> so với mẫu câu V thể ý chí とおもっています, V thông thường つもりです mang 
                                                        ý nghĩa quyết đoán hơn được sử dụng để chỉ một ý hướng rõ rệt, 1 quyết định chắc chắn
                                                        hoặc 1 dự định lớn trong cuộc sống<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.4</td>
                                                <td>V る / Nの + よていです</td>
                                                <td>
                                                    <div class="summarize">Dự định làm gì; có kế hoạch làm gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> cũng diễn tả 1 dự định, kế hoạch gì đó nhưng chỉ dùng với những sự kiện 
                                                        đã được định sẵn mà không phụ thuộc vào ý chí của bản thân người nói<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">７月の終わりに ドイツへ 出張する <span class="bold">予定</span>です</div>
                                                                <div class="translate">Tôi có kế hoạch đi Đức công tác vào cuối tháng 7</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">旅行は １ 週間ぐらいの <span class="bold">予定</span>です</div>
                                                                <div class="translate">Chuyến du lịch được dự định kéo dài 1 tuần</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.5</td>
                                                <td>まだ V ていません</td>
                                                <td>
                                                    <div class="summarize">Chưa làm ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Biểu thị một việc gì đó chưa diễn ra hoặc chưa làm<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 銀行は <span class="bold">まだ</span> 開い<span class="bold">ていません</span></div>
                                                                <div class="translate">Ngân hàng vẫn chưa mở</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) レポートは もう 書きましたか</div>
                                                                <div class="translate">Anh đã viết xong bản báo cáo chưa?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...いいえ、<span class="bold">まだ</span> 書い<span class="bold">ていません</span></div>
                                                                <div class="translate">…Chưa, tôi chưa viết xong</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>31.6</td>
                                                <td>～は</td>
                                                <td>
                                                    <div class="summarize">Nhấn mạnh</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> thay cho trợ từ を<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">もう 昼ご飯を 食べましたか</div>
                                                                <div class="translate">Anh đã cơm trưa rồi à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">昼ご飯<span class="bold">は</span> もう 食べましたか</div>
                                                                <div class="translate">Cơm trưa thì anh đã ăn rồi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_32">
                                                <td>32.1</td>
                                                <td>Vた / Vない + ほうが いいです</td>
                                                <td>
                                                    <div class="summarize">Nên làm gì / không nên làm gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để khuyên ai đó làm gì / không làm gì thì tốt cho họ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 毎日運動<span class="bold">した ほうが いいです</span></div>
                                                                <div class="translate">Hàng ngày nên vận động</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 熱が あるんです</div>
                                                                <div class="translate">Tôi bị sốt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...じゃ、お風呂に <span class="bold">入らないほうが いいです</span>よ</div>
                                                                <div class="translate">Vậy thì, không nên tắm</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> trợ từ よ thường được thêm vào ở cuối câu. Tùy từng tình huống mẫu câu 
                                                        này nghe có vẻ như bạn đang áp đặt ý kiến của bạn cho người nghe. Vì vậy, cần xem xét 
                                                        văn cảnh trước khi sử dụng<br>
                                                        <span class="bold">＊ Sự khác nhau giữa ～た ほうが いい và ～たら いい：</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">3) 日本のお寺が 見たいんですが......。</div>
                                                                <div class="translate">Tôi muốn đi thăm chùa của Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">...じゃ、京都へ 行ったら いいですよ</div>
                                                                <div class="translate">Vậy thì đi Kyoto được đấy</div>
                                                            </li>
                                                        </ul>
                                                        Ví dụ 3 diễn tả tình huống mà là một lời gợi ý đơn gi ản được đưa ra. Trong những 
                                                        trường hợp này, ～たら いい được sử dụng. ～た ほうが いい chỉ so sánh và lựa chọn 2 vật
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>32.2</td>
                                                <td>Vる / Aい / Aな / N + でしょう</td>
                                                <td>
                                                    <div class="summarize">Có lẽ là…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> biểu thị suy luận của người nói căn cứ vào một số thông tin nào đó. Nó 
                                                        thường được sử dụng chung với phó từ như たぶん (có lẽ) hay きっと(nhất định). Khi 
                                                        sử dụng câu hỏi, người nói muốn biết suy luận của người nghe<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">明日は 雨が 降る<span class="bold">でしょう</span></div>
                                                                <div class="translate">Có lẽ ngày mai trời sẽ mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">大雨ですから、タワポンさんは 来ない<span class="bold">でしょう</span></div>
                                                                <div class="translate">Trời mưa to nên có l ẽ anh Tawapon sẽ không tới</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は 道を よく 知っていますから、たぶん 大丈夫<span class="bold">でしょう</span></div>
                                                                <div class="translate">Anh ấy biết đường rất rõ nên có lẽ sẽ ổn thôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あしたの 朝は 寒い<span class="bold">でしょう</span></div>
                                                                <div class="translate">Sáng mai có lẽ sẽ lạnh</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>32.3</td>
                                                <td>Vる / Aい / A bỏ な / N + かもしれません</td>
                                                <td>
                                                    <div class="summarize">Có lẽ là… cũng không biết chừng</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> cũng biểu thị sự phỏng đoán của người nói nhưng khả năng xảy ra thấp hơn. 
                                                        Nếu でしょう diễn đạt sự việc có thể xảy ra ở mức 70 – 80% thì mẫu câu này chỉ áp dụng 
                                                        cho những hành động mà khả năng xảy ra tương đối thấp, chỉ khoảng 50%<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">午後から 雪が 降る <span class="bold">かもしれません</span></div>
                                                                <div class="translate">Tuyết có thể sẽ rơi vào buổi chiều cũng nên</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">約束の時間に 間に合わない <span class="bold">かもしれません</span></div>
                                                                <div class="translate">Chúng ta có lẽ sẽ không kịp giờ hẹn cũng không biết chừng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">山田さんは まだ 来ていませんね。 病気<span class="bold">かもしれません</span></div>
                                                                <div class="translate">Anh Yamada vẫn chưa đến nhỉ. Có lẽ là ốm cũng nên</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>32.4</td>
                                                <td>～ で</td>
                                                <td>
                                                    <div class="summarize">Thêm sau số từ để chỉ giới hạn giá / thời gian / số lượng</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> で được thêm sau số từ để chỉ giới hạn giá / thời gian / số lượng… cần thiết 
                                                        cho một tình huống, hành động hay sự kiện được tiến hành<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">駅まで ３０分<span class="bold">で</span> 行けますか</div>
                                                                <div class="translate">Có thể đi đến nhà ga trong vòng 30 phút không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3万円<span class="bold">で</span> ビデオが 買えますか</div>
                                                                <div class="translate">3 vạn yên có thể mua đầu video không?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_33">
                                                <td>33.1</td>
                                                <td>Cách chia động từ thể mệnh lệnh（命令形）</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_menh_lenh">Cách chia động từ thể mệnh lệnh</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.2</td>
                                                <td>Cách chia động từ thể cấm đoán（禁止形)</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_cam_doan">Cách chia động từ thể cấm đoán</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.3</td>
                                                <td>Cách dùng thể mệnh lệnh và cấm đoán</td>
                                                <td>
                                                    <div class="summarize">Cách dùng thể mệnh lệnh và cấm đoán</div>
                                                    <div class="hide">
                                                        1. Thể mệnh lệnh được dùng để sai khiến, ép buộc ai đó làm một việc gì đó và ngược lại, 
                                                        thể cấm đoán được dùng để cấm ai đó không làm gì. Cả hai thể này đều mang nghĩa 
                                                        ép buộc, là kiểu câu mệnh lệnh dạng ngắn nên phạm vi sử dụng khá hẹp, do đó nên 
                                                        hạn chế dùng chúng một mình ở cuối câu. Thông thường, nam giới hay sử dụng hơn<br>
                                                        2. Thể mệnh lệnh và cấm đoán được dùng một mình hoặc được dùng ở cuối câu trong những trường hợp sau:<br>
                                                        a) Người nhiều tuổi nói với người ít tuổi hơn hoặc người địa vị cao nói với người có 
                                                        địa vị thấp hơn; bố mẹ nói với con cái...<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 早く寝ろ。</div>
                                                                <div class="translate">Hãy ngủ sớm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) もっと 勉強しろ</div>
                                                                <div class="translate">Phải học nhiều hơn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 遅れるな</div>
                                                                <div class="translate">Không được đến muộn</div>
                                                            </li>
                                                        </ul>
                                                        b) Giữa bạn bè thân thiết với nhau. Trong trường hợp này, よ được thêm vào cuối 
                                                        câu để làm m ềm âm điệu<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 明日うちへ来い［よ］</div>
                                                                <div class="translate">Ngày mai anh hãy đến nhà tôi nhé</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) あまり飲むな［よ］</div>
                                                                <div class="translate">Anh đừng uống nhiều nhé</div>
                                                            </li>
                                                        </ul>
                                                        c) Trong những trường hợp khẩn cấp, khi không có đủ thời gian để nói những lời 
                                                        lịch sự… Trong trường hợp này, người nói cũng là người có địa vị, tuổi tác cao<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 逃げろ</div>
                                                                <div class="translate">Chạy đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) スイッチをきれ</div>
                                                                <div class="translate">Tắt công tắc điện đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) エレベーターを使うな</div>
                                                                <div class="translate">Không được dùng cầu thang máy</div>
                                                            </li>
                                                        </ul>
                                                        d) Khi cổ vũ ở các sự kiện thể thao. (trường hợp này, phái nữ cũng có thể dùng)<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 頑張れ</div>
                                                                <div class="translate">Cố lên</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 走れ</div>
                                                                <div class="translate">Chạy đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 負けるな</div>
                                                                <div class="translate">Không được thua</div>
                                                            </li>
                                                        </ul>
                                                        e) Trong những khẩu hiệu, biển báo mang tính súc tích, có tính tuyên truyền cao<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 止まれ</div>
                                                                <div class="translate">Dừng lại</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 入るな</div>
                                                                <div class="translate">Cấm vào</div>
                                                            </li>
                                                        </ul>
                                                        3. Trong thể văn mệnh lệnh, ngoài cách dùng thể mệnh lệnh, thì “V ます＋なさい” cũng 
                                                        được dùng. Nó được dùng trong trường hợp bố mẹ nói với con cái, thầy cô giáo với 
                                                        học sinh. Tuy nhiên sắc thái của nó nhẹ nhàng hơn thể mệnh lệnh. Vì vậy, phụ nữ
                                                        thường dùng mẫu câu này thay thế cho thể mệnh lệnh. Tuy nhiên, ta không sử dụng 
                                                        mẫu câu này với bề trên<br>
                                                        * Ví dụ:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 勉強しなさい</div>
                                                                <div class="translate">Hãy học đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 早く寝なさい</div>
                                                                <div class="translate">Hãy ngủ sớm đi</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.4</td>
                                                <td>Ｖて + くれ</td>
                                                <td>
                                                    <div class="summarize">Hãy / xin hãy (làm gì / đừng làm gì)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> ～てくれ là thể thông thường của ~てください, m ẫu câu biểu hiện sự
                                                        nhờ cậy, yêu cầu lịch sự. Mẫu câu này thể hiện ý mệnh lệnh, cấm đoán nhưng nhẹ
                                                        nhàng hơn nhiều và không bao hàm ý áp đặt, ép buộc<br>
                                                        <span class="bold">* Chú ý:</span> chỉ có nam giới sử dụng (nữ giới tuyệt đối không sử dụng) và không dùng 
                                                        với người lớn tuổi hơn hay cấp trên<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) ちょっと 手伝ってくれ</div>
                                                                <div class="translate">Hãy giúp tôi một chút</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) ちょっと はさみを 貸して</div>
                                                                <div class="translate">Cho tôi mượn cái kéo một chút</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.5</td>
                                                <td>～と読みます / ～と書いてあります</td>
                                                <td>
                                                    <div class="summarize">Đọc là..., Viết là...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) あの漢字は 何と 読むんですか</div>
                                                                <div class="translate">Chữ Hán kia đọc là gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) あそこに「止まれ」と 書いてあります</div>
                                                                <div class="translate">Ở đằng kia có viết là “dừng lại”</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> ～と trong 2 ví dụ trên có nghĩa giống ～と trong mẫu ~といいます ở <a href="<?php echo $page1; ?>#lesson_21" target="_blank">bài 21</a><br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.6</td>
                                                <td>Ｘは Ｙと いう 意味です</td>
                                                <td>
                                                    <div class="summarize">X có nghĩa là Y</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này được dùng để định nghĩa từ được biểu diễn bởi “X” 
                                                        (という bắt nguồn từ といいます)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) “ありがとう” は “Cám ơn” という 意味です</div>
                                                                <div class="translate">“Arigatou” có nghĩa là “Cám ơn”</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) Ａ：あの漢字は どいう 意味ですか</div>
                                                                <div class="translate">Chữ Hán kia có nghĩa là gì?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Ｂ：使うな という 意味です</div>
                                                                <div class="translate">Nó có nghĩa là “không được dùng”</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33.7</td>
                                                <td>“Câu văn” (Thể thường) + と 言っていました</td>
                                                <td>
                                                    <div class="summarize">(Ai đó) đã nói là / rằng …</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để truyền đạt, thông báo, trích dẫn lại 1 câu nói, 1 lời nhắn của 
                                                        ai đó cho người thứ 3<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) （電話で）田中さん：１０時に 本社に 来てください</div>
                                                                <div class="translate">Tanaka-san nói qua điện thoại: Lúc 10 giờ hãy đến trụ sở công ty</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">田中さんは １０時に 本社に 来てくれ と 言っていました</div>
                                                                <div class="translate">Anh Tanaka nói là: hãy đến trụ sở công ty lúc 10 giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 田中さん： 明日 休みます</div>
                                                                <div class="translate">Tanaka-san: Ngày mai tôi sẽ nghỉ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 田中さんは 明日休むと 言っていました</div>
                                                                <div class="translate">Anh Tanaka nói là ngày mai anh ấy nghỉ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Phân biệt:</span> 「～と言いました」và 「～と言っていました」<br>
                                                        <span class="italic">- Giống:</span> cùng dùng để truyền đạt lại 1 câu nói, lời nhắn của ai đó<br>
                                                        <span class="italic">- Khác:</span> 「～と言いました」đặt trọng tâm vào việc ai nói, vào chủ thể của câu nói đó. 
                                                        Trong khi đó, 「～と言っていました」đặt trọng tâm vào việc truyền đạt lại nội dung câu nói
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_34">
                                                <td>34.1</td>
                                                <td>V1 thể -た / Nの + とおりに、V2</td>
                                                <td>
                                                    <div class="summarize">Theo như…, theo đúng như…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn đạt ý nói làm gì đó (V2) theo như hoặc giống y như những 
                                                        gì mà mình nghe thấy, nhìn thấy, đọc được....(V1) hoặc theo như hướng dẫn trong 1 
                                                        cuốn sách, 1 sự chỉ dẫn nào đó… (N) <br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私が やった<span class="bold">とおりに</span>、やってください</div>
                                                                <div class="translate">Hãy làm giống hệt tôi làm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私が 言った<span class="bold">とおりに</span>、書いてください</div>
                                                                <div class="translate">Hãy viết theo đúng những gì tôi nói</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 見た<span class="bold">とおりに</span>、話してください</div>
                                                                <div class="translate">Hãy kể đúng những gì anh thấy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 線の<span class="bold">とおりに</span>、紙を 切ってください</div>
                                                                <div class="translate">Hãy cắt giấy theo đường</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) 説明書の<span class="bold">とおりに</span>、組み立てます</div>
                                                                <div class="translate">Lắp ráp theo như sách hướng dẫn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>34.2</td>
                                                <td>V1た / Nの / Số từ + あとで、V2</td>
                                                <td>
                                                    <div class="summarize">Sau khi..., ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn tả tuần tự của các hành động. Tùy từng loại từ mà cách kết
                                                        hợp sẽ khác nhau:<br>
                                                        - Với động từ thì chia ở dạng –ta<br>
                                                        - Với danh từ thì có の<br>
                                                        - Với số từ thì ghép trực tiếp
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 新しい時計を 買ったあとで、なくしたのが みつかりました</div>
                                                                <div class="translate">Sau khi mua đồng hồ mới, tôi đã tìm thấy chiếc đồng hồ cũ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 仕事のあとで、飲みに 行きませんか</div>
                                                                <div class="translate">Sau khi làm việc xong, mình đi uống cà phê nhé</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 2週間あとで、国へ 帰ります</div>
                                                                <div class="translate">2 tuần sau, tôi sẽ về nước</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        1. Với mẫu câu này, ở vế 「～たあとで」động tư luôn chia ở thể ～た, không bị ảnh hưởng của thời điểm diễn ra
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) あした 勉強したあとで、見物に 行きます</div>
                                                                <div class="translate">Ngày mai sau khi học xong, tôi sẽ đi tham quan</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) きのう 勉強したあとで、見物に 行きました</div>
                                                                <div class="translate">Hôm qua sau khi học xong, tôi đã đi tham quan</div>
                                                            </li>
                                                        </ul>
                                                        <div class="link_popup" data="popup_tong_hop_atode">2. Tổng hợp các cách kết hợp của 「まえに」、「あとで」、「から」</div>
                                                        <div class="link_popup" data="popup_tong_hop_atode">3. Phân biệt sự khác nhau giữa 「～たあとで」và 「～てから」</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>34.3</td>
                                                <td>V1て / V1ないで, + V2</td>
                                                <td>
                                                    <div class="summarize">Ý nghĩa: làm V2 (trong trạng thái) V1</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Động từ dạng ～て hoặc ～ないで có thể được dùng để diễn tả trạng thái, 
                                                        tình huống làm nền để 1 hành động khác xảy ra<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あの人は 立っています。そして、話しています</div>
                                                                <div class="translate">Người kia đang đứng và nói chuyện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> あの人は 立って、話しています</div>
                                                                <div class="translate">Người kia đang đứng nói chuyện (đang nói chuyện trong trạng thái đứng)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 座っています。そして、話しています</div>
                                                                <div class="translate">Tôi đang ngồi và nói chuyện</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 座っています。そして、話しています</div>
                                                                <div class="translate">Tôi đang ngồi nói chuyện (đang nói chuyện trong trạng thái ngồi)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ヘルメットをかぶって、運転します</div>
                                                                <div class="translate">Đội mũ lái xe (trong tr ạng thái đội mũ)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">めがねを かけて、本を 読みます</div>
                                                                <div class="translate">Đeo kính đọc sách (trong trạng thái đeo kính)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">めがねを かけないで、本を 読みます</div>
                                                                <div class="translate">Đọc sách mà không đeo kính</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">マニュアルを見ないで、機械を操作します</div>
                                                                <div class="translate">Thao tác máy mà không đọc sách hướng dẫn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>34.4</td>
                                                <td>V1ないで、V2 (CHỌN 1 TRONG 2)</td>
                                                <td>
                                                    <div class="summarize">Làm V2 mà không làm V1 (chọn 1 trong 2 hành động)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Mẫu câu này được dùng khi người nói chỉ một hành động không diễn ra 
                                                        như dự đoán mà được thay thế bởi m ột hành động khác<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 日曜日 どこも 行きません</div>
                                                                <div class="translate">Ngày chủ nhật không đi đâu cả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 家で ゆっくり 休みます</div>
                                                                <div class="translate">Tôi nghỉ ngơi ở nhà</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">1 + 2: 日曜日 どこも 行かないで、家で ゆっくり 休みます</div>
                                                                <div class="translate">Chủ nhật tôi sẽ nghỉ thong thả ở nhà mà không đi đâu cả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 今晩 家へ 帰りません</div>
                                                                <div class="translate">Tối nay tôi không về nhà</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 友だちの家に とまります</div>
                                                                <div class="translate">Tôi ngủ ở nhà bạn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3 + 4: 今晩家へ 帰らないで、友だちの家に とまります。</div>
                                                                <div class="translate">Tối nay tôi không về nhà, mà ở lại nhà bạn</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_35">
                                                <td>35.1</td>
                                                <td>
                                                    Cách chia động từ thể điều kiện
                                                </td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_dieu_kien">Cách chia động từ thể điều kiện (nếu, nếu như...)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35.2</td>
                                                <td>Cách dùng động từ thể điều kiện</td>
                                                <td>
                                                    <div class="summarize">1. Diễn đạt điều kiện</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Diễn đạt điều kiện (hành động, trạng thái ở vế điều kiện) để dẫn đến 1 hành động, trạng thái ở vế sau (vế kết quả)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) この 説明書を <span class="bold">よめば</span>、使い方が わかります</div>
                                                                <div class="translate">Nếu đọc sách hướng dẫn này sẽ hiểu được cách sử dụng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) カタログを <span class="bold">見なければ</span>、値段が わかりません</div>
                                                                <div class="translate">Nếu không xem cuốn catalogue thì không biết được giá</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) <span class="bold">やすければ</span>、この 車を 買います</div>
                                                                <div class="translate">Nếu rẻ sẽ mua chiếc ô tô này</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 日曜日は <span class="bold">ひまなら</span>、広島へ 行きます</div>
                                                                <div class="translate">Nếu chủ nhật rỗi, tôi sẽ đi Hiroshimas</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) <span class="bold">雨なら</span>、うちで テレビを 見ます</div>
                                                                <div class="translate">Nếu trời mưa sẽ ở nhà xem tivi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> khác với 「～と」, vế sau của thể điều kiện loại này có thể là những mẫu 
                                                        câu diễn đạt ý chí, mong muốn như: 「～Ｖてください」、「Ｖましょう」、「Ｖたいです」<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 何か 意見が <span class="bold">あれば</span>、どうぞ 言ってください</div>
                                                                <div class="translate">Nếu có ý kiến gì, xin hãy phát biểu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) あの店の テレビが <span class="bold">安ければ</span>、買いましょう</div>
                                                                <div class="translate">Nếu tivi của cửa hàng kia rẻ thì mua thôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) この洗濯機は 音が <span class="bold">静かなら</span>、買いたいです</div>
                                                                <div class="translate">Nếu tiếng động của cái máy giặt này êm thì tôi muốn mua</div>
                                                            </li>
                                                        </ul>
                                                    </div><br>
                                                    <div class="summarize">2. Với 「なら」: giới hạn đề tài, câu chuyện được đề cập đến</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Với 「なら」thì có thêm cách sử dụng nữa, với ý: giới hạn đề tài, câu chuyện được đề cập đến (chỉ trong phạm vi nội dung được nói đến thôi)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) A: 「ワープロが ほしいんですが、どこのほうが いいですか</div>
                                                                <div class="translate">Tôi muốn có 1 cái máy soạn văn bản, đồ của hãng nào thì tốt nhỉ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: 「ワープロ<span class="bold">なら</span>、東京電気が いいです。」</div>
                                                                <div class="translate"> <span class="bold">Nếu là</span> máy soạn văn bản thì (hàng của) Cty điện lực Tokyo tốt đấy</div>
                                                                <br>=> không phải là sản phẩm điện tử nào khác mà nếu là máy soạn văn bản thì…
                                                            </li>
                                                            <li>
                                                                <div class="example">2) A: 「カメラが 買いたいんですが、どこかいい店を知っていますか。」</div>
                                                                <div class="translate">A: Tôi muốn mua 1 cái máy ảnh, bạn có biết cửa hàng nào tốt ko?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: 「カメラ<span class="bold">なら</span>、秋葉原の藤屋が いいです。」</div>
                                                                <div class="translate"><span class="bold">Nếu là</span> máy ảnh thì (hàng của) cửa hàng Fujiya ở Akihabara hay lắm đấy</div>
                                                                <br>=> không phải là sản phẩm điện tử nào khác mà nếu là máy ảnh thì…
                                                            </li>
                                                            <li>
                                                                <div class="example">(3) A: 「あなたは フランス語が 分かりますか。」</div>
                                                                <div class="translate">Bạn có biết tiếng Pháp không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: 「いいえ、分かりません。英語<span class="bold">なら</span>、分かります。」</div>
                                                                <div class="translate">Không, tôi ko biết. <span class="bold">Nếu là</span> tiếng Anh thì tôi biết)</div>
                                                                <br>=> không phải là thứ tiếng nào khác mà nếu là tiếng Anh thì…
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_36">
                                                <td>36.1</td>
                                                <td>V る / V ない + ように、～</td>
                                                <td>
                                                    <div class="summarize">Để ~</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi biểu hiện một hành động nào đó có mục đích ta dùng ように. Mệnh 
                                                        đề 1 chỉ mục đích, mệnh đề 2 chỉ hành động có chủ ý để đạt được mục đích ở mệnh đề 1 đưa ra<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">新聞が 読めるように、漢字を 勉強します</div>
                                                                <div class="translate">Để đọc được báo, tôi học chữ Hán</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">みんなが わかるように、大きな 声で 言います</div>
                                                                <div class="translate">Để mọi người nghe rõ, tôi nói to</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">風を ひかないように、セーターを 着ます</div>
                                                                <div class="translate">Để không bị cảm cúm, tôi mặc áo len</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Động từ V る đứng trước ように trong mẫu câu này là động từ không bao hàm chủ
                                                        ý mà là động từ thể khả năng, và những động từ như できる、わかる、みえる、きこえる、なる<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36.2</td>
                                                <td>V る (thể khả năng) + ように なりました</td>
                                                <td>
                                                    <div class="summarize">Diễn tả sự biến đổi trạng thái</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Biểu hiện sự biến đổi trạng thái, từ không thể được thành có thể được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 日本語が 話せるように なりました</div>
                                                                <div class="translate">Tôi đã có thể nói được tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) はじめは 日本料理が あまり 食べられませんでしたが、今は 何でも 食べられるように なりました</div>
                                                                <div class="translate">Lúc đầu tôi không thể ăn được đồ Nhật nhiều lắm nhưng bây giờ có thể ăn được mọi thứ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Động từ V る đứng trước ように trong mẫu câu này là động từ thể khả năng và những động từ như できる、わかる、みえる、きこえる、なる…<br>
                                                        - Trong câu nghi vấn V るように なりましたか nếu trả lời bằng いいえ thì sẽ như sau:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">漢字が 書けるように なりましたか</div>
                                                                <div class="translate">Bạn đã viết được chữ Hán chưa?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">いいえ、まだ 書けません</div>
                                                                <div class="translate">Chưa, tôi vẫn chưa viết được</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36.3</td>
                                                <td>V る / V ない + ように して ください</td>
                                                <td>
                                                    <div class="summarize">Hãy làm thế nào để～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> yêu cầu, nhờ vả ai đó làm gì, làm đi làm lại nhiều lần, có tính chất liên tục lâu dài<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 必ず 時間を 守るように して ください</div>
                                                                <div class="translate">Hãy làm thế nào để chắc chắn tiết kiệm được thời gian</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) この スイッチに 絶対に 触らないように して ください</div>
                                                                <div class="translate">Hãy làm thế nào để tuyệt đối không chạm vào công tắc này</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"></div>
                                                                <div class="translate"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36.4</td>
                                                <td>大きな、小さな</td>
                                                <td>
                                                    <div class="summarize">Tính từ đuôi na của ookii, chiisai</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> 大きな và 大きい, 小さな và 小さい nghĩa giống nhau. 
                                                        Tuy nhiên hơi khác một chút là sau 大きな、小さな bắt buộc phải là một danh từ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">O あの かばんは 大きいです</div>
                                                                <div class="translate">Chiếc cặp kia to</div>
                                                            </li>
                                                            <li>
                                                                <div class="example" style="color:red;">X あの かばんは 大きなです</div>
                                                                <div class="translate">Dùng như này là sai</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36.5</td>
                                                <td>かなり</td>
                                                <td>
                                                    <div class="summarize">Khá, khá là</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Chỉ một sự việc nào đó “vượt quá sự kỳ vọng thông thường”, biểu hiện 
                                                        một sự phán đoán khách quan<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今年の 夏は かなり 暑いですね</div>
                                                                <div class="translate">Mùa hè năm nay khá nóng nhỉ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_37">
                                                <td>37.1</td>
                                                <td>Động từ thể Ukemi (受身)</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_ukemi">Cách chia Động từ thể Ukemi (受身)</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37.2.1</td>
                                                <td>Mẫu câu bị động 1: N1(người) は N2(người)に+ Ukemi</td>
                                                <td>
                                                    <div class="summarize">bị～, được～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi danh từ 2 làm hành động nào đó đối với danh từ 1, danh từ 1 là phía nhận hành động đó<br>
                                                        <span class="bold">a) Nghĩa tích cực: được</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Chủ động: 課長<span class="underline">は</span> 私<span class="underline">を</span> ほめました</div>
                                                                <div class="translate">Giám đốc khen tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Bị động: 私<span class="underline">は</span> 課長<span class="underline">に</span> ほめられました</div>
                                                                <div class="translate">Tôi <span class="underline">được</span> giám đốc khen</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">b) Nghĩa tiêu cực: bị</span><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Chủ động: 課長<span class="underline">は</span> 私<span class="underline">を</span> しかりました</div>
                                                                <div class="translate">Giám đốc mắng tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Bị động: 私<span class="underline">は</span> 課長<span class="underline">に</span> しかられました</div>
                                                                <div class="translate">Tôi <span class="underline">bị</span> giám đốc mắng</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Trong câu chủ động danh từ 1 là người nhận hành động, được biểu thị bằng trợ
                                                        từ を, nhưng trong câu bị động trợ từ を thay bằng trợ từ は để biểu thị chủ từ, danh từ 2 là 
                                                        người làm hành động biểu thị bằng trợ từ に
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37.2.2</td>
                                                <td>Mẫu câu bị động 2: N1(người)は N2(người) に N3(vật) を+ Ukemi</td>
                                                <td>
                                                    <div class="summarize">bị～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi danh từ 2 làm một hành động nào đó đối với danh từ 3 là vật sở
                                                        hữu của danh từ 1 và danh từ 1 cảm thấy hành động đó là quấy rầy hay làm phiền mình<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">Chủ động: どろぼうは （わたし<span class="underline">の</span>） お金を 取りました</div>
                                                                <div class="translate">Kẻ trộm lấy tiền của tôi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Bị động: 私<span class="underline">は</span> どろぼう<span class="underline">に</span> お金<span class="underline">を</span> 取られました</div>
                                                                <div class="translate">Tôi bị kẻ trộm lấy tiền</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Trong mẫu câu này, người làm hành động biểu thị bằng trợ từ に, người nhận sự
                                                        quấy rầy hay làm phiền bởi hành động đó biểu thị bằng trợ từ は , vật nhận hành động biểu thị bằng trợ từ を<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37.2.3</td>
                                                <td>Mẫu câu bị động 3: N(vật) は+ Ukemi</td>
                                                <td>
                                                    <div class="summarize">được～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> khi một hành động nào đó được thực hiện và người làm hành động 
                                                        đó không được đặc biệt chú ý đến, khi đó sự vật sẽ trở thành chủ từ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あの ビールは 30 年まえに たてられました</div>
                                                                <div class="translate">Tòa nhà kia được xây dựng 30 năm trước đây</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Khi sự vật không được đặc biệt nhấn mạnh như chủ đề của câu thì は được thay bằng が<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ここで ボディー<span class="bold">が</span> ようせつされます</div>
                                                                <div class="translate">Thân xe được hàn ở đây</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>37.3</td>
                                                <td>Trợ từ に biểu hiện tỷ lệ</td>
                                                <td>
                                                    <div class="summarize">Trợ từ に biểu hiện tỷ lệ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">一日<span class="bold">に</span> 1,500 台 自動車が 生産されています</div>
                                                                <div class="translate">1500 chiếc xe được sản xuất trong một ngày</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">二人<span class="bold">に</span> 一人は 大学へ 行きます</div>
                                                                <div class="translate">Cứ hai người thì một người học lên đại học</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_38">
                                                <td>38</td>
                                                <td>DANH TỪ HÓA ĐỘNG TỪ BẰNG TRỢ TỪ の</td>
                                                <td>
                                                    <div class="summarize">DANH TỪ HÓA ĐỘNG TỪ BẰNG TRỢ TỪ の</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Thêm trợ từ の sau động từ ở thể thông thường thì có thể danh từ hóa câu 
                                                        hay nhóm từ có chứa động từ đó. Câu hay nhóm từ được danh từ hóa có thể làm chủ ngữ hoặc tân ngữ<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.1</td>
                                                <td>V る ＋ のは ＋ A です</td>
                                                <td>
                                                    <div class="summarize">
                                                        Câu tính từ với trợ từ は
                                                    </div>
                                                    <div class="hide">
                                                        Đã học ở <a href="<?php echo $page1; ?>#lesson_8" target="_blank">bài 8</a>
                                                        <ul>
                                                            <li>
                                                                <div class="example">サッカーは おもしろいです</div>
                                                                <div class="translate">Bóng đá thì thú vị</div>
                                                            </li>
                                                        </ul>
                                                        Bài này học cách nói cụ thể là “xem bóng đá thì thú vị” hay “chơi bóng đá thì thú vị”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">サッカーを する<span class="bold">の</span> は おもしろいです</div>
                                                                <div class="translate">Chơi bóng đá thì thú vị</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">サッカーを 見る<span class="bold">の</span> は おもしろいです</div>
                                                                <div class="translate">Xem bóng đá thì thú vị</div>
                                                            </li>
                                                        </ul>
                                                        Các tính từ thường được sử dụng trong mẫu câu này gồm:<br>
                                                        たのしい、おもしろい、むずかしい、やさしい、はずかしい、きもちが いい、きけん［な］、 たいへん［な］…
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.2</td>
                                                <td>Vる ＋ のが ＋ A です</td>
                                                <td>
                                                    <div class="summarize">Câu tính từ với trợ từ が</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は 花が 好きです</div>
                                                                <div class="translate">Tôi thích hoa</div>
                                                                (đã học)
                                                            </li>
                                                            <li>
                                                                <div class="example">=> 私は 花を育てる<span class="bold">の</span>が すきです</div>
                                                                <div class="translate">Tôi thích việc trồng hoa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) あの人は タイプが はやいです</div>
                                                                <div class="translate">Người đó đánh máy nhanh</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> あの人は タイプを うつ<span class="bold">の</span>が はやいです</div>
                                                                <div class="translate">Người đó làm việc đánh máy thì nhanh</div>
                                                            </li>
                                                        </ul>
                                                        Các tính từ thường được sử dụng trong mẫu câu này gồm:<br>
                                                        すき［な］、きらい［な］、じょうず［な］、へた［な］、はやい、おそい…<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.3</td>
                                                <td>Vる ＋ の を ＋ わすれました</td>
                                                <td>
                                                    <div class="summarize">Câu động từ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="underline">電話番号</span>を 忘れました</div>
                                                                <div class="translate">Tôi đã quên số điện thoại</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">1*) 電話を<span class="underline">かける<span class="bold">の</span></span>を 忘れました</div>
                                                                <div class="translate">Tôi đã quên mất việc gọi điện thoại</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) <span class="underline">あの人の 名前</span>を 忘れました</div>
                                                                <div class="translate">Tôi đã quên mất tên của người kia</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2*) レポートに 名前を <span class="underline">かくの</span>を 忘れました</div>
                                                                <div class="translate">Tôi đã quên viết tên vào bản báo cáo</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ý nghĩa:</span> Câu (1*) mang hàm ý là “đáng lý ra phải gọi điện nhưng lại quên mất việc đó”. Câu 
                                                        (2*) mang hàm ý “đáng lý ra phải viết tên vào bản báo cáo vậy mà quên mất không viết cứ thế mà nộp”<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.4</td>
                                                <td>Thể thông thường ＋ のを しっていますか</td>
                                                <td>
                                                    <div class="summarize">Có biết ~ không?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">FPT だいがくの<span class="underline">電話番号</span>を 知っていますか</div>
                                                                <div class="translate">Bạn có biết số điện thoại của trường đại học FPT không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">セーターの近くで 家事<span class="underline">があった</span> <span class="bold">の</span>を 知っていますか</div>
                                                                <div class="translate">Bạn có biết đã xảy ra đám cháy ở gần Trung tâm không?</div>
                                                            </li>
                                                        </ul>
                                                        Ví dụ trên là câu hỏi người nghe có biết chuyện có đám cháy xảy ra không<br>
                                                        <span class="bold">* Lưu ý:</span> Trong mẫu câu này, trợ từ は đi với chủ ngữ trong mệnh đề phụ được đổi thành が<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) Q: FPT 大学の電話番号を 知っていますか</div>
                                                                <div class="translate">Bạn có biết số điện thoại của trường đại học FPT không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">いいえ、しりません</div>
                                                                <div class="translate">... Không, tôi không biết</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) Q: 先週 木村さんが 結婚したのを 知っていますか</div>
                                                                <div class="translate">Bạn có biết việc tuần trước cô Kimura đã kết hôn không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A : いいえ、しりませんでした</div>
                                                                <div class="translate">… Không, tôi đã không biết</div>
                                                            </li>
                                                        </ul>
                                                        Ví dụ 1) sử dụng しりません vì người nghe chưa biết thông tin, và không nhận được 
                                                        thông tin gì từ câu hỏi. Còn ở ví dụ 2) sử dụng しりませんでした vì trong trường hợp này 
                                                        người nghe đã nhận được thông tin từ câu hỏi
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.5</td>
                                                <td>Thể thông thường + のは N です</td>
                                                <td>
                                                    <div class="summarize">Thay thế danh từ bằng trợ từ, sau đó đưa nó làm chủ đề của câu</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">娘は 北海道の 小さい町で 生まれました</div>
                                                                <div class="translate">Con gái tôi được sinh ra tại một thành phố nhỏ ở Hokkaido</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> <span class="bold">娘が 生まれたのは</span> 北海道の 小さい町です</div>
                                                                <div class="translate">Nơi con gái tôi được sinh ra là một thành phố nhỏ ở Hokkaido</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">12 月は 1 年で 一番 忙しいです</div>
                                                                <div class="translate">Tháng 12 là tháng bận nhất trong một năm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> <span class="bold">1 年で 一番 忙しいの</span>は 12 月です</div>
                                                                <div class="translate">Thời gian bận nhất trong m ột năm là tháng 12</div>
                                                            </li>
                                                        </ul>
                                                        Mẫu câu này dung khi ta muốn thay thế danh từ chỉ người, vật, nơi chốn… bằng trợ từ, 
                                                        sau đó đưa nó làm chủ đề của câu. Như ta thấy trong ví dụ 1), 2), “nơi mà con gái tôi đã được 
                                                        sinh ra” và “tháng bận rộn nhất trong một năm” được đưa lên làm chủ đề, sau đó người nói đưa 
                                                        ra thông tin lien quan ở vế sau
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.6</td>
                                                <td>の và こと</td>
                                                <td>
                                                    <div class="summarize">Một số mẫu câu dùng こと nhưng ko được dùng の</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Giống như trợ từ の, trợ từ こと mà chúng ta đã học ở bài 
                                                        <a href="<?php echo $page1; ?>#lesson_18" target="_blank">18</a>, <a href="<?php echo $page1; ?>#lesson_19" target="_blank">19</a> cũng được sử dụng như 
                                                        là một cách để danh từ hóa động từ. Chú ý nhiều mẫu câu trong đó こと được sử dụng nhưng の thì không<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) リーさんは 日本語を 話す<span class="underline bold">こと</span>が できます（ O ）</div>
                                                                <div class="translate">Anh Lee nói được tiếng Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">リーさんは 日本語を 話す<span class="underline bold">の</span>が できます（ X ）</div>
                                                                <div class="translate red">(Không dùng の cho câu này)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私のしゅみは 映画を 見る<span class="underline bold">こと</span>です （ O ）</div>
                                                                <div class="translate">Sở thích của tôi là xem phim</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">私のしゅみは 映画を 見る<span class="underline bold">の</span>です</div>
                                                                <div class="translate red">(Không dùng の cho câu này)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 日本料理を 食べた<span class="underline bold">こと</span>が あります（ O ）</div>
                                                                <div class="translate">Tôi đã từng ăn món ăn Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">日本料理を 食べた<span class="underline bold">の</span>が あります（ X ）</div>
                                                                <div class="translate red">Không dùng の cho câu này</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38.7</td>
                                                <td>いき và かえり</td>
                                                <td>
                                                    <div class="summarize">Thể ます của một số động từ có thể được sử dụng làm danh từ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="bold">行き</span>は 道がこんでいましたが、<span class="bold">帰り</span>は すいています</div>
                                                                <div class="translate">Lúc đi thì đường đông nhưng lúc về thì vắng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 会社の<span class="bold">帰り</span>に 買い物に 行きました</div>
                                                                <div class="translate">Trên đường từ công ty về nhà tôi đã đi mua đồ</div>
                                                            </li>
                                                        </ul>
                                                        Khi thể ます của động từ được sử dụng làm danh từ thì nó không biểu thị hành động của 
                                                        nó, いき và かえり trong ví dụ 1) chỉ có ý là “lúc đi”, “lúc về”, かえり trong ví dụ 2) 
                                                        có ý là trên đường về
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_39">
                                                <td>39.1</td>
                                                <td>Vて /<br> Vない => Vなくて /<br> Aい => Aくて /<br> Aな => で, ~</td>
                                                <td>
                                                    <div class="summarize">Câu chỉ nguyên nhân, lý do</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Những thể văn ở trên được sử dụng để chỉ nguyên nhân, lý do. Trong mẫu câu này, mệnh đề
                                                        trước của câu chỉ nguyên nhân và mệnh đề sau chỉ kết quả xảy ra bởi nguyên nhân đó. Khác 
                                                        với ~から mà chúng ta đã học ở <a href="<?php echo $page1; ?>#lesson_9" target="_blank">bài 9</a>, mẫu câu này có nhiều hạn chế<br>
                                                        <span class="bold underline">1.1</span> Mệnh đề sau thường là những từ không bao hàm ý chí:<br>
                                                        - Tính từ, động từ biểu hiện cảm xúc: びっくりする、安心する、困る、さびしい、残念だ...<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ニュースを<span class="bold">聞いて</span>、びっくりしました</div>
                                                                <div class="translate">Tôi đã ngạc nhiên khi nghe tin</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">暑くて</span>、寝られませんでした</div>
                                                                <div class="translate">Không thể ngủ được <span class="bold">vì</span> trời nóng</div>
                                                            </li>
                                                        </ul>
                                                        - わからない và thể phủ định của động từ khả năng: いけない、のめない、食べられない...<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">土曜日は 都合が<span class="bold">悪くて</span>、いけません</div>
                                                                <div class="translate">Tôi không thể đi được <span class="bold">vì</span> thứ 7 bận rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">話が<span class="bold">複雑で</span>、あまりわかりませんでした</div>
                                                                <div class="translate">Tôi không hiểu lắm vì câu chuyện phức tạp</div>
                                                            </li>
                                                        </ul>
                                                        - Tình huống trong quá khứ:
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">じこがあって</span>、バスが 遅れてしまいました</div>
                                                                <div class="translate">Vì có tai nạn nên xe buýt đã đến muộn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">授業に<span class="bold">遅れて</span>、先生にしかられました</div>
                                                                <div class="translate">Vì đến muộn giờ học nên tôi bị thầy giáo mắng</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold underline">1.2</span> Ở mẫu câu này, mệnh đề sau không thể là sự biểu hiện hàm chứa chủ ý (ý hướng, 
                                                        mệnh lệnh, rủ  rê, yêu cầu). Khi mệnh đề sau có nội dung bao hàm chủ ý thì mệnh đề trước 
                                                        không sử dụng thể て、thay vào đó dùng thể văn から<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あぶないですから、きかいに触らないで ください（ O ）</div>
                                                                <div class="translate">Vì nguy hiểm, xin đừng sờ vào máy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">あぶなくて、きかいに  触らないで  ください。（ X ）</div>
                                                                <div class="translate">Không sử dụng thể て chỉ nguyên nhân cho câu rủ rê, yêu cầu</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold underline">1.3</span> Trong mẫu câu này, mệnh đề trước và mệnh đề sau của câu có sự liên hệ trước sau về
                                                        mặt thời gian. Nghĩa là sự việc của mệnh đề trước có trước, sự việc của mệnh đề sau có sau<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">あした 会議が ありますから、今日 準備しなければなりません（ O ）</div>
                                                                <div class="translate">Vì ngày mai có cuộc họp nên hôm nay phải chuẩn bị</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">あした 会議が あって、今日 準備しなければなりません（ X ）</div>
                                                                <div class="translate">Không sử dụng thể て khi vế trước xảy ra sau</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39.2</td>
                                                <td>N  で</td>
                                                <td>
                                                    <div class="summarize">Trợ  từ で chỉ nguyên nhân gây tai nạn, thiên tai...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Trợ từ で nhiều khi chỉ nguyên nhân, trong trường hợp này danh từ được sử dụng 
                                                        thường là các từ có đủ sức gây nên một kết quả nào đó như: じこ(tai nạn), じしん (động đất),  かじ (hỏa hoạn)...<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">じこで</span>  電車が  とまりました</div>
                                                                <div class="translate">Tai nạn khiến xe điện ngừng chạy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">ゆきで</span>  新幹線が  遅れました</div>
                                                                <div class="translate">Tuyết rơi khiến tàu Shinkansen bị trễ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Không sử dụng khi phần mệnh đề sau có hàm chứa chủ ý<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example red">病気で  明日  会社を  休みたいです（ X ）</div>
                                                                <div class="translate">Vì bị ốm nên ngày mai tôi muốn nghỉ làm<br><span class="bold">(câu này có chứa chủ ý muốn nghỉ làm nên ko dùng được)</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39.3</td>
                                                <td>~ので </td>
                                                <td>
                                                    <div class="summarize">Chỉ nguyên nhân, lý do</div>
                                                    <div class="hide">
                                                        <span class="bold">1. Ý nghĩa:</span><br>
                                                        - Giống như ~ から mà chúng ta đã học ở bài số <a href="<?php echo $page1; ?>#lesson_9" target="_blank">9</a>,
                                                        ～ので chỉ nguyên nhân, lý do. ～から nhấn mạnh nguyên nhân, lý do một cách chủ quan,
                                                        trong khi ～ので là cách biểu hiện trình 
                                                        bày một cách khách quan về liên hệ giữa nguyên nhân và kết quả theo diễn biến tự nhiên<br>
                                                        - Sử  dụng ～ので để  làm cho sự chủ quan của người nói nhẹ  nhàng đi khiến người nghe 
                                                        không có cảm tưởng bị  ép buộc, nó cũng thường được sử dụng để  trình bày m ột cách nhẹ  nhàng 
                                                        về lý do khi xin phép
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">気分が悪い<span class="bold">ので</span>、先に  帰っても  いいですか</div>
                                                                <div class="translate">Vì trong người cảm thấy khó chịu nên tôi có thể về trước được không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">バスが  なかなか  来なかった<span class="bold">ので</span>、大学に遅れました</div>
                                                                <div class="translate">Vì xe buýt mãi không đến nên tôi bị đi học muộn</div>
                                                            </li>
                                                        </ul>
                                                        Vì là sự biểu hiện nhẹ nhàng, mang tính khách quan nên không sử dụng thể  mệnh lệnh, thể cấm đoán ở mệnh đề sau<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example red">この荷物は  じゃまな<span class="bold">ので</span>、かたづけろう。（X）</div>
                                                                <div class="translate">Vì cái hành lý này vướng quá, dọn đi thôi<br>(Vế sau không dùng thể mệnh lệnh)</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">2. Cách dùng:</span> ～ので đi tiếp ngay sau danh từ, động từ, tính từ chia ở thể thường<br>
                                                        V, Aい, Aな, Nな + ので、～<br>
                                                        <span class="bold">3. Chú ý:</span>～ので  đi theo thể thông thường như đã trình bày ở trên, khi muốn biểu hiện một cách 
                                                        lịch sự, lễ phép hơn thì đặt nó đứng sau thể lịch sự<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"> レポートを  書かなければならない<span class="bold">ので</span>、今日は  はやく  帰ります</div>
                                                                <div class="translate">Vì phải viết báo cáo, nên hôm nay tôi sẽ về sớm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> レポートを  書かなければなりません<span class="bold">ので</span>、今日は  はやく  帰ります</div>
                                                                <div class="translate">Vì phải viết báo cáo, nên hôm nay tôi sẽ về sớm (thể lịch sự)</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>39.4</td>
                                                <td>Phân biệt  気持ちがいい  và  気分がいい</td>
                                                <td>
                                                    <div class="summarize">Phân biệt  気持ちがいい  và  気分がいい</div>
                                                    <div class="hide">
                                                        Các biểu hiện này có ý nghĩa khác nhau, vì vậy hãy chú ý trong cách sử dụng<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th width="50%">気持ちがいい</th>
                                                                <th width="50%">気分がいい</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; vertical-align: top;">
                                                                    Được sử dụng khi người nói cảm thấy thoải mái, sảng khoái do sự kích thích ngoại cảnh<br>
                                                                    <span class="bold">* Ví dụ:</span><br>
                                                                    <div class="example">今日は天気がよくて、<span class="bold">気持ちがいい</span>です</div>
                                                                    <div class="translate">Hôm nay trời đẹp khiến tôi cảm thấy sảng khoái</div>
                                                                </td>
                                                                <td style="text-align: left; vertical-align: top;">
                                                                    Được sử dụng khi người nói cảm thấy thoải mái, sảng khoái từ nội tâm phát ra như sảng khoái về tâm lý, sinh lý<br>
                                                                    <span class="bold">* Ví dụ:</span><br>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="example">薬を飲んで、熱が下がったので、<span class="bold">気分がいい</span>です</div>
                                                                            <div class="translate">Uống thuốc vào, cơn sốt giảm xuống khiến tôi cảm thấy khỏe</div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_40">
                                                <td>40.1</td>
                                                <td>～か</td>
                                                <td>
                                                    <div class="summarize">Trợ từ nghi vấn</div>
                                                    <div class="hide">
                                                        <span class="bold">1.</span> Trợ từ ～か là trợ từ nghi vấn <span class="bold">đã học</span> thường được đặt cuối câu nghi vấn:
                                                        <ul>
                                                            <li>
                                                                <div class="example">A : 会議は  何時に  終わりますか</div>
                                                                <div class="translate">Mấy giờ thì cuộc họp kết thúc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B : 分かりません</div>
                                                                <div class="translate">Tôi không biết</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">Bài này học</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) A+B = 会議は <span class="underline">何時に</span> 終わりますか ＋ 分かりません</div>
                                                                <div class="translate">Mấy giờ thì cuộc họp kết thúc？ + không biết</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> 会議は <span class="underline">何時に</span> 終わるか、分かりません</div>
                                                                <div class="translate">Không biết mấy giờ thì cuộc họp kết thúc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) <span class="underline">どうしたら</span> いいですか ＋ 考えてください</div>
                                                                <div class="translate">Nên làm thế nào thì tốt? + hãy suy nghĩ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> <span class="underline">どうしたら</span> いいか、考えてください</div>
                                                                <div class="translate">Hãy suy nghĩ xem nên làm thế  nào thì tốt</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 神戸は <span class="underline">どんな</span>町ですか ＋ しりません</div>
                                                                <div class="translate">Kobe là thành phố như thế nào? + không biết</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> 神戸は <span class="underline">どんな</span>町か、しりません</div>
                                                                <div class="translate">Không biết Kobe là thành phố như thế nào</div>
                                                            </li>
                                                        </ul>
                                                        Các ví dụ trên là câu hỏi với <span class="bold">từ để hỏi</span> được sử dụng như một thành phần trong câu<br>
                                                        <span class="bold">2. Cách dùng:</span> Thể thông thường + か:<br>
                                                        V / Aい / Aな / N + か<br>
                                                        <span class="bold">3.</span> Chú ý sự khác nhau giữa なにか trong ví dụ (1), (1’) và どこか  trong ví dụ (2), (2’) sau
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) はこの中身は  <span class="bold underline">なにか</span>、調べてください</div>
                                                                <div class="translate">Hãy kiểm tra xem trong hộp có cái gì</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">1’) のどがかわきましたから、<span class="bold underline">なにか</span>  飲みたいですね</div>
                                                                <div class="translate">Vì khát nước nên muốn uống cái gì đó quá nhỉ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) おてあらいは <span class="bold underline">どこか</span>、わかりません</div>
                                                                <div class="translate">Không biết nhà vệ sinh ở đâu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2’) 今日は いい天気ですね。<span class="bold underline">どこか</span> 行きますか</div>
                                                                <div class="translate">Hôm nay trời đẹp quá. Bạn có đi đâu đó không?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40.2</td>
                                                <td>Thể thường + かどうか、～</td>
                                                <td>
                                                    <div class="summarize">Có ～ hay không</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> ～かどうか được sử dụng khi một câu văn nghi vấn không có từ nghi vấn trong thành phần câu<br>
                                                        <span class="bold">* Cách dùng:</span> Giống như trường hợp của ～か、～、mệnh đề trước かどうか chia ở thể thường<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) リーさんは  来ますか ＋ 分かりません</div>
                                                                <div class="translate">Ông Lee có đến không? + không biết</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> リーさんは  来る<span class="bold">かどうか</span>、分かりません</div>
                                                                <div class="translate">Không biết ông Lee có đến không</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) まちがいが  ありませんか ＋ しらべてください</div>
                                                                <div class="translate">Có lỗi sai không? + hãy kiểm tra</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">=> まちがいが  ない<span class="bold">かどうか</span>、しらべてください</div>
                                                                <div class="translate">Hãy kiểm tra xem có lỗi sai không</div>
                                                            </li>
                                                        </ul>
                                                        A かどうか  có nghĩa là “là A, hay không phải là A”. Ví dụ 1) có nghĩa là “Ông Lee có thể  đến và có thể không”<br>
                                                        <span class="bold">* Chú ý:</span> Trong ví dụ 2), người ta không dùng “まちがいが  あるかどうか” mà dùng
                                                        “まちがいが  ないかどうか” vì người nói hy vọng rằng không có sự nhầm lẫn nào<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40.3</td>
                                                <td>Vて みます</td>
                                                <td>
                                                    <div class="summarize">Thử làm việc gì đó</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> Mẫu câu diễn đạt ai đó muốn thử làm việc gì để xem kết quả thế nào<br>
                                                        <span class="bold">* Cách dùng:</span> Trong mẫu câu này động từ đứng trước みます chia ở thể て. Vì  みます
                                                        nguyên thủy là một động từ nên cũng chia như các động từ khác<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">日本の お酒を<span class="bold">飲んでみたい</span>です</div>
                                                                <div class="translate">Tôi muốn <span class="bold">uống thử</span> rượu của Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ちょっとこの店に <span class="bold">入ってみよう</span></div>
                                                                <div class="translate">Chúng ta hãy <span class="bold">thử vào</span> quán này một chút đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このズボンに <span class="bold">入ってみて</span>も いいですか</div>
                                                                <div class="translate">Tôi có thể <span class="bold">mặc thử</span> chiếc quần này không?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40.3</td>
                                                <td>A い  =>  A さ</td>
                                                <td>
                                                    <div class="summarize">Biến tính từ đuôi い sang danh từ trừu tượng</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Ta có thể biến một tính từ đuôi い sang danh từ trừu tượng miêu tả tính chất, trạng thái
                                                        bằng cách đổi đuôi い thành さ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">高い (cao) => 高さ (độ cao)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">新しい (mới) => 新しさ (sự mới, cái mới)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">Đặc biệt いい(tốt) => よさ(cái tốt)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">山の<span class="bold">高さ</span>は どうやって はかるか、知っていますか</div>
                                                                <div class="translate">Bạn có biết làm thế nào để đo được độ cao của núi không?</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_41">
                                                <td>41</td>
                                                <td>Quan hệ Trong (ウチ) – Ngoài（ソト）</td>
                                                <td>
                                                    <div class="summarize">* Quan hệ Trong (ウチ) – Ngoài （ソト）</div>
                                                    <div class="hide">
                                                        Ở <a href="<?php echo $page1; ?>#lesson_7" target="_blank">bài 7</a> và <a href="<?php echo $page1; ?>#lesson_24" target="_blank">bài 24</a>,
                                                        chúng ta đã học về các biểu hiện cho và nhận đồ vật hay một hành động 
                                                        qua việc sử dụng 3 động từ「あげます、もらいます、くれます」. Bài này chúng ta sẽ học 
                                                        thêm về các biểu hiện cho – nhận phản ánh mối quan hệ Trên - Dưới (địa vị, tuổi tác) , 
                                                        quan hệ Trong – Ngoài, quan hệ thân thuộc giữa người cho và người nhận (bao hàm cả
                                                        sắc thái tâm lý, tình cảm...)<br>
                                                        <span class="bold">Quan hệ Trong (ウチ) – Ngoài （ソト）</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th>Trong (ウチ) </th>
                                                                <th>Ngoài （ソト）</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text_left vertical_top">Những người trong gia đình mình</td>
                                                                <td class="text_left vertical_top">Những người ngoài gia đình mình</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text_left vertical_top">Những người trong công ty, trường học hay trong nhóm của mình</td>
                                                                <td class="text_left vertical_top">
                                                                    - Những người ngoài công ty, trường học hay ngoài nhóm của mình.<br>
                                                                    - Người không quen biết
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text_left vertical_top">Những người trong nước mình</td>
                                                                <td class="text_left vertical_top">Những người nước ngoài</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.1</td>
                                                <td>～に  Ｎを  いただきます</td>
                                                <td>
                                                    <div class="summarize">(Mình) nhận (từ ai đó) cái gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> いただきます」là khiêm nhường ngữ được dùng thay cho「もらいます」 với 
                                                        hàm ý thể hiện sự khiêm tốn, nhún nhường của người nhận đối với người cho khi người nói 
                                                        nhận gì đó từ người có tuổi tác, địa vị xã hội cao hơn mình (trừ người trong gia đình), người 
                                                        không thân quen lắm hoặc khi muốn thể hiện sự tôn trọng đối với người cho mình<br>
                                                        <span class="bold">* Chú ý:</span> Chủ thể của động từ này luôn luôn là 「わたし」(tôi)<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td rowspan="3">わたしは</td>
                                                                <td>いただきます</td>
                                                                <td>上の人<span class="bold">に</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>もらいます</td>
                                                                <td>
                                                                    友達<span class="bold">に</span><br>
                                                                    （かぞく、父、母など）
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>もらいます</td>
                                                                <td>下の人<span class="bold">に</span></td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">社長に</span> とけいを <span class="bold">いただきます</span></div>
                                                                <div class="translate">Tôi nhận được cái đồng hồ từ giám đốc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">先生に</span> プレゼントを <span class="bold">いただきました</span></div>
                                                                <div class="translate">Tôi đã nhận được một món quà từ thầy/cô giáo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">父に</span> お金を <span class="bold">いただきます</span> => SAI</div>
                                                                <div class="translate">Tôi nhận được tiền từ bố</div>
                                                            </li>
                                                        </ul>
                                                        Trong trường hợp này, mặc dù 父 (bố) là người trên, người lớn tuổi hơn mình nhưng vì là người nhà 
                                                        （ウチの人） nên không dùng động từ いただきます mà dùng もらいます
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">父に</span> お金を <span class="bold">もらいます</span> => ĐÚNG</div>
                                                                <div class="translate">Tôi nhận được tiền từ bố</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.2</td>
                                                <td>～は（が）Ｎを  くださいます</td>
                                                <td>
                                                    <div class="summarize">(Ai đó) cho mình cái gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 「くださいます」là tôn kính ngữ được dùng thay cho「くれます」 với hàm ý thể
                                                        hiện sự tôn trọng  của người nhận khi người cho là người có tuổi tác, địa vị xã hội cao hơn 
                                                        mình (trừ người trong gia đình), hay người không thân quen lắm..<br>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Chủ thể của động từ này luôn là đại từ nhân xưng ngôi thứ 2 hoặc ngôi thứ 3, không bao giờ là 「わたし」(tôi)<br>
                                                        - Thể từ điển của 「くださいます」là「くださる」, và chuyển sang thể -TE là 「くださって」
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>上の人<span class="bold">は</span></td>
                                                                <td>くださいます</td>
                                                                <td rowspan="3">わたし<span class="bold">に</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    友達<span class="bold">は</span><br>
                                                                    （かぞく、父、母など）
                                                                </td>
                                                                <td>くれます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>下の人<span class="bold">は</span></td>
                                                                <td>くれます</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example"><span class="bold">社長</span>は わたし<span class="bold">に</span> とけいを <span class="bold">くださいます</span></div>
                                                                <div class="translate">Giám đốc cho tôi cái đồng hồ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example"><span class="bold">先生</span>は  わたし<span class="bold">に</span> ボールペンを <span class="bold">くださいます</span></div>
                                                                <div class="translate">Cô giáo cho tôi cái bút b</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">母は わたし><span class="bold">に</span> 花を ><span class="bold">くださいます</span> => SAI</div>
                                                                <div class="translate">Mẹ tặng tôi hoa</div>
                                                            </li>
                                                        </ul>
                                                        Trong trường hợp này, 母 (mẹ) mặc dù là người trên, lớn tuổi hơn mình nhưng vì là người trong gia 
                                                        đình (ウチの人） nên không dùng động từ いただきます mà dùng động từ くれます<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">母は わたし<span class="bold">に</span> 花を <span class="bold">くれます</span> => ĐÚNG</div>
                                                                <div class="translate">Mẹ tặng tôi hoa</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> 「くださいます」và 「くれます」 cũng được dùng khi người nhận là người trong gia 
                                                        đình hay người có quan hệ “Trong” với người nói<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">部長は 妹に おみやげを くださいました</div>
                                                                <div class="translate">Trưởng phòng đã cho em gái tôi quà</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.3</td>
                                                <td>～に Ｎを やります</td>
                                                <td>
                                                    <div class="summarize">(Mình) cho ai đó cái gì </div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> 「やります」được dùng thay cho「あげます」trong trường hợp đối tượng nhận 
                                                        hành động có địa vị thấp hơn, ít tuổi hơn (em trai, em gái, con cái trong gia đình), động vật, thực vật …<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td rowspan="3">わたしは</td>
                                                                <td>さしあげます</td>
                                                                <td>上の人<span class="bold">に</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>あげます</td>
                                                                <td>
                                                                    友達に<br>
                                                                    （かぞく、父、母など）
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>やります</td>
                                                                <td>
                                                                    下の人<span class="bold">に</span><br>
                                                                    犬／猫／花に
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">弟に</span> さいふを <span class="bold">やります</span></div>
                                                                <div class="translate">Tôi cho em trai cái ví</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">猫に</span> さかなを <span class="bold">やります</span></div>
                                                                <div class="translate">Tôi cho mèo ăn cá</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">花に</span> 水を <span class="bold">やります</span></div>
                                                                <div class="translate">Tôi tưới nước cho hoa</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Cùng là hành động cho, tặng nhưng trong trường hợp người nói muốn thể hiện sự thái độ tôn kính 
                                                        với người nhận là người có địa vị, tuổi tác cao hơn thì dùng「さしあげます」<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは <span class="bold">社長に</span> ネクタイを <span class="bold">さしあげます</span></div>
                                                                <div class="translate">Tôi biếu ông giám đốc chiếc cà vạt</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.4.1</td>
                                                <td>～に ～を Vて いただきます/td>
                                                <td>
                                                    <div class="summarize">Nhận (việc gì) từ ai; được ai đó làm gì cho</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Cũng biểu thị lòng biết ơn của người được nhận hành vi giúp đỡ nhưng hàm ý lịch sự, khiêm nhường hơn so với ～てもらいます<br>
                                                        - Chủ ngữ của câu luôn là 「わたし」(tôi)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">私は <span class="bold">鈴木さんに</span> 日本語を  <span class="bold">教えて いただきました</span></div>
                                                                <div class="translate">Tôi được cô Suzuki dạy cho tiếng Nhậ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">私は <span class="bold">中村さんに</span> 本社へ <span class="bold">連れて 行って いただきました</span></div>
                                                                <div class="translate">Tôi được anh Nakamura dẫn đến trụ sở công ty</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.4.2</td>
                                                <td>～は（が） ～を Vて くださいます</td>
                                                <td>
                                                    <div class="summarize">Ai làm cho việc gì</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Giống với ～ていただきます, cũng nói lên sự cảm tạ của người nhận hành vi giúp đỡ<br>
                                                        - Khác với ～ていただきます chủ ngữ  là người nhận, còn trong câu ～てくださいます chủ ngữ là người thực hiện hành động
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">部長の奥さんは （<span class="bold">私に</span>） 日本料理を <span class="bold">作って くださいました</span></div>
                                                                <div class="translate">Vợ của trưởng phòng đã nấu (cho tôi ăn) món ăn Nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">会社の人は （<span class="bold">私に</span>） この機械の使い方を <span class="bold">教えてく ださいました</span></div>
                                                                <div class="translate">Người trong công ty đã dạy (cho tôi) cách sử dụng của chiếc máy này</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.4.3</td>
                                                <td>～に ～を Vて やります</td>
                                                <td>
                                                    <div class="summarize">Làm việc gì (cho ai) </div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> ý nghĩa thiện chí, lòng tốt khi làm cho ai việc gì 
                                                        (chỉ giới hạn dùng với em trai, em gái, con cái trong gia đình hay với động, thực vật)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">私は <span class="bold">娘に</span> おもちゃを <span class="bold">買ってやりました</span></div>
                                                                <div class="translate">Tôi mua đồ chơi cho con gái</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">私は <span class="bold">おとうとに</span> 誕生日のパーティーを <span class="bold">準備して やりました</span></div>
                                                                <div class="translate">Tôi đã chuẩn bị cho em trai bữa tiệc sinh nhật</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 犬を 散歩に 連れて 行って やります</div>
                                                                <div class="translate">Tôi dắt chó đi dạo</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Cũng giống như 「V てあげます」đã giải thích ở bài 24, nếu sử dụng「V てさしあげます」
                                                        với ý làm gì đó cho người trên sẽ dễ gây cảm giác ép buộc, không tự nhiên. Vì thế, trong trường hợp 
                                                        này người ta thường không dùng cách nói này, mà sẽ dùng cách nói khiêm nhường sẽ học ở <a href="#lesson_50">bài 50</a><br>
                                                        <span class="bold">* Ví dụ 1:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは 社長<span class="bold">に</span> 写真<span class="bold">を</span> 見せて（さし）あげました => KHÔNG DÙNG</div>
                                                                <div class="translate">KHÔNG DÙNG</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 社長<span class="bold">に</span> 写真<span class="bold">を</span> <span class="underline">お見しました</span> => ĐÚNG</div>
                                                                <div class="translate">Tôi đã cho ông giám đốc xem ảnh</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Ví dụ 2: Trường hợp câu hỏi</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">お子さん<span class="bold">に</span> どんな おみやげを <span class="bold">買ってあげますか</span></div>
                                                                <div class="translate">Anh sẽ mua quà gì cho con anh thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…とけいか  ラジカセを  買ってやりたいです</div>
                                                                <div class="translate">Tôi muốn mua đồng hồ hay đài casset cho nó</div>
                                                            </li>
                                                        </ul>
                                                        Trường hợp này「お子さん」(con của người khác) nên người hỏi cũng phải dùng cách nói lịch sự là 「～V てあげますか」chứ không dùng 「～V てやりますか」
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41.5</td>
                                                <td>V ていただけませんか</td>
                                                <td>
                                                    <div class="summarize">Mong (ai đó) làm gì giúp được không?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Là biểu hiện nhờ vả lịch sự nhất với những người có địa vị, tuổi tác cao hơn 
                                                        mình hay người không quen biết, lịch sự hơn Vてくださいませんか<br>
                                                        <span class="bold">* Chú ý:</span> 「～ていただ<span class="underline">け</span>>ませんか」 chứ không phải là 「～ていただ<span class="underline">き</span>ませんか。」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">すみませんが、もう一度 <span class="bold">説明して いただけませんか</span></div>
                                                                <div class="translate">Xin lỗi, anh có thể giải thích thêm một lần nữa  giúp tôi được không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">手紙の 書き方が 分からないん<span class="bold">ですが</span>、ちょっと<span class="bold">教えて いただけませんか</span></div>
                                                                <div class="translate">Tôi không biết cách viết thư, anh/chị chỉ giúp tôi được không ạ?</div>
                                                            </li>
                                                        </ul>
                                                        <div class="link_popup" data="popup_tong_ket_cac_bieu_hien_nho_va">Tổng kết các biểu hiện nhờ vả</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_42">
                                                <td>42.1</td>
                                                <td>～ために</td>
                                                <td>
                                                    <div class="summarize">Để</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Đây là mẫu câu biểu hiện mục đích. Mệnh đề  trước đi với ために là mệnh đề
                                                        biểu hiện mục đích, mệnh đề sau biểu hiện hành vi có ý chí để thực hiện mục đích ấy<br>
                                                        Có 2 cách sử dụng: với động từ và với danh từ như sau:
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42.1.1</td>
                                                <td>V1 るために、V2</td>
                                                <td>
                                                    <div class="summarize">Để thực hiện V1 thì V2</div>
                                                    <div class="hide">
                                                        Động từ đi trước ｢ために｣ là động từ thể từ điển và là những động từ mang tính ý chí thể hiện 1 mục đích nào đó<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">らいねん 世界旅行を する<span class="bold">ために</span>、今お金を ためています</div>
                                                                <div class="translate">Bây giờ tôi đang tiết kiệm tiền <span class="bold">để</span> năm sau đi du lịch</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">漢字を 勉強する<span class="bold">ために</span>、辞書を 買いました</div>
                                                                <div class="translate">Tôi đã mua từ điển <span class="bold">để</span> học chữ Hán</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        <span class="bold">1. Phân biệt「～ように」(bài <a href="#lesson_36">36</a>) với「～ために」:</span><br>
                                                        <span class="italic underline">- Sự giống nhau:</span><br>
                                                        + Mệnh đề trước là mục đích của mệnh đề sau, mệnh đề sau là hành vi để đạt được mục đích ấy<br>
                                                        +  Động từ được sử dụng ở mệnh đề trước là động từ có tính  ý chí.  Còn ở mệnh đề sau, cả động 
                                                        từ có tính ý chí và động từ không có tính ý chí đều sử dụng được<br>
                                                        + Cả「～ように」và「～ために」đều đi với động từ ở thể từ điển. (Người ta không hay dùng dạng 「V ないために」)<br>
                                                        <span class="italic underline">- Sự khác nhau:</span><br>
                                                        + Ở mệnh đề trước – mệnh đề thể hiện mục đích của mẫu câu 「～ように」có thể sử dụng cả động từ không có tính ý chí<br><br>
                                                        <span class="bold">2. Động từ có tính ý chí và động từ không có tính ý chí:</span><br>
                                                        - Động từ có tính ý chí là động từ thể hiện những động tác, hành động mà ý chí của con người 
                                                        có thể điều khiển được.. VD: たべる(ăn), のむ (uống), いく (đi), つくる (tạo ra), ねる (ngủ)...<br>
                                                        - Động từ không có tính ý chí là động từ thể hiện những động  tác, hành động mà ý chí của 
                                                        con người không thể điều khiển được, bao gồm:<br>
                                                        + Sự vận động, trạng thái của những vật vô tri, vô giác: <span style="color:#4788F9;">ある(có), 壊れる (bị vỡ),  雨が降る
                                                            (mưa rơi), 風が吹く (gió thổi),  水が出る (nước chảy)</span>...<br>
                                                        + Các hiện tượng sinh lý của con người: <span style="color:#4788F9;">痛む(đau),  病気になる (bị ốm), 老いる(già) , 若返
                                                            る (trẻ lại),  目が覚める(tỉnh dậy)...</span><br>
                                                        + Các hiện tượng tâm lý của con người : <span style="color:#4788F9;">困る(khó khăn) , 飽きる (mệt mỏi), できる (có 
                                                            thể)</span>... và các động từ ở thể khả năng<br>
                                                        * Tuy nhiên, ngoài các ví dụ trên, có nhiều trường hợp cùng là 1 từ nhưng tùy vào văn cảnh và 
                                                        cách sử dụng khác nhau mà động từ đó có thể lúc là có tính ý chí, lúc là không có tính ý chí.<br>
                                                        <span class="bold">* Ví dụ:</span> Động từ<span style="color:#4788F9;">「出る」</span> (Ra)<br>
                                                        - <span style="color:#4788F9;">家を出る</span> Ra khỏi nhà =>  Động từ có tính ý chí<br>
                                                        - <span style="color:#4788F9;">水が出る</span> Nước chảy ra => Động từ không có tính ý chí
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42.1.2</td>
                                                <td>Nのために、 V</td>
                                                <td>
                                                    <div class="summarize">Để</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Khi kết hợp với danh từ, mệnh đề 「N のために」mang 2 ý nghĩa:<br>
                                                        1. Nếu là những danh từ chỉ sự việc, thì mệnh đề này cũng thể hiện mục đích (giống với 
                                                        mẫu cầu với động từ「V るために」)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">健康<span class="bold">のために</span>、たばこを  やめた</div>
                                                                <div class="translate">Tôi bỏ thuốc lá <span class="bold">(để)</span> cho khỏe</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">発表の 準備<span class="bold">のために</span>、本を 借りました</div>
                                                                <div class="translate">Tôi đã mượn sách để chuẩn bị phát biểu</div>
                                                            </li>
                                                        </ul>
                                                        - Nếu là những danh từ chỉ thiên tai... thì mệnh đề này thường thể hiện nguyên nhân, lý do<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">台風<span class="bold">のために</span>、木が  倒れた</div>
                                                                <div class="translate">Cây đổ tại (vì) bão</div>
                                                            </li>
                                                        </ul>
                                                        2. Nếu là danh từ chỉ người… thì mệnh đề sau là hành vi được thực hiện vì lợi ích của đối tượng đó<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">家族<span class="bold">のために</span>、一生懸命働かなければなりません</div>
                                                                <div class="translate">Tôi phải cố làm việc hết sức <span class="bold">vì</span> gia đình</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">奥さん<span class="bold">のために</span>、 新しいバイクを買うつもりです</div>
                                                                <div class="translate">Tôi định mua 1 chiếc xe máy mới vì/cho vợ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42.2</td>
                                                <td>
                                                    V るのに 使います／便利です...<br>
                                                    N に 使います／必要です...
                                                </td>
                                                <td>
                                                    <div class="summarize">(Sử dụng) vào việc gì /  (có lợi) cho việc gì / (cần thiết) cho cái gì</div>
                                                    <div class="hide">
                                                        Có ý nghĩa na ná như các mẫu câu 「とき」(bài <a href="<?php echo $page1; ?>#lesson_23" target="_blank">23</a>) hay 「場合」 
                                                        (bài <a href="#lesson_45">45</a>)<br>
                                                        <span class="bold">* Cách dùng:</span> trợ từ「に」có thêm  ý nghĩa thể hiện mục đích. Nếu kết hợp với danh từ thì 
                                                        dùng   「Ｎに」, nếu kết hợp với động từ thì dùng phương pháp “danh từ hóa động từ” (「曲
                                                        げるのに」)<br>
                                                        <span class="bold">* Chú ý:</span> riêng với các động từ nhóm III có dạng「Ｎします」thì khi kết hợp, không kết hợp theo 
                                                        kiểu  「Ｎするのに」mà ghép thẳng thành「Ｎに」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <span class="hightlight">勉強します => 勉強に<br>
                                                            修理します => 修理に<br></span>
                                                        Về ý nghĩa thể hiện mục đích, mẫu câu này khá giống với 「（の）ために」nhưng không mạnh 
                                                        mẽ bằng và mệnh đề sau của mẫu câu này thường chỉ giới hạn ở 1 số động từ, tính từ mang 
                                                        tính trạng thái như:<br>
                                                        <span class="hightlight">「~ に使います」(cách sử dụng)<br>
                                                            「~ に便利です、必要です、いいです、役に立ちます…」(đánh giá)<br>
                                                            「~ に（時間、お金）がかかります」(tính toán)...<br></span>
                                                        <span class="bold underline">a) （N は）  V るのに  使います</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) このはさみは 紙を <span class="bold">切るのに</span> 使います</div>
                                                                <div class="translate">Cái kéo này dùng <span class="bold">để</span> cắt giấy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) この ミキサーは  何に 使うんですか</div>
                                                                <div class="translate">Cái máy trộn này dùng để làm gì thế?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… 原料を <span class="bold">まぜるのに</span> 使います</div>
                                                                <div class="translate">Dùng <span class="bold">để</span> trộn nguyên liệu</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold underline">b) （N は）V るのに  便利です / 必要です / いいです / 役に立つ</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この辞書は 漢字を<span class="bold">調べるのに</span> 便利です</div>
                                                                <div class="translate">Cuốn từ điển này rất tiện <span class="bold">cho việc</span> tra chữ Hán</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">この本は 日本のことを<span class="bold">知るのに</span>  役に立ちます</div>
                                                                <div class="translate">Quyển sách này có ích <span class="bold">cho việc</span> tìm hiểu NB</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold underline">c) （N は）V るのに（時間、お金）が かかります</span>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この時計は <span class="bold">直すのに</span> １週間  かかります</div>
                                                                <div class="translate">Cái đồng hồ này phải mất 1 tuần <span class="bold">để</span> sửa</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42.3</td>
                                                <td>Tham khảo các mẫu ngữ pháp sử dụng trợ từ に</td>
                                                <td>
                                                    <div class="summarize">Tham khảo các mẫu ngữ pháp sử dụng trợ từ に</div>
                                                    <div class="hide">
                                                        1. Chúng ta đã từng gặp trợ từ 「に」thể hiện mục đích trong những bài trước như:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 本を買い<span class="underline">に</span>行きます (bài <a href="<?php echo $page1; ?>#lesson_13" target="_blank">13</a>)</div>
                                                                <div class="translate">Đi <span class="underline">để</span> mua sách</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 体<span class="underline">に</span>いい／悪い (bài <a href="#lesson_32">32</a>)</div>
                                                                <div class="translate">Tốt/không tốt cho sức khỏe</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 日本語の新聞が 読めるよう<span class="underline">に</span>、毎日練習します (bài <a href="#lesson_36">36</a>)</div>
                                                                <div class="translate">Để có thể đọc báo tiếng Nhật, hàng ngày tôi luyện tập</div>
                                                            </li>
                                                        </ul>
                                                        Ở bài này, chúng ta lại học thêm 2 cách thể hiện mục đích nữa của trợ từ 「に」là
                                                        「～ために」và「～（の）に」<br>
                                                        <div class="link_popup" data="popup_mau_cau_muc_dich">2. So sánh các mẫu câu thể hiện mục đích 「~に」「~ように」「～ために」「～（の）に」</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_43">
                                                <td>43.1</td>
                                                <td>V bỏ ます + そうです</td>
                                                <td>
                                                    <div class="summarize">Sắp</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn đạt tình trạng, trạng thái đang hiện hữu bề ngoài, nói lên 1 ấn 
                                                        tượng có được từ 1 hiện tượng mà mình nhìn thấy tận mắt hay giải thích về tình trạng sự
                                                        vật, sự việc ngay trước khi nó thay đổi<br>
                                                        <span class="bold">* Cách chia:</span> Ｖ bỏ ます + そうです / そうだ<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">曇っていますね。雨が <span class="bold">降りそう</span>です</div>
                                                                <div class="translate">Bầu trời nhiều mây quá. Trời <span class="bold">sắp mưa</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">もうすぐ 桜が <span class="bold">咲きそう</span>です</div>
                                                                <div class="translate">Hoa sakura <span class="bold">sắp nở</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">これから <span class="bold">寒くなりそう</span>です</div>
                                                                <div class="translate">Trời <span class="bold">sắp lạnh</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">今にも 荷物が <span class="bold">落ちそう</span>です</div>
                                                                <div class="translate">Hành lý <span class="bold">sắp rơi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">煙が 少なくなりました。火事は <span class="bold">消えそう</span>です</div>
                                                                <div class="translate">Khói ít đi rồi. Cơn hỏa hoạn <span class="bold">sắp tắt</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>43.2</td>
                                                <td>Aい bỏ い　/ Aな bỏ な + そうです</td>
                                                <td>
                                                    <div class="summarize">Có vẻ</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn đạt những phán đoán, suy xét một cách trực tiếp khi nhìn thấy 
                                                        sự vật, sự việc nào đó. Có thể hiểu nôm na mẫu câu này là “nhìn và nghĩ là, cho là nó như thế”<br>
                                                        <span class="bold">* Cách chia:</span><br>
                                                        - Ａいです  Ａ bỏ い + そうです<br>
                                                        - Aなです  Ａ bỏ な + そうです／だ<br>
                                                        - Trường hợp đặc biệt:<br>
                                                        + いいです => よさそうです<br>
                                                        + ないです => なさそうです<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この 料理は <span class="bold">おいしそう</span>です</div>
                                                                <div class="translate">Món ăn này <span class="bold">có vẻ ngon</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼女は <span class="bold">忙しそうです</span></div>
                                                                <div class="translate">Cô ấy <span class="bold">có vẻ</span> bận</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">彼は <span class="bold">暇そう</span>です</div>
                                                                <div class="translate">Anh ấy <span class="bold">có vẻ rảnh rỗi</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">あのケーキは <span class="bold">おいしくなさそう</span>です</div>
                                                                <div class="translate">Cái bánh kia <span class="bold">có vẻ không ngon</span></div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> không áp dụng cách nói này đối với những tính từ thể hiện trạng thái quá rõ ràng, nhìn thấy 
                                                        ngay bên ngoài…, ví dụ như: 「赤い、きれい、有名、かわいい」<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">このりんごは  赤そうです => SAI</div>
                                                                <div class="translate">Quả táo này có vẻ đỏ. (sai vì bề ngoài là màu đỏ)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このすいかは 中が 赤そうです</div>
                                                                <div class="translate">Quả dưa hấu này bên trong có vẻ đỏ<br>(đúng vì từ bên ngoài không biết được, chỉ phán đoán)</div>
                                                            </li>
                                                        </ul>
                                                        - Đối với các tính từ thể hiện tình cảm hoặc cảm giác của con người như「うれしい、さびしい、
                                                        かなしい、いたい、気分が悪い、気分がいい」, vì chúng ta không thể diễn đạt, miêu tả một 
                                                        cách trực tiếp cảm giác, tình cảm, tâm trạng của người khác mà chỉ có thể suy đoán nên phải 
                                                        dùng「～そうです」<br>
                                                        * Ví dụ với tính từ chỉ cảm xúc 「うれしい」<br>
                                                        <span class="example">
                                                            わたしは うれしいです: Đúng<br>
                                                            わたしは うれしそうです: Sai<br>
                                                            あなたは うれしいそうです: Đúng<br>
                                                            あなたは うれしいです: Sai<br>
                                                            かのじょは うれしそうです: Đúng<br>
                                                            かのじょは うれしいです: Sai<br>
                                                        </span>
                                                        <span class="bold">* Chú ý:</span> Mẫu câu 「～そうです」này không kết hợp với danh từ
                                                    </div><br>
                                                    <div class="summarize">Tham khảo: Sự khác nhau giữa 「～でしょう」và「 ～そうです」</div>
                                                    <div class="hide">
                                                        - ～でしょう」biểu thị suy luận của người nói căn cứ vào một số thông tin nào đó còn
                                                        「～そうです」 biểu thị suy luận của người nói theo điều mà người nói quan sát được<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">今晩雨が <span class="bold">降るでしょう</span></div>
                                                                <div class="translate"><span class="bold">Có lẽ</span> tối nay trời mưa</div><br>
                                                                (Người nói có thể nghe thông tin qua đài, báo..rồi nói)
                                                            </li>
                                                            <li>
                                                                <div class="example">今晩雨が <span class="bold">降りそうです</span></div>
                                                                <div class="translate">Có vẻ tối nay trời mưa</div><br>
                                                                (Người nói quan sát thấy trời âm u rồi nói)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>43.3</td>
                                                <td>V て来ます</td>
                                                <td>
                                                    <div class="summarize">Làm gì đó (rồi sẽ trở lại)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> biểu thị hành động đi đâu đó làm gì rồi sau đó quay lại. Điều cần chú ý ở mẫu 
                                                        câu này là với 1 câu nhưng bao hàm 3 hành động:<br>
                                                        (1) đi đâu đó => (2) làm gì đó => (3) quay trở lại<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ちょっと たばこを 買って来ます</div>
                                                                <div class="translate">Tôi đi mua thuốc lá một chút (rồi về)</div>
                                                            </li>
                                                        </ul>
                                                        Ví dụ trên hàm ý 3 hành động:<br>
                                                        (1) đi đến điểm bán thuốc lá => (2) mua thuốc lá ở đó, và => (3) quay trở lại<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ちょっと 電話を かけて来ますから、ここで 待っていて ください</div>
                                                                <div class="translate">Vì tôi đi gọi điện một chút nên hãy chờ tôi ở đây</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">教室に 時計を 忘れたので、ちょっと 取って来ます</div>
                                                                <div class="translate">Vì quên đồng hồ ở lớp học nên tôi sẽ đi lấy</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Địa điểm đi đến và thực hiện hành động ở đó được thể hiện bằng trợ từ 「で」. Tuy 
                                                        nhiên, khi địa điểm đó là nơi lấy đi (hoặc di chuyển) một vật thì ta dùng trợ từ 「から」<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">スーパーで 牛乳を 買って来ます</div>
                                                                <div class="translate">Tôi đi đến mua sữa ở siêu thị</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">台所から コップを 取って来ます</div>
                                                                <div class="translate">Tôi đi lấy cốc từ nhà bếp</div>
                                                            </li>
                                                        </ul>
                                                        <span class="underline">So sánh – Mở rộng:</span> Sự khác nhau giữa 「（場所）へＶに行く」「（場所）でＶて来る」
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th>あの店へ 買いに  行きます</th>
                                                                <th>あの店で 買って来ます</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1. あの店へ 行く</td>
                                                                <td>1. あの店へ 行く</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. あの店で 買う</td>
                                                                <td>2. あの店で 買う</td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Chỉ bao hàm 2 hành động</td>
                                                                <td>3. あの店から  来るあの店から  来る</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bao hàm 3 hành động</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_44">
                                                <td>44.1</td>
                                                <td>V、Aい、Aな bỏ な + すぎます</td>
                                                <td>
                                                    <div class="summarize">Quá...</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn đạt ý vượt quá 1 mức độ nào đó của động tác, tác dụng, trạng 
                                                        thái, tình trạng. Do đó, mẫu câu này thường được dùng trong những trường hợp có ý xấu, 
                                                        nằm ngoài mong đợi của người nói<br>
                                                        <span class="bold">* Cách ghép từ:</span><br>
                                                        V bỏ ます, Aい bỏ い, Aな bỏ な + すぎます
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">昨日の晩お酒を <span class="bold">飲みすぎ</span>ました</div>
                                                                <div class="translate">Tối qua, tôi đã uống <span class="bold">quá</span> nhiều rượu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">お土産を 買いすぎました</div>
                                                                <div class="translate">Tôi đã mua <span class="bold">quá</span> nhiều quà lưu niệm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">寿司を <span class="bold">食べすぎ</span>ました</div>
                                                                <div class="translate">Tôi đã ăn <span class="bold">quá</span> nhiều Sushi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このシャツは <span class="bold">大きすぎ</span>ます</div>
                                                                <div class="translate">Cái áo sơ mi này <span class="bold">quá</span> to</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">この本は <span class="bold">複雑すぎ</span>ます</div>
                                                                <div class="translate">Cuốn sách này <span class="bold">quá</span> phức tạp</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> 「すぎます」là động từ nhóm II  「すぎる、すぎて」<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">食べ<span class="bold">すぎて</span>、おなかが  痛いです</div>
                                                                <div class="translate">Vì tôi ăn nhiều <span class="bold">quá</span> nên bị đau bụng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">試験の問題は <span class="bold">複雑すぎ</span>て、何も わかりませんでした</div>
                                                                <div class="translate">Bài thi khó <span class="bold">quá</span> nên chả hiểu gì cả</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">いくら好きでも、<span class="bold">飲みすぎ</span>ると、 体に悪いですよ</div>
                                                                <div class="translate">Dù có thích rượu mấy đi chăng nữa nhưng nếu uống nhiều <span class="bold">quá</span> cũng có hại cho sức khỏe</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>44.2</td>
                                                <td>Ｖやすい／にくいです</td>
                                                <td>
                                                    <div class="summarize">Dễ (làm gì)…., khó (làm gì)…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> ghép 2 tính từ với động từ (động từ ý chí) để thể hiện mức độ khó hay dễ khi 
                                                        thực hiện hành động nào đó<br>
                                                        <span class="bold">* Cách chia:</span>: V bỏ ます + やすいです / にくいです<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この 薬は <span class="bold">飲みやすい</span>です</div>
                                                                <div class="translate">Thuốc này <span class="bold">dễ uống</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このコンピューターは <span class="bold">使いやすい</span>です</div>
                                                                <div class="translate">Máy tính này <span class="bold">dễ sử dụng</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">白いシャツは <span class="bold">汚れやすい</span>です</div>
                                                                <div class="translate">Áo sơ mi trắng <span class="bold">dễ bị bẩn</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">東京は <span class="bold">みにくい</span>です</div>
                                                                <div class="translate">Tokyo <span class="bold">khó sống</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このコップは <span class="bold">割れにくい</span>です</div>
                                                                <div class="translate">Cốc này <span class="bold">khó bị vỡ</span></div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> sau khi ghép, cả cụm từ đó mang tính chất của 1 tính từ đuôi –i. Vì thế, nó tuân 
                                                        thủ toàn bộ các quy tắc, mẫu câu đã học đối với tính từ đuôi –i<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この薬は 砂糖を入れると、<span class="bold">飲みやすく</span> なります</div>
                                                                <div class="translate">Nếu cho đường vào thì thuốc này sẽ (trở nên) <span class="bold">dễ uống</span> hơn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このコップは <span class="bold">割れにく</span>くて、安全ですよ</div>
                                                                <div class="translate">Cái cốc này <span class="bold">khó vỡ</span> nên an toàn đấy</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>44.3</td>
                                                <td>Ａい => く / Ａな => に / Nに + します</td>
                                                <td>
                                                    <div class="summarize">Làm cho ~ trở thành</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> trong bài <a href="<?php echo $page1; ?>#lesson_19" target="_blank">19</a>,
                                                        chúng ta đã học cách tạo phó từ với động từ「～なります」với ý 
                                                        nghĩa “một cái gì đó chuyển sang trạng thái khác (trở nên, trở thành 1 cách tự nhiên)”, còn 
                                                        trong bài này, chúng ta học cách tạo phó từ với động từ「～します」với ý nghĩa “làm thay 
                                                        đổi một cái gì đó sang một trạng thái khác (làm cho ~ trở thanh hoàn toàn do ý chí)”<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">音を 大きくします</div>
                                                                <div class="translate">Tôi vặn tiếng to hơn (làm cho to hơn)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">髪を 短くします</div>
                                                                <div class="translate">Tôi sẽ cắt tóc. (làm cho tóc ngắn)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">部屋を きれいに します</div>
                                                                <div class="translate">Tôi dọn cho phòng sạch hơn (làm cho phòng sạch)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">塩の 量を 半分に しました</div>
                                                                <div class="translate">Tôi đã giảm một nửa lượng muối (làm cho còn 1 nửa)</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><tr>
                                                <td>44.4</td>
                                                <td>Ｎに します</td>
                                                <td>
                                                    <div class="summarize">Chọn, quyết định (làm)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Biểu thị quyết định và lựa chọn có ý chí của con người<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">会議は 明日に します</div>
                                                                <div class="translate">Để đến mai họp (quyết định dời buổi học sang ngày mai)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">晩ご飯は 寿司に します</div>
                                                                <div class="translate">Bữa tối tôi chọn sushi (chọn món sushi để ăn)</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ホテルは どこに しますか</div>
                                                                <div class="translate">Bạn chọn khách sạn nào?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">… ハノイホテルに します</div>
                                                                <div class="translate">Tôi chọn khách sạn Hà nộ</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_45">
                                                <td>45.1</td>
                                                <td>Ｖた, Ｖない, Ａい, Ａな, Ｎの + 場合は</td>
                                                <td>
                                                    <div class="summarize">Trong trường hợp…, Nếu…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng để diễn đạt ý giả định về một tình huống nào đó (ý nghĩa gần giống với 
                                                        mẫu câu 「～たら」) nhưng thường chỉ dùng trong những tình huống không hay, không 
                                                        mong đợi hoặc những điều hiếm khi xảy ra. Hành động ở vế sau thể hiện điều cần phải làm trong trường hợp đó 
                                                        hoặc kết quả do tình huống đó đem lại. Bản thân「場ば合」 là một danh từ nên nó kết hợp với các loại từ khác
                                                        (động từ, tính từ, danh từ) theo đúng các quy tắc đã học<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <span class="underline">Với động từ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">時間に遅れた <span class="bold">場合は</span>、 教室に 入れません</div>
                                                                <div class="translate"><span class="bold">Trong trường hợp</span> đến muộn giờ thì sẽ không vào lớp học được</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">雨が降った <span class="bold">場合は</span>、 学校を 休みます</div>
                                                                <div class="translate">Tôi sẽ nghỉ học <span class="bold">nếu</span> trời mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">会議に間に合わない <span class="bold">場合は</span>、 連絡してください</div>
                                                                <div class="translate"><span class="bold">Trong trường hợp</span> không kịp giờ họp, hãy liên lạc nhé!</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">参加できない 場合は、 私に 言ってください</div>
                                                                <div class="translate"><span class="bold">Trường hợp</span> không thể tham gia, hãy nói với tôi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Trên thực tế, cũng có mẫu câu 「Ｖdict.場合は」nhưng tính giả định của mẫu câu này 
                                                        không mạnh bằng 「Ｖた場合は」và trong giáo trình này chỉ dùng mẫu câu 「Ｖた場合は」<br>
                                                        <span class="underline">Với tính từ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ファックスの 調子が 悪い <span class="bold">場合は</span>、 どうしたらいいですか</div>
                                                                <div class="translate">Tôi nên làm thế nào <span class="bold">trong trường hợp</span> máy fax gặp trục trặc?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">パスポートが 必要な <span class="bold">場合は</span>、彼に言ってください</div>
                                                                <div class="translate">Anh hãy nói với anh ý <span class="bold">trong trường hợp</span> cần hộ chiếu</div>
                                                            </li>
                                                        </ul>
                                                        <span class="underline">Với danh từ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">家事や 地震の 場合は、エレベーターを 使わないでください</div>
                                                                <div class="translate"><span class="bold">Trong trường hợp</span> xảy ra động đất và hỏa hoạn, không được dùng cầu thang máy</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Khi muốn nhấn mạnh, có thể thêm cụm từ 「万一」hoặc「万が一」(vạn nhất) vào phía đầu của 
                                                        vế có 「～場合は」<br>
                                                        - Giáo trình này không đề cập đến cách kết hợp với các dạng: quá khứ phủ định của động từ, quá 
                                                        khứ hay phủ định của tính từ, danh từ.<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>45.2</td>
                                                <td>Ｖる / Ａい / Ａな, Ｎな + のに、～</td>
                                                <td>
                                                    <div class="summarize">Thế mà, vậy mà…</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> dùng khi muốn diễn đạt việc không đạt được kết quả như mong đợi trong 1 
                                                        tình huống nào đó. Điểm khác biệt cần lưu ý ở mẫu câu này (so với cách nói cùng ý nghĩa 
                                                        như 「～が」hay「～ても」) là nó bao hàm những tình cảm, cảm giác mạnh mẽ của người 
                                                        nói như sự bất mãn, không ngờ…<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">ダイエットしている<span class="bold">のに</span>、太ってしまいました</div>
                                                                <div class="translate">Tôi đã ăn kiêng <span class="bold">thế mà</span> vẫn bị béo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">約束をした<span class="bold">のに</span>、彼女は 来ませんでした</div>
                                                                <div class="translate">Hẹn rồi <span class="bold">vậy mà</span> cô ấy không đến</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ボタンを押した<span class="bold">のに</span>、コピーできません</div>
                                                                <div class="translate">Tôi đã ấn nút rồi <span class="bold">thế mà</span> vẫn không thể copy</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">古くて、狭い<span class="bold">のに</span>、家賃は 高いです</div>
                                                                <div class="translate">Nhà vừa cổ lại hẹp <span class="bold">thế mà</span> tiền nhà lại đắt đỏ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">今日は日曜日な<span class="bold">のに</span>、 働かなければなりません</div>
                                                                <div class="translate">Hôm nay là chủ nhật <span class="bold">mà</span> tôi vẫn phải làm việc</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このレストランは有名なのに、おいしくないです</div>
                                                                <div class="translate">Nhà hàng này nổi tiếng <span class="bold">thế mà</span> chẳng ngon</div>
                                                            </li>
                                                        </ul>
                                                    </div><br>
                                                    <div class="summarize">Sự khác nhau giữa「～のに」và「 ～が/～ても」</div>
                                                    <div class="hide">
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私の部屋は 狭いです<span class="bold">が</span>、きれいです (bài <a href="<?php echo $page1; ?>#lesson_8" target="_blank">8</a>)</div>
                                                                <div class="translate">Phòng của tôi hẹp <span class="bold">nhưng mà</span> đẹp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 明日 雨が 降っ<span class="bold">ても</span>、出かけます (bài <a href="<?php echo $page1; ?>#lesson_25" target="_blank">25</a></div>
                                                                <div class="translate">Ngày mai, <span class="bold">dù</span> trời có mưa chăng nữa, tôi vẫn đi ra ngoài</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 約束した<span class="bold">のに</span>、どうして 来なかったんですか</div>
                                                                <div class="translate">Đã hứa rồi mà sao bạn lại không đến vậy?</div>
                                                            </li>
                                                        </ul>
                                                        - Ví dụ 1: chỉ đơn thuần có ý gắn nối 2 sự đánh giá có tính đối lập, không bao hàm ý chỉ kết quả nằm ngoài mong đợi<br>
                                                        - Ví dụ 2: chỉ dùng để giả định về 1 việc chưa xảy ra trong hiện thực<br>
                                                        - Ví dụ 3: mang ý ngược nghĩa, nghịch lý giữa 2 vế nhưng có bao hàm cảm giác thất 
                                                        vọng, bất mãn hay không ngờ trong câu nói<br>
                                                        * 「～のに」có ý nghĩa hoàn toàn ngược với「～ので」<br>
                                                        Ví dụ:
                                                        <ul>
                                                            <li>
                                                                <div class="example">一生懸命  勉強したので、１００点を もらった</div>
                                                                <div class="translate">Vì học hành chăm chỉ nên tôi được 100 điểm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">一生懸命 勉強したのに、５０点しか もらえなかった</div>
                                                                <div class="translate">Tôi đã học hành chăm chỉ, vậy mà chỉ được 50 điểm</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 約束した<span class="bold">のに</span>、どうして 来なかったんですか</div>
                                                                <div class="translate">Đã hứa rồi mà sao bạn lại không đến vậy?</div>
                                                            </li>
                                                        </ul>
                                                        * Chú ý phân biệt giữa mẫu câu chỉ mục đích「～（の）に」(bài <a href="#lesson_42">42</a>) và mẫu câu diễn đạt 
                                                        nghịch lý「～のに」của bài này<br>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_46">
                                                <td>46.1</td>
                                                <td>～ところです</td>
                                                <td>
                                                    <div class="summarize">Các mẫu câu với cụm từ ところです</div>
                                                    <div class="hide">
                                                        Trước đây, ở bài 8 ta đã học từ 「ところ」với ý nghĩa là nơi, chỗ (chỉ vị trí, địa điểm). Đến bài này 
                                                        「ところ」sẽ được mở rộng hơn với 1 ý nghĩa khác: “thể hiện thời điểm” với mẫu câu<br>
                                                        <div class="jap_box" style="width: 100px;">Vところです</div>
                                                        Ý nghĩa chỉ thời điểm của 「ところ」sẽ thay đổi tùy theo thời của động từ đi trước nó.
                                                        (vì 「ところ」là 1 danh từ nên động từ kết hợp với nó tất cả đều là dạng ngắn). Cụ thể gồm 3 trường hợp sau:
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46.1.1</td>
                                                <td>Vる ところです</td>
                                                <td>
                                                    <div class="summarize">Sắp sửa (làm ～), chuẩn bị (làm ～)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để diễn tả ý nói một hành động sắp sửa, chuẩn bị diễn ra và nhấn 
                                                        mạnh vào thời điểm trước khi diễn ra hành động đó. Mẫu câu này thường đi kèm với các 
                                                        cụm từ chỉ thời điểm như: 「これから、」、「（ちょうど）今から」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) A: 昼ご飯は もう 食べましたか</div>
                                                                <div class="translate">Bạn đã ăn trưa rồi à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B:  いいえ、これから <span class="bold">食べるところ</span>です</div>
                                                                <div class="translate">Chưa, tôi <span class="bold">chuẩn bị ăn</span> bây giờ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) A: 会議は もう 始まりましたか</div>
                                                                <div class="translate">Cuộc họp đã bắt đầu rồi à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B:  いいえ、今から <span class="bold">始まるところ</span>です</div>
                                                                <div class="translate">Chưa, <span class="bold">sắp sửa</span> bắt đầu</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">(3) ちょうど 今から お茶を <span class="bold">飲むところ</span>です。いっしょに いかがですか</div>
                                                                <div class="translate">Đúng lúc tôi <span class="bold">chuẩn bị uống trà</span>. Bạn uống cùng tôi nhé!</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46.1.2</td>
                                                <td>Vている ところです</td>
                                                <td>
                                                    <div class="summarize">Đang (làm ～), đang trong lúc (làm ～)</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để diễn tả hành động đang diễn ra tại 1 thời điểm nào đó, nhấn mạnh 
                                                        vào thời điểm hành động đang xẩy ra (mạnh hơn Vています). Mẫu câu này thường đi 
                                                        kèm với trạng từ chỉ thời gian 「今」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: ピンポン しませんか</div>
                                                                <div class="translate">Cậu có chơi bóng bàn không?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: 今 <span class="bold">勉強しているところ</span>ですから、あとで 行きます</div>
                                                                <div class="translate">Vì bây giờ tôi <span class="bold">đang học bài</span>, nên tôi sẽ đi sau</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A: 会議の資料は もう できましたか</div>
                                                                <div class="translate">Tài liệu buổi họp đã chuẩn bị xong chưa?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: すみません。今 <span class="bold">コピーしているところ</span>ですから、もう少し 待ってください</div>
                                                                <div class="translate">Xin lỗi. Vì bây giờ <span class="bold">đang phôtô</span> nên hãy chờ thêm chút nữa</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46.1.3</td>
                                                <td>Vた ところです</td>
                                                <td>
                                                    <div class="summarize">Vừa mới  (làm ～) xong</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để diễn tả 1 hành động vừa mới kết thúc xong và nhấn mạnh vào thời 
                                                        điểm ngay sau khi hành động hoàn thành. Mẫu câu này chỉ đi được với trạng từ chỉ thời gian 「たった今」<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: ８時のバスは もう 出ましたか</div>
                                                                <div class="translate">Chuyến xe 8 giờ đã đi rồi à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: はい、たった今 <span class="bold">出たところ</span>です</div>
                                                                <div class="translate">Vâng, vừa mới đi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">良子さんは たった今 うちへ <span class="bold">帰ったところ</span>です</div>
                                                                <div class="translate">Yoshiko <span class="bold">vừa</span> trở về nhà</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">A: けさ ハノイに 着いたんですか</div>
                                                                <div class="translate">Bạn đã đến Hà Nội sáng nay à?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: はい、たった今 <span class="bold">着いたところ</span>だ</div>
                                                                <div class="translate">Vâng, tôi <span class="bold">vừa</span> đến</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46.1.4</td>
                                                <td>Chú ý mẫu câu ～ところです</td>
                                                <td>
                                                    <div class="summarize">Chú ý mẫu câu ～ところです</div>
                                                    <div class="hide">
                                                        Tất cả các mẫu câu ～ところですđều mang ý tả lại trạng thái tại 1 thời điểm 1 cách đơn thuần<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">田中さんは  今FPTビルで 働いているところです</div>
                                                                <div class="translate">Anh Tanaka bây giờ đang làm việc ở tòa nhà FPT</div>
                                                                <br>=> (Anh ta hiện đang ở tòa nhà FPT và đang làm việc)
                                                            </li>
                                                            <li>
                                                                <div class="example">田中さんは FPTビルで 働いています</div>
                                                                <div class="translate">Anh Tanaka đang làm việc ở tòa nhà FPT</div>
                                                                <br>=> (Anh ta thường làm việc ở tòa nhà FPT nhưng bây giờ anh ta có ở tòa nhà FPT hay không thì không biết)
                                                            </li>
                                                        </ul>
                                                        - Không sử dụng khi chủ ngữ không phải là sinh vật như mưa, gió, tuyết…<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">雨が降っているところです。（ X ）</div>
                                                                <div class="translate">SAI, không sử dụng khi chủ ngữ không phải là sinh vật</div>
                                                                => (Anh ta hiện đang ở tòa nhà FPT và đang làm việc)
                                                            </li>
                                                            <li>
                                                                <div class="example">雨が降っています。（ ○ ）</div>
                                                                <div class="translate">Trời đang mưa</div>
                                                            </li>
                                                        </ul>
                                                        - Không sử dụng với các động từ chỉ trạng thái kết quả như  結婚している、知っている…<br>
                                                        <span class="bold">* Tổng kết:</span><br>
                                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/46.1 Vru_tokoro.jpg" alt="46.1"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>46.2</td>
                                                <td>Vた ばかりです</td>
                                                <td>
                                                    <div class="summarize">Mới / vừa mới (làm ～) </div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để diễn tả hành động vừa mới hoàn thành, vừa mới kết thúc nhưng 
                                                        chưa lâu lắm. Thời điểm xảy ra chưa lâu đó hoàn toàn là do phán đoán chủ quan của 
                                                        người nói (có thể là mới đây hoặc cũng có thể là đã lâu rồi)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">山田さんと山本さんは ３か月まえに <span class="bold">結婚したばかり</span>です</div>
                                                                <div class="translate">Cô Yamada và anh Yamamoto <span class="bold">vừa kết hôn</span> 3 tháng trước</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">田中さんは ３週間まえに ベトナムへ <span class="bold">来たばかりです</span></div>
                                                                <div class="translate">Anh Tanaka <span class="bold">vừa đến</span> Việt Nam 3 tuần trước</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">このカメラは きのう <span class="bold">買ったばかり</span>です</div>
                                                                <div class="translate">Cái máy ảnh này hôm qua tôi <span class="bold">vừa mua</span></div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Mở rộng:</span><br>
                                                        - Thể hiện quan hệ nhân quả với 「～ばかりですから、～」、「～ばかりなので、～」:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">さっき <span class="bold">食べたばかりですから</span>、まだ おなかが いっぱいです</div>
                                                                <div class="translate"><span class="bold">Bởi vì vừa ăn</span> nên tôi vẫn còn no</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">ペンキを <span class="bold">塗ったばかりなので</span>、触らないようにしてください</div>
                                                                <div class="translate"><span class="bold">Vì vừa mới sơn</span> xong nên đừng động vào</div>
                                                            </li>
                                                        </ul>
                                                        - Thể hiện quan hệ nghịch lý, không ngờ với 「～ばかりですなのに、～」:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">この時計は <span class="bold">買ったばかりなのに</span>、もう壊れてしまいました</div>
                                                                <div class="translate">Cái đồng hồ này <span class="bold">vừa mới mua vậy mà</span> đã hỏng mất rồi</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">きのう <span class="bold">教えたばかりなのに</span>、もう忘れてしまいましたか</div>
                                                                <div class="translate"><span class="bold">Vừa mới dạy</span> ngày hôm qua <span class="bold">vậy mà</span> đã quên rồi sao?</div>
                                                            </li>
                                                        </ul>
                                                    </div><br>
                                                    <div class="summarize">Tham khảo: Phân biệt cách dùng 「Vたところ」 ＆ 「Vたばかり」</div>
                                                    <div class="hide">
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th>「Vたところ」</th>
                                                                <th>「Vたばかり」</th>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Chỉ nhấn mạnh vào thời điểm ngay sau khi hành động kết thúc, không bao gồm cảm giác,
                                                                    tình cảm tâm lý của người nói
                                                                </td>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Diễn tả hành động vừa xẩy ra nhưng có bao gồm cảm giác, tình cảm, tâm lý của người nói
                                                                    (rằng việc đó chỉ mới xẩy ra cách đây không lâu)
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Không dùng với các phó từ chỉ thời gian trong quá khứ nào khác ngoài 「たった今」
                                                                </td>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Dùng được với các phó từ chỉ thời gian trong quá khứ như「この間」「きょねん」…
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Dùng để trả lời hay giải thích hay nêu lý do cho 1 câu hỏi hay 1 sự bắt đầu câu chuyện của 1 ai đó.
                                                                    Không dùng để bắt đầu câu chuyện
                                                                </td>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Có thể dùng để bắt đầu câu chuyện
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Ví dụ:<br>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="example">飛行機は もう 着きましたか</div>
                                                                            <div class="translate">Máy bay đã tới chưa</div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="example">…ええ、たった今 着いたところです</div>
                                                                            <div class="translate"><span class="bold">Rồi, máy bay vừa mới tới</div>
                                                                        </li>
                                                                    </ul>
                                                                    (máy bay đến lúc 8h30’, bây giờ là 8h40’)
                                                                </td>
                                                                <td style="text-align: left; vertical-align: top">
                                                                    Ví dụ:<br>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="example">私は ３ヶ月前に 結婚したばかりです</div>
                                                                            <div class="translate">Tôi mới kết hôn 3 tháng trước</div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        Vたばかりcũng được coi như 1 danh từ
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_47">
                                                <td>47.1</td>
                                                <td>Thể thông thường + そうです</td>
                                                <td>
                                                    <div class="summarize">(Tôi) nghe nói là ~ </div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để truyền đạt những thông tin mà mình nghe thấy ở đâu đó đến người thứ
                                                        3 và không có nhận định của bạn. Để nhấn mạnh thêm sự chắc chắn của thông tin, có thể
                                                        dẫn thêm nguồn gốc của thông tin đó với cụm từ 「～によると」<br>
                                                        <span class="bold">* Cách kết hợp:</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>Động từ</td>
                                                                <td rowspan="4">dạng ngắn</td>
                                                                <td>Vる･Vない･Vた</td>
                                                                <td rowspan="4">そうです</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tính từ đuôi i</td>
                                                                <td>～い・くない…</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tính từ đuôi na</td>
                                                                <td>～だ・ではない…</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Danh từ</td>
                                                                <td>～だ・ではない…</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) <span class="bold">天気予報によると</span>、あしたは いい天気に <span class="bold">なる<span class="underline">そうです</span></span></div>
                                                                <div class="translate">Theo như dự báo thời tiết thì <span class="bold">nghe nói</span> ngày mai thời tiết sẽ trở nên đẹp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 田中さんは 今年の１２月に ベトナムへ <span class="bold">来る<span class="underline">そうです</span></span></div>
                                                                <div class="translate">(Tôi) <span class="bold">nghe nói là</span> anh Tanaka sẽ đến Việt Nam vào tháng 12 năm nay</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 東京は とても <span class="bold">きれいだ<span class="underline">そうです</span></span></div>
                                                                <div class="translate">(Tôi) <span class="bold">nghe nói là</span> Tokyo rất đẹp</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) <span class="bold">先生の話によると</span>、彼女は みんなの前で 歌うのが <span class="bold">好きではない<span class="underline">そうです</span></span></div>
                                                                <div class="translate">Theo như câu chuyện của cô giáo thì <span class="bold">nghe nói</span> cô ấy không thích hát trước mọi người</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) <span class="bold">ラオさんの電話によると</span>、アリさんは パスポートを <span class="bold">なくしてしまった<span class="underline">そうです</span></span></div>
                                                                <div class="translate">Theo như cuộc điện thoại của Rao thì Ari <span class="bold">nghe nói</span> đã làm mất hộ chiếu rồi</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        1. Mẫu câu này khác cả về ý nghĩa và cách kết hợp so với mẫu câu 「そうです」 học ở bài <a href="#lesson_43">43</a>. Xem ví dụ sau:<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 雨が <span class="bold">降りそうです</span></div>
                                                                <div class="translate"><span class="bold">Có vẻ như</span> trời sắp mưa</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 雨が <span class="bold">降るそうです</span></div>
                                                                <div class="translate"><span class="bold">Tôi nghe nói</span> là trời sẽ mưa</div>
                                                            </li>
                                                        </ul>
                                                        Ở câu 1) nói về dự đoán, phán đoán dựa vào sự quan sát của của bản thân, còn câu thứ 2) đơn thuần chỉ là truyền đạt,
                                                        kể lại sự việc, thông tin mình đã nghe được ở đâu đó và không có nhận định của bản thân<br>
                                                        2. Mẫu câu này không kết hợp với các cách nói sau: thể ý chí（しよう）, cấm đoán（するな）, mệnh lệnh（しろ）,
                                                        suy đoán（するでしょう）, nhờ vả（してください、しないでください）. Ngoài ra, các mẫu câu khác đều có thể kết hợp được với mẫu câu này<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example red">（ X ）山本さんは アメリカへ <span class="bold">行こうそうです</span></div>
                                                                <div class="translate">Sai, không dùng thể ý chí</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">（ ○ ）山本さんは アメリカへ <span class="bold">行くつもりだそうです</span></div>
                                                                <div class="translate">Nghe nói là anh Yamamoto định đi Mỹ</div>
                                                            </li>
                                                        </ul>
                                                        3. Khi muốn thể hiện ý phủ định hay quá khứ với mẫu câu này, phần 「そうです」không thay 
                                                        đổi, chỉ thay đổi thời của các động từ, danh từ, tính từ đi trước nó mà thôi<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example red">（ X ）リーさんは 中国へ <span class="bold">帰るそうじゃありません</span></div>
                                                                <div class="translate">Sai, không dùng phủ định cho phần 「そうです」</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">（ ○ ）リーさんは 中国へ <span class="bold">帰らないそうです</span></div>
                                                                <div class="translate">Nghe nói là anh Ri không đi Trung Quốc</div>
                                                            </li>
                                                        </ul>
                                                        4.  Sự khác nhau giữa「～そうです」và「～と言っていました」<br>
                                                        「～と言っていました」chỉ dùng khi truyền đạt những thông tin mà mình trực tiếp nghe được từ người nói đó, còn 「～そうです」
                                                        có thể dùng với trường hợp nghe từ những nguồn khác (không nhất thiết phải đúng là người đó nói) 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>47.2</td>
                                                <td>Thể thông thường + ようです</td>
                                                <td>
                                                    <div class="summarize">Hình như là ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để diễn đạt những suy luận, phán đoán 1 cách trực quan, hoàn toàn dựa 
                                                        trên những cảm giác, cảm nhận (5 giác quan) của bản thân. Vì thế, những suy đoán đó có thể không chính xác<br>
                                                        <span class="bold">* Cách kết hợp:</span><br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td>Động từ</td>
                                                                <td rowspan="4">dạng ngắn</td>
                                                                <td>Vる･Vない･Vた</td>
                                                                <td rowspan="4">ようです</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tính từ đuôi i</td>
                                                                <td>～い・くない…</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tính từ đuôi na</td>
                                                                <td>～<span class="bold">な</span>・ではない…</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Danh từ</td>
                                                                <td>～<span class="bold">の</span>・ではない…</td>
                                                            </tr>
                                                        </table>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 彼は きょう とても <span class="bold">いそがしいようです</span></div>
                                                                <div class="translate">Hôm nay <span class="bold">hình như</span> anh ấy rất bận rộn</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) きのう この道で 交通事故が <span class="bold">起こったようです</span></div>
                                                                <div class="translate">Hôm qua <span class="bold">hình như</span> đã xẩy ra tại nạn trên đường này</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">3) 部屋に 泥棒が <span class="bold">入ったようです</span></div>
                                                                <div class="translate"><span class="bold">Hình như</span> trộm đã vào phòng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">4) 田中さんは とても <span class="bold">病気のようです</span></div>
                                                                <div class="translate"><span class="bold">Hình như</span> anh Tanaka ốm nặng</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">5) 先生は きょう <span class="bold">ひまなようです</span></div>
                                                                <div class="translate">Hôm nay <span class="bold">hình như</span> thầy giáo rảnh</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_48">
                                                <td>48.1</td>
                                                <td>Cách chia động từ thể sai khiến</td>
                                                <td>
                                                    <div class="link_popup" data="popup_dong_tu_the_sai_khien">Cách chia động từ thể sai khiến</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48.2.1</td>
                                                <td>Cách sử dụng thể sai khiên</td>
                                                <td>
                                                    <div class="summarize">Cách sử dụng</div>
                                                    <div class="hide">
                                                        Động từ thể sai khiến biểu hiện ý cho phép (cho làm gì) hay mệnh lệnh, yêu cầu, cưỡng 
                                                        chế (bắt làm gì…). Do đây là mẫu câu thể hiện ý sai khiến, mệnh lệnh rất mạnh của người 
                                                        trên yêu cầu người dưới làm gì đó và người dưới phải làm theo. Vì thế, không sử dụng mẫu 
                                                        này đối với những quan hệ ngang bằng hay đối với người trên, thay vào đó sẽ dùng các 
                                                        mẫu đã học về quan hệ cho nhận như: 「Ｖていただく（<a href="#lesson_41">４１課</a>）」、
                                                        「Ｖてもらう（<a href="<?php echo $page1; ?>#lesson_24" target="_blank">２４課</a>）」(tuy nhiên những động từ mang ý
                                                        diễn đạt tâm lý, tình cảm như 「しんぱいする、びっくりする、困る」thì vẫn có thể dùng với người trên với ý:
                                                        làm cho lo lắng, làm cho ngạc nhiên, làm cho khó khăn…)
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48.2.2.1</td>
                                                <td>Trường hợp 1: đối với “tự động từ” 自動詞 （じどうし）<br>～を Ｖ（さ）せる</td>
                                                <td>
                                                    <div class="summarize">Cho (ai đó) làm ～; bắt (ai đó) làm ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> biến đổi tự động từ sang thể 「使役（しえき）」 để tạo ra 1 động từ mới 
                                                        mang nghĩa sai khiến, mệnh lệnh yêu cầu ai đó làm gì. Trong phạm vi bài này dùng chủ yếu 
                                                        các tự động từ sau: 行く、来る、帰る、通う、出張する、出席する、遊ぶ. Trong kiểu câu này, người thực hiện hành động,
                                                        động tác sẽ đi với trợ từ 「を」<br>
                                                        => Kiểu câu này còn được gọi tên là kiểu câu 「を-使役文 (しえきぶん)」(câu sai khiến với trợ từ を)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 部長は 加藤さん<span class="bold">を</span> 大阪へ<span class="bold">出張させます</span></div>
                                                                <div class="translate">Trưởng phòng sai anh Kato đi công tác Osaka</div>
                                                                <br>(Trưởng phòng là chủ thể của câu nhưng người thực hiện hành động đi công tác Osaka là anh Kato)
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 私は 娘<span class="bold">を</span> 自由に <span class="bold">遊ばせました</span></div>
                                                                <div class="translate">Tôi <span class="bold">để cho</span> con gái <span class="bold">chơi</span> tự do</div>
                                                                <br>(Tôi là chủ thể của câu nhưng đối tượng thực hiện hành động chơi là con gái tôi)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48.2.2.2</td>
                                                <td>Trường hợp 2: đối với “tha động từ” 他動詞 （たどうし）<br>～に ～を Ｖ（さ）せる</td>
                                                <td>
                                                    <div class="summarize">Cho (ai đó) làm ～; bắt (ai đó) làm ～</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> biến đổi tha động từ sang thể 「使役（しえき）」 để tạo ra 1 động từ mới 
                                                        mang nghĩa sai khiến, mệnh lệnh yêu cầu ai đó làm gì. Trong kiểu câu này, người thực hiện 
                                                        hành động, động tác sẽ đi với trợ từ 「に」, còn tân ngữ (đối tượng tác động của động từ) 
                                                        vẫn được xác định bởi trợ từ 「を」<br>
                                                        => kiểu câu này còn được gọi tên là kiểu câu 「に-使役文」(câu sai khiến với trợ từ に)<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 先生は 生徒に まどを 開けさせました</div>
                                                                <div class="translate">Giáo viên sai (bảo) sinh viên mở cửa sổ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) 朝は 忙しいですから、娘に 朝ごはんの 準備を 手伝わせます</div>
                                                                <div class="translate">Vì buổi sáng bận nên tôi bắt con gái cùng phụ chuẩn bị bữa sáng</div>
                                                            </li>
                                                        </ul>
                                                    </div><br>
                                                    <div class="summarize">Tham khảo – Mở rộng: 1 số trường hợp đặc biệt dùng với を và に</div>
                                                    <div class="hide">
                                                        <span class="bold">1. Trường hợp với chủ thể hành động của tha động từ + 「を」</span><br>
                                                        Những động từ như 「待つ、勉強する」là tha động từ nhưng cũng có khi đi với trợ từ 「を」
                                                        <ul>
                                                            <li>
                                                                <div class="example">わたしは 弟<span class="underline">を</span> 駅で 待たせた</div>
                                                                <div class="translate">Tôi bảo em trai đợi ở nhà ga</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 弟<span class="underline">に</span> 父の帰りを 待たせた</div>
                                                                <div class="translate">Tôi bảo em trai đợi bố về</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 娘<span class="underline">を</span> アメリカで 勉強させた</div>
                                                                <div class="translate">Tôi bắt con gái đi học ở Mỹ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">わたしは 娘<span class="underline">に</span> ピアノを 勉強させた</div>
                                                                <div class="translate">Tôi bắt con gái học piano</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">2. Trường hợp với chủ thể hành động của tự động từ + 「に」</span><br>
                                                        * 2.1 Trường hợp 1:<br>
                                                        Những động từ như「行く、来る、帰る、歩く」là tự động từ nhưng cũng có khi đi với trợ từ 「に」để tránh lặp trợ từ 「を」
                                                        <ul>
                                                            <li>
                                                                <div class="example">先生は 学生<span class="underline">を</span> 歩かせた</div>
                                                                <div class="translate">Giáo viên bắt học sinh đi bộ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">先生は 学生に 山道<span class="underline">を</span> 歩かせた</div>
                                                                <div class="translate">Giáo viên bắt học sinh đi lên núi</div>
                                                            </li>
                                                        </ul>
                                                        * 2.2 Trường hợp 2:<br>
                                                        Những động từ như「答える、しゃべる、言う、質問する、反対する、発言する」là những tự
                                                        động từ thực hiện hành vi có hướng đến 1 đối tượng nào đó nhưng có nhiều khi dùng trợ từ 「に」thay cho trợ từ「を」
                                                        <ul>
                                                            <li>
                                                                <div class="example">彼に 答えさせた</div>
                                                                <div class="translate">Tôi bắt anh ấy trả lời</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">山田くんに 言わせよう</div>
                                                                <div class="translate">Tôi bắt bé Yamada nói</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48.2.2.3</td>
                                                <td>Ｖ（さ）せて  いただけませんか</td>
                                                <td>
                                                    <div class="summarize">Cho phép tôi (làm gì), hãy để tôi (làm gì) được không?</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Dùng để xin phép, nhờ vả, yêu cầu người nghe xác nhận và cho phép mình 
                                                        được thực hiện 1 hành động nào đó<br>
                                                        <span class="italic">* Cấu trúc mẫu câu:</span><br>
                                                        <div class="jap_box">Động từ 使役 chia dạng て + いただけませんか</div><br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">すみませんが、早く <span class="bold">帰らせて いただけませんか</span></div>
                                                                <div class="translate">Xin lỗi cho phép tôi về sớm được không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">コピー機を <span class="bold">使わせて いただけませんか</span></div>
                                                                <div class="translate">Cho phép tôi sử dụng máy photo được không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">すみませんが、写真を <span class="bold">撮らせて いただけませんか</span></div>
                                                                <div class="translate">Xin lỗi, cho phép tôi chụp ảnh được không ạ?</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Mở rộng:</span><br>
                                                        - Ngoài cách nói trên, còn có thể dùng các cách nói dưới đây để xin phép làm gì đó:<br>
                                                        + 「Ｖ（さ）せて ください」<br>
                                                        + 「Ｖ（さ）せて くださいませんか」<br>
                                                        - Phân biệt chủ thể hành động của 2 mẫu câu yêu cầu, nhờ vả:<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <th colspan="2">Trường hợp yêu cầu, mong muốn <span class="underline">ai đó làm gì</span></th>
                                                                <th colspan="2">Trường hợp yêu cầu, mong muốn để <span class="underline">mình được làm gì</span></th>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="5">Ｖて</td>
                                                                <td>くれ</td>
                                                                <td rowspan="5">Ｖ（さ）せて</td>
                                                                <td>くれ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ください</td>
                                                                <td>ください</td>
                                                            </tr>
                                                            <tr>
                                                                <td>もらえませんか</td>
                                                                <td>もらえませんか</td>
                                                            </tr>
                                                            <tr>
                                                                <td>くださいませんか</td>
                                                                <td>くださいませんか</td>
                                                            </tr>
                                                            <tr>
                                                                <td>いただけませんか</td>
                                                                <td>いただけませんか</td>
                                                            </tr>
                                                        </table>
                                                        => Từ trên xuống dưới mức độ lịch sự tăng dần
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_49">
                                                <td>49</td>
                                                <td>KHÁI QUÁT VỀ KÍNH NGỮ TRONG TIẾNG NHẬT</td>
                                                <td>
                                                    <div class="summarize">1. Kính ngữ</div>
                                                    <div class="hide">
                                                        Kính ngữ gồm 1 hệ thống các từ ngữ (danh từ, động từ, tính từ, trợ từ…), mẫu câu dùng để thể
                                                        hiện sự tôn trọng, kính trọng của người nói với người nghe hoặc người ở ngôi thứ ba (người được 
                                                        nhắc tới trong hội thoại giữa người nói và người nghe). Về cơ bản, trong tiếng Nhật có nhiều 
                                                        trường hợp dùng kính ngữ khác nhau và người nói thường bày tỏ sự kính trọng của mình với 
                                                        người nghe (hoặc người được nhắc tới) tùy theo mối quan hệ giữa người nói với những người này.
                                                        Có ba mối quan hệ chính khi sử dụng kính ngữ:<br>
                                                        - Người nói là người ít tuổi hơn, cấp dưới hoặc là người có địa vị xã hội thấp hơn. Khi đó sẽ
                                                        sử dụng kính ngữ với với những người nhiều tuổi hơn, với cấp trên hoặc với người có địa vị
                                                        xã hội cao hơn mình<br>
                                                        - Người nói không có quan hệ thân thiết với người nghe (ví dụ trong lần đầu tiên gặp gỡ)<br>
                                                        - Căn cứ vào mối quan hệ “trong” và “ngoài”: theo mối quan hệ này, người “trong” được 
                                                        quan niệm là gồm những người cùng một gia đình, cùng công ty… Còn người “ngoài” là 
                                                        những người không cùng nhóm nêu trên. Khi người nói nhắc đến một người trong nhóm 
                                                        của mình với một người ngoài nhóm thì người được nói tới đó cũng được coi như ngang 
                                                        hàng với chính người nói dù người này có địa vị xã hội cao hơn hay nhiều tuổi hơn. Vì thế, 
                                                        trong trường hợp này người nói không cần dùng kính ngữ
                                                    </div><br>
                                                    <div class="summarize">2. Các loại kính ngữ:</div>
                                                    <div class="hide">
                                                        Có 3 loại chính:<br>
                                                        - Tôn kính ngữ「尊敬語（そんけいご）」: thể hiện sự tôn trọng, tôn kính, đề cao hành vi, 
                                                        hành động của người nói (A) đối với người nghe (B) hoặc người được đề cập đến (C). 
                                                        Tuyệt đối không sử dụng cho bản thân (A) hoặc người “trong” của (A) trong trường hợp 
                                                        (B) là người “ngoài”<br>
                                                        - Khiêm nhường ngữ「謙譲語（けんじょうご）」: thể hiện sự nhún nhường, khiêm tốn, hạ
                                                        thấp bản thân của (A) nhằm thể hiện sự kính trọng đối với (B) hoặc (C). Tuyệt đối không 
                                                        sử dụng cho (B) hoặc (C) (trừ trường hợp đối với người “trong” như người trong gia 
                                                        đình…)<br>
                                                        - Thể lịch sự「丁寧語（ていねいご）」: thể hiện sự lịch sự, lễ phép nên phạm vi sử dụng 
                                                        khá rộng, có thể sử dụng với hầu hết các đối tượng
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.1</td>
                                                <td>Các cách để tạo TÔN KÍNH NGỮ</td>
                                                <td>
                                                    <div class="summarize">1. Dùng tiền tố 「お」 và 「ご」(viết chữ Hán đều là 御 (NGỰ))</div>
                                                    <div class="hide">
                                                        - Tiền tố 「お」 và「 ご」được sử dụng rất nhiều trong câu kính ngữ. Chữ 御 (NGỰ)) với tư cách là 
                                                        tiền tố được thêm vào phía trước các loại từ (danh từ, tính từ, phó từ ) và có 2 cách đọc, lúc là
                                                        「お」, lúc là「 ご」tùy theo loại từ nó ghép là <span class="bold">từ thuần Nhật</span> (Hòa ngữ - 和語) hay là <span class="bold">từ gốc Hán</span>
                                                        (Hán ngữ - 漢語)<br>
                                                        - Hòa ngữ (hay còn gọi là từ Nhật chế) là những từ gốc Nhật, từ vốn có của tiếng Nhật từ xưa, còn 
                                                        Hán ngữ là những từ được lưu truyền từ Trung Quốc. (Thông thường cách nhận biết là Nhật ngữ là 
                                                        những từ 1 chữ Hán, Hán ngữ là những từ gồm 2 chữ Hán)<br>
                                                        <table class="inner_table">
                                                            <tr>
                                                                <td></td>
                                                                <th>V</th>
                                                                <th>N</th>
                                                                <th>A, Na</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Từ thuần Nhật (和語)</td>
                                                                <td>直す、習う</td>
                                                                <td>休み</td>
                                                                <td>優しい</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hán ngữ (漢語)</td>
                                                                <td>修理する、勉強する </td>
                                                                <td>休憩</td>
                                                                <td>親切な</td>
                                                            </tr>
                                                        </table>
                                                        - Về nguyên tắc, 「お」sẽ đi với những từ thuần Nhật và「ご」sẽ ghép với những từ gốc Hán. Tuy 
                                                        nhiên trong tiếng Nhật hàng ngày vẫn có những từ là gốc Hán nhưng vẫn đi với tiền tố 「お」. Ví dụ như:
                                                        お洗濯する、お掃除する、お邪魔する.<br>
                                                        <span class="bold">Ví dụ</span>
                                                        - Danh từ: お宅、お国、お子さん、ご家族、ご質問、ご気分<br>
                                                        - Tính từ: お忙しい、お元気、お上手<br>
                                                        - Phó từ: ごゆっくり、ごいっしょに、お大事に
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.2</td>
                                                <td>Các cách để tạo TÔN KÍNH NGỮ</td>
                                                <td>
                                                    <div class="summarize">2. Sử dụng động từ THỂ BỊ ĐỘNG</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> thể hiện sự kính trọng<br>
                                                        <span class="bold">* Cách dùng:</span> Về hình thức, động từ thể hiện kính ngữ kiểu này có cách chia giống hệt động 
                                                        từ dạng bị động. Hầu hết tất cả các động từ đều có thể áp dụng được trừ động từ dạng 
                                                        khả năng (可能形) và một số động từ như: できます、わかります、いります
                                                        Cả nam và nữ đều sử dụng được nhưng nam giới thường sử dụng nhiều hơn. Ngoài ra, 
                                                        kiểu thể hiện này cũng hay được dùng trong văn viết<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">社長は さっき 出かけられました</div>
                                                                <div class="translate">Giám đốc đã đi ra ngoài lúc nãy rồi ạ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">お酒を やめられたんですか</div>
                                                                <div class="translate">Anh đã bỏ rượu rồi ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">いつ ベトナムに来られましたか</div>
                                                                <div class="translate">Ngài đến Việt Nam lúc nào thế ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">会長は 今アメリカへ 出張されています</div>
                                                                <div class="translate">Chủ tịch đang đi công tác Mỹ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Tôn kính ngữ không sử dụng khi nói về hành động của người nói nên đối với câu hỏi 
                                                        sử dụng tôn kính ngữ thì khi trả lời không sử dụng tôn kính ngữ với hành động của mình<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: いつ お国へ 帰られますか</div>
                                                                <div class="translate">Khi nào bạn về nước?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: あさって帰ります</div>
                                                                <div class="translate">Ngày kia tôi về</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">( あさって 帰られます。（X）)</div>
                                                                <div class="translate red">Không sử dụng tôn kính ngữ với hành động của mình</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.3</td>
                                                <td>Các cách để tạo TÔN KÍNH NGỮ</td>
                                                <td>
                                                    <div class="summarize">3. Biến đổi động từ dạng -MASU: おＶ bỏ ます + になります</div>
                                                    <div class="hide">
                                                        <span class="bold">* Ý nghĩa:</span> thể hiện sự tôn kính, kính trọng (mức độ cao nhất)<br>
                                                        <span class="bold">* Cách dùng:</span><br>
                                                        - Đây là cách thể hiện rất mềm dẻo, có mức độ tôn kính cao hơn cả trường hợp 
                                                        sử dụng động từ dạng bị động. Cả nam và nữ đều dùng được nhưng nữ giới thường sử dụng nhiều hơn<br>
                                                        - <span class="bold">Không áp dụng</span> với động từ nhóm 3 và động từ 1 âm tiết như: 見ます、寝ます、います…
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">社長は お帰りに なりました</div>
                                                                <div class="translate">Giám đốc đã về rồi ạ</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">新聞を お読みに なりますか</div>
                                                                <div class="translate">Ngài/Bạn có đọc báo không ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">部長は 加藤さんを お呼びに なりました</div>
                                                                <div class="translate">Trưởng phòng đã gọi chị Kato</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* Chú ý:</span> Tôn kính ngữ không sử dụng khi nói về hành động của người nói nên đối với câu hỏi 
                                                        sử dụng tôn kính ngữ thì khi trả lời không sử dụng tôn kính ngữ với hành động của mình<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">A: 今晩何時に 山本さんに お会いに なりますか</div>
                                                                <div class="translate">Tối nay mấy giờ ngài sẽ gặp chị Yamamoto?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: ６時１５分過ぎに 会います</div>
                                                                <div class="translate">Tôi sẽ gặp lúc 6 giờ 15</div>
                                                            </li>
                                                            <li>
                                                                <div class="example red">(６時１５分過ぎに お会いになります。（X))</div>
                                                                <div class="translate">Không dùng để nói về hành động của mình</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.4</td>
                                                <td>Tôn kính ngữ đặc biệt</td>
                                                <td>
                                                    <div class="link_popup" data="popup_ton_kinh_ngu_cua_dong_tu">Bảng KÍNH NGỮ ĐẶC BIỆT của động từ</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.5.1</td>
                                                <td>Tôn kính ngữ của Danh từ</td>
                                                <td>
                                                    <div class="link_popup" data="popup_ton_kinh_ngu_cua_danh_tu">Tôn kính ngữ của Danh từ</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.5.2</td>
                                                <td>Tôn kính ngữ của Tính từ</td>
                                                <td>
                                                    <div class="link_popup" data="popup_ton_kinh_ngu_cua_tinh_tu">Tôn kính ngữ của Tính từ</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49.6</td>
                                                <td>Tham khảo – Mở rộng:</td>
                                                <td>
                                                    <div class="summarize">おＶです và おＶください</div>
                                                    <div class="hide">
                                                        <span class="bold">1. おＶです</span><br>
                                                        Ví dụ<br>
                                                        - お呼びです  =>  呼んでいます<br>
                                                        - お見えです  =>  来ます／来ています／来ました<br>
                                                        - おいでです  =>  行きます／来ます／います<br>
                                                        - お急ぎですか<br>
                                                        - お帰りですよ<br>
                                                        <span class="bold">2. おＶ bỏ ます + ください</span><br>
                                                        cách nói lịch sự của 「～てください」<br>
                                                        Ví dụ<br>
                                                        1. 待ってください  =>  お待ちください<br>
                                                        2. 入ってください  =>  お入りください<br>
                                                        3. 座ってください  =>  お座りください
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="new_lesson" id="lesson_50">
                                                <td>50</td>
                                                <td>KHIÊM NHƯỜNG NGỮ</td>
                                                <td>
                                                    <div class="summarize">KHIÊM NHƯỜNG NGỮ</div>
                                                    <div class="hide">
                                                        Khiêm nhường ngữ là cách nói khiêm tốn, nhún nhường dùng cho những hành động, hành vi của 
                                                        người nói A hay những người thuộc quan hệ trong của A đối với người nghe B hay người được nói tới 
                                                        C. Chính vì vậy, cách nói này tuyệt đối không được sử dụng đối với những hành vi của người thuộc 
                                                        quan hệ ngoài, với người B hay C
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50.1</td>
                                                <td>Khiêm nhường ngữ của động từ: おＶします</td>
                                                <td>
                                                    <div class="summarize">Thể hiện sự nhún nhường, hạ mình của người nói</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách cấu tạo:</span> V bỏ ます => おVします<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        Nhóm 1:<br>
                                                        持ちます => お持ちします<br>
                                                        Nhóm 2:<br> 
                                                        調べます => お調べします<br>
                                                        Nhóm 3:<br> 
                                                        案内します => ご案内します<br>
                                                        邪魔します => お邪魔します<br>
                                                        <span class="bold">* Chú ý:</span><br>
                                                        - Mẫu câu này được sử dụng khi người nói thực hiện hành động gì đó cho người nghe 
                                                        hay người được nhắc tới nên sẽ không dùng với trường hợp mà hành động của người 
                                                        nói không liên quan đến người nghe, người được nhắc tới. (quy tắc này giống với 
                                                        trường hợp các mẫu câu về quan hệ cho nhận học ở bài <a target="_blank" href="#lesson_24">24</a>
                                                        và <a href="#lesson_41">41</a>)<br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">1) 私は 毎日新聞を 読みます。 <span style="red">（X）お読みします</span></div>
                                                                <div class="translate">Hàng ngày tôi đọc báo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">2) A：いつ おくにへ おかえりに なりますか</div>
                                                                <div class="translate">Khi nào thì bạn về nước</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">B: らいしゅう かえります。（X）おかえりします</div>
                                                                <div class="translate">Tuần sau tôi về</div>
                                                            </li>
                                                        </ul>
                                                        - Không dùng trong trường hợp người được nhắc tới trong câu chuyện là người thuộc nhóm mình kể cả người bề trên
                                                        <ul>
                                                            <li>
                                                                <div class="example red">父を 駅まで お送りしました。（X）</div>
                                                                <div class="translate">Ko dùng với người thân</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">父を 駅まで 送りました (O)</div>
                                                                <div class="translate"></div>
                                                            </li>
                                                        </ul>
                                                        - Không sử dụng những động từ có 1 âm tiết ví dụ như: 来ます、見ます、います<br>
                                                        来ます => <span class="red">(X)おきします</span>  (○)まいります<br>
                                                        見ます => <span class="red">(X)おみします</span>  (○)はいけんします<br>
                                                        います => <span class="red">(X)おいします</span>  (○)おります
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50.2</td>
                                                <td>Khiêm nhường ngữ của danh động từ: ごNします</td>
                                                <td>
                                                    <div class="summarize">ごNします</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách ghép:</span> Cách danh động từ (động từ nhóm 3 có dạng「Nします」thường là những từ
                                                        gốc Hán nên sẽ ghép 「ご」và tạo thành 「ごNします」. (nhưng không áp dụng với các động từ như 「勉強します、実習します、結婚します」)<br>
                                                        Chú ý: một số trường hợp đặc biệt<br>
                                                        電話します => お電話します; 約束します => お約束します<br>
                                                        <span class="bold">* Ví dụ:</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">江戸東京博物館へ ご案内します</div>
                                                                <div class="translate">Tôi xin hướng dẫn tới Nhà bảo tàng Edo Tokyo</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">今日の 予定を ご説明します</div>
                                                                <div class="translate">Tôi xin giải thích về dự định của ngày hôm nay</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50.3</td>
                                                <td>Động từ khiêm nhường ngữ đặc biệt</td>
                                                <td>
                                                    <div class="link_popup" data="popup_ton_kinh_ngu_cua_dong_tu">xem BẢNG KÍNH NGỮ ĐẶC BIỆT của động từ</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50.4</td>
                                                <td>Thể lịch sự</td>
                                                <td>
                                                    <div class="summarize">Thể lịch sự</div>
                                                    <div class="hide">
                                                        <span class="bold">* Cách dùng:</span> Sử dụng khi người nói muốn bày tỏ sự kính trọng với người nghe<br>
                                                        <span class="bold">Các thể lịch sự hay dùng:</span>
                                                        <span class="bold">* ございます</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">電話は 階段の 横に ございます</div>
                                                                <div class="translate">Điện thoại có ở bên cạnh cầu thang ạ</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">～で  ございます</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">はい、IMCで ございます</div>
                                                                <div class="translate">Vâng, IMC xin nghe</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…パワー電気の シュッミトですが、ミラーさん、お願いします</div>
                                                                <div class="translate">Tôi là Summit người của công ty điện lực Power, tôi xin gặp anh Miler</div>
                                                            </li>
                                                        </ul>
                                                        <span class="bold">* よろしいでしょうか</span><br>
                                                        <ul>
                                                            <li>
                                                                <div class="example">お飲み物は 何が よろしいでしょうか</div>
                                                                <div class="translate">Ngài sẽ dùng đồ uống gì ạ?</div>
                                                            </li>
                                                            <li>
                                                                <div class="example">…コーヒーを お願いします</div>
                                                                <div class="translate">Cho tôi cà phê</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                        <div id="backgroundPopup"></div>
                                        <div class="popup_area">
                                            <div class="toPopup" id="popup_dong_tu_the_kha_nang" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>27.1 Động từ thể khả năng</span> <a href="dong_tu_the_kha_nang.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    (1) Nhóm 1: Là các động từ có vần [ i ] đứng trước ます。Để chuyển sang động từ thể khả năng chỉ cần chuyển [ i ] thành [  e ]
                                                    <table border="0" cellpadding="0" cellspacing="0" class="inner_table" style="margin-bottom:30px; width: 560px;">
                                                        <tbody>
                                                            <tr>
                                                                <th>～  ます</th>
                                                                <th>可能形（かのうけい）</th>
                                                            </tr>
                                                            <tr>
                                                                <td>およぎ  ます</td>
                                                                <td>およげ  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>よみ  ます</td>
                                                                <td>よめ  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>いき  ます</td>
                                                                <td>いけ  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>はしり  ます</td>
                                                                <td>はしれ  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>うたい  ます</td>
                                                                <td>うたえ  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>もち  ます</td>
                                                                <td>もて  ます</td>
                                                            </tr>
                                                            <tr>
                                                                <td>なおし  ます</td>
                                                                <td>なおせ  ます</td>
                                                            </tr>
                                                        </tbody>
                                                    </table >
                                                    (2) Nhóm 2: Bỏ ます thêm られます
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>食べます</td>
                                                            <td>たべられ  ます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>おぼえ  ます</td>
                                                            <td>おぼえられ  ます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>たて  ます</td>
                                                            <td>たてられ  ます</td>
                                                        </tr>
                                                    </table>
                                                    (3) Nhóm 3
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>します</td>
                                                            <td>できます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>きます</td>
                                                            <td>こられます</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold underline">Chú ý:</span> tất cả các động từ sau khi chuyển sang thể khả năng đều trở thành động từ nhóm II<br><br>
                                                    <span class="bold">2. Ý nghĩa:</span> thể hiện khả năng, năng lực làm việc gì đó (Những động từ khi được biến đổi sang thể
                                                    khả năng sẽ mất đi nghĩa gốc của nó, thay vào đó là từ “có thể”)<br>
                                                    <span class="bold">* Chú ý:</span> Trong câu, trợ từ [を] được chuyển thành [が], Các trợ từ khác vẫn giữ nguyên<br>
                                                    <span class="bold">* Ví dụ:</span>
                                                    <ul>
                                                        <li>
                                                            <div class="example">1.  私は  日本語 <span class="bold underline">を</span>  <span class="underline">話します</span></div>
                                                            <div class="translate">Tôi <span class="bold">nói</span> tiếng nhật</div>
                                                        </li>
                                                        <li>
                                                            <div class="example">=>  私は  日本語<span class="bold underline">が</span>  <span class="underline">話せます</span></div>
                                                            <div class="translate">Tôi <span class="bold">có thể nói</span> tiếng Nhật</div>
                                                        </li>
                                                        <li style="margin-top: 15px;">
                                                            <div class="example">2.  一人で  病院<span class="bold">へ</span>  <span class="underline">行きますか</span></div>
                                                            <div class="translate">Bạn <span class="bold">đi</span> một mình đến bệnh viện à?</div>
                                                        </li>

                                                        <li>
                                                            <div class="example">=>  一人で  病院<span class="bold">へ</span>  <span class="underline">行けますか</span></div>
                                                            <div class="translate">Bạn <span class="bold">có thể đi</span> một mình đến bệnh viện không?</div>
                                                        </li>
                                                    </ul><br>
                                                    <span class="bold">3. Cách dùng:</span> Giống như cách dùng của「V ることができます」học ở bài <a href="<?php echo $page1; ?>#lesson_18" target="_blank">18</a><br>
                                                    <p>a)  Dùng để chỉ khả năng của ai đó có thể làm được gì</p>
                                                    <p class="bold">* Ví dụ:</p>
                                                    <ul>
                                                        <li>
                                                            <div class="example">私は  漢字<span class="bold">が  読めます</span></div>
                                                            <div class="translate">Tôi <span class="bold">có thể đọc</span> được chữ Hán</div>
                                                        </li>
                                                        <li>
                                                            <div class="example">私は  漢字<span class="bold">を  読むことが  できます</span></div>
                                                            <div class="translate">Tôi <span class="bold">có thể đọc</span> được chữ Hán</div>
                                                        </li>
                                                    </ul>
                                                    <p>Ở ví dụ trên: が = を, 読めます = 読むことが  できます</p><br>
                                                    <p>b)  Dùng để chỉ tính khả thi. Ở đâu đó có thể xảy ra việc gì đó</p>
                                                    <p class="bold">Ví dụ:</p>
                                                    <ul style="margin-bottom: 80px;">
                                                        <li>
                                                            <div class="example">銀行で  お金<span class="bold">が  換えられます</span></div>
                                                            <div class="translate"><span class="bold">Có thể</span> đổi tiền ở ngân hàng</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_y_chi" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>31.1 Động từ thể ý chí</span> <a href="dong_tu_the_y_chi.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <span class="bold">* Nhóm I:</span> chuyển đuôi 「u」sang ō<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể ý chí</th>
                                                        </tr>
                                                        <tr>
                                                            <td>行く（いく）</td>
                                                            <td>行こう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>急ぐ（いそぐ）</td>
                                                            <td>急ごう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>飲む（のむ）</td>
                                                            <td>飲もう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>呼ぶ（よぶ）</td>
                                                            <td>呼ぼう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>終わる（おわる）</td>
                                                            <td>終わろう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>待つ（まつ）</td>
                                                            <td>待とう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>会う（あう）</td>
                                                            <td>会おう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>話す（はなす）</td>
                                                            <td>話そう</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm II:</span> bỏ  る thêm よう<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể ý chí</th>
                                                        </tr>
                                                        <tr>
                                                            <td>食べる（たべる）</td>
                                                            <td>食べよう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>始める（はじめる）</td>
                                                            <td>始めよう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>出かける（でかける）</td>
                                                            <td> 出かけよう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>見る（みる）</td>
                                                            <td>見よう</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm III:</span><br>
                                                    <table class="inner_table" style="margin-bottom:80px; width:560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể ý chí</th>
                                                        </tr>
                                                        <tr>
                                                            <td>する</td>
                                                            <td>しよう</td>
                                                        </tr>
                                                        <tr>
                                                            <td>来る（くる）</td>
                                                            <td>来よう（こよう）</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_menh_lenh" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>31.1 Động từ thể mệnh lệnh</span> <a href="dong_tu_the_menh_lenh.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <span class="bold">* Nhóm I:</span> chuyển đuôi 「u」sang e<br>
                                                    (động từ dạng –masu thì bỏ -masu và đổi đuôi  –i thành –e)<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể mệnh lệnh</th>
                                                        </tr>
                                                        <tr>
                                                            <td>急ぐ（いそぐ）</td>
                                                            <td>急げ(いそげ)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>飲む（のむ）</td>
                                                            <td>飲め（のめ)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>行く（いく）</td>
                                                            <td>行け（いけ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>切る（きる）</td>
                                                            <td>切れ（きれ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>歌う（うたう）</td>
                                                            <td>歌え（うたえ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>持つ（もつ）</td>
                                                            <td>持て（もて）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>直す（なおす）</td>
                                                            <td>直せ（なおせ）</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm II:</span> bỏ  る thêm ろ<br>
                                                    (động từ dạng –masu thì bỏ -masu và thêm –ro)<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể mệnh lệnh</th>
                                                        </tr>
                                                        <tr>
                                                            <td>食べる（たべる）</td>
                                                            <td>食べろ（たべろ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>起きる（おきる）</td>
                                                            <td>起きろ（おきろ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>見る（みる）</td>
                                                            <td>見ろ（みろ）</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm III:</span><br>
                                                    <table class="inner_table" style="margin-bottom:80px; width:560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể mệnh lệnh</th>
                                                        </tr>
                                                        <tr>
                                                            <td>する</td>
                                                            <td>しろ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>来る（くる）</td>
                                                            <td>来い（こい）</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_cam_doan" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>33.2 Động từ thể cấm đoán</span> <a href="dong_tu_the_cam_doan.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <div class="bold jap_box" style="border: 1px solid #84888E;">Động từ thể từ điển + な</div><br>
                                                    <p style="text-align: center;">(động từ dạng –masu thì phải chuyển về dạng từ điển và thêm –na)</p>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể ます</th>
                                                            <th>Thể cấm đoán</th>
                                                        </tr>
                                                        <tr>
                                                            <td>行きます</td>
                                                            <td>行く  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>つくります</td>
                                                            <td>つくる  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>のみます</td>
                                                            <td>のむ  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>まちます</td>
                                                            <td>まつ  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>借ります</td>
                                                            <td>借りる  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ねます</td>
                                                            <td>ねる  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>します</td>
                                                            <td>する  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>きます</td>
                                                            <td>くる  な</td>
                                                        </tr>
                                                        <tr>
                                                            <td>けっこんします</td>
                                                            <td>けっこんする  な</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_tong_hop_atode" style="width: 840px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>34.2 Tổng hợp あとで</span> <a href="tong_hop_atode, maeni, Vtekara.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <h3 style="margin-top: 30px; text-align:center;">2. Tổng hợp các cách kết hợp của 「まえに」、「あとで」、「から」</h3>
                                                    <table class="inner_table" style="width: 800px;">
                                                        <tr>
                                                            <th>まえに</th>
                                                            <th>あとで</th>
                                                            <th>から</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">Vdict まえに: &nbsp;&nbsp;&nbsp;ご飯を食べるまえに、</td>
                                                            <td style="text-align: left;">V たあとで: &nbsp;&nbsp;&nbsp;&nbsp;ご飯を食べたあとで、</td>
                                                            <td style="text-align: left;">V てから: &nbsp;&nbsp;&nbsp;&nbsp;ご飯を食べてから、</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">N のまえに: &nbsp;&nbsp;&nbsp;&nbsp;ご飯のまえに、</td>
                                                            <td style="text-align: left;">N のあとで: &nbsp;&nbsp;&nbsp;&nbsp;ご飯のあとで、</td>
                                                            <td style="text-align: left;">N</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">Số từ まえに: &nbsp;&nbsp;１時間まえに</td>
                                                            <td style="text-align: left;">Số từ あとで: &nbsp;&nbsp;１時間あとで</td>
                                                            <td style="text-align: left;">Số từ</td>
                                                        </tr>
                                                    </table>
                                                    <h3 id="phan_biet" style="margin-top: 30px; text-align:center;">3.  Phân biệt sự khác nhau giữa 「～たあとで」và 「～てから」</h3>
                                                    <table class="inner_table" style="margin-bottom:80px; width:800px;">
                                                        <tr>
                                                            <th width="30%"></th>
                                                            <th width="35%">～てから</th>
                                                            <th width="35%">～たあとで</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">Diễn tả ý làm hành động A xong, tiếp ngay sau đó là hành động B</td>
                                                            <td style="text-align: left;">
                                                                O ドアをノックしてから、部屋に入る<br>
                                                                Sau khi gõ cửa, tôi bước vào phòng
                                                            </td>
                                                            <td style="text-align: left;">
                                                                <span style="color:red;">
                                                                    X ドアをノックしたあとで、部屋に入る<br>
                                                                    Sau khi gõ cửa, tôi bước vào phòng<br>
                                                                </span><br>
                                                                <span class="italic">Khi muốn nhấn mạnh vào tuần tự hành động thì có thể dùng được:</span><br><br>
                                                                O 部屋に入るときは必ずノックしたあで入ってください<br>
                                                                Khi vào phòng thì nhất định gõ cửa xong hãy vào
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">Diễn tả  tuần tự các hành động: A được làm trước và B được làm sau</td>
                                                            <td style="text-align: left;">
                                                                O 結婚してから、運転免許を取った<br>
                                                                Sau khi cưới, tôi đã lấy được bằng lái xe
                                                            </td>
                                                            <td style="text-align: left;">
                                                                O 結婚したあとで、運転免許を取った<br>
                                                                Sau khi cưới, tôi đã lấy được bằng lái xe
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;">Diễn tả thời gian</td>
                                                            <td style="text-align: left;">
                                                                O 日本へ来てから３年になる<br>
                                                                Sau khi sang Nhật, đã được 3 năm rồi
                                                            </td>
                                                            <td style="color: red; text-align: left;">
                                                                X  日本へ来たあとで３年になる<br>
                                                                Sau khi sang Nhật, đã được 3 năm rồi
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_dieu_kien" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>35.1 Động từ thể điều kiên</span> <a href="dong_tu_the_dieu_kien.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <span class="bold">a) Thể khẳng định:</span><br><br>
                                                    <span class="bold">(1) Nhóm 1:</span> Chuyển đuôi「u」sang「e」+ -ba<br>
                                                    (động từ dạng –masu thì bỏ -masu và đổi đuôi  –i thành –e + ba)
                                                    <table border="0" cellpadding="0" cellspacing="0" class="inner_table" style="margin-bottom:30px; width: 560px;">
                                                        <tbody>
                                                            <tr>
                                                                <th>Thể từ điển</th>
                                                                <th>Thể điều kiện</th>
                                                            </tr>
                                                            <tr>
                                                                <td>行く（いく）</td>
                                                                <td>いけば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>急ぐ（いそぐ）</td>
                                                                <td>いそげば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>頼む（たのむ）</td>
                                                                <td>たのめば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>呼ぶ（よぶ）</td>
                                                                <td>よべば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ある</td>
                                                                <td>あれば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>買う（かう）</td>
                                                                <td>かえば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>待つ（まつ）</td>
                                                                <td>まてば</td>
                                                            </tr>
                                                            <tr>
                                                                <td>話す（はなす）</td>
                                                                <td>はなせば</td>
                                                            </tr>
                                                        </tbody>
                                                    </table >
                                                    <span class="bold">(2) Nhóm 2:</span> bỏ  「ru」+ -reba<br>
                                                    (động từ dạng –masu thì bỏ -masu và thêm –reba)
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>Thể từ điển</td>
                                                            <td>Thể điều kiện</td>
                                                        </tr>
                                                        <tr>
                                                            <td>調べる（しらべる）</td>
                                                            <td>しらべれば</td>
                                                        </tr>
                                                        <tr>
                                                            <td>変える（かえる）</td>
                                                            <td>かえれば</td>
                                                        </tr>
                                                        <tr>
                                                            <td>見る（みる）</td>
                                                            <td>みれば</td>
                                                        </tr>
                                                        <tr>
                                                            <td>いる</td>
                                                            <td>いれば</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">(3) Nhóm 3</span>
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>来る（くる）</td>
                                                            <td>くれば</td>
                                                        </tr>
                                                        <tr>
                                                            <td>する</td>
                                                            <td>すれば</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Tính từ  đuôi i:</span>  Bỏ い thêm ければ
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>やすい</td>
                                                            <td>やすければ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ちいさい</td>
                                                            <td>ちいさければ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>*いい</td>
                                                            <td>*よければ</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Tính từ  đuôi na và danh từ:</span><br>
                                                    - Tính từ đuôi na bỏ な thêm なら<br>
                                                    - Danh từ thêm なら<br>
                                                    (cũng có ならば nhưng なら được dùng nhiều hơn)
                                                    <table class="inner_table" style="margin-bottom:30px; width: 550px;">
                                                        <tr>
                                                            <td>かんたん（な）</td>
                                                            <td>かんたんなら</td>
                                                        </tr>
                                                        <tr>
                                                            <td>しずか（な）</td>
                                                            <td>しずかなら</td>
                                                        </tr>
                                                        <tr>
                                                            <td>びょうき</td>
                                                            <td>びょうきなら</td>
                                                        </tr>
                                                        <tr>
                                                            <td>がくせい</td>
                                                            <td>がくせいなら</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">b) Thể phủ định:</span><br><br>
                                                    - <span class="bold">* Động từ:</span> Chuyển từ động từ thể  -nai và chia như 1 tính từ đuôi  –i<br>
                                                    - <span class="bold">* Tính từ  đuôi i:</span>  Chuyển sang thể phủ định (～くない) và chia như 1 tính từ đuôi  –i<br>
                                                    - <span class="bold">* Tính từ  đuôi na+ danh từ:</span>  Chuyển sang thể  phủ định (～ではない／～じゃない) và chia như 1 tính từ đuôi  –i
                                                    <div style="margin-bottom:80px;"></div>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_ukemi" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>37.1 Động từ thể ukemi</span> <a href="dong_tu_the_ukemi.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <span class="bold">* Nhóm I:</span> Chuyển [ i ] thành [ are ]<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể masu</th>
                                                            <th>Thể ukemi</th>
                                                        </tr>
                                                        <tr>
                                                            <td>～ます</td>
                                                            <td>受身（うけみ）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ききます</td>
                                                            <td>きかれます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>よみます</td>
                                                            <td>よまれます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>はこびます</td>
                                                            <td>はこばれます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>とります</td>
                                                            <td>とられます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>こわします</td>
                                                            <td>こわされます</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm II:</span> Thêm られ<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể masu</th>
                                                            <th>Thể ukemi</th>
                                                        </tr>
                                                        <tr>
                                                            <td>たべます</td>
                                                            <td>たべられます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ほめます</td>
                                                            <td>ほめられます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>みます</td>
                                                            <td>みられます</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm III:</span><br>
                                                    <table class="inner_table" style="margin-bottom:80px; width:560px;">
                                                        <tr>
                                                            <th>Thể masu</th>
                                                            <th>Thể ukemi</th>
                                                        </tr>
                                                        <tr>
                                                            <td>きます</td>
                                                            <td>こられます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>します</td>
                                                            <td>されます</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_tong_ket_cac_bieu_hien_nho_va" style="width: 670px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>41.5 Tổng kết các biểu hiện nhờ vả</span> <a href="bieu_hien_nho_va.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <h3 style="width: 600px; margin: 0 auto;">Bảng tổng kết các biểu hiện nhờ vả theo mức độ lịch sự tăng dần từ trên xuống dưới</h3>
                                                    <table class="inner_table" style="width: 560px; margin: 50px auto;">
                                                        <tr>
                                                            <th>Thể khẳng định</th>
                                                            <th>Thể phủ định</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_33" class="btn_close">Bài 33:</a> Vてくれ</td>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_33" class="btn_close">Bài 33:</a> Vないでくれ</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;"><a href="<?php echo $page1; ?>#lesson_20" target="_blank">Bài 20:</a> Vて</td>
                                                            <td style="text-align: left;"><a href="<?php echo $page1; ?>#lesson_20" target="_blank">Bài 20:</a> Vないで</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;"><a href="<?php echo $page1; ?>#lesson_14" target="_blank">Bài 14:</a> Vてください</td>
                                                            <td style="text-align: left;"><a href="<?php echo $page1; ?>#lesson_14" target="_blank">Bài 14:</a> Vないでください</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_26" class="btn_close">Bài 26:</a> Vてくださいませんか</td>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_26" class="btn_close">Bài 26:</a> Vないでくださいませんか</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_41" class="btn_close">Bài 41:</a> Vていただけませんか</td>
                                                            <td style="text-align: left;"><a href="index_2.html#lesson_41" class="btn_close">Bài 41:</a> Vないでいただけませんか</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_mau_cau_muc_dich" style="width: 1040px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>42.3 So sánh các mẫu câu mục đích</span> <a href="mau_cau_muc_dich.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <h2 style="margin: 30px 0; text-align:center; line-height: 39px;">
                                                        So sánh các mẫu câu thể hiện mục đích <br>
                                                        <span class="hightlight">
                                                            ～に, ～ように, ～ために, ～（の）に
                                                        </span>
                                                    </h2>
                                                    <table class="inner_table" style="margin-bottom:80px; width:1000px;">
                                                        <tr>
                                                            <th width="10%">Mẫu câu</th>
                                                            <th width="20%">
                                                                に + 行く / 来る / 帰る<br>
                                                                (Bài <a href="index_2.html#lesson_13" target="_blank">13</a>)
                                                            </th>
                                                            <th width="20%">
                                                                ように<br>
                                                                (Bài <a href="index_2.html#lesson_36">36</a>)
                                                            </th>
                                                            <th width="20%">
                                                                ために<br>
                                                                (Bài <a href="index_2.html#lesson_42">42</a>)
                                                            </th>
                                                            <th width="20%">
                                                                (の)に<br>
                                                                (Bài <a href="index_2.html#lesson_42">42</a>)
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Cách chia</th>
                                                            <td>V bỏ ます + に</td>
                                                            <td>Vる / V ない + ように</td>
                                                            <td>Vる + ために</td>
                                                            <td>Vる / N + のに</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cách dùng</th>
                                                            <td style="vertical-align: top;">
                                                                Động từ có tính ý chí +<br> 行く / 来る / 帰る
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                - <span class="italic underline">Mệnh đề trước:</span> Động từ không có tính ý chí hoặc động từ thể khả năng<br>
                                                                - <span class="italic underline">Mệnh đề sau:</span> Động từ có tính ý chí
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                - <span class="italic underline">Mệnh đề trước:</span> Động từ có tính ý chí<br><br>
                                                                - <span class="italic underline">Mệnh đề sau:</span> Động từ có tính ý chí hoặc động từ trạng thái
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                - <span class="italic underline">Mệnh đề trước:</span> Động từ có tính ý chí<br><br>
                                                                - <span class="italic underline">Mệnh đề sau:</span> Tính từ hoặc động từ trạng thái
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Ý nghĩa</th>
                                                            <td style="vertical-align: top; text-align: left">Đi (đến, trở về) một nơi nào đó để làm việc gì (động từ có tính ý chí ở đây là mục đích)</td>
                                                            <td style="vertical-align: top; text-align: left">Ở mệnh đề trước, sự việc trở thành có khả năng là mục đích, mệnh đề sau thể hiện sự nỗ lực để tiến đến khả năng ấy.
                                                                (Trường hợp chủ ngữ 2 mệnh đề là khác nhau thì có thể sử dụng động từ có ý chí)</td>
                                                            <td style="vertical-align: top; text-align: left">Nhấn mạnh vào ý mục đích của mệnh đề trước</td>
                                                            <td style="vertical-align: top; text-align: left">So với「ために」thì tính mục đích yếu hơn. Mệnh đề sau thể hiện trạng thái</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Ví dụ</th>
                                                            <td style="vertical-align: top; text-align: left">
                                                                <ul>
                                                                    <li>
                                                                        <div class="example">神田へ本を<span class="underline">買いに</span>行きます</div>
                                                                        <div class="translate">Đi Kanda <span class="underline">để mua sách</span></div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                <ul>
                                                                    <li>
                                                                        <div class="example"><span class="underline">漢字が読めるように</span>、毎日練習します</div>
                                                                        <div class="translate">Tôi luyện tập hàng ngày <span class="underline">để đọc được chữ Hán</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="example"><span class="underline"><span class="underline">子どもが早く起きるように</span>、目覚し時計を買った</div>
                                                                        <div class="translate">Tôi đã mua đồng hồ báo thức <span class="underline">để bọn trẻ dậy sớm</span></div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                <ul>
                                                                    <li>
                                                                        <div class="example"><span class="underline">家を建てるために</span>、お金をためている</div>
                                                                        <div class="translate">Tiết kiệm tiền <span class="underline">để xây nhà</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="example"><span class="underline">家を建てるために</span>、お金が要る</div>
                                                                        <div class="translate">Cần tiền <span class="underline">để xây nhà</span></div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td style="vertical-align: top; text-align: left">
                                                                <ul>
                                                                    <li>
                                                                        <div class="example"><span class="underline">新宿へ行くのには</span>、<br>地下鉄が便利です</div>
                                                                        <div class="translate"><span class="underline">Đi Shinjuku</span> thì tàu điện ngầm là tiện nhất</div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_dong_tu_the_sai_khien" style="width: 600px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>48.1 Động từ thể sai khiến</span> <a href="dong_tu_the_sai_khien.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <span class="bold">* Nhóm I:</span>  chuyển đuôi 「u」sang a +せる<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể sai khiến</th>
                                                        </tr>
                                                        <tr>
                                                            <td>書く（かく）</td>
                                                            <td>書かせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>急ぐ（いそぐ）</td>
                                                            <td>急がせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>飲む（のむ）</td>
                                                            <td>飲ませる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>呼ぶ（よぶ）</td>
                                                            <td>呼ばせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>作る（つくる）</td>
                                                            <td>作らせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>手伝う（てつだう）</td>
                                                            <td>手伝わせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>持つ（もつ）</td>
                                                            <td>持たせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>直す（なおす）</td>
                                                            <td>直させる</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm II:</span> bỏ るthêm させる<br>
                                                    <table class="inner_table" style="width: 560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể sai khiến</th>
                                                        </tr>
                                                        <tr>
                                                            <td>食べる（たべる）</td>
                                                            <td>食べさせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>調べる（しらべる）</td>
                                                            <td>調べさせる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>覚える（おぼえる）</td>
                                                            <td>おぼえさせる</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">* Nhóm III:</span><br>
                                                    <table class="inner_table" style="margin-bottom:80px; width:560px;">
                                                        <tr>
                                                            <th>Thể từ điển</th>
                                                            <th>Thể mệnh lệnh</th>
                                                        </tr>
                                                        <tr>
                                                            <td>する</td>
                                                            <td>させる</td>
                                                        </tr>
                                                        <tr>
                                                            <td>来る（くる）</td>
                                                            <td>来させる（こさせる）</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_ton_kinh_ngu_cua_dong_tu" style="width:780px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>49.4 Bảng kính ngữ đặc biệt của động từ</span> <a href="bang_ton_kinh_ngu_cua_dong_tu.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    <table class="inner_table inner_table_left" style="width: 740px;">
                                                        <tr>
                                                            <th></th>
                                                            <th>Tôn kính ngữ</th>
                                                            <th>Khiêm nhường ngữ</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                いきます<br>
                                                                きます<br>
                                                                います<br>
                                                                （Vています）
                                                            </td>
                                                            <td>
                                                                いらっしゃいます<br>
                                                                *おいでに  なります<br>
                                                                *みえます （tôn kính ngữ của 来ます）<br>
                                                                （Vていらっしゃいます）
                                                            </td>
                                                            <td>
                                                                まいります<br>
                                                                まいります<br>
                                                                おります<br>
                                                                （Vております）
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                たべます<br>
                                                                のみます
                                                            </td>
                                                            <td>
                                                                めしあがります<br>
                                                                *あがります
                                                            </td>
                                                            <td>
                                                                いただきます
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                します<br>
                                                                （せつめい）します
                                                            </td>
                                                            <td>
                                                                なさいます<br>
                                                                ご（せつめい）なさいます
                                                            </td>
                                                            <td>
                                                                いたします<br>
                                                                ご（せつめい）いたします / もうしあげます
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>いいます</td>
                                                            <td>おっしゃいます</td>
                                                            <td>もうします</td>
                                                        </tr>
                                                        <tr>
                                                            <td>しっています</td>
                                                            <td>ごぞんじです</td>
                                                            <td>
                                                                ぞんじております<br>
                                                                （そんじません）
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>～とおもいます</td>
                                                            <td></td>
                                                            <td>*～とぞんじます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ねます</td>
                                                            <td>おやすみになります</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                ききます<br>
                                                                ほうもんします
                                                            </td>
                                                            <td></td>
                                                            <td>うかがいます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Na / N + です</td>
                                                            <td>Na / N + でいらっしゃいます</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>着ます</td>
                                                            <td>*おめしになります</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>みます</td>
                                                            <td>ごらんになります</td>
                                                            <td>はいけんします</td>
                                                        </tr>
                                                        <tr>
                                                            <td>（Vて）くれます</td>
                                                            <td>（Vて）くださいます</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>（Vて）あげます</td>
                                                            <td></td>
                                                            <td>*（Vて）さしあげます</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                もらいます<br>
                                                                （Vて）もらいます
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                いただきます<br>
                                                                ちょうだいします<br>
                                                                （Vて）いただきます
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                みせます<br>
                                                                あいます
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                おめにかけます<br>
                                                                おめにかかります
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">Những từ đánh dấu *: Trong giáo trình này không đề cập đến nhưng được sử dụng nhiều</span>
                                                    <div style="margin-bottom:80px;"></div>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_ton_kinh_ngu_cua_danh_tu" style="width:690px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>49.5.1 Tôn kính ngữ của danh từ</span> <a href="bang_ton_kinh_ngu_cua_danh_tu.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    Ở cấp độ đơn vị danh từ, ngoài những kính ngữ đặc biệt đã liệt kê ở trên, có thể dung tiếp đầu ngữ
                                                    「お」và「ご」 để tạo thành kính ngữ. Tuy nhiên, cũng có danh từ không thể ghép 「お」hay
                                                    「ご」.Ví dụ: <span style="color:red;">(X) お会社</span>
                                                    <table class="inner_table inner_table_left" style="width: 650px;">
                                                        <tr>
                                                            <th>内</th>
                                                            <th>外</th>
                                                            <th>内</th>
                                                            <th>外</th>
                                                        </tr>
                                                        <tr>
                                                            <td>かぞく</td>
                                                            <td>ごかぞく</td>
                                                            <td>きょうだい</td>
                                                            <td>ごきょうだい</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ちち</td>
                                                            <td>おとうさん（～さま）</td>
                                                            <td>あに</td>
                                                            <td>おにいさん（～さま）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>はは</td>
                                                            <td>おかあさん（～さま）</td>
                                                            <td>あね</td>
                                                            <td>おねえさん（～さま）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>しゅじん</td>
                                                            <td>ごしゅじん</td>
                                                            <td>おとうと</td>
                                                            <td>おとうとさん（～さま）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>かない</td>
                                                            <td>おくさん（～さま）</td>
                                                            <td>いもうと</td>
                                                            <td>いもうとさん（～さま）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>こども</td>
                                                            <td>おこさん（～さま）</td>
                                                            <td>このひと</td>
                                                            <td>このかた</td>
                                                        </tr>
                                                        <tr>
                                                            <td>むすこ</td>
                                                            <td>
                                                                むすこさん／ぼっちゃん<br>
                                                                （こどもの  ばあい）
                                                            </td>
                                                            <td>みんな</td>
                                                            <td>みなさん （～さま）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>むすめ</td>
                                                            <td>むすめさん / おじょうさん （～さま）</td>
                                                            <td>かいしゃのもの</td>
                                                            <td>かいしゃのかた</td>
                                                        </tr>
                                                    </table>
                                                    <span class="bold">Giải thích</span><br>
                                                    1. Một số danh từ chỉ chức danh như 部長、先生、社長…bản thân nó đã bao hàm ý tôn kính nên 
                                                    không cần thêm「さん」  <span style="color:red;">(X) 先生さん</span> (khác với tiếng Hàn Quốc)<br>
                                                    2. Với những danh từ chưa bao hàm ý kính trọng thì có thể thêm 「さん（さま）」để tăng thêm ý lịch sự<br>
                                                    客 => お客さん（さま)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;二人 => お二人さん（さま）<br>
                                                    医者 => お医者さん（さま）&nbsp;&nbsp;&nbsp;&nbsp;花屋 => （お）花屋さん<br>
                                                    3. Điều đặc biệt cần chú ý đó là các trường hợp nói chuyện về người trên thuộc quan hệ trong với 
                                                    người thuộc quan hệ ngoài. Nếu chỉ suy xét về quan hệ trên dưới thì tương đối dễ vì chỉ việc
                                                    dùng các từ kính ngữ đối với người trên nhưng trong đó nếu xem xét thêm về mối quan hệ
                                                    trong/ngoài thì sẽ khó hơn. Ví dụ trường hợp người A nói chuyện với người B về người C là 
                                                    người trên thuộc quan hệ trong của người A sẽ như sau:<br>
                                                    （１）Trường hợp B (Giám đốc) là người ngoài:<br>
                                                    <ul>
                                                        <li>
                                                            <div class="example">(O) A：（わたしの）父は  明日  大阪へ  行きます／参ります（５０課）</div>
                                                            <div class="translate">Bố tôi ngày mai đi Osaka</div>
                                                        </li>
                                                        <li>
                                                            <div class="example red">(X) A：（わたしの）お父さんは  明日  大阪へ  いらっしゃいます</div>
                                                            <div class="translate">Sai, không dùng tôn kính ngữ khi nói về người nhà</div>
                                                        </li>
                                                    </ul>
                                                    （２）Trường hợp B (anh trai của A) là người trong:<br>
                                                    <ul>
                                                        <li>
                                                            <div class="example">(O) A：お父さんは  明日  大阪へ  いらっしゃる／行く。（行きます。）</div>
                                                            <div class="translate">Ngày mai bố đi Osaka đấy</div>
                                                        </li>
                                                        <li>
                                                            <div class="example red">(X) A：父は  明日  大阪へ  行きます／参ります</div>
                                                            <div class="translate">Nói với người trong thì có thể dùng tôn kính ngữ</div>
                                                        </li>
                                                    </ul>
                                                    <div style="margin-bottom:80px;"></div>
                                                </div>
                                            </div>
                                            <div class="toPopup" id="popup_ton_kinh_ngu_cua_tinh_tu" style="width:690px;">
                                                <div class="popup_header">
                                                    <div class="popup_title">
                                                        <span>49.5.2 Tôn kính ngữ của tính từ</span> <a href="bang_ton_kinh_ngu_cua_tinh_tu.html" target="_blank">Xem trong tab mới</a>
                                                    </div>
                                                    <div class="btn_close"></div>
                                                </div>
                                                <div class="popup_content">
                                                    Cũng giống như Danh từ, có thể thêm tiền tố 「お」và「ご」để  tạo thành kính ngữ. Tuy nhiên, 
                                                    cũng có trường hợp không dùng được. Ví dụ: <span style="color:red;">(X)おいい  (X)おおいしい</span><br>
                                                    <table class="inner_table inner_table_left" style="width: 650px;">
                                                        <tr>
                                                            <th colspan="2">A-い／A-な</th>
                                                            <th colspan="2">副詞 (Phó từ)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>わかい</td>
                                                            <td>ごかぞく</td>
                                                            <td>わかく</td>
                                                            <td>おわかく</td>
                                                        </tr>
                                                        <tr>
                                                            <td>いそがしい</td>
                                                            <td>おいそがしい</td>
                                                            <td>いそがしく</td>
                                                            <td>おいそがしく</td>
                                                        </tr>
                                                        <tr>
                                                            <td>じょうず（な）</td>
                                                            <td>おじょうず（な）</td>
                                                            <td>じょうずに</td>
                                                            <td>おじょうずに</td>
                                                        </tr>
                                                        <tr>
                                                            <td>げんき（な）</td>
                                                            <td>おげんき（な）</td>
                                                            <td>ていねいに</td>
                                                            <td>ごていねいに</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ひま（な）</td>
                                                            <td>おひま（な）</td>
                                                            <td>ぶじに</td>
                                                            <td>ごぶじに（５０課）</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ていねい（な）</td>
                                                            <td>ごていねい（な）</td>
                                                            <td>ゆっくり</td>
                                                            <td>ごゆっくり</td>
                                                        </tr>
                                                        <tr>
                                                            <td>しんせつ（な）</td>
                                                            <td>
                                                                ごしんせつ（な）
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                    <div style="margin-bottom:80px;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="paging paging_bottom">
                                            <a href="<?php echo esc_url( home_url( '/')); ?>giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt">1</a>&nbsp;&nbsp;-&nbsp;&nbsp;2
                                        </div>
                                        <div class="fix_item">
                                            <div class="link_popup" data="popup_dong_tu_the_kha_nang">27.1 Động từ thể khả năng</div>
                                            <div class="link_popup" data="popup_dong_tu_the_y_chi">31.1 Động từ thể ý chí</div>
                                            <div class="link_popup" data="popup_dong_tu_the_menh_lenh">33.1 Động từ thể mệnh lệnh</div>
                                            <div class="link_popup" data="popup_dong_tu_the_cam_doan">33.2 Động từ thể cấm đoán</div>
                                            <div class="link_popup" data="popup_tong_hop_atode">34.2 atode, mae ni, Vte kara</div>
                                            <div class="link_popup" data="popup_dong_tu_the_dieu_kien">35.1 Động từ thể điều kiện</div>
                                            <div class="link_popup" data="popup_dong_tu_the_ukemi">37.1 Động từ thể ukemi</div>
                                            <div class="link_popup" data="popup_tong_ket_cac_bieu_hien_nho_va">41.5 Tổng kết các biểu hiện nhờ vả</div>
                                            <div class="link_popup" data="popup_mau_cau_muc_dich">42.3 So sánh các mẫu câu mục đích</div>
                                            <a href="#lesson_45">45.2 Phân biêt のに với が/ても</a><br>
                                            <div class="link_popup" data="popup_dong_tu_the_sai_khien">48.1 Động từ thể sai khiến</div>
                                        </div>
                                        <?php $currentLink = $linkFbComment. substr(get_permalink(), strlen(get_option('home'))); ?>
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