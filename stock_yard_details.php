<html>
<head>
<style type="text/css">
.myclass {
	font-size: 12px;
}

.demo {
	font-size: 14px;
	text-align: center;
}

body {
	background-image: url('img/sandp.jpg');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}

#mytable {
	font-weight: bold;
}
</style>
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script
	src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
 </script>
<script type="text/javascript" language="javascript">  
 $(document).ready(function() {  
 $(".demo").css("background-color", "cyan");  
 });  

 function relocate()
 {
      location.href = "second_form.php";
 } 

 
 </script>
</head>
<body>
	<table class="table table-bordered">
		<thead>
			<tr class="demo">
				<th scope="col">Si.No</th>
				<th scope="col">Date</th>
				<th scope="col">Loading Stock Yard</th>
				<th scope="col">Unloading Stock Yard</th>
				<th scope="col">Transporter Name</th>
				<th scope="col">Vehicel Reg No</th>
				<th scope="col">Driver name</th>
				<th scope="col">Driver mobile number</th>
				<th scope="col">No of Tyres</th>
				<th scope="col">Way Bill No</th>
				<th scope="col">Gross Weight</th>
				<th scope="col">Tare Weight</th>
				<th scope="col">Net Weight</th>
				<th scope="col">Advance Payment</th>
				<th scope="col">Supervisior name</th>
				<th scope="col">Incharge Name</th>
				<th scope="col">Remarks</th>
			</tr>
		</thead>
		<tbody>
      <?php
      $rs_id = $_GET["r_id"];
    $dbc_conn = mysqli_connect('localhost', 'root', '', 'ss_ee');
    $query = "SELECT * FROM demo_tbl where r_id =".$rs_id."";
    $result = mysqli_query($dbc_conn, $query);
    // start a table tag in the HTML

    while ($row = mysqli_fetch_array($result)) { // Creates a loop to loop through results
        echo "<tr class ='myclass table-info' id='mytable'><td>" . $row['d_id'] . "</td>
           <td>" . $row['date'] . "</td>
<td>" . $row['loading_stock_yard'] . "</td>
<td>" . $row['unloading_stock_yard'] . "</td>
<td>" . $row['transporter_name'] . "</td>
<td>" . $row['vehcile_reg_no'] . "</td>
<td>" . $row['driver_name'] . "</td>
<td>" . $row['driver_mobile'] . "</td>
<td>" . $row['no_of_tyres'] . "</td>
<td>" . $row['way_bill_no'] . "</td>
<td>" . $row['gross_weight'] . "</td>
<td>" . $row['tare_weight'] . "</td>
<td>" . $row['net_weight'] . "</td>
<td>" . $row['advance_payment'] . "</td>
<td>" . $row['supervisior_name'] . "</td>
<td>" . $row['incharge_name'] . "</td>
<td>" . $row['remarks'] . "</td>
</tr>";
    }
    ?>
  </tbody>
	</table>
	<div align="center">
		<button type="button" class="btn btn-info active"
			onclick="relocate()">Next Table</button>
	</div>
</body>
</html>