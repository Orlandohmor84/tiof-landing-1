<?php include '../includes/var.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../includes/gtm-head.php' ?>
    
    <title>The Institute of F.I.L.M.S.</title>
    <link href="<?php echo $link_bootstrap_css; ?>" rel="stylesheet" integrity="<?php echo $link_bootstrap_css_integrity; ?>" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $link_bootstrap_icons; ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/base.css">
</head>
<body>
    <?php include '../includes/gtm-body.php' ?>

    <?php include '../includes/header.php' ?>

    <main>
        <div class="container">

            <?php include '../includes/intro-6.php' ?>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo $link_bootstrap_js ?>" integrity="<?php echo $link_bootstrap_js_integrity; ?>" crossorigin="anonymous"></script>
    <script src="../assets/scripts/main.js"></script>
    <script type="text/javascript" async src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=UjRsfE"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><!-- Animate on Scroll -->
    <script>
        AOS.init();
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60c68b157f4b000ac03768c7/1f83ouj2l';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>