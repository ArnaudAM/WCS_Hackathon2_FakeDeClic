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
                return $this->render('/index.html.twig');
            }
        }
        return $this->render('/default/facebook_index.html.twig');
    }

    /**
     * @Route("/test", name="app_test")
     */
    public function test()
    {

        var_dump($_POST);
        exit();
        return $this->render('/default/facebook_index.html.twig');
    }

}