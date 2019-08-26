<?php 
 
$host="localhost";
$Name="root";
$Password="";
$db="blogdatabase";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['Name'])){
    
    $uname=$_POST['Name'];
    $password=$_POST['Password'];
    
    $sql = "SELECT * ID,Name,Password FROM login";
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
