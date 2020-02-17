<?php


$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'Project e-clothing')){
    echo 'not selected';
}
$cust_name= $_POST['cust_name'];
$cust_email=$_POST['cust_email'];
$cust_password1=$_POST['cust_password1'];
$cust_password2=$_POST['cust_password2'];
if($cust_password1 !==$cust_password2){
    echo '<script language="javascript">';
	echo "alert('The passwords do not match')";
    echo '</script>';
    header("refresh:0; url=new account.html");
  
}
else{

$sql = "INSERT INTO customers (Name,Email, Password) VALUES('$cust_name','$cust_email','$cust_password2')";
if(!mysqli_query($con,$sql)){
    echo 'not inserted';

}

if($cust_name==''){
    echo 'error, please enter your name';

    // header("refresh:0; url=login.php");
 
}
else if ($cust_email==''){
    echo 'error, please enter your email';

    // header("refresh:0; url=login.php");
}

else{
    
  
    echo '<script language="javascript">';
	echo "alert('Welcome to Starshop E-shop')";
	echo '</script>';
  
//   header("refresh:0; url=booking.html");
 

   
}
}

?>

