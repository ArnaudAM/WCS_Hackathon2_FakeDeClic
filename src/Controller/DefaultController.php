<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */

    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/facebook", name="app_facebook")
     */
    public function facebook()
    {
        if (!empty($_POST)){
            if(!empty($_POST['date1'])
                && !empty($_POST['auteur1'])
                && !empty($_POST['photo2'])
                && !empty($_POST['lien1'])
            ){
                return $this->render('/default/good.html.twig');
            }
        }
        return $this->render('/default/bad.html.twig');
    }

    /**
     * @Route("/facebookIndex", name="app_facebookIndex")
     */

    public function facebookIndex()
    {
        return $this->render('/default/facebookIndex.html.twig');
    }

    /**
     * @Route("/good", name="app_good")
     */
    public function goodChoice()
    {
        return $this->render('/default/good.html.twig');
    }

    /**
     * @Route("/bad", name="app_bad")
     */
    public function badChoice()
    {
        return $this->render('/default/bad.html.twig');
    }
}

