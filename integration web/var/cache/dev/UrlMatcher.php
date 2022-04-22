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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'abonne', '_controller' => 'App\\Controller\\AbonneController::index'], null, null, null, false, false, null],
            [['_route' => 'user', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null],
        ],
        '/Afficheabo' => [[['_route' => 'Afficheabo', '_controller' => 'App\\Controller\\AbonneController::Afficheabo'], null, null, null, false, false, null]],
        '/Addabonne' => [[['_route' => 'Addabonne', '_controller' => 'App\\Controller\\AbonneController::Add'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\AbonneController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\AbonneController::logout'], null, null, null, false, false, null]],
        '/addAbonneJSON/new' => [[['_route' => 'addAbonneJSON', '_controller' => 'App\\Controller\\AbonneController::addAbonneJSON'], null, null, null, false, false, null]],
        '/connexionJSON' => [[['_route' => 'security_login_json', '_controller' => 'App\\Controller\\AbonneController::loginJSON'], null, null, null, false, false, null]],
        '/addStripeJSON' => [[['_route' => 'addStripeJSON', '_controller' => 'App\\Controller\\AbonneController::addStripeJSON'], null, null, null, false, false, null]],
        '/abonnement' => [[['_route' => 'abonnement', '_controller' => 'App\\Controller\\AbonnementController::index'], null, null, null, false, false, null]],
        '/addabonnement' => [[['_route' => 'addabonnement', '_controller' => 'App\\Controller\\AbonnementController::AddAbonnement'], null, null, null, false, false, null]],
        '/mesabonnements' => [[['_route' => 'mesabonnements', '_controller' => 'App\\Controller\\AbonnementController::MesAbonnements'], null, null, null, false, false, null]],
        '/Afficheabonnement' => [[['_route' => 'Afficheabonnement', '_controller' => 'App\\Controller\\AbonnementController::Afficheabonnement'], null, null, null, false, false, null]],
        '/admin_abonnement' => [[['_route' => 'admin_abonnement', '_controller' => 'App\\Controller\\AbonnementController::admin_abonnement'], null, null, null, false, false, null]],
        '/addAbonnementJSON' => [[['_route' => 'addAbonnementJSON', '_controller' => 'App\\Controller\\AbonnementController::addAbonnementJSON'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/avisclient' => [[['_route' => 'avisclient', '_controller' => 'App\\Controller\\AvisclientController::index'], null, null, null, false, false, null]],
        '/addRJSON/new' => [[['_route' => 'addRJSON', '_controller' => 'App\\Controller\\AvisclientController::addRJSON'], null, null, null, false, false, null]],
        '/AvisAdd' => [[['_route' => 'AvisAdd', '_controller' => 'App\\Controller\\AvisclientController::AvisAdd'], null, null, null, false, false, null]],
        '/afficherRa' => [[['_route' => 'afficherRa', '_controller' => 'App\\Controller\\AvisclientController::afficherRa'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/afficherCatjsonTwig' => [[['_route' => 'afficherCatjsonTwig', '_controller' => 'App\\Controller\\CategorieController::afficherCatjsonTwig'], null, null, null, false, false, null]],
        '/addCatJSON/new' => [[['_route' => 'addCatJSON', '_controller' => 'App\\Controller\\CategorieController::addCatJSON'], null, null, null, false, false, null]],
        '/afficherCat' => [[['_route' => 'afficherCat', '_controller' => 'App\\Controller\\CategorieController::afficherCat'], null, null, null, false, false, null]],
        '/addCategorie' => [[['_route' => 'addCategorie', '_controller' => 'App\\Controller\\CategorieController::addCategorie'], null, null, null, false, false, null]],
        '/cellule' => [[['_route' => 'cellule', '_controller' => 'App\\Controller\\CelluleController::index'], null, null, null, false, false, null]],
        '/ListeCellule' => [[['_route' => 'ListeCellule', '_controller' => 'App\\Controller\\CelluleController::ListeCellule'], null, null, null, false, false, null]],
        '/addCellule' => [[['_route' => 'addCellule', '_controller' => 'App\\Controller\\CelluleController::addCellule'], null, null, null, false, false, null]],
        '/afficherjsonCellule' => [[['_route' => 'afficherjsonCellule', '_controller' => 'App\\Controller\\CelluleController::afficherjson'], null, null, null, false, false, null]],
        '/addCelluleJson/new' => [[['_route' => 'addCelluleJson', '_controller' => 'App\\Controller\\CelluleController::addCelluleJson'], null, null, null, false, false, null]],
        '/cinema' => [[['_route' => 'cinema', '_controller' => 'App\\Controller\\CinemaController::index'], null, null, null, false, false, null]],
        '/afficherCinemajsonTwig' => [[['_route' => 'afficherCinemajsonTwig', '_controller' => 'App\\Controller\\CinemaController::afficherCinemajsonTwig'], null, null, null, false, false, null]],
        '/addCinemaJSON/new' => [[['_route' => 'addCinemaJSON', '_controller' => 'App\\Controller\\CinemaController::addCinemaJSON'], null, null, null, false, false, null]],
        '/afficherr' => [[['_route' => 'afficherr', '_controller' => 'App\\Controller\\CinemaController::afficherr'], null, null, null, false, false, null]],
        '/affichers' => [[['_route' => 'affichers', '_controller' => 'App\\Controller\\CinemaController::affichers'], null, null, null, false, false, null]],
        '/affichercin' => [[['_route' => 'affichercin', '_controller' => 'App\\Controller\\CinemaController::affichercin'], null, null, null, false, false, null]],
        '/trif' => [[['_route' => 'trif', '_controller' => 'App\\Controller\\CinemaController::trif'], null, null, null, false, false, null]],
        '/recherchecinema' => [[['_route' => 'recherchecinema', '_controller' => 'App\\Controller\\CinemaController::recherchecinema'], null, null, null, false, false, null]],
        '/recherchecinema1' => [[['_route' => 'recherchecinema1', '_controller' => 'App\\Controller\\CinemaController::recherchecinema1'], null, null, null, false, false, null]],
        '/addCinema' => [[['_route' => 'addCinema', '_controller' => 'App\\Controller\\CinemaController::addStudent'], null, null, null, false, false, null]],
        '/contactJson' => [[['_route' => 'contactJson', '_controller' => 'App\\Controller\\CinemaController::contactJson'], null, null, null, false, false, null]],
        '/recherche_cin' => [[['_route' => 'recherche_cin', '_controller' => 'App\\Controller\\CinemaController::recherche_cin'], null, null, null, false, false, null]],
        '/recherche_film_date' => [[['_route' => 'recherche_film_date', '_controller' => 'App\\Controller\\CinemaController::recherche_film_date'], null, null, null, false, false, null]],
        '/conge' => [[['_route' => 'conge', '_controller' => 'App\\Controller\\CongeController::index'], null, null, null, false, false, null]],
        '/afficherc' => [[['_route' => 'afficherc', '_controller' => 'App\\Controller\\CongeController::affichersc'], null, null, null, false, false, null]],
        '/afficherc2' => [[['_route' => 'afficherc2', '_controller' => 'App\\Controller\\CongeController::affichersc2'], null, null, null, false, false, null]],
        '/addConge' => [[['_route' => 'addConge', '_controller' => 'App\\Controller\\CongeController::addConge'], null, null, null, false, false, null]],
        '/tricon' => [[['_route' => 'tricon', '_controller' => 'App\\Controller\\CongeController::tricon'], null, null, null, false, false, null]],
        '/afficherjsonTwigConge' => [[['_route' => 'afficherjsonTwigConge', '_controller' => 'App\\Controller\\CongeController::afficherjsonTwigConge'], null, null, null, false, false, null]],
        '/addJSONConge/new' => [[['_route' => 'addJSONConge', '_controller' => 'App\\Controller\\CongeController::addJSONConge'], null, null, null, false, false, null]],
        '/pdfActionc' => [[['_route' => 'pdfActionc', '_controller' => 'App\\Controller\\CongeController::pdfActionc'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contactautoconf' => [[['_route' => 'contactautoconf', '_controller' => 'App\\Controller\\ContactController::contactautoconf'], null, null, null, false, false, null]],
        '/contactautoref' => [[['_route' => 'contactautoref', '_controller' => 'App\\Controller\\ContactController::contactautoref'], null, null, null, false, false, null]],
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, true, false, null]],
        '/employe' => [[['_route' => 'employe', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
        '/afficher' => [[['_route' => 'afficher', '_controller' => 'App\\Controller\\EmployeController::affichers'], null, null, null, false, false, null]],
        '/addEmploye' => [[['_route' => 'addEmploye', '_controller' => 'App\\Controller\\EmployeController::addEmploye'], null, null, null, false, false, null]],
        '/searchemp' => [[['_route' => 'searchemp', '_controller' => 'App\\Controller\\EmployeController::searchemp'], null, null, null, false, false, null]],
        '/afficherjsonTwigEmploye' => [[['_route' => 'afficherjsonTwigEmploye', '_controller' => 'App\\Controller\\EmployeController::afficherjsonTwigEmploye'], null, null, null, false, false, null]],
        '/addJSONEmploye/new' => [[['_route' => 'addJSONEmploye', '_controller' => 'App\\Controller\\EmployeController::addJSONEmploye'], null, null, null, false, false, null]],
        '/pdfAction' => [[['_route' => 'pdfAction', '_controller' => 'App\\Controller\\EmployeController::pdfAction'], null, null, null, true, false, null]],
        '/equipement' => [[['_route' => 'equipement', '_controller' => 'App\\Controller\\EquipementController::index'], null, null, null, false, false, null]],
        '/listE' => [[['_route' => 'listE', '_controller' => 'App\\Controller\\EquipementController::list'], null, null, null, false, false, null]],
        '/addE' => [[['_route' => 'addE', '_controller' => 'App\\Controller\\EquipementController::addE'], null, null, null, false, false, null]],
        '/searchE' => [[['_route' => 'searchE', '_controller' => 'App\\Controller\\EquipementController::searchE'], null, null, null, false, false, null]],
        '/triE' => [[['_route' => 'triE', '_controller' => 'App\\Controller\\EquipementController::triE'], null, null, null, false, false, null]],
        '/rechercherec' => [[['_route' => 'rechercherec', '_controller' => 'App\\Controller\\EquipementController::recherche'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'eventIndex', '_controller' => 'App\\Controller\\EvenementController::showAction'], null, null, null, false, false, null]],
        '/eventBack' => [[['_route' => 'eventBack', '_controller' => 'App\\Controller\\EvenementController::showBackAction'], null, null, null, false, false, null]],
        '/addEvent' => [[['_route' => 'AjoutEvent', '_controller' => 'App\\Controller\\EvenementController::addEventAction'], null, null, null, false, false, null]],
        '/allEvents' => [[['_route' => 'allEvents', '_controller' => 'App\\Controller\\EvenementController::allEvents'], null, null, null, false, false, null]],
        '/addevent/new' => [[['_route' => 'addevent', '_controller' => 'App\\Controller\\EvenementController::addevent'], null, null, null, false, false, null]],
        '/film' => [[['_route' => 'film', '_controller' => 'App\\Controller\\FilmController::index'], null, null, null, false, false, null]],
        '/afficherf' => [[['_route' => 'afficherf', '_controller' => 'App\\Controller\\FilmController::afficherFilm'], null, null, null, false, false, null]],
        '/afficherjson' => [[['_route' => 'afficherjson', '_controller' => 'App\\Controller\\FilmController::afficherjson'], null, null, null, false, false, null]],
        '/addFilmJson' => [[['_route' => 'addFilmJson', '_controller' => 'App\\Controller\\FilmController::addFilmJson'], null, null, null, false, false, null]],
        '/afficherjsonTwig' => [[['_route' => 'afficherjsonTwig', '_controller' => 'App\\Controller\\FilmController::afficherjsonTwig'], null, null, null, false, false, null]],
        '/addJSON/new' => [[['_route' => 'addJSON', '_controller' => 'App\\Controller\\FilmController::addJSON'], null, null, null, false, false, null]],
        '/afficherCatejsonTwig' => [[['_route' => 'afficherCatejsonTwig', '_controller' => 'App\\Controller\\FilmController::afficherCatejsonTwig'], null, null, null, false, false, null]],
        '/addFilm' => [[['_route' => 'addFilm', '_controller' => 'App\\Controller\\FilmController::addFilm'], null, null, null, false, false, null]],
        '/recherchefilm' => [[['_route' => 'recherchefilm', '_controller' => 'App\\Controller\\FilmController::recherchefilm'], null, null, null, false, false, null]],
        '/cal' => [[['_route' => 'cal', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'plat', '_controller' => 'App\\Controller\\PlatController::index'], null, null, null, false, false, null]],
        '/afficherPlat' => [[['_route' => 'afficherPlat', '_controller' => 'App\\Controller\\PlatController::afficherp'], null, null, null, false, false, null]],
        '/addPlat' => [[['_route' => 'addPlat', '_controller' => 'App\\Controller\\PlatController::addPlat'], null, null, null, false, false, null]],
        '/afficherPlatFront' => [[['_route' => 'afficherPlatFront', '_controller' => 'App\\Controller\\PlatController::afficherPlatFront'], null, null, null, false, false, null]],
        '/afficherPlatjsonTwig' => [[['_route' => 'afficherPlatjsonTwig', '_controller' => 'App\\Controller\\PlatController::afficherPlatjsonTwig'], null, null, null, false, false, null]],
        '/addPlatJSON/new' => [[['_route' => 'addPlatJSON', '_controller' => 'App\\Controller\\PlatController::addPlatJSON'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::displayAction'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ReclamationController::list1'], null, null, null, false, false, null]],
        '/listrec' => [[['_route' => 'listrec', '_controller' => 'App\\Controller\\ReclamationController::list'], null, null, null, false, false, null]],
        '/addrec' => [[['_route' => 'addrec', '_controller' => 'App\\Controller\\ReclamationController::addrec'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\ReclamationController::search'], null, null, null, false, false, null]],
        '/trirec' => [[['_route' => 'trirec', '_controller' => 'App\\Controller\\ReclamationController::tri'], null, null, null, false, false, null]],
        '/notif' => [[['_route' => 'notif', '_controller' => 'App\\Controller\\ReclamationController::notif'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'statistiques', '_controller' => 'App\\Controller\\ReclamationController::statistiques'], null, null, null, false, false, null]],
        '/listmob' => [[['_route' => 'listmob', '_controller' => 'App\\Controller\\ReclamationController::listmob'], null, null, null, false, false, null]],
        '/addmob' => [[['_route' => 'addmob', '_controller' => 'App\\Controller\\ReclamationController::addmob'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type/abonnement' => [[['_route' => 'type_abonnement', '_controller' => 'App\\Controller\\TypeAbonnementController::index'], null, null, null, false, false, null]],
        '/AddTypeAbonnement' => [[['_route' => 'AddTypeAbonnement', '_controller' => 'App\\Controller\\TypeAbonnementController::AddTypeAbonnement'], null, null, null, false, false, null]],
        '/ListTypeAbonnement' => [[['_route' => 'ListTypeAbonnement', '_controller' => 'App\\Controller\\TypeAbonnementController::ListTypeAbo'], null, null, null, false, false, null]],
        '/AfficheTypeAbonnement' => [[['_route' => 'AfficheTypeAbonnement', '_controller' => 'App\\Controller\\TypeAbonnementController::Afficheabo'], null, null, null, false, false, null]],
        '/TypeAboJSON' => [[['_route' => 'TypeAboJSON', '_controller' => 'App\\Controller\\TypeAbonnementController::getTypeAbonnements'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\reservationController::index'], null, null, null, false, false, null]],
        '/affReservation' => [[['_route' => 'affReservation', '_controller' => 'App\\Controller\\reservationController::afficheReservation'], null, null, null, false, false, null]],
        '/addReservation' => [[['_route' => 'addResrvation', '_controller' => 'App\\Controller\\reservationController::addReservation'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\reservationController::recherche'], null, null, null, false, false, null]],
        '/tri' => [[['_route' => 'tri', '_controller' => 'App\\Controller\\reservationController::tri'], null, null, null, false, false, null]],
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
                .'|/Supp/([^/]++)(?'
                    .'|(*:186)'
                .')'
                .'|/update(?'
                    .'|Abo/([^/]++)(*:217)'
                    .'|C(?'
                        .'|at(?'
                            .'|JSON/([^/]++)(*:247)'
                            .'|egorie/([^/]++)(*:270)'
                        .')'
                        .'|ellule/([^/]++)(*:294)'
                        .'|inema(?'
                            .'|JSON/([^/]++)(*:323)'
                            .'|/([^/]++)(*:340)'
                        .')'
                        .'|onge/([^/]++)(*:362)'
                    .')'
                    .'|E(?'
                        .'|mploye(?'
                            .'|/([^/]++)(*:393)'
                            .'|JSON/([^/]++)(*:414)'
                        .')'
                        .'|venement/([^/]++)(*:440)'
                    .')'
                    .'|/([^/]++)(*:458)'
                    .'|Film(?'
                        .'|JSON/([^/]++)(*:486)'
                        .'|/([^/]++)(*:503)'
                    .')'
                    .'|Plat(?'
                        .'|/([^/]++)(*:528)'
                        .'|JSON/([^/]++)(*:549)'
                    .')'
                    .'|mob/([^/]++)(*:570)'
                    .'|TypeAbo/([^/]++)(*:594)'
                .')'
                .'|/a(?'
                    .'|pi/([^/]++)/edit(*:624)'
                    .'|ddrese/([^/]++)(*:647)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:677)'
                    .'|/edit(*:690)'
                    .'|(*:698)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:733)'
                        .'|remove/([^/]++)(*:756)'
                    .')'
                    .'|df/([^/]++)(?'
                        .'|/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:815)'
                        .'|(*:823)'
                    .')'
                .')'
                .'|/delet(?'
                    .'|e(?'
                        .'|C(?'
                            .'|at(?'
                                .'|JSON/([^/]++)(*:868)'
                                .'|egorie/([^/]++)(*:891)'
                            .')'
                            .'|ellule/([^/]++)(*:915)'
                            .'|inema(?'
                                .'|JSON/([^/]++)(*:944)'
                                .'|/([^/]++)(*:961)'
                            .')'
                            .'|ongeJSON/([^/]++)(*:987)'
                        .')'
                        .'|/([^/]++)(*:1005)'
                        .'|c(?'
                            .'|/([^/]++)(*:1027)'
                            .'|s/([^/]++)(*:1046)'
                        .')'
                        .'|em/([^/]++)(*:1067)'
                        .'|EmployeJSON/([^/]++)(*:1096)'
                        .'|FilmJSON/([^/]++)(*:1122)'
                        .'|f/([^/]++)(*:1141)'
                        .'|Plat(?'
                            .'|/([^/]++)(*:1166)'
                            .'|JSON/([^/]++)(*:1188)'
                        .')'
                        .'|Reservation/([^/]++)(*:1218)'
                    .')'
                    .'|/([^/]++)(*:1237)'
                .')'
                .'|/JSONEmployeAffiche/([^/]++)(*:1275)'
                .'|/s(?'
                    .'|upp(?'
                        .'|e/([^/]++)(*:1305)'
                        .'|rec/([^/]++)(*:1326)'
                        .'|mob/([^/]++)(*:1347)'
                    .')'
                    .'|earch(?'
                        .'|FilmJSON/([^/]++)(*:1382)'
                        .'|CateJSON/([^/]++)(*:1408)'
                    .')'
                    .'|howFront/([^/]++)(*:1435)'
                .')'
                .'|/ParticiperEv/([^/]++)(*:1467)'
                .'|/event/QuitterEv/([^/]++)(*:1501)'
                .'|/findeventAction/([^/]++)(*:1535)'
                .'|/TriParategorie/([^/]++)(*:1568)'
                .'|/CalculPlatParCategorie/([^/]++)(*:1609)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [
            [['_route' => 'deleteabonne', '_controller' => 'App\\Controller\\AbonneController::Delete'], ['id'], null, null, false, true, null],
            [['_route' => 'DeleteAbonnement', '_controller' => 'App\\Controller\\AbonnementController::Delete'], ['id'], null, null, false, true, null],
            [['_route' => 'd', '_controller' => 'App\\Controller\\TypeAbonnementController::Delete'], ['id'], null, null, false, true, null],
        ],
        217 => [[['_route' => 'validerAbo', '_controller' => 'App\\Controller\\AbonnementController::updateAbonnement'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'updateCatJSON', '_controller' => 'App\\Controller\\CategorieController::updateCatJSON'], ['idc'], null, null, false, true, null]],
        270 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\CategorieController::updateCategorie'], ['idc'], null, null, false, true, null]],
        294 => [[['_route' => 'updateCellule', '_controller' => 'App\\Controller\\CelluleController::updateCellule'], ['idcellule'], null, null, false, true, null]],
        323 => [[['_route' => 'updateCinemaJSON', '_controller' => 'App\\Controller\\CinemaController::updateCinemaJSON'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'updateCinema', '_controller' => 'App\\Controller\\CinemaController::updateCinema'], ['num'], null, null, false, true, null]],
        362 => [[['_route' => 'updateConge', '_controller' => 'App\\Controller\\CongeController::updateEmploye'], ['idconge'], null, null, false, true, null]],
        393 => [[['_route' => 'updateEmploye', '_controller' => 'App\\Controller\\EmployeController::updateEmploye'], ['idemp'], null, null, false, true, null]],
        414 => [[['_route' => 'updateEmployeJSON', '_controller' => 'App\\Controller\\EmployeController::updateEmployeJSON'], ['idemp'], null, null, false, true, null]],
        440 => [[['_route' => 'updateEvenement', '_controller' => 'App\\Controller\\EvenementController::updatEeventAction'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'update', '_controller' => 'App\\Controller\\EquipementController::update'], ['id'], null, null, false, true, null]],
        486 => [[['_route' => 'updateFilmJSON', '_controller' => 'App\\Controller\\FilmController::updateFilmJSON'], ['id_film'], null, null, false, true, null]],
        503 => [[['_route' => 'updateFilm', '_controller' => 'App\\Controller\\FilmController::updateFilm'], ['id_film'], null, null, false, true, null]],
        528 => [[['_route' => 'updatePlat', '_controller' => 'App\\Controller\\PlatController::updatePlat'], ['idp'], null, null, false, true, null]],
        549 => [[['_route' => 'updatePlatJSON', '_controller' => 'App\\Controller\\PlatController::updatePlatJSON'], ['idp'], null, null, false, true, null]],
        570 => [[['_route' => 'updatemob', '_controller' => 'App\\Controller\\ReclamationController::update'], ['idrec'], null, null, false, true, null]],
        594 => [[['_route' => 'updateTypeAbo', '_controller' => 'App\\Controller\\TypeAbonnementController::updateTypeAbonnement'], ['id'], null, null, false, true, null]],
        624 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        647 => [[['_route' => 'addrese', '_controller' => 'App\\Controller\\CinemaController::addrese'], ['num'], null, null, false, true, null]],
        677 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['title'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['title'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['title'], ['DELETE' => 0], null, false, true, null]],
        733 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        756 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        815 => [[['_route' => 'event_pdf', '_controller' => 'App\\Controller\\EvenementController::pdf'], ['nom', 'Date', 'Date_Fin', 'capacite', 'emplacement'], null, null, false, true, null]],
        823 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\reservationController::pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        868 => [[['_route' => 'deleteCatJSON', '_controller' => 'App\\Controller\\CategorieController::deletePlatJSON'], ['idc'], null, null, false, true, null]],
        891 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieController::deleteCateorie'], ['idc'], null, null, false, true, null]],
        915 => [[['_route' => 'deleteCellule', '_controller' => 'App\\Controller\\CelluleController::deleteCellule'], ['id'], null, null, false, true, null]],
        944 => [[['_route' => 'deleteCinemaJSON', '_controller' => 'App\\Controller\\CinemaController::deleteCinemaJSON'], ['id'], null, null, false, true, null]],
        961 => [[['_route' => 'deleteCinema', '_controller' => 'App\\Controller\\CinemaController::deleteCinema'], ['num'], null, null, false, true, null]],
        987 => [[['_route' => 'deleteCongeJSON', '_controller' => 'App\\Controller\\CongeController::deleteCongeJSON'], ['id'], null, null, false, true, null]],
        1005 => [[['_route' => 'deleteComment', '_controller' => 'App\\Controller\\CommentController::deleteCommentAction'], ['id'], null, null, false, true, null]],
        1027 => [[['_route' => 'deletec', '_controller' => 'App\\Controller\\CongeController::delete'], ['idconge'], null, null, false, true, null]],
        1046 => [[['_route' => 'deletecs', '_controller' => 'App\\Controller\\CongeController::deletes'], ['idconge'], null, null, false, true, null]],
        1067 => [[['_route' => 'deleteem', '_controller' => 'App\\Controller\\EmployeController::deleteem'], ['idemp'], null, null, false, true, null]],
        1096 => [[['_route' => 'deleteEmployeJSON', '_controller' => 'App\\Controller\\EmployeController::deleteEmployeJSON'], ['idemp'], null, null, false, true, null]],
        1122 => [[['_route' => 'deleteFilmJSON', '_controller' => 'App\\Controller\\FilmController::deleteFilmJSON'], ['id'], null, null, false, true, null]],
        1141 => [[['_route' => 'deletef', '_controller' => 'App\\Controller\\FilmController::deleteFilm'], ['id_film'], null, null, false, true, null]],
        1166 => [[['_route' => 'deletePlat', '_controller' => 'App\\Controller\\PlatController::delete'], ['idp'], null, null, false, true, null]],
        1188 => [[['_route' => 'deletePlatJSON', '_controller' => 'App\\Controller\\PlatController::deletePlatJSON'], ['idp'], null, null, false, true, null]],
        1218 => [[['_route' => 'deleteReservation', '_controller' => 'App\\Controller\\reservationController::deleteReservation'], ['id'], null, null, false, true, null]],
        1237 => [[['_route' => 'deleteEvenement', '_controller' => 'App\\Controller\\EvenementController::deleteEventAction'], ['id'], null, null, false, true, null]],
        1275 => [[['_route' => 'SONEmployeAffiche', '_controller' => 'App\\Controller\\EmployeController::EmployeId'], ['idemp'], null, null, false, true, null]],
        1305 => [[['_route' => 'suppe', '_controller' => 'App\\Controller\\EquipementController::supprec'], ['id'], null, null, false, true, null]],
        1326 => [[['_route' => 'supprec', '_controller' => 'App\\Controller\\ReclamationController::supprec'], ['idrec'], null, null, false, true, null]],
        1347 => [[['_route' => 'suppmob', '_controller' => 'App\\Controller\\ReclamationController::suppmob'], ['idrec'], null, null, false, true, null]],
        1382 => [[['_route' => 'searchFilmJSON', '_controller' => 'App\\Controller\\FilmController::searchFilmJSON'], ['nomFilm'], null, null, false, true, null]],
        1408 => [[['_route' => 'searchCateJSON', '_controller' => 'App\\Controller\\FilmController::searchCateJSON'], ['nomFilm'], null, null, false, true, null]],
        1435 => [[['_route' => 'showFront', '_controller' => 'App\\Controller\\PlatController::showPlatByIdFront'], ['idp'], null, null, false, true, null]],
        1467 => [[['_route' => 'ParticiperEv', '_controller' => 'App\\Controller\\EvenementController::ParticiperAction'], ['id'], null, null, false, true, null]],
        1501 => [[['_route' => 'QuitterEv', '_controller' => 'App\\Controller\\EvenementController::QuitterEvAction'], ['id'], null, null, false, true, null]],
        1535 => [[['_route' => 'findeventAction', '_controller' => 'App\\Controller\\EvenementController::findeventAction'], ['id'], null, null, false, true, null]],
        1568 => [[['_route' => 'TriParategorie', '_controller' => 'App\\Controller\\PlatController::TriParategorie'], ['idc'], null, null, false, true, null]],
        1609 => [
            [['_route' => 'CalculPlatParCategorie', '_controller' => 'App\\Controller\\PlatController::CalculPlatParCategorie'], ['idc'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
