<?php
/**
 * @package MihaiStefanescu\TmdbApi
 * @author Mihai Stefanescu <mihai@invata-programare.ro>
 * @copyright (c) 2024, Mihai Stefanescu
 */
return [
    /*
     * Api key
     */
    'api_key' => '',

    /**
     * Client options
     */
    'options' => [
        /**
         * Use https
         */
        'secure' => true,

        /*
         * Cache
         */
        'cache' => [
            'enabled' => true,
            // Keep the path empty or remove it entirely to default to storage/tmdb
            'path' => storage_path('tmdb')
        ],

        /*
         * Log
         */
        'log' => [
            'enabled' => true,
            // Keep the path empty or remove it entirely to default to storage/logs/tmdb.log
            'path' => storage_path('logs/tmdb.log')
        ]
    ],
];
