<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );

// Retrieve POST data and assign it to variables
$username = $_POST[ 'user' ];
$password = $_POST[ 'pass' ];
$id = $_POST[ 'id' ];

// Display the POST data ( for debugging purposes )
echo $username;
echo $password;
echo $id;

// Update query
$sql = "UPDATE register SET username = '$username', password = '$password' WHERE id = '$id'";
mysqli_query( $conn, $sql );

mysqli_close( $conn );

header( 'location:viewdata.php' );
?>