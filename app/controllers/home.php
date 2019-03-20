<?php

namespace Fir\Controllers;

class Home extends Controller
{
    /**
     * This would be your http://localhost/project-name/ index page
     *
     * @return array
     */
    public function index()
    {
        if (isset($this->url[0]) && $this->url[0] == 'lang') {
            $this->updateLanguage($this->url[1]);
        }

        /**
         * The $data array stores all the data that is passed to the views
         */
        $data = [];

        $data['menu'] = $this->menu();

        return ['content' => $this->view->render($data, 'home/content')];
    }

    /**
     * @param $language string
     */
    private function updateLanguage($language)
    {
        setcookie('lang', $language, time() + (10 * 365 * 24 * 60 * 60), COOKIE_PATH);
        redirect();
    }

    /**
     * The menu view displayed on the Home page
     */
    private function menu()
    {
        $data['links'] = ['create', 'read', 'update', 'delete'];

        return $this->view->render($data, 'home/menu');
    }
}