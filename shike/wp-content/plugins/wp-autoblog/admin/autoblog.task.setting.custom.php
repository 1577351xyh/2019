<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Custom HTML Attribute","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==13))echo 'style="display:none;"' ?>>
          <form id="form13"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form13" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">

                <tr>
                  <!--
                  <td class="setName">
                    <label><?php echo __("Custom HTML Attribute Set",'wp-autoblog'); ?></label>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                  </td>
                  -->
                  <td>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                    <div class="margin-t-8">
                      <span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to all images align center, we just need to set the following','wp-autoblog'); ?>:<br/>
   <code><b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> img &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Attribute','wp-autoblog'); ?>:</b> style &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Value'); ?>:</b> display:block; margin-left:auto; margin-right:auto; </code>
   <br/><?php echo __('Of course, if you konw CSS, you also can use CLASS attribute','wp-autoblog'); ?></span></div>

                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if need to remove a attribute, leave the value is empty','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>


                    <div id="attr_set_div" class="margin-b-8">
                      <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x61\x74\x74\x72\x5f\x73\x65\x74"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x61\x74\x74\x72\x5f\x73\x65\x74"] as $Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="<?php echo htmlspecialchars($Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x73\x65\x6c\x65\x63\x74\x6f\x72"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="<?php echo htmlspecialchars($Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x69\x6e\x64\x65\x78"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"   value="<?php echo htmlspecialchars($Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x61\x74\x74\x72"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Value','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="<?php echo htmlspecialchars($Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x76\x61\x6c\x75\x65"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                              <option value="b" <?php selected( 'b',$Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$Z2T47S73C7I280CO0V2H8QLU8X5CG6Q0W20077C8A81KUV6O9P9I8194X8CEG956MY038374JB4VB7403QJQ6UGHW991499CJ17FFEB2695E721CF62D30ADB3ED681CC1354["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800" >
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="0" >
                          <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Value','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="" >

                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                              <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>"><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_attr_set_rules_btn" onclick="L9IU275709N242LCJ21Y7696M4M27105914407073948B374C4AC4514B8A2A865AE2CEC12113()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="D9074T084HK596E3Q3B783R88G07LV2113ADEW79SE860T3B6U6A65LEZ9M4L504RI283958P99L9E2M42UDR4F1ZZ1399B04E7B0449V5QL2EXYOTZ64L5533FEA1DB05A92C5707463436BC2C7E28563(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="D9074T084HK596E3Q3B783R88G07LV2113ADEW79SE860T3B6U6A65LEZ9M4L504RI283958P99L9E2M42UDR4F1ZZ1399B04E7B0449V5QL2EXYOTZ64L5533FEA1DB05A92C5707463436BC2C7E28563(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Insert Content In Anywhere","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==14))echo 'style="display:none;"' ?>>
          <form id="form14"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form14" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="insert_content_table">
                <tr>
                  <td>
                    <div><?php echo __('Find the specified HTML Element, then insert content in front of the HTML Element ( or behind it )','wp-autoblog'); ?><br/></div>
                    <p><span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to insert some content( like &lt;!-- more --> )  behind the first paragraph, We just need to set the following','wp-autoblog'); ?>:<br/>
  <code>
    <b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> p &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Index','wp-autoblog'); ?>:</b> 1 &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Outer - Behind','wp-autoblog'); ?></b></code>
  <br/>
  <code><b><?php echo __('Content','wp-autoblog'); ?>:</b> &lt;!-- more --></code>
  </span></p>

                         <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>

                    <div class="margin-t-8">
                      <?php echo __('<code><em>[Outer-Front]</em></code> &lt;tag> <code><em>[Inner-Front]</em></code> some text <code><em>[Inner-Behind]</em></code> &lt;/tag> <code><em>[Outer-Behind]</em></code>','wp-autoblog'); ?>
                    </div>

                  </td>
                </tr>

                <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x69\x6e\x73\x65\x72\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x69\x6e\x73\x65\x72\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74"] as $CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429){ ?>
                    <tr><td>
                    <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="<?php echo htmlspecialchars($CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x73\x65\x6c\x65\x63\x74\x6f\x72"]); ?>" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="<?php echo htmlspecialchars($CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x69\x6e\x64\x65\x78"]); ?>" >

                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" <?php selected( 1,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x4a\x37\x38\x37\x45\x32\x33\x42\x35\x52\x31\x39\x58\x37\x46\x30\x35\x37\x47\x56\x55\x36\x55\x48\x38\x45\x32\x51\x38\x32\x42\x51\x33\x57\x4d\x57\x4b\x45\x58\x56\x55\x34\x37\x35\x37\x46\x45\x30\x37\x46\x44\x34\x39\x32\x41\x38\x42\x45\x30\x45\x41\x36\x41\x37\x36\x30\x44\x36\x38\x33\x44\x36\x45\x32\x37\x36\x34"]); ?> ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" <?php selected( 2,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x4a\x37\x38\x37\x45\x32\x33\x42\x35\x52\x31\x39\x58\x37\x46\x30\x35\x37\x47\x56\x55\x36\x55\x48\x38\x45\x32\x51\x38\x32\x42\x51\x33\x57\x4d\x57\x4b\x45\x58\x56\x55\x34\x37\x35\x37\x46\x45\x30\x37\x46\x44\x34\x39\x32\x41\x38\x42\x45\x30\x45\x41\x36\x41\x37\x36\x30\x44\x36\x38\x33\x44\x36\x45\x32\x37\x36\x34"]); ?> ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" <?php selected( 3,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x4a\x37\x38\x37\x45\x32\x33\x42\x35\x52\x31\x39\x58\x37\x46\x30\x35\x37\x47\x56\x55\x36\x55\x48\x38\x45\x32\x51\x38\x32\x42\x51\x33\x57\x4d\x57\x4b\x45\x58\x56\x55\x34\x37\x35\x37\x46\x45\x30\x37\x46\x44\x34\x39\x32\x41\x38\x42\x45\x30\x45\x41\x36\x41\x37\x36\x30\x44\x36\x38\x33\x44\x36\x45\x32\x37\x36\x34"]); ?> ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" <?php selected( 4,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x4a\x37\x38\x37\x45\x32\x33\x42\x35\x52\x31\x39\x58\x37\x46\x30\x35\x37\x47\x56\x55\x36\x55\x48\x38\x45\x32\x51\x38\x32\x42\x51\x33\x57\x4d\x57\x4b\x45\x58\x56\x55\x34\x37\x35\x37\x46\x45\x30\x37\x46\x44\x34\x39\x32\x41\x38\x42\x45\x30\x45\x41\x36\x41\x37\x36\x30\x44\x36\x38\x33\x44\x36\x45\x32\x37\x36\x34"]); ?> ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>


                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b" <?php selected( 'b',$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a" <?php selected( 'a',$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0" <?php selected( 0,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                        <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                          <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                        <?php } ?>

                      </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                    </div>
                      <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($CJSU18D02A89H2HML8L695X9E43NWYQFZ01U8O4B2E9E9B295F4CE5E5E9942D8315FD7F579429["\x68\x74\x6d\x6c"]); ?></textarea>
                    </div>
                    </td></tr>
                    <?php
 } }else{ ?>
                <tr><td>
                  <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="0" >
                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>
                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                        <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                          <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>"><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                        <?php } ?>
                      </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                    </div>
                    <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"></textarea>
                  </div>
                </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_insert_content_rules_btn" onclick="ZWT8E48G84J7AEGPOF5393EVCQ6NES3K1QFGJONM99S9N68DWC43FK8129GND88U61645521X480DC2Y1F09Y11569S73S56WO28T9513Q02ELR2M04ZSN4896E3CE9E44AC0037F896FE8E0E8DBB1124()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>

          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="D3W6DGN1T982XJFPS462A97SQ264BRC9M7FA8XA4A9Z0ZR0805YA22V26695889AGK75HR2J9JWN6255G5841TUOU18SG61TYCN5T6Z613538A1A6586E90928C60AC63D0E05A8AC0501(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="D3W6DGN1T982XJFPS462A97SQ264BRC9M7FA8XA4A9Z0ZR0805YA22V26695889AGK75HR2J9JWN6255G5841TUOU18SG61TYCN5T6Z613538A1A6586E90928C60AC63D0E05A8AC0501(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Prefix / Suffix',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==15))echo 'style="display:none;"' ?>>
          <form id="form15"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form15" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="prefix_suffix_table">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x72\x65\x66\x69\x78\x5f\x73\x75\x66\x66\x69\x78"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x70\x72\x65\x66\x69\x78\x5f\x73\x75\x66\x66\x69\x78"] as $QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238){ ?>
                    <tr><td>
                        <div class="w800">
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                            <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                              <option value="1" <?php selected( 1,$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x6d\x6f\x64\x65"] ); ?>><?php echo __('Prefix','wp-autoblog'); ?></option>
                              <option value="2" <?php selected( 2,$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x6d\x6f\x64\x65"] ); ?>><?php echo __('Suffix','wp-autoblog'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="prefix_suffix_apply_to[]">
                              <option value="b" <?php selected( 'b',$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($QX31B6UH4623M392S2U7B0UER7N864KVH00B904D3D6F41F80B2B3B263BA9600424E78297238["\x68\x74\x6d\x6c"]); ?></textarea>
                        </div>
                      </td></tr>
                    <?php
 } }else{ ?>
                  <tr><td>
                      <div class="w800">
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                            <option value="1" ><?php echo __('Prefix','wp-autoblog'); ?></option>
                            <option value="2" ><?php echo __('Suffix','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                              <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>"><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                            <?php } ?>
                          </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                        </div>
                        <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"></textarea>
                      </div>
                    </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_prefix_suffix_rules_btn" onclick="M6QFU14N8K60MM8A5841U93I957064AN6C035MO8JPG1U4HC2X185508WB1IV599P1HGP303T8PJSPD9XE3417C332D6046F4520860C6F4B40D4675677()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>

          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="GC897FF43BF066450L47IL7115LTR83B75S5SWU656F2A5C287D1130F6EC24572BDA34A13B09177(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="GC897FF43BF066450L47IL7115LTR83B75S5SWU656F2A5C287D1130F6EC24572BDA34A13B09177(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Custom Content Template',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==17))echo 'style="display:none;"' ?>>
          <form id="form17"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form17" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_content}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                    <tr><td>
                        <?php
 if(isset($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x70\x6c"])){ $XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501 = $ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x70\x6c"]; }else{ $XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501 = ''; } ?>
                        <textarea class="form-control " name="content_tpl"  rows="10" placeholder="HTML Code"><?php echo htmlspecialchars($XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501); ?></textarea>
                      </td></tr>

              </table>
            </div> <!-- /panel-body -->

          </form>

          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="JA75AA21729B5Q87841O437HRSK71F9C12V1D7U022VY73WX5MM3O52R82I7NJ3S9TB0668820LIG4FV687IWTDLD16H944918R464G17ACE8F368353C33A51F3F54665800D207860(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="JA75AA21729B5Q87841O437HRSK71F9C12V1D7U022VY73WX5MM3O52R82I7NJ3S9TB0668820LIG4FV687IWTDLD16H944918R464G17ACE8F368353C33A51F3F54665800D207860(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->


      <?php  $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360=1; if($S8B33P8JQOU5US5W3354XSV74ICGY9PFN46B8B8328FFBM7LSH7UHL8O7JJT3R7V922O5023GTBI0F00O4N7Z43HD95G0PAX7C2L83OAS66242060X51OUZH203EMHJ9035BNZ770BC76C9F0CE67C1BC992818B012B23E50784>0)foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6c\x65\x76\x65\x6c\x5f\x70\x61\x67\x65"] as $KN6V5H3NX3DTZ4BEWL7I6GBH3771JL044L6JPMQZ307XDSFVCI6TD601QKJZ8N8E979600006EP65H0RC9E9A848920877E76685B2E4E76DE38D0396=>$T8KYX28898C22281K7DOV7X5X80WRT6S291721GZR45ZLSO1NS0OCRS1U41ISWH8984GRD71CBCB5513E6EE8330F35F9182D927DC7235){ if($T8KYX28898C22281K7DOV7X5X80WRT6S291721GZR45ZLSO1NS0OCRS1U41ISWH8984GRD71CBCB5513E6EE8330F35F9182D927DC7235["\x6e\x65\x77\x5f\x70\x6f\x73\x74"]==0){ continue;} ?>
        <div class="panel panel-primary" id="level_page_wp_<?php echo $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360; ?>">

          <div class="panel-heading panel-toggle">
            <h5 class="panel-title">"<?php echo $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360+1; ?> <?php echo __("Level Content Page","wp-autoblog"); ?>" <?php echo __("Custom Content Template","wp-autoblog"); ?></h5>
          </div>
          <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x6c\x65\x76\x65\x6c\x50\x61\x67\x65\x43\x75\x73\x74\x6f\x6d\x43\x6f\x6e\x74\x65\x6e\x74\x42\x6f\x78"]==$KN6V5H3NX3DTZ4BEWL7I6GBH3771JL044L6JPMQZ307XDSFVCI6TD601QKJZ8N8E979600006EP65H0RC9E9A848920877E76685B2E4E76DE38D0396))echo 'style="display:none;"' ?>>

            <form id="level_page_custom_content_form_<?php echo $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360; ?>"  method="post" action="admin.php?page=autoblog-task-setting">
              <input type="hidden" name="action" value="level_page_custom_content_form" />
              <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
              <input type="hidden" name="save_to_group" value="0" />
              <input type="hidden" name="group_id" value="<?php echo $CV0CGBU1ON45VOZVGZYL0574O213NPE1ELK2X5H98XJ1I28I6HY09116Q33JU2GHQCZ5195S93123ZOWZX2VYDM4XU2AQ10LXMJ316HT2RPA5TQYA5NA26SA8S205SY9411R405E13D73478F3A4C51824AD23CB50C1C60670C0F6302->group_id; ?>" />
              <input type="hidden" name="level" value="<?php echo $KN6V5H3NX3DTZ4BEWL7I6GBH3771JL044L6JPMQZ307XDSFVCI6TD601QKJZ8N8E979600006EP65H0RC9E9A848920877E76685B2E4E76DE38D0396; ?>" />

              <div class="panel-body" style="padding:0;margin:0;">
                <table class="table settingTable">
                  <tr>
                    <td>
                      <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_content}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if($ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                    </td>
                  </tr>

                  <tr><td>
                      <?php
 if(isset($T8KYX28898C22281K7DOV7X5X80WRT6S291721GZR45ZLSO1NS0OCRS1U41ISWH8984GRD71CBCB5513E6EE8330F35F9182D927DC7235["\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x70\x6c"])){ $XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501 = $T8KYX28898C22281K7DOV7X5X80WRT6S291721GZR45ZLSO1NS0OCRS1U41ISWH8984GRD71CBCB5513E6EE8330F35F9182D927DC7235["\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x70\x6c"]; }else{ $XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501 = ''; } ?>
                      <textarea class="form-control " name="content_tpl"  rows="10" placeholder="HTML Code"><?php echo htmlspecialchars($XHGD192HL6A4572AC259522MGB2PCN9289W329L9GH7H22SIDY1C60T23TQ3286EZWX432E9WHXRP33P10K30914648AFF73AB91E1BA9BB788FFC34947501); ?></textarea>
                    </td></tr>


                </table>
              </div> <!-- /panel-body -->

            </form>


            <div class="panel-footer">
              <a class="btn btn-primary" data-loading-text="Loading..." onclick="CM63OL714422W840QA23I6BO013N51V57PKL75Y3247666637D711X7KJG71Z635M23BYEK402XX88WQ1S932808H3SN5643GGES6JD5JE5K3X2TB6D17K9S12JQA8I4D0897O73Q338M9X8K6259DA9D0E386029FD2D169A496D39ECE6636(<?php echo $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360 ?>,0)" ><?php echo __('Save'); ?> </a>
              <a class="btn btn-primary" data-loading-text="Loading..." onclick="CM63OL714422W840QA23I6BO013N51V57PKL75Y3247666637D711X7KJG71Z635M23BYEK402XX88WQ1S932808H3SN5643GGES6JD5JE5K3X2TB6D17K9S12JQA8I4D0897O73Q338M9X8K6259DA9D0E386029FD2D169A496D39ECE6636(<?php echo $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360 ?>,1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
            </div>
          </div> <!-- /panel-all -->

        </div> <!-- /panel -->
        <?php
 $N080KK955S52K33012VDPE9Q6STB48377Q0VAJ052A2891315H82V56V9OEVOD55545M7KJ5G2E8R1A51LR38CE4B16B22B58894AA86C421E8759DF35360++; } ?>



    </div> <!-- /post-body-content -->

  </div><!-- /post-body -->
</div><!-- /poststuff -->