<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['book'])) {
	extract($_POST);


	echo$q="insert into testbooking values(null,'$cid','$vid',curdate(),'$date','booked')";
		insert($q);
		alert('successfully');
		return redirect('user_booktestdrive.php');
}


?>
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Book Now</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Date</th>
				<td><input type="date" required="" class="form-control" name="date"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="book"></td>
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