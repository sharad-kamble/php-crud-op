<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>CRUD Operation</h2>

    <form action="adddata.php" method="GET">
        <label for="">username</label>
        <input type="text" name="user" required><br><br>
        <label for="">Password</label>
        <input type="password" name="pass" required><br><br>
        <input type="submit" value="Insert Data">
        <a href="viewdata.php">View Data</a>
    </form>


</body>

</html>