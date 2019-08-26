<?php 
 
$host="localhost";
$uname="root";
$psw="";
$db="demo";
 
mysql_connect($host,$uname,$psw);
mysql_select_db($db);
 
if(isset($_POST['uname'])){
    
    $uname=$_POST['Username'];
    $psw=$_POST['Password'];
    
    $sql = "SELECT * ID,uname,psw FROM login";
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
