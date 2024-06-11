<?php include 'companyheader.php';
 $cid=$_SESSION['company_id'];
 extract($_GET);

if (isset($_POST['add'])) {
	extract($_POST);
	$q="insert into parts values(null,'$cid','$parts' ,'$features','$details','$amount')";
	insert($q);
	alert('successfully');
	return redirect('company_managepart.php');
}


if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from parts where parts_id='$uid'";
	$res=select($q);
	

}

if (isset($_POST['update'])) {
	extract($_POST);

	$q="update parts set parts='$parts' ,features='$features',details='$details',amount='$amount' where parts_id='$uid' ";
	update($q);
	alert('successfully');
	return redirect('company_managepart.php');
}


if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from parts where parts_id='$did' ";
	delete($q);
	alert('successfully');
	return redirect('company_managepart.php');

}

?>
      <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Manage parts</h1>
	<form method="post" enctype="multipart/form-data">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
		<tr>
			<th>parts</th>
			<td><input type="text" required="" class="form-control" value="<?php echo $res[0]['parts']?>" name="parts"></td>
		</tr>
		<tr>
			<th>Features</th>
			<td><input type="text" required="" class="form-control" value=" <?php echo $res[0]['features']?>" name="features"></td>
		</tr>
		<tr>
			<th>Details</th>
			<td><input type="text" required="" class="form-control"  value=" <?php echo $res[0]['details']?>" name="details"></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td><input type="text" required="" class="form-control"  value=" <?php echo $res[0]['amount']?>"  name="amount"></td>
		</tr>

		
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
		</tr>
	</table>
	<?php }else{ ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>parts</th>
			<td><input type="text" required="" class="form-control" name="parts"></td>
		</tr>
		<tr>
			<th>features</th>
			<td><input type="text" required="" class="form-control" name="features"></td>
		</tr>
		<tr>
			<th>Details</th>
			<td><input type="text" required="" class="form-control"  name="details"></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td><input type="text" required="" class="form-control"  name="amount"></td>
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
	<h1>View parts</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>parts</th>
			<th>features</th>
			<th>Details</th>
			<th>Amount</th>
         	


		</tr>
			<?php
		$q="select * from parts where company_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['parts']?></td>
			<td><?php echo $row['features']?></td>
			<td><?php echo $row['details']?></td>

				<td><?php echo $row['amount']?></td>
			

			<td><a class="btn btn-success" href="?did=<?php echo $row['parts_id']?>">delete</a></td>
			<td><a class="btn btn-success" href="?uid=<?php echo $row['parts_id']?>">Update</a></td>
		</tr>
<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>