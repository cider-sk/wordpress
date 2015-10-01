<?php get_header("sp"); ?>
    <div class="container">

        <div class="starter-template cat">
            <section class="siteBody">

            
                <header class="pageHeader">
                    <h1 class="pageTtl_long">
                                                                                                                                                                                                                    &nbsp;&nbsp;test                                        </h1>

                

                    <form class="sm-SearchBox_A" name="sm_area_price_search" id="sm_area_price_search" action="" method="get">
<input type="hidden" name="cftsearch_submit" value="1">
<input type="hidden" name="post_type" value="post">

                            <select name="cftsearch[value][1][]" id="sm_price">
                                <option label="価格上限" value="">価格下限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>
                            <select name="cftsearch[value][2][]" id="sm_price">
                                <option label="価格上限" value="">価格上限</option>
                                <option label="5万円" value="5">5万円</option>
                                <option label="10万円" value="10">10万円</option>
                                <option label="15万円" value="15">15万円</option>
                                <option label="20万円" value="20">20万円</option>
                                <option label="25万円" value="25">25万円</option>
                                <option label="30万円" value="30">30万円</option>
                                <option label="35万円" value="35">35万円</option>
                                <option label="40万円" value="40">40万円</option>
                                <option label="45万円" value="45">45万円</option>
                                <option label="50万円" value="50">50万円</option>
                                <option label="60万円" value="60">60万円</option>
                                <option label="70万円" value="70">70万円</option>
                                <option label="80万円" value="80">80万円</option>
                                <option label="90万円" value="90">90万円</option>
                                <option label="100万円" value="100">100万円</option>
                                <option label="120万円" value="120">120万円</option>
                                <option label="140万円" value="140">140万円</option>
                                <option label="160万円" value="160">160万円</option>
                                <option label="180万円" value="180">180万円</option>
                                <option label="200万円" value="200">200万円</option>
                                <option label="250万円" value="250">250万円</option>
                            </select>

</div>
                            <button type="submit" id="sm_area_price_search_act_top" data-role="none">絞込</button>
                        </div><!-- /.searchBoxSideBtn -->
                    </form>
                    <div id="sm_usedcar_search" style="display:none;">
                        <div class="searchTitle">下記条件で絞込</div>
                        <div class="sm-SearchBox_C">
                            <a href="#" class="conditions" id="sm_fmcc_top">最新（現行）モデル</a>
                            <a href="#" class="conditions" id="sm_soukou_top">走行距離5000km以下</a>
                            <a href="#" class="conditions" id="sm_optrep_top">修復歴なし</a>
                            <a href="#" class="conditions" id="sm_optrnu_top">登録(届出)済未使用車</a>
                        </div>
                    </div>              
</header>
                        <div class="pageBody">
                <div class="bknAllTopBar" style="display:none;">
                                    <p class="toolBar_result">12<span>台</span></p>
                    <p class="toolBar_Btn w70"><a href="/usedcar/smph_others.php?page=where&amp;PTSTID=SMPH0001&amp;KW=test&amp;top=1" onclick="ShiborikomiLog(1);" rel="nofollow">絞り込み<br>▼</a></p>
                    <p class="toolBar_Btn w70"><a href="javascript:void(0);" class="sort-btn" id="menuBtn_sort1" onclick="sort('', 1);">並べ替え<br>▼</a></p>
                    <input type="hidden" id="input_notice_mail_url" value="https://www.carsensor.net/usedcar/smph_others.php?page=mailrequest_input&amp;KW=test&amp;top=1">
                                </div>
                <!-- /.bknAllTopBar -->

            

     <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
                                <div class="bknBox bknBox_A" id="bkn_CU3933292882">
                                    <a href="<?php the_permalink(); ?>">
                        <div class="bknBox_top">
                                                        <div class="nameBar">
                                <b class="name_maker"><?php echo get_post_meta($post->ID, "model", true); ?></b>
                                                                                                <h2 class="name_car"><?php the_title(); ?></h2>
                                                            </div>
                                                    </div><!-- /.bknBox_top -->
                        <div class="bknBox_mid">
                            <div class="box_L">
                                <figure>
                                                                    <img height="90" width="120" src="<?php 
 $imgs = get_post_meta($post->ID, "imgList", true); 
