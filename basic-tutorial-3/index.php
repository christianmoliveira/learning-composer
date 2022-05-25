<?php

require 'vendor/autoload.php';

use App\Classes\News;

$newsDom = new News('https://www.washingtonpost.com/');
$headlines = $newsDom->get_headlines();

include "src/Templates/newsList.php";
