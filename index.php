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

?>