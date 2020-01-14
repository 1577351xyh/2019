

<div style="margin:16px;"></div>  
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
  <div id="post-body-content">
  
  <div class="panel panel-primary">

   <div class="panel-heading panel-toggle">
      <h5 class="panel-title"><?php echo __("Basic Settings","wp-autoblog"); ?></h5>
   </div>

      <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==1))echo 'style="display:none;"' ?>>
        <form id="form1"  method="post" action="admin.php?page=autoblog-task-setting">
          <input type="hidden" name="action" value="form1" />
          <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
          <input type="hidden" name="save_to_group" value="0" />

          <div class="panel-body" style="padding:0;margin:0;">
            <table class="table settingTable">
              <tr>
                <td class="setName">
                  <label><?php echo __("Task Name","wp-autoblog"); ?></label>
                </td>
                <td>
                  <input type="text"  name="name" class="form-control" placeholder="<?php echo __("Task Name","wp-autoblog"); ?>" value="<?php echo $CV0CGBU1ON45VOZVGZYL0574O213NPE1ELK2X5H98XJ1I28I6HY09116Q33JU2GHQCZ5195S93123ZOWZX2VYDM4XU2AQ10LXMJ316HT2RPA5TQYA5NA26SA8S205SY9411R405E13D73478F3A4C51824AD23CB50C1C60670C0F6302->name; ?>" />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Task Group","wp-autoblog"); ?></label>
                </td>
                <td>
                  <select class="input-default" name="group_id" >
                    <option value="0"   <?php if(($CV0CGBU1ON45VOZVGZYL0574O213NPE1ELK2X5H98XJ1I28I6HY09116Q33JU2GHQCZ5195S93123ZOWZX2VYDM4XU2AQ10LXMJ316HT2RPA5TQYA5NA26SA8S205SY9411R405E13D73478F3A4C51824AD23CB50C1C60670C0F6302->group_id)=='0') echo 'selected="true"'; ?> ><?php echo __('Default Group','autoblog'); ?></option>
                    <?php foreach($PE48QT1DWA8123E11284T9KR73988ZJ9EB02711M2N2937743F5FOFJY6515RXP0D2Q2612331D76F19471C03755301E836A950907 as $L80670MRG307C2364IVF4I36TM048288N36N649N6DBF93B3B84A94AA24823428CF9873D995079){ ?>
                      <option value="<?php echo $L80670MRG307C2364IVF4I36TM048288N36N649N6DBF93B3B84A94AA24823428CF9873D995079->id ?>" <?php if(($CV0CGBU1ON45VOZVGZYL0574O213NPE1ELK2X5H98XJ1I28I6HY09116Q33JU2GHQCZ5195S93123ZOWZX2VYDM4XU2AQ10LXMJ316HT2RPA5TQYA5NA26SA8S205SY9411R405E13D73478F3A4C51824AD23CB50C1C60670C0F6302->group_id)==($L80670MRG307C2364IVF4I36TM048288N36N649N6DBF93B3B84A94AA24823428CF9873D995079->id)) echo 'selected="true"'; ?> ><?php echo $L80670MRG307C2364IVF4I36TM048288N36N649N6DBF93B3B84A94AA24823428CF9873D995079->group_name ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("The max extraction post numbers for each time","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("0 means no limit","wp-autoblog"); ?></p>
                </td>
                <td>
                  <?php
 $W3L99632NC46342GWB4AN01812713V91DTWU6BT93U1R9A3AA80231107113BEC0BF00F4108ED385648 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6d\x61\x78\x5f\x66\x65\x74\x63\x68\x5f\x70\x6f\x73\x74\x5f\x6e\x75\x6d"]; if($W3L99632NC46342GWB4AN01812713V91DTWU6BT93U1R9A3AA80231107113BEC0BF00F4108ED385648==null){ $W3L99632NC46342GWB4AN01812713V91DTWU6BT93U1R9A3AA80231107113BEC0BF00F4108ED385648 = 0; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_fetch_post_num" id="max_fetch_post_num" value="<?php echo $W3L99632NC46342GWB4AN01812713V91DTWU6BT93U1R9A3AA80231107113BEC0BF00F4108ED385648; ?>" placeholder="">
                  </div>

                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Check Interval","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("In Automatically Tasks, how long intervals visit target site for check is it has new articles","wp-autoblog"); ?></p>
                </td>
                <td>
                  <div class="input-group" style="width:300px;">
                    <input type="text" class="form-control"  name="run_interval" id="run_interval" value="<?php echo $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x75\x6e\x5f\x69\x6e\x74\x65\x72\x76\x61\x6c"]; ?>" placeholder="<?php echo __("Minute","wp-autoblog"); ?>">
                    <div class="input-group-addon"><?php echo __("Minute","wp-autoblog"); ?></div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Fetch Interval","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("In Running Tasks, when fetched one article then wait how long seconds to fetch the next article","wp-autoblog"); ?></p>
                </td>
                <td>
                  <div class="input-group" style="width:300px;">
                    <input type="text" class="form-control"  name="post_interval" id="post_interval" value="<?php echo $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x6f\x73\x74\x5f\x69\x6e\x74\x65\x72\x76\x61\x6c"]; ?>" placeholder="<?php echo __("seconds","wp-autoblog"); ?>">
                    <div class="input-group-addon"><?php echo __("seconds","wp-autoblog"); ?></div>
                  </div>

                  <div style="margin-top:5px;padding: 3px;">

                    <input type="checkbox"  name="use_sleep_func" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x75\x73\x65\x5f\x73\x6c\x65\x65\x70\x5f\x66\x75\x6e\x63"]==1){ echo 'checked'; } ?>> <?php echo __("Use PHP sleep function","wp-autoblog"); ?>
                  </div>

                  <div style="margin-top:5px;padding: 3px;">
                    <?php echo __("In no special cases, the recommendation is set to 0","wp-autoblog"); ?>
                  </div>

                  <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x6f\x73\x74\x5f\x69\x6e\x74\x65\x72\x76\x61\x6c"]>0 && $O15T9HLH3IM9PVG8R51U5928L66HJH875S1AF8G5J55R4013Z8LK5T4W3F74JBGB38OB73X8DE9DE218XR5P8T85364924G229Z3BC7179659E53A0D71D8959D88398F40E2074313[0]==1){ ?>
                    <div style="margin-top:5px;padding: 3px;background-color: red;color: #FFFFFF;">
                      <?php echo __("With this option set, the Cron schedule task access triggers the update must also set [ the access interval to more than","wp-autoblog"); ?> <?php echo $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x6f\x73\x74\x5f\x69\x6e\x74\x65\x72\x76\x61\x6c"];?> <?php echo __("seconds ","wp-autoblog"); ?> ]
                   </div>
                  <?php } ?>

                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Charset","wp-autoblog"); ?></label>
                </td>
                <td>

                  <div class="btn-group">
                    <label class="btn btn-default <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]==1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]==1){ echo 'checked'; } ?> /> <?php echo __("Automatic Detection","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]!=1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="2" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]!=1){ echo 'checked'; } ?> /> <?php echo __("Manually Enter","wp-autoblog"); ?>

                    </label>
                  </div>

                  <input type="text" id="charset_name" name="charset_name" class="setInput" value="<?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]!=1){ echo $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]; } ?>" placeholder="<?php echo __("For Example: UTF-8","wp-autoblog"); ?>"   <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x61\x72\x73\x65\x74"]==1){ ?>  style="display: none;"  <?php }?> />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Manually Selective Extraction","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("Manually select which article can be posted in your site","wp-autoblog"); ?></p>
                </td>
                <td>
                  <select class="input-default" id="manually_extraction" name="manually_extraction">
                    <option value="0"   <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6d\x61\x6e\x75\x61\x6c\x6c\x79\x5f\x65\x78\x74\x72\x61\x63\x74\x69\x6f\x6e"]=='0') echo 'selected="true"'; ?> ><?php echo __('No'); ?></option>
                    <option value="1"   <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6d\x61\x6e\x75\x61\x6c\x6c\x79\x5f\x65\x78\x74\x72\x61\x63\x74\x69\x6f\x6e"]=='1') echo 'selected="true"'; ?> ><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Check Extracted Method","wp-autoblog"); ?></label>
                </td>
                <td>
                  <div class="btn-group">
                    <label class="btn btn-default <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x65\x63\x6b\x5f\x64\x75\x70\x6c\x69\x63\x61\x74\x65"]==0){ echo 'active'; } ?>"  >
                      <input type="radio" name="check_duplicate" value="0"  <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x65\x63\x6b\x5f\x64\x75\x70\x6c\x69\x63\x61\x74\x65"]==0){ echo 'checked'; } ?>/> <?php echo __("URL","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x65\x63\x6b\x5f\x64\x75\x70\x6c\x69\x63\x61\x74\x65"]==1){ echo 'active'; } ?>" >
                      <input type="radio" name="check_duplicate" value="1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x68\x65\x63\x6b\x5f\x64\x75\x70\x6c\x69\x63\x61\x74\x65"]==1){ echo 'checked'; } ?> > <?php echo __("URL + Title","wp-autoblog"); ?>
                    </label>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Use Proxy","wp-autoblog"); ?></label>
                  <p class="desc"><a href="admin.php?page=wp-autoblog/wp-autopost-proxy.php" target="_blank"><?php echo __('Proxy Options','wp-autoblog'); ?></a></p>
                </td>
                <td>
                  <select id="use_proxy" name="use_proxy" class="input-default">
                    <option value="0" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x75\x73\x65\x5f\x70\x72\x6f\x78\x79"]==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>

                    <?php
 $B4357R5B25SH8QU21A2I138IH9A5NE375P8P4LHW244AM9O2HV417J50HD595C5476527EE5059B2D5F1B34E1ABB4522 =$O15T9HLH3IM9PVG8R51U5928L66HJH875S1AF8G5J55R4013Z8LK5T4W3F74JBGB38OB73X8DE9DE218XR5P8T85364924G229Z3BC7179659E53A0D71D8959D88398F40E2074313[9]; if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x75\x73\x65\x5f\x70\x72\x6f\x78\x79"]==0){ $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x72\x6f\x78\x79\x5f\x6b\x65\x79"]=''; } ?>

                    <?php foreach($B4357R5B25SH8QU21A2I138IH9A5NE375P8P4LHW244AM9O2HV417J50HD595C5476527EE5059B2D5F1B34E1ABB4522 as $Z14BCPZ3F8CU0591N95756125UN482E3AK9K395T396B068931CC450442B63F5B3D276EA42979452 =>$C66A9YCH16G6BDXNAXO19N16E55O736J97552M1CYY0E45B1DA8936PN0415087F8NY23HSI08J3W21901E8GZNP7485990220W782S18L5L1342C7U646DC3E79E116AFCD8122B319ACA2CD79FA9285){ ?>
                      <option value="<?php echo $Z14BCPZ3F8CU0591N95756125UN482E3AK9K395T396B068931CC450442B63F5B3D276EA42979452; ?>" <?php selected( $Z14BCPZ3F8CU0591N95756125UN482E3AK9K395T396B068931CC450442B63F5B3D276EA42979452, $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x72\x6f\x78\x79\x5f\x6b\x65\x79"]); ?> > <?php echo __('Proxy Name','wp-autoblog'); ?> : <?php echo $Z14BCPZ3F8CU0591N95756125UN482E3AK9K395T396B068931CC450442B63F5B3D276EA42979452; ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Enable Cookie","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __('Some few sites need to open this feature can normal extracted contents','wp-autoblog'); ?></p>
                </td>
                <td>
                  <select id="enable_cookie" name="enable_cookie" class="input-default" >
                    <option value="0" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x65\x6e\x61\x62\x6c\x65\x5f\x63\x6f\x6f\x6b\x69\x65"]==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                    <option value="1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x65\x6e\x61\x62\x6c\x65\x5f\x63\x6f\x6f\x6b\x69\x65"]==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>

<!--
              <tr>
                <td class="setName">
                  <label><?php echo __("When extract error set the status to","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <select id="err_status" name="err_status" class="input-default">
                    <option value="1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x65\x72\x72\x5f\x73\x74\x61\x74\x75\x73"]==1) echo 'selected="true"'; ?>><?php echo __('Not set','wp-autoblog'); ?></option>
                    <option value="0" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x65\x72\x72\x5f\x73\x74\x61\x74\x75\x73"]==0) echo 'selected="true"'; ?>><?php echo __('Pending Extraction','wp-autoblog'); ?></option>
                    <option value="-1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x65\x72\x72\x5f\x73\x74\x61\x74\x75\x73"]==-1) echo 'selected="true"'; ?>><?php echo __('Ignored','wp-autoblog'); ?></option>
                  </select>
                </td>
              </tr>
