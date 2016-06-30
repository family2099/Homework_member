<?php

/*echo "[".$_GET["backurl"]"]";
Member(secret) Page;
if(!isset($_COOKIE["userName"])){
  
    header("location:login.php?backurl=secret");
    
  
  
  
 }*/
 
if (isset($_GET["signout"]))
{
	setcookie("userName", "Guest", time());
	header("Location: index.php");
	exit();
} 

if(isset($_POST["btnOK"])){               //如果有傳回就設定cookie
  
  if($_POST["txtUserName"]!=""){
    setcookie("userName",$_POST["txtUserName"]);
    if(isset($_COOKIE["lastPage"])){
      
      header("location:".$_COOKIE["lastPage"]);
    }
    else {
      header("location:index.php");
    }
    
    exit();
  }
  
}



?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
	<link href="../bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="changebg">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
       <div class="navbar-header">
          <a class="navbar-brand" href="login.php">會員系統 - 登入</a>
       </div>
       
    </nav>
  </div>
  <div class="container"> 
    <form class="form-horizontal" role="form" id="form1" name="form1" method="post" action="login.php">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-6 col-sm-offset-3">
              
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">帳號:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="請輸入帳號">
                </div>
              </div>
              
              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">密碼:</label>
                <div class="col-sm-6">
                  <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="請輸入密碼">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                         <input type="checkbox"> 請記住我　
                      </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">    
                  <button type="submit" class="btn btn-default btn-lg"  name="btnOK" id="btnOK">登入</button>
                  <button type="reset" class="btn btn-primary btn-lg "  name="btnReset" id="btnReset">重設</button>
                  <a class="btn btn-info btn-lg " href="index.php" role="button">會員專用頁</a>
                
                 </div>
              </div>
                
              
          </div>
        </div>
        
        <!--<div class="row">-->
        <!--  <div class="col-sm-4">-->
        <!--    <button type="submit" class="btn btn-default" value="登入"></button>-->
        
        <!--  </div>-->
          
        <!--  <div class="col-sm-4">-->
        <!--    <button type="resetn" class="btn btn-primary" value="重設"></button>-->
        
        <!--  </div>-->
          
        <!--  <div class="col-sm-4">-->
        <!--    <button type="submit" class="btn btn-default navbar-btn" value="回首頁"></button>-->
        
        <!--  </div>-->
          
        <!--</div>-->
      </div>  
    </form>
  </div>
  
  
  
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
  <script src="../bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  
  
  
  
<!--<form id="form1" name="form1" method="post" action="login.php">-->
<!--  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">-->
<!--    <tr>-->
<!--      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <td width="80" align="center" valign="baseline">帳號</td>-->
<!--      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <td width="80" align="center" valign="baseline">密碼</td>-->
<!--      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />-->
<!--      <input type="reset" name="btnReset" id="btnReset" value="重設" />-->
<!--      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />-->
<!--      </td>-->
<!--    </tr>-->
<!--  </table>-->
<!--</form>-->
</body>
</html>