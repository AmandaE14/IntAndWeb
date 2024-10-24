<?php
$myArray = [
    'fruit' => 'Mango',
    'color' => 'Yellow',
    'quantity' => 5
];

foreach ($myArray as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

function describeFruit(string $name, string $color = "Unknown"): string {
    return "The fruit is a $name and its color is $color.";
}

echo describeFruit("Mango", "Yellow");
?>