<?php
global $post,
$mk_settings;

get_header(); ?>

<link rel="stylesheet" href="/custom/css2/single-job.css">
<style>
    .job-content {
        white-space: pre-wrap;
    }
</style>

<div id="theme-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();
        $prov = get_post_meta( $post->ID, '_job_prov', true );
        $addr = get_post_meta( $post->ID, '_job_addr', true );
        $link = get_post_meta( $post->ID, '_job_link', true );
        $type = get_post_meta( $post->ID, '_job_type', true );
        $duty = get_post_meta( $post->ID, '_job_duty', true );
        $demand = get_post_meta( $post->ID, '_job_demand', true );
        $time = get_post_meta( $post->ID, '_job_nature', true );
        ?>
    <!--banner-->
    <div class="vc_row banner_row"
         style="background:url(/wp-content/uploads/2019/06/cerp-banner.jpg) no-repeat center bottom / 100% 100%">
        <div class="vc_wrapper">
            <div class="vc_column ">
                <div class="vc_column-box">
                    <div class="mk-image banner_img banner_img_1"><img alt="" src="/wp-content/uploads/2019/10/job_a.png"></div>
                </div>
            </div>
            <div class="vc_column ">
                <div class="vc_column-box">
                    <div class="mk-image banner_img banner_img_2"><img alt="" src="/wp-content/uploads/2019/10/job.png"></div>
                </div>
            </div>
            <div class="clearboth"></div>
        </div>
    </div>
	<div class="theme-page-wrapper vc_row">
        <div class="theme-content vc_wrapper">
            <a href="/jobs/" class="current-tag">返回招聘列表 ></a>
            <div class="vc_row job_row">
                <div class="vc_wrapper">
                    <!--single-left-->
                    <div class="vc_column job_left">
                        <div class="vc_column-box">
                            <div class="single-top">
                                <div class="top-l">
                                    <h1 class="single-title">
                                        <?php the_title(); ?>-<?php echo $prov; ?>
                                    </h1>
                                    <div class="single-cap"><?php echo $time; ?> | <?php echo $type; ?></div>
                                    <div class="single-addr"><?php echo $addr; ?></div>
                                </div>
                                <div class="top-r">
                                    <div class="single-time">发布时间：<?php the_time("Y年n月j日"); ?></div>
                                    <a href="<?php echo $link; ?>" class="job_btn">申请职位</a>
                                </div>
                                <div class="clearboth"></div>
                            </div>
                            <div class="job-title"><span>岗位职责</span></div>
                            <div class="job-content"><?php echo $duty; ?></div>
                            <div class="job-title"><span>任职要求</span></div>
                            <div class="job-content"><?php echo $demand; ?></div>
                            <div class="bt_btn">
                                <a href="<?php echo $link; ?>" class="job_btn">申请职位</a>
                            </div>
                        </div>
                    </div>
                    <!--single-right-->
                    <div class="vc_column job_right">
                        <div class="vc_column-box">
                            <div class="fancy-title ">最新职位</div>
                            <?php do_shortcode("[last_jobs]") ?>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>

</div>
<?php get_footer(); ?>


