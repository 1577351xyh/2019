$(document).ready(function () {


    var hrefof = window.location.href;

     if (hrefof.indexOf('/de') > 0||hrefof.indexOf('/es') > 0||hrefof.indexOf('/en') > 0||hrefof.indexOf('/ja') > 0||hrefof.indexOf('/ru') > 0||hrefof.indexOf('/ko') > 0) {
                console.log(3)
                $('.frm_error_style').text('Schiefgelaufen, Fehlermeldung wie im Folgenden');
                $('.frm_message p').text('Erfolgreich abgeschickt! Vielen Dank!')
                $('#frm_field_102_container .frm_error').text('Name eingeben');
                $('#frm_field_97_container .frm_error').text('Telefonnummer eingeben');
                $('#frm_field_98_container .frm_error').text('Emali eingeben');
                $('#frm_field_99_container .frm_error').text('Please upload resume attachment');
                $('#frm_field_100_container .frm_error').text('Delivery post cannot be empty');
     }


    $('#frm_field_102_container .frm_primary_label').html('姓名： <span class="frm_required">*</span>');
    $('#frm_field_97_container .frm_primary_label').html('联系电话： <span class="frm_required">*</span>');
    $('#frm_field_98_container .frm_primary_label').html('邮箱： <span class="frm_required">*</span>');
    $('#frm_field_98_container .frm_primary_label').html('上传附件： <span class="frm_required">*</span>');
    $('#frm_field_100_container .frm_primary_label').html('投递岗位： <span class="frm_required">*</span>');
    $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提交</button>');


    $('.frm_final_submit').bind('click', function () {
        console.log(2)
        setTimeout(function () {
            if (hrefof.indexOf('/de') > 0||hrefof.indexOf('/es') > 0||hrefof.indexOf('/en') > 0||hrefof.indexOf('/ja') > 0||hrefof.indexOf('/ru') > 0||hrefof.indexOf('/ko') > 0) {
                console.log(3)
                $('.frm_error_style').text('Schiefgelaufen, Fehlermeldung wie im Folgenden');
                $('.frm_message p').text('Erfolgreich abgeschickt! Vielen Dank!')
                $('#frm_field_102_container .frm_error').text('Name eingeben');
                $('#frm_field_97_container .frm_error').text('Telefonnummer eingeben');
                $('#frm_field_98_container .frm_error').text('Emali eingeben');
                $('#frm_field_99_container .frm_error').text('Please upload resume attachment');
                $('#frm_field_100_container .frm_error').text('Delivery post cannot be empty');
            }
            // else if (hrefof.indexOf('/es') > 0) {
            //     //西班牙
            //
            //     $('.frm_error_style p').text('El envío falló con el siguiente mensaje de error:');
            //     $('.frm_message p').text('Enviar con éxito! Gracias')
            //     $('#frm_field_90_container .frm_error').text('Ingrese su nombre');
            //     $('#frm_field_91_container .frm_error').text('Ingrese su teléfono');
            //     $('#frm_field_92_container .frm_error').text('Ingrese su correo electrónico');
            //     $('#frm_field_96_container .frm_error').text('Ingrese su contenido');
            // } else if (hrefof.indexOf('/ja') > 0) {
            //     //日语
            //     $('.frm_error_style p').text('提出失敗、エラー提示は下記になる：');
            //     $('.frm_message p').text('提出成功！ありがとうございます')
            //     $('#frm_field_90_container .frm_error').text('名前を入力してください');
            //     $('#frm_field_91_container .frm_error').text('電話番号を入力してください');
            //     $('#frm_field_92_container .frm_error').text('メールアドレスを入力してください');
            //     $('#frm_field_96_container .frm_error').text('内容を入力してください');
            // } else if (hrefof.indexOf('/ru') > 0) {
            //     //俄语
            //     $('.frm_error_style p').text('Ошибка фиксации,подсказка об ошибке выглядит следующим образом:');
            //     $('.frm_message p').text('Подача прошла успешно!благодарить')
            //     $('#frm_field_90_container .frm_error').text('Пожалуйста , введите имя');
            //     $('#frm_field_91_container .frm_error').text('Пожалуйста , введите номер телефона');
            //     $('#frm_field_92_container .frm_error').text('Пожалуйста , введите адрес электронной почты');
            //     $('#frm_field_96_container .frm_error').text('Пожалуйста , введите содержимое');
            // } else if (hrefof.indexOf('/ko') > 0) {
            //     //韩语
            //     $('.frm_error_style p').text('제출 실패,실패 메세지 내용:');
            //     $('.frm_message p').text('제출 성공!감사합니다.')
            //     $('#frm_field_90_container .frm_error').text('이름을 입력하십시요.');
            //     $('#frm_field_91_container .frm_error').text('전화를 입력하십시요.');
            //     $('#frm_field_92_container .frm_error').text('메일을 입력하십시요.');
            //     $('#frm_field_96_container .frm_error').text('내용을 입력하십시요.');
            // }
        }, 1000)
    })


    if (hrefof.indexOf('/zh-hant') > 0) {

        $('#frm_field_102_container .frm_primary_label').html('姓名： <span class="frm_required">*</span>');
        $('#frm_field_97_container .frm_primary_label').html('聯系方式： <span class="frm_required">*</span>');
        $('#frm_field_98_container .frm_primary_label').html('郵箱： <span class="frm_required">*</span>');
        $('#frm_field_98_container .frm_primary_label').html('上傳附件： <span class="frm_required">*</span>');

        $('#frm_field_100_container .frm_primary_label').html('投遞崗位： <span class="frm_required">*</span>');
        $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">提交</button>');

    } else if (hrefof.indexOf('/en') > 0||hrefof.indexOf('/es') > 0||hrefof.indexOf('/ja') > 0||hrefof.indexOf('/ru') > 0 ||hrefof.indexOf('/ko') > 0 ||hrefof.indexOf('/de') > 0) {
        $('#frm_field_102_container .frm_primary_label').html('Name： <span class="frm_required"></span>');
        $('#frm_field_97_container .frm_primary_label').html('Tel： <span class="frm_required"></span>');
        $('.frm_upload_text').text('Click upload')
        $('#frm_field_98_container .frm_primary_label').html('Email： <span class="frm_required"></span>');
        $('#frm_field_99_container .frm_primary_label').html('Upload Attachment： <span class="frm_required">*</span>');
        $('#frm_field_100_container .frm_primary_label').html('Delivery post： <span class="frm_required"></span>');
        $('.frm_submit .frm_button_submit').html('<button class="frm_button_submit frm_final_submit" type="submit" formnovalidate="formnovalidate">submit</button>');

    }


});






