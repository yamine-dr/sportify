<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify</title>
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    

    <?php include("header.php") ?>
    <div class="text-center ">
    
    <form  method = "POST" action = "verification.php" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Vous avez déja un compte?</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
    </form>
    </div>


   <script src="../styles/bootstrap.js"></script>
</body>

</html>