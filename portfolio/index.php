<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Muzammil Peer</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <?php include_once('html/css_include.php'); ?>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php include_once('html/navigationbar.php'); ?>

    <!-- Header -->
   <?php include_once('html/header.php'); ?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php include_once('dir.php'); ?>
                <?php importAllFiles('html/front/'); ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
   <?php include_once('html/about_section.php'); ?>

    <!-- Contact Section -->
   <?php include_once('html/contact_section.php'); ?>

    <!-- Footer -->
    <?php include_once('html/footer.php'); ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <?php importAllFiles('html/detail/'); ?>

    <!-- add all javascript frameworks -->
    <?php include_once('html/javascript_include.php'); ?>

</body>

</html>
