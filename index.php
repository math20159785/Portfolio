<?php
// Uncomment the line below if you want to use PIN protection
// include 'components/pin.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/config.php'; ?>
</head>
<body>
    <?php include 'components/preloader.php'; ?>
    <?php include 'includes/header.php'; ?>
    
    <main id="main-content">
        <?php include 'pages/home.php'; ?>
        <?php include 'pages/about.php'; ?>
        <?php include 'pages/resume.php'; ?>
        <?php include 'pages/portfolio.php'; ?>
        <?php include 'pages/contact.php'; ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>