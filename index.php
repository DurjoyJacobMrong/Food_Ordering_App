<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php
    if(isset($_SESSION['order']))
    {
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
    ?>
    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <?php 
            // Create sql query to dispaly catagory from database
            $sql= "SELECT * FROM tbl_catagory LIMIT 3";
            //Execute the query
            $res= mysqli_query($conn, $sql);
            //Count rows to check whether the catagory is available or not
            $count= mysqli_num_rows($res);

            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id=$row["id"];
                    $title=$row["title"];
                    $image_name=$row["image_name"];
                    ?>

                      <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                      <div class="box-3 float-container">
                        <?php
                           if($image_name == "")
                           {
                            echo "<div clas='error'>Image Not Available</div>";
                           }
                           else
                           {
                            ?>
                             <img src="<?php echo SITEURL; ?>images/catagory/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                            <?php
                           }
                           ?>
                        

                       <h3 class="float-text text-white"><?php echo $title; ?></h3>
                      </div>
                    </a>
            
                    <?php
                }
            }
            else
            {
                echo "<div class='error'>Category not found.</div>";
            }

            ?>
 

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php
               $sql2=" SELECT * FROM tbl_food WHERE active='Yes' And featured='Yes' LIMIT 6";
               $res2= mysqli_query($conn, $sql2);
            $count2= mysqli_num_rows($res2);
           
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res2))
                {
                    $id=$row["id"];
                    $title=$row["title"];
                    $image_name=$row["image_name"];
                ?>

                <div class="food-menu-box">
                <div class="food-menu-img">
                    <?php
                    if($image_name=="")
                    {
                        echo "<div class='error'>Image not available.</div>";
                    }
                    else
                    {
                        ?>
                         <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                          <?php
                        }
                        ?>
                    
                </div>

                <div class="food-menu-desc">
                    <h4><?php echo $tittle; ?></h4>
                    <p class="food-price">$<?php echo $price; ?></p>
                    <p class="food-detail">
                       <?php echo $description; ?>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

                <?php
                }
            
            }
            
    else 
    {
       echo "<div class='error'>Food not available.</div>";    
    }
       ?> 



        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php') ?>
