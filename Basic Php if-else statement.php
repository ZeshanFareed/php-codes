
<?php

$num1 = 10;             // Change these values as needed
$num2 = 5;             // Change these values as needed
$operation = "*";     // Change this to "+" , "-" , "mul" or "div" as needed

$result = 0;

if ($operation == "+")
 {
    $result = $num1 + $num2;
    echo "Addition : $num1 + $num2 = $result";
}
 elseif ($operation == "-") 
{
    $result = $num1 - $num2;
    echo "Subtraction : $num1 - $num2 = $result";
}
 elseif ($operation == "*") 
 {
    $result = $num1 * $num2;
    echo "Multiplication : $num1 * $num2 = $result";
} 
elseif ($operation == "/") 
{
    if ($num2 != 0) 
    {
        $result = $num1 / $num2;
        echo "Division : $num1 / $num2 = $result";
    
    }
     else
    {
        echo "Division by zero is not allowed.";
    }
}
else 
{
    echo "Invalid operation. Please use 'add', 'sub', 'mul', or 'div'.";
}

?>
