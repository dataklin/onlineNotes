<?php
//<!--Connect to the database-->
$link = mysqli_connect("localhost", "cwdcth36_notes", "FAqF7agHSfp?", "cwdcth36_onlinenotes");
if(mysqli_connect_error()){
    die("ERROR: Unable to connect:" .mysqli_connect_error());
    echo "<script>window.alert('Hi!)</script>";
}

?>