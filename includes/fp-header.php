<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="css/fp.css">
    <link rel="stylesheet" href="css/fp-nav.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/fp-form.css">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme:200,300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded:200,300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
</head>
    <body>
        <header>
            <a href="index.php"><img src="images/SULS-header.png" alt="The Stay-Up Late Show with Rebecca M. Davis" class="header" id="header-logo"/></a>  
            <nav id="nav" class="navbar">
                <?=stayup_links($nav1)?>
            </nav>
        </header>
        <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="photos.php">Photos</a></li>
                <li><a href="merch.php">Merch</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="https://btbd.brownpapertickets.com/" target="_blank">Tickets</a></li>
                <li><a href="https://www.facebook.com/groups/23130851221/" target="_blank">Facebook</a></li>
        </ul>
        <div class="wrapper">
        <h3 class="page-title"><a href="#" class="page-title"><?=$pageTitle;?></a></h3>