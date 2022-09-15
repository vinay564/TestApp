<?php
include ('db_connection.php');
?>

<?php 


session_start();

?>


<?php
if (isset($_POST['submit'])) {
    //$today = date("H:i:s");
    $r_id = $_SESSION['r_id'];
    $date = $_POST['date'];
    $l_stock_yard = $_POST['lstockyard'];
    $u_stock_yard = $_POST['ustockyard'];
    $transporter_name = $_POST['transport_name'];
    $vehicle_num = $_POST['vehcile_number'];
    $driver_name = $_POST['driver_name'];
    $driver_mobile = $_POST['phone_number'];
    $no_of_tyres = $_POST['no_of_tyres'];
    $way_bill_no = $_POST['way_bill_number'];
    $gross_weight = $_POST['gross_weight'];
    $tare_weight = $_POST['tare_weight'];
    $net_weight = $_POST['net_weight'];
    $advance_payment = $_POST['advance_paymnet'];
    $supervisior_name = $_POST['supervisior_name'];
    $Incharge_name = $_POST['incharge_name'];
    $remarks = $_POST['remarks'];
    $dbc_conn = mysqli_connect('localhost', 'root', '', 'ss_ee');
    $sql = "INSERT INTO demo_tbl(r_id,date,loading_stock_yard,unloading_stock_yard,transporter_name,vehcile_reg_no,driver_name,driver_mobile,no_of_tyres,way_bill_no,gross_weight,tare_weight,net_weight,advance_payment,supervisior_name,incharge_name,remarks) 
    VALUES 
    ('$r_id','$date','$l_stock_yard','$u_stock_yard','$transporter_name','$vehicle_num','$driver_name','$driver_mobile','$no_of_tyres','$way_bill_no','$gross_weight','$tare_weight','$net_weight','$advance_payment','$supervisior_name','$Incharge_name','$remarks')";

    if (mysqli_query($dbc_conn, $sql)) {
      // echo "Records inserted successfully.";
       header('Location:stock_yard_details.php?r_id='.$r_id.'');
    } else {
        echo "ERROR: Could not able to execute $sql. ";
    }
}


?>


<html>
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript"> 
 $(document).ready(function() {
 $("#datetimepicker1").datepicker();
$("#datetimepicker1").datepicker("option", "dateFormat", "dd/mm/yy");
$("#datetimepicker1").datepicker().datepicker("setDate", new Date()); 
}); 
</script>
<style>

	body{
    background-image:url('img/sand truck.jpg');
    background-attachment:fixed;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
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
										<div class="input-group datepicker" data-provide="datepicker" >
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-calendar"></i></span><input id="datetimepicker1"
												name="date" placeholder="Pick Date" class="form-control"
												required="true" value="" type="text"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Loading Stock Yard</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-home"></i></span><input
												id="lstockyard" name="lstockyard"
												placeholder="Loading Stock Yard Details"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">UnLoading Stock Yard</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-home"></i></span><input
												id="ustockyard" name="ustockyard"
												placeholder=" Enter UnLoading Stock Yard"
												class="form-control" required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Transporter Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-bank"></i></span><input
												id="transporter_name" name="transport_name"
												placeholder="Enter Transporter Name" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Vehcile No</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-truck" style="font-size:16px;"></i></span><input
												id="vehcile_number" name="vehcile_number"
												placeholder="Enter Vehcile No" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Driver Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-user"></i></span><input
												id="driver_name" name="driver_name"
												placeholder="Enter Driver Name" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label"> Driver Phone Number</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-earphone"></i></span><input
												id="phone_number" name="phone_number"
												placeholder="Enter Driver phoneNumber" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">No of Tyres</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-futbol-o"></i></span><input
												id="no_of_tyres" name="no_of_tyres"
												placeholder="Enter No of Tyres" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Way Bill Number</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-sort-numeric-asc"></i></span><input
												id="way_bill_number" name="way_bill_number"
												placeholder="Enter Way Bill Number" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Gross Weight</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-random"></i></span><input
												id="gross_weight" name="gross_weight"
												placeholder="Enter Gross Weight" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tare Weight</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-random"></i></span><input
												id="tare_weight" name="tare_weight"
												placeholder="Enter Tare Weight" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Net Weight</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-random"></i></span><input
												id="net_weight" name="net_weight"
												placeholder="Enter Net Weight" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Advance Payment</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-inr"></i></span><input
												id="advance_paymnet" name="advance_paymnet"
												placeholder="Enter Advance Payment" class="form-control"
												required="true" value="" type="text">
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
												required="true" value="<?php echo $_SESSION["uname"]; ?>" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Incharge Name</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-male"></i></span><input
												id="incharge_name" name="incharge_name"
												placeholder="Enter Incharge Name" class="form-control"
												required="true" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Remarks</label>
									<div class="col-md-8 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i
												class="fa fa-comments"></i></span><input
												id="remarks" name="remarks" placeholder="Enter Remarks"
												class="form-control" value="" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-8" >
										<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
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