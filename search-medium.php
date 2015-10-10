<section class="siteBody">
                <form name="f_combo" id="f_combo" action="/usedcar/search.php" method="get">
                    <header class="pageHeader">
                        <h1 class="pageTtl">条件変更・絞り込み</h1>
                    </header>
                    <section>
                        <h2 class="hdd2nd">基本条件</h2>
                        <ul class="searchList">
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1032');panel.dispArea();" class="listTap_on">
                                    <p class="selectTtl">地域</p>
                                    <p class="subTxt" id="selectedArea">指定なし</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1034');panel.dispCity();setNoDispfooterId('citySelect_SLock');" class="listTap_on">
                                    <p class="selectTtl">市区町村</p>
                                    <p class="subTxt" id="selectedCity">指定なし</p>
                                </a>
                            </li>
                            <li style="position:relative;">
                                <div class="noBtnList">
                                    <span class="selectTtl">価格</span>
                                    <p class="combo2">
                                        </p><fieldset>
                                            <select name="PMIN" id="PMIN" style="width:130px; height:30px;">
                                                                                        <option label="下限なし" value="" selected="selected">下限なし</option>
                                        <option label="5万円" value="50000">5万円</option>
                                        <option label="10万円" value="100000">10万円</option>
                                        <option label="15万円" value="150000">15万円</option>
                                        <option label="20万円" value="200000">20万円</option>
                                        <option label="25万円" value="250000">25万円</option>
                                        <option label="30万円" value="300000">30万円</option>
                                        <option label="35万円" value="350000">35万円</option>
                                        <option label="40万円" value="400000">40万円</option>
                                        <option label="45万円" value="450000">45万円</option>
                                        <option label="50万円" value="500000">50万円</option>
                                        <option label="60万円" value="600000">60万円</option>
                                        <option label="70万円" value="700000">70万円</option>
                                        <option label="80万円" value="800000">80万円</option>
                                        <option label="90万円" value="900000">90万円</option>
                                        <option label="100万円" value="1000000">100万円</option>
                                        <option label="120万円" value="1200000">120万円</option>
                                        <option label="140万円" value="1400000">140万円</option>
                                        <option label="160万円" value="1600000">160万円</option>
                                        <option label="180万円" value="1800000">180万円</option>
                                        <option label="200万円" value="2000000">200万円</option>
                                        <option label="250万円" value="2500000">250万円</option>
                                        <option label="300万円" value="3000000">300万円</option>
                                        <option label="350万円" value="3500000">350万円</option>
                                        <option label="400万円" value="4000000">400万円</option>
                                        <option label="450万円" value="4500000">450万円</option>
                                        <option label="500万円" value="5000000">500万円</option>
                                        <option label="600万円" value="6000000">600万円</option>
                                        <option label="700万円" value="7000000">700万円</option>
                                        <option label="800万円" value="8000000">800万円</option>
                                        <option label="900万円" value="9000000">900万円</option>

                                            </select>
                                            <span style="height:35px; line-height:35px;">&nbsp;～&nbsp;</span>
                                            <select name="PMAX" id="PMAX" style="width:130px; height:30px;">
                                                                                        <option label="上限なし" value="" selected="selected">上限なし</option>
                                        <option label="5万円" value="50000">5万円</option>
                                        <option label="10万円" value="100000">10万円</option>
                                        <option label="15万円" value="150000">15万円</option>
                                        <option label="20万円" value="200000">20万円</option>
                                        <option label="25万円" value="250000">25万円</option>
                                        <option label="30万円" value="300000">30万円</option>
                                        <option label="35万円" value="350000">35万円</option>
                                        <option label="40万円" value="400000">40万円</option>
                                        <option label="45万円" value="450000">45万円</option>
                                        <option label="50万円" value="500000">50万円</option>
                                        <option label="60万円" value="600000">60万円</option>
                                        <option label="70万円" value="700000">70万円</option>
                                        <option label="80万円" value="800000">80万円</option>
                                        <option label="90万円" value="900000">90万円</option>
                                        <option label="100万円" value="1000000">100万円</option>
                                        <option label="120万円" value="1200000">120万円</option>
                                        <option label="140万円" value="1400000">140万円</option>
                                        <option label="160万円" value="1600000">160万円</option>
                                        <option label="180万円" value="1800000">180万円</option>
                                        <option label="200万円" value="2000000">200万円</option>
                                        <option label="250万円" value="2500000">250万円</option>
                                        <option label="300万円" value="3000000">300万円</option>
                                        <option label="350万円" value="3500000">350万円</option>
                                        <option label="400万円" value="4000000">400万円</option>
                                        <option label="450万円" value="4500000">450万円</option>
                                        <option label="500万円" value="5000000">500万円</option>
                                        <option label="600万円" value="6000000">600万円</option>
                                        <option label="700万円" value="7000000">700万円</option>
                                        <option label="800万円" value="8000000">800万円</option>
                                        <option label="900万円" value="9000000">900万円</option>

                                            </select>
                                        </fieldset>
                                    <p></p>
                                </div>
                                <div class="msgBox--kakaku" id="sm_kakaku_balloon" style="display:none;">
    <p>下限も指定すると<br>ご希望の車を見つけやすくなります！</p>
