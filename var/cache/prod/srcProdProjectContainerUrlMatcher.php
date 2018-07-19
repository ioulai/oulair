<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // flight
        if ('/flight' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\FlightController::index',  '_route' => 'flight',);
        }

        // proposer_vol
        if ('/proposer_vol' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\FlightController::proposer_vol',  '_route' => 'proposer_vol',);
        }

        // liste_vols
        if ('/liste_vols' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\FlightController::liste_vols',  '_route' => 'liste_vols',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MainController::home',  '_route' => 'home',);
        }

        // info_legal
        if ('/info_legal' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MainController::info_legal',  '_route' => 'info_legal',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // reservation
            if (0 === strpos($pathinfo, '/reservation') && preg_match('#^/reservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation')), array (  '_controller' => 'App\\Controller\\ReservationController::reservation',));
            }

            if (0 === strpos($pathinfo, '/reservation_')) {
                // reservation_user
                if (0 === strpos($pathinfo, '/reservation_user') && preg_match('#^/reservation_user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_user')), array (  '_controller' => 'App\\Controller\\ReservationController::reservation_user',));
                }

                // reservation_modif
                if (0 === strpos($pathinfo, '/reservation_modif') && preg_match('#^/reservation_modif/(?P<reservation>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_modif')), array (  '_controller' => 'App\\Controller\\ReservationController::reservation_modif',));
                }

                // reservation_remove
                if (0 === strpos($pathinfo, '/reservation_remove') && preg_match('#^/reservation_remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_remove')), array (  '_controller' => 'App\\Controller\\ReservationController::reservation_remove',));
                }

            }

            // register
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::register',  '_route' => 'register',);
            }

        }

        // login
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\UserController::login',  '_route' => 'login',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_login;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'login'));
            }

            return $ret;
        }
        not_login:

        // security_login
        if ('/security_login' === $pathinfo) {
            return array('_route' => 'security_login');
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
