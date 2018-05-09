<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ember_nombre
        if ($pathinfo === '/nombre') {
            return array (  '_controller' => 'EmberBundle\\Controller\\DefaultController::nombreAction',  '_route' => 'ember_nombre',);
        }

        // ember_default_redireccion
        if ($pathinfo === '/redireccion') {
            return array (  '_controller' => 'EmberBundle\\Controller\\DefaultController::redireccionAction',  '_route' => 'ember_default_redireccion',);
        }

        // all_productos
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'all_productos');
            }

            return array (  '_controller' => 'EmberBundle\\Controller\\EventosController::AllAction',  '_route' => 'all_productos',);
        }

        // new_productos
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'EmberBundle\\Controller\\EventosController::newAction',  '_route' => 'new_productos',);
        }

        // edit_productos
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_productos')), array (  '_controller' => 'EmberBundle\\Controller\\EventosController::EditAction',));
        }

        // update_productos
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_productos')), array (  '_controller' => 'EmberBundle\\Controller\\EventosController::UpdateAction',));
        }

        // show_productos
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_productos')), array (  '_controller' => 'EmberBundle\\Controller\\EventosController::showAction',));
        }

        // delete_productos
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_productos')), array (  '_controller' => 'EmberBundle\\Controller\\EventosController::deleteAction',));
        }

        // eliminar_productos
        if (0 === strpos($pathinfo, '/eliminar') && preg_match('#^/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_productos')), array (  '_controller' => 'EmberBundle\\Controller\\EventosController::eliminarAction',));
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // all_categoria
            if ($pathinfo === '/categoria') {
                return array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::AllAction',  '_route' => 'all_categoria',);
            }

            // new_categoria
            if ($pathinfo === '/categoria/new') {
                return array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::newAction',  '_route' => 'new_categoria',);
            }

            // edit_categoria
            if (0 === strpos($pathinfo, '/categoria/edit') && preg_match('#^/categoria/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_categoria')), array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::EditAction',));
            }

            // update_categoria
            if (0 === strpos($pathinfo, '/categoria/update') && preg_match('#^/categoria/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_categoria')), array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::UpdateAction',));
            }

            // show_categoria
            if (0 === strpos($pathinfo, '/categoria/show') && preg_match('#^/categoria/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_categoria')), array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::showAction',));
            }

            // delete_categoria
            if (0 === strpos($pathinfo, '/categoria/delete') && preg_match('#^/categoria/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_categoria')), array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::deleteAction',));
            }

            // eliminar_categoria
            if (0 === strpos($pathinfo, '/categoria/eliminar') && preg_match('#^/categoria/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_categoria')), array (  '_controller' => 'EmberBundle\\Controller\\categoriaController::eliminarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/marca')) {
            // all_marca
            if ($pathinfo === '/marca') {
                return array (  '_controller' => 'EmberBundle\\Controller\\marcaController::AllAction',  '_route' => 'all_marca',);
            }

            // new_marca
            if ($pathinfo === '/marca/new') {
                return array (  '_controller' => 'EmberBundle\\Controller\\marcaController::newAction',  '_route' => 'new_marca',);
            }

            // edit_marca
            if (0 === strpos($pathinfo, '/marca/edit') && preg_match('#^/marca/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_marca')), array (  '_controller' => 'EmberBundle\\Controller\\marcaController::EditAction',));
            }

            // update_marca
            if (0 === strpos($pathinfo, '/marca/update') && preg_match('#^/marca/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_marca')), array (  '_controller' => 'EmberBundle\\Controller\\marcaController::UpdateAction',));
            }

            // show_marca
            if (0 === strpos($pathinfo, '/marca/show') && preg_match('#^/marca/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_marca')), array (  '_controller' => 'EmberBundle\\Controller\\marcaController::showAction',));
            }

            // delete_marca
            if (0 === strpos($pathinfo, '/marca/delete') && preg_match('#^/marca/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_marca')), array (  '_controller' => 'EmberBundle\\Controller\\marcaController::deleteAction',));
            }

            // eliminar_marca
            if (0 === strpos($pathinfo, '/marca/eliminar') && preg_match('#^/marca/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminar_marca')), array (  '_controller' => 'EmberBundle\\Controller\\marcaController::eliminarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/prueba')) {
            // prueba_homepage
            if (rtrim($pathinfo, '/') === '/prueba') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prueba_homepage');
                }

                return array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'prueba_homepage',);
            }

            // prueba_nombre
            if (0 === strpos($pathinfo, '/prueba/nombre') && preg_match('#^/prueba/nombre/(?P<nPila>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_nombre')), array (  '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
