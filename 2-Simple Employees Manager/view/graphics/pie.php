<?php
	require_once "../../classes/connection.php";

 			$c=new Connect();
                        $connection=$c->connection();

                            $sql="SELECT d.name_department, count(e.id_employee)
                            FROM departments d
                            LEFT JOIN employees e ON d.id_department=e.id_department
                            GROUP BY d.id_department
                            ORDER BY count(e.id_employee)DESC,
                            d.name_department ASC";
                            $result=mysqli_query($connection,$sql); 


	while ($row=mysqli_fetch_row($result)){
			$valuesX[]=$row[0];
			$valuesY[]=$row[1];
		}

	$valuesX=json_encode($valuesX);
	$valuesY=json_encode($valuesY);

?>

<div id="pieGraphic"></div>

<script type="text/javascript">
	function createPieArrays(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for (var x in parsed){
			arr.push(parsed[x]);
		}
		return arr; 
	}
</script>

<script type="text/javascript">
	
	valuesX=createPieArrays('<?php echo $valuesX ?>');
	valuesY=createPieArrays('<?php echo $valuesY ?>');

var data = [{
  values: valuesY,
  labels: valuesX,
  type: 'pie'
}];

	var layout = {
  		height: 400,
  		width: 800
	};

	Plotly.newPlot('pieGraphic', data, layout);
</script>
