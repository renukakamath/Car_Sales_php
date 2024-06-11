<?php include 'userheader.php';

    $cid=$_SESSION['customer_id'];
extract($_GET);


?>
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
<center>
	<h1 style="color: white">View parts</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>parts</th>
			<th>features</th>
			<th>Details</th>
			<th>Amount</th>
         	


		</tr>
			<?php
		$q="SELECT * FROM `parts` INNER JOIN `company` USING (`company_id`)";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>
			
		<td><?php echo $sino++ ?></td>
			<td><?php echo $row['features']?></td>
			<td><?php echo $row['details']?></td>
			<td><?php echo $row['amount']?></td>
			

			<td><a class="btn btn-success" href="user_addtocart.php?pid=<?php echo $row['parts_id']?>&amt=<?php echo $row['amount']?>&parts=<?php echo $row['parts']?>">Add To Cart</a></td>
			
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