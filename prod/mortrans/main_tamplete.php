<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tранспортная Компания	МорТранс</title>
	</head>
	<body>
		<?//print_r($_SERVER['REQUEST_URI'] );?>
		<?//$production="/diplom/";?>
		<?//$production="/";?>
		<? include("header.php");?>
		<? include("top-menu.php");?>
		<section class="mainsection">
			<div class="container">
				<div class="row">
					<div class="col-lg-4  media-collapse">
						<? include("left-panel.php");?>
					</div>
					<div class="col-12 col-lg-8">
						<? /*if ($_SERVER['REQUEST_URI']==$production) include("main-content.php");
						else include(substr($_SERVER['REQUEST_URI'],strlen($production)));*/
						switch ($_GET['id']) {
						case "": include("main-content.php");
						break;
						case "1": include("content.php");
						break;
						case "2": include("booking.php");
						break;
						};
						?>
					</div>
				</div>
			</div>
		</section>
		<div class="footer">
			<img class="footer-topborder" src="src/img/footer/line.png" alt="">
			<? include('footer.php')?>
		</div>
		<link rel="stylesheet" href="src/css/font.css">
		<link rel="stylesheet" href="src/css/bootstrap.min.css">
		<script src="https://use.fontawesome.com/6be32eb25a.js"></script>
		<link rel="stylesheet" href="src/css/tcal.css" />
		<link rel="stylesheet" href="src/css/style.css">
		<script
				src="https://code.jquery.com/jquery-3.3.1.min.js"
				integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous">
		</script>
		<script >window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>')</script>
		<script src="src/js/bootstrap.min.js"></script>
		<script src="src/js/myscript.js"></script>
		<script src="src/js/tcal.js"></script>
		<script src="src/js/mailAjaks.js"></script>
	</body>
</html>