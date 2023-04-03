<?php
    session_start();
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
    .submit{
            border-radius: 13px;
            align-items: center;
            justify-content: center;
    }
    .submit:hover{
        border-radius: 13px;
        border-color: chartreuse;
    }
    a {
  color: #f7f7f6;
  text-decoration: none;
}
a:hover {
  color: #1d1f25;
  background-color: azure;
}

</style>
<body style="background-color: bisque;">
    <div class="container"> <br><br>
       <div class="row" style="background-color: black;">
        <div class="col-md-5" style="background-color: black; color: azure;">
            <form action="#" class="form-check" method="post">
                <h4>SUPPLIER'S LOGIN</h4>
                <hr>
                <label for="username" class="form-label">username/email/phone:</label>
                <input type="text" name="uep" class="form-control" placeholder="enter your username/phone/email to enter">
                <label for="password" class="form-label">password:</label>
                <input type="password" name="pass" class="form-control" placeholder="entrer you password" required><br>
                <input type="checkbox" name="remember"> remember me 

                <center><input type="submit" class="submit" name="sub" value="login"></center><br>
                <center>
                    <p><a href="forget.php">i forgot my password</a><br>
                        <a href="ssign.php">i don't have an account</a></p>
                </center>
            </form><br>
            <?php
            if(isset($_POST['sub'])){
                $uep=$_POST['uep'];
                $pass=$_POST['pass'];
                $selectnbr=mysqli_query($conn,"SELECT*FROM sup WHERE phone='$uep'");
                $selectnbr2=mysqli_query($conn,"SELECT*FROM sup WHERE username='$uep'");
                $selectnbr3=mysqli_query($conn,"SELECT*FROM sup WHERE email='$uep'");
                if(mysqli_num_rows($selectnbr)>=1){
                    $select=mysqli_query($conn,"SELECT*FROM sup WHERE phone='$uep' AND pass='$pass'");
                    if(mysqli_num_rows($select)>=1){
                        $row=mysqli_fetch_array($select);
                        $id=$row['id'];
                        $_SESSION['id']=$id;
                        header("location:index.php");
                    }else{
                        echo "<div class='alert-danger text-danger'>Wrong password</div>";
                    }
                }elseif(mysqli_num_rows($selectnbr2)>=1){
                    $select=mysqli_query($conn,"SELECT*FROM sup WHERE username='$uep' AND pass='$pass'");
                    if(mysqli_num_rows($select)>=1){
                        $row=mysqli_fetch_array($select);
                        $id=$row['id'];
                        $_SESSION['id']=$id;
                        header("location:index.php");
                    }else{
                        echo "<div class='alert-danger text-danger'>Wrong password</div>";
                    }
                }elseif(mysqli_num_rows($selectnbr3)>=1){
                    $select=mysqli_query($conn,"SELECT*FROM sup WHERE email='$uep' AND pass='$pass'");
                    if(mysqli_num_rows($select)>=1){
                        $row=mysqli_fetch_array($select);
                        $id=$row['id'];
                        $_SESSION['id']=$id;
                        header("location:index.php");
                    }else{
                        echo "<div class='alert-danger text-danger'>Wrong password</div>";
                    }
                }else{
                    echo "<div class='alert-danger text-danger'>user is not known</div>";
                }
            }
         ?>

        </div>
        <div class="col-md-7">
            <img src="image/profile6.jpg" class="img-thumbnail" alt="example" >
        </div>
       </div> 
    </div>
</body>
</html>