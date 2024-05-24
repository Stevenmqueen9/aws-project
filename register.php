<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="form.css">
</style>
    </head>
    <body>
        <form action="getregister.php" method="post">
        <p>register</p>


            <label for="username">username</label>
            <input type="text" name="username" maxlength="120" required/><br>


        <label for="email">email</label>
            <input type="email" name="email" maxlength="120" required/><br>

            <label for="password">password</label>
            <input type="password" name="password" maxlength="120" required/><br>
            <input type="submit"/><br>
        </form>
    
    </body>
</html>
