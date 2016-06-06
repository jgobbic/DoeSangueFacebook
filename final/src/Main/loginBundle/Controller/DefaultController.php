<?php

namespace Main\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Main\loginBundle\Entity\Users;
use Main\loginBundle\Entity\Entidade;
use Main\loginBundle\Entity\Doador;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('loginBundle:Default:index.html.twig');
    }
    
    public function loginAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $nome=$request->get('username');
            $password=md5($request->get('password'));
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('loginBundle:Entidade');
            $usr = $repository->findOneBy(array('nome'=>$nome,'password'=>$password));
            if($usr){
                return $this->render('loginBundle:Default:welcome.html.twig');
            }
            else
            {
                return $this->render('loginBundle:Default:loginuser.html.twig', array('name' => 'Login Error'));
            }
        }
        else
        {
            return $this->render('loginBundle:Default:loginuser.html.twig');
        }
    }
    
    public function doadorregAction(Request $request)
    {
        $entidade = new Doador();
        if($request->getMethod()=='POST')
        {
            $cidade=$request->get('cidade');
            $username=$request->get('username');
            $peso=$request->get('peso'); 
            $sangue=$request->get('sangue');
            $rh=$request->get('rh');
            if($peso==null)
            {
                $peso=0;
            }
            else
            {
                $peso=1;
            }
            $entidade->setCidade($cidade);
            $entidade->setNome($username);
            $entidade->setPeso($peso);
            $entidade->setTiposangue($sangue);
            $entidade->setRhsangue($rh);
            $entidade->setLinkfacebook("umidqualuqer");
            $entidade->setIdfacebook("umlinkqualuqer");
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entidade);
            $em->flush();
            return $this->render('loginBundle:Default:index.html.twig');
        }
        return $this->render('loginBundle:Default:formdoador.html.twig');
    }
    
    public function entidaderegAction(Request $request)
    {
        $entidade = new Entidade();
        if($request->getMethod()=='POST')
        {
            $cidade=$request->get('cidade');
            $username=$request->get('username');
            $password=md5($request->get('password'));
            $cnpj=$request->get('cnpj');    
            $entidade->setPassword($password);
            $entidade->setCidade($cidade);
            $entidade->setNome($username);
            $entidade->setIdfacebook("umidqualquer");
            $entidade->setLinkfacebook("umlinkqualquer");
            $entidade->setCnpj($cnpj);
            $entidade->setDescricao("umadescricaoqualuqer");
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entidade);
            $em->flush();
            return $this->render('loginBundle:Default:index.html.twig');
        }
        return $this->render('loginBundle:Default:formentidade.html.twig');
    }
    
    public function aboutAction(Request $request)
    {
        return $this->render('loginBundle:Default:about.html.twig');   
    }
}

