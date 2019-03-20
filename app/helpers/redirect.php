<?php

/**
 * Redirect to an internal route
 *
 * @param   string  $path   The internal path to redirect
 */
function redirect($path = null)
{
    header('Location: ' . URL_PATH . '/' . $path);

    /**
     * Exit is required in order to stop executing any extra code after the redirect call
     * It also allows passing on session variables to the redirected page by preventing extra code to be executed
     */
    exit;
}