<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // cliente
            if (rtrim($pathinfo, '/') === '/cliente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cliente');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
            }
            not_cliente:

            // cliente_create
            if ($pathinfo === '/cliente/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cliente_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
            }
            not_cliente_create:

            // cliente_new
            if ($pathinfo === '/cliente/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
            }
            not_cliente_new:

            // cliente_show
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::showAction',));
            }
            not_cliente_show:

            // cliente_edit
            if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cliente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::editAction',));
            }
            not_cliente_edit:

            // cliente_update
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::updateAction',));
            }
            not_cliente_update:

            // cliente_delete
            if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\ClienteController::deleteAction',));
            }
            not_cliente_delete:

        }

        // casamunoz_empresa_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'casamunoz_empresa_default_index')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/departamento')) {
            // departamento
            if (rtrim($pathinfo, '/') === '/departamento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departamento');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
            }
            not_departamento:

            // departamento_create
            if ($pathinfo === '/departamento/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_departamento_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::createAction',  '_route' => 'departamento_create',);
            }
            not_departamento_create:

            // departamento_new
            if ($pathinfo === '/departamento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
            }
            not_departamento_new:

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::showAction',));
            }
            not_departamento_show:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_departamento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::editAction',));
            }
            not_departamento_edit:

            // departamento_update
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_departamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::updateAction',));
            }
            not_departamento_update:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_departamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\DepartamentoController::deleteAction',));
            }
            not_departamento_delete:

        }

        if (0 === strpos($pathinfo, '/empleado')) {
            // empleado
            if (rtrim($pathinfo, '/') === '/empleado') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empleado');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'empleado',);
            }
            not_empleado:

            // empleado_create
            if ($pathinfo === '/empleado/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empleado_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::createAction',  '_route' => 'empleado_create',);
            }
            not_empleado_create:

            // empleado_new
            if ($pathinfo === '/empleado/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'empleado_new',);
            }
            not_empleado_new:

            // empleado_show
            if (preg_match('#^/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::showAction',));
            }
            not_empleado_show:

            // empleado_edit
            if (preg_match('#^/empleado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empleado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::editAction',));
            }
            not_empleado_edit:

            // empleado_update
            if (preg_match('#^/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_empleado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::updateAction',));
            }
            not_empleado_update:

            // empleado_delete
            if (preg_match('#^/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_empleado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\EmpleadoController::deleteAction',));
            }
            not_empleado_delete:

        }

        if (0 === strpos($pathinfo, '/municipio')) {
            // municipio
            if (rtrim($pathinfo, '/') === '/municipio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'municipio');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::indexAction',  '_route' => 'municipio',);
            }
            not_municipio:

            // municipio_create
            if ($pathinfo === '/municipio/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_municipio_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::createAction',  '_route' => 'municipio_create',);
            }
            not_municipio_create:

            // municipio_new
            if ($pathinfo === '/municipio/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::newAction',  '_route' => 'municipio_new',);
            }
            not_municipio_new:

            // municipio_show
            if (preg_match('#^/municipio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::showAction',));
            }
            not_municipio_show:

            // municipio_edit
            if (preg_match('#^/municipio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::editAction',));
            }
            not_municipio_edit:

            // municipio_update
            if (preg_match('#^/municipio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_municipio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::updateAction',));
            }
            not_municipio_update:

            // municipio_delete
            if (preg_match('#^/municipio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_municipio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\MunicipioController::deleteAction',));
            }
            not_municipio_delete:

        }

        if (0 === strpos($pathinfo, '/persona')) {
            // persona
            if (rtrim($pathinfo, '/') === '/persona') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_persona;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'persona');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::indexAction',  '_route' => 'persona',);
            }
            not_persona:

            // persona_create
            if ($pathinfo === '/persona/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_persona_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::createAction',  '_route' => 'persona_create',);
            }
            not_persona_create:

            // persona_new
            if ($pathinfo === '/persona/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_persona_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::newAction',  '_route' => 'persona_new',);
            }
            not_persona_new:

            // persona_show
            if (preg_match('#^/persona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_persona_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::showAction',));
            }
            not_persona_show:

            // persona_edit
            if (preg_match('#^/persona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_persona_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::editAction',));
            }
            not_persona_edit:

            // persona_update
            if (preg_match('#^/persona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_persona_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::updateAction',));
            }
            not_persona_update:

            // persona_delete
            if (preg_match('#^/persona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_persona_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\PersonaController::deleteAction',));
            }
            not_persona_delete:

        }

        if (0 === strpos($pathinfo, '/sucursal')) {
            // sucursal
            if (rtrim($pathinfo, '/') === '/sucursal') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sucursal;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sucursal');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::indexAction',  '_route' => 'sucursal',);
            }
            not_sucursal:

            // sucursal_create
            if ($pathinfo === '/sucursal/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sucursal_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::createAction',  '_route' => 'sucursal_create',);
            }
            not_sucursal_create:

            // sucursal_new
            if ($pathinfo === '/sucursal/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sucursal_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::newAction',  '_route' => 'sucursal_new',);
            }
            not_sucursal_new:

            // sucursal_show
            if (preg_match('#^/sucursal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sucursal_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::showAction',));
            }
            not_sucursal_show:

            // sucursal_edit
            if (preg_match('#^/sucursal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sucursal_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::editAction',));
            }
            not_sucursal_edit:

            // sucursal_update
            if (preg_match('#^/sucursal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_sucursal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::updateAction',));
            }
            not_sucursal_update:

            // sucursal_delete
            if (preg_match('#^/sucursal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_sucursal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\SucursalController::deleteAction',));
            }
            not_sucursal_delete:

        }

        if (0 === strpos($pathinfo, '/tipo')) {
            // tipo
            if (rtrim($pathinfo, '/') === '/tipo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipo');
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::indexAction',  '_route' => 'tipo',);
            }
            not_tipo:

            // tipo_create
            if ($pathinfo === '/tipo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipo_create;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::createAction',  '_route' => 'tipo_create',);
            }
            not_tipo_create:

            // tipo_new
            if ($pathinfo === '/tipo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_new;
                }

                return array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::newAction',  '_route' => 'tipo_new',);
            }
            not_tipo_new:

            // tipo_show
            if (preg_match('#^/tipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_show')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::showAction',));
            }
            not_tipo_show:

            // tipo_edit
            if (preg_match('#^/tipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_edit')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::editAction',));
            }
            not_tipo_edit:

            // tipo_update
            if (preg_match('#^/tipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_tipo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_update')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::updateAction',));
            }
            not_tipo_update:

            // tipo_delete
            if (preg_match('#^/tipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_delete')), array (  '_controller' => 'casamunoz\\empresaBundle\\Controller\\TipoController::deleteAction',));
            }
            not_tipo_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
