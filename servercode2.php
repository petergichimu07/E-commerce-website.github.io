<?php


$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'Project e-clothing')){
    echo 'not selected';
}

$Email = trim($_POST['Email']);
$password = trim($_POST['password']);
$query = "SELECT Email, Password FROM customers WHERE Email='$Email' 
AND password='$password'";
    
    if(!$query){
        echo "error";
    }


$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);




if($row['Email']==$Email&&$row['password']=$password){
	echo '<script language="javascript">';
	echo "alert('Welcome to Starshops E-stores')";
	echo '</script>';
	 header("refresh:0; url=index.html");
}
else{
	echo '<script language="javascript">';
	echo "alert('incorrect login details')";
	echo '</script>';
	 header("refresh:0; url=login.html");
}
  
?>
