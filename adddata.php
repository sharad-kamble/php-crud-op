<!-- <?php
$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );
 {
    if ( $conn ) {
        echo 'database connected sucessfully';
    } else {
        echo 'Database not connected';
    }
}
?> -->






<?php

$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );
$user = $_GET[ 'user' ];
$pass = $_GET[ 'pass' ];

$sql = "insert into register (username,password) values('$user','$pass')";
mysqli_query($conn,$sql);
header('location:index.php');

















?>