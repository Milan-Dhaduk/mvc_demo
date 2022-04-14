<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
</head>
<body>
<form action="<?php echo URLROOT; ?>/userController/signup" method="POST">

<input type="text" name="fullname" placeholder="enter name"><br>
<input type="email" name="email" placeholder="enter email" ><br>
<input type="password" name="pass" placeholder="enter password"><br>
<input type="submit" value="Register">


</form>





  
</body>
</html>