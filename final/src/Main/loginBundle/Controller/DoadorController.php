<?php

namespace Main\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Main\loginBundle\Entity\Doador;
use Main\loginBundle\Modals\Login;
use Main\loginBundle\Entity\Presenca;
use Main\loginBundle\Modals\FBplach;
use Main\loginBundle\Modals\IDplach;

class DoadorController extends Controller
{
    public function indexAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:doadorwelcome.html.twig', array('logged'=>'logged'));  
        }
        else
        {
            return $this->render('loginBundle:Default:doadorindex.html.twig', array('logged'=>'notlogged'));  
        }
    }
    
    public function facebookregAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $session = $this->getRequest()->getSession();
            if($session->has('login'))
            {
                $session->remove('login');
            }
            if($session->has('fb_plach'))
            {
                $session->remove('fb_plach');
            }
            $username = $request->get('id');
            $fbp = new FBplach();
            $fbp->setId($username);
            $session->set('fb_plach',$fbp);
            return $this->redirectToRoute('login_doador_register');
        }
        else
        {
            return $this->redirectToRoute('login_doador_homepage');
        }
    }
    
    public function errorloginAction()
    {
        return $this->render('loginBundle:Default:doadorloginuser.html.twig', array('name2' => 'Login Error'));
    }
    
    public function loginfacebookAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $session = $this->getRequest()->getSession();
            if($session->has('login'))
            {
                $session->remove('login');
            }
            $username = $request->get('id');
            if($this->assertLogin($username, 1, null))
            {
                $login = new Login();
                $login->setUsername($username);
                $mode = 1;
                $login->setMode($mode);
                $session->set('login',$login);
                if($session->has('fb_plach'))
                {
                    return $this->redirectToRoute('login_doador_confirmarpresenca', array('iddoevento'=>$session->get('id_plach')->getId()));
                }
                else
                {
                    return $this->redirectToRoute('login_doador_homepage');
                }
            }
            else
            {
                return $this->redirectToRoute('login_doador_errorlogin');
            }
        }
    }
    
    public function loginAction(Request $request)
    {
        if(!($this->isLogged())) // se nao esta logado
        {
            $session=$this->getRequest()->getSession();
            if($request->getMethod()=='POST')
            {
                if($session->has('login'))
                {
                    $session->remove('login');
                }
                $user = $this->assertLogin($request->get('username'),0,md5($request->get('password')));
                if($user)
                {
                    $login = new Login();
                    $login->setUsername($user->getUsername());
                    $mode = 0;
                    $login->setMode($mode);
                    $session->set('login',$login);
                    return $this->redirectToRoute('login_doador_homepage');
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
        else
        {
            return $this->redirectToRoute('login_doador_homepage');
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
        $estado=$request->get('estado');
        $idfacebook=$request->get('idfacebook');
        $error = 0;
        $array = array();
        $array['fbid']=$idfacebook;
        if(!$this->assertForm($username, 'username'))
        {
            $error=1;
            $array['error1']='true';
        }
        if(!$this->assertForm($idfacebook, 'idfacebook'))
        {
            $error=1;
            $array['error2']='true';
        }
        if(!$error)
        {
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
            $doador->setEstado($estado);
            $doador->setIdfacebook($idfacebook);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($doador);
            $em->flush();
            return $this->render('loginBundle:Default:doadorregsucess.html.twig');  
        }
        else
        {
            return $this->render('loginBundle:Default:formdoador.html.twig', $array);
        } 
    }
    
    public function doadorregAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            return $this->saveDoador($request);
        }
        else
        {
            if($request->getSession()->has('fb_plach'))
            {
                $array = array();
                $array['fbid'] = $request->getSession()->get('fb_plach')->getId();
                return $this->render('loginBundle:Default:formdoador.html.twig', $array);
            }
            else
            {
                return $this->render('loginBundle:Default:formdoador.html.twig');
            }
        }
    }
    
    public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has('login'))
        {
            $session->remove('login');
        }
        return $this->redirectToRoute('login_doador_homepage');        
    }
    
    public function clearAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has('fb_plach'))
        {
            $session->remove('fb_plach');
        }
        return $this->redirectToRoute('login_doador_register');        
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
        $mode = $login->getMode();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('loginBundle:Doador'); 
        if($mode==0)
        {
            return $repository->findOneBy(array('username'=>$username)); 
        }
        else
        {
            return $repository->findOneBy(array('idfacebook'=>$username)); 
        }
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
    
    public function assertLogin($id, $mode, $password)
    {
        if($mode==0)
        {
            return $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Doador')->findOnebY(array('username'=>$id,'password'=>$password));
        }
        else
        {
            return $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Doador')->findOnebY(array('idfacebook'=>$id));
        }
    }
    
    public function assertPresenca($iddoador, $idevento)
    {
        $presenca = $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Presenca')->findOnebY(array('iddoador'=>$iddoador,'idevento'=>$idevento));
        if($presenca)
        {
            return false;
        }
        else
        {
            return true; // BD livre
        }
    }
    
    public function assertForm($name, $formname)
    {
        $doador = $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Doador')->findOnebY(array($formname=>$name));
        if($doador)
        {
            return false;
        }
        else
        {
            return true; // BD livre
        }
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
                    $iddoador=$this->getUserOnline()->getID();
                    if($this->assertPresenca($iddoador, $id))
                    {
                        $this->savePresenca($iddoador,$id);
                    }
                    return $this->render('loginBundle:Default:confirmarpresenca.html.twig', 
                            array('id'=> $id,'datafim'=> $evento->getDatafim()->format('m-d'),
                                'datainicio'=> $evento->getDatainicio()->format('m-d'),
                                'horafim'=> $evento->getHorafim()->format('H:i:s'),
                                'horainicio'=> $evento->getHorainicio()->format('H:i:s'),
                                'numero'=> $evento->getNumero(),
                                'bairro'=> $evento->getBairro(),
                                'rua'=> $evento->getRua(),
                                'nome'=> $evento->getNome(),
                                'descricao' => $evento->getDescricao(),
                                'presente' => 'presente'));   
                }
                else
                {
                    $iddoador=$this->getUserOnline()->getID();
                    if($this->assertPresenca($iddoador, $id))
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
                                    'descricao' => $evento->getDescricao(),
                                    'presente' => 'presente'));   
                    }
                     
                }
            }
            else
            {
                return $this->redirectToRoute('login_doador_notfound');
            }  
        }
        else
        {
            if($iddoevento)
            {
                $session = $this->getRequest()->getSession();
                if($session->has('id_plach'))
                {
                    $session->remove('id_plach');
                }
                $idp = new IDplach();
                $idp->setId($iddoevento);
                $session->set('id_plach',$idp);
                return $this->redirectToRoute('login_doador_login');
            }
            else
            {
                return $this->redirectToRoute('login_doador_notfound');
            }
        }
    }
    public function notfoundAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:doadorpagina404.html.twig', array('logged'=>'logged'));  
        }
        else
        {
            return $this->render('loginBundle:Default:doadorpagina404.html.twig', array('logged'=>'notlogged'));  
        } 
    }
    
    public function profileAction()
    {
        if($this->isLogged())
        {
            $login = $this->getRequest()->getSession()->get('login');
            $id=$login->getUsername();
            $mode=$login->getMode();
            $doador=$this->assertLogin($id,$mode,null);
            $nome=$doador->getNome();
            $cidade=$doador->getCidade();
            $rh=$doador->getRhsangue();
            $tiposangue=$doador->getTiposangue();
            return $this->render('loginBundle:Default:profiledoador.html.twig', array('nome'=>$nome,'cidade'=>$cidade,'rhsangue'=>$rh,'tiposangue'=>$tiposangue));
        }
        else
        {
            return $this->redirectToRoute('login_doador_homepage');
        }
    }
    
    public function welcomeAction()
    {
        if($this->isLogged())
        {
            return $this->redirectToRoute('login_doador_homepage');
        }
        else
        {
            return $this->redirectToRoute('login_doador_homepage');
        }
    }
    
    public function thanksAction()
    {
        return $this->render('loginBundle:Default:obrigado.html.twig');   
    }
    public function aboutAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:doadorabout.html.twig', array('logged'=>'logged'));  
        }
        else
        {
            return $this->render('loginBundle:Default:doadorabout.html.twig', array('logged'=>'notlogged'));  
        }
    }
}