</div>                          </li>
                            <li>
                                <a href="javascript:void(0);" class="listTap_on" onclick="reqVos('SMPH1012');panel.dispBrand(true,panel.makerColNum+1);" id="carAddLink">
                                    <div class="listTap__txtBox  listTap__txtBox--add">
                                        <span class="listTap__txt_main1">メーカー・車名</span>
                                    </div>
                                </a>
                                <ul class="select_subList">
                                                                            <li id="sel_maker1" class="maker_cnt">
                                            <a href="javascript:void(0);" class="listTap_on_clear" onclick="reqVos('SMPH1012');panel.dispBrand(false, 1);">
                                                <div class="listTap__txtBox  listTap__txtBox--clear"> 
                                                    <span class="listTap__txt_main1" id="selectedCar1">指定なし</span>
                                                    <input type="hidden" value="" id="BRDC1" name="BRDC1">
                                                    <input type="hidden" value="" id="CARC1" name="CARC1">
                                                </div>
                                                <div class="listBtn--clear"><button class="btnCmn btn_small btn_clear" onclick="panel.delmaker(1);event.stopPropagation();return false;">クリア</button></div>
                                            </a>
                                        </li>
                                                                    </ul>
                            </li>
                            <li class="list_grdSelect">
                                <a href="javascript:void(0);" onclick="panellist.dispGrade();setNoDispfooterId('gradeSelect_SLock');" class="listTap_on">
                                    <p class="selectTtl">モデル・グレード</p>
                                    <p class="subTxt" id="selectedGrade">指定なし</p>
                                </a>
                                <input type="hidden" value="" id="GRADE_NAME_CD" name="GRADE_NAME_CD">
                            </li>
                    </ul></section>
                    <section>
                        <h2 class="hdd2nd">車の年式・状態</h2>
                        <ul class="searchList">
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">年式</span>
                                    <p class="combo2">
                                        </p><fieldset>
                                            <select name="YMIN" id="YMIN" style="width:130px; height:30px;">
                                                                                        <option label="下限なし" value="" selected="selected">下限なし</option>
                                        <option label="H28(2016)年" value="2016">H28(2016)年</option>
                                        <option label="H27(2015)年" value="2015">H27(2015)年</option>
                                        <option label="H26(2014)年" value="2014">H26(2014)年</option>
                                        <option label="H25(2013)年" value="2013">H25(2013)年</option>
                                        <option label="H24(2012)年" value="2012">H24(2012)年</option>
                                        <option label="H23(2011)年" value="2011">H23(2011)年</option>
                                        <option label="H22(2010)年" value="2010">H22(2010)年</option>
                                        <option label="H21(2009)年" value="2009">H21(2009)年</option>
                                        <option label="H20(2008)年" value="2008">H20(2008)年</option>
                                        <option label="H19(2007)年" value="2007">H19(2007)年</option>
                                        <option label="H18(2006)年" value="2006">H18(2006)年</option>
                                        <option label="H17(2005)年" value="2005">H17(2005)年</option>
                                        <option label="H16(2004)年" value="2004">H16(2004)年</option>
                                        <option label="H15(2003)年" value="2003">H15(2003)年</option>
                                        <option label="H14(2002)年" value="2002">H14(2002)年</option>
                                        <option label="H13(2001)年" value="2001">H13(2001)年</option>
                                        <option label="H12(2000)年" value="2000">H12(2000)年</option>
                                        <option label="H11(1999)年" value="1999">H11(1999)年</option>
                                        <option label="H10(1998)年" value="1998">H10(1998)年</option>
                                        <option label="H09(1997)年" value="1997">H09(1997)年</option>
                                        <option label="H08(1996)年" value="1996">H08(1996)年</option>
                                        <option label="H07(1995)年" value="1995">H07(1995)年</option>
                                        <option label="H06(1994)年" value="1994">H06(1994)年</option>
                                        <option label="H05(1993)年" value="1993">H05(1993)年</option>
                                        <option label="H04(1992)年" value="1992">H04(1992)年</option>
                                        <option label="H03(1991)年" value="1991">H03(1991)年</option>
                                        <option label="H02(1990)年" value="1990">H02(1990)年</option>
                                        <option label="H01(1989)年" value="1989">H01(1989)年</option>

                                            </select>
                                            <span style="height:35px; line-height:35px;">&nbsp;～&nbsp;</span>
                                            <select name="YMAX" id="YMAX" style="width:130px; height:30px;">
                                                                                        <option label="上限なし" value="" selected="selected">上限なし</option>
                                        <option label="H28(2016)年" value="2016">H28(2016)年</option>
                                        <option label="H27(2015)年" value="2015">H27(2015)年</option>
                                        <option label="H26(2014)年" value="2014">H26(2014)年</option>
                                        <option label="H25(2013)年" value="2013">H25(2013)年</option>
                                        <option label="H24(2012)年" value="2012">H24(2012)年</option>
                                        <option label="H23(2011)年" value="2011">H23(2011)年</option>
                                        <option label="H22(2010)年" value="2010">H22(2010)年</option>
                                        <option label="H21(2009)年" value="2009">H21(2009)年</option>
                                        <option label="H20(2008)年" value="2008">H20(2008)年</option>
                                        <option label="H19(2007)年" value="2007">H19(2007)年</option>
                                        <option label="H18(2006)年" value="2006">H18(2006)年</option>
                                        <option label="H17(2005)年" value="2005">H17(2005)年</option>
                                        <option label="H16(2004)年" value="2004">H16(2004)年</option>
                                        <option label="H15(2003)年" value="2003">H15(2003)年</option>
                                        <option label="H14(2002)年" value="2002">H14(2002)年</option>
                                        <option label="H13(2001)年" value="2001">H13(2001)年</option>
                                        <option label="H12(2000)年" value="2000">H12(2000)年</option>
                                        <option label="H11(1999)年" value="1999">H11(1999)年</option>
                                        <option label="H10(1998)年" value="1998">H10(1998)年</option>
                                        <option label="H09(1997)年" value="1997">H09(1997)年</option>
                                        <option label="H08(1996)年" value="1996">H08(1996)年</option>
                                        <option label="H07(1995)年" value="1995">H07(1995)年</option>
                                        <option label="H06(1994)年" value="1994">H06(1994)年</option>
                                        <option label="H05(1993)年" value="1993">H05(1993)年</option>
                                        <option label="H04(1992)年" value="1992">H04(1992)年</option>
                                        <option label="H03(1991)年" value="1991">H03(1991)年</option>
                                        <option label="H02(1990)年" value="1990">H02(1990)年</option>
                                        <option label="H01(1989)年" value="1989">H01(1989)年</option>

                                            </select>
                                        </fieldset>
                                    <p></p>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">走行距離</span>
                                    <p class="combo1">
                                        <select name="SMAX" id="SMAX">
                                                                                    <option label="上限なし" value="" selected="selected">上限なし</option>
                                        <option label="～5000Km" value="5000">～5000Km</option>
                                        <option label="～1万Km" value="10000">～1万Km</option>
                                        <option label="～2万Km" value="20000">～2万Km</option>
                                        <option label="～3万Km" value="30000">～3万Km</option>
                                        <option label="～4万Km" value="40000">～4万Km</option>
                                        <option label="～5万Km" value="50000">～5万Km</option>
                                        <option label="～6万Km" value="60000">～6万Km</option>
                                        <option label="～7万Km" value="70000">～7万Km</option>
                                        <option label="～8万Km" value="80000">～8万Km</option>
                                        <option label="～9万Km" value="90000">～9万Km</option>
                                        <option label="～10万Km" value="100000">～10万Km</option>

                                        </select>
                                    </p>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">車検残</span>
                                    <p class="combo1">
                                        <select name="SZAN" id="SZAN">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="半年以上" value="6">半年以上</option>
                                        <option label="１年以上" value="12">１年以上</option>
                                        <option label="２年以上" value="24">２年以上</option>

                                        </select>
                                    </p>
                                </div><!--noBtnList-->
                            </li>
                        </ul>
                        <ul class="checkList" id="checkList01">
                            <li>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="REP0" id="REP0">
                                    <label onclick="panel.onCheck('REP0')">修復歴無し</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="NSF1" id="NSF1">
                                    <label onclick="panel.onCheck('NSF1')">禁煙車</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="WOF1" id="WOF1">
                                    <label onclick="panel.onCheck('WOF1')">ワンオーナー</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="NCAR" value="1" id="NCAR1">
                                    <label onclick="panel.onCheck('NCAR1')">新車物件</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="RNU1" id="RNU1">
                                    <label onclick="panel.onCheck('RNU1')">登録(届出)済未使用車</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="TTK1" id="TTK1">
                                    <label onclick="panel.onCheck('TTK1')">定期点検記録簿</label>
                                </span>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h2 class="hdd2nd">車のタイプ</h2>
                        <ul class="searchList">
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">本体色</span>
                                    <ul id="colorList1">
                                        <li id="btn_WH"><input type="checkbox" id="WH" value="" onclick="panellist.getColor('CL', 'WH', this)"><label onclick="panellist.getColor('CL', 'WH', this)"></label></li>
                                        <li id="btn_BK"><input type="checkbox" id="BK" value="" onclick="panellist.getColor('CL', 'BK', this)"><label onclick="panellist.getColor('CL', 'BK', this)"></label></li>
                                        <li id="btn_GL"><input type="checkbox" id="GL" value="" onclick="panellist.getColor('CL', 'GL', this)"><label onclick="panellist.getColor('CL', 'GL', this)"></label></li>
                                        <li id="btn_PL"><input type="checkbox" id="PL" value="" onclick="panellist.getColor('CL', 'PL', this)"><label onclick="panellist.getColor('CL', 'PL', this)"></label></li>
                                        <li id="btn_GD"><input type="checkbox" id="GD" value="" onclick="panellist.getColor('CL', 'GD', this)"><label onclick="panellist.getColor('CL', 'GD', this)"></label></li>
                                        <li id="btn_SI"><input type="checkbox" id="SI" value="" onclick="panellist.getColor('CL', 'SI', this)"><label onclick="panellist.getColor('CL', 'SI', this)"></label></li>
                                        <li id="btn_RD"><input type="checkbox" id="RD" value="" onclick="panellist.getColor('CL', 'RD', this)"><label onclick="panellist.getColor('CL', 'RD', this)"></label></li>
                                        <li id="btn_BL"><input type="checkbox" id="BL" value="" onclick="panellist.getColor('CL', 'BL', this)"><label onclick="panellist.getColor('CL', 'BL', this)"></label></li>
                                        <li id="btn_GR"><input type="checkbox" id="GR" value="" onclick="panellist.getColor('CL', 'GR', this)"><label onclick="panellist.getColor('CL', 'GR', this)"></label></li>
                                        <li id="btn_BR"><input type="checkbox" id="BR" value="" onclick="panellist.getColor('CL', 'BR', this)"><label onclick="panellist.getColor('CL', 'BR', this)"></label></li>
                                        <li id="btn_YL"><input type="checkbox" id="YL" value="" onclick="panellist.getColor('CL', 'YL', this)"><label onclick="panellist.getColor('CL', 'YL', this)"></label></li>
                                        <li id="btn_OR"><input type="checkbox" id="OR" value="" onclick="panellist.getColor('CL', 'OR', this)"><label onclick="panellist.getColor('CL', 'OR', this)"></label></li>
                                        <li id="btn_PK"><input type="checkbox" id="PK" value="" onclick="panellist.getColor('CL', 'PK', this)"><label onclick="panellist.getColor('CL', 'PK', this)"></label></li>
                                        <li id="btn_PU"><input type="checkbox" id="PU" value="" onclick="panellist.getColor('CL', 'PU', this)"><label onclick="panellist.getColor('CL', 'PU', this)"></label></li>
                                        <li id="btn_ZZ"><input type="checkbox" id="ZZ" value="" onclick="panellist.getColor('CL', 'ZZ', this)"><label onclick="panellist.getColor('CL', 'ZZ', this)"></label></li>
                                    </ul><!--colorList1-->
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="reqVos('SMPH1042');panel.dispBodyType();" class="listTap_on">
                                    <p class="selectTtl">ボディタイプ</p>
                                    <p class="subTxt" id="selectedBodyType">指定なし</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="checkList">
                            <li>
                                <span>
                                    <input type="checkbox" name="SP" value="D" id="SPD">
                                    <label onclick="panel.onCheck('SPD')">国産車</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="SP" value="Y" id="SPY">
                                    <label onclick="panel.onCheck('SPY')">輸入車</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="SP" value="H" id="SPH">
                                    <label onclick="panel.onCheck('SPH')">ハイブリッド</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="SP" value="F" id="SPF">
                                    <label onclick="panel.onCheck('SPF')">福祉車両</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="SP" value="K" id="SPK">
                                    <label onclick="panel.onCheck('SPK')">軽自動車</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="NOTKEI" value="1" id="NOTKEI1">
                                    <label onclick="panel.onCheck('NOTKEI1')">軽自動車を除く</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="SP" value="S" id="SPS">
                                    <label onclick="panel.onCheck('SPS')">商用車・バン</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="NOTBV" value="1" id="NOTBV1">
                                    <label onclick="panel.onCheck('NOTBV1')" class="kaigyouLabel">商用車・<br>バンを除く</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="CLD1" id="CLD1">
                                    <label onclick="panel.onCheck('CLD1')">寒冷地仕様車</label>
                                </span>
                                <span>
                                    <input type="checkbox" name="OPTCD" value="TUB1" id="TUB1">
                                    <label onclick="panel.onCheck('TUB1')">過給器設定モデル</label>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <input type="checkbox" name="SP" value="C" id="SPC">
                                    <label onclick="panel.onCheck('SPC')">キャンピングカー</label>
                                </span>
                                <span>
                                </span>
                            </li>
                        </ul><!--checkList04-->
                        <ul class="searchList">
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">排気量</span>
                                    <p class="combo2">
                                        </p><fieldset>
                                            <select name="HMIN" id="HMIN" style="width:130px; height:30px;">
                                                                                        <option label="下限なし" value="" selected="selected">下限なし</option>
                                        <option label="550" value="550">550</option>
                                        <option label="660" value="660">660</option>
                                        <option label="800" value="800">800</option>
                                        <option label="1000" value="1000">1000</option>
                                        <option label="1100(1.1L)" value="1100">1100(1.1L)</option>
                                        <option label="1200(1.2L)" value="1200">1200(1.2L)</option>
                                        <option label="1300(1.3L)" value="1300">1300(1.3L)</option>
                                        <option label="1400(1.4L)" value="1400">1400(1.4L)</option>
                                        <option label="1500(1.5L)" value="1500">1500(1.5L)</option>
                                        <option label="1600(1.6L)" value="1600">1600(1.6L)</option>
                                        <option label="1700(1.7L)" value="1700">1700(1.7L)</option>
                                        <option label="1800(1.8L)" value="1800">1800(1.8L)</option>
                                        <option label="1900(1.9L)" value="1900">1900(1.9L)</option>
                                        <option label="2000(2.0L)" value="2000">2000(2.0L)</option>
                                        <option label="2100(2.1L)" value="2100">2100(2.1L)</option>
                                        <option label="2200(2.2L)" value="2200">2200(2.2L)</option>
                                        <option label="2300(2.3L)" value="2300">2300(2.3L)</option>
                                        <option label="2400(2.4L)" value="2400">2400(2.4L)</option>
                                        <option label="2500(2.5L)" value="2500">2500(2.5L)</option>
                                        <option label="2600(2.6L)" value="2600">2600(2.6L)</option>
                                        <option label="2700(2.7L)" value="2700">2700(2.7L)</option>
                                        <option label="2800(2.8L)" value="2800">2800(2.8L)</option>
                                        <option label="2900(2.9L)" value="2900">2900(2.9L)</option>
                                        <option label="3000(3.0L)" value="3000">3000(3.0L)</option>
                                        <option label="3500(3.5L)" value="3500">3500(3.5L)</option>
                                        <option label="4000(4.0L)" value="4000">4000(4.0L)</option>
                                        <option label="4500(4.5L)" value="4500">4500(4.5L)</option>
                                        <option label="5000(5.0L)" value="5000">5000(5.0L)</option>
                                        <option label="5500(5.5L)" value="5500">5500(5.5L)</option>
                                        <option label="6000(6.0L)" value="6000">6000(6.0L)</option>

                                            </select>
                                            <span style="height:35px; line-height:35px;">&nbsp;～&nbsp;</span>
                                            <select name="HMAX" id="HMAX" style="width:130px; height:30px;">
                                                                                        <option label="上限なし" value="" selected="selected">上限なし</option>
                                        <option label="550" value="550">550</option>
                                        <option label="660" value="660">660</option>
                                        <option label="800" value="800">800</option>
                                        <option label="1000" value="1000">1000</option>
                                        <option label="1100(1.1L)" value="1100">1100(1.1L)</option>
                                        <option label="1200(1.2L)" value="1200">1200(1.2L)</option>
                                        <option label="1300(1.3L)" value="1300">1300(1.3L)</option>
                                        <option label="1400(1.4L)" value="1400">1400(1.4L)</option>
                                        <option label="1500(1.5L)" value="1500">1500(1.5L)</option>
                                        <option label="1600(1.6L)" value="1600">1600(1.6L)</option>
                                        <option label="1700(1.7L)" value="1700">1700(1.7L)</option>
                                        <option label="1800(1.8L)" value="1800">1800(1.8L)</option>
                                        <option label="1900(1.9L)" value="1900">1900(1.9L)</option>
                                        <option label="2000(2.0L)" value="2000">2000(2.0L)</option>
                                        <option label="2100(2.1L)" value="2100">2100(2.1L)</option>
                                        <option label="2200(2.2L)" value="2200">2200(2.2L)</option>
                                        <option label="2300(2.3L)" value="2300">2300(2.3L)</option>
                                        <option label="2400(2.4L)" value="2400">2400(2.4L)</option>
                                        <option label="2500(2.5L)" value="2500">2500(2.5L)</option>
                                        <option label="2600(2.6L)" value="2600">2600(2.6L)</option>
                                        <option label="2700(2.7L)" value="2700">2700(2.7L)</option>
                                        <option label="2800(2.8L)" value="2800">2800(2.8L)</option>
                                        <option label="2900(2.9L)" value="2900">2900(2.9L)</option>
                                        <option label="3000(3.0L)" value="3000">3000(3.0L)</option>
                                        <option label="3500(3.5L)" value="3500">3500(3.5L)</option>
                                        <option label="4000(4.0L)" value="4000">4000(4.0L)</option>
                                        <option label="4500(4.5L)" value="4500">4500(4.5L)</option>
                                        <option label="5000(5.0L)" value="5000">5000(5.0L)</option>
                                        <option label="5500(5.5L)" value="5500">5500(5.5L)</option>
                                        <option label="6000(6.0L)" value="6000">6000(6.0L)</option>

                                            </select>
                                        </fieldset>
                                    <p></p>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">ミッション</span>
                                        <ul class="toggleBtnBox3">
                                            <li>
                                                <input type="radio" id="rdBtn01" name="SLST" value="" checked="">
                                                <label onclick="panel.onCheck('rdBtn01')">指定無</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="rdBtn02" name="SLST" value="AT">
                                                <label onclick="panel.onCheck('rdBtn02')">AT</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="rdBtn03" name="SLST" value="MT">
                                                <label onclick="panel.onCheck('rdBtn03')">MT</label>
                                            </li>
                                        </ul>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">駆動方式</span>
                                    <ul class="toggleBtnBox3">
                                        <li>
                                            <input type="radio" id="rdBtn07" name="KUDO" value="" checked="">
                                            <label onclick="panel.onCheck('rdBtn07')">指定無</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="rdBtn08" name="KUDO" value="4WD0">
                                            <label onclick="panel.onCheck('rdBtn08')">2WD</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="rdBtn09" name="KUDO" value="4WD1">
                                            <label onclick="panel.onCheck('rdBtn09')">4WD</label>
                                        </li>
                                    </ul>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">ハンドル</span>
                                    <ul class="toggleBtnBox3">
                                        <li>
                                            <input type="radio" id="rdBtn04" name="ST" value="" checked="">
                                            <label for="rdBtn04" onclick="panel.onCheck('rdBtn04')">指定無</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="rdBtn05" name="ST" value="L">
                                            <label onclick="panel.onCheck('rdBtn05')">左</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="rdBtn06" name="ST" value="R">
                                            <label onclick="panel.onCheck('rdBtn06')">右</label>
                                        </li>
                                    </ul>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">エンジン種別</span>
                                    <p class="combo1">
                                        <select name="FUEL" id="FUEL">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="ガソリン" value="1">ガソリン</option>
                                        <option label="ディーゼル" value="2">ディーゼル</option>
                                        <option label="電気" value="4">電気</option>
                                        <option label="その他" value="9">その他</option>

                                        </select>
                                    </p>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">乗車定員</span>
                                    <p class="combo1">
                                        <select name="TEIIN" id="TEIIN">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="2名" value="2">2名</option>
                                        <option label="3名" value="3">3名</option>
                                        <option label="4名" value="4">4名</option>
                                        <option label="5名" value="5">5名</option>
                                        <option label="6名" value="6">6名</option>
                                        <option label="7名" value="7">7名</option>
                                        <option label="8名" value="8">8名</option>
                                        <option label="9名" value="9">9名</option>
                                        <option label="10名" value="10">10名</option>

                                        </select>
                                    </p>
                                </div><!--noBtnList-->
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">ドア数</span>
                                    <p class="combo1">
                                        <select name="DNUM" id="DNUM">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="2ドア" value="2">2ドア</option>
                                        <option label="3ドア" value="3">3ドア</option>
                                        <option label="4ドア" value="4">4ドア</option>
                                        <option label="5ドア" value="5">5ドア</option>

                                        </select>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">スライドドア</span>
                                    <p class="combo1">
                                        <select name="SLIDE" id="SLIDE">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="両側電動" value="BES1">両側電動</option>
                                        <option label="両側手動" value="BHS1">両側手動</option>
                                        <option label="片側電動" value="OES1">片側電動</option>
                                        <option label="片側手動" value="OHS1">片側手動</option>
                                        <option label="両側(片側のみ電動)" value="OOS1">両側(片側のみ電動)</option>

                                        </select>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h2 class="hdd2nd">装備仕様</h2>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'baseEq')" id="baseEqHd">基本装備</h3>
                            <ul class="checkList" style="display:none;" id="baseEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="KRS1" id="KRS1">
                                        <label onclick="panel.onCheck('KRS1')" class="kaigyouLabel">キーレス<br>エントリー</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="SMK1" id="SMK1">
                                        <label onclick="panel.onCheck('SMK1')">スマートキー</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="PWW1" id="PWW1">
                                        <label onclick="panel.onCheck('PWW1')">パワーウィンドウ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="PWS1" id="PWS1">
                                        <label onclick="panel.onCheck('PWS1')">パワステ</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ARC1" id="ARC1">
                                        <label onclick="panel.onCheck('ARC1')" class="kaigyouLabel">エアコン・<br>クーラー</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="WAR1" id="WAR1">
                                        <label onclick="panel.onCheck('WAR1')">Wエアコン</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ETC1" id="ETC1">
                                        <label onclick="panel.onCheck('ETC1')">ETC</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="STL1" id="STL1">
                                        <label onclick="panel.onCheck('STL1')">盗難防止装置</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="SRF1" id="SRF1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('SRF1')">サンルーフ・<br>ガラスルーフ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="RSM1" id="RSM1">
                                        <label onclick="panel.onCheck('RSM1')">後席モニター</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="HID1" id="HID1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('HID1')">ディスチャージド<br>ヘッドランプ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="LED1" id="LED1">
                                        <label onclick="panel.onCheck('LED1')">LEDヘッドライト</label>
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'dressEq')" id="dressEqHd">ドレスアップ装備</h3>
                            <ul class="checkList" style="display:none;" id="dressEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="FEF1" id="FEF1">
                                        <label onclick="panel.onCheck('FEF1')">フルエアロ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ROD1" id="ROD1">
                                        <label onclick="panel.onCheck('ROD1')">ローダウン</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="AIH1" id="AIH1">
                                        <label onclick="panel.onCheck('AIH1')">アルミホイール</label>
                                    </span>
                                    <span></span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'sheetEq')" id="sheetEqHd">シート関連装備</h3>
                            <ul class="checkList" style="display:none;" id="sheetEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="FSH1" id="FSH1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('FSH1')">フルフラット<br>シート</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="BSH1" id="BSH1">
                                        <label onclick="panel.onCheck('BSH1')">ベンチシート</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="3SH1" id="3SH1">
                                        <label onclick="panel.onCheck('3SH1')">３列シート</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ESH1" id="ESH1">
                                        <label onclick="panel.onCheck('ESH1')">電動シート</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="WTR1" id="WTR1">
                                        <label onclick="panel.onCheck('WTR1')">ウォークスルー</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="OTM1" id="OTM1">
                                        <label onclick="panel.onCheck('OTM1')">オットマン</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="SHH1" id="SHH1">
                                        <label onclick="panel.onCheck('SHH1')">シートヒーター</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="SHA1" id="SHA1">
                                        <label onclick="panel.onCheck('SHA1')">シートエアコン</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="HKS1" id="HKS1">
                                        <label onclick="panel.onCheck('HKS1')">本革シート</label>
                                    </span>
                                    <span></span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'safeEq')" id="safeEqHd">安全性能・サポート装備</h3>
                            <ul class="checkList" style="display:none;" id="safeEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ABS1" id="ABS1">
                                        <label onclick="panel.onCheck('ABS1')">ABS</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="PCS1" id="PCS1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('PCS1')">衝突被害軽減<br>ブレーキ</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="CRS1" id="CRS1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('CRS1')">クルーズ<br>コントロール</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="PRK1" id="PRK1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('PRK1')">パーキング<br>アシスト</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ESC1" id="ESC1">
                                        <label onclick="panel.onCheck('ESC1')">横滑り防止装置</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="OBS1" id="OBS1">
                                        <label onclick="panel.onCheck('OBS1')">障害物センサー</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ARU1" id="ARU1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('ARU1')">運転席<br>エアバッグ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ARJ1" id="ARJ1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('ARJ1')">助手席<br>エアバッグ</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ARS1" id="ARS1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('ARS1')">サイド<br>エアバッグ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="CRT1" id="CRT1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('CRT1')">カーテン<br>エアバッグ</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="FRM1" id="FRM1">
                                        <label onclick="panel.onCheck('FRM1')">フロントカメラ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="SDK1" id="SDK1">
                                        <label onclick="panel.onCheck('SDK1')">サイドカメラ</label>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="BMF1" id="BMF1">
                                        <label onclick="panel.onCheck('BMF1')">バックカメラ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="MLT1" id="MLT1">
                                        <label onclick="panel.onCheck('MLT1')">全周囲カメラ</label>
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'envEq')" id="envEqHd">環境系装備</h3>
                            <ul class="checkList" style="display:none;" id="envEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="IDL1" id="IDL1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('IDL1')">アイドリング<br>ストップ</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="ECO1" id="ECO1">
                                        <label class="kaigyouLabel" onclick="panel.onCheck('ECO1')">エコカー減税<br>対象車</label>
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h3 class="hdd3rd_3_Close" onclick="panel.slide(this.id,'welEq')" id="welEqHd">福祉系装備</h3>
                            <ul class="checkList" style="display:none;" id="welEq">
                                <li>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="POW1" id="POW1">
                                        <label onclick="panel.onCheck('POW1')">電動リアゲート</label>
                                    </span>
                                    <span>
                                        <input type="checkbox" name="OPTCD" value="LFT1" id="LFT1">
                                        <label onclick="panel.onCheck('LFT1')">リフトアップ</label>
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <ul class="searchList">
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">カーナビ/TV/DVD</span>
                                    <p class="combo1">
                                        <select name="CNAVI" id="CNAVI">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="カーナビ付き" value="1">カーナビ付き</option>
                                        <option label="CDナビ" value="2">CDナビ</option>
                                        <option label="DVDナビ" value="3">DVDナビ</option>
                                        <option label="HDDナビ" value="4">HDDナビ</option>
                                        <option label="メモリーナビ他" value="5">メモリーナビ他</option>
                                        <option label="TV付き" value="6">TV付き</option>
                                        <option label="ワンセグTV" value="8">ワンセグTV</option>
                                        <option label="フルセグTV" value="9">フルセグTV</option>
                                        <option label="DVD再生" value="10">DVD再生</option>
                                        <option label="ブルーレイ再生" value="11">ブルーレイ再生</option>

                                        </select>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">オーディオ関連装備</span>
                                    <p class="combo1">
                                        <select name="AUD" id="AUD">
                                                                                    <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="CD" value="1">CD</option>
                                        <option label="MD" value="2">MD</option>
                                        <option label="CD＆MD" value="3">CD＆MD</option>
                                        <option label="ミュージックサーバー" value="4">ミュージックサーバー</option>
                                        <option label="ミュージックプレイヤー接続可" value="5">ミュージックプレイヤー接続可</option>

                                        </select>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h2 class="hdd2nd">プラン・認定・保証</h2>
                        <ul class="checkList">
                            <li>
                                <span><input type="checkbox" name="PLAN" value="1" id="PLAN1"><label onclick="panel.onCheck('PLAN1')">購入プラン付き</label></span>
                                <span><input type="checkbox" name="NINTEI" value="1" id="NINTEI1"><label onclick="panel.onCheck('NINTEI1')">カーセンサー認定車</label></span>
                            </li>
                        </ul>
                        <ul class="searchList">
                            <li>
                                <div class="noBtnList">
                                    <span class="selectTtl">各種保証</span>
                                    <p class="check_CSA"><input type="checkbox" name="CSHOSHO" value="1" id="CSHOSHO1"><label onclick="panel.onCheck('CSHOSHO1')" class="kaigyouLabel">カーセンサーアフター保証対象車</label></p>
                                    <p class="combo1">
                                    <select name="HOSHO" id="HOSHO">
                                                                                <option label="指定なし" value="" selected="selected">指定なし</option>
                                        <option label="保証あり" value="1">保証あり</option>
                                        <option label="カーセンサーアフター保証あり" value="4">カーセンサーアフター保証あり</option>
                                        <option label="ディーラー保証あり" value="2">ディーラー保証あり</option>
                                        <option label="販売店保証あり" value="3">販売店保証あり</option>

                                    </select>
                                    </p>
                                </div><!-- /.noBtnList -->
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h2 class="hdd2nd">販売店の種類</h2>
                            <ul class="checkList">
                                <li>
                                    <span><input type="checkbox" name="DLR" value="1" id="DLR1"><label onclick="panel.onCheck('DLR1')">メーカー系販売店</label></span>
                                </li>
                            </ul>
                    </section>

    <!--絞込FWD検索追加 -->
    <section>
      <h2 class="hdd2nd">フリーワード</h2>
      <div class="searchBoxSideBtn-b">
        <input data-role="none" type="text" name="freewordTxt" id="freewordTxt" value="" autocomplete="off" placeholder="車名、販売店名などで中古車検索" onblur="panellist.blurFreeword();">
      </div>
                <!--    <div id="id_fwd_add" class="searchBoxDetail-b" style="display:none;"></div>-->
    </section>
    <!--/絞込FWD検索追加<-->

    <div id="lockline_drill"></div>


                    <input type="hidden" value="SMPH1051" id="STID" name="STID">
                    <input type="hidden" value="" id="BRDC" name="BRDC">
                    <input type="hidden" value="" id="CARC" name="CARC">
                    <input type="hidden" value="" id="FMCC" name="FMCC">
                    <input type="hidden" value="" id="GRDKC" name="GRDKC">
                    <input type="hidden" value="" id="AR" name="AR">
                    <input type="hidden" value="" id="CITY" name="CITY">
                    <input type="hidden" value="" id="BT" name="BT">
                    <input type="hidden" value="" id="OPTCD" name="OPTCD">
                    <input type="hidden" value="" id="CL" name="CL">
                    <input type="hidden" value="" id="SP" name="SP">
                    <input type="hidden" value="" id="KW" name="KW">
                    <input type="hidden" value="" id="SHOP" name="SHOP">
                    <input type="hidden" value="SMPH1012" id="MakerSTID" name="MakerSTID">
                    <input type="hidden" value="SMPH1022" id="ShashuSTID" name="ShashuSTID">
                    <input type="hidden" value="" id="FAIR" name="FAIR">
                    <input type="hidden" value="" id="NOW" name="NOW">
                    <input type="hidden" value="" id="top" name="top">
                </form>
            </section>
