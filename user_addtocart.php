<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);


if (isset($_POST['add'])) {
	extract($_POST);






		echo$q2="select * from partbook where customer_id='$cid' and status='pending'";
	$res=select($q2);
	if (sizeof($res)>0) {
		$pbid=$res[0]['partbook_id'];
	}else{

	echo$q="insert into partbook values(null,'$cid','0',curdate(),'pending')";
			$pbid=insert($q);



	
}
echo $q="select * from partbookdetail where parts_id='$pid' and partbook_id='$pbid'";
		$res=select($q);

  if (sizeof($res)>0) {
  	$pdid=$res[0]['partdetail_id'];

			echo$q="update partbookdetail set amount=amount+'$total' , quantity=quantity+'$qua' where partdetail_id='$pdid'";
			update($q);
  	
  }else{

	echo$q="insert into partbookdetail values(null,'$pbid','$pid','$total','$qua')";
			insert($q);
	}

		echo$q="update partbook set total=total+'$total' where partbook_id='$pbid'";
		update($q);
	alert('successfuly');
	return redirect('user_viewcarts.php');

}



?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">

<script type="text/javascript">
	function TextOnTextChange()
	{
		var x =document.getElementById("p_amount").value;
		var y =document.getElementById("p_qnty").value;
		document.getElementById("t_amount").value = x * y;
	}

</script> 

<center>
	<h2 style="color: white">Add To Cart</h2>
	<form method="post">
		<table  class="table" style="width: 500px;color: white">
		
			<tr>
				<th>Parts</th>
				<td><input type="text" class="form-control" required="" readonly=""  value="<?php echo $parts ?>" name="parts"></td>
			</tr>
			<tr>
				<th>Quantity</th>
				<td><input type="text" class="form-control" required=""  id="p_qnty" onchange="TextOnTextChange()"  name="qua"></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td><input type="text" class="form-control" required="" readonly="" value="<?php echo $amt?>" id="p_amount" name="amo"></td>
			</tr>
			<tr>
				<th>total</th>
				<td><input type="text" class="form-control" required=""  id="t_amount" name="total"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit"  class="btn btn-success"name="add"></td>
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