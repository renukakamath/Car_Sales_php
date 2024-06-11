<?php include 'userheader.php';

    $cid=$_SESSION['customer_id'];
extract($_GET);


?>
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
<center>
	<h1 style="color: white">View Car Booking</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>Vehicle</th>
		
		<th>User Name</th>
		<th>date</th>
		<th>Amount</th>
		<th>Status</th>
			

		</tr>
	<?php
		$q="SELECT * FROM `carbooking` INNER JOIN `vehicle` USING (`vehicle_id`) INNER JOIN `customer` USING (`customer_id`) where customer_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     	
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['vehicle']?></td>
			<td><?php echo $row['fname']?></td>
				
			<td><?php echo $row['date']?></td>
			<td><?php echo $row['amount']?></td>
				<td><?php echo $row['status']?></td>
				<td><a class="btn btn-success" href="usermakepayment.php?bid=<?php echo $row['carbooking_id']?>&amt=<?php echo $row['amount']?>">Make Payments</a></td>
			
			

		</tr>

	<?php } ?>
	</table>
</center>


                </div>
            </div>
        </div>
    </div>
    <!--//main-banner--> 
<?php include 'footer.php'?>