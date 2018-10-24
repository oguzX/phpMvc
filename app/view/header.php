<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'MVC Blog' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSSDIR."/style.css";?>">
</head>
<body>
<?php
require VDIR.'/navigation.php';
?>
