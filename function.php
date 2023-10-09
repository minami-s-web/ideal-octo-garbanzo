<!-- アイキャッチ・メニューバー表示 -->
<?php
function custom_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme','custom_setup');

// 
function post_has_archive($args,$post_type){
    if('post'==$post_type){
        $args['rewrite']=true;
        $args['has_archive']='news';
        $args['label']='お知らせ';
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

// カスタム投稿タイプ
function cpt_register_works() {
    $labels=[
        'singular_name'=>'works',
        'edit_item'=>'works',
    ];
    $args= [
        'label'=>'Works',
        'labels'=>$labels,
        'description'=>'',
        'public'=>true,
        'show_in_rest'=>true,
        'rest_base'=>'',
        'rest_controller_class'=>'WP_REST_Posts_Controller',
        'has_archive'=>true,
        'delete_with_user'=>false,
        'exclude_from_search'=>false,
        'map_meta_cap'=>true,
        'hierarchical'=>true,
        'rewrite'=>['slug'=>'works'.'with_front'=>true],
        'query_var'=>true,
        'menu_position'=>5,
        'supports'=> ['title','editor','thumbnail'],
    ];
    register_post_type('works',$args);
}
add_action('init', 'cpt_register_works');

// カスタム投稿タイプカテゴリー追加
function cpt_register_dep(){
    $labels = [
        'singular_name' => 'dep',
    ];
$args = [
    'label'=> 'カテゴリー',
    'labels'=>$labels,
    'publicly_queryable'=>true,
    'hierarchical'=>true,
    'show_in_menu'=>true,
    'query_var'=>true,
    'rewrite'=>['slug'=>'dep','with_front'=>true,],
    'show_admin_column'=>false,
    'show_in_rest'=>true,
    'rest_base'=>'dep',
    'rest_controller_class'=>'WP_REST_Terms_Controller',
    'show_in_quick_edit'=>false,
];
register_taxonomy('dep',['works'],$args);
}
add_action('init', 'cpt_register_dep');


function breadcrumbFunc() {
    //変数を作成
    $bread = '';
    // インデックスページかを判定
    if ( !is_home() ) {
        // ホームのリンクを変数に入れる
        $bread .= '<a href="'. home_url( '/' ). '">ホーム</a>';
        // カテゴリーアーカイブか投稿ページが表示されているかを判定
        if ( is_category() || is_single() ) {
            // 矢印">"を変数へ入れる
            $bread .= " > ";
            // カテゴリを取得して変数へ入れる
            $cat = get_the_category();
            $bread .= '<a href="'. get_category_link( $cat[0]->term_id ).'">'.$cat[0]->name.'</a>';
            // 投稿ページが表示されているかを判定
            if ( is_single() ) {
                // 矢印">"を変数へ入れる
                $bread .= " > ";
                // 投稿タイトルを変数へ入れる
                $bread .= get_the_title();
            }
        // 固定ページが表示されているかを判定
        } elseif ( is_page() ) {
            // 矢印">"を変数へ入れる
            $bread .= " > ";
            // 固定ページのタイトルを変数へ入れる
            $bread .= get_the_title();
        }
    }
    return $bread;
}
add_shortcode('breadCrumb', 'breadcrumbFunc');