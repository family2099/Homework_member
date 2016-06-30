<?php

//如果cookie不存在cookie就跳到登入頁
if(!isset($_COOKIE["userName"])){
  setcookie("lastPage","secret.php");
  header("location:login.php");
  exit();
}

//header("location:login.php?back=secret");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
<link href="../bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body id="changebg">



  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      
         <div class="navbar-header">
            <a class="navbar-brand" href="secret.php">會員系統 - 會員專用</a>
         </div>
          
    </nav>
  </div> 
  
  <div class="container" style type="margin:0 auto;">
    <div class="jumbotron">
        <h1>This page for member only.</h1>
        <p></p>
        <a class="btn btn-primary btn-lg btn-block" href="index.php" role="button">回首頁</a>
    </div>  
  </div>    
      
<!--<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">-->
<!--  <tr>-->
<!--    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 － 會員專用</font></td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td align="center" valign="baseline">This page for member only.</td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td align="center" bgcolor="#CCCCCC"><a href="index.php">回首頁</a></td>-->
<!--  </tr>-->
<!--</table>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
  <script src="../bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</body>
</html>