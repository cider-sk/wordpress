<?php
require "./simple_html_dom.php";
$context = stream_context_create(array('http' => array(
    'method' => 'GET',
    'header' => 'User-Agent : Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53',//ユーザエージェント
)));
$html = file_get_html( "http://www.goo-net.com/ipn/usedcar_shop/0505522/detail.html", true, $context);
print_r($html->find("h2.titleFFF", 0)->plaintext);
?>
