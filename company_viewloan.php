
<?php include 'companyheader.php'?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Enquiry</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>Amount</th>
		<th>Details</th>
	
		
			

		</tr>
		<?php
		$q="select * from loan inner join customer using (customer_id)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
	<td><?php echo $sino++ ?></td>
			<td><?php echo $row['amount']?></td>
			<td><?php echo $row['details']?></td>
		
			<?php if ($row ['status']=="pending" ){ ?>
			<td><a class="btn btn-success" href="?action=accept&lid=<?php echo $row['loan_id']?>">Accept</a></td>
			<td><a class="btn btn-success" href="?action=reject&lid=<?php echo $row['loan_id']?>">Reject</a></td>

			<?php } ?>
		
			
			

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