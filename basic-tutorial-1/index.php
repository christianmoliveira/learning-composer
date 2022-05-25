<?php

// Include composer autoload
require 'vendor/autoload.php';

// Import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/elden-ring.jpg')->resize(300, 200)->save('img/elden-ring-2.jpg', 100);

echo '<img src="img/elden-ring-2.jpg" alt=""/>';