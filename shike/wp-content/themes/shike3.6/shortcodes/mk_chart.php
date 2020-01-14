<?php

global $mk_settings;

extract( shortcode_atts( array(
			'title' => '金蝶管易云',
			'desc' 	=> '金蝶旗下电商云服务平台，旗下有电商ERP、电商进销存管理软件、订单管理系统、仓储管理系统、E店管家、商城网站建设、淘宝店铺erp等产品和服务，电商ERP就选管易云！',
			'imgurl' 		=> 'https://www.guanyiyun.com',
			'link' 		=> 'https://www.guanyiyun.com/wp-content/uploads/2019/08/wxshare.png',
		), $atts ) );


///////////////////////////////////////////////////////////
//
// Prepare conditional output
//
//////////////////////////////////////////////////////////

$output .= '<script typet="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
jQuery(document).ready(function($) {
    function jssdk() {
        var url = location.href.split(\'#\').toString();//url不能写死
        $.ajax({
            type : "post",
            url : "/wxShareUrl/jswxshare.php",
            dataType : "json",
            async : false,
            data:{url:url},
            success : function(data) {
                wx.config({
                    debug: false,
                    appId: data.appId,//appId通过微信服务号后台查看
                    timestamp: data.timestamp,//生成签名的时间戳
                    nonceStr: data.nonceStr,//生成签名的随机字符串
                    signature: data.signature,//签名
                    jsApiList: [//需要调用的JS接口列表
//                    \'hideOptionMenu\',
                        \'checkJsApi\',
                        \'onMenuShareTimeline\',
                        \'onMenuShareAppMessage\',
                        \'onMenuShareQQ\',
                        \'onMenuShareQZone\',
                    ]
                });
            },
            error: function(xhr, status, error) {
                //alert(status);
                //alert(xhr.responseText);
            }
        })
    }
    
        jssdk(); //config配置
        wx.ready(function () {
    //        //发送给朋友
            wx.onMenuShareAppMessage({
                title: \''. $title .'\',
                desc: \''. $desc .'\',
                link: \''. $link .'\',
                imgUrl: \''. $imgurl .'\'
            });
            //分享到朋友圈
            wx.onMenuShareTimeline({
                title: \''. $title .'\',
                link: \''. $link .'\',
                imgUrl: \''. $imgurl .'\'
            });
            //分享到QQ
            wx.onMenuShareQQ({
                title: \''. $title .'\',
                desc: \''. $desc .'\',
                link: \''. $link .'\',
                imgUrl: \''. $imgurl .'\'
            });
            //分享到QQ空间
            wx.onMenuShareQZone({
                title: \''. $title .'\',
                desc: \''. $desc .'\',
                link: \''. $link .'\',
                imgUrl: \''. $imgurl .'\'
            });
        });

})

</script>
';
;

echo $output;
