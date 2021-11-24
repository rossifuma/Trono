<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrazione</title>
</head>

<body>

    <div class="container">

        <h1>Sign in</h1>

        <form class="registration" action="register.php" method="post">
            <label for="email">Email:</label>
            <input id="email" type="text" name="email" placeholder="Insert email" required="required">

            <label for="username">Username:</label>
            <input id="username" type="text" name="username" placeholder="Insert username" required="required">

            <label for="password">Password:</label>
            <input id="password" type="password" name="password" placeholder="Insert password" required="required">
           
            <input id="regSubmit" type="submit" value="Registrati">
           
            <span>Già registrato?</span> <a href="login.html" id="logRef">Accedi</a>
        </form>

    </div>



</body>

</html>