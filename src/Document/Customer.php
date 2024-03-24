<?php

namespace App\Document;

class Customer
{
    const TYPE_DRAFT = null;
    const TYPE_ARCHITECT = 'architect';
    const TYPE_PROSPECT = 'prospect';
    const TYPE_REGULAR_CUSTOMER = 'regular customer';

    protected string $type;

    public function __construct($type = self::TYPE_DRAFT) {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}