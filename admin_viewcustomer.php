<?php include 'admin_header.php'?>
 <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">

<center>
	<h1 style="color: white">View Customer</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>First Name</th>
		
		<th>Last Name</th>
		<th>Place</th>
		<th>Phone</th>
		<th>Email</th>
			

		</tr>
	<?php
		$q="select * from customer inner join login using (login_id)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td> <?php echo $row['fname']?></td>
			<td><?php echo $row['lname']?></td>
			<td> <?php echo $row['place']?></td>
				
			<td> <?php echo $row['phone']?></td>
			<td> <?php echo $row['email']?></td>
			
			

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