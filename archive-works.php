<!-- 診療科目一覧ページ -->

<?php get_header(); ?>
        <main>
            <!-- 小ページ共通MV -->
            <section class="top-p__treatment top-mv">
                <div class="top-mv__box">
                    <h2 class="top-mv__title">treatment</h2>
                    <p class="top-mv__text">診療科目</p>
                </div>
            </section>
            <article class="page">
                <div class="inner">
                <?php
                        if ( function_exists( 'bcn_display' ) ) { 
                            bcn_display();
                        }
                    ?>
                </div>
                <!-- 3つのボタン -->
                <section class="pain-btn">
                    <div class="pain-inner pain-btn__wrapper">
                        <div class="pain-btn__box">
                            <a href="#body-pain">身体の痛み</a>
                        </div>
                        <div class="pain-btn__box">
                            <a href="#upset">身体機能の不調</a>
                        </div>
                        <div class="pain-btn__box">
                            <a href="#medical">健診</a>
                        </div>
                    </div>
                </section>
                <!-- 身体の痛み -->
                <section class="body-pain pain__top" id="body-pain">
                    <div class="pain-inner">
                        <!-- ページ共通子タイトル -->
                        <div class="pain-title">
                            <div class="pain-title__img">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                    alt="脳のイラスト"
                                />
                            </div>
                            <h3 class="pain-title__text">身体の痛み</h3>
                        </div>
                        <!-- ページ共通テキスト -->
                        <p class="pain__message">
                            ちょっとした痛みからやってくる病気も少なからず存在します。<br />少しでも異変を感じたら早期に受診しましょう。
                        </p>
                        <!-- ページ共通コンテナー -->
                        <div class="pain__container">
                        <?php $args = array (
						//この中で条件を指定
                        'post_type' =>'works',
                        'category_name' => 'body-pain', // カテゴリをスラッグで指定する場合
                        );
                        $the_query = new WP_Query( $args ); ?>
                        <?php
                        // WP_Queryインスタンスの生成
                                if($the_query -> have_posts()):
                                while($the_query -> have_posts()):$the_query -> the_post();
                                ?>
                                <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                                <div class="pain__box">
                                <div class="pain__img">
                                    <a href="<?php echo get_the_permalink(); ?>"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo CFS()->get('img'); ?>" /></span
                                    ></a>
                                </div>
                                <p class="pain__text"><?php echo CFS()->get('sick'); ?></p>
                            </div>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain1-2.png"
                                                alt="首・肩の痛み" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">首・肩の痛み</p>
                            </div>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain1-3.png"
                                                alt="腰・臀部・足の痛み" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">腰・臀部・足の痛み</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 身体機能の不調 -->
                <section class="body-pain pain__top-upset" id="upset">
                    <div class="pain-inner">
                        <!-- ページ共通子タイトル -->
                        <div class="pain-title">
                            <div class="pain-title__img">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                    alt="脳のイラスト"
                                />
                            </div>
                            <h3 class="pain-title__text">身体機能の不調</h3>
                        </div>
                        <!-- ページ共通テキスト -->
                        <p class="pain__message">
                            歩行障害や呂律が回らないなど、脳の病気を疑う要注意症状です。<br />一刻も早く頭部CT/MRIなどの精査を行い、速やかに原因を特定、治療を開始する必要があります。
                        </p>
                        <!-- ページ共通コンテナー -->
                        <div class="pain__container">
                        <?php $args = array (
						//この中で条件を指定
                        'post_type' =>'works',
                        'category_name' => 'upset', // カテゴリをスラッグで指定する場合
                        );
                        $the_query = new WP_Query( $args ); ?>
                        <?php
                        // WP_Queryインスタンスの生成
                                if($the_query -> have_posts()):
                                while($the_query -> have_posts()):$the_query -> the_post();
                                ?>
                                <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                                <div class="pain__box">
                                <div class="pain__img">
                                    <a href="<?php echo get_the_permalink(); ?>"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo CFS()->get('img'); ?>" /></span
                                    ></a>
                                </div>
                                <p class="pain__text"><?php echo CFS()->get('sick'); ?></p>
                            </div>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain2-1.png"
                                                alt="歩行障害" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">歩行障害</p>
                            </div>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain2-2.png"
                                                alt="めまい・ふらつき" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">めまい・ふらつき</p>
                            </div>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain2-3.png"
                                                alt="呂律が回らない" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">呂律が回らない</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 健診 -->
                <section class="body-pain pain__top-medical" id="medical">
                    <div class="pain-inner">
                        <!-- ページ共通子タイトル -->
                        <div class="pain-title">
                            <div class="pain-title__img">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/title-img.png"
                                    alt="脳のイラスト"
                                />
                            </div>
                            <h3 class="pain-title__text">健診</h3>
                        </div>
                        <!-- ページ共通テキスト -->
                        <p class="pain__message">
                            脳卒中は予防が第一です。早期発見・早期治療で人生まだまだ楽しみたい！<br />脳の状態を知ることのできる大変貴重な機会です。一度受診してみませんか？
                        </p>
                        <!-- ページ共通コンテナー -->
                        <div class="pain__container">
                        <?php $args = array (
						//この中で条件を指定
                        'post_type' =>'works',
                        'category_name' => 'medical', // カテゴリをスラッグで指定する場合
                        );
                        $the_query = new WP_Query( $args ); ?>
                        <?php
                        // WP_Queryインスタンスの生成
                                if($the_query -> have_posts()):
                                while($the_query -> have_posts()):$the_query -> the_post();
                                ?>
                                <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                                <div class="pain__box">
                                <div class="pain__img">
                                    <a href="<?php echo get_the_permalink(); ?>"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo CFS()->get('img'); ?>" /></span
                                    ></a>
                                </div>
                                <p class="pain__text"><?php echo CFS()->get('sick'); ?></p>
                            </div>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain3-1.png"
                                                alt="脳卒中予防" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">脳卒中予防</p>
                            </div>
                            <div class="pain__box">
                                <div class="pain__img">
                                    <a href="#"
                                        ><span class="pain__mask"
                                            ><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/img/pain3-2.png"
                                                alt="脳ドッグ" /></span
                                    ></a>
                                </div>
                                <p class="pain__text">脳ドッグ</p>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <?php get_footer(); ?>