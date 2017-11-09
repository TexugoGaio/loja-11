<?php
$user = trim($_POST['username']);
$pswd = trim($_POST['password']);
$pwdmd5 = md5($pswd); 
require_once "conexao.php";
$con = open_database();
select_database();
$sql = "SELECT * FROM usuarios where usuario like '$user'";
$rs = mysqli_query($con,$sql);
close_database($con);
$row = mysqli_fetch_assoc($rs);

if(md5($pswd) == $row['senha']){
     session_start();  
    
     $_SESSION['user'] = $user;

     $_SESSION['password'] = $pswd;
   
    Header("Location: index.php"); 
}
else Header("Location: logar.php");
?>