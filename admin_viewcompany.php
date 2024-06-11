<?php include 'admin_header.php';

if (isset($_GET['aid'])) {
	extract($_GET);



	$q="update login set usertype='company' where login_id='$aid'";
		update($q);
		alert('successfully');
		return redirect('admin_viewcompany.php');
	
}



if (isset($_GET['rid'])) {
	extract($_GET);
		$q="update login set usertype='Reject' where login_id='$rid'";
		update($q);
		alert('successfully');
		return redirect('admin_viewcompany.php');
	


	
}



?>
 <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Company</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>Company Name</th>
		
		<th>License</th>
		<th>Phone</th>
		<th>Email</th>
			

		</tr>
			<?php
		$q="select * from company inner join login using (login_id)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
		<tr>
			<td><?php echo $sino++ ?></td>
			<td><?php echo $row['company']?></td>
			<td><?php echo $row['license']?></td>
				
			<td><?php echo $row['phone']?></td>
			<td><?php echo $row['email']?></td>
		

			<td><a class="btn btn-success" href="?&aid=<?php echo $row['login_id']?>">Accept</a></td>
			<td><a class="btn btn-success" href="?&rid=<?php echo $row['login_id']?>">Reject</a></td>
		
			

		</tr>

	<?php } ?>
	</table>
</center>

 </div>
            </div>
        </div>
    </div>
    <!--//main-banner-->  
<?php include 'footer.php'?>