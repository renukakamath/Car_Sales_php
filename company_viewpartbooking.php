<?php include 'companyheader.php';
 $cid=$_SESSION['company_id'];
 extract($_GET);


?>
   <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Parts Bookings</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>parts</th>
		
		<th>User Name</th>
		<th>Amount </th>
		<th>Quantity</th>
		<th>date</th>
		<th>Status</th>
			

		</tr>
		<?php
		$q="SELECT * FROM `partbookdetail` INNER JOIN `partbook` USING(`partbook_id`) INNER JOIN `parts` USING (`parts_id`) INNER JOIN `customer` USING (`customer_id`)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     		<td><?php echo $sino++ ?></td>
			<td><?php echo $row['parts']?></td>
			<td><?php echo $row['fname']?></td>
				
			<td><?php echo $row['amount']?></td>
			<td><?php echo $row['quantity']?></td>
			<td><?php echo $row['date']?></td>
			<td><?php echo $row['status']?></td>
			<td><a  class="btn btn-success"  href="company_viewpayment.php?pid=<?php echo  $row['partbook_id']?>">View payment</a></td>
			
			

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