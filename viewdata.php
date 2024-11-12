<table border="1">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>

    <?php
$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );

$sql = 'SELECT * FROM register';
$check = mysqli_query( $conn, $sql );
$rowcount = mysqli_num_rows( $check );
if ( $rowcount>0 ) {
    while( $data = mysqli_fetch_assoc( $check ) ) {

?>

    <tr>
        <td><?php echo $data[ 'id' ];?></td>
        <td><?php echo $data[ 'username' ];?></td>
        <td><?php echo $data[ 'password' ];?></td>
        <td><a
                href="updatedata.php?id=<?php echo $data[ 'id' ];?>&user=<?php echo $data[ 'username' ];?>&pass=<?php echo $data[ 'password' ];?>    ">
                Update</a></td>
        <td><a href="deletedata.php?id=<?php echo $data[ 'id' ];?>">Delete</a></td>


    </tr>

    <?php

    // echo $data[ 'id' ].'<br>';
    // echo $data[ 'username' ].'<br>';
    // echo $data[ 'password' ].'<br>';
    }

    } else {
    echo 'No data found';
    }

    ?>

</table>