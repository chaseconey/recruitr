<?php

class AdminController extends BaseController
{

    protected $layout = 'master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->layout->view = View::make('admin.index');
    }

}
