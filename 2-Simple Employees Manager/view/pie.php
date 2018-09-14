<?php
	require_once "../classes/connection.php";


 							$c=new Connect();
                            $connection=$c->connection();

                            $sql="SELECT id_department,
                                         name_department 
                                    FROM departments";
                            $result=mysqli_query($connection,$sql);

                            $sql2="SELECT id_department 
                                    FROM employees";
                            $result2=mysqli_query($connection,$sql2);


                            $sql3="SELECT d.name_department, count(e.id_employee)
                            FROM departments d
                            LEFT JOIN employees e ON d.id_department=e.id_department
                            GROUP BY d.id_department
                            ORDER BY count(e.id_employee)DESC,
                            d.name_department ASC";
                            $result3=mysqli_query($connection,$sql3); 



/*
$sql="SELECT emp.id_employee,
                emp.created_date,
                emp.updated_date
                
                FROM employees AS emp
                INNER JOIN departments AS dep
                ON emp.id_department=dep.id_department
                AND emp.id_employee='$idEmployee'";

*/




	$valoresY=array();//Employees per departments
	$valoresX=array();//Departments

	while ($ver=mysqli_fetch_row($result)){
		$valoresY[]=$ver[0];
		$valoresX[]=$ver[1];
	}

	while ($row=mysqli_fetch_row($result2)){
			$val[]=$row[0];
		}

	while ($row2=mysqli_fetch_row($result3)){
			$val2[]=$row2[0];
			$val3[]=$row2[1];
			echo $row2[1];
		}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
	$val=json_encode($val);
	$val2=json_encode($val2);
	$val3=json_encode($val3);


	echo "<br/>";
	echo "DEPARTMENTS";
	echo "<br/>";
	echo $datosX;
	echo "<br/><br/>";
	echo "ID OF THE DEPARTMENTS";
	echo "<br/>";
	echo $datosY;
	echo "<br/><br/>";
	echo "ID OF THE DEPARTMENTS STORED IN EMPLOYEES' TABLE";
	echo "<br/>";
	echo $val;
	echo "<br/><br/>";
	echo "TESTING";
	echo "<br/>";
	echo $val2;
	echo "<br/>";
	echo $val3;
	

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
	val=crearCadenaBarras('<?php echo $val ?>');

	val2=crearCadenaBarras('<?php echo $val2 ?>');
	val3=crearCadenaBarras('<?php echo $val3 ?>');

var data = [{
  values: val3,
  labels: val2,
  type: 'pie'
}];

	var layout = {
  		height: 400,
  		width: 800
	};

	Plotly.newPlot('graficaBarras', data, layout);
</script>