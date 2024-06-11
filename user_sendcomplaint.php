<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['complaint'])) {
	extract($_POST);

$q="insert into complaint values(null,'$cid','$comp','pending',now())";
		insert($q);
		alert('successfully');
		return redirect('user_sendcomplaint.php');
}


?>
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>

	<h2 style="color: white">Send Complaints</h2>
	<form method="post">
	<table   class="table" style="width: 500px;color: white">
		<tr>
			<th>Complaint</th>
			<td><input type="text" class="form-control" required=""  name="comp"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="complaint"></td>
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
	<h1>View Complaints</h1>
	<table  class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>User</th>
			<th>Complaint</th>
			<th>Reply</th>
			<th>Date Time</th>
		</tr>
	<?php
		$q="select * from complaint inner join customer using (customer_id) where customer_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     	
			<td><?php echo $sino++ ?></td>
			
			<td><?php echo $row['fname']?></td>
			<td><?php echo $row['complaint']?></td>
			<td><?php echo $row['reply']?></td>
			<td><?php echo $row['date']?></td>
		</tr>
	<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>