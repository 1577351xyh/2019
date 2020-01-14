<?php 
global $mk_settings;
$mk_footer_class = '';

$template = '';
if(global_get_post_id()) {
	$template = get_post_meta( global_get_post_id(), '_template', true );

}
if($template != 'no-footer' && $template != 'no-header-footer' && $template != 'no-header-title-footer' && $template !='no-sub-footer-title' && $template !='no-title-footer-sub-footer') :
?>


<section id="mk-footer">
    <!--底部-->
	<div class="footer_row vc_row">
        <div class="vc_wrapper">
            <div class="footer-col footer-col-1">
                <div class="footer-logo">
                    <?php do_action('subfooter_logos'); ?>
                </div>
                <div class="footer-desc">時科，源自臺灣，全球知名的半導體分立元器件廠商之一</div>
            </div>
            <div class="footer-col footer-col-2">
                <?php wp_nav_menu( array('menu' => 'footer-menu',) ) ?>
            </div>
            <div class="footer-col footer-col-3">
                <a href="tel:<?php echo stripslashes($mk_settings['footer-hotline']); ?>" class="footer-hotline">
                    <span class="ft-i-tel"></span>
                    <?php echo stripslashes($mk_settings['footer-hotline']); ?>
                </a>
                <div class="footer-contact-outlink">
                    <span>联系我们：</span>
                    <a href="javascript:void(0)" class="footer-i-wx"><img src="/wp-content/uploads/2019/11/wxqr1.png"></a>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=3005862876&site=qq&menu=yes" target="_blank" class="footer-i-qq"></a>
                    <a href="https://www.facebook.com/shikuessemi/" class="footer-i-fb"></a>
                </div>
                <div class="footer-copyright">
                    <?php echo stripslashes($mk_settings['footer-copyright']); ?>
                    <a href="http://www.beian.miit.gov.cn" target="_blank">
                        <?php echo stripslashes($mk_settings['footer-recordnum']); ?>
                    </a>
                </div>
            </div>
            <div class="clearboth"></div>
        </div>
	</div>
    <div class="footer-sub vc_row">
        <div class="vc_wrapper">
            <div class="footer-inlink">
                <a href="#">隐私政策</a>
                <a href="#">使用条款</a>
                <a href="#">销售条款</a>
                <a href="#">提供反馈</a>
            </div>
            <?php do_action('wpml_add_language_selector'); ?>
        </div>
    </div>
</section>

<!--置顶-->
<a href="#" id="mk-to-top" class="mk-to-top"><img src="/wp-content/uploads/2019/11/totop.png"></a>

<?php endif; ?>

<?php wp_footer(); ?>

<!-- <?php echo get_num_queries(); ?> queries in <?php timer_stop(3); ?> seconds -->
</body>
</html>
