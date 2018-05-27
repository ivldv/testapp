$(document).ready(function(){
	$(".navbar-toggler").on("click",function(){
	if ($(".fa-bars").css('color')=='rgb(104, 192, 0)'){
				$(".fa-bars").css({'color':'#000'});//show();
				$("#topmenu-namebutton").css({'color':'#000'});
				$(".topmenu-serch").css({'display':'flex'});//show();
	} else{
		$(".fa-bars").css({'color':'#68c000'});//show();
		$("#topmenu-namebutton").css({'color':'#68c000'});
		$(".topmenu-serch").css({'display':'none'});//show();
	};
	});


	$(".topmenu-serch__button").on("click",function(){

	if ($(".topmenu-serch__input").css('display')=='none'){
		$(".topmenu-serch__input").css({'display':'inline-block'});
		$(".navbar-toggler").css({'display':'none'});
		$(".topmenu-serch").css({'margin-top':'0'});

	} else{
		$(".topmenu-serch__input").css({'display':'none'});
		$(".navbar-toggler").css({'display':'flex'});
		$(".topmenu-serch").css({'margin-top':'-68px'});
	};
	});

		$(".news-img").hover (function(){
		$(this.childNodes[5]).css({'color':'#68c000'});
		$(this.childNodes[1].childNodes[3]).css({'display':'block'});

		},function(){
		$(".news-title").css({'color':'#282f33'});
		$(this.childNodes[1].childNodes[3]).css({'display':'none'});

		});


		// Select
$('.slct').click(function(){
	/* Заносим выпадающий список в переменную */
	var dropBlock = $(this).parent().find('.drop');

	/* Делаем проверку: Если выпадающий блок скрыт то делаем его видимым*/
	if( dropBlock.is(':hidden') ) {

		dropBlock.css({'width':$('.select-whence').outerWidth()});//show();

		dropBlock.slideDown();

		/* Выделяем ссылку открывающую select */
		$(this).addClass('active');

		/* Работаем с событием клика по элементам выпадающего списка */
		$('.drop').find('li').click(function(){

			/* Заносим в переменную HTML код элемента
			списка по которому кликнули */
			var selectResult = $(this).html();
			var textResult = selectResult.substring(11, selectResult.length-4);
			/* Находим наш скрытый инпут и передаем в него
			значение из переменной selectResult */

			$(this).parent().parent().find('input').val(textResult);

			/* Передаем значение переменной selectResult в ссылку которая
			открывает наш выпадающий список и удаляем активность */
			$(this).parent().parent().find('.slct').removeClass('active').html(selectResult);

			/* Скрываем выпадающий блок */
			dropBlock.slideUp();
			return false;
		});

	/* Продолжаем проверку: Если выпадающий блок не скрыт то скрываем его */
	} else {
		$(this).removeClass('active');
		dropBlock.slideUp();
	}

	/* Предотвращаем обычное поведение ссылки при клике */
	return false;
});

});