<?php

namespace Qcm\SalleTpBundle\Controller;

use Qcm\SalleTpBundle\Entity\Salle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SalleController extends Controller
{
    public function indexAction()
    {


        $session= $this->get('session');
        if($session->has('nbreFois'))
            $session->set('nbreFois', $session->get('nbreFois')+1);
        else

          $session->set('nbreFois',1);

        return $this->render('QcmSalleTpBundle:Salle:index.html.twig',array('nbreFois'=>$session->get('nbreFois')));


    }



    public function voirSalleAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('QcmSalleTpBundle:Salle');
        $salle= $repository ->find($id);

        if ($salle ==null)
         throw $this->createNotFoundException('Salle[id='.$id.'] inexistante');

        return $this->render('QcmSalleTpBundle:Salle:voirSalle.html.twig',
            array('nomSalle'=>$salle->__toString()));
    }

    public function ajouterSalleAction(Request $request)
    {
        $salle = new Salle;
        $form = $this->createFormBuilder($salle)
                     ->add('batiment','text')
                     ->add('etage', 'text')
                     ->add('numero', 'text')
                     ->add('envoyer','submit')
                     ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($salle);
            $entityManager->flush();
            $this->get('session')->getFlashBag()->add('InfoAjout', 'nouvelle salle'.$salle->__toString());
            $url = $this->generateUrl('qcm_salle_tp_accueil');
            return $this->redirect($url);

        }


          return $this->render('QcmSalleTpBundle:Salle:ajouterSalle.html.twig',array('form'=>$form->createView()));

    }
         public function navigationAction(){

             $repository= $this->getDoctrine()->getManager()->getRepository('QcmSalleTpBundle:Salle');
             $salle= $repository->findAll();
             return $this->render('QcmSalleTpBundle:Salle:navigation.html.twig', array('salles'=>$salle));
         }
}
