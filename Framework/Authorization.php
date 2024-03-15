<?php

namespace Framework;

use Framework\Session;

class Authorization {
    /**
     * Check if the current logged is admin
     * 
     * @param int $recourceId
     * @return bool
     */
    public static function isOwner($recourceId) {
        $sessionUser = Session::get('user');

        if($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int) $sessionUser['id'];
            return $sessionUserId === $recourceId;
        }
        return false;
    }
}