<?php
$text =<<<EOF
<a id="main_SB_S035_nn" href="/usedcar/map/bSB/s035/index.html" onclick="compare_car.doClickChk(this);"><img class="catImg--op lazy" src="/CSphoto/cat/nophoto_M.png" data-original="http://www.carsensor.net/CSphoto/cat/SB/S035/SB_S035_F001_M004_1.jpg" width="180" height="135" alt="インプレッサハッチバックの中古車"></a>
                                                <!--<![endif]-->
                                            </div>
                                            <div class="l-wrap">
                                                <div class="l-box w20"><input id="carSB_S035_nn" type="checkbox" name="CARC[]" value="SB_S035" onclick="dispButton(); return compare_car.doShashuChked(this, '');" onkeypress="return true" tabindex="1" class="f-check"></div>
                                                <div class="l-gutter5"></div>
                                                <div class="l-box">
                                                    <p><a id="main_SB_S035_nn" href="/usedcar/map/bSB/s035/index.html" class="txt" onclick="compare_car.doClickChk(this);">インプレッサハッチバック <span class="linkNo">(310)</span></a></p>
                                                                <p><a href="/newcar/calist.php?STID=CS110500&amp;CARC%5B%5D=SB_S035" class="note">カタログ</a></p>
                                                            </div>
                                            </div><!-- /.l-wrap -->
                                        </div><!-- /.l-box -->
                                                    <div class="l-gutter20"></div>
                                                                                                <div class="l-box">
                                            <div class="txt-r">
                                                <!--[if IE 6]>
                                                <a id="main_SB_S037_nn" href="/usedcar/map/bSB/s037/index.html" onclick="compare_car.doClickChk(this);"><img src="http://www.carsensor.net/CSphoto/cat/SB/S037/SB_S037_F001_M005_1.jpg" width="180" height="135" alt="インプレッサハッチバックSTIの中古車"></a>
                                                <![endif]-->
                                                <!--[if !IE 6]><!-->
                                                <a id="main_SB_S037_nn" href="/usedcar/map/bSB/s037/index.html" onclick="compare_car.doClickChk(this);"><img class="catImg--op lazy" src="/CSphoto/cat/nophoto_M.png" data-original="http://www.carsensor.net/CSphoto/cat/SB/S037/SB_S037_F001_M005_1.jpg" width="180" height="135" alt="インプレッサハッチバックSTIの中古車"></a>

EOF;
$pattern = '/<img class=".*?".*src=".*?".*?"(.*?)".*alt="(.*)の中古車/';
preg_match_all($pattern, $text, $matches);
print_r($matches);

?>
