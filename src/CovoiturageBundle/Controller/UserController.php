<?php

namespace CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function accueilAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:index.html.twig');
    }

    public function trajetsAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:Trajets.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:About.html.twig');
    }

    public function contactAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:Contact.html.twig');
    }

    public function faqAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:FAQ.html.twig');
    }

    public function promosAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:Promos.html.twig');
    }



    public function profilAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:profil.html.twig');
    }


}
