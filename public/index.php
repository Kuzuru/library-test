<?php

/*
|--------------------------------------------------------------------------
| Include the Composer
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for this application.
|
*/

require_once __DIR__ . '/../vendor/autoload.php';

#################################################

use App\Hello;

$hello = new Hello();

echo $hello->world();
echo "<br>Загрузка выполнена!";