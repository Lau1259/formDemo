<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome!</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
  <?php
    $username = filter_input(INPUT_GET,'username');
    $password = filter_input(INPUT_GET,'password');
    ?>
    <div class="welcome">
      <h1>Your form was submitted successfully!</h1>
      <p>Your username is: <?php echo $username?></p>
      <p>Your password is: <?php echo $password?></p>
    </div>
  </main>
</body>

</html>