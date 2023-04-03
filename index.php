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
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.svg">
        <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.eot">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="image/profile7.jpg" type="image/x-icon">
    <title>Document</title>
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
                <center><h2 style="color: azure;">fitter intrence</h2>
                <hr style="color: rgb(158, 169, 169);"></center>
                <div class="col-md- 12">
                    <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" style="color: azure;">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label" >Company namespace:</label>
                                        <input type="text" name="cname"  class="form-control" required>
                                        <label for="email" class="form-label" >type:</label>
                                        <input type="text" name="typ"  class="form-control" required>
                                        <label for="number" class="form-label" >number:</label>
                                        <input type="text" name="number"  class="form-control" required>
                                        <label for="description" class="form-label" >amount:</label>
                                        <input type="number" name="amount"  class="form-control" required><br>
                                        <input type="submit" value="submit" name="save" ><br>
                    
                                    </div> 
                                    <?php
if (isset($_POST['save'])) {
    $cname=$_POST['cname'];
    $typ=$_POST['typ'];
    $number=$_POST['number'];
    $amount=$_POST['amount'];
    $insert=mysqli_query($conn,"INSERT INTO filt(cname,typ,numbe,amount) VALUES('$cname','$typ','$number',$amount)");
    if($insert){
        echo "well inserted";
    }

}
    ?>     
                        </div>

                    </form>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <p><h5 style="color: antiquewhite;">total amount filters:</h5>
                                    <?php
                                    $set="SELECT* FROM filt ";
                                    $dis=mysqli_query($conn,$set);
                                    if ($inf=mysqli_num_rows($dis)) {
                                        echo '<h5 style="color: antiquewhite;">'.$inf.'</h5>';
                                    }
                                    $set1="SELECT* FROM filt WHERE typ='oil filter' ";
                                    $dis1=mysqli_query($conn,$set1);
                                    if ($inf1=mysqli_num_rows($dis1)) {
                                        echo '';
                                    }
                                    $set2="SELECT* FROM filt WHERE typ='air filter' ";
                                    $dis2=mysqli_query($conn,$set2);
                                    if ($inf2=mysqli_num_rows($dis2)) {
                                        echo '';
                                    }
                                    $set3="SELECT* FROM filt WHERE typ='fuel filter' ";
                                    $dis3=mysqli_query($conn,$set3);
                                    if ($inf3=mysqli_num_rows($dis3)) {
                                        echo '';
                                    }
                                    $set4="SELECT* FROM filt WHERE typ='lube filter' ";
                                    $dis4=mysqli_query($conn,$set4);
                                    if ($inf4=mysqli_num_rows($dis4)) {
                                        echo '';
                                    }
                                    $set5="SELECT* FROM filt WHERE typ='element' ";
                                    $dis5=mysqli_query($conn,$set5);
                                    if ($inf5=mysqli_num_rows($dis5)) {
                                        echo '';
                                    }
                                    $set6="SELECT* FROM filt WHERE typ='UN' ";
                                    $dis6=mysqli_query($conn,$set6);
                                    if ($inf6=mysqli_num_rows($dis6)) {
                                        echo '';
                                    }
                                    ?></p>
                                    <center>
                                        
<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var xArray = ["oil filter", "air filter", "fuel filter", "lube filter", "element","unkown"];
var yArray = [<?php  echo $inf1;  ?>, <?php  echo $inf2;  ?>, <?php  echo $inf3;  ?>, <?php  echo $inf4;  ?>, <?php  echo $inf5;  ?>,<?php  echo $inf6;  ?>];

var layout = {title:"TOP SPARE PART STORE CAPACITY"};

var data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);
</script>
                </div>
                                    </center>
            </div>
            <div class="row">
                            <center>
                                <div class="col-md-3">
                                    <br>

                                </div>
                                <div class="col-md-9">
                                    <table class="table" style="color: white;">
                                        <tr>
                                            <td>c_id</td>
                                            <td>cname</td>
                                            <td>type</td>
                                            <td>number</td>
                                            <td>amount</td>
                                            <td>update</td>
                                            <td>delete</td>
                                        </tr>
                                        <tr>                     
                                       <?php
                         $select=mysqli_query($conn,"SELECT*FROM filt");
                         if($select){
                            
                            while($row=mysqli_fetch_array($select)){
                                echo"<tr><td>TPS" .$row['c_id'];
                                echo"</td><td>" .$row['cname'];
                                echo"</td><td>" .$row['typ'];
                                echo"</td><td>" .$row['numbe'];
                                echo"</td><td>" .$row['amount'];
                                echo"Pcs</td><td>" ;
                        ?>
                        <div class="btn-warning" style="border-radius: 30px;">
                            <a style="text-decoration: none; color: aliceblue;" href="update.php?id=<?php echo $row['c_id']; ?>"><center><p>update</p></center></a>
                        </div>
                        <?php
                                echo"</td><td>" ;
                          ?>
                         <div class="btn-danger" style="border-radius: 30px;">
                            <a style="text-decoration: none; color: aliceblue;" href="delete.php?id=<?php echo $row['c_id']; ?>"><center>delete</center></a>
                         </div>
                        <?php
                                echo"</td></tr>";
                            }
                        }
                        ?></tr>
                                    </table>
                                </div>
                            </center>
                        </div>
    </div>
    </div>
</body>
</html>