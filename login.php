<?php 
 
$host="localhost";
$user="root";
$password="";
$db="blogdatabase";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "SELECT * ID, User Name,Pass FROM login";
$result = mysqli_query($conn, $sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
