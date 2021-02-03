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
    <form action="login.php" method="GET" class="main-form">
      <legend>
        <h1>Create a new account:</h1>
      </legend>
      <label for="username">Username:
        <input type="text" name="username" id="username"></label>
      <label for="password">Password:
        <input type="text" name="password" id="password"></label>
      <input type="submit" value="Create User">
    </form>
  </main>
</body>

</html>