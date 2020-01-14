$(document).ready(function(){
    $("#field_oh121").attr("placeholder","通用/定制")
    $("#field_rnaoh, #field_jxsx5, #field_95qkr, #field_tsi8p, #field_mbumi").attr("placeholder","请填写输入")

    var activeIndex = 0

    $(".custom_tab").bind("click",function () {
        if($(this).index() != activeIndex) {
            activeIndex = $(this).index()
            $(".custom_tab").removeClass("active_tab")
            $(this).addClass("active_tab")
            var title = $(this).find(".custom_title").text()
            $("#field_h9zxz").val(title)
        }
    })

})





