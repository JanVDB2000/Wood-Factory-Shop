<?php

namespace App\Controller;

use App\Document\Cart;
use App\Document\CreatorType;
use App\Document\Customer;
use App\Document\Document;
use App\Document\Draft;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContentController extends AbstractController
{
    #[Route(path: '/create-document', name: 'create_document', methods: ['GET'])]
    public function createDocument(Request $request): Response
    {

        $cart = [
            [
                'product' => 'Oak Wood Plank',
                'quantity' => 5,
                'unit_price' => 15.99,
                'description' => 'High-quality oak wood plank for various woodworking projects.',
            ],
            [
                'product' => 'Pine Wood Board',
                'quantity' => 10,
                'unit_price' => 8.49,
                'description' => 'Standard pine wood board suitable for DIY projects and carpentry.',
            ],
            [
                'product' => 'Cedar Wood Beam',
                'quantity' => 3,
                'unit_price' => 25.75,
                'description' => 'Premium cedar wood beam perfect for outdoor construction and landscaping.',
            ],
            'total_price' => 242.10,
        ];

        // Create a new offer document
        $draft = new Draft(Document::TYPE_CART,Document::STATUS_DRAFT, [
            'cart' => new Cart($cart),
            'customer' => new Customer(Customer::TYPE_REGULAR_CUSTOMER),
            'creator-type' => CreatorType::TYPE_REPRESENTATIVE,
            'creation-date' => Carbon::now()->format('d/m/Y H:i')
        ]);

        // Switch the status from draft to finalized
        $draft->setType(Document::TYPE_OFFER);
        $draft->setStatus(Document::STATUS_FINALIZED);



        // Return a response or do whatever you need to do
        return new Response('Document created and finalized.');
    }
}