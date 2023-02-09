<?php
$commande = new CommandeController();
$produits=$commande->afficheCommandeProduit();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro MAROC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="http://localhost/e-commerce/views/style/header.css" rel="stylesheet"> 
    <link href="http://localhost/e-commerce/views/style/footer.css" rel="stylesheet">
    <link href="http://localhost/e-commerce/views/style/ChakraPetch.css" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,700&display=swap'); </style>
</head>
  <body>
    <div class=".container-fluid d-flex flex-column">
      <?php include('pages/header.php'); ?>
      <?php include('pages/afficheCommandeProduit.php'); ?>
      <?php include('pages/footer.php'); ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>