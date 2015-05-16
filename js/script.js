$(document).ready(function() {
	$('.flexslider').flexslider({
		slideshowSpeed:7000,
		pauseOnAction:true,
		pausePlay:true,
	});
});

//---------------------------------Форма обратной связи-------------------------

$(document).ready(function(){
    $('#sbt_button').click(function(){
        // собираем данные с формы
        var user_name 	 = $('#user_name').val();
        var user_telephone 	 = $('#user_telephone').val();
        // отправляем данные
        $.ajax({
            url: "form.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                    "user_name":         user_name,
                    "user_telephone":    user_telephone
            },
            // после получения ответа сервера
            success: function(data){
                    $('.messegeResult').html(data.result); // выводим ответ сервера
                    $(':input','#formMain')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .removeAttr('checked')
                        .removeAttr('selected');
            }
        });
    });
});

//------------------------------------------------------------------------------
