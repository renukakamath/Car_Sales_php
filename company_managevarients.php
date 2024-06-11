<?php include 'companyheader.php';

if (isset($_POST['addvarient'])) {
	extract($_POST);
	$q="insert into varients value(null,'$varient')";
	insert($q);
	alert('successfully');
	return redirect('company_managevarients.php');
}


if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from varients  where variant_id='$uid'";
	$res=select($q);
	

}

if (isset($_POST['update'])) {
	extract($_POST);

	$q="update varients set variant='$varient' where variant_id='$uid' ";
	update($q);
	alert('successfully');
	return redirect('company_managevarients.php');
}


if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from varients where variant_id='$did' ";
	delete($q);
	alert('successfully');
	return redirect('company_managevarients.php');

}

?>

      <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Manage varient</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
		<tr>
			<th>varient</th>
			<td><input type="text" required="" class="form-control"value="<?php echo $res[0]['variant']?>" name="varient"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
		</tr>
	</table>
	<?php }else{ ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>varient</th>
			<td><input type="text" required="" class="form-control" name="varient"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="addvarient"></td>
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
	<h1>View varient</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>varient</th>

		</tr>
	<?php
		$q="select * from varients ";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['variant']?></td>
			<td><a class="btn btn-success" href="?did=<?php echo $row['variant_id']?>">delete</a></td>
			<td><a class="btn btn-success" href="?uid=<?php echo $row['variant_id']?>">Update</a></td>
		</tr>

	<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>