<?php
$conn=mysqli_connect("localhost","root","","quic");

$set=mysqli_query($conn,"SELECT COUNT(c_id) FROM filt WHERE typ='oil filter'");
if($set){
    echo "ppap" .$set;
}else {
    echo "force";
}
?>