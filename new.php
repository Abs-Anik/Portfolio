<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
   
   <?php
        if(isset($_POST["button"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            echo $name."<br>";
            echo $email;
            
        }
    ?>
    <form action="new.php" method="post">
       Name: <input type="text" name="name"><br><br>
       E-mail: <input type="email" name="email"><br><br>
       <input type="submit" name="button">
    </form>
</body>
</html>