<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
    *@Route("contact", name="contact_show")
    */
    public function contact()
    {
    	return $this->render('blog/contact.html.twig', [
    		'nom'=>"gabriel",
    		'numero'=>"0995053623",
    	]);
    }
}
