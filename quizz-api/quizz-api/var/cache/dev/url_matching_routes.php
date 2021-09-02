<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/quizz/api/categories' => [[['_route' => 'get_categories', '_controller' => 'App\\Controller\\CategoryController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/games' => [[['_route' => 'game_index', '_controller' => 'App\\Controller\\GameController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/questions' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/questions/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['POST' => 0], null, false, false, null]],
        '/quizz/api/quizzes' => [[['_route' => 'quizz_index', '_controller' => 'App\\Controller\\QuizzController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/responses' => [[['_route' => 'response_index', '_controller' => 'App\\Controller\\ResponseController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/roles' => [[['_route' => 'role_index', '_controller' => 'App\\Controller\\RoleController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/roles/new' => [[['_route' => 'role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quizz/api/scores' => [[['_route' => 'score_index', '_controller' => 'App\\Controller\\ScoreController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/quizz/api/scores/new' => [[['_route' => 'score_new', '_controller' => 'App\\Controller\\ScoreController::new'], null, ['POST' => 0], null, false, false, null]],
        '/quizz/api/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::getAll'], null, ['GET' => 0], null, true, false, null]],
        '/api/login' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/quizz/api(?'
                    .'|/(?'
                        .'|categories/(?'
                            .'|([^/]++)(*:81)'
                            .'|add(*:91)'
                            .'|([^/]++)(?'
                                .'|/edit(*:114)'
                                .'|(*:122)'
                            .')'
                        .')'
                        .'|games/(?'
                            .'|([^/]++)(*:149)'
                            .'|new(*:160)'
                            .'|([^/]++)(?'
                                .'|/update_score(*:192)'
                                .'|(*:200)'
                            .')'
                        .')'
                        .'|qu(?'
                            .'|estions/([^/]++)(?'
                                .'|(*:234)'
                                .'|/edit(*:247)'
                                .'|(*:255)'
                            .')'
                            .'|izzes/(?'
                                .'|([^/]++)(*:281)'
                                .'|new(*:292)'
                                .'|([^/]++)(?'
                                    .'|/update(*:318)'
                                    .'|(*:326)'
                                .')'
                            .')'
                        .')'
                        .'|r(?'
                            .'|esponses/(?'
                                .'|([^/]++)(*:361)'
                                .'|new(*:372)'
                                .'|edit(*:384)'
                                .'|([^/]++)(*:400)'
                            .')'
                            .'|oles/([^/]++)(?'
                                .'|(*:425)'
                                .'|/edit(*:438)'
                                .'|(*:446)'
                            .')'
                        .')'
                        .'|scores/([^/]++)(?'
                            .'|(*:474)'
                            .'|/edit(*:487)'
                            .'|(*:495)'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)(*:521)'
                            .'|new(*:532)'
                            .'|([^/]++)(?'
                                .'|/edit(*:556)'
                                .'|(*:564)'
                            .')'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:603)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:634)'
                        .'|c(?'
                            .'|ontexts/(.+)(?:\\.([^/]++))?(*:673)'
                            .'|ategories(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:711)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:749)'
                                .')'
                            .')'
                        .')'
                        .'|scores(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:787)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:825)'
                            .')'
                        .')'
                        .'|qu(?'
                            .'|estions(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:868)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:906)'
                                .')'
                            .')'
                            .'|izzs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:941)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:979)'
                                .')'
                            .')'
                        .')'
                        .'|r(?'
                            .'|esponses(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1023)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1062)'
                                .')'
                            .')'
                            .'|oles(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1098)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1137)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1175)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1214)'
                            .')'
                        .')'
                        .'|games(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1251)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1290)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], [], ['POST' => 0], null, false, false, null]],
        114 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        122 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        149 => [[['_route' => 'game_show', '_controller' => 'App\\Controller\\GameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        160 => [[['_route' => 'game_new', '_controller' => 'App\\Controller\\GameController::new'], [], ['POST' => 0], null, false, false, null]],
        192 => [[['_route' => 'update_score', '_controller' => 'App\\Controller\\GameController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        200 => [[['_route' => 'game_delete', '_controller' => 'App\\Controller\\GameController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        234 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        255 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        281 => [[['_route' => 'quizz_show', '_controller' => 'App\\Controller\\QuizzController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'quizz_getBycategoryAndDifficulty', '_controller' => 'App\\Controller\\QuizzController::getBycategoryAndDifficulty'], [], ['POST' => 0], null, false, false, null]],
        318 => [[['_route' => 'quizz_edit', '_controller' => 'App\\Controller\\QuizzController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        326 => [[['_route' => 'quizz_delete', '_controller' => 'App\\Controller\\QuizzController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        361 => [[['_route' => 'response_show', '_controller' => 'App\\Controller\\ResponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        372 => [[['_route' => 'response_new', '_controller' => 'App\\Controller\\ResponseController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'response_edit', '_controller' => 'App\\Controller\\ResponseController::edit'], [], ['PUT' => 0], null, false, false, null]],
        400 => [[['_route' => 'response_delete', '_controller' => 'App\\Controller\\ResponseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        425 => [[['_route' => 'role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        446 => [[['_route' => 'role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        474 => [[['_route' => 'score_show', '_controller' => 'App\\Controller\\ScoreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        487 => [[['_route' => 'score_edit', '_controller' => 'App\\Controller\\ScoreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        495 => [[['_route' => 'score_delete', '_controller' => 'App\\Controller\\ScoreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        521 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], [], ['POST' => 0], null, false, false, null]],
        556 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        564 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        603 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        634 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        673 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        711 => [
            [['_route' => 'api_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        749 => [
            [['_route' => 'api_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        787 => [
            [['_route' => 'api_scores_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Score', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_scores_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Score', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        825 => [
            [['_route' => 'api_scores_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Score', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_scores_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Score', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_scores_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Score', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        868 => [
            [['_route' => 'api_questions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Question', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_questions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Question', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        906 => [
            [['_route' => 'api_questions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Question', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_questions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Question', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_questions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Question', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        941 => [
            [['_route' => 'api_quizzs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quizz', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_quizzs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quizz', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        979 => [
            [['_route' => 'api_quizzs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quizz', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_quizzs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quizz', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_quizzs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quizz', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1023 => [
            [['_route' => 'api_responses_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Response', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_responses_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Response', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1062 => [
            [['_route' => 'api_responses_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Response', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_responses_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Response', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_responses_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Response', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1098 => [
            [['_route' => 'api_roles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1137 => [
            [['_route' => 'api_roles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_roles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1175 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1214 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1251 => [
            [['_route' => 'api_games_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Game', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_games_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Game', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1290 => [
            [['_route' => 'api_games_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Game', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_games_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Game', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_games_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Game', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
