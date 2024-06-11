<?php include 'companyheader.php';
 $cid=$_SESSION['company_id'];
 extract($_GET);


if (isset($_POST['add'])) {
	extract($_POST);
	echo$q="insert into vehicle value(null,'$cid','$type','$variant','$vehicle','$amount')";
	insert($q);
	alert('successfully');
	return redirect('compant_managevehicle.php');
}

if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from vehicle inner join type using (type_id) inner join company using(company_id) inner join varients  using (variant_id) where vehicle_id='$uid'";
	$ress=select($q);	
}

if (isset($_POST['update'])) {
	extract($_POST);

	$q="update vehicle set vehicle='$vehicle' ,variant_id='$variant',type_id='$type',amount='$amount' where vehicle_id='$uid'";
	update($q);
	alert('successfully');
	return redirect('compant_managevehicle.php');
}


if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from vehicle where vehicle_id='$did' ";
	delete($q);
	alert('successfully');
	return redirect('compant_managevehicle.php');

}




?>
 <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Manage vehicle</h1>
	<form method="post" enctype="multipart/form-data">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
		<tr>
			<th>vehicle</th>
			<td><input type="text" required="" class="form-control" value="<?php echo $ress[0]['vehicle'];?>" name="vehicle"></td>
		</tr>
		<tr>
			<th>amount</th>
			<td><input type="text" required="" class="form-control"  value="<?php echo $ress[0]['amount'];?>" name="amount"></td>
		</tr>
		<tr>
			<th>type</th>
			<td><select name="type">
				<option value="<?php echo $ress[0]['type_id'];?>"><?php echo $ress[0]['type'];?></option>
				<option>---Select---</option>
				<?php
		$q="SELECT * FROM `type`";
	    $res1=select($q);
    

     foreach ($res1 as $row1) {
     	?>

				<option value="<?php echo $row1['type_id'];?>"><?php echo $row1['type'];?></option>
			<?php } ?>
			</select></td>

		</tr>
		<tr>
			<th>Variant</th>
			<td><select name="variant">
				<option value="<?php echo $ress[0]['variant_id']?>"><?php echo $ress[0]['variant']?></option>
				<option>---Select---</option>
			<?php
		$q="SELECT * FROM `varients`";
	    $res2=select($q);
    

     foreach ($res2 as $row2) {
     	?>
				<option value="<?php echo $row2['variant_id']?>"><?php echo $row2['variant']?></option>
			<?php } ?>
			</select></td>

		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
		</tr>
	</table>
<?php }else{?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>vehicle</th>
			<td><input type="text" required="" class="form-control" name="vehicle"></td>
		</tr>
		<tr>
			<th>amount</th>
			<td><input type="text" required="" class="form-control"  name="amount"></td>
		</tr>
		<tr>
			<th>type</th>
			<td><select name="type">
				<option>---Select---</option>
				<?php
				$q="SELECT * FROM `type`";
	    $res2=select($q);
    

     foreach ($res2 as $row2) {
     	?>
				<option value="<?php echo $row2['type_id']?>"><?php echo $row2['type']?></option>
				<?php } ?>
			</select></td>

		</tr>
		<tr>
			<th>Variant</th>
			<td><select name="variant">
				
				<option>---Select---</option>
							<?php
				$q="SELECT * FROM `varients`";
	    $res2=select($q);
    

     foreach ($res2 as $row2) {
     	?>
				<option value="<?php echo $row2['variant_id']?>"><?php echo $row2['variant']?></option>
				<?php } ?>
			</select></td>

		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="add"></td>
		</tr>
	</table>
	<?php } ?>
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

			<th>amount</th>
         	<th>type</th>
         	<th>variant</th>


		</tr>
	<?php
		$q="select * from vehicle inner join type using (type_id) inner join company using(company_id) inner join varients  using (variant_id) where company_id='$cid' ";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['vehicle']?></td>
			<td><?php echo $row['amount']?></td>


			<td><?php echo $row['type']?></td>
			<td><?php echo $row['variant']?></td>

			<td><a class="btn btn-success" href="?did=<?php echo $row['vehicle_id']?>">delete</a></td>
			<td><a class="btn btn-success" href="?uid=<?php echo $row['vehicle_id']?>">Update</a></td>
			<td><a class="btn btn-success" href="company_managefeatures.php?vid=<?php echo $row['vehicle_id']?>">Manage features</a></td>
			<td><a class="btn btn-success" href="company_managespecification.php?vid=<?php echo $row['vehicle_id']?>">Manage specification</a></td>
		</tr>

	<?php } ?>
	</table>
</center>
<?php  include 'footer.php'?>