<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>HTTP/2 Test page</title>
<!-- Latest compiled and minified CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Optional theme -->
<link href="/css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">

<?php if($_SERVER["SCRIPT_NAME"] === "/push_preload_tag.php"): ?>
<link rel="preload" href="/img/server_push/test1.png" as="image">
<link rel="preload" href="/img/server_push/test2.png" as="image">
<link rel="preload" href="/img/server_push/test3.png" as="image">
<?php endif; ?>

</head>
<body onload="showMessage()">
 
<!-- コンテンツを配置 -->
<?php 
if($_SERVER["SCRIPT_NAME"] === "/index.php") {
    if($_SERVER['SERVER_PORT']==443) { 
        echo '<div class="h2-enabled">Nginx HTTP/2 Enabled!</div>';
    }
    if($_SERVER['SERVER_PORT']==1443) {
        echo '<div class="h2o-h2-enabled">H2O HTTP/2 Enabled!</div>';
    }
    if($_SERVER['SERVER_PORT']==2443) {
        echo '<div class="apache2-h2-enabled">Apache2 HTTP/2 Enabled!</div>';
    }
}
?>
<header class="navbar navbar-static-top">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/index.php">HTTP/2-Lab</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <li <?php if($_SERVER['SERVER_PORT']==443){ echo 'class="active"';} ?>><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:443/index.php" />HTTP/2</a></li>
        <li <?php if($_SERVER['SERVER_PORT']==8443){ echo 'class="active"';} ?>><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:8443/index.php" />HTTP/1.1</a></li>
        <li <?php if($_SERVER['SERVER_PORT']==1443){ echo 'class="active"';} ?>><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:1443/index.php" />HTTP/2 H2O</a></li>
        <li <?php if($_SERVER['SERVER_PORT']==2443){ echo 'class="active"';} ?>><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:2443/index.php" />HTTP/2 Apache2</a></li>
        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>
</header>
