<?php 
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
	
	
			//echo "<p>$meta_key - $update_time</p>"; // ... в данном виде (не то что нужно)
	/*
	?>
	<script>
	time_elements.forEach(function(item, i, arr) { // этот скрипт раскладывает время по ячейкам, но только последнее полученное значение
		 item.innerHTML = '<?php echo "$update_time"?>'; 
	 });

	var items = $(".selector");
	for (var j = 1; j < items.length; j++) {
	 $(items[j]).find('.selector.num').prepend(''+(j+1)+'.');   
	}
	</script>
	<?php
	*/
	
	}
echo('</div>');	//закрытие дива результатов из mysql
?>