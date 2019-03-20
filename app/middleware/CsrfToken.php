<?php

namespace Fir\Middleware;

use Fir\Languages\Language as Language;

/**
 * Class CsrfToken ensures that all POST requested have a valid CSRF Token
 */
class CsrfToken
{

    public function __construct()
    {
        $this->generateToken();
        $this->validateToken();
    }

    /**
     * Generate and set a random token
     */
    private function generateToken()
    {
        // If there isn't any sessions set, or if the session is empty
        if (!isset($_SESSION['token_id']) || empty($_SESSION['token_id'])) {
            // Generate a random session token
            $token_id = hash('sha256', substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10));

            // Store the token in the session
            $_SESSION['token_id'] = $token_id;
        }
    }

    /**
     * Validate the CSRF token
     */
    private function validateToken()
    {
        if (isset($_POST) && !empty($_POST)) {
            if ($_POST['token_id'] != $_SESSION['token_id']) {
                $lang = (new Language())->set();

                $_SESSION['message'][] = ['error', $lang['token_mismatch']];

                // Redirect to the requested location
                header("Location: " . URL_PATH . '/' . $_GET['url']);

                // Prevent anything else from executing on the page
                exit;
            }
        }
    }
}