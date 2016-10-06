<section class="liders">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="az-left">Лидеры</h2>
				
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3">
				<div id="az-select3" class="az-select az-margin-bottom10">
					<select name="" id="">
						<option value="1">Вся лига</option>
						<option value="2">Северный дивизион</option>
						<option value="3">Южный дивизион</option>
					</select>
				</div>
			</div>
			<div class="col-md-3">
				<div id="az-select4" class="az-select az-margin-bottom10">
					<select name="" id="">
						<option value="1">Очки в среднем за игру</option>
						<option value="2">Передачи в среднем за игру</option>
						<option value="3">Перехваты в среднем за игру</option>
						<option value="4">Подборы в среднем за игру</option>
						<option value="5">Потери в среднем за игру</option>
						<option value="6">Точность штрафных</option>
						<option value="7">Точность 2-очковых</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tabs tabs__margin2 tabs_style">
					<input id="tab_3" type="radio" name="tab2" checked="checked"/>
					<input id="tab_4" type="radio" name="tab2"/>
					<label for="tab_3" id="tab_l3">мужчины</label>
					<label for="tab_4" id="tab_l4">женщины</label>
					<div class="tabs_cont tabs_cont_style">
						<div id="tab_c3">
							<div class="az-col3 az-sm-margin10 az-lg-margin4">
								
							</div>
							<div class="az-col3 az-xs-margin4 az-lg-margin4">
								
							</div>
							<div class="az-col3 az-sm-margin10 az-lg-margin4">
								
							</div>
							<div class="az-col3 az-xs-margin4 az-lg-margin0">
								
							</div>
						</div>
						<div id="tab_c4">
							2
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){
	var select = $('#az-select3');

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
	var select2 = $('#az-select4');

	var option2 = select2.find('select option');
	var str2 = '<div class="az-options">';
	for(var i=0; i<option2.length; i++){
		str2+= '<div data-val="' +option2.eq(i).val() + '">' + option2.eq(i).text() + '</div>'
	}
	str2+= '</div>';
	select2.html(select2.html() + str2);

	select2.click(function(){
		select2.find('.az-options').slideToggle(0);
		select2.toggleClass('az-select-focus');
	});
	select2.find('select').mouseup(function(){
		return false;
	});
	select2.find('select').mousedown(function(){
		return false;
	});
	select2.find('.az-options div[data-val]').click(function(){
		select2.find('select').val($(this).attr('data-val'));
	});
});
</script>