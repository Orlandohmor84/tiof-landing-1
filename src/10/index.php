<?php include '../includes/var.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../includes/gtm-head.php' ?>
    
    <title><?php echo $title_main; ?></title>
    <link href="<?php echo $link_bootstrap_css; ?>" rel="stylesheet" integrity="<?php echo $link_bootstrap_css_integrity; ?>" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $link_bootstrap_icons; ?>">
    <link href="<?php echo $link_aos_css; ?>" rel="stylesheet">
    <link rel="stylesheet" href="..\assets\styles\base.css">
</head>
<body>
    <?php include '../includes/gtm-body.php' ?>

    <?php include '../includes/header.php' ?>

    <main>
        <div class="container">

            <?php include '../includes/intro-10.php' ?>

            <?php include '../includes/h1.php' ?>

            <?php include '../includes/next-steps.php' ?>

            <?php include '../includes/learn.php' ?>

        </div><!-- /.container -->

        <?php include '../includes/banner-why.php' ?>

        <?php include '../includes/get.php' ?>

        <div class="container">
            <?php include '../includes/intro-default.php' ?>
        </div>

        <?php include '../includes/banner-top-school.php' ?>

        <?php include '../includes/footer.php' ?>



    </main>

    <script src="<?php echo $link_jquery; ?>" integrity="<?php echo $link_jquery_integrity; ?>" crossorigin="anonymous"></script>
    <script src="<?php echo $link_bootstrap_js; ?>" integrity="<?php echo $link_bootstrap_js_integrity; ?>" crossorigin="anonymous"></script>
    <script src="../assets/scripts/main.js"></script>
    <script type="text/javascript" async src="<?php echo $link_klaviyo; ?>"></script>
    <script src="<?php echo $link_aos_js; ?>"></script><!-- Animate on Scroll -->
    <script>
        AOS.init();
    </script>
</body>
</html>