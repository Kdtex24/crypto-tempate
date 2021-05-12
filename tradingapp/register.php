<?php
include('inc/db.php');
if(isset($_POST['register']))
{

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="images/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['pws']);
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$designation=$_POST['designation'];

if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $image=$final_file;
    }
$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO users(name,email, password, gender, mobile, designation, image) VALUES(:name, :email, :password, :gender, :mobileno, :designation, :image)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':gender', $gender, PDO::PARAM_STR);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
$query-> bindParam(':image', $image, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <title>Crypterio</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/ui.css">
    <script type="text/javascript">

    function validate()
        {
            var extensions = new Array("jpg","jpeg");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg)");
            return false;
        }
        
</script>
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
                                <div class="crypt-mega-dropdown-menu">
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
                            <li><a href="register">Account</a></li>
                            <li class="crypt-box-menu menu-red"><a href="register">register</a></li>
                            <li class="crypt-box-menu menu-green"><a href="login">login</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
        <div class="crypt-mobile-menu">
            <ul class="crypt-heading-menu">
                <li><a href="trading">Trading</a></li>
                <li><a href="register">Account</a></li>
                <li class="crypt-box-menu menu-red"><a href="register">register</a></li>
                <li class="crypt-box-menu menu-green"><a href="login">login</a></li>
            </ul>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <div class="cryptorio-main-form">
                        <form method="post" class="text-left" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name" placeholder="Your full name">

                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" placeholder="Your username">

                            <label for="email">email</label>
                            <input id="email" type="text" name="email" placeholder="Your email">

                            <label for="password">Password</label>
                            <input id="pwd" type="password" name="pwd" placeholder="password">

                                <button id="register" type="submit" name="register" style="width: 100%;" class="crypt-button-red-full">
                                <i class="fa fa-sign-in"></i> Register
                            </button>
                        </form>
                        <p class="float-left"><a href="login">Log In</a></p>
                        <p class="float-right"><a href="forgot">Recover Password</a></p>
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