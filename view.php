<?php
include 'templates/header.php';
include 'classes/classes.php';

/* Creating a new instance of the RecipeDisplay class. */
$recipe_display = new RecipeDisplay($recipe_objects);

// var_dump($recipe_display);
// echo json_encode($recipe_display);


if(isset($_GET['recipe']) && !(empty(trim($_GET['recipe'])))) {
    $slug = $_GET['recipe'];
    /* Searching for a recipe whose title matches the slug. */
    foreach ($recipe_objects as $recipe) {/* Looping through the array of recipes and assigning each recipe to the variable . */
      $result = stripos($recipe->name, $slug) !== false; /*Searching for a recipe whose title matches the slug*/
      if ($result){ /*Fetching the details of the recipe found*/
          $image=$recipe->image_url;
          $name=$recipe->name;
          $prep_time=$recipe->prep_time;
          $cook_time=$recipe->cook_time;
          $description=$recipe->description;
          $ingredients=$recipe->ingredients;
          $cookingEquipment=$recipe->cookingEquipment;
      }
  }
} 
?>


    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="<?php echo $image?>"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><?php echo $name;?></h2>
            <p><?php echo $description;?></p>
            <div class="recipe-icons">
              <article>
                <i ></i>
                
                
              </article>
              <article>
                <i class=></i>
                
                
              </article>
              <article>
             
              </article>
            </div>
            
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                
                <div></div>
              </header>
              <p>
              Combine your dry ingredients (flour, sugar, salt, baking powder) 
              in one bowl and your wet ingredients (egg, milk, vegetable oil, 
              mashed bananas) in another bowl. Add the dry ingredients to the 
              bowl with the wet ingredients, then stir until they're incorporated. 
              It's OK if your batter is slightly lumpy. 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                
                <div></div>
              </header>
              <p>
              Pour the batter in ¼ cup portions onto a lightly oiled pan or 
              griddle over medium-high heat. Cook for a few minutes, 
              flip with a spatula, and cook for another few minutes 
              (or until each side is golden brown).
              "Fish is a type of seafood that is a good source of protein, vitamins, and minerals. It is a popular food around the world and is enjoyed in many different ways, including grilled, baked, fried, or poached. Fish can come in many different varieties, sizes, and flavors, and can be either freshwater or saltwater species. Some common types of fish include salmon, tuna, cod, halibut, tilapia, and trout. Fish can be served as a main course or used as an ingredient in salads, soups, stews, or other dishes. It is also a popular food for those who follow certain dietary restrictions, such as those who are pescatarian or avoid red meat. Overall, fish is a versatile and healthy food that can be enjoyed in many different ways.",
	"Fish: This is the main ingredient, which can be purchased fresh or frozen.

    Seasonings: Various seasonings can be used to add flavor to the fish, such as salt, pepper, garlic powder, or paprika.
    
    Oil or butter: Used to coat the fish and prevent it from sticking to the pan, and to add flavor and moisture.
    
    Lemon or lime juice: Used to add flavor and enhance the taste of the fish.
    
    Herbs: Fresh or dried herbs such as thyme, basil, dill, or parsley can be used to add flavor to the fish.
    
    Vegetables: Some recipes may call for vegetables such as onions, bell peppers, or tomatoes to be cooked with the fish.",
	"Pan or skillet: You will need a pan or skillet to cook the fish. The type of pan you use will depend on the recipe, but a non-stick skillet is a good option for many types of fish.

    Tongs or spatula: You will need tongs or a spatula to flip the fish and move it around in the pan.
    
    Knife and cutting board: You will need a knife and cutting board to prepare the fish before cooking, such as removing any bones or skin.
    
    Oven: If you are baking or broiling the fish, you will need an oven to cook it.
    
    Grilling equipment: If you are grilling the fish, you will need a grill and appropriate grilling equipment such as tongs or a spatula.
    
    Oil or cooking spray: You may need oil or cooking spray to coat the pan or skillet to prevent the fish from sticking.
    
    Seasonings and other ingredients: You will need any seasonings or other ingredients specified in the recipe to flavor the fish.
    
    Optional equipment:
    
    Fish poacher: A fish poacher can be used to cook whole fish in a flavorful broth.
    
    Fish spatula: A fish spatula is a specialized tool designed to flip and handle delicate fish without breaking it apart.
    
    Fish basket: A fish basket can be used to grill fish and prevent it from sticking to the grill grates." 
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                
                <div></div>
              </header>
              <p>
              Serve your banana pancakes immediately. 
              They're delicious alone or with your favorite pancake toppings. 
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient"><?php echo $ingredients;?></p>
            </div>
            <div>
              <h4>cooking equipment</h4>
              <p class="single-tool"><?php echo $cookingEquipment;?></p>
            </div>
          </article>
        </section>
      </div>
    </main>
    <?php include 'templates/footer.php';?>
