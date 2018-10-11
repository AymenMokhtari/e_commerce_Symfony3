<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_page');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_page',);
        }

        // Produit_show
        if (0 === strpos($pathinfo, '/prodshow') && preg_match('#^/prodshow/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Produit_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::prodshowAction',));
        }

        // categorie_by_id
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_by_id')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::categorieidAction',));
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // rechercheProduits
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
            }

            // rechercheProduitsAdmin
            if ($pathinfo === '/recherchep') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::rechercheTraitementpAction',  '_route' => 'rechercheProduitsAdmin',);
            }

        }

        // contactus
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contactus',);
        }

        // aboutus
        if ($pathinfo === '/aboutus') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::aboutusAction',  '_route' => 'aboutus',);
        }

        // login
        if ($pathinfo === '/lg') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::adminpAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // modifierProduits
                if (0 === strpos($pathinfo, '/admin/modifierp') && preg_match('#^/admin/modifierp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::modifierpAction',));
                }

                if (0 === strpos($pathinfo, '/admin/delete')) {
                    // deletep
                    if (0 === strpos($pathinfo, '/admin/deletep') && preg_match('#^/admin/deletep/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletep')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::deletepAction',));
                    }

                    // deletec
                    if (0 === strpos($pathinfo, '/admin/deletec') && preg_match('#^/admin/deletec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletec')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::deletecAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/list')) {
                    // list_admin
                    if ($pathinfo === '/admin/listpa') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::listpaAction',  '_route' => 'list_admin',);
                    }

                    // list_adminc
                    if ($pathinfo === '/admin/listca') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::showcatAction',  '_route' => 'list_adminc',);
                    }

                }

                // new_product
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'new_product');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::createpAction',  '_route' => 'new_product',);
                }

                // new_categorie
                if ($pathinfo === '/admin/newCategorie') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::createcAction',  '_route' => 'new_categorie',);
                }

                // show_all
                if ($pathinfo === '/admin/showall') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::showAction',  '_route' => 'show_all',);
                }

                if (0 === strpos($pathinfo, '/admin/topvente_')) {
                    // topvente_activ
                    if (0 === strpos($pathinfo, '/admin/topvente_activ') && preg_match('#^/admin/topvente_activ/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topvente_activ')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::topventeacAction',));
                    }

                    // topvente_deac
                    if (0 === strpos($pathinfo, '/admin/topvente_deac') && preg_match('#^/admin/topvente_deac/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'topvente_deac')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::topventedecAction',));
                    }

                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
