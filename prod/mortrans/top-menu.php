<div class="nav__wrap">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light topmenu ">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="true" aria-controls="navbarSupportedContent">
			<i class="fa fa-bars" aria-hidden="true"></i><span id="topmenu-namebutton">Меню</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="navbar-nav">

					<div class="dropdown">
					<a href="#" class="nav-item nav-link dropdown dropdown-toggle topmenu-item" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">О предприятии <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item topmenu-dropdown__item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=1">История предприятия</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Руководство</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Нормативно-правовая база</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Наш флот</a>
					</div>
				</div>
				
					<a href="#" class="nav-item nav-link topmenu-item">Расписание</a>
					<a href="#" class="nav-item nav-link topmenu-item">Стоимость билетов</a>
					<a href="<?echo($_SERVER['SCRIPT_URL'])?>?id=2" class="nav-item nav-link topmenu-item">Забронировать билеты </a>
			<?//		<a href="#" class="nav-item nav-link topmenu-item">Дополнительные услуги <i class="fa fa-angle-down" aria-hidden="true"></i></a>?>
			<div class="dropdown">
					<a href="#" class="nav-item nav-link dropdown-toggle topmenu-item" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Дополнительные услуги <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
						<a class="dropdown-item topmenu-dropdown__item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=1">История предприятия</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Руководство</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Нормативно-правовая база</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Наш флот</a>
					</div>
</div>
	<div class="dropdown">
					<a href="#" class="nav-item nav-link dropdown-toggle topmenu-item" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Информация для пассажиров <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
						<a class="dropdown-item topmenu-dropdown__item" href="<?echo($_SERVER['SCRIPT_URL'])?>?id=1">История предприятия</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Руководство</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Нормативно-правовая база</a>
						<a class="dropdown-item topmenu-dropdown__item" href="#">Наш флот</a>
					</div>
</div>
					<?//<a href="#" class="nav-item nav-link topmenu-item">Информация для пассажиров <i class="fa fa-angle-down" aria-hidden="true"></i></a>?>
					<a href="<?echo($_SERVER['SCRIPT_URL'])?>" class="nav-item nav-link topmenu-item">Kонтакты</a>
				</div>
			</div>
		</nav>
	</div>
	<form class="topmenu-serch" id="serch-form">
	<input type="text" class="topmenu-serch__input">
	<button type="button" class="topmenu-serch__button"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>