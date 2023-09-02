<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Food Order Website</title>
</head>

<body>
    <!--Menu Starts-->
    <?php include('partials/menu.php'); ?>
    <!--Menu End-->

    <!--Main Content Starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1>
            <br><br>

            <?php if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            } ?>
            <br><br>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Catagories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Catagories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Catagories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Catagories
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--Main Content End-->

    <!--Footer Starts-->
    <?php include('partials/footer.php'); ?>
    <!--Fotter End-->
</body>

</html>