<?php

namespace Main\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Main\loginBundle\Entity\Entidade;
use Main\loginBundle\Entity\Doador;
use Main\loginBundle\Entity\Evento;
use Main\loginBundle\Modals\Login;
use Main\loginBundle\Entity\Presenca;
use Main\loginBundle\Entity\Eventocred;

class DoadorController extends Controller
{
    public function indexAction()
    {
        if($this->isLogged())
        {    
            return $this->render('loginBundle:Default:doadorwelcome.html.twig'); // red
        }
        else
        {
            return $this->render('loginBundle:Default:doadorindex.html.twig');
        }
    }
    
    public function getDoador(Request $request)
    {
        $username=$request->get('username');
        $password=md5($request->get('password'));
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('loginBundle:Doador');
        return $repository->findOneBy(array('username'=>$username,'password'=>$password));
    }
    
    public function loginAction(Request $request)
    {
        $session=$this->getRequest()->getSession();
        if($request->getMethod()=='POST')
        {
            $session->clear();
            $usr = $this->getDoador($request);
            if($usr){
                $login = new Login();
                $login->setPassword($usr->getPassword());
                $login->setUsername($usr->getUsername());
                $session->set('login',$login);
                return $this->render('loginBundle:Default:doadorwelcome.html.twig'); // red
            }
            else
            {
                return $this->render('loginBundle:Default:doadorloginuser.html.twig', array('name' => 'Login Error'));
            }
        }
        else
        { 
            return $this->render('loginBundle:Default:doadorloginuser.html.twig');
        }
    }
    
    public function saveDoador(Request $request)
    {
        $doador = new Doador();
        $cidade=$request->get('cidade');
        $nome=$request->get('nome');
        $password=  md5($request->get('password'));
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
        $doador->setCidade($cidade);
        $doador->setNome($nome);
        $doador->setPeso($peso);
        $doador->setUsername($username);
        $doador->setPassword($password);
        $doador->setTiposangue($sangue);
        $doador->setRhsangue($rh);
        $doador->setLinkfacebook("umidqualuqer");
        $doador->setIdfacebook("umlinkqualuqer");

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($doador);
        $em->flush();
    }
    
    public function doadorregAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $this->saveDoador($request);
            return $this->render('loginBundle:Default:doadorindex.html.twig'); // red
        }
        return $this->render('loginBundle:Default:formdoador.html.twig');
    }
    
    public function isLogged()
    {
        $session=$this->getRequest()->getSession();
        if($session->has('login'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function getUserOnline()
    {
        $session=$this->getRequest()->getSession();
        $login = $session->get('login');
        $username = $login->getUsername();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('loginBundle:Doador'); 
        return $repository->findOneBy(array('username'=>$username)); 
    }
    
    public function savePresenca($iddoador, $idevento)
    {
        $presenca = new Presenca();
        $presenca->setIddoador($iddoador);
        $presenca->setIdevento($idevento);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($presenca);
        $em->flush();
    }
    
    public function confpresAction(Request $request, $iddoevento)
    {
        $session=$this->getRequest()->getSession();
        if($this->isLogged())
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('loginBundle:Evento');
            $id=$iddoevento;
            $evento = $repository->findOneBy(array('id'=>$id));
            if($evento)
            {
                if($request->getMethod()=='POST')
                {
                    $confirm = $request->get('confirm');
                    if($confirm=='confirmado')
                    {
                        $iddoador=$this->getUserOnline()->getID();
                        $this->savePresenca($iddoador,$id);
                    }
                    return $this->render('loginBundle:Default:obrigado.html.twig'); // red
                }
                else
                {
                    return $this->render('loginBundle:Default:confirmarpresenca.html.twig', 
                        array('id'=> $id,'datafim'=> $evento->getDatafim()->format('m-d'),
                            'datainicio'=> $evento->getDatainicio()->format('m-d'),
                            'horafim'=> $evento->getHorafim()->format('H:i:s'),
                            'horainicio'=> $evento->getHorainicio()->format('H:i:s'),
                            'numero'=> $evento->getNumero(),
                            'bairro'=> $evento->getBairro(),
                            'rua'=> $evento->getRua(),
                            'nome'=> $evento->getNome(),
                            'descricao' => $evento->getDescricao()));   
                }
            }
            else
            {
                return $this->render('loginBundle:Default:doadorpagina404.html.twig'); // red
            }  
        }
        else
        {
            return $this->render('loginBundle:Default:doadorloginuser.html.twig'); // red e red back
        }
    }
    public function aboutAction()
    {
        return $this->render('loginBundle:Default:doadorabout.html.twig');   
    }
}

