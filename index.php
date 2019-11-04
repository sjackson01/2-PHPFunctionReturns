<?php
/* !Function Returns! */

/*
//Create function with return
function hello(){
    return "Hello, World.";
}

//Assign returned value to a variable
$greeting = hello();

//Echo returned string within variable 
echo $greeting; 
*/

/*
//Create function with 2 returns 
function hello($name){
    if($name == "Mike"){
    return "Hello, Mike.";
    }else{
        return "Hello, stranger.";
    }
}

//Pass function argument and assign return to $greeting
$greeting = hello('Mike');

//Echo returned value
echo $greeting;
*/

//Create function that returns array
function add_up($a, $b){
    //Create internal array
    $arr = array(
        $a,
        $b,
        $a + $b,
    );
    return $arr;

}

//Pass arguments to function
$value = add_up(2,4);

//Array ( [0] => 2 [1] => 4 [2] => 6 )
//Print out array
print_r($value); 

//Echo single array value
echo $value[0];

?>