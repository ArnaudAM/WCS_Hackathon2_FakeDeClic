<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="app_index")
     */

    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/sidebar", name="app_sidebar")
     */

    public function sidebar()
    {
        return $this->render('/default/sidebar.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/good", name="app_good")
     */
    public function goodChoice()
    {
        return $this->render('/default/good.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/bad", name="app_bad")
     */
    public function badChoice()
    {
        return $this->render('/default/bad.html.twig');
    }
}
