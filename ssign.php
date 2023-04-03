<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
        <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
        <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.svg">
        <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.eot">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="jquery.min.js"></script>
    <title>quic</title>
</head>
<style>
    a {
  color: #e1fd0d;
  text-decoration: none;
}
a:hover {
  color: #1d1f25;
  background-color: azure;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
</style>
<body style="background-color: bisque;"><br>
    <div class="cont1">
        <div class="container" style="background-color: black;">
            <div class="row">
                <center><h2 style="color: azure;">supplier login</h2>
                <hr style="color: rgb(158, 169, 169);"></center>
                <div class="col-md- 12">
                    <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" style="color: azure;">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="name" class="form-label" >Company name:</label>
                                        <input type="text" name="cname"  class="form-control" required>
                                        <label for="email" class="form-label" >Email:</label>
                                        <input type="text" name="email"  class="form-control" required>
                                        <label for="phone" class="form-label" >Phone:</label>
                                        <input type="number" name="phone"  class="form-control" required>
                                        <label for="description" class="form-label" >Company description work:</label>
                                        <input type="text" name="desc"  class="form-control" required>
                                        <label for="c date" class="form-label" >Company creation date:</label>
                                        <input type="date" name="cdate"  class="form-control" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="location" class="form-label" >location:</label>
                                        <input type="text" name="location"  class="form-control" required>
                                        <label for="name" class="form-label" >Company owner name:</label>
                                        <input type="text" name="oname"  class="form-control" required>
                                        <label for="phone" class="form-label" >Profile/c logo:</label>
                                        <input type="file" name="img"  class="form-control" required>
                                        <input type="checkbox" name="agree" class="form-check">do you agree to keep your company identifier unpublic  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="uname" class="form-label" >username:</label>
                                <input type="text" name="uname"   class="form-control" required>
                                <label for="pass" class="form-label" >password:</label>
                                <input type="password" name="pass"   class="form-control" required>
                                <label for="cpass" class="form-label" >confirm password:</label>
                                <input type="password" name="cpass"  class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <center>
                                <div class="col-md-12">
                                    <input type="submit" value="submit" name="save" >
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
    <?php
if (isset($_POST['save'])) {
    $cname=$_POST['cname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $cdate=$_POST['cdate'];
    $location=$_POST['location'];
    $oname=$_POST['oname'];
    $agree=$_POST['agree'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $img=$_FILES['img'];
    $imgtype=$_FILES['img']['type'];
    $imgerror=$_FILES['img']['error'];
    $imgsize=$_FILES['img']['size'];
    $imgtmp_name=$_FILES['img']['tmp_name'];
    $imgname=$_FILES['img']['name'];
    $imgexp=explode('.',$imgname);
    $imgstr=strtolower(end($imgexp));
    $allow=array("jpg","png","jpeg","jfif");
    if (in_array($imgstr,$allow)) {
        if ($imgerror==0) {
            if ($imgsize<=3000000) {
                $newimg=uniqid('imgeof',false).".".$imgstr;
                $imgdest="image/".$newimg;
                if ($pass==$_POST['cpass']) {
                    $insert=mysqli_query($conn,"INSERT into `sup` Values('sup','$cname','$location',$phone,'$email',1234567,123456789,'$oname','$desc','$uname','$cdate','$pass','$newimg','null')");
                    if ($insert) {
                        move_uploaded_file($imgtmp_name,$imgdest);
                        header("location:signup.php");
                    }else {
                     echo "<div class='alert-danger'><center>sorry please retry</center></div>";
                    }
                }else {
                    echo "<div class='alert-danger'><center>sorry you didn't comfirm your password retry</center></div>";
                }
            }else {
               echo "<div class='alert-danger'><center>img size error</center></div>";

            }
        }else {
             echo "<div class='alert-danger'><center>there was an error which occured</center></div>";
            
        }
    }else {
         echo "<div class='alert-danger'><center>file extension is not allowed</center></div>";
        
    }

}
?>
<br>
<center><a href="login.php" class="link"> i already have an account </a></center>
    </div>
    </div>
</body>
</html>