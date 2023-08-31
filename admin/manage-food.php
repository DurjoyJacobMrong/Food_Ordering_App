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
            <h1>Manage food</h1>

            <br><br>
            <!-- Add Admin Button-->
            <a href="#" class="btn-primary">Add Food</a>
            <br><br>
            <table class="tbl-full">
                <tr>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Mofiz Mofiz</td>
                    <td>mofizmofiz</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Mofiz Mofiz</td>
                    <td>mofizmofiz</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Mofiz Mofiz</td>
                    <td>mofizmofiz</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
                
            </table>  
            
        </div>
    </div>
    <!--Main Content End-->

    <!--Footer Starts-->
    <?php include('partials/footer.php'); ?>
    <!--Fotter End-->
</body>
</html>