<content>
	
	<?php
	
		$page = $_GET['page'] ;
		include ("bd.php");
		if (($page == 'index' || $page == ''))
		{
			
			$result = mysql_query("SELECT * FROM product WHERE idproduct IN ('ОЛ1','ЩОСЭ2','ПТ2')",$db);
			for(;$product = mysql_fetch_array($result);)
				include ("product_block.php");
		}
		else
		{
			if ((isset ($_POST['query']))&&($page == 'search') )
			{
				$query=$_POST['query'];
				$query = strip_tags($query);
				$query = mysql_real_escape_string($query);
				if (strlen($query) < 1)
					echo '<p>короткий поисковый запрос.</p>';
				else 
					if (strlen($query) > 128)
						echo '<p>длинный поисковый запрос.</p>';
					else 
					{
						echo "Результаты поиска по запросу: <b> $query </b>";
						$result = mysql_query("SELECT * FROM product WHERE manufacturer LIKE '%$query%' OR name LIKE '%$query%'",$db);
						for(;$product = mysql_fetch_array($result);)
						include ("product_block.php");
					}
			}
			else
			{
				$result = mysql_query("SELECT * FROM product WHERE subcategory='$page'",$db);
				for(;$product = mysql_fetch_array($result);)
				include ("product_block.php");
			}
			
		}
		
	?>
	
</content>