<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party API
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials and configurations
    | for third party apis.
    |
    */

    'user_import' => [
        'url' => env('USER_IMPORT_API_URL'),
        'params' => [
            'results' => env('USER_IMPORT_RECORD_LIMIT'),
            'nat' => env('USER_IMPORT_NATIONALITY'),
        ],
        'pagination' => [
            'items_per_page' => env('USER_IMPORT_PAGINATION_ITEMS_PER_PAGE'),
        ],
    ],

];
