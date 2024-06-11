<?php include 'userheader.php';
    $cid=$_SESSION['customer_id'];
extract($_GET);

if (isset($_POST['enquiry'])) {
	extract($_POST);

$q="insert into enquiry values(null,'$cid','$comp','$emq',curdate(),'pending')";
		insert($q);
		alert('successfully');
		return redirect('user_sendenquiry.php');
}


?>

    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>

	<h2 style="color: white">Send enquiry</h2>
	<form method="post">
	<table  class="table" style="width: 500px;color: white">
		<tr>
			<th>Company</th>
			<td><select name="comp">
				<option>---Select---</option>
				<?php 
             $q="select * from company";
             $res1=select($q);
             foreach ($res1 as $row) {
             	?>
            <option value="<?php echo $row['company_id']?>"><?php echo $row['company']?></option>
           <?php   }
				 ?>
				
			
			</select></td>
		</tr>
		<tr>
			<th>enquiry</th>
			<td><input type="text" class="form-control" required=""  name="emq"></td>
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
			<th>Enquiry</th>
		<th>Reply</th>
		<th>Date</th>
	
			

		</tr>
	<?php
		$q="select * from enquiry inner join customer using (customer_id) where customer_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     	
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['enquiry']?></td>
			<td><?php echo $row['reply']?></td>
			<td><?php echo $row['date']?></td>
				
			
			

		</tr>

		<?php } ?>
	</table>
</center>
<?php include 'footer.php'?>