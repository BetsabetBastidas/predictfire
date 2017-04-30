<?php
require_once ('C:/wamp/www/Predict-fire/jpgraph-4.0.2/src/jpgraph.php');
require_once ('C:/wamp/www/Predict-fire/jpgraph-4.0.2/src/jpgraph_scatter.php');
 
	$query = "SELECT ID , BRIGHTNESS FROM record where id <= 100";
	print GraficarDispersion($query);//consulta de dos columnas X y Y
	
	Function GraficarDispersion($query){
		
		$datosx= array();
		$datosy= array();
		$conexion = mysql_connect("localhost", "root", "");
		mysql_select_db("SPACE_APP_CHALLENGER", $conexion);
		
		
		$consulta = mysql_query($query, $conexion) or die ("Fallo en obtener los datos");
		$numerofilas = mysql_num_rows ($consulta);
		
		
		
		for ($i=0; $i<$numerofilas; $i++)  
				{  
			$row = mysql_fetch_array($consulta);  
			$datax[$i] = $row['ID'];
			$datay[$i] = $row['BRIGHTNESS'];
				};
				
				
		$graph = new Graph(520,270);
		$graph->SetScale("linlin");

		$graph->img->SetMargin(20,20,20,20);		
		$graph->title->SetFont(FF_FONT1,FS_BOLD);

		$sp1 = new ScatterPlot($datay,$datax);

		$graph->Add($sp1);
		$graph->Stroke();		
	}
?>
