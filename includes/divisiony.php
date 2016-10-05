<section class="results">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>Дивизионы</h2>
			</div>
			<div class="col-md-4">
				<div id="az-select2" class="az-select">
					<select name="" id="">
						<option value="1">Санкт-Петербург</option>
						<option value="2">Москва</option>
						<option value="3">Красноярск</option>
					</select>
				</div>
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