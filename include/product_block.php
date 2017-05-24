<?php
		
		$idoptions = $product['idoptions'];
		$result2 = mysql_query("SELECT * FROM options WHERE idoptions='$idoptions'",$db);
		$options = mysql_fetch_array($result2);
	?>
	
	<product_block>

		<image_block>
			<img src="<?php echo $product['image'];?>" width="175px" >
		</image_block>	
	
		<description_block>
		
			<?php
				echo 
				"
					<a href=''> <b>{$product['name']}</b> </a> <br>
					Категория:  <b>{$product['category']}</b> <br>
					Подкатегория:  <b>{$product['subcategory']}</b> <br>
				";
				
				if($options['wires'])
				echo "Число жил:  <b>{$options['wires']}</b> <br>";

				if($options['material'])
				echo "Материал:  <b>{$options['material']}</b> <br>";

				if($options['color'])
				echo "Цвет:  <b>{$options['color']}</b> <br>";

				if($options['diameter'])
				echo "Диаметр:  <b>{$options['diameter']} мм</b> <br>";

				if($options['number_lamps'])
				echo "Число ламп:  <b>{$options['number_lamps']}</b> <br>";

				if($options['nests'])
				echo "Число гнезд:  <b>{$options['nests']}</b> <br>";

				if($options['keys'])
				echo "Число клавиш:  <b>{$options['keys']}</b> <br>";

				if($options['modules'])
				echo "Число модулей:  <b>{$options['modules']}</b> <br>";

				if($options['poles'])
				echo "Число полюсов:  <b>{$options['poles']}</b> <br>";

				if($options['phases'])
				echo "Число фаз:  <b>{$options['phases']}</b> <br>";

				if($options['tariffs'])
				echo "Тарифов:  <b>{$options['tariffs']}</b> <br>";

				if($options['current'])
				echo "Ток:  <b>{$options['current']} А</b> <br>";

				if($options['length'])
				echo "Длина:  <b>{$options['length']} м</b> <br>";

				if($options['ground'])
				echo "Заземление:  <b>{$options['ground']}</b> <br>";

				if($options['section'])
				echo "Сечение:  <b>{$options['section']} мм2</b> <br>";

				if($options['installation'])
				echo "Установка:  <b>{$options['installation']}</b> <br>";

				if($options['type'])
				echo "Тип:  <b>{$options['type']}</b> <br>";

				if($options['socle'])
				echo "Тип цоколя:  <b>{$options['socle']}</b> <br>";

				if($options['voltage'])
				echo "Напряжение:  <b>{$options['voltage']} В</b> <br>";

				if($options['power'])
				echo "Мощность:  <b>{$options['power']} Вт</b> <br>";

				echo 
				"
					Производитель:  <b>{$product['manufacturer']} </b> <br>
					Цена:  <b>{$product['price']} руб</b> <br>
					<form action=''>
						<input value='В корзину' type='submit'>
					</form>
				";
			?>
			
		</description_block>
	
	</product_block>	
