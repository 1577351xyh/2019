<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder ">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Extracted Content Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==9))echo 'style="display:none;"' ?>>
          <form id="form9"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form9" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="css_content_filter_div" class="margin-b-8">
                      <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x73\x73\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x66\x69\x6c\x74\x65\x72"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x73\x73\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x66\x69\x6c\x74\x65\x72"] as $ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="<?php echo htmlspecialchars($ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x73\x65\x6c\x65\x63\x74\x6f\x72"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="<?php echo htmlspecialchars($ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x69\x6e\x64\x65\x78"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>

                              <option value="0" <?php selected( 0,$ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$ZO991787F79N3132427PMV53P95115U1NW94A753BJ55HLQP16909FD1BDFA0EA84E2C4ADC0EDA7697A9167["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
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

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_filter_rules_btn" onclick="T6NLC1DT440P6MSJ15O60G23B8F2PEJZ6C2BW04Z55YPIJM2A0M6S6QN1284PFZ13YG8654FE13C9C2B2E6B62DECA806E0AB320802()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content between the two key words",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Keyword 2 can be empty, which means that delete everything after the keyword 1','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_content_filter_div" class="margin-b-8">
                      <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6b\x65\x79\x77\x6f\x72\x64\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x66\x69\x6c\x74\x65\x72"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6b\x65\x79\x77\x6f\x72\x64\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x66\x69\x6c\x74\x65\x72"] as $NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077){ ?>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="<?php echo htmlspecialchars($NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x6b\x31"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value="<?php echo htmlspecialchars($NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x6b\x32"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$NSJUDT393M1448X760N892YI36DLA2453QH4J25RY39779W4H45Z749C148WVIU772R820E3Z78341I22C576F786EL5H8175W1KTKM6920125MB90FD663AA6CEC193AD7DE0B37CDF8322077["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright" id="(*)">' >
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value=""  placeholder='<?php echo __('For example','wp-autoblog'); ?>: </div>'>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
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

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_filter_rules_btn" onclick="E2S6C13Z142298291X8TI241FX6G8L6EFEZ22K8100Q4A7A4L2XH3ZZP84AR2PHF0775NB7K7T8E2FB58388VS17CKYUBJOJ6Z8WCYD0M1AIV14WO13NVE95019832I7CA5B0675A85E7BFBF53DC40C5E02CA91E62131()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="SOP17V7768VR259MAQMMLEVWYC4046UBHVXEF986MYJ3GWI8REQB4112O758M5736P8GV78PILG76B8G07ZHMM5190Q88DP5L1JZ8C7609X1Y5S4V51QP9R61DQCK0L6MQLS121U52Z959F1B5B0DE926C1695719D529889EA47569(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="SOP17V7768VR259MAQMMLEVWYC4046UBHVXEF986MYJ3GWI8REQB4112O758M5736P8GV78PILG76B8G07ZHMM5190Q88DP5L1JZ8C7609X1Y5S4V51QP9R61DQCK0L6MQLS121U52Z959F1B5B0DE926C1695719D529889EA47569(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("HTML tags Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==11))echo 'style="display:none;"' ?>>
          <form id="form11"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form11" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the HTML tags selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('For example','wp-autopost'); ?>, <?php echo __('If you want to filter out html &lta> tag, only need to fill out &nbsp; " a "','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="html_tag_filter_div" class="margin-b-8">
                      <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x68\x74\x6d\x6c\x5f\x74\x61\x67\x5f\x66\x69\x6c\x74\x65\x72"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x68\x74\x6d\x6c\x5f\x74\x61\x67\x5f\x66\x69\x6c\x74\x65\x72"] as $OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="<?php echo htmlspecialchars($OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x73\x65\x6c\x65\x63\x74\x6f\x72"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="<?php echo htmlspecialchars($OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x69\x6e\x64\x65\x78"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$OD67L6S151X7P1L668Y0QBY874TWYP8ZYMY02USQJ5U2L8PI367U1H822R8HOQ3I9D8S35401O229J535B9S2MQ47GI1L0DKL407N6G5XQAAKE4SJ6Z31978BRCQ5P42144BA9614DD93ED4F2A75BE79ADB21C69F8919["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                              <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_html_tag_rules_btn" onclick="I153B1K6DRCE6V7SJ7382K8H9CPEFOJ6OWZU537GY60W2JUJU37B29848C90QQ07OW14224MI3OG191V8173L2928ZY7HB73YM674NPL7942X4UNVH482Y28IK91I1601CQOJ06U424AC1380CCA3F6C66629FE09F5ECF6600703()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="B0JG674IG08782Q5648UH0HC0YPX90Y319V4X5B0000ZY835J8897E5QSDZC2FT7433F72FCE81F209D9C4DB22967087B8C01458(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="B0JG674IG08782Q5648UH0HC0YPX90Y319V4X5B0000ZY835J8897E5QSDZC2FT7433F72FCE81F209D9C4DB22967087B8C01458(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Extracted Content Replacement","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($FV6ES73LV5HL4Q0WBT2ZKFZ06237NA8BMXN8W0YN9R8HRQTPC78VIZCQ48U5Q1992TG50SGGFG298M8451RJEN6B353YRSW8463H80NJ3GH5P6E2BAAF3B97DBEEF01C0043275F9A0E73337["\x73\x68\x6f\x77\x42\x6f\x78"]==12))echo 'style="display:none;"' ?>>
          <form id="form12"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form12" />
            <input type="hidden" name="id" value="<?php echo $IJ6ILIQ8R6AU7U75NUXK15RBIU024P519631T7MPS1ZOKT1379OY04DUQOT8L24JGK57N113M749IRHLRKYY9QTM3M4RV77054UJ39LG853C2NGU72465AW8IC548O757857746CC8160496AEFC9FB306B6BA24E39435; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/><br/></div>

                    <div id="css_replace_div" class="margin-b-8">
                      <?php
 if(count(@$ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x73\x73\x5f\x72\x65\x70\x6c\x61\x63\x65"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x63\x73\x73\x5f\x72\x65\x70\x6c\x61\x63\x65"] as $IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577){ ?>
                          <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" class="form-control" name="css_replace_selector[]"  value="<?php echo htmlspecialchars($IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x73\x65\x6c\x65\x63\x74\x6f\x72"]); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="<?php echo $IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x69\x6e\x64\x65\x78"]; ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" name="css_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($IDB0E2VNK7L89BV12092B493D30E00T8F599S3X41J647CN21812I54YT7W3BM0JI4RNQU9WO6Q45MWUD2UF5142LADT8HNBNE38S8NC38QEW26TETVHZ6D94E9B87109256C9FFC310FBE8EC854D0577["\x72\x65\x70\x6c\x61\x63\x65\x5f\x77\x69\x74\x68"]); ?></textarea><br/></div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8 ">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="css_replace_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" name="css_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                              <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>"><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/></div>

                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_replace_rules_btn" onclick="H299PK5W886KJI6P58182E6539W9O86P4W90261A68MQ4L9Y9697TFV48MJA7U6Z340C55PT096L31ACAE58A5B6E3BAB36300598D6D08B3C663566()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content used by keywords",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$ZC3N4BYY0666CGA284W58AI40G7A7Q62WGXL62WZT70E0X3VWT9W7CA3A72J6FV5F254E49743691U39N1IF79E92D3HUC5471MCV2W9523OJ0802CD5BB3C2AD65A7632FD1BBCE8F4FE7263==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span></div>
                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Replace with can be empty, which means that delete the keyword','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_replace_div" class="margin-b-8">
                      <?php
 if(@count($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6b\x65\x79\x77\x6f\x72\x64\x5f\x72\x65\x70\x6c\x61\x63\x65"])>0){ foreach($ZL72F7317TCBTH77L00W48332K0Y222U7I4590054IE0RCZ4S012916608B1CA731C61B3742CC3023280111["\x6b\x65\x79\x77\x6f\x72\x64\x5f\x72\x65\x70\x6c\x61\x63\x65"] as $K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497){ ?>
                            <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                            <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="<?php echo htmlspecialchars($K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x6b\x65\x79\x77\x6f\x72\x64"]); ?>" >
                            <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_attribute[]">
                              <option value="1" <?php selected( 1,$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x72\x65\x70\x6c\x61\x63\x65\x5f\x61\x74\x74\x72\x69\x62\x75\x74\x65"] ); ?>><?php echo __('Yes'); ?></option>
                              <option value="0" <?php selected( 0,$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x72\x65\x70\x6c\x61\x63\x65\x5f\x61\x74\x74\x72\x69\x62\x75\x74\x65"] ); ?>><?php echo __('No'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                                <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>" <?php selected( $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718,$K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x61\x70\x70\x6c\x79\x5f\x74\x6f"] ); ?> ><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                              <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($K75E5E7Q49I13MDC4KRH67O67H0TH2Y61KP02P847GIPS3926DR432Z6AA98NAG3G60BJU10223136P3012S063SQ7508F6A869NY32IFWGO800YX85A3525IF8S2M492F6CDBB2B080334247CFE18C6851F9F4557497["\x72\x65\x70\x6c\x61\x63\x65\x5f\x77\x69\x74\x68"]); ?></textarea><br/>
                            </div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright">(*)</div>' >
                          <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_attribute[]">
                            <option value="1"><?php echo __('Yes','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('No','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($I5M46H9DQ59B1J02OPTHLBP855ZQ874R690HQL67U48LH2NB9285P5UR5A0NYJ002V707X0CG21BFKS388XN55479E8Y6AEOBM9WN49MKRS9N8RQYLDN35Q36T6853VFQ603J7470AN94CBFF4150B3A2B26145BE311D5FC9244759 as $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718=>$I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978){ ?>
                              <option value="<?php echo $H48XJ972D782FR24FPOT59FSF1C4K7R8FRO6U1MN8BXG36T98Z5ET2H138W0U0JH62P90V50CJ0WTO5GCY58NW4OP8BM17S0H84ET0091RT6GR02275L7E9B9AU881O580RR0L43C6E0B8A9C15224A8228B9A98CA1531D2718; ?>"><?php echo $I1T564ZW55389XNID97H5UB09GW69C41AF975E0VKM82063C1608D6E0BAF80249C42E2BE58046978; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                          <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_replace_rules_btn" onclick="J30Y6NNH1S6OHB8S3DF897M4BSZD2K28QJX1X4N7C394JL4J8C392963I5604TFML0G91D671A244M0720165950B8BDAE50AA8C9723B8358D05744()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="L8N5687YI7X91A56MIX3Q6256E48O1G5QWP4693011815455F49C30ABF3A098CF8D7598752(0)" ><?php echo __('Save'); ?> </a>
            <a class="btn btn-primary" data-loading-text="Loading..." onclick="L8N5687YI7X91A56MIX3Q6256E48O1G5QWP4693011815455F49C30ABF3A098CF8D7598752(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

    </div> <!-- /post-body-content -->

  </div><!-- /post-body -->
</div><!-- /poststuff -->