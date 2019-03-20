<?php

namespace Fir\Middleware;

/**
 * The App middleware which run services before the core software is being executed
 */
class Middleware
{
    /**
     * @var array   The list of routes to be excluded from being affected by middleware
     *              Array Map: Key(Middleware) => Array(Routes)
     */
    protected $except = [
        'CsrfToken' =>      []
    ];

    /**
     * Middleware to be loaded
     * @var array
     */
    private $middleware = [];

    public function __construct()
    {
        $this->getAll();
        foreach ($this->middleware as $name) {
            // If a middleware exception exists
            if (isset($this->except[$name])) {
                foreach ($this->except[$name] as $route) {
                    // If the route has match anything rule (*)
                    if (substr($route, -1) == '*') {
                        // If the current path matches a route exception
                        if (stripos($_GET['url'], str_replace('*', '', $route)) === 0) {
                            return;
                        }
                    } // If the current path matches a route exception
                    elseif (isset($_GET['url']) && $_GET['url'] == $route) {
                        return;
                    }
                }
            }
            require_once(__DIR__ . '/../middleware/' . $name . '.php');

            $class = 'Fir\Middleware\\' . $name;

            new $class;
        }
    }

    private function getAll()
    {
        if ($handle = opendir(__DIR__ . '/../middleware/')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != '.' && $entry != '..' && substr($entry, -4, 4) == '.php') {
                    $name = pathinfo($entry);
                    $this->middleware[] = $name['filename'];
                }
            }
            closedir($handle);
        }
    }
}