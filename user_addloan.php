<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['enquiry'])) {
	extract($_POST);


	$q="insert into loan values(null,'$cid','$details','$amt','pending')";
		insert($q);
		alert('successfully');
		return redirect('user_addloan.php');
}


?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>

	<h2 style="color: white"> Loan Request</h2>
	<form method="post">
	<table  class="table" style="width: 500px;color: white">
		
		<tr>
			<th>Amount</th>
			<td><input type="text" class="form-control" required=""  name="amt"></td>
		</tr>
		<tr>
			<th>Details</th>
			<td><input type="text" class="form-control" required=""  name="details"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="enquiry"></td>
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
	<h1>View Enquiry</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Slno</th>
			<th>Amount</th>
		<th>Details</th>
		<th>Status</th>
		
			

		</tr>
			<?php
		$q="select * from loan inner join customer using (customer_id) where customer_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     		<td><?php echo $sino++ ?></td>
			<td><?php echo $row['amount']?></td>
			<td><?php echo $row['details']?></td>
			<td><?php echo $row['status']?></td>
		
			
			

		</tr>

		<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>