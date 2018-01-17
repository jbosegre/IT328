<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/15/2018
 * Time: 7:09 PM
 */

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
    <html>
        <head>
             <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>PHP Array and Function Review</title>
        </head>

        <body>
           <form action="" method="post">
               Adding  <input type="text" name="addAnimal"> ...
               <br>
               <br>
               <input type="checkbox" name="flavors[]" value="grasshopper"> The Grasshopper<br>
               <input type="checkbox" name="flavors[]" value="maple"> Whiskey Maple Bacon<br>
               <input type="checkbox" name="flavors[]" value="carrot"> Carrot Walnut<br>
               <input type="checkbox" name="flavors[]" value="caramel"> Salted Caramel Cupcake<br>
               <input type="checkbox" name="flavors[]" value="velvet"> Red Velvet<br>
               <input type="checkbox" name="flavors[]" value="lemon"> Lemon Drop<br>
               <input type="checkbox" name="flavors[]" value="tiramisu"> Tiramisu<br><br>
               <input type="submit" id="submit" value="add">
           </form>

    <pre>
        <?php
                if(!empty($_POST)) {

                    include "array-review-functions.php";

                    $isValid = true;

                    if (!empty($_POST["addAnimal"]) && !in_array($_POST["addAnimal"], $animals))
                    {
                        $added = addedAnimal($_POST["addAnimal"]);
                    }
                    else {
                        echo "<p>animal is missing or is already added to the array</p>";
                        $isValid = false;
                    }

                    if ($isValid) {
                        echo "adding " .$_POST["addAnimal"].addedAnimal($added). "... <br>";
                        echo sortArray() . "<br><br>";
                    }
                }
         ?>
    </pre>
        </body>
    </html>
