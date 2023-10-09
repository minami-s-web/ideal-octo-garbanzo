<!-- メインページ -->

<?php get_header(); ?>

        <main class="back" id="top">
            <section class="mv">
                <div class="mv__box">
                    <div class="mv__message">
                        <picture class="mv__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/img/img/main-ms-pc.png"
                                media="(min-width: 768px)"
                            />
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/img/main-ms-sp-2.png"
                                alt="頭痛めまい物忘れあなたの第一の相談相手"
                            />
                        </picture>
                    </div>
                    <div class="slider"></div>
                </div>
            </section>
            <!-- ニュースセクション -->
            <section class="news" id="news">
                <!-- 各タイトル -->
                <div class="section-title__wrapper">
                    <div class="section-title">
                        <div class="section-title__img">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                alt="脳のイラスト"
                            />
                        </div>
                        <h3 class="section-title__category">お知らせ</h3>
                        <p class="section-title__category-s">news</p>
                    </div>
                </div>
                <div class="news__inner">
                    <div class="news__container">
                    <?php
                        // パラメータの設定
                        $args = array(
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'orderby' => 'date',
                        );
                        // WP_Queryインスタンスの生成
                        $my_query = new WP_Query($args);
                        if($my_query->have_posts()):
                        while($my_query->have_posts()):$my_query->the_post();
                        ?>
                        <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                        <div class="news__list arrow__pc">
                            <a href="<?php the_permalink() ?>" class="news__link">
                                <div class="news__box">
                                    <time
                                        class="news__date"
                                        ><?php echo get_the_date(); ?></time
                                    >
                                    <?php
                                        $cat = get_the_category();
                                        $catname = $cat[0]->cat_name; //カテゴリー名
                                        $catslug = $cat[0]->slug; //スラッグ名
                                        $cat = $cat[0]; {
                                            echo '<p class="news__category category__' . $cat->category_nicename . '" />'; 
                                        } ?>
                                    <?php echo $catname; ?></p> 
                                </div>
                                <p class="news__text">
                                    <?php the_title(); ?>
                                </p>
                            </a>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <!-- 特殊ボタン・矢印 -->
                    <div class="btn-wrapper news__btn">
                        <a href="<?php echo home_url('news'); ?>" class="btn arrow"> もっと見る</a>
                    </div>
                </div>
            </section>
            <!-- aboutセクション -->
            <section class="about" id="about">
                <div class="inner about__inner">
                    <div class="about__wrapper">
                        <!-- 各タイトル -->
                        <div class="section-title__wrapper">
                            <div class="section-title">
                                <div class="section-title__img">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                        alt="脳のイラスト"
                                    />
                                </div>
                                <h3 class="section-title__category">
                                    クリニックの紹介
                                </h3>
                                <p class="section-title__category-s">about</p>
                            </div>
                        </div>
                        <div class="about__box">
                            <h4 class="about_text">
                                安心して相談できるかかりつけ医
                            </h4>
                            <p class="about__message">
                                地域の皆様の第一の相談相手になりたい<br />頭のことなら”渡邉脳神経外科クリニック”<br />そんなニーズにお応えできるクリニックを目指しています。
                            </p>
                        </div>
                        <!-- 特殊ボタン・矢印 -->
                        <div class="btn-wrapper about__btn">
                            <a href="<?php echo home_url('about'); ?>" class="btn arrow"
                                >クリニックのご紹介
                            </a>
                        </div>
                    </div>
                    <div class="about__imgbox">
                        <div class="about__img-rbox">
                            <picture class="about__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/img/about-pc1.jpg"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/about1.jpg"
                                    alt="院内の写真"
                                />
                            </picture>
                        </div>
                        <div class="about__img-lbox">
                            <picture class="about__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/img/about-pc2.jpg"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/about2.jpg"
                                    alt="院長の写真"
                                />
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 施術一覧 -->
            <section class="treatment" id="treatment">
                <div class="inner treatment__inner">
                    <div class="treatment__wrapper">
                        <!-- 各タイトル -->
                        <div class="section-title__wrapper">
                            <div class="section-title">
                                <div class="section-title__img">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                        alt="脳のイラスト"
                                    />
                                </div>
                                <h3 class="section-title__category">
                                    診療科目
                                </h3>
                                <p class="section-title__category-s">
                                    treatment
                                </p>
                            </div>
                        </div>
                        <div class="treatment__box">
                            <h4 class="treatment_text">
                                早期発見・早期治療が<br
                                    class="u-mobile"
                                />大事な脳の病気。
                            </h4>
                            <p class="treatment__message">
                                頭の専門医として、脳卒中や認知症だけではなく、<br
                                    class="u-mobile"
                                />頭痛やめまい、しびれなどの<br />日常的な症状まで幅広く治療を行っております。<br />どんなに小さな悩みでもお気軽にご相談ください。
                            </p>
                        </div>
                        <!-- 特殊ボタン・矢印 -->
                        <div class="btn-wrapper treatment__btn">
                            <a href="<?php echo home_url('/works'); ?>" class="btn arrow"
                                >診療科目のご紹介</a
                            >
                        </div>
                    </div>
                    <div class="treatment__imgbox">
                        <div class="treatment__img-lbox">
                            <picture class="treatment__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/img/treatment-pc1.jpg"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/treatment1.jpg"
                                    alt="CTの写真"
                                />
                            </picture>
                        </div>
                        <div class="treatment__img-rbox">
                            <picture class="treatment__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/img/treatment-pc2.jpg"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/treatment2.jpg"
                                    alt="院生の写真"
                                />
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <!-- コンタクトセクション -->
            <section class="contact" id="contact">
                <div class="contact__box">
                    <div class="contact__mv">
                        <picture class="contact__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/img/img/contact-bg.jpg"
                                media="(min-width: 768px)"
                            />
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/img/contact-bg-sp.jpg"
                                alt="問診中の写真"
                            />
                        </picture>
                    </div>
                    <div class="contact-inner">
                        <div class="section-title__wrapper">
                            <div class="section-title">
                                <div class="section-title__img">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                        alt="脳のイラスト"
                                    />
                                </div>
                                <h3 class="section-title__category">
                                    お問い合わせ
                                </h3>
                                <p class="section-title__category-s">contact</p>
                            </div>
                        </div>
                        <p class="contact__text">
                            当クリニックは地域の皆様の第一の相談相手を<br
                                class="u-mobile"
                            />目指しております。<br />何でもお気軽にお問合せください。
                        </p>
                        <div class="btn-wrapper contact__btn">
                            <a href="form.html" class="btn arrow">もっと見る</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- アクセスセクション -->
            <section class="access" id="access">
                <div class="access-inner">
                    <div class="section-title__wrapper">
                        <div class="section-title">
                            <div class="section-title__img">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                    alt="脳のイラスト"
                                />
                            </div>
                            <h3 class="section-title__category">アクセス</h3>
                            <p class="section-title__category-s">access</p>
                        </div>
                    </div>
                    <div class="access__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7732773749717!2d139.74504665746454!3d35.65795718789094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1693918133143!5m2!1sja!2sjp"
                            width="600"
                            height="450"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                    <p class="access__text">
                        病院の敷地内に6台の駐車スペースを<br
                            class="u-mobile"
                        />ご用意しております。<br />※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。
                    </p>
                    <table class="access__table">
                        <div>
                            <tr>
                                <th>診療時間</th>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th class="blue">土</th>
                                <th class="red">日</th>
                            </tr>
                            <tr>
                                <th>10:00~12:30</th>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>×</td>
                            </tr>
                            <tr>
                                <th>14:00~17:00</th>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>×</td>
                                <td>●</td>
                                <td>×</td>
                                <td>×</td>
                            </tr>
                        </div>
                    </table>
                </div>
            </section>
        </main>
<?php get_footer(); ?>