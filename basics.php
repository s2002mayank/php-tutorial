<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <h1>Php tutorials</h1>
    <main style="border: 2px solid black; height: 1000px; padding: 10px; line-height: 1.25;">
    <?php
    // constants
    define('PI', 3.14);

    // echo command
    echo " 1. use 'echo' command to render html text<br>";

    // declare variable
    $var1= 30;
    echo $var1;
    $var1= "hello php";
    echo "<br>";
    echo $var1;
    echo "<br>";

    // operators: arithmetic, assignment, comparison, increment/decrement, logical
    // +, -, *, /
    // =, +=, -+, *=, /=
    // >, <, >=, <=, !=, ==
    // ++, --
    // and(&&), or(||), xor, ! 
    echo 23 - 21;
    echo "<br>";
    echo var_dump(23 and 21); // var_dump(): Dumps information about a variable
    echo "<br>";
    echo var_dump(!false);        
    echo "<br>";
    echo var_dump(2 != 1);
    echo "<br>";

    // primary data types: string, integer, float, boolean, array, object
    echo PI;
    echo "<hr>";    

    // data type: array
    $arr= array(1,2,3,4,5,6,7,8,9,10);
    $arr2= array('python', 'c++', 'java');
    echo $arr[0];
    echo "<br>";
    echo $arr2[0];
    echo "<br>";
    echo count($arr);
    echo "<br>";
    echo var_dump($arr);
    echo "<br>";

    //loops
    echo "while loop: ";    
    $i=0;
    while($i<= 10){
        echo $i;
        echo " ";
        $i++;
    }
    echo "<br>";
    // iterate over an array
    echo "for loop: ";
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo " ";        
    }
    echo "<br>";
    // foreach loop
    echo "'foreach' loop: ";
    foreach ($arr as $element) {                        
        echo $element;
        echo " ";
    }
    echo "<hr>";  
    //functions      
    function printNum($num){
        echo"num is: ";
        echo $num;
        echo "<br>";
    }
    echo "function printNum() called with argument 23<br>";
    printNum(23);
    echo "<hr>";

    //strings
    $str= "hello moto";
    echo "string: ". $str; // string concatenation operator (.)
    echo "<br>length of string is: ". strlen($str);
    echo "<br>word count of string is: ". str_word_count($str);
    echo "<br>reverse of string is: ". strrev($str);
    echo "<br>position of 'moto' of string is: ". strpos($str, 'moto');
    echo "<br>replace 'hello' with 'bye' of string is: ". str_replace('hello','bye',$str);
    echo "<hr>";
    echo "hi $str"
    ?>
    </main>
</body>
</html>