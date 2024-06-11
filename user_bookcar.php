<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['bookcar'])) {
	extract($_POST);


	$q="insert into carbooking values(null,'$vid','$cid','$date','$amount','pending')";
		insert($q);
		alert('successfully');
		return redirect('user_bookcar.php');
}


?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">

<center>
	<h1 style="color: white">Book Car Now</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">

			<tr>
				<th>Date</th>
				<td><input type="date" required="" class="form-control" name="date"></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td><input type="text" required="" class="form-control" value="<?php echo $amt ?>" readonly="" name="amount"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="bookcar"></td>
			</tr>
		</table>
	</form>
</center>


                </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->   

<?php include 'footer.php'?>