$(document).ready(function () {
            $('.ind_title_row .right_title').text('行业新闻');
            //最新产品
            $('.pro_title_row .right_title').text('最新产品');
            var hrefof = window.location.href;
            if (hrefof.indexOf('/zh-hant') > 0) {
                $('.ind_title_row .right_title').text('行业新聞');
                //最新产品
                $('.pro_title_row .right_title').text('最新产品')
            } else if (hrefof.indexOf('/en') > 0) {
                $('.ind_title_row .right_title').text('Industry news');
                //最新产品
                $('.pro_title_row .right_title').text('Latest Products')
            } else if (hrefof.indexOf('/de') > 0) {
                //德语
                $('.ind_title_row .right_title').text('Nachrichten der Brachen');
                //最新产品
                $('.pro_title_row .right_title').text('Aktuelleste Produkte')
            } else if (hrefof.indexOf('/es') > 0) {
                //西班牙
                $('.ind_title_row .right_title').text('Noticias de la industria');
                //最新产品
                $('.pro_title_row .right_title').text('Nuevo producto')
            } else if (hrefof.indexOf('/ja') > 0) {
                //日语
                $('.ind_title_row .right_title').text('業界新聞');
                //最新产品
                $('.pro_title_row .right_title').text('最新製品')
            } else if (hrefof.indexOf('/ru') > 0) {
                //俄语
                $('.ind_title_row .right_title').text('Новости отрасли');
                //最新产品
                $('.pro_title_row .right_title').text('Последние продукты')
            } else if (hrefof.indexOf('/ko') > 0) {
                //韩语
                $('.ind_title_row .right_title').text('업계 뉴스');
                //最新产品
                $('.pro_title_row .right_title').text('최신 제품')
            }


});






$(document).ready(function () {
            var hrefof = window.location.href;
            if (hrefof.indexOf('/en') > 0 || hrefof.indexOf('/ko') > 0|| hrefof.indexOf('/de') > 0|| hrefof.indexOf('/es') > 0|| hrefof.indexOf('/ja') > 0||hrefof.indexOf('/ru') > 0) {
               $('.join_btn').text('I want to sign up')
               let str = $('.blog_date').text().replace('时间','Time')
               $('.blog_date').text('')
               for(let i=0;i<$('.blog_date').length;i++){
                   $('.blog_date').eq(i).text(str)
               }
            }

            function cutStrByte(str, len){
        //校验参数
        if(!str || !len){
            return {"cutStr":"","code":0};
        }
        var code = "1",// 默认返回code值，已截断
            strLen = str.length,// 原字符串长度
            cutStr;
        //如果字符串长度小于截取长度的一半,则返回全部字符串
        if (strLen <= len/2){
            cutStr = str;
            code = "0";
        }else{
            //遍历字符串
            var strByteCount = 0;
            for (var i = 0; i < strLen ; i++ ){
                //中文字符字节加2  否则加1
                strByteCount += getByteLen(str.charAt(i));
                //i从0开始 截断时大于len 只截断到第i个
                if(strByteCount > len){
                    cutStr = str.substring(0, i);
                    break;
                }else if(strByteCount == len){
                    cutStr = str.substring(0, i + 1);
                    break;
                }
            }
        }
        //cutstr为空，没有截断字符串
        if (!cutStr){
            cutStr = str;
            code = "0";
        }
        return {"cutStr":cutStr, "code":code};
    }
    function getByteLen(val) {
        var len = 0;
        if(!val){
            return len;
        }
        for (var i = 0; i < val.length; i++) {
            if(!val[i]){
                continue;
            }
             // 全角
            if (val[i].match(/[^\x00-\xff]/ig) != null){
                len += 2;
            }else{
                len += 1;
            }
        }
        return len;
    };

    for(let i =0; i<$('.blog_item .blog_right .blog_excerpt').length;i++){
                let vm = $('.blog_item .blog_right .blog_excerpt')[i];
               let x = cutStrByte($(vm).text(),301);
               if(x.cutStr.length>30){
                   x.cutStr+='...'
               }
                $(vm).text(x.cutStr);
    }



});

