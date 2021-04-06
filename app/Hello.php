<?php

namespace App;

class Hello
{
    public function world(): string
    {
        return __CLASS__ . ' : ' . __FILE__;
    }
}