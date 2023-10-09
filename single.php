<!-- おしらせ詳細ページ -->

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
            <!-- 一番最後にカテゴリーを返したい -->
            <!-- page-textがCSS -->
            <?php
                        if ( function_exists( 'bcn_display' ) ) { 
                            bcn_display();
                        }
                    ?>
                </div>
                <section class="news-detail">
                    <div class="inner news-detail__inner">
                        <div class="news-detail__wrapper">
                            <?php
                            // WP_Queryインスタンスの生成
                                if(have_posts()):
                                while(have_posts()):the_post();
                            ?>
                            <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                            <div class="news-detail__img">
                                <?php
                                    if(has_post_thumbnail()):
                                    $id=get_post_thumbnail_id();
                                    $img_src=wp_get_attachment_image_src($id)[0];//アイキャッチ画像のリンクを取得
                                    else:
                                    $img_src=get_template_directory_uri().'/img/img/news-detail.jpg';//アイキャッチ画像が設定されていなかったときこちらの画像を表示
                                    endif;
                                ?>
                                <img src="<?php echo $img_src ?>" alt=""/>
                            </div>
                            <div class="news-detail__category-box">
                                <?php
                                    $cat = get_the_category();
                                    $catname = $cat[0]->cat_name; //カテゴリー名
                                    $catslug = $cat[0]->slug; //スラッグ名
                                    $cat = $cat[0]; {
                                        echo '<p class="news-detail__category category__' . $cat->category_nicename . '" />'; 
                                    } ?>
                                    <?php echo $catname; ?></p>
                                <time class='news-detail__date'>
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                            <div class="news-detail__text-box">
                                <p class="news-detail__title">
                                    <span><?php the_title(); ?></span>
                                </p>
                                <p class="news-detail__text">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                            <div class="news-detail__btns news-detail-btn">
                                <div class="news-detail-btn__wrapper">
                                    <div class="news-detail-btn__box">
                                        <div class="news-detail-btn__prev">
                                            <?php previous_post_link('%link', '前の記事'); ?>
                                        </div>
                                        <div
                                            class="news-detail-btn__list u-desktop"
                                        >
                                            <a href="news.html"
                                                >お知らせ一覧へ</a
                                            >
                                        </div>
                                        <div class="news-detail-btn__next">
                                            <?php next_post_link('%link', '次の記事');?>
                                        </div>
                                    </div>
                                    <div class="news-detail-btn__list u-mobile">
                                        <a href="news.html">お知らせ一覧へ</a>
                                    </div>
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