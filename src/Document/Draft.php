<?php

namespace App\Document;

class Draft extends Document {
    public function __construct($type = self::TYPE_CART ,$status = self::STATUS_DRAFT, $content = array()) {
        parent::__construct( $type, $status, $content);
    }
}