$images = explode(",", $imgs);
echo $images[0];

?>" alt="<?php the_title(); ?>" class="bknImg" style="display: block;">
                                                                </figure>
                                <ul class="bknAll_icons">
                                                                                                                                            </ul>
                            </div><!-- /.box_L -->
                            <div class="box_R">
                                <table cellpadding="0" cellspacing="0" class="bknInfoTbl">
                                <tbody>
                                    <tr>
                                        <th>本体</th>
                                        <td class="price_hontai"><b><?php $value=get_post_meta($post->ID,'value',true); valueFont($value); ?></b><small>万円</small></td>
                                        <th>総額</th>
                                        <td class="price_sougaku"><b><?php $value=get_post_meta($post->ID,'sum-value',true); valueFont($value); ?></b></td>
                                    </tr>
                                    <tr>
                                        <th>年式</th>
                                        <td><b><?php echo $year=get_post_meta($post->ID,'year',true); ?></b>年</td>
                                        <th>走行</th>
                                        <td><b><?php echo get_post_meta($post->ID,'distance',true); ?></b>km</td>
                                    </tr>
                                    <tr>
                                        <th>修復</th>
                                        <td><?php 
echo get_post_meta($post->ID, "fix-history", true); ?></td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td colspan="3"><?php $blogusers = get_users('blog_id='.$post->ID);
$user_id = $blogusers[0]->ID;
echo $address = get_user_meta($user_id, "address", true); ?></td>
                                    </tr>
                                </tbody>
                                </table>
                                                                        <button id="bknDtlFixedBtn2_CU3933292882_1"  onclick="location.href='<?php the_permalink(); ?>#contact_form'; return false;" class="btn_inq" data-role="none"><i>無料</i><span>在庫確認・見積依頼</span></button>
                                                                        </div><!-- /.box_R -->
                            <!--  -->
                        </div><!-- /.bknBox_mid -->
<div class="fuel-fee" style="
    position: absolute;
    margin-top: -35px;
">
維持費<span style="color:red;font-size:18px;"><?php $fuel=get_post_meta($post->ID,'fuel',true); 
$fuel = (130*$fuel_array[$i])/$fuel;
echo number_format($fuel);?></span>円/月
</div>
                                            </a>
                </div><!-- /.bknBox_A -->

<?php endwhile; ?><?php else : ?>
<?php endif; wp_reset_query(); ?>
                                    
               
            
            
                <p class="pagenation"  style="display:none;">
                                <span class="noPage">最初</span><span class="noPage">&lt;</span><span class="pageNo">1p/1p</span><span class="noPage">&gt;</span><span class="noPage">最後</span>               </p>
                    <div class="sm-footerBox" id="sm_usedcar_search_footer" style="display:none;">
                        <div class="searchTitle"><span id="sm_shashu_name"></span>下記条件で絞込</div>
                        <div class="sm-SearchBox_C">
                            <a href="#" class="conditions" id="sm_fmcc_footer">最新（現行）モデル</a>
                            <a href="#" class="conditions" id="sm_soukou_footer">走行距離5000km以下</a>
                            <a href="#" class="conditions" id="sm_optrep_footer">修復歴なし</a>
                            <a href="#" class="conditions" id="sm_optrnu_footer">登録(届出)済未使用車</a>
                        </div>
                    </div>
                    <div class="refineLink" id="sm_opt_soukou" style="display:none;">
                        <p class="refineLink_title" id="sm_opt_soukou_txt"></p>
                        <button class="refineLink_btn" id="sm_opt_soukou_btn"></button>
                </div>  
            </div><!-- /.pageBody -->
        </section>
        </div>

    </div><!-- /.container -->
aaaa
<?php get_footer("sp"); ?>
