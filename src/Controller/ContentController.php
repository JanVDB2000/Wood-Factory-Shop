<?php

namespace App\Controller;

use App\Document\Cart;
use App\Document\CreatorType;
use App\Document\Customer;
use App\Document\CustomerData;
use App\Document\Document;
use App\Document\Draft;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ContentController extends AbstractController
{

    #[Route(path: '/', name: 'home_document', methods: ['GET'])]
    public function HomePage(Request $request): Response
    {
        dd($request->getSession()->all());

        return new Response('Document Home');
    }

    #[Route(path: '/create-document', name: 'create_document', methods: ['GET'])]
    public function createDocument(Request $request): Response
    {

        $sessions =  $request->getSession();

        $cart = [
            [
                'product' => 'Oak Wood Plank',
                'quantity' => 5,
                'unit_price' => 15.99,
                'total_price' => 242.10,

                'description' => 'High-quality oak wood plank for various woodworking projects.',
            ],
            [
                'product' => 'Pine Wood Board',
                'quantity' => 10,
                'unit_price' => 8.49,
                'total_price' => 242.10,
                'description' => 'Standard pine wood board suitable for DIY projects and carpentry.',
            ],
            [
                'product' => 'Cedar Wood Beam',
                'quantity' => 3,
                'unit_price' => 25.75,
                'total_price' => 242.10,
                'description' => 'Premium cedar wood beam perfect for outdoor construction and landscaping.',
            ],
        ];

        // Create a new offer document and switch the status from draft to finalized
        $draft = new Draft(Document::TYPE_OFFER_VARIANT,Document::STATUS_DRAFT, [
            'cart' => new Cart($cart),
            'customer' => new Customer(Customer::TYPE_ARCHITECT ,CustomerData::getOrCreate()),
            'creator-type' => CreatorType::TYPE_REPRESENTATIVE,
            'creation-date' => Carbon::now()->format('d/m/Y H:i')
        ]);

        $draft->setStatus(Document::STATUS_FINALIZED);

        $sessions->set('draft',$draft);

        // Return a response or do whatever you need to do
        return new Response('Document created and finalized.');
    }
}