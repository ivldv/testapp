<section class="header">
	<div class="container no-pading">
		<div class="header-wrap">
			<div class="header-text">
				<div class="header-logo">
					<a href="/"><img src="src/img/header/logo.png" alt="Логотип"></a>
				</div>
				<div class="header-title">
					<span class="header-title__small">Муниципальное предприятие</span>
					<h1 <?if($_GET['id']=="") echo ('class="header-title-o"');?>><span class="header-title__upc">транспортная компания	</span>МорТранс</h1>

					<?if($_GET['id']=="") echo ('<div class="header-title__collapse">Северная транспортная компания</div>');?>
			
				</div>
			</div>
			<div class="header-buttons">
				<button class="button button__small"><i class="fa fa-eye" aria-hidden="true"></i></button>
				<button class="button button__medium">РУС <i class="fa fa-angle-down" aria-hidden="true"></i></button>
				<button class="button button__large"><i class="fa fa-user-o" aria-hidden="true"></i> Войти</button>
			</div>
		</div>
		
	</div>
</section>