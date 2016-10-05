<section class="results">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>результаты</h2>
			</div>
			<div class="col-md-4">
				<div id="az-select" class="az-select">
					<select name="" id="">
						<option value="1">Лига Белова</option>
						<option value="2">Лига Петрова</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<span class="span-table">женщины</span>
				<table class="az-table az-table_style">
					<tr>
						<td>21.12</td>
						<td>ПАФКСИТ — НГПУ</td>
						<td><strong>Online</strong></td>
						<td><strong>Live</strong></td>
					</tr>
					<tr>
						<td>21.12</td>
						<td>МГАФК — МГУ</td>
						<td>17:30</td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 8</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>21.12</td>
						<td>МГЛУ — БГУИР</td>
						<td>19:00</td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 9</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>СамГТУ — РЭУ</td>
						<td><strong>112-124</strong></td>
						<td><span class="ticon3"></span><span class="ticon2"></span><span class="ticon4"></span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>МГАФК — МГУ</td>
						<td><strong>83-16</strong></td>
						<td><span class="ticon2"></span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>МГАФК — МГУ</td>
						<td>102-44</td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 10</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>19.12</td>
						<td>МГАФК — МГУ</td>
						<td><strong>83-16</strong></td>
						<td><span class="ticon2"></span></td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<span class="span-table">мужчины</span>
				<table class="az-table az-table_style">
					<tr>
						<td>21.12</td>
						<td>ПАФКСИТ — НГПУ</td>
						<td><strong>Online</strong></td>
						<td><strong>Live</strong></td>
					</tr>
					<tr>
						<td>21.12</td>
						<td>МГАФК — МГУ</td>
						<td>17:30</td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 8</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>21.12</td>
						<td>МГЛУ — БГУИР</td>
						<td>19:00</td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 9</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>СамГТУ — РЭУ</td>
						<td><strong>112-124</strong></td>
						<td><span class="ticon3"></span><span class="ticon2"></span><span class="ticon4"></span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>МГАФК — МГУ</td>
						<td><strong>83-16</strong></td>
						<td><span class="ticon2"></span></td>
					</tr>
					<tr>
						<td>20.12</td>
						<td>МГЛУ — БГУИР</td>
						<td><strong>102-44</strong></td>
						<td><span class="ticon1">
							<div class="az-tpopup">
								<span class="az-title">«Сибур Арена»</span>
								<span class="az-text">Санкт-Петербург, Футбольная аллея, дом 10</span>
							</div>
						</span></td>
					</tr>
					<tr>
						<td>19.12</td>
						<td>МГАФК — МГУ</td>
						<td><strong>83-16</strong></td>
						<td><span class="ticon2"></span></td>
					</tr>
				</table>
			</div>
							

		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="#" class="az-tlink az-margin-top20">Все результаты</a>
			</div>
		</div>
	</div>
</section>
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