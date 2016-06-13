<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // login_homepage
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_homepage');
            }

            return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_homepage',);
        }

        // login_about
        if (rtrim($pathinfo, '/') === '/about') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_about');
            }

            return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'login_about',);
        }

        // login_login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_login');
            }

            return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login_login',);
        }

        if (0 === strpos($pathinfo, '/register_e')) {
            // login_entidadereg
            if (rtrim($pathinfo, '/') === '/register_entidade') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_entidadereg');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::entidaderegAction',  '_route' => 'login_entidadereg',);
            }

            // login_eventoreg
            if (rtrim($pathinfo, '/') === '/register_evento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_eventoreg');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::eventoregAction',  '_route' => 'login_eventoreg',);
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // login_evento
            if (rtrim($pathinfo, '/') === '/event') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_evento');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::eventoAction',  '_route' => 'login_evento',);
            }

            // login_eventolista
            if (rtrim($pathinfo, '/') === '/evento_lista') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_eventolista');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DefaultController::eventolistaAction',  '_route' => 'login_eventolista',);
            }

        }

        if (0 === strpos($pathinfo, '/doar')) {
            // login_doador_homepage
            if (rtrim($pathinfo, '/') === '/doar/index') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_doador_homepage');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DoadorController::indexAction',  '_route' => 'login_doador_homepage',);
            }

            // login_doador_about
            if (rtrim($pathinfo, '/') === '/doar/about') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_doador_about');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DoadorController::aboutAction',  '_route' => 'login_doador_about',);
            }

            // login_doador_login
            if (rtrim($pathinfo, '/') === '/doar/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_doador_login');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DoadorController::loginAction',  '_route' => 'login_doador_login',);
            }

            // login_doador_confirmarpresenca
            if (0 === strpos($pathinfo, '/doar/confirm') && preg_match('#^/doar/confirm/(?P<iddoevento>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_doador_confirmarpresenca')), array (  '_controller' => 'Main\\loginBundle\\Controller\\DoadorController::confpresAction',));
            }

            // login_doador_register
            if (rtrim($pathinfo, '/') === '/doar/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_doador_register');
                }

                return array (  '_controller' => 'Main\\loginBundle\\Controller\\DoadorController::doadorregAction',  '_route' => 'login_doador_register',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
