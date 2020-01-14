$(document).ready(function () {


    var hrefof = window.location.href;
    //样品申请
    $('#frm_field_82_container .frm_primary_label').html('联系人： <span class="frm_required"></span>');
    $('#frm_field_83_container .frm_primary_label').html('联系电话： <span class="frm_required"></span>');
    $('#frm_field_84_container .frm_primary_label').html('邮寄地址： <span class="frm_required"></span>');
    $('#frm_field_85_container .frm_primary_label').html('公司名称： <span class="frm_required"></span>');
    $('#frm_field_86_container .frm_primary_label').html('应用领域： <span class="frm_required"></span>');
    $('#frm_field_87_container .frm_primary_label').html('职业： <span class="frm_required"></span>');
    $('#frm_field_89_container .frm_primary_label').html('样片信息: <span class="frm_required"></span>');
    $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">免费申请样片 </button>');

    //联系我们
    $('#frm_field_90_container .frm_primary_label').html('姓名： <span class="frm_required"></span>');
    $('#frm_field_91_container .frm_primary_label').html('电话： <span class="frm_required"></span>');
    $('#frm_field_92_container .frm_primary_label').html('邮箱： <span class="frm_required"></span>');
    $('#frm_field_96_container .frm_primary_label').html('內容： <span class="frm_required"></span>');

$('.frm_final_submit').bind('click',function () {
    setTimeout(function () {
        if (hrefof.indexOf('/de') > 0) {
        //德语
        $('.frm_error_style p').text('Schiefgelaufen, Fehlermeldung wie im Folgenden');
        $('.frm_message p').text('Erfolgreich abgeschickt! Vielen Dank!')
        $('#frm_field_90_container .frm_error').text('Name eingeben');
        $('#frm_field_91_container .frm_error').text('Telefonnummer eingeben');
        $('#frm_field_92_container .frm_error').text('Emali eingeben');
        $('#frm_field_96_container .frm_error').text('Inhalt eingeben');
    } else if (hrefof.indexOf('/es') > 0) {
        //西班牙

        $('.frm_error_style p').text('El envío falló con el siguiente mensaje de error:');
        $('.frm_message p').text('Enviar con éxito! Gracias')
        $('#frm_field_90_container .frm_error').text('Ingrese su nombre');
        $('#frm_field_91_container .frm_error').text('Ingrese su teléfono');
        $('#frm_field_92_container .frm_error').text('Ingrese su correo electrónico');
        $('#frm_field_96_container .frm_error').text('Ingrese su contenido');
    } else if (hrefof.indexOf('/ja') > 0) {
        //日语
        $('.frm_error_style p').text('提出失敗、エラー提示は下記になる：');
        $('.frm_message p').text('提出成功！ありがとうございます')
        $('#frm_field_90_container .frm_error').text('名前を入力してください');
        $('#frm_field_91_container .frm_error').text('電話番号を入力してください');
        $('#frm_field_92_container .frm_error').text('メールアドレスを入力してください');
        $('#frm_field_96_container .frm_error').text('内容を入力してください');
    } else if (hrefof.indexOf('/ru') > 0) {
        //俄语
        $('.frm_error_style p').text('Ошибка фиксации,подсказка об ошибке выглядит следующим образом:');
        $('.frm_message p').text('Подача прошла успешно!благодарить')
        $('#frm_field_90_container .frm_error').text('Пожалуйста , введите имя');
        $('#frm_field_91_container .frm_error').text('Пожалуйста , введите номер телефона');
        $('#frm_field_92_container .frm_error').text('Пожалуйста , введите адрес электронной почты');
        $('#frm_field_96_container .frm_error').text('Пожалуйста , введите содержимое');
    } else if (hrefof.indexOf('/ko') > 0) {
        //韩语

        $('.frm_error_style p').text('제출 실패,실패 메세지 내용:');
        $('.frm_message p').text('제출 성공!감사합니다.')
        $('#frm_field_90_container .frm_error').text('이름을 입력하십시요.');
        $('#frm_field_91_container .frm_error').text('전화를 입력하십시요.');
        $('#frm_field_92_container .frm_error').text('메일을 입력하십시요.');
        $('#frm_field_96_container .frm_error').text('내용을 입력하십시요.');

    }
    },500)

})

    if (hrefof.indexOf('/contact') > 0) {
        $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提交</button>')
    }

    if (hrefof.indexOf('/de') > 0) {
        $('#frm_field_90_container .frm_primary_label').html('Name： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('Tel： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('Email： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('Inhalt： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">Abgabe</button>')
        }

    } else if (hrefof.indexOf('/es') > 0) {
        //西班牙
        $('#frm_field_90_container .frm_primary_label').html('Nombre： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('Teléfono： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('Email： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('Contenido： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">Enviar</button>')
        }
    } else if (hrefof.indexOf('/ja') > 0) {
        //日语
        $('#frm_field_90_container .frm_primary_label').html('名前： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('電話番号： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('メールアドレス： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('内容： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提出</button>')
        }
    } else if (hrefof.indexOf('/ru') > 0) {
        //俄语
        $('#frm_field_90_container .frm_primary_label').html('Полное имя： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('Телефон： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('Электронная почта： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('Содержание： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">Передавать</button>')
        }
    } else if (hrefof.indexOf('/ko') > 0) {
        //韩语

        $('#frm_field_90_container .frm_primary_label').html('이름： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('전화： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('메일： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('내용： <span class="frm_required"></span>');
        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">제출</button>')
        }
    }


    if (hrefof.indexOf('/zh-hant') > 0) {
        //样品申请
        $('#frm_field_82_container .frm_primary_label').html('聯系人： <span class="frm_required"></span>');
        $('#frm_field_83_container .frm_primary_label').html('聯系電話： <span class="frm_required"></span>');
        $('#frm_field_84_container .frm_primary_label').html('郵寄地址： <span class="frm_required"></span>');
        $('#frm_field_85_container .frm_primary_label').html('公司名稱： <span class="frm_required"></span>');
        $('#frm_field_86_container .frm_primary_label').html('應用領域： <span class="frm_required"></span>');
        $('#frm_field_87_container .frm_primary_label').html('職業： <span class="frm_required"></span>');
        $('#frm_field_89_container .frm_primary_label').html('樣片信息: <span class="frm_required"></span>');
        $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">免費申請樣片 </button>');
        //产品定制流程
        $('#frm_field_75_container .frm_primary_label').html('絲印marking: <span class="frm_required"></span>');
        $('#frm_field_76_container .frm_primary_label').html('主要用途：<span class="frm_required"></span>');
        $('#frm_field_77_container .frm_primary_label').html('年需求數量： <span class="frm_required"></span>');
        $('#frm_field_78_container .frm_primary_label').html('聯系人: <span class="frm_required"></span>');
        $('#frm_field_79_container .frm_primary_label').html('聯系電話: <span class="frm_required"></span>');
        $('#frm_field_80_container .frm_primary_label').html('公司地址: <span class="frm_required"></span>');

        //input placeholder
        $('#frm_field_75_container input').attr('placeholder', '通用/定制');
        $('#frm_field_76_container input').attr('placeholder', '請填寫輸入');
        $('#frm_field_77_container input').attr('placeholder', '請填寫輸入');
        $('#frm_field_78_container input').attr('placeholder', '請填寫輸入');
        $('#frm_field_79_container input').attr('placeholder', '請填寫輸入');
        $('#frm_field_80_container input').attr('placeholder', '請填寫輸入');


        if (hrefof.indexOf('/custom-product') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提交定制</button>')
        }

        //联系我们
        $('#frm_field_90_container .frm_primary_label').html('姓名： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('電話： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('郵箱： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('內容： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提交</button>')
        }
    }
    if (hrefof.indexOf('/en') > 0||hrefof.indexOf('/es') > 0||hrefof.indexOf('/de') > 0||hrefof.indexOf('/ru') > 0||hrefof.indexOf('/ko') > 0||hrefof.indexOf('/ja') > 0) {
        //产品定制服务流程
        $('#frm_field_69_container .frm_primary_label').html('VRRM (required)： <span class="frm_required"></span>');
        $('#frm_field_70_container .frm_primary_label').html('I（AV）required： <span class="frm_required"></span>');
        $('#frm_field_71_container .frm_primary_label').html('Package (required)：<span class="frm_required"></span>');
        $('#frm_field_72_container .frm_primary_label').html('IFSM： <span class="frm_required"></span>');
        $('#frm_field_73_container .frm_primary_label').html('VF： <span class="frm_required"></span>');
        $('#frm_field_74_container .frm_primary_label').html('TJ： <span class="frm_required"></span>');
        $('#frm_field_75_container .frm_primary_label').html('Silk screen marking: <span class="frm_required"></span>');
        $('#frm_field_76_container .frm_primary_label').html('The main purpose：<span class="frm_required"></span>');
        $('#frm_field_77_container .frm_primary_label').html('Annual demand： <span class="frm_required"></span>');
        $('#frm_field_78_container .frm_primary_label').html('Contact person: <span class="frm_required"></span>');
        $('#frm_field_79_container .frm_primary_label').html('contact number: <span class="frm_required"></span>');
        $('#frm_field_80_container .frm_primary_label').html('company address: <span class="frm_required"></span>');

        if (hrefof.indexOf('/custom-product') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">Submit Custom</button>')
        }

        //input placeholder
        $('#frm_field_75_container input').attr('placeholder', 'General / custom');
        $('#frm_field_76_container input').attr('placeholder', 'Please fill in the input');
        $('#frm_field_77_container input').attr('placeholder', 'Please fill in the input');
        $('#frm_field_78_container input').attr('placeholder', 'Please fill in the input');
        $('#frm_field_79_container input').attr('placeholder', 'Please fill in the input');
        $('#frm_field_80_container input').attr('placeholder', 'Please fill in the input');

        //样品申请
        $('#frm_field_82_container .frm_primary_label').html('Contact person： <span class="frm_required"></span>');
        $('#frm_field_83_container .frm_primary_label').html('contact number： <span class="frm_required"></span>');
        $('#frm_field_84_container .frm_primary_label').html('Mailing address： <span class="frm_required"></span>');
        $('#frm_field_85_container .frm_primary_label').html('company name： <span class="frm_required"></span>');
        $('#frm_field_86_container .frm_primary_label').html('Application area： <span class="frm_required"></span>');
        $('#frm_field_87_container .frm_primary_label').html('Occupation： <span class="frm_required"></span>');
        $('#frm_field_89_container .frm_primary_label').html('Sample information: <span class="frm_required"></span>');
        $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">Free sample application </button>');


        //联系我们
        $('#frm_field_90_container .frm_primary_label').html('Contact person： <span class="frm_required"></span>');
        $('#frm_field_91_container .frm_primary_label').html('contact number： <span class="frm_required"></span>');
        $('#frm_field_92_container .frm_primary_label').html('Mailing address： <span class="frm_required"></span>');
        $('#frm_field_96_container .frm_primary_label').html('company name： <span class="frm_required"></span>');

        if (hrefof.indexOf('/contact') > 0) {
            $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">submit</button>')
        }
    }


});






