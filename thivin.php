<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    public function find_fruit_position($fruit_name) 
    {
			$pos = array_search($fruit_name, $this->fruits_arr);

			if ($pos) {
				return ucwords($fruit_name) . " is in the " . ($pos + 1) . " position";
			} else {
				return "Couldn't find the fruit";
			}
		}
	

	$fr_cont = new Fruit_Controller($fruits);
	

	// Initialize fruits arr in the controller
	echo "<pre>";
	print_r($fr_cont->fruits_arr);


	// Add fruits
	$fr_cont->add_fruits(array("pineapple", "strawberry"), "add");
	print_r($fr_cont->fruits_arr);
    ?>
</body>
</html>