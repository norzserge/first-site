$(document).ready(function(){

//$(function () {                                      // Когда страница загрузится
    $('.nav ul li a').each(function () {    // проходим по нужным нам ссылками
        var location = window.location.href + ".php"; // переменная с адресом страницы
        var link = this.href;                // переменная с url ссылки
        var result = location.match(link);  // результат возвращает объект если совпадение найдено и null при обратном      
        if(result != null) {                // если НЕ равно null
            $(this).parent().addClass('active');    // добавляем класс
            if (location == "http://localhost/portfolio.ru/portfolio.php") {    // если выделяется пункт "Мои работы" делаем остальные ссылки с классом "no-active"
                $('.nav ul li:not(.active)').children().addClass('no-active');
            }
        }
    });
//});

// скрываем value полей при клике
	$('input,textarea').focus(function(){
	  $(this).data('placeholder',$(this).attr('placeholder'))
	  $(this).attr('placeholder','');
	});
	$('input,textarea').blur(function(){
	  $(this).attr('placeholder',$(this).data('placeholder'));
	});

// Функция срабатывает по событию .blur
    $('#userName').blur(function(){
        // Убираем все классы с поля «Ваше имя»
        $('#userName').removeClass();
        $('#text').removeClass();
        // Определяем длину значения поля
        var nameLngth = $('#userName').val().length;

        // Если значение меньше или равно 1 символу, то выводим предупреждение
        if(nameLngth <= 1){
            $('#userName').addClass('notValid');
            $('#text').addClass('nameNotValid');
        } else {
        // Здесь мы пишем что должно быть, если все введено верно
            $('#userName').addClass('valid');
            $('#text').addClass('nameValid');
        }
    });

    $('#userMail').blur(function(){
        $('#userMail').removeClass();
        $('#text2').removeClass();
        var nameLngth = $('#userMail').val().length;
        if(nameLngth <= 1){
            $('#userMail').addClass('notValid');
            $('#text2').addClass('mailNotValid');
        } else {
            $('#userMail').addClass('valid');
            $('#text2').addClass('mailValid');
        }
    });


    $('#userText').blur(function(){
        $('#userText').removeClass();
        $('#text3').removeClass();
        var nameLngth = $('#userText').val().length;
        if(nameLngth <= 1){
            $('#userText').addClass('notValid');
            $('#text3').addClass('textNotValid');
        } else {
            $('#userText').addClass('valid');
            $('#text3').addClass('textValid');
        }
    });

    $('#userCode').blur(function(){
        $('#userCode').removeClass();
        $('#text4').removeClass();
        var nameLngth = $('#userCode').val().length;
        if(nameLngth <= 1){
            $('#userCode').addClass('notValid');
            $('#text4').addClass('codeNotValid');
        } else {
            $('#userCode').addClass('valid');
            $('#text4').addClass('codeValid');
        }
    });


});

