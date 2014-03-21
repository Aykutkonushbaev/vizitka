<?php

namespace Shop\UserBundle\Controller;

use Shop\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $userRepository = $this-> getDoctrine()
             -> getRepository('ShopUserBundle:User');
        $users = $userRepository
             -> findAll();

        return $this->render('ShopUserBundle:Default:index.html.twig', array('users' => $users));
    }


    public function deleteAction(User $user){
        if(!$user)
            throw $this->createNotFoundException();
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirect ($this->generateUrl('shop_user_homepage'));
        }


    public function createAction(Request $request){
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name','text')
            ->add('lastname','text')
            ->add('age','number')
            ->add('Create','submit')
            ->getForm();
        $form ->handleRequest($request);
        if ($form->isSubmitted()){
            if ($form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect ($this->generateUrl('shop_user_homepage'));
            }
        }
        $form->createView();
        return $this->render('ShopUserBundle:Default:create.html.twig', array('form'=>$form->createView()));

    }
    public function readAction(User $user){

        $userRepository = $this-> getDoctrine()
            -> getRepository('ShopUserBundle:User');
        $users = $userRepository
            -> find($user);
        return $this->render('ShopUserBundle:Default:read.html.twig', array('users'=>$users));
    }
}
