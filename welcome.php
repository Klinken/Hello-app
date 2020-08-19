<?php
// Start the session
session_start();
$_SESSION["name"] = $_POST["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./getapi.js"></script>
</head>
<body>
    <p>
        <span id="greeting"></span> <?php echo $_SESSION["name"]; ?> you have successfully logged in!
    </p>

    <form action="index.php">
        <button type="submit">Logout</button>
    </form>
    


<script>
    <?php
    if(isset($_POST["language"])){

        $language = $_POST["language"];
        $length = strlen($language);
        
        if($length > 0){
            
            echo "var lang = '" . $language . "';";

            echo "userLang(lang);";

        } else {
            echo "getIp();";
        }

    } else {
        echo "getIp();";

    }

    
 ?>


</script>
</body>
</html>