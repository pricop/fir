<?php

namespace Fir\Controllers;

class Example extends Controller
{
    /**
     * This would be your https://localhost/project-name/example route
     *
     * @return array
     */
    public function index()
    {
        $data = [];
        return ['content' => $this->view->render($data, 'example/index')];
    }

    /**
     * This would be your https://localhost/project-name/example/create route
     *
     * @return array
     */
    public function create()
    {
        $data = [];
        return ['content' => $this->view->render($data, 'example/create')];
    }
    /**
     * This would be your https://localhost/project-name/example/read route
     *
     * @return array
     */
    public function read()
    {
        $data = [];
        return ['content' => $this->view->render($data, 'example/read')];
    }

    /**
     * This would be your https://localhost/project-name/example/update route
     *
     * @return array
     */
    public function update()
    {
        $data = [];
        return ['content' => $this->view->render($data, 'example/update')];
    }

    /**
     * This would be your https://localhost/project-name/example/delete route
     *
     * @return array
     */
    public function delete()
    {
        $data = [];
        return ['content' => $this->view->render($data, 'example/delete')];
    }
}