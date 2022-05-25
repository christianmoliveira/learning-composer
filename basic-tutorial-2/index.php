<?php

require "vendor/autoload.php";

$users = new App\Controllers\UsersController();
echo "<br />";

$user = new App\Models\User();
echo "<br />";

$helpers = new App\Helpers();
echo "<br />";

$concatStrings = concatString('Dá-lhe', 'Mengo');
echo $concatStrings;
echo "<br />";

$class = new App\Classes\Class1();
echo "<br />";

$class2 = new App\Classes\Class2();
echo "<br />";

$class3 = new Any\Class3();