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
        <link rel="shortcut icon" href="image/profile7.jpg" type="image/x-icon">
    <title>Document</title>
</head>
<body>
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
    // $pass=$_POST['pass'];
    // $idco=$_POST['idco'];
    // $idno=$_POST['idno'];
    $img=$_FILES['img'];
                    $imgtype=$_FILES['img']['type'];
                    $imgerror=$_FILES['img']['error'];
                    $imgsize=$_FILES['img']['size'];
                    $imgtmpname=$_FILES['img']['tmp_name'];
                    $imgname=$_FILES['img']['name'];
                    $imgext=explode('.',$imgname);
                    $imgactualext=strtolower(end($imgext));
                    $allowed=array("jpg","jpeg","png","jfif");
                    if(in_array($imgactualext,$allowed)){
                        if($imgerror==0){
                            if($imgsize<=3000000){
                                $newimgname=uniqid('imageof',false).".".$imgactualext;
                                $imgdestination="image/".$newimgname;
                                $update=mysqli_query($conn,"UPDATE users set profile='$newimgname',pnumber='$pnbr',fname='$fname',lname='$lname',Gender='$Gender' where id='$id'");
                                if($update){
                                    move_uploaded_file($imgtmpname,$imgdestination);
                                    header("location: account.php");
                                }else{
                                    echo "<div class='alert-danger'>Sorry data wasn't updated</div>";
                                }
                            }else{
                                echo "<div class='alert-danger'>img size error</div>";
                            }
                        }else{
                            echo "<div class='alert-danger'>there was an error which occured</div>";
                        }
                    }else{
                        echo "<div class='alert-danger'>file extension is not allowed</div>";
                    }
                 } elseif($pass==$_POST['cpass']) {
        $insert=mysqli_query($conn,"INSERT INTO sup VALUES(null,'$cname','$location',$phone,'$email','$idno','$idco','$oname','$desc','$uname','$cdate','$pass','$profile')");
        if($insert){
            header("location:index.php");
                }
    }else {
        echo "<div class='alert-danger text-danger'>you didn't comfirm youre password</div>";
        header("location:logi.php");
        
          
    }
?>
</body>
</html>
