<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['payment'])) {
	extract($_POST);

echo$q="insert into payment values(null,'$bid','$amt',curdate())";
		insert($q);
		echo$q="update partbook set status='Paid' where partbook_id='$bid'";
		update($q);
		alert('successfully');
		return redirect('user_viewcarts.php');
}


?>



    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Make Payment</h1>
	<form method="post">
		<table  class="table" style="width: 500px;color: white">
			<tr>
				
				<th>Card Number</th>
				<td><input type="text" class="form-control" required=""  name="vard"></td>
			</tr>
			<tr>
				<th>C V V</th>
				<td><input type="text" class="form-control" required=""  name="cvv"></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td><input type="text" class="form-control" required="" value="<?php echo $amt ?>" name="amo"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="payment"></td>
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
