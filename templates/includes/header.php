<?php
session_start();
if($_SERVER[HTTP_HOST] == 'localhost'){
  $url = 'http://localhost:8888/tracscareform/';
}else{
  $url = "http://".$_SERVER[HTTP_HOST]."/tracscareform";
}
include('includes/config.php');

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="/tracscareform/css/bootstrap.min.css">
        <link rel="stylesheet" href="/tracscareform/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/tracscareform/css/main.css">
        <script src="/tracscareform/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="/tracscareform/js/vendor/barba.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
