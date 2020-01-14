<?php
global $post,
$mk_settings;

get_header(); ?>

<link rel="stylesheet" href="/custom/css/app/single-application.css">

<div id="theme-page" class="theme-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
	<div class="theme-page-wrapper mk-grid">
        <div class="theme-content">
            <!--banner-->
            <div class="vc_row banner_row"
                 style="background:url(/wp-content/uploads/2019/11/app_ban.jpg) no-repeat center / cover">
                <div class="vc_wrapper">
                    <div class="vc_column ">
                        <div class="vc_column-box">
                            <div class="mk-text-block banner_title"><p>领域应用</p>
                            </div>
                            <div class="mk-text-block banner_en"><p>Domain application</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
            <!--bread-->
            <div class="vc_row menu_row">
                <div class="vc_wrapper">
                    <div class="vc_column menu_left">
                        <div class="vc_column-box">
                            <div class="mk-text-block bread">
                                <p><a href="/" id="home">首页</a> / <a href="/application/" id="nav1">领域应用</a> / <span style="color: #00cdfb;"><?php the_title(); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
            </div>
            <!--content-->
            <div class="vc_row single_content">
                <div class="vc_wrapper">
                    <div class="vc_column">
                        <div class="vc_column-box">
                            <div class="title_row">
                                <h1 class="fancy-title"><?php the_title(); ?></h1>
                                <div class="fancy_en">
                                    <?php
                                    $title_en = get_post_meta( $post->ID, '_app_en', true );
                                    echo $title_en; ?>
                                </div>
                            </div>
                            <div class="clearboth"></div>
                            <div class="single-content">
                                <?php the_content(); ?>
                            </div>
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

<script>
    var hrefof = window.location.href;

            if (hrefof.indexOf('/zh-hant') > 0) {
                //中繁
                $('#home').text("首頁")
                $('#nav1').text('領域應用')
                $('.banner_title').text('領域應用')
                //英文
            } else if (hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0 || hrefof.indexOf('/de') > 0 || hrefof.indexOf('/es') > 0 || hrefof.indexOf('/ja') > 0 || hrefof.indexOf('/ru') > 0) {
                $('#home').text("Home");
                $('#nav1').text('Field application')
                $('.banner_title').remove();
            }
</script>
