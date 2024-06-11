<?php include 'public_header.php';

if (isset($_POST['login'])) {
   extract($_POST);

   $q="select * from login where username='$uname' and password='$pwd'";
   $res=select($q);

   if (sizeof($res)>0) 
   {
      $_SESSION['logid']=$res[0]['login_id'];
    $logid=$_SESSION['logid'];
   	if ($res[0]['usertype']=="admin") {
   	   return redirect('admin_home.php');

   	}elseif($res[0]['usertype']=="customer"){
        
           $q1="select * from customer where login_id='$logid'";
            $res=select($q1);
       if (sizeof($res)>0)
     {
     $_SESSION['customer_id']=$res[0]['customer_id'];
      $cid=$_SESSION['customer_id'];

         return redirect('user_home.php');
      }
    }
      elseif($res[0]['usertype']=="company") 
      {

           echo$q2="select * from company where login_id='$logid'";
            $res2=select($q2);
            if (sizeof($res2)>0)
               {
                 $_SESSION['company_id']=$res2[0]['company_id'];
                 $cid=$_SESSION['company_id'];
                  return redirect('company_home.php');
                }
        }

}
else{
  alert('invalid username & password');
}
}
 
?>


 

         <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
                    <center>
	<h2 style="color: white">Login</h2>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>User Name</th>
				<td><input type="text" class="form-control" required=""  name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" class="form-control" required=""  name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="login"></td>
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