<?php
	require_once "../../classes/connection.php";

 			$c=new Connect();
                        $connection=$c->connection();

                            $sql="SELECT DATE_FORMAT(created_date, '%Y-%m'), COUNT(DATE_FORMAT(created_date, '%Y-%m'))
                            FROM employees GROUP BY DATE_FORMAT(created_date, '%m-%Y')";
                            $result=mysqli_query($connection,$sql); 


	while ($row=mysqli_fetch_row($result)){
			$valuesX[]=$row[0];
			$valuesY[]=$row[1];
		}

	$valuesX=json_encode($valuesX);
	$valuesY=json_encode($valuesY);

?>

<div id="lineGraphic"></div>

<script type="text/javascript">
	function createLineArrays(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for (var x in parsed){
			arr.push(parsed[x]);
		}
		return arr; 
	}
</script>

<script type="text/javascript">

	valuesX=createLineArrays('<?php echo $valuesX ?>');
	valuesY=createLineArrays('<?php echo $valuesY ?>');

	var trace1 = {
		x: valuesX,
		y: valuesY,
		type: 'scatter'
	};

	var data = [trace1];

	Plotly.newPlot('lineGraphic', data);
</script>