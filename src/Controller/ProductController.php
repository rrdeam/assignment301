<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private $em;

    public function __construct(PersistenceManagerRegistry $registry)
    {
        $this->em = $registry;
    }
    
    /**
     * @Route("/products", name="products_view_all")
     */
    public function productViewAll()
    {
        $products = $this->em->getRepository(Product::class)->findAll();
        return $this->render("product/index.html.twig",
        [
            'products' => $products
        ]
    );
    }

    
}
