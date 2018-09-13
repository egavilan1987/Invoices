<?php
	require "php/conexion.php";
	$conexion=conexion();
	$sql="SELECT fechaVenta,montoVenta FROM ventas ORDER BY fechaVenta";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fecha

	while ($ver=mysqli_fetch_row($result)){
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);


	echo $datosX;
	echo "--------------------------------------";
	echo $datosY;

?>

<div id="graficaBarras"></div>


<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for (var x in parsed){
			arr.push(parsed[x]);
		}
		return arr; 
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX ?>');
	datosY=crearCadenaBarras('<?php echo $datosY ?>');

var data = [{
  values: datosY,
  labels: datosX,
  type: 'pie'
}];

	var layout = {
  		height: 400,
  		width: 800
	};

	Plotly.newPlot('graficaBarras', data, layout);
</script>