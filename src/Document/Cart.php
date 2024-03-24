<?php

namespace App\Document;

class Cart
{
    protected array $items;

    public function __construct($items) {
        $this->items = $items;
    }
}