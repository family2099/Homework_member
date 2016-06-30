<?php 
  if (!isset($_COOKIE["userName"]))
    $sUserName = "Guest";
  else
    $sUserName = $_COOKIE["userName"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lab - index</title>

  <!-- Bootstrap -->
  <link href="../bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body id="changebg">
  <div class="container">
  <nav class="navbar navbar-default" role="navigation">
    
       <div class="navbar-header">
          <a class="navbar-brand" href="index.php">會員系統 - 首頁</a>
       </div>
    
  </nav>
  </div> 
  
  <div class="container" style type="margin:0 auto;">
    <div class="jumbotron">
      
    <center>
      <h1>Welcome!,<?php echo $sUserName ?></h1></center>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
              
          </div>
          
          <div class="col-sm-4">
              <p>
                  <?php if ($sUserName == "Guest") { ?>
                  <a class="btn btn-primary btn-lg btn-block" href="login.php" role="button">登入</a>
                  <?php } else { ?>
                  <a class="btn btn-primary btn-lg btn-block" href="login.php?signout=1" role="button">登出</a>
                  <?php } ?>
                  <p></p>
                  <a class="btn btn-primary btn-lg btn-block" href="secret.php" role="button">會員專用頁</a>
              </p>  
          </div>
        </div>
      </div>
    </center>  
    </div>
  </div>
  
  
  
  
  
  
  <!--<nav class="navbar navbar-default" role="navigation">-->
  <!--   <div class="navbar-header">-->
  <!--      <a class="navbar-brand" href="index.php">會員系統 - 首頁</a>-->
  <!--   </div>-->
     
  <!--</nav>-->
  <!--<div class="container"> -->
  <!--  <form class="form-horizontal" role="form">-->
  <!--    <div class="form-group">-->
  <!--      <label for="firstname" class="col-sm-2 control-label">帳號</label>-->
  <!--      <div class="col-sm-6">-->
  <!--        <input type="text" class="form-control" id="userName" placeholder="請輸入帳號">-->
  <!--      </div>-->
  <!--    </div>-->
      
  <!--    <div class="form-group">-->
  <!--      <label for="lastname" class="col-sm-2 control-label">密碼</label>-->
  <!--      <div class="col-sm-6">-->
  <!--        <input type="password" class="form-control" id="passWord" placeholder="請輸入密碼">-->
  <!--      </div>-->
  <!--    </div>-->
      
  <!--    <div class="form-group">-->
  <!--      <div class="col-sm-offset-2 col-sm-10">-->
  <!--        <div class="checkbox">-->
  <!--          <label>-->
  <!--               <input type="checkbox"> 請記住我-->
  <!--            </label>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
      
  <!--    <div class="form-group">-->
  <!--      <div class="col-sm-offset-2 col-sm-10">-->
          
  <!--        <button type="submit" class="btn btn-default">登入</button>-->
  <!--        <button type="button" class="btn btn-primary">會員專用</button>-->
  <!--        <button type="button" class="btn btn-default navbar-btn">Sign in</button>-->
          
          
  <!--      </div>-->
  <!--    </div>-->
  <!--  </form>-->
  <!--</div>-->




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
  <script src="../bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</body>

</html>


<!--<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">-->
<!--  <tr>-->
<!--    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>-->
<!--  </tr>-->
<!--  <tr>-->

<!--    <?php if ($sUserName == "Guest") { ?>-->
<!--      <td align="center" valign="baseline"><a href="login.php">登入</a>-->
<!--    <?php } else { ?>-->
<!--      <td align="center" valign="baseline"><a href="login.php?signout=1">登出</a>-->
<!--  	<?php } ?>    -->

<!--    | <a href="secret.php">會員專用頁</a></td>-->
<!--  </tr>-->
<!--  <tr>-->
<!--    <td align="center" bgcolor="#CCCCCC">Hello! <?php echo $sUserName?></td>-->
<!--  </tr>-->
<!--</table>-->
