<?php include 'admin_header.php';
extract($_GET);

if (isset($_POST['sendreply'])) {
	extract($_POST);


	$q="update complaint set reply='$Reply' where complaint_id='$cid'";

		update($q);
		alert('successfully');
		return redirect('admin_viewcomplaint.php');
}

?>

         <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h1 style="color: white">Send Reply</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Reply</th>
				<td><input type="text" required="" class="form-control" name="Reply"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="sendreply"></td>
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