<?php 
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
// generate data by accessing properties
echo $faker->name .'<br>';
 // 'Lucy Cechtelar';
echo $faker->address .'<br>';
// "426 Jordy Lodge
 // Cartwrightshire, SC 88120-6700"
echo $faker->text .'<br>';
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer Tutorial - Faker</title>
</head>
<body>
    
</body>
</html>