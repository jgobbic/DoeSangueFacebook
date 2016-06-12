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

class DefaultController extends Controller
{
    public function indexAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:index.html.twig', array('logged'=>'logged'));
        }
        else
        {
            return $this->render('loginBundle:Default:index.html.twig', array('logged'=>'notloggged'));
        }
    }
    
    public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        return $this->redirectToRoute('login_homepage');        
    }
    
    public function bdhandling($eventocreds)
    {
        $arraytotal = array();
        foreach ($eventocreds as $row) {
            $eventoid=$row->getIdevento();
            $em = $this->getDoctrine()->getEntityManager();
            $eventos = $em->getRepository('loginBundle:Evento');
            $arraytotal[] = $eventos->findOneBy(array('id'=>$eventoid));
        }
        return $arraytotal;
    }
    
    public function eventolistaAction()
    {
        $session=$this->getRequest()->getSession();
        if($session->has('login_entidade')) // if isLogged praticamente
        {
            $login = $session->get('login_entidade');
            $email = $login->getUsername();
            $password = $login->getPassword();
            $em = $this->getDoctrine()->getEntityManager();
            $entidades = $em->getRepository('loginBundle:Entidade');
            $entidade = $entidades->findOneBy(array('email'=>$email,'password'=>$password));
            $id=$entidade->getID();
            $eventocredss = $em->getRepository('loginBundle:Eventocred');
            $eventocreds = $eventocredss->findBy(array('identidade'=>$id));
            if($eventocreds) // se a entidade possui eventos
            {    
                $arr = $this->bdhandling($eventocreds);
            }
            else
            { 
                $arr=array();
            }
            return $this->render('loginBundle:Default:listaevento.html.twig', array('logged' => 'logged', 'eventos' => $arr) );
        }
        else
        {
            return $this->redirectToRoute('login_login'); // seguir
        }   
    }
    
    public function loginAction(Request $request)
    {
        if(!($this->isLogged())) // se nao esta logado
        {
            $session=$this->getRequest()->getSession();
            if($request->getMethod()=='POST')
            {
                $session->clear();
                $email=$request->get('email');
                $password=md5($request->get('password'));
                $em = $this->getDoctrine()->getEntityManager();
                $repository = $em->getRepository('loginBundle:Entidade'); 
                $usr = $repository->findOneBy(array('email'=>$email,'password'=>$password));
                if($usr) // o usuario esta no BD
                {
                    $login = new Login();
                    $login->setPassword($password);
                    $login->setUsername($email);
                    $session->set('login_entidade',$login);
                    return $this->redirectToRoute('login_homepage');
                }
                else
                {
                    return $this->render('loginBundle:Default:loginuser.html.twig', array('name' => 'Login Error'));
                }
            }
            else // cara n deu post e n esta logado
            {
                return $this->render('loginBundle:Default:loginuser.html.twig');
            }
        }
        else
        {
            return $this->redirectToRoute('login_homepage'); // cara ja ta logado e esta tentando logar, wtf?
        }
    }
    
    public function entidaderegAction(Request $request)
    {
        if($this->isLogged())
        {
            return $this->redirectToRoute('login_homepage'); // cara ja ta logado e esta tentando registrar
        }
        else
        {
            if($request->getMethod()=='POST')
            {
                $entidade = new Entidade();
                $cidade=$request->get('cidade');
                $username=$request->get('username');
                $password=md5($request->get('password'));
                $cnpj=$request->get('cnpj');    
                $email=$request->get('email');    
                $descricao=$request->get('descricao'); 

                $entidade->setPassword($password);
                $entidade->setCidade($cidade);
                $entidade->setNome($username);
                $entidade->setEmail($email);
                $entidade->setIdfacebook("umidqualquer2");
                $entidade->setLinkfacebook("umlinkqualquer2");
                $entidade->setCnpj($cnpj);
                $entidade->setDescricao($descricao);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($entidade);
                $em->flush();
                return $this->redirectToRoute('login_login');
            }
            else
            {
                return $this->render('loginBundle:Default:formentidade.html.twig');
            }
            
        } 
    }
    
    public function isLogged()
    {
        $session=$this->getRequest()->getSession();
        if($session->has('login_entidade'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function eventoregAction(Request $request)
    {
        if($this->isLogged())
        {
            if($request->getMethod()=='POST')
            {
                $evento = new Evento();
                $cidade=$request->get('cidade');
                $nome=$request->get('nome');
                $rua=$request->get('rua');    
                $bairro=$request->get('bairro');    
                $numero=$request->get('numero');    
                $complemento=$request->get('complemento');    
                $descricao=$request->get('descricao');   
                $linkfacebook=$request->get('linkfacebook');
                $horainicio=$request->get('horainicio');    
                $horafim=$request->get('horafim');    
                $datainicio=$request->get('datainicio');   
                $datafim=$request->get('datafim');
                $datafim2 = new \DateTime($datafim);
                $datainicio2 = new \DateTime($datainicio);
                $horafim2 = new \DateTime($horafim);
                $horainicio2 = new \DateTime($horainicio);

                $evento->setNome($nome);
                $evento->setCidade($cidade);
                $evento->setRua($rua);
                $evento->setBairro($bairro);
                $evento->setNumero($numero);
                $evento->setComplemento($complemento);
                $evento->setDescricao($descricao);
                $evento->setLinkfacebook($linkfacebook);
                $evento->setDatainicio($datainicio2);
                $evento->setHorafim($horafim2);
                $evento->setHorainicio($horainicio2);
                $evento->setDatafim($datafim2);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($evento);
                $em->flush(); // salva no BD

                $session=$this->getRequest()->getSession();
                $login = $session->get('login_entidade');
                $email = $login->getUsername();
                $em = $this->getDoctrine()->getEntityManager();
                $repositoryEnt = $em->getRepository('loginBundle:Entidade'); 
                $entidadeC = $repositoryEnt->findOneBy(array('email'=>$email)); 
                $identidade=$entidadeC->getId(); // pega no BD o ID da entidade

                $repositoryEnt = $em->getRepository('loginBundle:Evento'); 
                $eventoC = $repositoryEnt->findOneBy(array('linkfacebook'=>$linkfacebook)); 
                $idevento=$eventoC->getId(); // pega no BD o ID do evento

                $eventocredentials = new Eventocred();
                $eventocredentials->setIdentidade($identidade);
                $eventocredentials->setIdevento($idevento);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($eventocredentials);
                $em->flush(); // salva no BD a relação

                return $this->redirectToRoute('login_homepage');
                
            }
            return $this->render('loginBundle:Default:formevento.html.twig', array('logged'=>'logged'));
        }
        else
        {
            return $this->redirectToRoute('login_homepage');
        }
    }
    
    public function eventoAction()
    {
        return $this->render('loginBundle:Default:index.html.twig'); // nao esta pronto
    }
     
    public function aboutAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:about.html.twig', array('logged'=>'logged'));  
        }
        else
        {
            return $this->render('loginBundle:Default:about.html.twig', array('logged'=>'notlogged'));  
        }
        
    }
}

