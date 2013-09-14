<?php

class LoginController extends BaseController {

    public function showLogin()
    {
        // show the form
        return View::make('login');
    }

    public function doLogin()
    {
        // process the form
    }
}