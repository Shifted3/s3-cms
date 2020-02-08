<?php

    /**
     * Shifted 3 Framework
     *
     * File Description:
     * These are framework specific settings
     *
     * WARNING::  Don't be a dick.
     *
     */

    return [
        'settings' => [
            'displayErrorDetails' => true, // set to false in production
            'addContentLengthHeader' => false,

            'project' => [
                'name' => 'Shifted 3 Framework',
                'version' => '2.1',
                'commit_hash' => exec('git rev-parse --short HEAD'),
            ],

            // JSON Web Token config (For API Implementation Later)
            'jwt' => [
                'secret' => 'KkMQrEbHqPmqMGD595bH46BcvXvhMbCx'
            ]
        ],
    ];