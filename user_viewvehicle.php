
<?php include 'userheader.php';

    $cid=$_SESSION['customer_id'];
extract($_GET);









		



?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content" style="min-height: 200px !important" >
            <div class="container"  >
                <div class="w3l-bannerhny-info">
<center>
<center>
	
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				
				<td><input type="text" required="" placeholder="Search Here......" class="form-control" name="search"></td>
				<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="Searchhere"></td>
			</tr>
			
				
			
		</table>
	</form>
</center>


                </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->

<center>
	<h1>View vehicle</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>vehicle</th>
<th>Company</th>
<th>Features</th>
<th>Specifications</th>
			<th>amount</th>
         	<th>type</th>
         	<th>variant</th>


		</tr>

		<?php 
if (isset($_POST['Searchhere'])) {
	extract($_POST);


	$q="SELECT * FROM `vehicle` INNER JOIN `type` USING (`type_id`) INNER JOIN `varients` USING (`variant_id`) INNER JOIN `sepecification` USING (`vehicle_id`) INNER JOIN `feature` USING (vehicle_id) INNER JOIN company USING (company_id) where company like '$search%' or features like '$search%' or specification like '$search%' or vehicle like '$search%'";
	$res=select($q);
		}else{

		$q="SELECT * FROM `vehicle` INNER JOIN `type` USING (`type_id`) INNER JOIN `varients` USING (`variant_id`) INNER JOIN `sepecification` USING (`vehicle_id`) INNER JOIN `feature` USING (vehicle_id) INNER JOIN company USING (company_id)";
		$res=select($q);}


		$sino=1;
		



     foreach ($res as $row) {
     	?>
			
		<td><?php echo $sino++ ?></td>
			<td><?php echo $row['vehicle']?></td>
			
<td><?php echo $row['company']?></td>
<td><?php echo $row['features']?></td>
<td><?php echo $row['specification']?></td>

<td><?php echo $row['amount']?></td>
			<td><?php echo $row['type']?></td>
			<td><?php echo $row['variant']?></td>

			
			<td><a class="btn btn-success" href="user_booktestdrive.php?vid=<?php echo $row['vehicle_id']?>">Book Test Drive</a></td>
			<td><a class="btn btn-success" href="user_bookcar.php?vid=<?php echo $row['vehicle_id']?>&amt=<?php echo $row['amount']?>">Book Car</a></td>
		</tr>

		<?php } ?>
	</table>
</center> 


<?php include 'footer.php'?>