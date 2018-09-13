<?php
	require_once "../classes/connection.php";


 							$c=new Connect();
                            $connection=$c->connection();

                            $sql="SELECT id_department,
                                         name_department 
                                    FROM departments";
                            $result=mysqli_query($connection,$sql);



	$valoresY=array();//Employees per departments
	$valoresX=array();//Departments

	while ($ver=mysqli_fetch_row($result)){
		$valoresY[]=$ver[0];
		$valoresX[]=$ver[1];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);


	echo "--------------------------------------";
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
  values: ["1","200","0","0","5","6","7","8","0","100"],
  labels: datosX,
  type: 'pie'
}];

	var layout = {
  		height: 400,
  		width: 800
	};

	Plotly.newPlot('graficaBarras', data, layout);
</script>