<?php
$text =<<<EOF
subphoto_comment[0]='レクサス　ＣＴ２００ｈ　バージョンＣ入庫しました。 ワンオーナー　純正ＨＤＤナビ　フルセグ　コーナーセンサー　バックカメラ';
sub_src[0]='http://picture1.goo-net.com/7000503300/30151009/P/70005033003015100900100.jpg';
sub_src_b[0]='http://picture1.goo-net.com/7000503300/30151009/J/70005033003015100900100.jpg';
sub_l[0]='';

sub_src[1]='http://picture1.goo-net.com/050/0503300/P/0503300A30151009W00101.jpg';
subphoto_comment[1]='◇電車でお越しの際にも、モノレール舎人ライナー西新井大師西駅まで送り迎えができますのでご安心ください。西新井大師西駅に到着するお時間を電話にてお伝えいただければ、迎えをすぐにご用意いたします。';
sub_src_b[1]='http://picture1.goo-net.com/050/0503300/J/0503300A30151009W00101.jpg';
sub_l[1]='/cgi-bin/goojp/used/sub_log.cgi?700050330030151009001+0503300A30151009W001+1';

sub_src[2]='http://picture1.goo-net.com/050/0503300/P/0503300A30151009W00102.jpg';
subphoto_comment[2]='◇全国販売納車承ります。北は北海道から南は沖縄まで、ご自宅までお車をお届け致します。遠方にお住まいの方もお気軽にお問い合わせください。';
sub_src_b[2]='http://picture1.goo-net.com/050/0503300/J/0503300A30151009W00102.jpg';
sub_l[2]='/cgi-bin/goojp/used/sub_log.cgi?700050330030151009001+0503300A30151009W001+2';

sub_src[3]='http://picture1.goo-net.com/050/0503300/P/0503300A30151009W00103.jpg';
subphoto_comment[3]='◇全国からＮＥＴを通してお問合せを頂いております。お申し付け頂ければ指定箇所の写真もお送りいたしております。遠方で現車をご覧になれない方は特に、メール、お電話にて、お気軽にお問い合わせくださいませ。';
sub_src_b[3]='http://picture1.goo-net.com/050/0503300/J/0503300A30151009W00103.jpg';
sub_l[3]='/cgi-bin/goojp/used/sub_log.cgi?700050330030151009001+0503300A30151009W001+3';

EOF;
$pattern = '/subphoto_comment\[[0-9]*\]=\'(.*?)\';/';
preg_match_all($pattern, $text, $matches);
print_r($matches);

$pattern = '/sub_src\[[0-9]*\]=\'(.*?)\';/';
preg_match_all($pattern, $text, $matches_img_s);
print_r($matches_img_s);

$pattern = '/sub_src_b\[[0-9]*\]=\'(.*?)\';/';
preg_match_all($pattern, $text, $matches_img_l);
print_r($matches_img_l);



?>