-->

              <tr>
                <td class="setName">
                  <label><?php echo __("Max retry times when extraction failed","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <?php
 $N7KW653GIVG35U1W9C0QT9L279DPO4M69F951823R4TZ7A8S11366HY5S94364025X43P21051QUL8IS8LH64L223O5011P9Z567D166A5C1050A671E1185A3B67BD0D1259 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6d\x61\x78\x5f\x72\x65\x74\x72\x79\x5f\x6e\x75\x6d"]; if($N7KW653GIVG35U1W9C0QT9L279DPO4M69F951823R4TZ7A8S11366HY5S94364025X43P21051QUL8IS8LH64L223O5011P9Z567D166A5C1050A671E1185A3B67BD0D1259==null){ $N7KW653GIVG35U1W9C0QT9L279DPO4M69F951823R4TZ7A8S11366HY5S94364025X43P21051QUL8IS8LH64L223O5011P9Z567D166A5C1050A671E1185A3B67BD0D1259 = 5; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_retry_num" id="max_retry_num" value="<?php echo $N7KW653GIVG35U1W9C0QT9L279DPO4M69F951823R4TZ7A8S11366HY5S94364025X43P21051QUL8IS8LH64L223O5011P9Z567D166A5C1050A671E1185A3B67BD0D1259; ?>" placeholder="">
                  </div>

                </td>
              </tr>




            </table>
          </div> <!-- /panel-body -->

        </form>


        <div class="panel-footer">
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="R3AEODXT1E3X8G5F3840PGMQSQ8J1LIIF5193D555288631T22IG7FY4FZ09H78K85C64XRZBO123O78B96ZECIS83L5BV77886P493305D5N249DX1GO7VR468L327B9C2BC284BAAECB183049388F3BCA77749688(0)" ><?php echo __('Save'); ?> </a>
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="R3AEODXT1E3X8G5F3840PGMQSQ8J1LIIF5193D555288631T22IG7FY4FZ09H78K85C64XRZBO123O78B96ZECIS83L5BV77886P493305D5N249DX1GO7VR468L327B9C2BC284BAAECB183049388F3BCA77749688(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
        </div>
      </div> <!-- /panel-all -->

  </div> <!-- /panel -->


  <div class="panel panel-primary">
   <div class="panel-heading panel-toggle">
     <h5 class="panel-title"><?php echo __("Other Settings","wp-autoblog"); ?></h5>
   </div>
   <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==16))echo 'style="display:none;"' ?>>

     <form id="form16"  method="post" action="admin.php?page=autoblog-task-setting">
       <input type="hidden" name="action" value="form16" />
       <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
       <input type="hidden" name="save_to_group" value="0" />

       <div class="panel-body" style="padding:0;margin:0;">
         <table class="table settingTable">

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML comments","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html element like &lt!-- *** -->','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $LT14B311Z540M8DRS45AU23I240E4VR13R6D34EC22B94F4EDD16F32EF4F9FE43FA6012 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x65\x6d\x6f\x76\x65\x5f\x63\x6f\x6d\x6d\x65\x6e\x74\x73"]; if($LT14B311Z540M8DRS45AU23I240E4VR13R6D34EC22B94F4EDD16F32EF4F9FE43FA6012==null){ $LT14B311Z540M8DRS45AU23I240E4VR13R6D34EC22B94F4EDD16F32EF4F9FE43FA6012 = 1; } ?>
               <select id="remove_comments" name="remove_comments" class="input-default" >
                 <option value="0" <?php if($LT14B311Z540M8DRS45AU23I240E4VR13R6D34EC22B94F4EDD16F32EF4F9FE43FA6012==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($LT14B311Z540M8DRS45AU23I240E4VR13R6D34EC22B94F4EDD16F32EF4F9FE43FA6012==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML ID attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like id=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $B6JVFQ2020MQIT6Y2SUL5L8D4L89IY7P78J445ON8H9G1F7864S95C5F2WW70W9621H601CFDF8F080A15D56968579FA72814BCA6722 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x65\x6d\x6f\x76\x65\x5f\x69\x64\x5f\x61\x74\x74\x72"]; if($B6JVFQ2020MQIT6Y2SUL5L8D4L89IY7P78J445ON8H9G1F7864S95C5F2WW70W9621H601CFDF8F080A15D56968579FA72814BCA6722==null){ $B6JVFQ2020MQIT6Y2SUL5L8D4L89IY7P78J445ON8H9G1F7864S95C5F2WW70W9621H601CFDF8F080A15D56968579FA72814BCA6722 = 1; } ?>
               <select id="remove_id_attr" name="remove_id_attr" class="input-default" >
                 <option value="0" <?php if($B6JVFQ2020MQIT6Y2SUL5L8D4L89IY7P78J445ON8H9G1F7864S95C5F2WW70W9621H601CFDF8F080A15D56968579FA72814BCA6722==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($B6JVFQ2020MQIT6Y2SUL5L8D4L89IY7P78J445ON8H9G1F7864S95C5F2WW70W9621H601CFDF8F080A15D56968579FA72814BCA6722==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML CLASS attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like class=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $Z970R01Z4M4BY9XZLYGD0196969Y1L3EB5Y5MEXK3GDLK4H4H88CBXJ14JHK9548Z2TA564373LT0T096Y1621DW1587N5M0500F481E883AF5811EF7E97ED359D9D8714 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x65\x6d\x6f\x76\x65\x5f\x63\x6c\x61\x73\x73\x5f\x61\x74\x74\x72"]; if($Z970R01Z4M4BY9XZLYGD0196969Y1L3EB5Y5MEXK3GDLK4H4H88CBXJ14JHK9548Z2TA564373LT0T096Y1621DW1587N5M0500F481E883AF5811EF7E97ED359D9D8714==null){ $Z970R01Z4M4BY9XZLYGD0196969Y1L3EB5Y5MEXK3GDLK4H4H88CBXJ14JHK9548Z2TA564373LT0T096Y1621DW1587N5M0500F481E883AF5811EF7E97ED359D9D8714 = 1; } ?>
               <select id="remove_class_attr" name="remove_class_attr" class="input-default" >
                 <option value="0" <?php if($Z970R01Z4M4BY9XZLYGD0196969Y1L3EB5Y5MEXK3GDLK4H4H88CBXJ14JHK9548Z2TA564373LT0T096Y1621DW1587N5M0500F481E883AF5811EF7E97ED359D9D8714==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($Z970R01Z4M4BY9XZLYGD0196969Y1L3EB5Y5MEXK3GDLK4H4H88CBXJ14JHK9548Z2TA564373LT0T096Y1621DW1587N5M0500F481E883AF5811EF7E97ED359D9D8714==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML STYLE attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like style=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <select id="remove_style_attr" name="remove_style_attr" class="input-default" >
                 <option value="0" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x65\x6d\x6f\x76\x65\x5f\x73\x74\x79\x6c\x65\x5f\x61\x74\x74\x72"]==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x72\x65\x6d\x6f\x76\x65\x5f\x73\x74\x79\x6c\x65\x5f\x61\x74\x74\x72"]==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

         </table>
       </div>

     </form>

     <div class="panel-footer">
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="S61M882197G393APBN2541F3BTSB6H13M9AC1DA6B155944EE9BB50C8249AE9DA012905(0)" ><?php echo __('Save'); ?> </a>
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="S61M882197G393APBN2541F3BTSB6H13M9AC1DA6B155944EE9BB50C8249AE9DA012905(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
     </div>
   </div>
  </div>





  </div> <!-- /post-body-content -->

<!--
  <div id="postbox-container-1" class="postbox-container">
    <div id="side-sortables" class="meta-box-sortables">

      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content aaaa

          <br/>

          Panel content aaaa
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content bbb

          <br/>

          Panel content bbb
        </div>
      </div>
    </div>

  </div>

  -->

</div><!-- /post-body -->
</div><!-- /poststuff -->