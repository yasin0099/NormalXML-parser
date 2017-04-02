<?php
$dom = simplexml_load_file("pizza.xml");
echo "<h1 align='center'>".$dom["name"]."</h1>";
echo "<div align='center'>".$dom["address"]."</div>";
foreach($dom->item as $itm)
{
		echo"<br>";
		echo "<div><b>".$itm["name"]."</b></div>";
		echo "<div><i>".$itm["size"]. "</i></div>";
		echo "</br>";
		echo "<table>";
			foreach($itm->food as $f)
			{	
				echo "<tr>";
				echo "<td>";
				echo "<div>".$f["name"]."</div>";
				echo"</td>";
				foreach($itm->food->price as $p)
				{
					
					echo "<td>";
					echo "<div><i>"."&nbsp"."$".$p."</i></div>";
					echo "</td>";
					
				}
				echo "</tr>";
		}
		
		echo "</table>";
		
}

?>