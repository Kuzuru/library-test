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

use App\Book;

$book = new Book();

echo $book->path();
echo "<br>Загрузка выполнена!";