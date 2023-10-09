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
                <section class="sickness">
                    <div class="sickness__inner">
                    <?php if(have_posts()):
                                while(have_posts()):the_post();
                                ?>
                                <!-- ↓↓↓↓↓↓↓↓↓↓　ループ内容　↓↓↓↓↓↓↓↓↓↓ -->
                                <div class="sickness__img">
                                    <img src="<?php echo CFS()->get('img'); ?>" />
                                </div>
                                <h3 class="sickness__title"><?php echo CFS()->get('sick'); ?></h3>
                                <div class="sickness__box">
                                    <p class="sickness__text">
                                    <?php echo CFS()->get('text'); ?>
                                    </p>
                                </div>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                        <div class="sickness__btn">
                            <a href="<?php echo get_post_type_archive_link('works'); ?>">診療科目一覧へ</a>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <?php get_footer(); ?>