<html>
<head>
	 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/tableExport.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/jquery.base64.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/html2canvas.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/jspdf/libs/sprintf.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/jspdf/jspdf.js"></script>
	 <script type="text/javascript" src="http://demos.w3lessons.info/assets/js/tableexport/jspdf/libs/base64.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreamhome";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'SELECT position,max(salary) FROM Staff GROUP BY position ';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$data ="<table border='2'><tr><th>position</th><th>salary</th></tr>";
	while($row = $result->fetch_assoc()) {
			$data .= "<tr><td>".$row["position"]."</td><td>".$row["max(salary)"]."</td></tr>" ;

	}
	$data .= "</table>";

} else {
	echo "0 results";
}
$conn->close();
?>
<div ID = "tableID">
<?php echo $data;?>
</div>

<select ID = 'type'>
	<option value="null"> type </option>
	<option value="PDF"> PDF </option>
	<option value="EXCEL"> EXCEL </option>
	<option value="CSV"> CSV </option>
<!-- 	<option value="DOC"> DOC </option> -->
</select>

<button type='bnt' onclick = "DownloadFile()">Dowload</button>

<script type="text/javascript">
	function DownloadFile() {
		if ($('#type').val()=='null'){
			alert ("Please select Dowload type");
		}
		else if ($('#type').val()=='PDF'){
			$('#tableID').tableExport({type:'pdf',escape:'false'});
		}
		else if ($('#type').val()=='EXCEL'){
			$('#tableID').tableExport({type:'excel',escape:'false'});
		}
		else if ($('#type').val()=='CSV'){
			$('#tableID').tableExport({type:'csv',escape:'false'});
		}
		// else if ($('#type').val()=='DOC'){
		// 	$('#tableID').tableExport({type:'doc',escape:'false'});
		// }		

	}
</script>
</html>
</body>
