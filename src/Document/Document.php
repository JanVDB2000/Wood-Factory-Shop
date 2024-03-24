<?php

namespace App\Document;

class Document {

    protected mixed $type;
    protected mixed $status;
    protected mixed $content;

    const STATUS_DRAFT = 'draft';
    const STATUS_FINALIZED = 'finalized';

    const TYPE_CART = 'cart';
    const TYPE_QUOTE = 'quote';
    const TYPE_QUOTE_VARIANT = 'quote_variant';
    const TYPE_ORDER = 'order';
    public function __construct($type = self::TYPE_CART, $status = self::STATUS_DRAFT, $content = array()) {
        $this->type = $type;
        $this->status = $status;
        $this->content = $content;
    }

    public function getType() {
        return $this->type;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getContent() {
        return $this->content;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }
}