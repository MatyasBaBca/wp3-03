<!DOCTYPE html>
<html lang="cz">
<head>
    <title>co ja vim</title>
    <style>
    .kluk
            {
        background-color: blue;
            }
    
    .holka
            {
        background-color: pink;
            }
            
</style>
</head>

<body>

<?php


$students[0]['name'] = "Matyas";
$students[0]['points'] = "69";
$students[0]['age'] = "18";
$students[0]['gender'] = "male";

$students[1]['name'] = "Adam";
$students[1]['points'] = "420";
$students[1]['age'] = "17";
$students[1]['gender'] = "male";

$students[2]['name'] = "Martin";
$students[2]['points'] = "6969";
$students[2]['age'] = "69";
$students[2]['gender'] = "male";

$students[3]['name'] = "Kristian";
$students[3]['points'] = "0";
$students[3]['age'] = "25";
$students[3]['gender'] = "male";

$students[4]['name'] = "Pila";
$students[4]['points'] = "1";
$students[4]['age'] = "19";
$students[4]['gender'] = "female";

$students[5]['name'] = "Tvoje mama";
$students[5]['points'] = "123456789";
$students[5]['age'] = "55";
$students[5]['gender'] = "male";

$students[6]['name'] = "Tvuj tata";
$students[6]['points'] = "123";
$students[6]['age'] = "64";
$students[6]['gender'] = "female";


foreach ($students as $student => $studentValues) {
    echo "Jméno: " . $studentValues ['name'] . "<br>";
    echo "Body: " . $studentValues['points'] . "<br>";
    echo "Věk: " .  $studentValues['age'] . "<br>";
    if ($studentValues['gender'] == "male") {
        echo '<div class="kluk">kluk</div><br>';
    } else {
        echo '<div class="holka">holka</div><br>';
    }
}

?>


</body>
</html>               