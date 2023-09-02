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
            <h1>Manage Admin</h1>
            <br><br>

            <!-- Add Admin Button-->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br><br>

            <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add']; //Display Session Massage
                    unset($_SESSION['add']); //Removie Session Message
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete']; //Display Session Massage
                    unset($_SESSION['delete']); //Removie Session Message
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update']; //Display Session Massage
                    unset($_SESSION['update']); //Removie Session Message
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found']; //Display Session Massage
                    unset($_SESSION['user-not-found']); //Removie Session Message
                }
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match']; //Display Session Massage
                    unset($_SESSION['pwd-not-match']); //Removie Session Message
                }
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd']; //Display Session Massage
                    unset($_SESSION['change-pwd']); //Removie Session Message
                }
            ?>
            

            <table class="tbl-full">
                <tr>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php 
                    //Query to get all Admin
                    $sql = "SELECT * FROM tbl_admin";
                    //Execute the Query
                    $res = mysqli_query($conn, $sql);

                    //Check whether the Query is Execute of Not
                    if($res==TRUE)
                    {
                        //Count Nows to Check whether data is in database or mot
                        $count = mysqli_num_rows($res); 

                        $sn=1; 

                        //Check the data in database
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //Using while loop to get all the data from database

                                //get individual data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $username=$rows['username'];

                                //display the values in table
                ?>

                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                    <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                </td>
                            </tr>

                <?php

                            }
                        }
                        else
                        {

                        }
                    }
                ?>
                
                
            </table>

        </div>
    </div>
    <!--Main Content End-->

    <!--Footer Starts-->
    <?php include('partials/footer.php'); ?>
    <!--Fotter End-->
</body>
</html>