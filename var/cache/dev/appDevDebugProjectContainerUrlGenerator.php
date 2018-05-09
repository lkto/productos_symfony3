<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ember_nombre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\DefaultController::nombreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nombre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ember_default_redireccion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\DefaultController::redireccionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redireccion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::AllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_productos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::EditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_productos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_productos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_productos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eliminar_productos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\EventosController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_categoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::AllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_categoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_categoria' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::EditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_categoria' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_categoria' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_categoria' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eliminar_categoria' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\categoriaController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_marca' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::AllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/marca',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_marca' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/marca/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_marca' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::EditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/marca/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_marca' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/marca/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_marca' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/marca/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_marca' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/marca/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eliminar_marca' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EmberBundle\\Controller\\marcaController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/marca/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_nombre' => array (  0 =>   array (    0 => 'nPila',  ),  1 =>   array (    '_controller' => 'PruebaBundle\\Controller\\DefaultController::nombreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nPila',    ),    1 =>     array (      0 => 'text',      1 => '/prueba/nombre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
