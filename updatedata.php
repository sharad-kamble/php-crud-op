<?php
$username = $_REQUEST[ 'user' ];
$password = $_REQUEST[ 'pass' ];
$id = $_REQUEST[ 'id' ];
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
</head>

<body>

<form action = 'updateprocess.php' method = 'POST'>
<input type = 'text' name = 'id' readonly value = "<?php echo $id; ?>" required><br><br>
<!-- //type = can be hidden -->
<label for = ''>username</label>
<input type = 'text' name = 'user' value = "<?php echo $username;?>" required><br><br>
<label for = ''>Password</label>
<input type = 'password' name = 'pass' value = "<?php echo $password;    ?>" required><br><br>
<input type = 'submit' value = 'Update Data'>

</form>

</body>

</html>