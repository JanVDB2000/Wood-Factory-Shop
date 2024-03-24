<?php

namespace App\Document;

class CustomerData
{
    public static function getOrCreate($id = null): array
    {
        return [
            'info_card'=>[
                'id_customer' => 15420,
                'type_customer' => Customer::TYPE_REGULAR_CUSTOMER,
                'ids_representatives' => [33,125],
                'last_user_edited_this'=> 33,
            ],
            'name' => 'John Doe',
            'email' => 'john@example.com',
            "companyName" => "Wood NV",
            "industry" => "Furniture Factory",
            "phone_1" => "+1234567890",
            "phone_2" => "+1234567890",
            "fax" => "+1234567890",
            "vat_nummer" => "BE 042504510745",
            "language" => "EN",
            "contactPerson" => "John Doe",
            "contactEmail" => "john.doe@example.com",
            "contactPhone" => "+1234567890",
            "website" => "http://www.example.com",
            "company_size" => "Large",
            "founded_year" => 2000,
            "annual_revenue" => "$10M",
            "description" => "We specialize in high-quality wooden furniture.",
            "shipping_address" => [
                "street" => "456 Oak Ave",
                "city" => "Othertown",
                "state" => "NY",
                "zip" => "54321",
                "country" => "USA"
            ],
            "billing_address" => [
                "street" => "789 Maple Blvd",
                "city" => "Somewhere",
                "state" => "TX",
                "zip" => "67890",
                "country" => "USA"
            ],
            "social_media" => [
                "facebook" => "https://www.facebook.com/woodnv",
                "twitter/x" => "https://twitter.com/woodnv",
                "instagram" => "https://www.instagram.com/woodnv"
            ],
            "additional_contacts" => [
                [
                    "name" => "Jane Smith",
                    "email" => "jane@example.com",
                    "phone" => "+1987654321"
                ],
                [
                    "name" => "Mark Johnson",
                    "email" => "mark@example.com",
                    "phone" => "+1654321987"
                ]
            ],
            "preferred_payment_method" => "Wire Transfer",
            "customer_since" => "2015-07-20",
            "notes" => "This customer prefers eco-friendly packaging.",
            "loyalty_status" => "Gold",
            "discount_percentage" => 5,
            "preferred_shipping_method" => "Express",
            "customer_segment" => "High-Value",
            "marketing_opt_in" => true
        ];
    }
}