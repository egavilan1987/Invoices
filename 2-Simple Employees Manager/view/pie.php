<?php
	require_once "../classes/connection.php";

 			$c=new Connect();
                        $connection=$c->connection();

                            $sql="SELECT d.name_department, count(e.id_employee)
                            FROM departments d
                            LEFT JOIN employees e ON d.id_department=e.id_department
                            GROUP BY d.id_department
                            ORDER BY count(e.id_employee)DESC,
                            d.name_department ASC";
                            $result=mysqli_query($connection,$sql); 

	$valoresY=array();//Employees per departments
	$valoresX=array();//Departments

	while ($row=mysqli_fetch_row($result)){
			$values2[]=$row[0];
			$values3[]=$row[1];
			echo $row2[1];
		}

	$values2=json_encode($values2);
	$values2=json_encode($values2);

	echo "<br/>";
	echo "DEPARTMENTS";
	echo "<br/>";
	echo $values2;
	echo "<br/>";
	echo "Number of employess per department.";
	echo "<br/>";
	echo $values3;
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
	
	values2=crearCadenaBarras('<?php echo $val2 ?>');
	values3=crearCadenaBarras('<?php echo $val3 ?>');

var data = [{
  values: values3,
  labels: values2,
  type: 'pie'
}];

	var layout = {
  		height: 400,
  		width: 800
	};

	Plotly.newPlot('graficaBarras', data, layout);
</script>
