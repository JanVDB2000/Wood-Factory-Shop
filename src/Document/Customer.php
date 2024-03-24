<?php

namespace App\Document;

class Customer
{
    const TYPE_DRAFT = null;
    const TYPE_ARCHITECT = 'architect';
    const TYPE_PROSPECT = 'prospect';
    const TYPE_REGULAR_CUSTOMER = 'regular customer';
    protected string $type;
    protected $customerData;
    public function __construct($type = self::TYPE_DRAFT,$customerData = null) {
        $this->type = $type;
        $this->customerData = $customerData;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCustomerData() {
        return $this->customerData;
    }
}