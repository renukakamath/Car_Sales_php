<?php include 'admin_header.php'?>
 <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Complaints</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>User</th>
		
		<th>Complaints</th>
		<th>Reply </th>
		<th>Date</th>
		

		</tr>
		<?php
		$q="select * from complaint inner join customer using (customer_id)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			
			<td> <?php echo $row['fname']?></td>
				
			<td> <?php echo $row['complaint']?></td>
			<td> <?php echo $row['reply']?></td>
			<td> <?php echo $row['date']?></td>


			
			
			<td><a class="btn btn-success" href="admin_sendreply.php?cid=<?php echo $row['complaint_id']?>">Send Reply</a></td>
		
			
			

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