<?php
include('../inc/header.php');

FlashTitle('Login | '.$set['title']);
if($Function->isLogin()){
    header('Location: '.$set['url'].'/member/main.php');
    exit;
}
if(isset($_POST['log'])){
    $uemail = $_POST['email'];
    $upass = $_POST['pass'];
    $pass = base64_encode($_POST['pass']);
    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)$/", $uemail)) {
    $ck=$flash->prepare("SELECT * FROM `users` WHERE `email`=:email");
    $ck->bindParam(':email',$uemail);
    $ck->execute();
 if($ck->rowCount() < 1) {
 $error .= '<p><div class="error">User with E-mail does not Exists!</div></p>';
 }
 else {
     $userLog = $ck->fetch();
 }
}
else {
    $error .= '<p><div class="error">Invalid E-mail format!</div></p>';
}
    if(empty($uemail)){
    $error .= '<p><div class="error">E-mail cannot be empty it is required!</div></p>';
 }
  elseif(empty($upass)){
    $error .= '<p><div class="error">Password cannot be empty it is required!</div></p>';
 }
 if(empty($error)){
     $dlog=$flash->prepare("SELECT * FROM `users` WHERE `email`=:email AND password=:pwd");
     $dlog->bindParam(':email',$uemail);
     $dlog->bindParam(':pwd',$pass);
     $dlog->execute();
    if($dlog->rowCount() > 0) {
     $_SESSION['email'] = $uemail;
     header('Location: '.$set['url'].'user-dashboard');
    exit;
      }
      else {
            $error .= '<p><div class="error">PassWord Is Incorrect!</div></p>';
        }
     }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <title>Crypterio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/ui.css">
</head>

<body class="crypt-dark">
    <header>
        <div class="container-full-width">
            <div class="crypt-header">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="crypt-logo"><img src="images/logo.jpg" alt=""></div>
                            </div>
                            <div class="col-xs-2">
                                <div class="crypt-mega-dropdown-menu"> <!-- <a href="" class="crypt-mega-dropdown-toggle">BTC/ETH <i class="pe-7s-angle-down-circle"></i></a> -->
                                    <div class="crypt-mega-dropdown-menu-block">
                                        <div class="crypt-market-status">
                                            <div>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
                        <ul class="crypt-heading-menu fright">
                            <li><a href="trading">Trading</a></li>
                            <li><a href="user-dashboard">Account</a></li>
                            <li class="crypt-box-menu menu-red"><a href="register">register</a></li>
                            <li class="crypt-box-menu menu-green"><a href="login">login</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
        <div class="crypt-mobile-menu">
            <ul class="crypt-heading-menu">
                <li><a href="trading">Trading</a></li>
                <li><a href="user-dashboard">Account</a></li>
                <li class="crypt-box-menu menu-red"><a href="register">register</a></li>
                <li class="crypt-box-menu menu-green"><a href="login">login</a></li>
            </ul>
            <!-- <div class="crypt-gross-market-cap">
                <h5>$34.795.90 <span class="crypt-up pl-2">+3.435 %</span></h5>
                <h6>0.7925.90 BTC <span class="crypt-down pl-2">+7.435 %</span></h6></div>
        </div> -->
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <!-- <div class="logo">
                        <img src="images/logo.png" alt="logo-image">
                    </div> -->
                    <h3 class="p-4">Welcome To Login</h3>
                    <div class="cryptorio-main-form">
                        <form action="" method="post" class="text-left">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Your email/cellphone">
                            <label for="password">Password</label>
                            <input type="password" id="pwd" name="pwd" placeholder="Please Input Your Password">

                             <button type="submit" name="login" style="width: 100%;" class="crypt-button-red-full">
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </form>
                        <p class="float-left"><a href="register">Sign Up</a></p>
                        <p class="float-right"><a href="forgot">Forgot Password</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

	<script src="amc/core.js"></script>
	<script src="amc/charts.js"></script>
	<script src="amc/dark.js"></script>
	<script src="amc/animated.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<script src="js/amc.js"></script>
	<script src="https://s3.tradingview.com/tv.js"></script>
</body>
</html>