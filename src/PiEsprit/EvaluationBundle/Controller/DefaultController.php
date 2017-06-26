<?php

namespace PiEsprit\EvaluationBundle\Controller;
use PiEsprit\EvaluationBundle\Evaluation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PiEspritEvaluationBundle:Default:index.html.twig');
    }

    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $eval = new Evaluation(5,'Tres Tres Bien');

        $form = $this->createFormBuilder($eval)
            ->add('note', TextType::class)
            ->add('comment', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
