<?php

include "recipe.php";

class Recipe {
    public $name;
    public $image_url;
    public $prep_time;
    public $cook_time;
    public $description;
    public $ingredients;
    public $cookingEquipment;

    public function __construct($name, $image_url, $prep_time, $cook_time, $description, $ingredients, $cookingEquipment) {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->prep_time = $prep_time;
        $this->cook_time = $cook_time;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->cookingEquipment = $cookingEquipment;
    }
}
class RecipeDisplay {
    /* Creating a new array called recipes */
    public $recipes;

    /**
     * It creates an array of Recipe objects and assigns it to the recipes property
     */
    public function __construct(array $objects) {
        foreach($objects as $object){
            if($object instanceof Recipe)
            $this->recipes[] = $object;
        }
    }
    /**
     * It displays a list of recipes, filtered by a search query if one is provided
     */
    public function displayRecipes() {
        // check if the form has been submitted
        if (isset($_POST['search'])) {
            $search_query = $_POST['search'];
            $filtered_recipes = $this->searchRecipes($search_query);
        } else {
            $filtered_recipes = $this->recipes;
        }
?>
        <div class="container">
            <div class="row">
                <?php if (count($filtered_recipes) > 0): ?>
                    <?php foreach ($filtered_recipes as $recipe): ?>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="view.php?recipe=<?= $recipe->name ?>" class="recipe text-decoration-none">
                                <img src="<?= $recipe->image_url ?>" class="img-fluid" alt= "<?= $recipe->name ?>">
                                <h5 class="mt-2"><?= $recipe->name ?></h5>
                                
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col">
                        <p>No recipes found for the search query: <?= $search_query ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
<?php
    }

    public function searchRecipes($query) {
        $filtered_recipes = array();
        foreach ($this->recipes as $recipe) {
            if (stripos($recipe->name, $query) !== false) {
                $filtered_recipes[] = $recipe;
            }
        }
        return $filtered_recipes;
    }
    public function displayTags(){
        echo '<div class="tags-container">';
        echo '<h4>recipes</h4>';
        echo '<div class="tags-list">';
        foreach ($this->recipes as $recipe) {
            echo '<a href="#">' . $recipe->name . '</a>';
        }
        echo '</div>';
        echo '</div>';
        
    }
}

