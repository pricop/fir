<?php

/**
 * Check if the request is dynamic (ajax)
 *
 * @return  boolean
 */
if (!function_exists('isAjax')) {
    function isAjax()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }
}