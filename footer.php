<footer class="footer">
            <div class="footer__inner">
                <div class="footer__logo u-desktop">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/img/common/footer-logo.svg"
                        alt="渡邉脳神経外科クリニック"
                    />
                </div>
                <div class="footer__menu">
                    <?php
                    $args = array(
                        // ulタグについて
                        'menu' => 'footer-menu',
                        'menu_class' => 'footer__list',
                        // ulタグを囲うdivタグについて
                        'container' => 'nav',
                        'container_class' => 'footer__nav',
                        // liタグにclass名を付けれないためCSSをfooter__list liに変更
                    );
                    wp_nav_menu( $args );
                    ?>
                    <div class="footer__contact">
                        <div class="footer__logo-sp u-mobile">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/img/common/footer-logo-sp.svg"
                                alt="渡邉脳神経外科クリニック"
                            />
                        </div>
                        <p class="footer__address">福岡県福岡市中央区渡邉123</p>
                        <div class="footer__tel">
                            <a href="tel:093-0000-0000">Tel. 093-0000-0000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__small">
                <small>&copy;2022 Watanabe neuro-spone clinic</small>
            </div>
            <?php wp_footer(); ?>
        </footer>
        <!-- jQuery読み込み -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    </body>
</html>
