<section class="booking">
	<h1 class="content__title1">Забронировать билет</h1>
	<form action="#" id="booking_form">
		<div class="select">
			<div class="select-whence">
				<label for="whence">Выберите направление</label>
				<a href="javascript:void(0);" class="slct">откуда</a>
				<ul class="drop">
					<li><a href="">Москва</a></li>
					<li><a href="">Санкт-Петербург</a></li>
					<li><a href="">Екатеринбург</a></li>
					<li><a href="">Челябинск</a></li>
				</ul>
				<input type="hidden" id="whence" name="whence">
				<div class="select-whence__help select-whence__help-o" id="select-whence__help">Необходимо указать город откуда отплываем.</div>
			</div>
			<div class="select-where">
				<a href="javascript:void(0);" class="slct">куда</a>
				<ul class="drop">
					<li><a href="">Москва</a></li>
					<li><a href="">Санкт-Петербург</a></li>
					<li><a href="">Екатеринбург</a></li>
					<li><a href="">Челябинск</a></li>
				</ul>
				<input type="hidden" id="where" name="where">
				<div class="select-whence__help select-where__help" id="select-where__help">Необходимо указать город куда хотим приплыть.</div>
			</div>
		</div>
		<div class="booking-date">
			<div class="booking-date__wrap">
				<label for="inputdate">Дата поездки</label>
				<div><input type="text" name="date" class="tcal" id="inputdate" placeholder="22.05.2018"  value="22.05.2018"></div>
				<div class="select-whence__help booking-date__help" id="select-date__help">Необходимо указать дату отплытия.</div>
			</div>
		</div>
		<div class="booking-cost">
			<div class="booking-cost__text">Итоговая сумма за билет</div>
			<div class="booking-cost__cost">290 рублей</div>
		</div>
		<div class="booking-footer">
			<div class="booking-footer__button">
				<button type="submit">Забронировать билет</button>
			</div>
			<div class="booking-footer__text">Выкуп осуществляется в здании вокзала.<br>Бронь закрывается за 30 минут до отправления.</div>
		</div>
	</form>
	<div class="overlay">
		<div class="popup">
			<div class="popup-close">&times;</div>
			<h2 class="popup-title">Ваш билет заказан.</h2>
			<div class="popup-text">Спасибо за заказ. Курьер свяжется с Вами для уточнения условий доставки</div>
			<button class="popup__button">Закрыть</button> 
		</div>
	</div>
</section>