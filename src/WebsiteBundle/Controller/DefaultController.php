<?php

namespace MenuBundle\Controller;
namespace WebsiteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Menu/Default/index.html.twig');
    }

    /**
     * @Route("/accueil")
     */
    public function accueilAction()
    {
        return $this->render('@Website/Default/accueil.html.twig');
    }

    /**
     * @Route("/legal")
     */
    public function mentionsAction()
    {
        return $this->render('@Website/Default/mentions.html.twig');
    }

    /**
     * @Route("/la-societe")
     */
    public function societeAction()
    {
        return $this->render('@Website/Default/societe.html.twig');
    }

    /**
     * @Route("/ticket")
     */
    public function ticketAction()
    {
        return $this->render('@Website/Default/ticket.html.twig');
    }
}