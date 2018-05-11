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

        if (0 === strpos($pathinfo, '/brand')) {
            // all_brand
            if ($pathinfo === '/brand') {
                return array (  '_controller' => 'AppBundle\\Controller\\BrandController::AllAction',  '_route' => 'all_brand',);
            }

            // new_brand
            if ($pathinfo === '/brand/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\BrandController::newAction',  '_route' => 'new_brand',);
            }

            // edit_brand
            if (0 === strpos($pathinfo, '/brand/edit') && preg_match('#^/brand/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_brand')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::EditAction',));
            }

            // update_brand
            if (0 === strpos($pathinfo, '/brand/update') && preg_match('#^/brand/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_brand')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::UpdateAction',));
            }

            // show_brand
            if (0 === strpos($pathinfo, '/brand/show') && preg_match('#^/brand/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_brand')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::showAction',));
            }

            if (0 === strpos($pathinfo, '/brand/delete')) {
                // delete_brand
                if (preg_match('#^/brand/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_brand')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::deleteAction',));
                }

                // delete_brand2
                if (0 === strpos($pathinfo, '/brand/delete2') && preg_match('#^/brand/delete2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_brand2')), array (  '_controller' => 'AppBundle\\Controller\\BrandController::eliminarAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // all_category
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::AllAction',  '_route' => 'all_category',);
            }

            // new_category
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'new_category',);
            }

            // edit_category
            if (0 === strpos($pathinfo, '/category/edit') && preg_match('#^/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::EditAction',));
            }

            // update_category
            if (0 === strpos($pathinfo, '/category/update') && preg_match('#^/category/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::UpdateAction',));
            }

            // show_category
            if (0 === strpos($pathinfo, '/category/show') && preg_match('#^/category/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
            }

            if (0 === strpos($pathinfo, '/category/delete')) {
                // delete_category
                if (preg_match('#^/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
                }

                // delete_category2
                if (0 === strpos($pathinfo, '/category/delete2') && preg_match('#^/category/delete2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category2')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::eliminarAction',));
                }

            }

        }

        // all_products
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'all_products');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ProductController::AllAction',  '_route' => 'all_products',);
        }

        // new_products
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProductController::newAction',  '_route' => 'new_products',);
        }

        // show_productos
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_productos')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::showAction',));
        }

        // edit_product
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::EditAction',));
        }

        // update_products
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::UpdateAction',));
        }

        if (0 === strpos($pathinfo, '/delete')) {
            // delete_productos
            if (preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_productos')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::deleteAction',));
            }

            // delete_productos2
            if (0 === strpos($pathinfo, '/delete2') && preg_match('#^/delete2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_productos2')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::eliminarAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
