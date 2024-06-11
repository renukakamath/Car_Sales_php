<?php include 'companyheader.php';
extract($_GET);

?>
   <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Payment</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>Amount</th>
		
		<th>Date</th>
	
			

		</tr>
			<?php
		$q="SELECT * FROM `payment`inner join partbook on payment.book_id=partbook.partbook_id where partbook_id='$pid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     		<td><?php echo $sino++ ?></td>
			<td><?php echo $row['amount']?></td>
			<td><?php echo $row['date']?></td>
				
			
			

		</tr>

	<?php }  ?>
	</table>
</center>

 </div>
            </div>
        </div>
    </div>
    <!--//main-banner--> 
<?php include 'footer.php'?>