<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Demo</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
    <?php
    $username = filter_input(INPUT_GET,'username');
    ?>
    <form action="welcome.php" method="GET" class="main-form">
      <legend>
        <h1>Log In:</h1>
        <p>Registered Users: <?php echo $username ?></p>
      </legend>
      <label for="username">Username:
        <input type="text" name="username" id="username"></label>
      <label for="pass">Password:
        <input type="password" name="password" id="password"></label>
      <input type="submit" value="Create User">
    </form>
  </main>
</body>

</html>