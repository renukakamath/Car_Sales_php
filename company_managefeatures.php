<?php include 'companyheader.php';
extract($_GET);

if (isset($_POST['addfeature'])) {
	extract($_POST);
	echo$q="insert into feature value(null,'$vid','$feature')";
	insert($q);
	alert('successfully');
	return redirect("company_managefeatures.php?vid=$vid");
}


if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from feature  where feature_id='$uid'";
	$res=select($q);


}

if (isset($_POST['update'])) {
	extract($_POST);

	$q="update feature set features='$feature' where feature_id='$uid' ";
	update($q);
	alert('successfully');
	return redirect("company_managefeatures.php?vid=$vid");
	
}


if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from feature where feature_id='$did' ";
	delete($q);
	alert('successfully');
	return redirect("company_managefeatures.php?vid=$vid");

}

?>

         <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Manage feature</h1>
	<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white;color: white">
		<tr>
			<th>feature</th>
			<td><input type="text" required="" class="form-control" value="<?php echo $res[0]['features']?>" name="feature"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
		</tr>
	</table>
	<?php }else{ ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>feature</th>
			<td><input type="text" required="" class="form-control" name="feature"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="addfeature"></td>
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
	<h1>View feature</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>feature</th>

		</tr>
	<?php
		$q="select * from feature inner join vehicle using (vehicle_id) where vehicle_id='$vid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['features']?></td>
			<td><a class="btn btn-success" href="?did=<?php echo $row['feature_id']?>&vid=<?php echo $row['vehicle_id'] ?>">delete</a></td>
			<td><a class="btn btn-success" href="?uid=<?php echo $row['feature_id']?>&vid=<?php echo $row['vehicle_id'] ?>">Update</a></td>
		</tr>

	<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>