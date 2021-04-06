<?php

namespace App;

class Book
{
    public function path(): string
    {
        return __CLASS__ . ' : ' . __FILE__;
    }
}