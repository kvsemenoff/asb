<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Статистика</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style5.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header.php'); ?>
	<div class="clearfix"></div>
	<section class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>СТАТИСТИКА</h1>
					<ul>
						<li><a href="#">МУЖЧИНЫ</a></li>
						<li><a href="#">ЖЕНЩИНЫ</a></li>
					</ul>	

				</div>
				<div class="col-md-8">
					<span class="gamers">
						<span>По</span>
						<a href="#">5</a>
						<a href="#">10</a>
						<a href="#">25</a>
						<a href="#">50</a>
						<a href="#">100</a>
						<span>игроков</span>
					</span>

					<div id="az-select" class="az-select az-margin-bottom10">
						<select name="" id="" > 
							<option value="1">Лига Белова</option>
							<option value="2">Лига Петрова</option>
							<option value="3">Суперфинал</option>
							<option value="4">Дивизионы</option>
							<option value="5">АСБ ФЕСТ</option>
							<option value="6">Матчи звезд</option>
							<option value="7">3x3</option>
							<option value="8">Сборная</option>
							<option value="9">Тренировачный лагерь</option>
							<option value="10">Разное</option>
						</select>						
					</div>

					<div id="az-select2" class="az-select az-margin-bottom10">
						<select name="" id="" > 
							<option value="1">Все дивизионы</option>
						</select>								
					</div>

					<div id="az-select3" class="az-select az-margin-bottom10">
						<select name="" id="" > 
							<option value="1">Очки за игру</option>
							<option value="2">Передачи за игру</option>
							<option value="3">Перехваты за игру</option>
							<option value="4">Подборы за игру</option>
							<option value="5">Потери за игру</option>
							<option value="6">Точность штрафных</option>
							<option value="7">Удачные штрафные за игру</option>	
						</select>					
					</div>
					<div class="clear"></div>
					<a href="#" class="points">Очки за игру(Минимально игр:2)</a>
					<table >
						<tr class="bg_color1" >
							<td>#</td>						
							<td>Игрок</td>
							<td>Команда</td>						
							<td>Игр</td>
							<td>Очки</td>						
							<td>Очки за игру</td>
						</tr>
						<tr>
							<td>1</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>						
							<td>4</td>
							<td>147</td>						
							<td>332</td>
						</tr>
						<tr class="bg_color">
							<td>2</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>						
							<td>2</td>
							<td>71</td>						
							<td>333</td>
						</tr>
						<tr>
							<td>3</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>						
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
						<tr class="bg_color">
							<td>4</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>						
							<td>2</td>
							<td>71</td>						
							<td>333</td>
						</tr>
						<tr>
							<td>5</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>						
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
						<tr class="bg_color">
							<td>6</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>						
							<td>2</td>
							<td>71</td>						
							<td>333</td>
						</tr>
						<tr>
							<td>7</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>						
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
						<tr class="bg_color">
							<td>8</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>						
							<td>2</td>
							<td>71</td>						
							<td>333</td>
						</tr>
						<tr>
							<td>9</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>						
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
						<tr class="bg_color">
							<td>10</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>						
							<td>2</td>
							<td>71</td>						
							<td>333</td>
						</tr>
						<tr>
							<td>11</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>						
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
					</table>
					
					
				</div>
			</div>
		</div>
	</section>
	<?php require_once('includes/footer.php'); ?>
<script>
$(document).ready(function(){
	var select = $('#az-select');

	var option = select.find('select option');
	var str = '<div class="az-options">';
	for(var i=0; i<option.length; i++){
		str+= '<div data-val="' +option.eq(i).val() + '">' + option.eq(i).text() + '</div>'
	}
	str+= '</div>';
	select.html(select.html() + str);

	select.click(function(){
		select.find('.az-options').slideToggle(0);
		select.toggleClass('az-select-focus');
	});
	select.find('select').mouseup(function(){
		return false;
	});
	select.find('select').mousedown(function(){
		return false;
	});
	select.find('.az-options div[data-val]').click(function(){
		select.find('select').val($(this).attr('data-val'));
	});
});
</script>
	
</body>
</html>