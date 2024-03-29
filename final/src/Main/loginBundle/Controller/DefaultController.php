<?php

namespace Main\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Main\loginBundle\Entity\Entidade;
//use Main\loginBundle\Entity\Doador;
use Main\loginBundle\Entity\Evento;
use Main\loginBundle\Modals\Login;
use Main\loginBundle\Modals\FBplach;
//use Main\loginBundle\Entity\Presenca;
use Main\loginBundle\Entity\Eventocred;

class DefaultController extends Controller
{
    public function loginfacebookAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $session = $this->getRequest()->getSession();
            $session->clear();
            $username = $request->get('id');
            if($this->assertLogin($username, 1, null))
            {
                $login = new Login();
                $login->setUsername($username);
                $mode = 1;
                $login->setMode($mode);
                $session->set('login_entidade',$login);
                return $this->redirectToRoute('login_homepage');
            }
            else
            {
                return $this->redirectToRoute('login_errorlogin');
            }
        }
    }
    
    public function assertForm($name, $formname, $type)
    {
        $doador = $this->getDoctrine()->getEntityManager()->getRepository($type)->findOnebY(array($formname=>$name));
        if($doador)
        {
            return false;
        }
        else
        {
            return true; // BD livre
        }
    }
    
    public function errorloginAction()
    {
        return $this->render('loginBundle:Default:loginuser.html.twig', array('name2' => 'Login Error'));
    }
    
    public function facebookregAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $session = $this->getRequest()->getSession();
            $session->clear();
            $username = $request->get('id');
            $fbp = new FBplach();
            $fbp->setId($username);
            $session->set('fb_plach',$fbp);
            return $this->redirectToRoute('login_entidadereg');
        }
        else
        {
            return $this->redirectToRoute('login_homepage');
        }
    }
    
    public function eventoeditAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $em = $this->getDoctrine()->getEntityManager();
            $id = $request->get('id');
            $evento=$em->getRepository('loginBundle:Evento')->findOneBy(array('id'=>$id));
            if($evento)
            {
                return $this->render('loginBundle:Default:formevento.html.twig', array('logged'=>'logged', 'evento'=>$evento));
            }
        }
        return $this->redirectToRoute('login_eventolista');
    }
    
    public function eventodestroyAction(Request $request)
    {
        if($request->getMethod()=='POST')
        {
            $em = $this->getDoctrine()->getEntityManager();
            $id = $request->get('id');
            $evento=$em->getRepository('loginBundle:Evento')->findOneBy(array('id'=>$id));
            $em->remove($evento);
            $em->flush();
            $eventocreds=$em->getRepository('loginBundle:Eventocred')->findBy(array('idevento'=>$id));
            foreach ($eventocreds as $row) {
                $em->remove($row);
                $em->flush();
            }
            return $this->redirectToRoute('login_eventolista');
        }
        return $this->redirectToRoute('login_eventolista');
    }
    
    public function indexAction(Request $request)
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:index.html.twig', array('logged' => 'logged'));
        }
        else
        {
            return $this->render('loginBundle:Default:index.html.twig', array('logged' => 'notlogged'));
        }
    }
    
    public function assertLogin($id, $mode, $password)
    {
        if($mode==0)
        {
            return $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Entidade')->findOnebY(array('email'=>$id,'password'=>$password));
        }
        else
        {
            return $this->getDoctrine()->getEntityManager()->getRepository('loginBundle:Entidade')->findOnebY(array('idfacebook'=>$id));
        }
    }
    
    public function profileAction()
    {
        if($this->isLogged())
        {
            $entidade=$this->getEntidade();
            $nome=$entidade->getNome();
            $cidade=$entidade->getCidade();
            $descricao=$entidade->getDescricao();
            $email=$entidade->getEmail();
            return $this->render('loginBundle:Default:profileentidade.html.twig', array('nome'=>$nome,'cidade'=>$cidade,'email'=>$email,'descricao'=>$descricao));
        }
        else
        {
            return $this->redirectToRoute('login_homepage');
        }
    }
    
    public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        return $this->redirectToRoute('login_homepage');        
    }
    
    public function clearAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        return $this->redirectToRoute('login_entidadereg');        
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
    
    public function bdhandlingPresenca($presenca)
    {
        $arraytotal = array();
        foreach ($presenca as $row) {
            $iddoador=$row->getIddoador();
            $em = $this->getDoctrine()->getEntityManager();
            $eventos = $em->getRepository('loginBundle:Doador');
            $arraytotal[] = $eventos->findOneBy(array('id'=>$iddoador));
        }
        return $arraytotal;
    }
    
   
    
    public function getUserusername()
    {
        $session=$this->getRequest()->getSession();
        $login = $session->get('login_entidade');
        $username = $login->getUsername();
        return $username;
    }
    
    public function getEntidade()
    {
        $session=$this->getRequest()->getSession();
        $login = $session->get('login_entidade');
        $username = $login->getUsername();
        $mode = $login->getMode();
        $em = $this->getDoctrine()->getEntityManager();
        $entidades = $em->getRepository('loginBundle:Entidade');
        if($mode==0)
        {
            $entidade = $entidades->findOneBy(array('email'=>$username));
        }
        else
        {
            $entidade = $entidades->findOneBy(array('idfacebook'=>$username));
        }
        return $entidade;
    }
    
    public function eventolistaAction()
    {
        if($this->isLogged()) // if isLogged praticamente
        {
            $entidade = $this->getEntidade();
            $em = $this->getDoctrine()->getEntityManager();
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
                $usr = $this->assertLogin($email, 0, $password);
                if($usr) // o usuario esta no BD
                {
                    $login = new Login();
                    $mode = 0;
                    $login->setMode($mode);
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
    
    public function saveEntidade(Request $request)
    {
        $entidade = new Entidade();
        $cidade=$request->get('cidade');
        $estado=$request->get('estado');
        $username=$request->get('username');
        $password=md5($request->get('password'));
        //$cnpj=$request->get('cnpj');    
        $email=$request->get('email');    
        $descricao=$request->get('descricao'); 
        $idfacebook=$request->get('idfacebook'); 
        $estado=$request->get('estado');
        $array = array();
        $array['fbid']=$request->getSession()->get('fb_plach')->getId();
        $error=0;
        if(!$this->assertForm($username, 'nome', 'loginBundle:Entidade'))
        {
            $error=1;
            $array['error2']='true';
        }
        if(!$this->assertForm($idfacebook, 'idfacebook', 'loginBundle:Entidade'))
        {
            $error=1;
            $array['error1']='true';
        }
        if(!$this->assertForm($email, 'email', 'loginBundle:Entidade'))
        {
            $error=1;
            $array['error3']='true';
        }
        if(!$error)
        {
            $entidade->setPassword($password);
            $entidade->setCidade($cidade);
            $entidade->setEstado($estado);
            $entidade->setNome($username);
            $entidade->setEmail($email);
            $entidade->setIdfacebook($idfacebook);
            $entidade->setEstado($estado);
            $entidade->setCnpj('aleatorio');
            $entidade->setDescricao($descricao);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entidade);
            $em->flush();
            $request->getSession()->clear();
            return $this->render('loginBundle:Default:regsucess.html.twig');  
        }
        else
        {
            return $this->render('loginBundle:Default:formentidade.html.twig', $array);
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
                return $this->saveEntidade($request);
            }
            else
            {
                if($request->getSession()->has('fb_plach'))
                {
                    return $this->render('loginBundle:Default:formentidade.html.twig', array('fbid'=>$request->getSession()->get('fb_plach')->getId()));
                }
                else
                {
                    return $this->render('loginBundle:Default:formentidade.html.twig');
                }
                
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
    
    public function saveEvento(Request $request)
    {
        $cidade=$request->get('cidade');
        $nome=$request->get('nome');
        $rua=$request->get('rua');    
        $bairro=$request->get('bairro');    
        $numero=$request->get('numero');  
        $estado=$request->get('estado');  
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
        $edit = $request->get('edit');
        $em = $this->getDoctrine()->getEntityManager();
        if($edit==-1)
        {
            if($this->assertForm($nome,'nome','loginBundle:Evento'))
            {
                $evento = new Evento();
                $evento->setNome($nome);
                $evento->setCidade($cidade);
                $evento->setEstado($estado);
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
                $evento->setEstado($estado);
                $em->persist($evento);     
            }
            else
            {
                return $this->render('loginBundle:Default:formevento.html.twig', array('logged'=>'logged','evento'=>null, 'error1'=>'true'));
            }
        }
        else
        {
            $editid = $request->get('evid');
            $evento = $em->getRepository('loginBundle:Evento')->findOneBy(array('id'=>$editid));
            if($this->assertForm($nome,'nome','loginBundle:Evento'))
            { // mudou pra um nome novo
                $evento->setNome($nome);
                $evento->setCidade($cidade);
                $evento->setEstado($estado);
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
            }
            else
            {
                if($nome == $evento->getNome())
                {  // nao mudou o nome
                    $evento->setNome($nome);
                    $evento->setCidade($cidade);
                    $evento->setEstado($estado);
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
                }
                else
                {
                    return $this->render('loginBundle:Default:formevento.html.twig', array('logged'=>'logged','evento'=>$evento, 'error2'=>'true'));
                }
            }
        } 
        $em->flush();
        $this->saveEventocred($request); 
        return $this->render('loginBundle:Default:evenregsucess.html.twig');
    }
    
    public function saveEventocred(Request $request)
    {
        $edit = $request->get('edit');
        if($edit==-1)
        {
            $entidade = $this->getEntidade();
            $identidade=$entidade->getId(); // pega no BD o ID da entidade

            $em = $this->getDoctrine()->getEntityManager();
            $repositoryEve = $em->getRepository('loginBundle:Evento'); 
            $linkfacebook=$request->get('linkfacebook');
            $evento = $repositoryEve->findOneBy(array('linkfacebook'=>$linkfacebook)); 
            $idevento=$evento->getId(); // pega no BD o ID do evento

            $eventocredentials = new Eventocred();
            $eventocredentials->setIdentidade($identidade);
            $eventocredentials->setIdevento($idevento);
            $em->persist($eventocredentials);
            $em->flush(); // salva no BD a relação
        }
    }
    public function eventoregAction(Request $request)
    {
        if($this->isLogged())
        {
            if($request->getMethod()=='POST')
            {
                return $this->saveEvento($request); 
            }
            return $this->render('loginBundle:Default:formevento.html.twig', array('logged'=>'logged','evento'=>null));
        }
        else
        {
            return $this->redirectToRoute('login_homepage');
        }
    }
    
    public function eventoAction($iddoevento)
    {
        if($this->isLogged())
        {
            $entidade=$this->getEntidade();
            $id=$entidade->getId();
            $em = $this->getDoctrine()->getEntityManager();
            $repositoryCred = $em->getRepository('loginBundle:Eventocred'); 
            $eventocred = $repositoryCred->findOneBy(array('idevento'=>$iddoevento,'identidade'=>$id)); 
            if($eventocred)
            {
                $repositoryEve = $em->getRepository('loginBundle:Evento'); 
                $evento = $repositoryEve->findOneBy(array('id'=>$iddoevento)); 

                return $this->render('loginBundle:Default:visualizarevento.html.twig', 
                            array('id'=> $id,'datafim'=> $evento->getDatafim()->format('m-d-y'),
                                'datainicio'=> $evento->getDatainicio()->format('m-d-y'),
                                'horafim'=> $evento->getHorafim()->format('H:i'),
                                'horainicio'=> $evento->getHorainicio()->format('H:i'),
                                'numero'=> $evento->getNumero(),
                                'bairro'=> $evento->getBairro(),
                                'rua'=> $evento->getRua(),
                                'cidade'=> $evento->getCidade(),
                                'complemento'=> $evento->getComplemento(),
                                'nome'=> $evento->getNome(),
                                'descricao' => $evento->getDescricao()));
            }
            else
            {
                return $this->redirectToRoute('login_notfound');
            }
              
        }
        else
        {
            return $this->redirectToRoute('login_homepage');
        }
         
    }
    
    public function notfoundAction()
    {
        if($this->isLogged())
        {
            return $this->render('loginBundle:Default:pagina404.html.twig', array('logged'=>'logged'));  
        }
        else
        {
            return $this->render('loginBundle:Default:pagina404.html.twig', array('logged'=>'notlogged'));  
        }
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

