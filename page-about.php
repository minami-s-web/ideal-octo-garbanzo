<?php get_header(); ?>
        <main class="back__about">
            <!-- 小ページ共通MV -->
            <section class="top-p__about top-mv">
                <div class="top-mv__box">
                    <h2 class="top-mv__title">about</h2>
                    <p class="top-mv__text">クリニックのご紹介</p>
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
                <!-- 院長紹介 -->
                <section class="director">
                    <h3 class="director__introduction">院長紹介</h3>
                    <div class="inner director__inner">
                        <div class="director__img-box">
                            <picture class="director__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/img/director.jpg"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/img/director-sp.jpg"
                                    alt="院長の写真"
                                />
                            </picture>
                        </div>
                        <div class="director__wrapper">
                            <div class="director__text">
                                院長の渡邊和則と申します。<br />平成10年に医師免許を取得し、その後脳神経外科専門医を取得。<br />大学病院や総合病院での経験を経て、平成20年に日本脳卒中学会脳卒中専門医を取得。平成28年、福岡市に「渡邉脳神経外科クリニック」を開院させていただくことになりました。
                            </div>
                            <div class="director__text">
                                <span>“あなたの第一の相談相手”</span
                                ><br />当クリニックではつらい症状から些細な症状まで気軽に受診できる、地域に密着したクリニックを目指しております。<br />ちょっとした軽い症状を放置し、取り返しのつかない事態となることも少なくありません。どんなに些細な症状や心配事でも構いませんので、どうぞお気軽に受診ください。
                            </div>
                            <div class="director__sign">
                                <p class="director__title">
                                    渡邉脳神経外科クリニック院長
                                </p>
                                <h4 class="director__name">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/img/director-name.png"
                                        alt="渡邉 和則"
                                    />
                                </h4>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 院内紹介 -->
                <section class="inhospital">
                    <h3 class="inhospital__introduction">院内紹介</h3>
                    <div class="inner inhospital__inner">
                        <p class="inhospital__text">
                            ご来院の皆さまがリラックスして診察を受けていただけるよう、木目を基調とした清潔感ある<br
                                class="u-desktop"
                            />落ち着いた空間造りを目指しています。<br />最新の装置を導入し、異常の早期発見、早期対応ができるように努めています。<br />他の医療機関とも連携体制を構築し、患者様に適切な医療を提供いたします。
                        </p>
                        <div class="inhospital__container">
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital1.jpg" alt="" />
                            </div>
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital2.jpg" alt="" />
                            </div>
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital3.jpg" alt="" />
                            </div>
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital4.jpg" alt="" />
                            </div>
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital5.jpg" alt="" />
                            </div>
                            <div class="inhospital__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inhospital6.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <?php get_footer(); ?>