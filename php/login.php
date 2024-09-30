<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div id = "form">
        <h1>Signup Form</h1>
        <form name="form" action="signup.php" method= "POST">
            <label> Enter Username</lebel>
            <input type="text" id="user" name ="user" required><br><br>
            <label> Enter Email</lebel>
            <input type="email" id="email" name ="email" required><br><br>
            <label> Enter Password</lebel>
            <input type="password" id="pass" name ="pass" required><br><br>
            <label> Retype Password</lebel>
            <input type="password" id="cpass" name ="cpass" required><br><br>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>