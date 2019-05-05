<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/newuser' => [[['_route' => 'app_new_user', '_controller' => 'App\\Controller\\AdminController::newUser'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomeController::homepage'], null, null, null, false, false, null]],
            '/post' => [[['_route' => 'app_posts', '_controller' => 'App\\Controller\\PostController::allPost'], null, null, null, false, false, null]],
            '/post/new' => [[['_route' => 'new_post', '_controller' => 'App\\Controller\\PostController::newPost'], null, null, null, false, false, null]],
            '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/user/([^/]++)/(?'
                        .'|edit(*:35)'
                        .'|delete(*:48)'
                    .')'
                    .'|/post/([^/]++)/(?'
                        .'|delete(*:80)'
                        .'|edit(*:91)'
                        .'|show(*:102)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:142)'
                        .'|wdt/([^/]++)(*:162)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:208)'
                                .'|router(*:222)'
                                .'|exception(?'
                                    .'|(*:242)'
                                    .'|\\.css(*:255)'
                                .')'
                            .')'
                            .'|(*:265)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
            48 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, false, null]],
            80 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::deletePost'], ['id'], null, null, false, false, null]],
            91 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], null, null, false, false, null]],
            102 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::showPost'], ['id'], null, null, false, false, null]],
            142 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            162 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            208 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            222 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            242 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            255 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            265 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
