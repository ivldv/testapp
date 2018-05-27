$(document).ready(function(){
	var currentSrc = (document.currentScript  || document.scripts[document.scripts.length - 1]).src;

    $("#booking_form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize();             //собераем все данные из формы
            var form_data_array=$(this).serializeArray();
            if (form_data_array[0].value==''){
            	$("#select-whence__help").css('display', 'block');
             return false
            } else{
            	$("#select-whence__help").css('display', 'none');
            };
            if (form_data_array[1].value==''){
            $("#select-where__help").css('display', 'block');
             return false
            } else{
            	$("#select-where__help").css('display', 'none');
            };
            if (form_data_array[2].value==''){
            $("#select-date__help").css('display', 'block');
             return false
            } else{
            	$("#select-date__help").css('display', 'none');
            };
            $.ajax({
	            type: "POST", //Метод отправки
	            url: "src/mailer/mail.php", //путь до php фаила отправителя
	            data: form_data,
	            success: function(data) {
//	              alert("отправил");
                  $("#select-date__help").css('display', 'block');
	              $("#booking_form").trigger("reset");
				},
				error: function(a,aa,aaa) {
				  bbb = aa + " " + aaa;
 			      alert(bbb);
				}
			});
			return false;
	}); 
});  