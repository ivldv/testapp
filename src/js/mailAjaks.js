$(document).ready(function(){
	var selectdatehelp = document.getElementById('select-date__help');

    $("#booking_form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize();             //собераем все данные из формы
            var form_data_array=$(this).serializeArray();
            var aaa="bbb";
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
	              $(".overlay").css({'display':'flex'})//show();
	              $("#booking_form").trigger("reset");
			   },
				error: function(a,aa,aaa) {
				   	bbb = aa + " " + aaa;
				    alert(bbb);
			   }
			});
     return false;
	}); 
    $(".popup-close").on("click",function(){
        $('.overlay').hide();
    });
    $(".popup__button").on("click",function(){
       $('.overlay').hide();
    });    
});  