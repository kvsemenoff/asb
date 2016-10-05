<section class="devision">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="az-left">Дивизионы</h2>
				<div id="az-select2" class="az-select az-right az-select_style">
					<select name="" id="">
						<option value="1">Санкт-Петербург</option>
						<option value="2">Москва</option>
						<option value="3">Красноярск</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="tabs tabs__margin2 tabs_style">
					<input id="tab_1" type="radio" name="tab" checked="checked"/>
					<input id="tab_2" type="radio" name="tab"/>
					<label for="tab_1" id="tab_l1">все</label>
					<label for="tab_2" id="tab_l2">кирпич</label>
					<div class="tabs_cont tabs_cont_style">
						<div id="tab_c1">
							<span class="tab-span">Команды играют в два круга, затем проводится Финал четырех</span>
						</div>
						<div id="tab_c2">
						2
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){
	var select = $('#az-select2');

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