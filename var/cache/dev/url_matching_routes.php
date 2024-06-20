<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/results' => [[['_route' => 'election_results', '_controller' => 'App\\Controller\\VoteController::electionResults'], null, ['GET' => 0], null, false, false, null]],
        '/machine/vote' => [[['_route' => 'machine_vote', '_controller' => 'App\\Controller\\VoteMachineController::votePage'], null, ['GET' => 0], null, false, false, null]],
        '/machine/results' => [[['_route' => 'machine_results', '_controller' => 'App\\Controller\\VoteMachineController::results'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/welcome' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\SecurityController::welcome'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/submitvote' => [[['_route' => 'submitvote', '_controller' => 'App\\Controller\\VoteController::submitvote'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vote' => [[['_route' => 'vote_page', '_controller' => 'App\\Controller\\VoteController::votePage'], null, null, null, false, false, null]],
        '/vote-confirmation' => [[['_route' => 'vote_confirmation', '_controller' => 'App\\Controller\\VoteController::voteConfirmation'], null, ['GET' => 0], null, false, false, null]],
        '/confirm' => [[['_route' => 'machine_confirm', '_controller' => 'App\\Controller\\VoteMachineController::confirmVote'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/submitvotes' => [[['_route' => 'machine_submitvote', '_controller' => 'App\\Controller\\VoteMachineController::submitvotes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/user([^/]++)(*:182)'
                .'|/candidate/([^/]++)(*:209)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        182 => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::show'], ['idelecteur'], null, null, false, true, null]],
        209 => [
            [['_route' => 'candidate_page', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
