<?php
 $data= new CategoryController();
 $categories=$data->getAllCategories();
 $data2=new ProductController();
 $products=$data2->getAllProducts();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro MAROC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="views/style/header.css" rel="stylesheet"> 
    <link href="views/style/index/category-slide.css" rel="stylesheet"> 
    <link href="views/style/index/produit-populaire.css" rel="stylesheet">
    <link href="views/style/index/nouvelle-arrivee.css" rel="stylesheet">
    <link href="views/style/footer.css" rel="stylesheet">
    <link href="views/style/ChakraPetch.css" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,700&display=swap'); </style>
</head>
  <body>
    <div class=".container-fluid d-flex flex-column">
       <?php include('pages/header.php'); ?>
       <?php include('pages/category-slide.php'); ?>
       <?php include('pages/nouvelle-arrivee.php'); ?>
       <?php include('pages/index_categories.php');?>
       <?php include('pages/carousel/carousel.html');?>
       <?php include('pages/nouveautees_phone.php'); ?>
        <?php include('pages/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>