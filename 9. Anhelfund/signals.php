<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == '1')
{
 if( have_rows('signals') ):
	while ( have_rows('signals') ) : the_row();
		if( get_row_layout() == 'signals_row' ): ?>
			<tr>
				<td class="row_num hide"></td>
				<td><?php the_sub_field('signal_name') ?></td>
				<td>
					<?php $cell_1 = get_sub_field('cell_1');
						if ($cell_1):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_1['cell_type_1']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_1['cell_value_1']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_2 = get_sub_field('cell_2');
						if ($cell_2):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_2['cell_type_2']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_2['cell_value_2']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_3 = get_sub_field('cell_3');
						if ($cell_3):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_3['cell_type_3']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_3['cell_value_3']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_4 = get_sub_field('cell_4');
						if ($cell_4):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_4['cell_type_4']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_4['cell_value_4']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_5 = get_sub_field('cell_5');
						if ($cell_5):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_5['cell_type_5']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_5['cell_value_5']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_6 = get_sub_field('cell_6');
						if ($cell_6):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_6['cell_type_6']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_6['cell_value_6']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_7 = get_sub_field('cell_7');
						if ($cell_7):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_7['cell_type_7']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_7['cell_value_7']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_8 = get_sub_field('cell_8');
						if ($cell_8):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_8['cell_type_8']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_8['cell_value_8']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_9 = get_sub_field('cell_9');
						if ($cell_9):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_9['cell_type_9']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_9['cell_value_9']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_10 = get_sub_field('cell_10');
						if ($cell_10):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_10['cell_type_10']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_10['cell_value_10']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
						
						
						
<?php		
if (!isset($divtimeout))
{
$link = mysqli_connect("localhost", "vologin2v_anhel", "a&uX44kR", "vologin2v_anhel"); //Стучимся в базу
if (!$link) {
	echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
?> 

<?php 
echo('<div class="field_rows" style="display:none;">');//див с временем из бд
$result=mysqli_query($link,"SELECT * FROM `wp_postmeta` WHERE `meta_key` LIKE '%cell_value%' AND `meta_value` NOT LIKE '%field_%'"); // Запрос в БД
  while($row = mysqli_fetch_array($result)){ // Вывод полученных результатов...
		$meta_key = $row['meta_key']; // Это значение никуда подставлять не надо, выводится временно для ориентирования
		$update_time = $row['UPDATE_TIME'];
		$update_time = explode(' ',$update_time);
		$update_time = $update_time[1];
		$pos = strrpos($update_time,':');
		$update_time = substr($update_time,0,$pos);
		//signals_0_cell_1_cell_value_1 
		
		preg_match('/signals_(.*)_cell_(.*)_cell_value_(.*)/i',$meta_key,$arr); //signals_1_cell_10_cell_value_10 (1 колонка, 10 ячейка)

		
		
		
		echo(' <div row="'.$arr[1].'" col="'.$arr[2].'">'.$update_time.'</div>');//поля для таблицы с параметрами ряда и колонки в таблице
		
	
    }
echo('</div>');	//закрытие дива результатов из mysql
$divtimeout = true;
mysqli_close($link);
}
?>						
				</td>
			</tr>
				
		
		<?php	endif;
	endwhile; 
endif;

	
	exit();
}
/*
Template Name: Страница "Сигналы"
 */
get_header();
?>
<div class="content">
	<div class="page__row">
		<div class="page__title tdt__title">
			<img src="<?php echo get_template_directory_uri(  );?>/img/table-icon.svg" alt="Торговые сигналы">
			<h2>Торговые сигналы</h2>
		</div>
		<div class="page__clock">
			<p>Время UTC: <span id="utc_clock">00:00:00</span></p>
			<p>Системное время: <span id="clock">00:00:00</span></p>
		</div>
	</div>
	<div class="page__body">
		<div class="tutorial">
			<div class="tutorial__item">
				<div class="tutorial__block tutorial__block_g"></div>
				<p>— Long. Ордер на покупку</p>
			</div>
			<div class="tutorial__item ">
				<div class="tutorial__block tutorial__block_r"></div>
				<p>— Short. Ордер на продажу</p>
			</div>
			<div class="tutorial__item">
				<div class="tutorial__block tutorial__block_gr">
				</div>
				<p>— Сигнал отменен</p>
			</div>
		</div>
<div class="table__wrap">
<table class="tdt__table table">
<thead>
<tr>
	<th class="hide">#</th>
	<th>Рынок</th>
	<th>Сигнал №1</th>
	<th>Сигнал №2</th>
	<th>Сигнал №3</th>
	<th>Сигнал №4</th>
	<th>Сигнал №5</th>
	<th>Сигнал №6</th>
	<th>Сигнал №7</th>
	<th>Сигнал №8</th>
	<th>Сигнал №9</th>
	<th>Сигнал №10</th>
</tr>
</thead>
<tbody class="updating">
<?php if( have_rows('signals') ):
	while ( have_rows('signals') ) : the_row();
		if( get_row_layout() == 'signals_row' ): ?>
			<tr>
				<td class="row_num hide"></td>
				<td><?php the_sub_field('signal_name') ?></td>
				<td>
					<?php $cell_1 = get_sub_field('cell_1');
						if ($cell_1):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_1['cell_type_1']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_1['cell_value_1']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_2 = get_sub_field('cell_2');
						if ($cell_2):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_2['cell_type_2']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_2['cell_value_2']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_3 = get_sub_field('cell_3');
						if ($cell_3):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_3['cell_type_3']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_3['cell_value_3']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_4 = get_sub_field('cell_4');
						if ($cell_4):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_4['cell_type_4']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_4['cell_value_4']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_5 = get_sub_field('cell_5');
						if ($cell_5):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_5['cell_type_5']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_5['cell_value_5']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_6 = get_sub_field('cell_6');
						if ($cell_6):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_6['cell_type_6']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_6['cell_value_6']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_7 = get_sub_field('cell_7');
						if ($cell_7):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_7['cell_type_7']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_7['cell_value_7']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_8 = get_sub_field('cell_8');
						if ($cell_8):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_8['cell_type_8']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_8['cell_value_8']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_9 = get_sub_field('cell_9');
						if ($cell_9):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_9['cell_type_9']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_9['cell_value_9']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
				</td>
				<td>
					<?php $cell_10 = get_sub_field('cell_10');
						if ($cell_10):?>
							<div class="cell">
								<div class="signal signal__<?php echo $cell_10['cell_type_10']; ?>">
									<div class="signal__body">
										<p class="signal__value"><?php echo $cell_10['cell_value_10']; ?></p>
										<div class="signal__row">
											<p class="signal_time">12:34</p>
												<svg class="signal__arrow">
													<use xlink:href="#signal-arrow"></use>
												</svg>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>						
<?php	
if (!isset($divtimeout)) //чтобы много раз не выводил этот див и не скакала зебра в таблице спрятал его в <td> и сделал условие чтобы в цикле рядов он выводился только 1 раз (это див с временем из mysql)
{
$link = mysqli_connect("localhost", "vologin2v_anhel", "a&uX44kR", "vologin2v_anhel"); //Стучимся в базу
if (!$link) {
	echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
?> 

<?php 
echo('<div class="field_rows" style="display:none;">');//див с временем из бд
$result=mysqli_query($link,"SELECT * FROM `wp_postmeta` WHERE `meta_key` LIKE '%cell_value%' AND `meta_value` NOT LIKE '%field_%'"); // Запрос в БД
  while($row = mysqli_fetch_array($result)){ // Вывод полученных результатов...
		$meta_key = $row['meta_key']; // Это значение никуда подставлять не надо, выводится временно для ориентирования
		$update_time = $row['UPDATE_TIME'];
		$update_time = explode(' ',$update_time);
		$update_time = $update_time[1];
		$pos = strrpos($update_time,':');
		$update_time = substr($update_time,0,$pos);
		//signals_0_cell_1_cell_value_1 
		
		preg_match('/signals_(.*)_cell_(.*)_cell_value_(.*)/i',$meta_key,$arr); //signals_1_cell_10_cell_value_10 (1 колонка, 10 ячейка)

		
		
		
		echo(' <div row="'.$arr[1].'" col="'.$arr[2].'">'.$update_time.'</div>');//поля для таблицы с параметрами ряда и колонки в таблице
		
	
    }
echo('</div>');	//закрытие дива результатов из mysql
mysqli_close($link);
$divtimeout = true;
}
?>						
						
						
				</td>
				

			</tr>
			
		<?php	endif;
	endwhile; 
endif;
?>
</tbody>
	</table>
</div>
		<div class="tdt__line"></div>
		<p class="tdt__article">
		<?php the_field('tdt_text');?>
		</p>
		<a href="#open-risk" class="btn-risk tdt__btn abtn abtn_b">Риски</a>
	</div>
	<?php the_content();?>
</div>
<svg width="0" height="0" class="hidden">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 9" id="signal-arrow">
		<g>
			<path
				d="M8.001 0c.265 0 .53.101.731.303l6.352 6.351a1.034 1.034 0 01-1.463 1.463L8 2.497l-5.62 5.62A1.034 1.034 0 01.918 6.654L7.27.303C7.472.1 7.736 0 8 0z">
			</path>
		</g>
	</symbol>
</svg>


<script>
 function digitalClock() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
        if (hours < 10) hours = "0" + hours;
        if (minutes < 10) minutes = "0" + minutes;
        if (seconds < 10) seconds = "0" + seconds;
          document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;
          setTimeout("digitalClock()", 1000);
   }

	 var locale_time_start = new Date(); /*get locale time*/
    var server_time = new Date('<?php echo date('d F Y H:i:s');?>'); /*get server time*/
    var specification_time = getTimeDifference(locale_time_start, server_time);
 
    function showTime() {
        var server_time_zone = '<?php echo date('\U\T\C P');?>'; /*time offset*/
        var locale_time = new Date(); /*get locale time*/
        locale_time.setHours(locale_time.getHours()-specification_time[0]);
        var dH=''+locale_time.getHours();dH=dH.length<2?'0'+dH:dH;
        locale_time.setMinutes(locale_time.getMinutes()-specification_time[1]);
        var dM=''+locale_time.getMinutes();dM=dM.length<2?'0'+dM:dM;
        locale_time.setSeconds(locale_time.getSeconds()-specification_time[2]);
        var dS=''+locale_time.getSeconds();dS=dS.length<2?'0'+dS:dS;
        var tmp=dH+':'+dM+':'+dS;
        document.getElementById('utc_clock').innerHTML=tmp;
        var t=setTimeout('showTime()',1000); /*рекурсивный вызов каждую сек. для корректировки времени*/
    }
 
    function getTimeDifference(time_1, time_2) {
        var hovers_difference = time_1.getHours() - time_2.getHours();
        var minutes_difference = time_1.getMinutes() - time_2.getMinutes();
        var seconds_difference = time_1.getSeconds() - time_2.getSeconds();
        var time_difference = [hovers_difference, minutes_difference, seconds_difference];
        return time_difference;
    }
 
  showTime(); /*выполняем ф-ю вывода времени*/
	digitalClock();
</script>
<?php
get_footer( );