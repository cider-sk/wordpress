<?php
require "../../../wp-load.php";
require "./simple_html_dom.php";

$html = file_get_html("http://www.carsensor.net/");
foreach($html->find(".emblems a") as $maker_link){
    $text = file_get_contents("http://www.carsensor.net".$maker_link->href);
    
    $pattern = '/<img class=".*?".*src=".*?".*?"(.*?)".*alt="(.*)の中古車/';
    preg_match_all($pattern, $text, $matches);
    
    global $wpdb;
    //DBのバージョン
    // DBバージョンが違ったら作成
    $sql = "CREATE TABLE wp_shashu_img_asoc (
        name text ,
        img text
    )
    CHARACTER SET 'utf8';";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    //1 画像
    //2 車種名
    for($i = 0;$i < count($matches[1]);$i ++){
        $img = $matches[1][$i];
        $name = $matches[2][$i];
        $wpdb->insert( 
            'wp_shashu_img_asoc', 
            array( 
                'name' => $name, 
                'img' => $img 
            ), 
            array( 
                '%s', 
                '%s' 
            ) 
        );
    }
}
