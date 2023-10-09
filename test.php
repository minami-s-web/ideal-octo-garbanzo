<?php //ページリスト表示処理
                                    global $wp_rewrite;
                                    $paginate_base = get_pagenum_link(1);
                                    if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                                        $paginate_format = '';
                                        $paginate_base = add_query_arg('paged','%#%');
                                    }else{
                                        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                                        user_trailingslashit('page/%#%/','paged');
                                        $paginate_base .= '%_%';
                                    }
                                    echo paginate_links(array(
                                        'base' => $paginate_base,
                                        'format' => $paginate_format,
                                        'total' => $the_query->max_num_pages,
                                        'mid_size' => 1,
                                        'current' => ($paged ? $paged : 1),
                                        'prev_text' => '',
                                        'next_text' => '',
                                    ));
                                    ?>

<p class="list-group__prev">
                                        <a href=""></a>
                                    </p>
                                    <p class="list-group__number active">
                                        <a href="">1</a>
                                    </p>
                                    <p class="list-group__number">
                                        <a href="">2</a>
                                    </p>
                                    <p class="list-group__number">
                                        <a href="">3</a>
                                    </p>
                                    <p class="list-group__number">
                                        <a href="">4</a>
                                    </p>
                                    <p class="list-group__number">
                                        <a href="">5</a>
                                    </p>
                                    <p class="list-group__continue">
                                        <a href="">…</a>
                                    </p>
                                    <p class="list-group__next">
                                        <a href=""></a>
                                    </p>

                                    <?php the_posts_pagination(
                                    array(
                                        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                                        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                                        'prev_text'     => __( ''), // 「前へ」リンクのテキスト
                                        'next_text'     => __( ''), // 「次へ」リンクのテキスト
                                        'type'          => 'list', // 戻り値の指定 (plain/list)
                                    )
                                ); ?>