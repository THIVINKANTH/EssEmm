<?php 
 $a = "apple";
 $b = "orange";
 $c = "mango";

 $furite = array($a,$b,$c);

function thivin($furite)
{
    $pos = array_search($furite,$GLOBALS["furite"]);
    return ucwords($furite)." "."pos is"." ".$pos;
    // global $a,$b,$c;
    // switch($furite)
    // {
    //     case "apple":
    //     echo ucwords("My fav fruit is : $a");
    //     break;
    //     case "orange":
    //     echo "My fav fruit is : $b";
    //     break;
    //     case "mango":
    //     echo "My fav fruit is : $c";
    //     break;
    //     default:
    //     echo "opps no value";
    // }
}
echo thivin("mango");
class furite_controller
{
    public $furite_array;

    function __construct($furite)
    {
        $this->furite_array = $furite;
    }
    function find_furite_pos($furite_array)
    {
        $pos = array_search($furite_array,$GLOBALS['furite']);
        // print_r($new_furite);
        // exit;
        if($pos)
        {
             return ucwords($furite_array)." "."this po is"." ".$pos;
             
        }
        else
        {
            return "position not found";
        }
       
    }
    function add_furites($furite, $operation)
    { 
        if($operation == "add")
        {
            $this->furite_array = array_merge($this->furite_array,$furite);
        }
        elseif($operation == "replace")
        {
            $this->furite_array =$furite;
        }
        return $this->furite_array;
        // return $this->furite;
    }
    function add_furite()
    {
         return $this->operation;
    }
}

$values = new furite_controller(array("pineapple","strawberry"));
// echo $values->add_furites();
// echo $values->add_furite();
// echo $values->find_furite_pos("pineapple","strawberry");
$added = $values->find_furite_pos(array_push($furite,"pineapple","strawberry"));
//  echo $values->find_furite_pos("pineapple");

print_r($values->add_furites(array("Kiwi"), "add"));

$furite_controller = new furite_controller($furite);
$furite_controller->add_furites(array("grapes","guava"),"replace");
print_r($furite_controller->furite_array);

// $rearray = array("grapes","guava");
// print_r($furite_controller->furite_array);
// print_r(array_replace($furite,$abc));


//  echo var_dump($furite);
//  print_r($added);
// print_r $values;
// print_r(array_merge($furite,$values));
// $added = array_push($furite,$values);
// echo var_dump($added);
// foreach($added as $add)
// {
//     echo $add;
// }
// echo $values->add_furites("pineapple","strawberry");
// $added = array_push($furite,$values);
// echo $added;
// echo array_push($values->add_furites());


// $length = count($furite);
// for($x = 0; $x <= $length; $x++)
// {

// }




?>