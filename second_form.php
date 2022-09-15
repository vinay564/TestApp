<?php
session_start();
?>
<?php
include ('db_connection.php');
?>
<?php
if (isset($_POST['submit'])) {
    $r_id = $_SESSION['r_id'];
    $date = $_POST['date'];
    $trip_number = $_POST['trip_number'];
    $vehcile_reg_no = $_POST['vehcile_reg_no'];
    $driver_name = $_POST['driver_name'];
    $driver_mobile = $_POST['driver_mobile_number'];
    $client = $_POST['client'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $carry_tone = $_POST['carry_tone'];
    $one_side_kms = $_POST['one_side_kms'];
    $up_down_kms = $_POST['up_down_kms'];
    $toll_gate = $_POST['toll_gate'];
    $diesel_issued = $_POST['diesel_issued'];
    $diesel_issued_bill_no = $_POST['diesel_issued_bill_no'];
    $supervisior_name = $_POST['supervisior_name'];
    $Incharge_name = $_POST['incharge_name'];
    $dbc_conn = mysqli_connect('localhost', 'root', '', 'ss_ee');
    $sql = "INSERT INTO trip_details_table
(r_id,date,trip_number,vehcile_reg_no,driver_name,driver_mobile_number,client,source,destination,carry_tone,one_side_kms,up_down_kms,toll_gate,diesel_issued,diesel_issued_bill_no,supervisior_name,incharge_name) VALUES
('$r_id','$date','$trip_number','$vehcile_reg_no','$driver_name','$driver_mobile','$client','$source','$destination','$carry_tone','$one_side_kms','$up_down_kms','$toll_gate','$diesel_issued','$diesel_issued_bill_no','$supervisior_name','$Incharge_name')";

    if (mysqli_query($dbc_conn, $sql)) {
        // echo "Records inserted successfully.";
        header('Location:vehcile_details.php?r_id='.$r_id.'');
    } else {
        echo "ERROR: Could not able to execute $sql. ";
    }
}

?>

<html>
<head>
<script
	src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript"> 
$(document).ready(function() {
 $("#datetimepicker1").datepicker();
$("#datetimepicker1").datepicker("option", "dateFormat", "dd/mm/yy");
$("#datetimepicker1").datepicker().datepicker("setDate", new Date());
});
</script>
</head>
<style>
body {
	background-image: url('img/sand truck.jpg');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<body>
	<div class="container">
		<table class="table table-striped">
			<tbody>
				<tr>
					<td colspan="1">
						<form action="" id="stockyard_form" method="post"
							class="well form-horizontal">
							<fieldset>
								<div class="form-group">
									<label class="col-md-4 control-label">Date</label>
									<div class="col-md-8">
										<div class="input-group date">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-calendar"></i></span><input
												id="datetimepicker1" name="date" placeholder="Pick Date"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Trip Number</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-sort-numeric-asc"></i></span><input
												id="trip_number" name="trip_number"
												placeholder="Enter Trip Number" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Vehcile Reg No</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-home"></i></span><input
												id="vehcile_reg_no" name="vehcile_reg_no"
												placeholder=" Enter Vehcile Reg No" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Driver Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-user-circle-o"></i></span><input
												id="driver_name" name="driver_name"
												placeholder="Enter Driver Name" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Driver Mobile Number</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-truck"
												style="font-size: 16px;"></i></span><input
												id="driver_mobile_number" name="driver_mobile_number"
												placeholder="Driver Mobile Number" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Client</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span><input
												id="client" name="client" placeholder="Enter Client"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Source</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-arrow-down"></i></span><input
												id="source" name="source" placeholder="Enter source"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Destination</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-arrow-up"></i></span><input
												id="destination" name="destination"
												placeholder="Enter Destination" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Carry Tone</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-balance-scale"></i></span><input
												id="carry_tone" name="carry_tone"
												placeholder="Enter carry tone" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">One Side Kms</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-level-down"></i></span><input
												id="one_side_kms" name="one_side_kms"
												placeholder="Enter One Side Kms" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Up Down Kms</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-level-up"></i></span><input
												id="up_down_kms" name="up_down_kms"
												placeholder="Enter Up Down Kms" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Toll Gate</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-car"></i></span><input
												id="toll_gate" name="toll_gate"
												placeholder="Enter toll gate" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>


								<div class="form-group">
									<label class="col-md-4 control-label">Diesel Issued</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-filter"></i></span><input
												id="diesel_issued" name="diesel_issued"
												placeholder="Enter diesel issued" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>


								<div class="form-group">
									<label class="col-md-4 control-label">Diesel Issued Bill No</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-cogs"></i></span><input
												id="diesel_issued_bill_no" name="diesel_issued_bill_no"
												placeholder="Enter diesel issued bill no"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>


								<div class="form-group">
									<label class="col-md-4 control-label">Supervisior Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-user-circle-o"></i></span><input
												id="supervisior_name" name="supervisior_name"
												placeholder="Enter Supervisior Name " class="form-control"
												required="true" value="<?php echo $_SESSION["uname"]; ?>"
												type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Incharge Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-male"></i></span><input
												id="incharge_name" name="incharge_name"
												placeholder="Enter Incharge Name" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-8">
										<button type="submit" name="submit"
											class="btn btn-primary btn-block">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>