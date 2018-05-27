<form class="serch">
	<input type="text" class="serch__input" placeholder="Поиск по сайту">
	<button type="submit" class="serch__button"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
<div class="left-panel">
	<div class="left-panel__menu">
		<h2 class="left-panel__title">Навигация</h2>
		<ul class="nav flex-column ">
			<li class="nav-item dropdown">
				<div id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading7">
							<a class="collapsed list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">О предприятии <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						</div>
						<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
							<a class="list-group-item left-dropdown__item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=1"><i class="fa fa-caret-right" aria-hidden="true"></i><span class="left-dropdown__text">История предприятия</span></a>
							<a class="list-group-item left-dropdown__item" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i><span class="left-dropdown__text">Руководство</span></a>
							<a class="list-group-item left-dropdown__item" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i><span class="left-dropdown__text">Нормативно-правовая база </span></a>
							<a class="list-group-item left-dropdown__item" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i><span class="left-dropdown__text">Наш флот</span></a>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link list-group-item" href="#">Расписание</a>
			</li>
			<li class="nav-item">
				<a class="nav-link list-group-item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=2">Стоимость билетов</a>
			</li>
			<li class="nav-item">
				<a class="nav-link list-group-item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=2">Забронировать билеты</a>
			</li>
		</ul>
	</div>
	<h2 class="left-panel__title">Категории</h2>
	<h2 class="left-panel__title">Погода</h2>
	<div class="wether">
		<div class="wether-date">
			<button class="wether-date__button">Сегодня</button>
			<div class="wether-date__day">Пт</div>
			<div class="wether-date__day">Сб</div>
			<div class="wether-date__day">Вс</div>
			<div class="wether-date__day">Пн</div>
		</div>
		<div class="wether-date__content">
			<div class="wether-date__img"><img src="src/img/leftbar/snow.png" alt=""> </div>
			<div class="wether-date__meteo">
				<div class="wether-date__temp">−27°...<div class="small-temp">−20°</div></div>
				<div class="wether-date__text">Небольшой снег</div>
			</div>
		</div>
	</div>
	<h2 class="left-panel__title">Календарь</h2>
	<div class="calendar">
		<table class="calendar-table">
			<thead>
				<tr>
					<td class="calendar-table__flag"><i class="fa fa-angle-left calendar-table__angle" aria-hidden="true"></i></td>
					<td class="calendar-table__month calendar-table__flag" colspan="5" >Июль 2017</td>
					<td class="calendar-table__flag"><i class="fa fa-angle-right calendar-table__angle" aria-hidden="true"></i></td>
				</tr>
				<tr class="calendar-table__bord">
					<td class="calendar-table__day">Пн</td>
					<td class="calendar-table__day">Вт</td>
					<td class="calendar-table__day">Ср</td>
					<td class="calendar-table__day">Чт</td>
					<td class="calendar-table__day">Пт</td>
					<td class="calendar-table__day">Сб</td>
					<td class="calendar-table__day">Вс</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="calendar-table__number calendar-table__opas">25</td>
					<td class="calendar-table__number calendar-table__opas">26</td>
					<td class="calendar-table__number calendar-table__opas">27</td>
					<td class="calendar-table__number calendar-table__opas">28</td>
					<td class="calendar-table__number calendar-table__opas">29</td>
					<td class="calendar-table__number calendar-table__opas">30</td>
					<td class="calendar-table__number calendar-table__opas">31</td>
				</tr>
				<tr>
					<td class="calendar-table__number calendar-table__flag">1</td>
					<td class="calendar-table__number calendar-table__flag">2</td>
					<td class="calendar-table__number calendar-table__flag">3</td>
					<td class="calendar-table__number calendar-table__flag">4</td>
					<td class="calendar-table__number calendar-table__flag">5</td>
					<td class="calendar-table__number calendar-table__flag">6</td>
					<td class="calendar-table__number calendar-table__flag">7</td>
				</tr>
				<tr>
					<td class="calendar-table__number">8</td>
					<td class="calendar-table__number">9</td>
					<td class="calendar-table__number calendar-table__active">10</td>
					<td class="calendar-table__number">11</td>
					<td class="calendar-table__number">12</td>
					<td class="calendar-table__number">13</td>
					<td class="calendar-table__number">14</td>
				</tr>
				<tr>
					<td class="calendar-table__number">15</td>
					<td class="calendar-table__number">16</td>
					<td class="calendar-table__number">17</td>
					<td class="calendar-table__number">18</td>
					<td class="calendar-table__number">19</td>
					<td class="calendar-table__number">20</td>
					<td class="calendar-table__number">21</td>
				</tr>
				<tr>
					<td class="calendar-table__number">22</td>
					<td class="calendar-table__number">23</td>
					<td class="calendar-table__number">24</td>
					<td class="calendar-table__number">25</td>
					<td class="calendar-table__number">26</td>
					<td class="calendar-table__number">27</td>
					<td class="calendar-table__number">28</td>
				</tr>
				<tr>
					<td class="calendar-table__number calendar-table__opas">29</td>
					<td class="calendar-table__number calendar-table__opas">30</td>
					<td class="calendar-table__number calendar-table__opas">1</td>
					<td class="calendar-table__number calendar-table__opas">2</td>
					<td class="calendar-table__number calendar-table__opas">3</td>
					<td class="calendar-table__number calendar-table__opas">4</td>
					<td class="calendar-table__number calendar-table__opas">5</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>