<!--Menu Starts-->
<?php include('partials/menu.php'); ?>
<!--Menu End-->

<div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>
            <br><br><br>

            <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add']; //Display Session Massage
                    unset($_SESSION['add']); //Removie Session Message
                }
            ?>

            <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" id="" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" id="" placeholder="Enter Username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" id="" placeholder="Enter Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

            </form>

        </div>
    </div>

<!--Footer Starts-->
<?php include('partials/footer.php'); ?>
<!--Fotter End-->

<?php 
    //Procccess the value from Form and Save it in Database
    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //Button Clicked
        //echo "Button Clicked";

        // 1. Get the data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        // 2. SQL Query to save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
        ";

        // 3. Execute Query and Save Data in Database
        $res = mysqli_query($conn, $sql) or die('Could not connect: ' . mysqli_error($conn));

        // 4. Check whether the (Query is Executed) data is inserted or not and display appropiate message
        if($res==TRUE)
        {
            //echo "Data Inserted";
            //Display message
            $_SESSION['add'] = "<div class='success'>Added Sucessfully!</div>";
            //Redirect page to Manage Admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //echo "Failed to Insert Data";
            //Display message
            $_SESSION['add'] = "<div class='error'>Failed to add!</div>";
            //Redirect page to Add Admin
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }

?>