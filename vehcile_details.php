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

#mytable {
	font-weight: bold;
}

body {
	background-image: url('img/sandp.jpg');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
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
function logout(){
	var x = confirm("Are you sure you want to logout?");
	  if (x){
		  alert("You are successfully logedout");
	  window.location.href ="login.php";
		     	      return true;
	  }  
	  else{
	    return false;
	  }
}
 </script>
</head>
<body>

	<table class="table table-bordered">
		<thead>
			<tr class="demo">
				<th scope="col">Si.No</th>
				<th scope="col">Date</th>
				<th scope="col">Trip Number</th>
				<th scope="col">Vehicel Reg No</th>
				<th scope="col">Driver Name</th>
				<th scope="col">Driver mobile number</th>
				<th scope="col">Client</th>
				<th scope="col">Source</th>
				<th scope="col">Destination</th>
				<th scope="col">Carry Tone</th>
				<th scope="col">One Side Kms</th>
				<th scope="col">Up Down Kms</th>
				<th scope="col">Toll Gate</th>
				<th scope="col">Diesel issued</th>
				<th scope="col">Diesel Issued Bill No</th>
				<th scope="col">Supervisior Name</th>
				<th scope="col">Incharge Name</th>
			</tr>
		</thead>
		<tbody>
      <?php
      $rs_id = $_GET["r_id"];
    $dbc_conn = mysqli_connect('localhost', 'root', '', 'ss_ee');
    $query = "SELECT * FROM trip_details_table where r_id =".$rs_id."";
    $result = mysqli_query($dbc_conn, $query);
    // start a table tag in the HTML

    while ($row = mysqli_fetch_array($result)) { // Creates a loop to loop through results
        echo "<tr class ='myclass table-info' id='mytable'><td>" . $row['t_id'] . "</td>
           <td>" . $row['date'] . "</td>

<td>" . $row['trip_number'] . "</td>
<td>" . $row['vehcile_reg_no'] . "</td>
<td>" . $row['driver_name'] . "</td>
<td>" . $row['driver_mobile_number'] . "</td>
<td>" . $row['client'] . "</td>
<td>" . $row['source'] . "</td>
<td>" . $row['destination'] . "</td>
<td>" . $row['carry_tone'] . "</td>
<td>" . $row['one_side_kms'] . "</td>
<td>" . $row['up_down_kms'] . "</td>
<td>" . $row['toll_gate'] . "</td>
<td>" . $row['diesel_issued'] . "</td>
<td>" . $row['diesel_issued_bill_no'] . "</td>
<td>" . $row['supervisior_name'] . "</td>
<td>" . $row['incharge_name'] . "</td>
</tr>";
    }
    ?>
  </tbody>
	</table>

	<div align="center">
		<button type="button" class="btn btn-primary active"
			onclick="logout()">Logout</button>
	</div>
</body>
</html>