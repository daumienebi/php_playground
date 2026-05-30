<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            color: brown;
            position:center
        }
        p{
            color : green;
        }
    </style>
</head>
<body>

<h1> Testing out PHP </h1>
<h2> Ivy blvck must see this </h2>
<?php

// From php 7.0, to use stict types, we can use : 
//<?php declare(strict_types=1); // strict requirement
    // Defining constants
    define("INTRO_TEXT","Esto es un hello papito");
    echo ("<p> $INTRO_TEXT </p>")   ;
    $n = 10; // global variable that cannot be seen inside other functions
    echo " \"\" outside the test function is $n";
    $song_name = "Odumodublvck - Industry machine";
    echo "<h1>$song_name</h1>";
    // Get the datatype
    var_dump($song_name);

    $t = 5;
    echo ("<p>Variable type is : </p>"); // Parece que no se debe utilizar var_dump con un echo
    var_dump($t);
    function testingGlobalVariables(){
        $number = 0;
        // This variable n cannot be called here
        echo "n inside my test function : $n";
    }

    function loop(){
        $n = 1;
        for($i = 0; $i < 20 ; $i++){
            echo ("<p><b> Iteration $n</p></b>");
            $n++;
        }
        print("Hello with print function");

    }

    function greeting(){
        // obtener la hora del tiempo actual
        $time = date("H");

        if($time < "10"){
            echo("<p> Have a good morning</p>");
        }elseif ($time < "20"){
            echo("<p> Have a good day </p>");
        }else{
            echo("<p> Have a good night</p>");
        }

    }

    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }
    echo("<p> Resultado de las sumas : </p>");
    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

    $x = 10.365;
    echo ("<p>Variable type is : var_dump($x)</p>");

    $txt = "I'm learning PHP and the str_word_count function";
    echo "<b>Text : $txt </b>";
    $count =  str_word_count($txt);
    echo("<p>Number of words : $count words </p>");
     echo("<p>Number of words (otra forma con . ) : " .str_word_count($txt). " words </p>");

    function addNumbers(float $a, float $b) : int {
        return (int)($a + $b);
    }
    
    echo addNumbers(1.2, 5.2);
    echo "<p></p>";
    //Call the functions... sorta main methods

    testingGlobalVariables();
    loop();
    greeting()
?>
</body>

</html>