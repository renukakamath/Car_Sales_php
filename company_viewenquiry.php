<?php include 'companyheader.php';

 $cid=$_SESSION['company_id'];
 extract($_GET);


?>
   <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">View Enquiry</h1>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Slno</th>
			<th>Enquiry</th>
		<th>Reply</th>
		<th>Date</th>
	
			

		</tr>
	<?php
		$q="SELECT * FROM `enquiry` INNER JOIN `customer` USING (`customer_id`) INNER JOIN `company` USING (`company_id`) where company_id='$cid'";
	$res=select($q);
     $sino=1;

     foreach ($res as $row) {
     	?>

     	
			<td><?php echo $sino++ ?></td>
		
			<td>  <?php echo $row['enquiry']?></td>
			<td>  <?php echo $row['reply']?></td>
			<td>  <?php echo $row['date']?></td>
  <?php if ($row['reply']=="pending") { ?>
			<td><a  class="btn btn-success"  href="company_sendreply?eid=<?php echo $row['enquiry_id']?>">Send Reply</a></td>
		<?php } ?>

				
			
			

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