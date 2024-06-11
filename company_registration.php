
<?php include 'public_header.php';

if (isset($_POST['company'])) {
	extract($_POST);

	$q="select * from login where username='$uname' and password='$pwd'";
		$res=select($q);
		if (sizeof($res)>0) {
				alert('already exist');
		}else{

			$q="insert into login values(null,'$uname','$pwd','pending')";
			$id=insert($q);
			$q="insert into company values(null,'$id','$fname','$licence','$phone','$email')";
			insert($q);
			alert('successfully');
			return redirect('company_registration.php');

		}



}

?>

         <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
<center>
	<h2 style="color: white">Company Registration</h2>
	<form method="post">
		<table  class="table" style="width: 500px;color: white">
			<tr>
				<th>Company Name</th>
				<td><input type="text" class="form-control" required=""  name="fname"></td>
			</tr>
			<tr>
				<th>Licence</th>
				<td><input type="text" class="form-control" required=""  name="licence"></td>
			</tr>
			
			
		<tr>
			<th>Phone</th>
			<td><input type="number"  required="" pattern="[0-9]{10}" class="form-control"  name="phone"></td>
		</tr>

		<tr>
			<th>Email</th>
			<td><input type="email"  required="" class="form-control"  name="email"></td>
		</tr>
			
			<tr>
				<th>User Name</th>
				<td><input type="text" class="form-control" required=""  name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" class="form-control" required=""  name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="company"></td>
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