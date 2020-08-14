<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="getapi.js"></script>
</head>
<body>
    <p>
        Hello <?php echo $_POST["username"]; ?> you have successfully logged in!
    </p>
    <form action="index.php">
        <button type="submit">Logout</button>
    </form>

    <div id="demo"></div>

</body>
</html>