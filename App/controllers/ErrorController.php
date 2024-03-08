<?php 

namespace App\Controllers;

class ErrorController {

    /**
     * 404 not found error
     * 
     * @return void
     */

    public static function notFound($message = 'Rosource not found') {

        http_response_code(404);
        loadView('error', [
                'status' => '404',
                'message' => $message
        ]);
    }

    /**
     * 404 unauthorized error
     * 
     * @return void
     */

    public static function unauthorized($message = 'You are not authorized to view this resource') {

        http_response_code(403);
        loadView('error', [
                'status' => '403',
                'message' => $message
        ]);
    }
}