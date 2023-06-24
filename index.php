<?php 
include 'classes/classes.php';
include 'templates/header.php';
?>

  <!-- main -->
  <main class="page">
    <!-- header -->
    <header class="hero">
      <div class="hero-container">
        <div class="hero-text">
          <h1  style="color: blue;">Taste .com</h1>
          <h5>Welcome to our recipe website! We're so glad you're here. Our goal is to help you get delicious meals that will bring joy to your table and those around it. Whether you're a seasoned chef or a beginner in the kitchen, we have something for everyone. Our collection of recipes ranges from simple and quick meals to elaborate and festive dishes, so there's always something new to try. We hope you'll find inspiration and joy in our recipes and feel free to share your own creations with us. Let's get cooking!</h5>
        </div>
      </div>
    </header>
   <!-- end of header -->
<section class="recipes-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- tag container -->
                <?php 
                $recipeDisplay = new RecipeDisplay($recipe_objects);
                $recipeDisplay->displayTags();
                ?>
                <!-- end of tag container -->
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php
                        $recipe_display = new RecipeDisplay($recipe_objects);
                        $recipe_display->displayRecipes();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> 

  </main>
  <!-- end of main -->


  <?php include "templates/footer.php";?>