<!-- おしらせ一覧の表示ページ -->

<?php get_header(); ?>
        <main>
            <!-- 小ページ共通MV -->
            <section class="top-p__news top-mv">
                <div class="top-mv__box">
                    <h2 class="top-mv__title">news</h2>
                    <p class="top-mv__text">お知らせ</p>
                </div>
            </section>
            <article class="page">
                <div class="inner">
                    <!-- ここはパンくずリスト -->
                    <?php
                        if ( function_exists( 'bcn_display' ) ) { 
                            bcn_display();
                        }
                    ?>
                    <p class="page-text">
                        <a href="index.html">HOME</a> ＞ お知らせ
                    </p>
                </div>
                <section class="p-news">
                    <div class="news-inner p-news__inner">
                        <div class="p-news__notice">
                            <ul class="p-news__container">
                            <?php
                        // WP_Queryインスタンスの生成
                                if(have_posts()):
                                while(have_posts()):the_post();
                                ?>
                                <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                                <li class="p-news__wrapper">
                                    <a href="<?php the_permalink(); ?>" class="p-news__item">
                                        <div class="p-news__box">
                                        <?php
                                        $cat = get_the_category();
                                        $catname = $cat[0]->cat_name; //カテゴリー名
                                        $catslug = $cat[0]->slug; //スラッグ名
                                        $cat = $cat[0]; {
                                            echo '<p class="p-news__category category__' . $cat->category_nicename . '" />'; 
                                        } ?>
                                    <?php echo $catname; ?></p> 
                                            <p class="p-news__text">
                                                <?php the_title(); ?>
                                            </p>
                                            <time
                                                class="p-news__date"
                                                ><?php echo get_the_date(); ?></time
                                            >
                                        </div>
                                        <div class="p-news__img">
                                        <?php
                                            if(has_post_thumbnail()):
                                            $id=get_post_thumbnail_id();
                                            $img_src=wp_get_attachment_image_src($id)[0];//アイキャッチ画像のリンクを取得
                                            else:
                                            $img_src=get_template_directory_uri().'/img/img/news-item.jpg';//アイキャッチ画像が設定されていなかったときこちらの画像を表示
                                            endif;
                                            ?>
                                            <img
                                                src="<?php echo $img_src ?>"
                                                alt=""
                                            />
                                        </div>
                                    </a>
                                </li>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                            <div class="list-group">
                                <div class="list-group__wrapper">
                                <?php the_posts_pagination(
                                    array(
                                        'mid_size'      => 4, // 現在ページの左右に表示するページ番号の数
                                        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                                        'prev_text'     => __( ''), // 「前へ」リンクのテキスト
                                        'next_text'     => __( ''), // 「次へ」リンクのテキスト
                                        'type'          => 'list', // 戻り値の指定 (plain/list)
                                    )
                                ); ?>
                                </div>
                            </div>
                        </div>
                        <!-- カテゴリー・月別 -->
                        <?php get_sidebar(); ?>
                    </div>
                </section>
            </article>
        </main>
        <?php get_footer(); ?>