<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> MON BLOG </title>
    <link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1a5ab8cc7f.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/8ib02kjd7569cok3s214548uopj3nrbvdfv51u1feyjqdm2d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/index.css"/>
</head>
<?php
    include 'partials/Navbar.php';   
    if($Auth->isLogedIn()) {
        $class = "logged";
    }
    else {
        $class = "";
    } 
?>
<body class="<?=$class?>">