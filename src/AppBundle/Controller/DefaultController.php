<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig',array());
    }    
    /**
     * @Route("/ofirmie", name="ofirmie")
     */
    public function ofirmieAction(Request $request)
    {
        return $this->render('default/ofirmie.html.twig',array());
    }    
    /**
     * @Route("/produkty", name="produkty")
     */
    public function produktyAction(Request $request)
    {
        return $this->render('default/produkty.html.twig',array());
    }    
    /**
     * @Route("/pracownicy", name="pracownicy")
     */
    public function pracownicyAction(Request $request)
    {
        return $this->render('default/pracownicy.html.twig',array());
    }    
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontaktAction(Request $request)
    {
        return $this->render('default/kontakt.html.twig',array());
    }
    
    
}
